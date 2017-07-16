var TableDatatablesManaged = function() {
    var e = function() {
            var e = $("#modules");
            e.dataTable({
                language: {
                    aria: {
                        sortAscending: ": activate to sort column ascending",
                        sortDescending: ": activate to sort column descending"
                    },
                    emptyTable: "No modules there yet, create new one",
                    info: "Showing _START_ to _END_ of _TOTAL_ records",
                    infoEmpty: "No records found",
                    infoFiltered: "(filtered1 from _MAX_ total records)",
                    lengthMenu: "Show _MENU_",
                    search: "Search:",
                    zeroRecords: "No matching records found",
                    paginate: {
                        previous: "Prev",
                        next: "Next",
                        last: "Last",
                        first: "First"
                    }
                },
                bStateSave: !0,
                lengthMenu: [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"]
                ],
                pageLength: 20,
                pagingType: "bootstrap_full_number",
                columnDefs: [{
                    orderable: !1,
                    targets: [0]
                }, {
                    searchable: !1,
                    targets: [0]
                }, {
                    className: "dt-right"
                }],
                order: [
                    [1, "asc"]
                ]
            });
            jQuery("#modules_wrapper");
            e.find(".group-checkable").change(function() {
                var e = jQuery(this).attr("data-set"),
                    t = jQuery(this).is(":checked");
                jQuery(e).each(function() {
                    t ? ($(this).prop("checked", !0), $(this).parents("tr").addClass("active")) : ($(this).prop("checked", !1), $(this).parents("tr").removeClass("active"))
                })
            }), e.on("change", "tbody tr .checkboxes", function() {
                $(this).parents("tr").toggleClass("active")
            })
        };
    return {
        init: function() {
            jQuery().dataTable && (e())
        }
    }
}();