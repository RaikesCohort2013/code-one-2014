@include('partials.header')

<div id="">

  <div id="wrapper2">

    <div class="container">

      <div id="section3">

        <div id="main-nav">

          <ul class="side-nav-list">
            <li><a href="">Accounts</a></li>
            <li class="selected-nav-item"><a href="">Budgets</a></li>
            <li><a href="">AutoPayments</a></li>
            <li><a href="">Account Reports</a></li>
          </ul>

        </div>

        <div id="content-pane">

          <h1 id="accounts-title">
            Accounts
          </h1>

          <div class="account-view">
            <div class="account-header">
              <span class="account-name">Checking Account</span>
              <span class="account-no-label">Acct. No:</span>
              <span class="account-no">14F54KHS409</span>
              <span class="account-bal-label">Balance:</span>
              <span class="account-balance">$19,355.01</span>
            </div>

            <div class="account-detail-view">
              <div class="activity-container">
                <span class="activity-label">View Activity in: </span>
                <select name="">
                    <option value="">This Week</option>
                    <option value="">This Month</option>
                    <option value="">This Year</option>
                    <option value="">All Time</option>
                </select>
              </div>

              <div id="graph" class="graph"></div>
              <div id="barGraph" class="graph"></div>

            </div>
          </div>

          <div class="account-view">
            <div class="account-header">
              <span class="account-name">Savings Account</span>
              <span class="account-no-label">Acct. No:</span>
              <span class="account-no">BE36BCW983</span>
              <span class="account-bal-label">Balance:</span>
              <span class="account-balance">$7,238.33</span>
            </div>

            <div class="account-detail-view">
              <div class="activity-container">
                <span class="activity-label">View Activity in: </span>
                  <select name="">
                    <option value="">This Week</option>
                    <option value="">This Month</option>
                    <option value="">This Year</option>
                    <option value="">All Time</option>
                  </select>
              </div>
            </div>
          </div>

          <div class="account-view">
            <div class="account-header">
              <span class="account-name">Checking Account 2</span>
              <span class="account-no-label">Acct. No:</span>
              <span class="account-no">G4C0M2D782J</span>
              <span class="account-bal-label">Balance:</span>
              <span class="account-balance">$59,004.70</span>
            </div>

            <div class="account-detail-view">
              <div class="activity-container">
                <span class="activity-label">View Activity in: </span>
                  <select name="">
                    <option value="">This Week</option>
                    <option value="">This Month</option>
                    <option value="">This Year</option>
                    <option value="">All Time</option>
                  </select>
              </div>
            </div>
          </div>

        </div>

      </div> <!-- section3 -->

    </div> <!-- container -->

  </div> <!-- wrapper2 -->

</div> <!-- wrapper -->

@include('partials.footer')