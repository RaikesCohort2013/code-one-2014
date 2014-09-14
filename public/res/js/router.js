define([
    'jquery',
    'underscore',
    'backbone',
    'app',
    'views/accounts-collection-view',
], function($, _, Backbone, App, AccountsCollectionView){
        var AppRouter = Backbone.Router.extend({
            routes: {
                '*whatever' : 'renderAccounts'
            },
            renderAccounts: function() {
                var accountView = new AccountsCollectionView();
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