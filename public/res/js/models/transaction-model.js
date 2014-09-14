define([
    'underscore',
    'backbone'
], function(_, Backbone){
    var TransactionModel = Backbone.Model.extend({
        default: {
            id: 0,
            sub_prod_cd: '',
            account_number: 1,
            tran_cd: 0,
            tran_desc: '',
            tran_detail_desc: '',
            db_cr_cd: '',
            category: '',
            post_date: '',
            billing_date: '',
            date: '',
            amount: 0,
            mcc: 0,
            merchant: null,
            transaction_code: null,
            merchant_name: null,
            merchand_city: null,
            merchant_state: null,
            merchant_category: null,
            merchant_type: '#N/A',
            sic_code: '#N/A',
            presentation: '#N/A',
            created_at: '',
            updated_at: '',
        },
    });
    return TransactionModel;
})