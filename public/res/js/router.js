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
], function($, _, Backbone, App, AccountsCollectionView, TransactionsCollectionView, BudgetView, InvestmentsView, ParentalControlsView){
        var AppRouter = Backbone.Router.extend({
            routes: {
                'accounts' : 'renderAccounts',
                'transactions': 'renderTransactions',
                'budgets': 'renderBudgets',
                'investment': 'renderInvestments',
                'parental-control': 'renderParentalControls',
                '*actions' : 'notFound',
            },
            renderAccounts: function() {
                var accountView = new AccountsCollectionView({invalid_types: ['cd','ira','mortgage','auto_loan']});
                $('li.nav-item').removeClass('active');
                $('#nav-accounts').addClass('active');
            },
            renderTransactions: function() {
                var transactionsView = new TransactionsCollectionView();
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
            notFound: function(action) {
                console.log(action, ': 404 not found');
                //notFoundView.render();
            },
            init : function(){ Backbone.history.start({pushState: true, root: "/"}); }
        });
        return AppRouter;
    }
)