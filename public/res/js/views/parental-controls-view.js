define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'hb!../templates/parental-control.html',
], function($, _, Backbone, Handlebars, Template){
    var ParentalControls = Backbone.View.extend({
        el: $('#content-pane'),
        events: {
            'click .account-header': 'toggleAccount',
        },
        initialize: function() {
            this.render();
        },
        render: function() {
            var html = Template({});
            this.$el.html(html);
        },
        toggleAccount: function(e) {
            var $target = $(e.target);
            this.$('.account-detail-view').slideToggle();
            var new_class = this.$('.account-dropdown').attr('data-toggle');
            var old_class = this.$('.account-dropdown').attr('class');
            this.$('.account-dropdown').removeClass(old_class).addClass(new_class).attr('data-toggle', old_class);
        }
    });
    return ParentalControls;
})