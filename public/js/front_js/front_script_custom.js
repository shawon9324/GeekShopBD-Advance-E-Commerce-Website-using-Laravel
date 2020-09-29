    // $("#sort").on('change',function(){
    //     this.form.submit();
    // });

$(document).ready(function() {
    $.ajaxSetup({
        beforeSend: function(xhr, type) {
            if (!type.crossDomain) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            }
        },
    });
    $("#sort").on('change', function() {
        var sort = $(this).val();
        var url = $("#url").val();
        var generation = get_filter('generation');

        $.ajax({
            url: url,
            method: "post",
            data: {generation:generation ,sort: sort, url: url },
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });

    $(".generation").on('click',function(){
        var generation = get_filter('generation');
        var sort = $("#sort option:selected").val();
        var url = $("#url").val();
        $.ajax({
            url: url,
            method: "post",
            data: {generation:generation,sort:sort,url:url },
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });
    function get_filter(class_name){
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }






});
