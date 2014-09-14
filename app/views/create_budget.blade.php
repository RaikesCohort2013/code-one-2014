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
            <a href=""><li class="selected-nav-item">Budgets</li></a>
            <ol class="sub-nav-list selected-nav-item">
            	<a href=""><li class="selected">New Budget</li></a>
            	<a href=""><li>Edit Budget</li></a>
            	<a href=""><li>Analyze Budget</li></a>
            </ol>
            <a href=""><li>Investment</li></a>
            <ol class="sub-nav-list">
            	<a href=""><li>Item1</li></a>
            	<a href=""><li>Item2</li></a>
            	<a href=""><li>Item3</li></a>
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
            Create Budget
          	</h1>

          	<div class="create-budget">

          		<div class="new-category">
	          		<div class="category-name">	
	          			<span class="category-entry">Budget Name: </span>
	          			<input type="text" class="category-input" placeholder="Name"/>
	          		</div><br>
          			<span class="category-entry">Add Category: </span>
          			<input type="text" class="category-input" placeholder="Category"/>
          			<input type="button" class="add-category" value="Add"/>
          		</div>

          		<table class="create-budget">
          			<thead>
          				<th>Category</th>
          				<th>Previous Budget</th>
          				<th>Budget Amount</th>
          				<th>Amount Spent</th>
          			</thead>
          			<tr>
          				<td>Travel</td>
          				<td>430.04</td>
          				<td>350.00</td>
          				<td>0.00</td>
          			</tr>
          		</table>

          		<div class="save">
	          		<input type="submit" class="save-budget" value="Save"/>
	          	</div>
          	</div>

        </div>  

      </div> <!-- section3 -->

    </div> <!-- container -->

  </div> <!-- wrapper2 -->

</div> <!-- wrapper -->

@include('partials.footer')