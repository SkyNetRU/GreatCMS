var FormValidation = function() {
    var e = function() {
            var e = $("#module_create"),
                r = $(".alert-danger", e),
                i = $(".alert-success", e);
            e.validate({
                errorElement: "span",
                errorClass: "help-block help-block-error",
                focusInvalid: !1,
                ignore: "",
                messages: {
                    select_multi: {
                        maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                        minlength: jQuery.validator.format("At least {0} items must be selected")
                    }
                },
                rules: {
                    title: {
                        minlength: 3,
                        required: !0
                    }
                },
                invalidHandler: function(e, t) {
                    i.hide(), r.show(), App.scrollTo(r, -200)
                },
                errorPlacement: function(e, r) {
                    var i = $(r).parent(".input-group");
                    i.size() > 0 ? i.after(e) : r.after(e)
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
                success: function(e) {
                    e.closest(".form-group").removeClass("has-error")
                },
                submitHandler: function(e) {
                    i.show(), r.hide()
                }
            })
        }

    return {
        init: function() {
            e();
        }
    }
}();
