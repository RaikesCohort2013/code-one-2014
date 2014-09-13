define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'morris',
    'collections/accounts-collection',
    'hb!../templates/account-detail.html'
], function($, _, Backbone, Handlebars, Morris, AccountsCollection, Template){
    var AccountsView = Backbone.View.extend({
        el: $('#main-accounts'),
        initialize: function(){
            this.collection = new AccountsCollection();
            var that = this;
            this.collection.fetch({
                success: function(){that.render()},
            });
        },
        render: function(){
            this.html = Template({accounts: this.collection.toJSON()});
            console.log(this.collection.toJSON());
            this.$el.html(this.html);
            this.makePieChart();
            this.makeBarGraph();
        }, 
        makePieChart: function(){
            //Morris.Donut();
        },
        makeBarGraph: function(){
          //Morris.Bar();
        }
    })
    return AccountsView;
});


