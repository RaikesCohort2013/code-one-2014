@include('partials.header')

<div id="">

  <div id="wrapper2">

    <div class="container">

      <div id="section3">

        <div id="main-nav">

          @include('partials.nav')

        </div>

        <div id="content-pane">
        	<h1>
            	Investments
          	</h1>

          	<div class="investment-detail">
                <h3>Allocation</h3>

                <div id="graph">
                    <script type="text/javascript">
                        Morris.Donut({
                      element: 'graph',
                      data: [
                        {value: 70, label: 'foo'},
                        {value: 15, label: 'bar'},
                        {value: 10, label: 'baz'},
                        {value: 5, label: 'A really really long label'}
                      ],
                      formatter: function (x) { return x + "%"}
                    });
                    </script>
                </div>
                
                <h3>Diversity</h3>

                <div id="graph2">
                    <script type="text/javascript">
                        Morris.Donut({
                      element: 'graph2',
                      data: [
                        {value: 70, label: 'foo'},
                        {value: 15, label: 'bar'},
                        {value: 10, label: 'baz'},
                        {value: 5, label: 'A really really long label'}
                      ],
                      formatter: function (x) { return x + "%"}
                    });
                    </script>
                </div>
                
                <h3>Portfolio</h3>
                
                <table class="table">
                    <thead>
                        <th>Investment Name</th>
                        <th>Invesment Type</th>
                        <th class="selected">Amount</th>
                    </thead>
                    <tr>
                        <td>Jon's Mutual Fund</td>
                        <td>Mutual Fund Investment</td>
                        <td class="amount">12,849.80</td>
                    </tr>
                    <tr>
                        <td>Jake's College Account</td>
                        <td>UGMA Account</td>
                        <td class="amount">349.07</td>
                    </tr>
                </table>
            </div>
        </div>  

      </div> <!-- section3 -->

    </div> <!-- container -->

  </div> <!-- wrapper2 -->

</div> <!-- wrapper -->

@include('partials.footer')