@include('partials.header')

<div id="">

  <div id="wrapper2">

    <div class="container">

      <div id="section3">

        <div id="main-nav">

          <ul class="side-nav-list">
            <a href=""><li>Accounts</li></a>
            <ol class="sub-nav-list">
            	<a href=""><li>Item1</li></a>
            	<a href=""><li>Item2</li></a>
            	<a href=""><li>Item3</li></a>
            </ol>
            <a href=""><li>Transactions</li></a>
            <ol class="sub-nav-list">
            	<a href=""><li>Item1</li></a>
            	<a href=""><li>Item2</li></a>
            	<a href=""><li>Item3</li></a>
            </ol>
            <a href=""><li>Budgets</li></a>
            <ol class="sub-nav-list">
            	<a href=""><li>New Budget</li></a>
            	<a href=""><li>Edit Budget</li></a>
            	<a href=""><li>Analyze Budget</li></a>
            </ol>
            <a href=""><li class="selected-nav-item">Investments</li></a>
            <ol class="sub-nav-list selected-nav-item">
            	<a href=""><li>Stocks</li></a>
            	<a href=""><li>Cash</li></a>
            	<a href=""><li>Bonds</li></a>
            </ol>
            <a href=""><li>Parental Control</li></a>
            <ol class="sub-nav-list">
            	<a href=""><li>Item1</li></a>
            	<a href=""><li>Item2</li></a>
            	<a href=""><li>Item3</li></a>
            </ol>
            <a href=""><li>Analytics</li></a>
            <ol class="sub-nav-list">
            	<a href=""><li>Item1</li></a>
            	<a href=""><li>Item2</li></a>
            	<a href=""><li>Item3</li></a>
            </ol>
            <a href=""><li>Autopay</li></a>
            <ol class="sub-nav-list">
            	<a href=""><li>Item1</li></a>
            	<a href=""><li>Item2</li></a>
            	<a href=""><li>Item3</li></a>
            </ol>
          </ul>

        </div>

        <div id="content-pane">
        	<h1>
            	Investments
          	</h1>

          	<div class="investment-detail">
                <h3>Allocation</h3>
                
                <h3>Diversity</h3>
                
                <h3>Portfolio</h3>
                
                <table class="table">
                    <thead>
                        <th>Investment Name</th>
                        <th>Invesment Type</th>
                        <th class="amount selected">Amount</th>
                    </thead>
                    <tr>
                        <td>Jon's Mutual Fund</td>
                        <td>Mutual Fund Investment</td>
                        <td>12,849.80</td>
                    </tr>
                </table>
            </div>
        </div>  

      </div> <!-- section3 -->

    </div> <!-- container -->

  </div> <!-- wrapper2 -->

</div> <!-- wrapper -->

@include('partials.footer')