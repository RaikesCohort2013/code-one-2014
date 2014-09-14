define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'hb!../templates/parental-control.html',
    'collections/accounts-collection',
    'views/account-view',
    'hb!../templates/partials/sub-nav.html',
], function($, _, Backbone, Handlebars, Template, AccountsCollection, AccountView, NavTemplate){
    var ParentalControls = Backbone.View.extend({
        el: $('#content-pane'),
        events: {
            'click .account-header': 'toggleAccount',
        },
        invalid_types: [],
        views: [],
        initialize: function(options) {
            this.collection = new AccountsCollection();
            this.invalid_types = (options == null) ? [] : options.invalid_types;
            var self = this;
            this.collection.fetch({
                success: function() {
                    self.render();
                }
            })
        },
        render: function() {
            var displayModel = this.collection.by_type(this.invalid_types);
            var html = Template({types: displayModel});
            this.$el.html(html);
            var items = []; var i = 0;
            _.each(displayModel, function(type){
                _.each(type.accounts, function(e){
                    e = this.collection.findWhere({id: e.id});
                    var accountView = new AccountView({el: '#account-' + e.get('account_number') + '', model: e});
                    this.views[e.get('account_number')] = accountView;
                    items[i++] = {label: e.get('name'), link: '/parental-controls/' + e.get('account_number')};
                }, this);
            }, this);
            $('#nav-parental-control .sub-nav-list').html(NavTemplate({items: items}));
        },
        /*toggleAccount: function(e) {
            console.log(e);
            var $target = $(e.currentTarget);
            var $details = $target.next('.account-detail-view');
            $details.slideToggle();
            var new_class = $target.children('.account-dropdown').attr('data-toggle');
            var old_class = $target.children('.account-dropdown').attr('class');
            $target.children('.account-dropdown').removeClass(old_class).addClass(new_class).attr('data-toggle', old_class);
        }*/
    });
    return ParentalControls;
})