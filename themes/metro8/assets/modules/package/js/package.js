// document ready
$(function () {
    // initiating data table
    var DataTableInstance = new DataTableFactory();
    DataTableInstance.init({
        dt_id : '_datatable',
        columns: [
            { data: 'selectRow', name: 'selectRow' },
            { data: 'id', name: 'id' },
            { data: 'provider', name: 'provider' },
            { data: 'profile', name: 'profile' },
            { data: 'title', name: 'title' },
            { data: 'created_at', name: 'created_at', 
                render: function(data, type, row){
                    return new Date(row.created_at).toLocaleDateString();
                } 
            },
            { data: 'action', name: 'action' },
        ],
    });
    // initiating modal form management
    var ManageModalFormInstance = new ManageModalForm();
    ManageModalFormInstance.init(DataTableInstance,{
        'profile_id': {
            validators: {
                notEmpty: {
                    message: 'field required'
                }
            }
        },

        'title': {
            validators: {
                notEmpty: {
                    message: 'field required'
                }
            }
        },

        'package_name[]': {
            validators: {
                notEmpty: {
                    message: 'field required'
                }
            }
        },


        'description[]': {
            validators: {
                notEmpty: {
                    message: 'field required'
                }
            }
        },
        'price[]': {
            validators: {
                notEmpty: {
                    message: 'field required'
                }
            }
        },
        
    });
});