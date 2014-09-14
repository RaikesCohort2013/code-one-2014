define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'morris',
    'hb!../templates/account-detail.html',
    'models/account-model',
    'collections/transactions-collection'
], function($, _, Backbone, Handlebars, Morris, Template, AccountModel, Transactions){
    var AccountsView = Backbone.View.extend({
        events: {
            'blur select.time': 'loadTransactions'
        },
        model: AccountModel,
        initialize: function(){
            this.render();
        },
        render: function(){
            this.html = Template(this.model.toJSON());
            this.$el.html(this.html);
        },
        loadTransactions: function() {
            var time = this.$('select').val();
            var from = new Date(0);
            var to = new Date();
            var today = new Date();
            console.log();
            var deferreds = []
            var transactions = [];
            if (time === 'week') {
                for (var i = 7; i > 0; i--) {
                    from = new Date(today.getFullYear(), today.getMonth(), today.getDate() - i, 0, 0, 0, 0);
                    to = new Date(today.getFullYear(), today.getMonth(), today.getDate() - i + 1, 0, 0, 0, 0);
                    deferreds[i-1] = this.fetchTransactions(from, to);
                }
                $.when.apply($, deferreds).then(function(){
                    _.forEach(arguments, function(result){
                        transactions[result.from] = result.transactions.toArray();
                    })
                    console.log(transactions);
                });
            } else if (time === 'month') {
                from = new Date(today.getFullYear(), today.getMonth(), 0, 0, 0, 0, 0);
            } else if (time === 'year') {
                from = new Date(today.getFullYear(), 0, 0, 0, 0, 0, 0, 0);
            } else {
                for ()
            }
        },
        fetchTransactions: function(from, to) {
            console.log(this.model, from, to);
            var def = $.Deferred();
            var transactions = new Transactions({account_number: this.model.get('account_number'), fromTime: from.getTime(), toTime: to.getTime()});
            transactions.fetch({
                success: function(){
                    console.log(transactions);
                    def.resolve({transactions: transactions, from: from.getTime(), to: to.getTime()});
                }
            });
            return def;
        },
        makePieCharts: function(){
            console.log(this.model, 'fish');
            //Morris.Donut();
            this.render();
        },
        makeBarGraphs: function(){
            //Morris.Bar();
        }

    });
    return AccountsView;
});