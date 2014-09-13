define([
    'jquery',
    'underscore',
    'backbone',
    'app',
    'views/post-view',
], function($, _, Backbone, App, PostView){
        var AppRouter = Backbone.Router.extend({
            routes: {
                'blog/*action' : 'renderPost',
                '*action' : 'renderPost'
            },
            renderPost: function(postId) {
                new PostView().render();
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