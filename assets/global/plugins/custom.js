function SavePage () {
    var rows = [];
    $('.container > .row.gm-editing').each(function (r) {
        rows[r] = GetRowData($(this));
    });

    var data = {};
    data[token_name] = hash;
    data.content = rows;
    data.page_name = 'test';

    if (typeof page_id == "undefined") {
        url = '/gc-admin/pages/create_page_ajax'
    } else {
        url = '/gc-admin/pages/update_page/'+ page_id;
    }

    var html = $.ajax({
        type: "POST",
        dataType: 'json',
        data: data,
        url: url,
        success: function(jsondata){

            console.log(jsondata);
        }
    });

}

    function GetRowData (row) {
        var row_obj = row.data();
        row_obj.columns = [];
        row.children('.column').each(function (c) {
            row_obj.columns[c] = GetColumnData($(this));
        });
        delete row_obj.uiSortable;
        delete row_obj.sortableItem;

        return row_obj;
    }

    function GetColumnData(col) {
        var col_obj = col.data();
        col_obj.rows = [];
        delete col_obj.sortableItem;
        delete col_obj.uiSortable;
        col.children('.row').each(function (r) {
            console.log($(this).data());
            col_obj.rows[r] = GetRowData ($(this));
        });

        if (col_obj.rows.length == 0){
            delete col_obj.rows;
        }

        return col_obj;
    }