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

        $.ajax({
            url: url,
            method: "post",
            data: { sort: sort, url: url },
            success: function(data) {
                $(".filter_products").html(data);
            }
        });
    });
});
