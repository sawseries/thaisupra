

$(document).ready(function () {

    $("#container-fluid").dblclick(function () {
        hide_last();
        $("#dropdown_menu_content").hide();
    });
    
    
    $('#txtdepartment_smalls').select2({});
  //  $('b[role="presentation"]').hide();
    //$('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');
    
    
    $('#txtschools_st').select2({});
    $('b[role="presentation"]').hide();
    $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');
    
    
     $('#txtdepartment_small').select2({});


});

var lastfield = "";
var val_immediate = "";

function show_ele(ele) {
    
    
    if (lastfield != "") {
        hide_ele(lastfield);
    }

    val_immediate = $("#txt_"+ele).val();
    
    hide_immediate(lastfield);
    $("#ele_" + ele).fadeIn();
    $("#text_" + ele).hide();
    lastfield = ele;
}


function hide_ele(ele) {
    $("#ele_" + ele).hide();
    $("#text_" + ele).fadeIn();
}
function setval_immediate(val){
    
    val_immediate = val;
}


function hide_immediate(ele) {
   
   if(val_immediate=="school_set"){
          hide_school_set();
   }else{
   
    $("#text_"+ele).html(val_immediate);  
    $("#ele_" + ele).hide();
    $("#text_" + ele).fadeIn();
      }
}

function show_text(ele) {
    $("#text_" + ele).show();
}

function hide_last() {
   
      if(val_immediate!=""){
      $("#text_"+lastfield).html(val_immediate);  
      }
      
      if(val_immediate=="school_set"){
          hide_school_set();
      }
      
      $("#ele_" + lastfield).hide();
      $("#text_" + lastfield).show();
}


function cancel_row(ele, row) {
    
    $("#"+ele+row).fadeOut("normal", function() {
        $(this).remove();
    });
    
    //$("#"+ele+row).remove().fadeOut();
}


function show_ele_array(ele, array) {
    
    if (lastfield != "") {
        hide_ele_array(lastfield);
    }
    
    val_immediate = $("#txt"+ele+"_"+array).val();
    
    $("#ele_" + ele + "_" + array).fadeIn();
    $("#text_" + ele + "_" + array).hide();
    lastfield = ele + "_" + array;

}



function hide_ele_array(ele) {
    $("#ele_" + ele).hide();
    $("#text_" + ele).fadeIn();

}


function showinputmodal(){
      $('#myModal').modal('show'); 
             $('#span_modal').text('กรุณาระบุข้อมูลให้ครบถ้วน');
                return false;
}

function convertdate(dates){
    var data = new Date(dates);
    var d = data.getDate();
    var m = data.getMonth();
    var y = data.getFullYear();
    var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม",
"เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน",
"ตุลาคม","พฤศจิกายน","ธันวาคม");

    return d+" "+thmonth[m]+" "+(y+543);
}

function month(){
    
}


function checkprename(obj){
    if(obj.value=="อื่นๆ"){
        $("#txtprename_o").fadeIn(); 
    }else{
       $("#txtprename_o").hide(); 
    }
}



function selectdata(obj){
    
    
    
    get_department(obj.value.toString());
    get_school(obj.value.toString());
    
    $("#txtdepartment_small").show();
    
    
}


function get_department(obj){
 
     var _token = $('meta[name="csrf-token"]').attr('content');   
     $.ajax({
            url: "department",
            type: "POST",
            data: {
                department: obj,
                _token: _token
            },
            success: function (data) {
           
                $("#txtdepartment_small").empty();
           
                for(var i in data) {
                    for(var j in data[i]){
                          // console.log(data[i][j][2]);
                           
                           $("#txtdepartment_small").append("<option value='"+data[i][j][2]+"'>"+data[i][j][2]+"</option>");
                   }
                }
        
            }
      });
        
}



function get_school(obj){
 
     var _token = $('meta[name="csrf-token"]').attr('content');   
     $.ajax({
            url: "school",
            type: "POST",
            data: {
                department: obj,
                _token: _token
            },
            success: function (data) {
             
                $("#txtschools_st").empty();
         
                for(var i in data) {
                    for(var j in data[i]){

                           $("#txtschools_st").append("<option value='"+data[i][j][2]+"'>"+data[i][j][2]+"</option>");
                   }
                }
            }
      });
        
}


function show_ele_school_set(obj){
    
    val_immediate = 'school_set';
    $("#ele_department_big").fadeIn();
    $("#text_department_big").hide();
    
    $("#ele_department_small").fadeIn();
    $("#text_department_small").hide();
    
    $("#ele_school").fadeIn();
    $("#text_school").hide();
    
    $("#ele_schoolset").fadeIn();
   
    
}


function hide_school_set(){
    
   
    
    $("#ele_department_big").hide();
    $("#text_department_big").fadeIn();
    
    $("#ele_department_small").hide();
    $("#text_department_small").fadeIn();
    
    $("#ele_school").hide();
    $("#text_school").fadeIn();
    
     $("#ele_schoolset").hide();
    
}


function update_school_set(){
      var _token = $('meta[name="csrf-token"]').attr('content');   
    var dp_bigs = $("#txtdepartment_big").val();
    var dp_smalls = $("#txtdepartment_small").val();
    var schools = $("#txtschools_st").val();
    var ids = $("#hdnid").val();
    
     $.ajax({
            url: "PA_1_school_set",
            type: "POST",
            data: {
                id:ids,
                dp_big:dp_bigs,
                dp_small:dp_smalls,
                school:schools,
                _token: _token
            },
            success: function (data) {
              
             window.location.reload();
             
            }
      });
}
