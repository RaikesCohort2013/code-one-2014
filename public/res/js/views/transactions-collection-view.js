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
        initialize: function() {
            this.collection = new TransactionsCollection();
            this.collection.add({id: 2});
            this.render();
        },
        render: function() {
            var html = Template(this.collection.toJSON());
            this.$el.html(html);
        }
    });
    return TransactionsCollectionView;
})