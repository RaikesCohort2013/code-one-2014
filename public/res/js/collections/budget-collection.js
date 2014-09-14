define([
    'underscore',
    'backbone',
    'models/budget-model'
], function(_, Backbone, BudgetModel){
    var ProjectCollection = Backbone.Collection.extend({
        model: BudgetModel,
        options: {},
        url: '/api/budget/',
        initialize: function(){
        }
    });
    // You don't usually return a collection instantiated
    return ProjectCollection;
});
