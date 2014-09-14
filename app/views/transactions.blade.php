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
            <a href="" class="selected-nav-item"><li>Transactions</li></a>
            <ol class="sub-nav-list selected-nav-item">
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
            <a href=""><li>Investments</li></a>
            <ol class="sub-nav-list">
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
            Transaction History
          </h1>

          <!-- $('td').keypress(function(evt){
				    if(evt.which == 13 || evt.keyCode == 13){
				        event.preventDefault();
				        alert('Hi');
				        var cellindex = $(this).index()
				        var rowindex = $(this).parents('tr').index() + 1
				        $(this).parents('table').find('tr:eq('+rowindex+') td:eq('+cellindex+')').focus()
				    }
				  });-->
          <table class="transaction-list">
          	<thead>
          		<th><a href="">Date</a></th>
          		<th><a href="">Post Date</a></th>
          		<th><a href="">Description</a></th>
          		<th class="selected"><a href="">Category</a></th>
          		<th><a href="">Person</a></th>
          		<th><a href="">Amount</a></th>
          	</thead>
          	<tr>
          		<td>11-20-2014</td>
          		<td>11-21-2014</td>
          		<td contenteditable>Bought Crack Cocaine</td>
          		<td contenteditable></td>
          		<td contenteditable></td>
          		<td class="amount">$3,467.21</td>
          	</tr>
          	<tr>
          		<td>11-20-2014</td>
          		<td>11-23-2014</td>
          		<td contenteditable>Bought Your Mom</td>
          		<td contenteditable></td>
          		<td contenteditable></td>
          		<td class="amount">$3.70</td>
          	</tr>
          </table>





        </div>  

      </div> <!-- section3 -->

    </div> <!-- container -->

  </div> <!-- wrapper2 -->

</div> <!-- wrapper -->

@include('partials.footer')