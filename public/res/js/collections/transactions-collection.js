define([
    'underscore',
    'backbone',
    'models/transaction-model'
], function(_, Backbone, TransactionModel){
    var ProjectCollection = Backbone.Collection.extend({
        model: TransactionModel,
        options: {},
        url: '/api/accounts/',
        initialize: function(options){
            if (options != null && options.account_number != null && options.toTime != null && options.fromTime !== null){
                this.url = '/api/accounts/' + options.account_number + '/transactions/' + options.fromTime + '/' + options.toTime;
            } else if(options != null && options.account_number != null) {
                this.url = '/api/accounts/' + options.account_number + '/transactions';
            }
        }
    });
    // You don't usually return a collection instantiated
    return ProjectCollection;
});