define([
    'underscore',
    'backbone',
    'models/account-model'
], function(_, Backbone, AccountModel){
    var ProjectCollection = Backbone.Collection.extend({
        model: AccountModel,
        url: '/api/accounts',
    });
    // You don't usually return a collection instantiated
    return ProjectCollection;
});