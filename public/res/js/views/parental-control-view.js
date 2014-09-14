define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'hb!../templates/parent-control.html',
], function($, _, Backbone, Handlebars, Template){
    var ParentalControlView = Backbone.View.extend({
        el: $('#content-pane'),
        initialize: function() {
            this.render();
        },
        render: function() {
            var html = Template({});
            this.$el.html(html);
        }
    });
    return ParentalControlView;
})