define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'morris',
    'models/account-model',
    'collections/transactions-collection'
], function($, _, Backbone, Handlebars, Morris, AccountModel, Transactions){
    var AccountsView = Backbone.View.extend({
        events: {
            'change select.time': 'renderGraphs',
            'click .account-dropdown': 'toggleDetails',
        },
        has_graphs: false,
        model: AccountModel,
        initialize: function(options){
            _.bindAll(this, 'graphBar');
            _.bindAll(this, 'graphPie');
            if(options !== null) {
                this.has_graphs = options.has_graphs === true;
            }
        },
        render: function() {
            this.renderGraphs();
        },
        renderGraphs: function(){
            if (this.has_graphs == false) {
                return;
            }
            this.$('.pie-graph, .bar-graph').html('<img src="/res/img/loading.gif"/>'); // unset
            var graphPie = this.graphPie;
            var graphBar = this.graphBar;
            this.totalTransactions().done(function(result){
                graphPie(result.by_type);
                graphBar(result.by_time);
            });
        },
        graphBar: function(raw){
            var $element = this.$('.bar-graph');
            var data = [];
            var j = 0;
            _.each(raw, function(s, i){
                data[j++] = { x: new Date(parseInt(i)).toDateString(), y: parseInt(s*100)/100.0, time: i};
            });
            if (data.length > 0) {
                $element.empty();
                Morris.Bar({
                    element: $element[0],
                    data: _.sortBy(data, function(datum){ return datum.time; }),
                    xkey: 'x',
                    ykeys: ['y'],
                    labels: [''],
                    barColors: function (row, series, type) {
                        if (type === 'bar') {
                            var green = Math.ceil(255 * row.y / this.ymax);
                            if (green < 0) {
                                return 'rgb(' + (0-green) + ', 12,70)';
                            }
                            return 'rgb(12,' + green + ',70)';
                        }
                        else {
                            return '#000';
                        }
                    },
                    hoverCallback: function(index, options, content, row){
                        return row.x + ' : $' + row.y;
                    },
                    hideHover: true,
                });
            } else {
                $element.html('<p>No activity during selected time period.</p>');
            }
        },
        graphPie: function(raw){
            var $element = this.$('.pie-graph');
            var data = [];
            var j = 0;
            _.each(raw, function(s, i){
                data[j++] = { label: i, value: parseInt(s*100)/100.0 };
            });
            if (data.length > 0) {
                $element.empty();
                Morris.Donut({
                    element: $element[0],
                    data: data,
                    backgroundColor: '#ccc',
                    labelColor: '#000',
                    colors: [
                        '#0D723c',
                        '#3D925c',
                        '#6DA27c',
                        '#9DC29c'
                    ],
                    formatter: function (x) { return '$' + x; },
                    resize: true
                });
            } else {
                $element.html('<p>No activity during selected time period.</p>');
            }
        },
        totalTransactions: function() {
            var time = this.$('select').val();
            var from = new Date(0);
            var to = new Date();
            to.setMilliseconds(0);
            var today = new Date();
            var spending_totals = {};
            var type_totals = {};
            var def = $.Deferred();
            var addTransaction = function(t, timekey){
                if (isNaN(spending_totals[timekey])) {
                    spending_totals[timekey] = 0;
                }
                spending_totals[timekey] += parseFloat(t.get('amount'));

                var typekey = t.get('category');
                if (typekey == null || typekey == '#N/A' || !typekey) {
                    typekey = t.get('presentation');
                }
                if (typekey != null && typekey !== '#N/A') {
                    if (isNaN(type_totals[typekey])) {
                        type_totals[typekey] = 0;
                    }
                    type_totals[typekey] += parseFloat(t.get('amount'));
                }
            };
            if (time === 'week') {
                from = new Date(today.getFullYear(), today.getMonth(), today.getDate() - 7, 0, 0, 0, 0);
                this.fetchTransactions(from, to).done(function(result){
                    _.each(result.transactions.toArray(), function(t){
                        var t_date = new Date(t.get('post_date'));
                        var timekey = (new Date(t_date.getFullYear(), t_date.getMonth(), t_date.getDate(), 0, 0, 0, 0)).getTime();
                        addTransaction(t,timekey);
                    });
                    def.resolve({by_type: type_totals, by_time: spending_totals});
                })
            } else if (time === 'month') {
                from = new Date(today.getFullYear(), today.getMonth(), 0, 0, 0, 0, 0);
                this.fetchTransactions(from, to).done(function(result){
                    _.each(result.transactions.toArray(), function(t){
                        var t_date = new Date(t.get('post_date'));
                        var timekey = (new Date(t_date.getFullYear(), t_date.getMonth(), t_date.getDate(), 0, 0, 0, 0)).getTime();
                        addTransaction(t,timekey);
                    });
                    def.resolve({by_type: type_totals, by_time: spending_totals});
                })
            } else if (time === 'year') {
                from = new Date(today.getFullYear(), 0, 0, 0, 0, 0, 0, 0);
                this.fetchTransactions(from, to).done(function(result){
                    _.each(result.transactions.toArray(), function(t){
                        var t_date = new Date(t.get('post_date'));
                        var timekey = (new Date(t_date.getFullYear(), t_date.getMonth(), 0, 0, 0, 0, 0)).getTime();
                        addTransaction(t,timekey);
                    });
                    def.resolve({by_type: type_totals, by_time: spending_totals});
                })
            } else {
                this.fetchTransactions(from, to).done(function(result){
                    _.each(result.transactions.toArray(), function(t){
                        var t_date = new Date(t.get('post_date'));
                        var timekey = (new Date(t_date.getFullYear(), t_date.getMonth(), 0, 0, 0, 0, 0)).getTime();
                        addTransaction(t,timekey);
                    });
                    def.resolve({by_type: type_totals, by_time: spending_totals});
                })
            }
            return def;
        },
        fetchTransactions: function(from, to) {
            var def = $.Deferred();
            var transactions = new Transactions({account_number: this.model.get('account_number'), fromTime: from.getTime()/1000, toTime: to.getTime()/1000});
            transactions.fetch({
                success: function(){
                    def.resolve({transactions: transactions, from: from.getTime(), to: to.getTime()});
                }
            });
            return def;
        },
        toggleDetails: function(e) {
            e.preventDefault();
            this.renderGraphs();
            this.$('.account-detail-view').slideToggle();
            var new_class = this.$('.account-dropdown > i').attr('data-toggle');
            var old_class = this.$('.account-dropdown > i').attr('class');
            this.$('.account-dropdown > i').removeClass(old_class).addClass(new_class).attr('data-toggle', old_class);
        }
    });
    return AccountsView;
});