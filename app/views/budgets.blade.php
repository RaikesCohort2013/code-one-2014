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
            	<a href=""><li>New Budget</li></a>
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
        	<h1 id="accounts-title">
            Budgets
          	</h1>

          	<div class="current-budget">
          		<div class="budget-header">
          			<span class="name">October Budget</span>
          			<span class="time">Oct. 1st - Oct. 31</span>
          			<div class="frac">
	          			<span class="active">$305</span>
	          			<span class="allowed">/ $370</span>
          			</div>
          		</div>
          		
          		<progress value="305" max="370"></progress>

          		<div class="budget-item">
          			<div class="category">
	          			<span class="name">Food</span>
	          			<a href="" class="alert"><span class="alert">Add Alert</span></a>
	          			<div class="frac">
		          			<span class="current">$65</span>
		          			<span class="total">/ $85</span>
	          			</div>
          			</div>

          			<progress value="65" max="85" class="caution"></progress>
          		</div>

          		<div class="budget-item">
          			<div class="category">
	          			<span class="name">Gas</span>
	          			<a href="" class="alert"><span class="alert">Add Alert</span></a>
	          			<div class="frac">
		          			<span class="current">$65</span>
		          			<span class="total">/ $215</span>
	          			</div>
          			</div>

          			<progress value="65" max="215"></progress>
          		</div>

          		<div class="budget-item">
          			<div class="category">
	          			<span class="name">Groceries</span>
	          			<a href="" class="alert"><span class="alert">Add Alert</span></a>
	          			<div class="frac">
		          			<span class="current">$118</span>
		          			<span class="total">/ $120</span>
	          			</div>
          			</div>

          			<progress value="118" max="120" class="danger"></progress>
          		</div>
          	</div>

          	<div class="past-budgets">
          		<div class="budget-header">
          			<span class="name">September Budget</span>
          			<span class="time">Sept. 1st - Sept. 30</span>
          			<div class="frac">
          				<span class="active">$365</span>
          				<span class="allowed">/ $385</span>
          			</div>
          		</div>
          		<progress value="365" max="385"></progress>

          		<div class="budget-header">
          			<span class="name">August Budget</span>
          			<span class="time">Aug. 1st - Aug. 31</span>
          			<div class="frac">
          				<span class="active">$370</span>
          				<span class="allowed">/ $375</span>
          			</div>
          		</div>
          		<progress value="370" max="375"></progress>

          		<div class="budget-header">
          			<span class="name">July Budget</span>
          			<span class="time">Jul. 1st - Jul. 31</span>
          			<div class="frac">
          				<span class="active">$330</span>
          				<span class="allowed">/ $350</span>
          			</div>
          		</div>
          		<progress value="330" max="350"></progress>
          	</div>

        </div>  

      </div> <!-- section3 -->

    </div> <!-- container -->

  </div> <!-- wrapper2 -->

</div> <!-- wrapper -->

@include('partials.footer')