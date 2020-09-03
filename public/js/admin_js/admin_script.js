//loader
window.addEventListener("load", function() {
    $(".loader").fadeOut(200);
});

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

    //Brand status Active/Inactive toggling update
    $(document).on("click", ".updateBrandStatus", function() {
        var status = $(this)
            .children("i")
            .attr("status");
        var brand_id = $(this).attr("brand_id");
        $.ajax({
            type: "post",
            url: "/admin/update-brand-status",
            data: { status: status, brand_id: brand_id },
            success: function(resp) {
                if (resp["status"] == 0) {
                    $("#brand-" + brand_id).html(
                        "<i class='fas fa-toggle-off fa-lg'  status='Inactive'></i>"
                    );
                } else if (resp["status"] == 1) {
                    $("#brand-" + brand_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:greenyellow;'status='Active'></i>"
                    );
                }
            },
            error: function() {}
        });
    });

    //Section status Active/Inactive toggling update
    $(document).on("click", ".updateSectionStatus", function() {
        var status = $(this)
            .children("i")
            .attr("status");
        var section_id = $(this).attr("section_id");
        $.ajax({
            type: "post",
            url: "/admin/update-section-status",
            data: { status: status, section_id: section_id },
            success: function(resp) {
                if (resp["status"] == 0) {
                    $("#section-" + section_id).html(
                        "<i class='fas fa-toggle-off fa-lg' status='Inactive'></i></a>"
                    );
                } else if (resp["status"] == 1) {
                    $("#section-" + section_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:greenyellow;'status='Active'></i>"
                    );
                }
            },
            error: function() {}
        });
    });

    //Category status Active/Inactive toggling update
    $(document).on("click", ".updateCategoryStatus", function() {
        var status = $(this)
            .children("i")
            .attr("status");
        var category_id = $(this).attr("category_id");
        $.ajax({
            type: "post",
            url: "/admin/update-category-status",
            data: { status: status, category_id: category_id },
            success: function(resp) {
                if (resp["status"] == 0) {
                    $("#category-" + category_id).html(
                        "<i class='fas fa-toggle-off fa-lg'  status='Inactive'></i>"
                    );
                } else if (resp["status"] == 1) {
                    $("#category-" + category_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:greenyellow;'status='Active'></i>"
                    );
                }
            },
            error: function() {}
        });
    });

    //Products status Active/Inactive toggling update
    $(document).on("click", ".updateProductStatus", function() {
        var status = $(this)
            .children("i")
            .attr("status");
        var product_id = $(this).attr("product_id");
        $.ajax({
            type: "post",
            url: "/admin/update-product-status",
            data: { status: status, product_id: product_id },
            success: function(resp) {
                if (resp["status"] == 0) {
                    $("#product-" + product_id).html(
                        "<i class='fas fa-toggle-off fa-lg'  status='Inactive'></i>"
                    );
                } else if (resp["status"] == 1) {
                    $("#product-" + product_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:greenyellow;'status='Active'></i>"
                    );
                }
            },
            error: function() {}
        });
    });
    //Banner status Active/Inactive toggling update
    $(document).on("click", ".updateBannerStatus", function() {
        var status = $(this)
            .children("i")
            .attr("status");
        var banner_id = $(this).attr("banner_id");
        $.ajax({
            type: "post",
            url: "/admin/update-banner-status",
            data: { status: status, banner_id: banner_id },
            success: function(resp) {
                if (resp["status"] == 0) {
                    $("#banner-" + banner_id).html(
                        "<i class='fas fa-toggle-off fa-lg'  status='Inactive'></i>"
                    );
                } else if (resp["status"] == 1) {
                    $("#banner-" + banner_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:greenyellow;'status='Active'></i>"
                    );
                }
            },
            error: function() {}
        });
    });

    //Append Category level in the Add category form

    $("#section_id").change(function() {
        var section_id = $(this).val();
        $.ajax({
            type: "post",
            url: "/admin/append-categories-level",
            data: { section_id: section_id },
            success: function(resp) {
                $("#appendCategoriesLevel").html(resp);
            },
            error: function() {}
        });
    });

    // //confrim delete alert records(normal default alert)

    // $(".confirmDelete").click(function(){
    //     var name = $(this).attr("name");
    //     if(confirm("Are you sure want to delete this"+name+"?"))
    //     {
    //         return true;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // });
    //default alert message timeout
    $(".alert")
        .fadeTo(4000, 500)
        .slideUp(1000, function() {
            $(".alert").slideUp(4000);
        });

    //confrim delete alert records(with Sweet Alert 2.0)

    $(document).on("click", ".confirmDelete", function() {
        var record_type = $(this).attr("record_type");
        var record_id = $(this).attr("record_id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then(result => {
            if (result.value) {
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
                window.location.href =
                    "/admin/delete-" + record_type + "/" + record_id;
            }
        });
    });

    //view image in update category form

    $(".imageView").click(function() {
        var image_id = $(this).attr("image_id");
        var image_info = $(this).attr("image_info");
        var image_folder = $(this).attr("image_folder");

        Swal.fire({
            title: image_info,
            imageUrl: "/img/" + image_folder + "/" + image_id,
            // imageWidth: 400,
            // imageHeight: 200,
            imageAlt: "Image"
        });
    });

    //Products attributes Add/remove script for future use from : https://www.codexworld.com/add-remove-input-fields-dynamically-using-jquery/
    var maxField = 10; //Input fields increment limitation
    var addButton = $(".add_button"); //Add button selector
    var wrapper = $(".field_wrapper"); //Input field wrapper
    var fieldHTML =
        '<div><br><input type="text" name="sku[]" value="" placeholder="SKU" style="width: 310px" required=""/>  <input type="number" name="stock[]" value="" placeholder="STOCK" style="width: 310px" required=""/>  <a href="javascript:void(0);" class="remove_button"> <i class="fa fa-minus-square" aria-hidden="true"></i></a></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on("click", ".remove_button", function(e) {
        e.preventDefault();
        $(this)
            .parent("div")
            .remove(); //Remove field html
        x--; //Decrement field counter
    });
});
