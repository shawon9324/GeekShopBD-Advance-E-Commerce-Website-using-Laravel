
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


    //add-to-cart-ajax

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
               if(resp['status']=="quantity_limit_exceed"){
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
});



//GARBAGE AREA
// $("#sort").on('change',function(){
//     this.form.submit();
// });
