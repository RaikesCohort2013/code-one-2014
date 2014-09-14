define([
    'underscore',
    'backbone',
], function(_, Backbone){
    var AccountModel = Backbone.Model.extend({
        defaults: {
            id: "0",
            name: "test name",
            accounts: [],
            created_at: "",
            updated_at: "",
        },
    });
    return AccountModel;
});