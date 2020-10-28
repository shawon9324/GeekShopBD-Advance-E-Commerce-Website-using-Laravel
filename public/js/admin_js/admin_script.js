/********************************************************************
* 
* ADMIN PANEL : LOADER ANIMATION
* 
*********************************************************************/
window.addEventListener('load', function load() {
    const loader = document.getElementById('loader');
    setTimeout(function() {
      loader.classList.add('fadeOut');
    }, 150);
  });
/********************************************************************
* BACK BUTTON FUNCTION
*********************************************************************/
function goBack() {
    window.history.back();
}

$(document).ready(function (){

/********************************************************************
* 
* AJAX - DYNAMIC CURRENT PASSWORD MATCH CHECKING :[admin-password-change] 
* 
*********************************************************************/
    $("#current_password").keyup(function () {
        var current_password = $("#current_password").val();

        $.ajax({
            type: "post",
            url: "/admin/check-current-password",
            data: { current_password: current_password },
            success: function (resp) {
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
            error: function () { }
        });
    });

/********************************************************************
* 
* AJAX - STATUS ACTIVE/INACTIVE TOGGLING : [brand] 
* 
*********************************************************************/
    $(document).on("click", ".updateBrandStatus", function () {
        var status = $(this)
            .children("i")
            .attr("status");
        var brand_id = $(this).attr("brand_id");
        $.ajax({
            type: "post",
            url: "/admin/update-brand-status",
            data: { status: status, brand_id: brand_id },
            success: function (resp) {
                if (resp["status"] == 0) {
                    $("#brand-" + brand_id).html(
                        "<i class='fas fa-toggle-off fa-lg'  status='Inactive'></i>"
                    );
                } else if (resp["status"] == 1) {
                    $("#brand-" + brand_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:cyan;'status='Active'></i>"
                    );
                }
            },
            error: function () { }
        });
    });

/********************************************************************
* 
* AJAX - STATUS ACTIVE/INACTIVE TOGGLING : [section] 
* 
*********************************************************************/
    $(document).on("click", ".updateSectionStatus", function () {
        var status = $(this)
            .children("i")
            .attr("status");
        var section_id = $(this).attr("section_id");
        $.ajax({
            type: "post",
            url: "/admin/update-section-status",
            data: { status: status, section_id: section_id },
            success: function (resp) {
                if (resp["status"] == 0) {
                    $("#section-" + section_id).html(
                        "<i class='fas fa-toggle-off fa-lg' status='Inactive'></i></a>"
                    );
                } else if (resp["status"] == 1) {
                    $("#section-" + section_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:cyan;'status='Active'></i>"
                    );
                }
            },
            error: function () { }
        });
    });
/********************************************************************
*  
* AJAX - STATUS ACTIVE/INACTIVE TOGGLING : [category] 
* 
*********************************************************************/
    $(document).on("click", ".updateCategoryStatus", function () {
        var status = $(this)
            .children("i")
            .attr("status");
        var category_id = $(this).attr("category_id");
        $.ajax({
            type: "post",
            url: "/admin/update-category-status",
            data: { status: status, category_id: category_id },
            success: function (resp) {
                if (resp["status"] == 0) {
                    $("#category-" + category_id).html(
                        "<i class='fas fa-toggle-off fa-lg'  status='Inactive'></i>"
                    );
                } else if (resp["status"] == 1) {
                    $("#category-" + category_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:cyan;'status='Active'></i>"
                    );
                }
            },
            error: function () { }
        });
    });
/********************************************************************
* 
* AJAX - STATUS ACTIVE/INACTIVE TOGGLING : [product] 
* 
*********************************************************************/
    $(document).on("click", ".updateProductStatus", function () {
        var status = $(this)
            .children("i")
            .attr("status");
        var product_id = $(this).attr("product_id");
        $.ajax({
            type: "post",
            url: "/admin/update-product-status",
            data: { status: status, product_id: product_id },
            success: function (resp) {
                if (resp["status"] == 0) {
                    $("#product-" + product_id).html(
                        "<i class='fas fa-toggle-off fa-lg'  status='Inactive'></i>"
                    );
                } else if (resp["status"] == 1) {
                    $("#product-" + product_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:cyan;'status='Active'></i>"
                    );
                }
            },
            error: function () { }
        });
    });
/********************************************************************
* 
* AJAX - STATUS ACTIVE/INACTIVE TOGGLING : [banner] 
* 
*********************************************************************/
    $(document).on("click", ".updateBannerStatus", function () {
        var status = $(this)
            .children("i")
            .attr("status");
        var banner_id = $(this).attr("banner_id");
        $.ajax({
            type: "post",
            url: "/admin/update-banner-status",
            data: { status: status, banner_id: banner_id },
            success: function (resp) {
                if (resp["status"] == 0) {
                    $("#banner-" + banner_id).html(
                        "<i class='fas fa-toggle-off fa-lg'  status='Inactive'></i>"
                    );
                } else if (resp["status"] == 1) {
                    $("#banner-" + banner_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:cyan;'status='Active'></i>"
                    );
                }
            },
            error: function () { }
        });
    });
/********************************************************************************
* 
* AJAX - STATUS ACTIVE/INACTIVE TOGGLING : [product-attributes(stock,color)] 
* 
********************************************************************************/
    $(document).on("click", ".updateProductAttributesStatus", function () {
        var status = $(this)
            .children("i")
            .attr("status");
        var attribute_id = $(this).attr("attribute_id");
        $.ajax({
            type: "post",
            url: "/admin/update-product-attributes-status",
            data: { status: status, attribute_id: attribute_id },
            success: function (resp) {
                if (resp["status"] == 0) {
                    $("#attribute-" + attribute_id).html(
                        "<i class='fas fa-toggle-off fa-lg'  status='Inactive'></i>"
                    );
                } else if (resp["status"] == 1) {
                    $("#attribute-" + attribute_id).html(
                        "<i class='fas fa-toggle-on fa-lg' style='color:cyan;'status='Active'></i>"
                    );
                }
            },
            error: function () { }
        });
    });
/********************************************************************
* 
* AJAX - APPEND CATEGORY LEVEL : [add-category-form] 
* 
*********************************************************************/
    $("#section_id").change(function () {
        var section_id = $(this).val();
        $.ajax({
            type: "post",
            url: "/admin/append-categories-level",
            data: { section_id: section_id },
            success: function (resp) {
                $("#appendCategoriesLevel").html(resp);
            },
            error: function () { }
        });
    });

    $(".alert")
        .fadeTo(4000, 500)
        .slideUp(1000, function () {
            $(".alert").slideUp(4000);
        });

/********************************************************************
* 
* CONFIRM DELETE SWEET-ALERT : [delete-button] 
* 
*********************************************************************/
    $(document).on("click", ".confirmDelete", function () {
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
 
/********************************************************************
* 
* IMAGE VIEW SWEET-ALERT : [update-form-image-view] 
* 
*********************************************************************/
    $(".imageView").click(function () {
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
/********************************************************************
* 
*  ADD MULTIPLE PRODUCTS ATTRIBUTE DYNAMICALLY : 
* Credit: https://www.codexworld.com/add-remove-input-fields-dynamically-using-jquery/
* 
*********************************************************************/
    var maxField = 10;
    var addButton = $(".add_button");
    var wrapper = $(".field_wrapper");
    var fieldHTML =
        '<div><br>'+
        ' <input type="text" name="sku[]" value="" placeholder="SKU" style="width: 310px" required=""/>'+
        ' <input type="number" name="color[]" value="" placeholder="COLOR" style="width: 310px" /> '+
        ' <input type="number" name="price[]" value="" placeholder="PRICE" style="width: 310px" /> '+
        ' <input type="number" name="stock[]" value="" placeholder="STOCK" style="width: 310px" required=""/>'+
         '<a href="javascript:void(0);" class="remove_button"> <i class="fa fa-minus-square" aria-hidden="true"></i></a></div>';
         var x = 1; 
    $(addButton).click(function () {
        if (x < maxField) {
            x++;
            $(wrapper).append(fieldHTML);
        }
    });
    $(wrapper).on("click", ".remove_button", function (e) {
        e.preventDefault();
        $(this)
            .parent("div")
            .remove();
        x--;
    });
});

    /*GARBAGE CODE
        // confrim delete alert records(normal default alert)
        $(".confirmDelete").click(function(){
            var name = $(this).attr("name");
            if(confirm("Are you sure want to delete this"+name+"?"))
            {
                return true;
            }
            else
            {
                return false;
            }
        });
        default alert message timeout
    */