define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'hb!../templates/autopay.html',
], function($, _, Backbone, Handlebars, Template){
    var AutopayView = Backbone.View.extend({
        el: $('#content-pane'),
        initialize: function() {
            this.render();
        },
        render: function() {
            var html = Template({});
            this.$el.html(html);
        }
    });
    return AutopayView;
})