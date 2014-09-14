define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'collections/budget-collection',
    'hb!../templates/budget-view.html',
], function($, _, Backbone, Handlebars, BudgetCollection, Template){
    var BudgetView = Backbone.View.extend({
        el: $('#content-pane'),
        collection: BudgetCollection,
        initialize: function() {
            this.collection = new BudgetCollection();
            this.collection.add({id: 2});
            this.render();
        },
        render: function() {
            var html = Template(this.collection.toJSON());
            this.$el.html(html);
        }
    });
    return BudgetView;
})