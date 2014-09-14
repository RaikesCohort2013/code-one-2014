define([
    'jquery',
    'underscore',
    'backbone',
    'app',
    'views/accounts-collection-view',
    'views/transactions-collection-view',
    'views/budget-view',
    'views/investments-view',
    'views/parental-controls-view',
    'views/autopay-view',
], function($, _, Backbone, App, AccountsCollectionView, TransactionsCollectionView, BudgetView, InvestmentsView, ParentalControlsView, AutopayView){
        var AppRouter = Backbone.Router.extend({
            routes: {
                '' : 'renderAccounts',
                'accounts': 'renderAccounts',
                'accounts/*actions' : 'renderTransactions',
                'budgets': 'renderBudgets',
                'investment': 'renderInvestments',
                'parental-control': 'renderParentalControls',
                'autopay': 'renderAutoPay',
                '*actions' : 'notFound',
            },
            renderAccounts: function(actions) {
                var accountView = new AccountsCollectionView({invalid_types: ['cd','ira','mortgage','auto_loan']});
                $('li.nav-item').removeClass('active');
                $('#nav-accounts').addClass('active');
            },
            renderTransactions: function(action) {
                var transactionsView = new TransactionsCollectionView({account_number: action});
                $('li.nav-item').removeClass('active');
                $('#nav-transactions').addClass('active');
            },
            renderBudgets: function() {
                var budgetView = new BudgetView();
                $('li.nav-item').removeClass('active');
                $('#nav-budgets').addClass('active');
            },
            renderInvestments: function() {
                var investmentView = new InvestmentsView();
                $('li.nav-item').removeClass('active');
                $('#nav-investment').addClass('active');
            },
            renderParentalControls: function() {
                var parentalControlsView = new ParentalControlsView({invalid_types: ['cd','ira','mortgage','auto_loan']});
                $('li.nav-item').removeClass('active');
                $('#nav-parental-control').addClass('active');
            },
            renderAutoPay: function() {
                var autopayView = new AutopayView();
                $('li.nav-item').removeClass('active');
                $('#nav-autopay').addClass('active');
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