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
            this.makeBarGraph();
        }, 
        makePieChart: function(){
            Morris.Donut({
              element: 'graph',
              data: [
                {value: 70, label: 'Jake Sanchez'},
                {value: 15, label: 'bar'},
                {value: 10, label: 'baz'},
                {value: 5, label: 'A really really long label'}
              ],backgroundColor: '#ccc',
              labelColor: '#000',
              colors: [
                '#0D723c',
                '#3D925c',
                '#6DA27c',
                '#9DC29c'
              ],
              formatter: function (x) { return x + "%"},
              resize: true
            });
        },
        makeBarGraph: function(){
          Morris.Bar({
            element: 'barGraph',
            data: [
              {x: '1/14', y: '30'},
              {x: '2/14', y: '26'},
              {x: '3/14', y: '31'},
              {x: '4/14', y: '18'}
            ],
            xkey: 'x',
            ykeys: ['y'],
            labels: [''],
            barColors: function (row, series, type) {
              if (type === 'bar') {
                var green = Math.ceil(255 * row.y / this.ymax);
                return 'rgb(12,' + green + ',70)';
              }
              else {
                return '#000';
              }
            }
          });
        }
    })
    return View;
});


