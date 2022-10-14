// document ready
$(function () {
    // initiating data table
    var DataTableInstance = new DataTableFactory();
    DataTableInstance.init({
        dt_id : '_datatable',
        columns: [
            { data: 'selectRow', name: 'selectRow' },
            { data: 'id', name: 'id' },
            { data: 'photo', name: 'photo' },
            { data: 'provider_name', name: 'provider_name' },
            { data: 'title', name: 'title' },
            { data: 'price', name: 'price' },
            { data: 'service_name', name: 'service_name' },
            { data: 'status', name: 'status' },
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
        'provider_id': {
            validators: {
                notEmpty: {
                    message: 'Field is required'
                }
            }
        },

        'service_id': {
            validators: {
                notEmpty: {
                    message: 'Field is required'
                }
            }
        },
     
    });
});