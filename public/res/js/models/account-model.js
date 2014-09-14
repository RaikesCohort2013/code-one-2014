define([
    'underscore',
    'backbone',
    'collections/transactions-collection',
], function(_, Backbone, Transactions){
    var AccountModel = Backbone.Model.extend({
        defaults: {
            id: "0",
            type: "",
            name: "test name",
            balance: "0",
            account_number: "0",
            created_at: "",
            updated_at: "",
        },
    });
    return AccountModel;
});