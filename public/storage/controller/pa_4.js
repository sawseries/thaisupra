$(document).ready(function () {


    $('#txtidetail_1').summernote({
        height: 200,
    });
    
     $('#txtidetail_2').summernote({
        height: 200,
    });
    
     $('#txtidetail_3').summernote({
        height: 200,
    });
    
     $('#txtidetail_4').summernote({
        height: 200,
    });


    $('#txtdetail_1').summernote({
        height: 200,
    });

    $('#txtdetail_2').summernote({
        height: 200,
    });

    $('#txtdetail_3').summernote({
        height: 200,
    });

    $('#txtdetail_4').summernote({
        height: 200,
    });
    

    
});



function pa4_update_field(fields) {
  
    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("#txt" + fields).val();
    var ids = $("#hdnid").val();

    $.ajax({
        url: "PA4_update_field",
        type: "POST",
        data: {
            field: fields,
            value: values,
            id: ids,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
}