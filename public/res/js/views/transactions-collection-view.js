define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'collections/transactions-collection',
    'hb!../templates/transactions.html',
], function($, _, Backbone, Handlebars, TransactionsCollection, Template){
    var TransactionsCollectionView = Backbone.View.extend({
        el: $('#content-pane'),
        collection: TransactionsCollection,
        initialize: function(options) {
            var self = this;
            this.collection = new TransactionsCollection(options);
            this.collection.fetch({
                success: function(){
                    self.render();
                }
            });
        },
        render: function() {
            var transactions = []; var i =0;
            var collection = _.sortBy(this.collection.toJSON(), function(e){
                console.log(e);
                return 0 - (new Date(e.post_date)).getTime();
            }, this);
            var html = Template({transactions: collection});
            this.$el.html(html);
        }
    });
    return TransactionsCollectionView;
})