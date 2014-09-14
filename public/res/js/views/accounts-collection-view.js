define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'morris',
    'collections/accounts-collection',
    'hb!../templates/account-list.html',
    'models/account-model',
    'views/account-view'
], function($, _, Backbone, Handlebars, Morris, AccountsCollection, Template, AccountModel, AccountView){
    var AccountsCollectionView = Backbone.View.extend({
        el: $('#main-accounts'),
        views: [],
        initialize: function(){
            this.collection = new AccountsCollection();
            var that = this;
            this.collection.fetch({
                success: function(){
                    that.render();
                },
            });
        },
        render: function(){
            this.html = Template({accounts: this.collection.toJSON()});
            console.log(this.collection.toJSON());
            this.$el.html(this.html);
            _.each(this.collection.toArray(), function(e){
                this.views[e.get('account_number')] = new AccountView({el: '#account-' + e.get('account_number') + '-detail', model: e})
            }, this);
        },
    });
    return AccountsCollectionView;
});


