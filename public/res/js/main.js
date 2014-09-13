require.config({
    paths: {
        jquery: 'lib/jquery',
        handlebars: 'lib/handlebars/handlebars.amd',
        hbs_handlebars: 'lib/handlebars/handlebars',
        text: 'lib/handlebars/text',
        hb: 'lib/handlebars/hb',
        bootstrap: 'lib/bootstrap.min',
        underscore: 'lib/underscore-min',
        backbone: 'lib/backbone-min',
    },
    shim: {
        'underscore' : {
            exports: '_'
        },
        'backbone' : {
            deps: ['jquery', 'underscore'],
            exports: 'Backbone'
        },
        'bootstrap' : {
            deps: ['jquery']
        },
    }
});
require(['app'], function(App){
    App.init();
});