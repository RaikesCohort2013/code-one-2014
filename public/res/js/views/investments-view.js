define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'hb!../templates/investments.html',
], function($, _, Backbone, Handlebars, Template){
    var InvestmentsView = Backbone.View.extend({
        el: $('#content-pane'),
        collection: BudgetCollection,
        initialize: function() {
            this.collection = new Investments();
            this.collection.add({id: 2});
            this.render();
        },
        render: function() {
            var html = Template(this.collection.toJSON());
            this.$el.html(html);
        }
    });
    return InvestmentsView;
})