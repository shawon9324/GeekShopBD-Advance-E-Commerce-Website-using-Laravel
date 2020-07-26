$(document).ready(function() {
    //check_admin_pwd_correct_or_not
    $("#current_password").keyup(function() {
        var current_password = $("#current_password").val();

        $.ajax({
            type: "post",
            url: "/admin/check-current-password",
            data: { current_password: current_password },
            success: function(resp) {
                if (resp == "false") {
                    $("#checkCurrentPwd").html(
                        "<font color=red>Current Password is incorrect</font>"
                    );
                    $("#current_password")
                        .removeClass("form-control")
                        .addClass("form-control is-invalid");
                } else if (resp == "true") {
                    $("#checkCurrentPwd").html(
                        "<font color=green>Current Password is correct</font>"
                    );
                    $("#current_password")
                        .removeClass("form-control is-invalid")
                        .addClass("form-control is-valid");
                }
            },
            error: function() {}
        });
    });

    //Section status Active/Inactive toggling update
    $(".updateSectionStatus").click(function() {
        var status = $(this).text();
        var section_id = $(this).attr("section_id");
        $.ajax({
            type: "post",
            url: "/admin/update-section-status",
            data: { status: status, section_id: section_id },
            success: function(resp) {
                if (resp["status"] == 0) {
                    $("#section-" + section_id).html(
                        "<a class='updateSectionStatus' href='javascript:void(0)'> Inactive</a>"
                    );
                } else if (resp["status"] == 1) {
                    $("#section-" + section_id).html(
                        "<a class='updateSectionStatus' href='javascript:void(0)'>Active </a>"
                    );
                }
            },
            error: function() {
            }
        });
    });



    //Category status Active/Inactive toggling update
    $(".updateCategoryStatus").click(function(){
        var status = $(this).text();
        var category_id = $(this).attr("category_id");
        $.ajax({
            type: "post",
            url: "/admin/update-category-status",
            data: { status: status, category_id: category_id },
            success: function(resp) {
                if (resp["status"] == 0) {
                    $("#category-" + category_id).html("<a class='updateCategoryStatus' href='javascript:void(0)'> Inactive</a>");
                } else if (resp["status"] == 1) {
                    $("#category-" + category_id).html("<a class='updateCategoryStatus' href='javascript:void(0)'>Active </a>");
                }
            },
            error: function() {
            }
        });
    });





        //Append Category level in the Add category form

        $("#section_id").change( function() {
            var section_id = $(this).val();
            $.ajax({
                type:"post",
                url:"/admin/append-categories-level",
                data:{section_id:section_id},
                success:function(resp){
                    $("#appendCategoriesLevel").html(resp);
                },error: function() {
                }
            });
        });


});
