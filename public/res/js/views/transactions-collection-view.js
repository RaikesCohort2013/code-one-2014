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
            this.render();
        },
        render: function() {
            var keys = _.keys(this.collection.at(0));
            var html = Template({keys: keys, transactions: this.collection.toJSON()});
            this.$el.html(html);
        }
    });
    return TransactionsCollectionView;
})