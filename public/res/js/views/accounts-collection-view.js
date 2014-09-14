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
            var displayModel = [];
            var types = {};
            var collection = this.collection.toArray();
            _.each(collection, function(model){
                types[model.get('type')] = model.get('type');
            });
            var j = 0;
            types = _.difference(types, this.invalid_types);
            _.each(types, function(type){
                var name = type.replace('_', ' ');
                name = name.replace(/\b(\w)\w*/g, function(match, p1, p2) {
                    console.log(match, p1);
                    return p1.toUpperCase() + match.substr(1);
                })
                displayModel[j++] = {accounts: _.where(this.collection.toJSON(), {type: type}), type: name};
            }, this);
            console.log(displayModel, {types: displayModel});
            this.html = Template({types: displayModel});
            this.$el.html(this.html);
            _.each(this.collection.toArray(), function(e){
                this.views[e.get('account_number')] = new AccountView({el: '#account-' + e.get('account_number') + '', model: e})
            }, this);
        },
    });
    return AccountsCollectionView;
});


