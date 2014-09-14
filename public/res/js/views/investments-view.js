define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'hb!../templates/investments.html',
], function($, _, Backbone, Handlebars, Template){
    var InvestmentsView = Backbone.View.extend({
        el: $('#content-pane'),
        initialize: function() {
            this.render();
        },
        render: function() {
            var html = Template({});
            this.$el.html(html);
        }
    });
    return InvestmentsView;
})