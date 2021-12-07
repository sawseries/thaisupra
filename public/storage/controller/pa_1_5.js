
var inno =1;
var inno_str="inno_row_";
function add_innovation(){
    
    $("#div_innovation").append('<div id="inno_row_'+inno+'" class="panel_inno">\n\
      <table style="width:100%;">\n\
      <tr>\n\
       <td><input type="text" class="form-control" id="txt_title" name="txt_title[]" placeholder="หัวข้อ" required></td>\n\
       <td rowspan="2" style="text-align:center;">\n\
          <a onclick="save_inno_row('+inno+');" class="btn btn-primary" style="border:1px solid gray;">save</a>\n\
          <a class="btn btn-primary" style="border:1px solid gray;" onclick="cancel_row(\''+inno_str+'\','+inno+');"><li class="fa fa-trash"></li></a>\n\
        </td>\n\
       </tr>\n\
      <tr>\n\
      <td><textarea class="form-control" id="txt_inno" name="txt_inno[]" placeholder="รายละเอียด" required></textarea>\n\</td>\n\
      </tr>\n\
      </table>\n\
    </div>');
    inno++;
}

 
function add_innovation_edit(){
    $("#blank_inno").hide();
    $("#div_innovation").append('<div id="inno_row_'+inno+'" class="panel_inno">\n\
      <table style="width:100%;margin:0.5em;" border="0">\n\
      <tr>\n\
        <td><input  type="text" class="form-control" id="txtititle" name="txtititle['+inno+']" placeholder="หัวข้อ" required></td>\n\
        <td rowspan="2" style="text-align:center;">\n\
          <a onclick="save_inno_row('+inno+');" class="btn btn-primary" style="border:1px solid gray;">save</a>\n\
          <a class="btn btn-primary" style="border:1px solid gray;" onclick="cancel_row(\''+inno_str+'\','+inno+');"><li class="fa fa-trash"></li></a>\n\
        </td>\n\
      </tr>\n\
      <tr>\n\
      <td><textarea class="form-control" id="txtiinno" name="txtiinno['+inno+']" placeholder="รายละเอียด" required></textarea>\n\</td>\n\
      </tr>\n\
      </table>\n\
    </div>');
    inno++;
}


 function save_inno_row(rowid){
 
      
        var _token   = $('meta[name="csrf-token"]').attr('content'); 
        var inno = $("[name='txtiinno["+rowid+"]'").val();
        var title = $("[name='txtititle["+rowid+"]'").val();

        $.ajax({
        url: "PA_1_insert_inno",
        type:"POST",
         data:{
            inno:inno,
            title:title,
            _token: _token
        },
        success:function(data){
        window.location.reload();
        }
       });
     }
