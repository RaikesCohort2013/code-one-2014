define([
    'jquery',
    'underscore',
    'backbone',
    'app',
    'views/accounts-collection-view',
    'views/transactions-collection-view',
    'views/budget-view',
    'views/investments-view',
    'views/autopay-view',
], function($, _, Backbone, App, AccountsCollectionView, TransactionsCollectionView, BudgetView, InvestmentsView, AutopayView){
        var AppRouter = Backbone.Router.extend({
            routes: {
                'accounts' : 'renderAccounts',
                'transactions': 'renderTransactions',
                'budgets': 'renderBudgets',
                'investment': 'renderInvestments',
                'autopay': 'renderAutoPay',
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