define([
    'underscore',
    'backbone',
    'models/account-model'
], function(_, Backbone, AccountModel){
    var ProjectCollection = Backbone.Collection.extend({
        model: AccountModel,
        url: '/api/accounts',
        by_type: function(exclude) {
            exclude = (exclude == null) ? [] : exclude;
            var displayModel = [];
            var types = {};
            var collection = this.toArray();
            if (collection.length  == 0 ) {
                return [];
            }
            _.each(collection, function(model){
                types[model.get('type')] = model.get('type');
            });
            var j = 0;
            types = _.difference(types, exclude);
            _.each(types, function(type){
                var name = type.replace('_', ' ');
                name = name.replace(/\b(\w)\w*/g, function(match, p1) {
                    return p1.toUpperCase() + match.substr(1);
                });
                var json = this.toJSON();
                displayModel[j++] = {accounts: _.where(json, {type: type}), type: name};
            }, this);
            return displayModel;
        },
        initialize: function() {
            _.bindAll(this, 'by_type');
        }
    });
    // You don't usually return a collection instantiated
    return ProjectCollection;
});