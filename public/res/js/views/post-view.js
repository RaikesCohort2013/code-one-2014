define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'morris',
//    'hb!../templates/post-template.html'
], function($, _, Backbone, Handlebars, Morris){
    var View = Backbone.View.extend({ 
        render: function(){
            this.makePieChart();
        }, 
        makePieChart: function(){
            Morris.Donut({
              element: 'graph',
              data: [
                {value: 70, label: 'Jake Sanchez'},
                {value: 15, label: 'bar'},
                {value: 10, label: 'baz'},
                {value: 5, label: 'A really really long label'}
              ],
              formatter: function (x) { return x + "%"},
              resize: true
            });
        }
    })
    return View;
});


