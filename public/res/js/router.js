define([
    'jquery',
    'underscore',
    'backbone',
    'app',
    'views/accounts-collection-view',
], function($, _, Backbone, App, AccountsCollectionView){
        var AppRouter = Backbone.Router.extend({
            routes: {
                'accounts' : 'renderAccounts',
                'transactions': 'renderTransactions',
                '*actions' : 'notFound',
            },
            renderAccounts: function() {
                var accountView = new AccountsCollectionView({invalid_types: ['cd','ira','mortgage','auto_loan']});
                $('li.nav-item').removeClass('active');
                $('#nav-accounts').addClass('active');
            },
            renderTransactions: function() {

            },
            notFound: function(action) {
                console.log(action, ': 404 not found');
                //notFoundView.render();
            },
            init : function(){ Backbone.history.start({pushState: true, root: "/"}); }
        });
        return AppRouter;
    }
)