define([
    'jquery',
    'underscore',
    'backbone',
    'app',
    'views/music-view',
    'views/favorites-view',
    'views/followings-view',
    'views/news-view',
    'views/about-view',
    'views/post-view',
], function($, _, Backbone, App, MusicView, FavoritesView, FollowingsView, NewsView, AboutView, PostView){
        var AppRouter = Backbone.Router.extend({
            routes: {
                'blog/*action' : 'renderPost',
                '*action' : 'notFound'
            },
            renderPost: function(postId) {
                new PostView().render(postId);
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