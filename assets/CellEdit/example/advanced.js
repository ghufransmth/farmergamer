var table;
$(document).ready(function () {
    table = $('#myAdvancedTable').DataTable( {
            "scrollY": "300px",
            "scrollCollapse": true,
            "paging": false,
            "columnDefs": [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
            } ],
            "select": {
                style:    'os',
                selector: 'td:first-child'
            },
            "order": [[ 1, 'asc' ]]
        } );
    table.MakeCellsEditable({
        "onUpdate": myCallbackFunction,
        "inputCss":'my-input-class',
        "columns": [3,4,5],
        "allowNulls": {
            "columns": [],
            "errorClass": 'error'
        },
        "confirmationButton": { // could also be true
            "confirmCss": 'my-confirm-class',
            "cancelCss": 'my-cancel-class'
        },
        "inputTypes": [
         /* {
                "column": 0,
                "type": "select-checkbox",
                "options": true
            },*/
           /* {
                "column":1, 
                "type": "list",
                "options":[
                    { "value": "1", "display": "Beaty" },
                    { "value": "2", "display": "Doe" },
                    { "value": "3", "display": "Dirt" }
                ]
            },*/
            {
                "column":3, 
                "type": "list",
                "options":[
                    { "value": "1", "display": "Lengkap" },
                    { "value": "2", "display": "Tidak Lengkap" }
                ]
            },
            {
                "column": 4,
                "type": "check", // requires jQuery UI: http://http://jqueryui.com/download/
                "options": {
                    "icon": "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif" // Optional
                }
            },
            {
                "column": 5,
                "type": "datepicker", // requires jQuery UI: http://http://jqueryui.com/download/
                "options": {
                    "icon": "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif" // Optional
                }
            },

        ]
    });

});

function myCallbackFunction (updatedCell, updatedRow, oldValue) {
    console.log("The new value for the cell is: " + updatedCell.data());
    console.log("The old value for that cell was: " + oldValue);
    console.log("The values for each cell in that row are: " + updatedRow.data());
}

function destroyTable() {
    if ($.fn.DataTable.isDataTable('#myAdvancedTable')) {
        table.destroy();
        table.MakeCellsEditable("destroy");
    }
}