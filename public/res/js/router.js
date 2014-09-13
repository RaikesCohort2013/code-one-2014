define([
    'jquery',
    'underscore',
    'backbone',
    'app',
    'views/account-view',
], function($, _, Backbone, App, AccountView){
        var AppRouter = Backbone.Router.extend({
            routes: {
                '*action' : 'renderPost'
            },
            renderPost: function() {
                var accountView = new AccountView();
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