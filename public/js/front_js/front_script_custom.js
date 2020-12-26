
$(document).ready(function() {
/*********************************************************************
* 
* AJAX - CSRF TOEKN PASSING USING META TAG ON HEADER 
* 
*********************************************************************/
    $.ajaxSetup({
        beforeSend: function(xhr, type) {
            if (!type.crossDomain) {
                xhr.setRequestHeader(
                    "X-CSRF-Token",
                    $('meta[name="csrf-token"]').attr("content")
                );
            }
        }
    });
/********************************************************************
* 
* AJAX - SORT & FILTER ON LISTING PROUDCT  PAGE: 
* 
*********************************************************************/
    $("#sort").on("change", function() {
        var sort = $(this).val();
        var url = $("#url").val();
        var generation = get_filter("generation");
        var processor = get_filter("processor");
        var ram = get_filter("ram");
        var hdd = get_filter("hdd");
        var ssd = get_filter("ssd");
        var graphics = get_filter("graphics");
        $('.viewToggle').addClass('active');
        $('.viewToggle2').removeClass('active');

        $.ajax({
            url: url,
            method: "post",
            data: {generation:generation,processor:processor,ram:ram,hdd:hdd,ssd:ssd,graphics:graphics,sort:sort,url:url},
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });

    $(".generation").on("click", function() {
        var generation = get_filter("generation");
        var processor = get_filter("processor");
        var ram = get_filter("ram");
        var hdd = get_filter("hdd");
        var ssd = get_filter("ssd");
        var graphics = get_filter("graphics");
        var sort = $("#sort option:selected").val();
        var url = $("#url").val();
        $('.viewToggle').addClass('active');
        $('.viewToggle2').removeClass('active');
        $.ajax({
            url: url,
            method: "post",
            data: {generation:generation,processor:processor,ram:ram,hdd:hdd,ssd:ssd,graphics:graphics,sort:sort,url:url},
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });
    $(".processor").on("click", function() {
        var generation = get_filter("generation");
        var processor = get_filter("processor");
        var ram = get_filter("ram");
        var hdd = get_filter("hdd");
        var ssd = get_filter("ssd");
        var graphics = get_filter("graphics");
        var sort = $("#sort option:selected").val();
        var url = $("#url").val();
        $('.viewToggle').addClass('active');
        $('.viewToggle2').removeClass('active');
        $.ajax({
            url: url,
            method: "post",
            data: {generation:generation,processor:processor,ram:ram,hdd:hdd,ssd:ssd,graphics:graphics,sort:sort,url:url},
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });
    $(".ram").on("click", function() {
        var generation = get_filter("generation");
        var processor = get_filter("processor");
        var ram = get_filter("ram");
        var hdd = get_filter("hdd");
        var ssd = get_filter("ssd");
        var graphics = get_filter("graphics");
        var sort = $("#sort option:selected").val();
        var url = $("#url").val();
        $('.viewToggle').addClass('active');
        $('.viewToggle2').removeClass('active');
        $.ajax({
            url: url,
            method: "post",
            data: {generation:generation,processor:processor,ram:ram,hdd:hdd,ssd:ssd,graphics:graphics,sort:sort,url:url},
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });
    $(".ssd").on("click", function() {
        var generation = get_filter("generation");
        var processor = get_filter("processor");
        var ram = get_filter("ram");
        var hdd = get_filter("hdd");
        var ssd = get_filter("ssd");
        var graphics = get_filter("graphics");
        var sort = $("#sort option:selected").val();
        var url = $("#url").val();
        $('.viewToggle').addClass('active');
        $('.viewToggle2').removeClass('active');
        $.ajax({
            url: url,
            method: "post",
            data: {generation:generation,processor:processor,ram:ram,hdd:hdd,ssd:ssd,graphics:graphics,sort:sort,url:url},
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });
    $(".hdd").on("click", function() {
        var generation = get_filter("generation");
        var processor = get_filter("processor");
        var ram = get_filter("ram");
        var hdd = get_filter("hdd");
        var ssd = get_filter("ssd");
        var graphics = get_filter("graphics");
        var sort = $("#sort option:selected").val();
        var url = $("#url").val();
        $('.viewToggle').addClass('active');
        $('.viewToggle2').removeClass('active');
        $.ajax({
            url: url,
            method: "post",
            data: {generation:generation,processor:processor,ram:ram,hdd:hdd,ssd:ssd,graphics:graphics,sort:sort,url:url},
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });
    $(".graphics").on("click", function() {
        var generation = get_filter("generation");
        var processor = get_filter("processor");
        var ram = get_filter("ram");
        var hdd = get_filter("hdd");
        var ssd = get_filter("ssd");
        var graphics = get_filter("graphics");
        var sort = $("#sort option:selected").val();
        var url = $("#url").val();
        $('.viewToggle').addClass('active');
        $('.viewToggle2').removeClass('active');
        $.ajax({
            url: url,
            method: "post",
            data: {generation:generation,processor:processor,ram:ram,hdd:hdd,ssd:ssd,graphics:graphics,sort:sort,url:url},
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });
    function get_filter(class_name) {
        var filter = [];
        $("." + class_name + ":checked").each(function() {
            filter.push($(this).val());
        });
        return filter;
    }

/*************************************************************
* 
* AJAX - PRODUCT LISTING PAGE PAGINATION
* 
*************************************************************/
    $(document).on('click','.pagination a', function(event){
        event.preventDefault();
        $('.viewToggle').addClass('active');
        $('.viewToggle2').removeClass('active');
        $('li').removeClass('active');
        $('li').removeClass('disabled');
        $(this).parent('li').addClass('active');
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });
    function fetch_data(page){
        var generation = get_filter("generation");
        var processor = get_filter("processor");
        var ram = get_filter("ram");
        var hdd = get_filter("hdd");
        var ssd = get_filter("ssd");
        var graphics = get_filter("graphics");
        var sort = $("#sort option:selected").val();
        var url = $("#url").val();
        $.ajax({
            method: "GET",
            url: url+"?page="+page,
            data: {generation:generation,processor:processor,ram:ram,hdd:hdd,ssd:ssd,graphics:graphics,sort:sort,url:url},
            success : function(data){
                $('.filter_products').html(data);
            }
        });
    }
/********************************************************************
* 
* AJAX - PRICE UPDATE BY PRODUCT COLOR ON SINGLE PROUDCT VIEW PAGE: 
* 
*********************************************************************/
    $("#getPrice").on("change", function() {
        var color = $(this).val();
        var product_id = $(this).attr("product-id");
        $.ajax({
            url: "/get-product-price",
            data: { color: color, product_id: product_id },
            type: "post",
            success: function(resp) {
                $(".getAttrPrice").html("৳ " + resp['price']);
                $(".getDiscountPrice").html("৳ " + resp['discounted_price']);
            },
            error: function() {}
        });
    });


/********************************************************************
* 
* PRODUCTS-ADD-TO-CART
* 
*********************************************************************/

    $("#add-to-cart").on('click',function(){
        var product_id = $("#product_id").val();
        var product_color =$("#getPrice").val();
        var product_quantity = $("#qty").val();
        $("#success-add-to-cart").hide();
        if (product_color == "none") {
            Swal.fire({
                icon: 'warning',
                text: 'Please select any Color!',
            });
            return false;
        }
        $.ajax({
            type: "get",
            url : "/add-to-cart",
            data: {product_id:product_id,product_quantity:product_quantity,product_color:product_color},
            success: function(resp){
               if(resp['status'] =="quantity_limit_exceed"){
                    Swal.fire({
                        icon: 'warning',
                        title: 'Sorry :(',
                        text: product_color+ ' color is only '+resp['stock_available']+' available!',
                    });
               }
               else if(resp['status']=="color_already_exists"){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: product_color+' color already exists in your Shopping Cart!',
                  });
               }
               else{
                   $("#success-add-to-cart").fadeTo(4000, 500).show();
                   $('html, body').animate({scrollTop: '0px'}, 1000);
               }
            },
            error: function() {
            }
        });
                   

    });

/********************************************************************
* 
* UPDATE CART ITEMS
* 
*********************************************************************/
    $(document).on('click','.btnItemUpdate',function(){
        if($(this).hasClass('qtyMinus')){
            var qty = $(this).next().val();
            if(qty<=1){
                Swal.fire({
                    icon: 'warning',
                    text: 'Item can not be less than 1',
                });
                return false;
            }else{
                update_qty = parseInt(qty)-1;
            }
        }
        if($(this).hasClass('qtyPlus')){
            var qty = $(this).prev().val();
            update_qty = parseInt(qty)+1;
        }
        var cartid = $(this).data('cartid');
        $.ajax({
            data : {cartid:cartid,qty:update_qty},
            url:'/update-cart-item-qty',
            type:'post',
            success: function(resp){
                if(resp['status']== true){
                    $(".AppendCartItems").html(resp.view);
                }else{
                    Swal.fire({
                    icon: 'warning',
                    title: 'Sorry :(',
                    text: 'Stock is not available!',
                });
                return false;
                }
            }, error: function(){
                console.log("Error")
            }
        })
    });
/********************************************************************
* 
* REMOVE CART ITEMS
* 
*********************************************************************/
    $(document).on('click','.btnItemDelete',function(){
        var cartid = $(this).data('cartid');
        $.ajax({
            data : {cartid:cartid},
            url:'/delete-cart-item',
            type:'post',
            success: function(resp){
                toastr.error('','Item removed from your Cart');
                $(".AppendCartItems").html(resp.view);
            }, error: function(){
                console.log("Error")
            }
        })
    });

/********************************************************************
* 
* CUSTOMER REGISTRATION FORM VALIDATION USING JQUERY
* 
*********************************************************************/
    $(function(){
        var $userRegistrationForm = $("#userRegistration");
        var $userLogin = $("#userLogin");
        var $recoverPassowrd = $("#recoverPassowrd");
        var $userProfile = $("#userProfile");
        var $updatePassword = $("#updatePassword");
        if($userRegistrationForm.length){
            $userRegistrationForm.validate({
                validClass: "is-valid",
                rules:{
                    user_name:{
                        required: true
                    },
                    user_mobile:{
                        required: true,
                        minlength:11,
                    },
                    user_email:{
                        required: true,
                        email: true,
                        remote:"check-user-email",
                    },
                    user_password:{
                        required: true,
                        minlength: 5,
                    },
                    user_confirm_password:{
                        required: true,
                        equalTo: '#user_password'
                    },
                },
                messages:{
                    user_name:{
                        required:'Please enter your name'
                    },
                    user_mobile:{
                        required:'Please enter your mobile number'
                    },
                    user_email:{
                        required:'Please enter email address',
                        email: "Please enter valid email address!",
                        remote:"Account with this email already exists",
                    },
                    user_password:{
                        required:'Please enter  password',
                        minlength: "Your password must be at least 5 characters long",

                    },
                    user_confirm_password:{
                        required:'Please enter confirm password',
                        equalTo:'Passwords do not match'
                    },
                }
            })
        }
        if($userLogin.length){
            $userLogin.validate({
                validClass: "is-valid",
                rules:{
                    login_email:{
                        required: true,
                        email: true,
                    },
                    login_password:{
                        required: true,
                    },
                },
                messages:{
                    login_email:{
                        required:'Please enter email address',
                        email: "Please enter valid email address!",
                    },
                    login_password:{
                        required:'Please enter  password',
                    },
                }
            })
        }
        if($recoverPassowrd.length){
            $recoverPassowrd.validate({
                validClass: "is-valid",
                rules:{
                    password:{
                        required: true,
                        minlength: 5,
                    },
                    confirm_password:{
                        required: true,
                        equalTo: '#password'
                    },
                },
                messages:{
                    password:{
                        required:'Please enter  password',
                        minlength: "Your password must be at least 5 characters long",
                    },
                    confirm_password:{
                        required:'Please enter confirm password',
                        equalTo:'Passwords do not match'
                    },
                }
            })
        }
        if($userProfile.length){
            $userProfile.validate({
                validClass: "is-valid",
                rules:{
                    name:{
                        required: true
                    },
                    mobile:{
                        required: true,
                        minlength:11,
                    },
                },
                messages:{
                    name:{
                        required:'Please enter your name'
                    },
                    mobile:{
                        required:'Please enter your mobile number'
                    },
                }
            })
        }
        if($updatePassword.length){
            $updatePassword.validate({
                validClass: "is-valid",
                rules:{
                    current_password:{
                        required: true,
                        remote:"check-user-password",
                    },
                    password:{
                        required: true,
                        minlength: 5,
                    },
                    confirm_password:{
                        required: true,
                        equalTo: '#password'
                    },
                },
                messages:{
                    current_password:{
                        required:'Please enter current password',
                        remote:"Please enter correct password",
                    },
                    password:{
                        required:'Please enter new password',
                        minlength: "Your password must be at least 5 characters long",
                    },
                    confirm_password:{
                        required:'Please enter confirm password',
                        equalTo:'Passwords do not match'
                    },
                }
            })
        }
    });

/********************************************************************
* 
* PRODUCTS-ADD-TO-WISHLIST
* 
*********************************************************************/
$(document).on("click",".add-to-cart",function(){
    var product_id =$(this).attr("product_id");
    var product_name = $(this).attr("product_name");
    var message = "You must login or create an account to save "+product_name+" to your wish list";
    var added_message = "You have added successfully "+product_name+" to your wish list";
    var already_added_message = "You have already added "+product_name+" to your wish list";
    $.ajax({
        type: "get",
        url : "/add-to-wishlist",
        data: {product_id:product_id},
        success: function(resp){
           if(resp == "no_login"){
            toastr.error('',message);
           }
           else if(resp =="added_to_wishlist"){
            toastr.success('',added_message);
           }
           else if(resp =="already_added"){
                toastr.error('',already_added_message);
           }
        },
        error: function() {
        }
    });
});

/********************************************************************
* 
* REMOVE WISHLIST ITEMS
* 
*********************************************************************/
$(document).on('click','.btnItemDelete',function(){
    var wishlist_id = $(this).data('wishlist_id');
    $.ajax({
        data : {wishlist_id:wishlist_id},
        url:'/delete-wishlist-item',
        type:'post',
        success: function(resp){
            toastr.error('','Item removed from your Wishlist');
            $(".AppendWishlistItems").html(resp.view);
        }, error: function(){
            console.log("Error")
        }
    })
});

/********************************************************************
* 
* PRODUCTS-ADD-TO-COMPARE
* 
*********************************************************************/

$(document).on("click",".add-to-compare",function(){
    var product_id =$(this).attr("product_id");
    var product_name = $(this).attr("product_name");
    var added_message = "You have added  "+product_name+" to your product comparison";
    var already_added_message = "You have already added "+product_name+" to your product comparison";
    $.ajax({
        type: "get",
        url : "/add-to-compare",
        data: {product_id:product_id},
        success: function(resp){
           if(resp == "added_to_compare"){
            toastr.success(added_message,'Success');
           }
           else if(resp =="already_added"){
                toastr.error(already_added_message,'Failed');
           }
           else if(resp =="limit_exceded"){
                toastr.error("You can add upto 4 products to your product comparison",'Failed');
           }
        },
        error: function() {
        }
    });
               

});

/********************************************************************
* 
* REMOVE COMPARE ITEMS
* 
*********************************************************************/
$(document).on('click','.btnItemDelete',function(){
    var comparison_id = $(this).data('comparison_id');
    $.ajax({
        data : {comparison_id:comparison_id},
        url:'/delete-compare-item',
        type:'post',
        success: function(resp){
            toastr.error('','Item removed from your Comparison');
            $(".AppendCompareItems").html(resp.view);
        }, error: function(){
            console.log("Error")
        }
    })
});












});



//GARBAGE AREA
// $("#sort").on('change',function(){
//     this.form.submit();
// });
