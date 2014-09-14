define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'morris',
    'collections/accounts-collection',
    'hb!../templates/account-list.html',
    'models/account-model',
    'views/account-view',
    'selectize',
    'hb!../templates/partials/sub-nav.html',
], function($, _, Backbone, Handlebars, Morris, AccountsCollection, Template, AccountModel, AccountView, Selectize, NavTemplate){
    var AccountsCollectionView = Backbone.View.extend({
        el: $('#content-pane'),
        views: [],
        invalid_types: [],
        initialize: function(options){
            this.collection = new AccountsCollection();
            var self = this;
            this.collection.fetch({
                success: function(){
                    self.render();
                },
            });
            if (options !== null && options.invalid_types !== null)
                this.invalid_types = options.invalid_types;
        },
        render: function(){
            var displayModel = this.collection.by_type(this.invalid_types);
            console.log(displayModel, {types: displayModel});
            this.html = Template({types: displayModel});
            this.$el.html(this.html);
            var items = []; var i = 0;
            _.each(displayModel, function(type){
                _.each(type.accounts, function(e){
                    e = this.collection.findWhere({id: e.id});
                    console.log(e);
                    var accountView = new AccountView({el: '#account-' + e.get('account_number'), model: e, has_graphs: true});
                    this.views[e.get('account_number')] = accountView;
                    items[i++] = {label: e.get('name'), link: e.get('account_number')};
                }, this);
            }, this);

            this.$('.time').selectize({sortField: 'text'});
            console.log(items);
            $('#nav-accounts .sub-nav-list').html(NavTemplate({items: items}));
        },
    });
    return AccountsCollectionView;
});


