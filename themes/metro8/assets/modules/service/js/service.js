// document ready
$(function () {
    // initiating data table
    var DataTableInstance = new DataTableFactory();
    DataTableInstance.init({
        dt_id : '_datatable',
        columns: [
            { data: 'selectRow', name: 'selectRow' },
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
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
        'name_en': {
            validators: {
                notEmpty: {
                    message: 'field required'
                }
            }
        },

        'name_ar': {
            validators: {
                notEmpty: {
                    message: 'field required'
                }
            }
        },

        
        'days[]': {
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