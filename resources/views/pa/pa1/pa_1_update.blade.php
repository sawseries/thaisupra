@extends('layouts.app')    
@section('content')
<style>
.select2-container--default .select2-selection--single{
    padding:6px;
    height:40px;
    font-size: 1.2em;  
    position: relative;
    
}
</style>

<div class="container-fluid" id="container-fluid">

    <div class="child">
        <div class="page_header">
                <table class="tb_header">
                    <tr class="border_bottom">
                        <td colspan="2">
                            <span class="blue_big"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="blue_big"><b>ข้อมูลทั่วไป</b></span>
                        </td>
                    </tr>
                </table>        
		@include('layouts.main3')
            </div>
    </div>

    

    <div class="child">
        <div class="page_header">
            <table class="tb_header" id="panel1_1">
                <tr class="border_bottom">
                    <td colspan="2">
                        <input type="hidden" id="hdnid" name="hdnid" value="{{$uProfile->id}}">
                        <span class="blue_big"><b><u>ข้อมูลทั่วไป</b></span>
                    </td>
                    <td colspan="3" style="text-align:right;"></td>
                </tr>             
            </table>
        </div>

        <div class="row" id="block">
            <div class="col-lg-4 col-md-4 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>คำนำหน้า</th>
                        <td>
                            <div id="ele_prename" class="display_none">
                                   <?php $arrprenm = ["นาย","นาง","นางสาว","ด.ช.","ด.ญ.","อื่นๆ"]; ?>
                                <select id="txtprename" name="txtprename" class="form-control" onchange="update_field('prename');">
                                    @for($i=0;$i<=count($arrprenm)-1;$i++)
                                    @if($arrprenm[$i]==$uProfile->prename)
                                    <option value="{{$arrprenm[$i]}}" selected>{{$arrprenm[$i]}}</option>
                                    @else
                                    <option value="{{$arrprenm[$i]}}">{{$arrprenm[$i]}}</option>
                                    @endif
                                    @endfor
                                   
                                </select>
                               
                            </div>
                            <div id="text_prename" class="display_text" onclick="show_ele('prename');">
                                {{$uProfile->prename}}
                            </div>

                        </td>
                    </tr>
                </table>
            </div> 

            <div class="col-lg-4 col-md-4 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>ชื่อ</th>
                        <td>
                            <div id="ele_fistname" class="display_none">
                                <input type="text" value="{{$uProfile->firstname}}" id="txtfirstname" name="txtfirstname" onchange="update_field('firstname');">
                            </div>
                            <div id="text_fistname" class="display_text" onclick="show_ele('fistname');">
                                {{$uProfile->firstname}}
                            </div>

                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>นามสกุล</th>
                        <td>
                            <div id="ele_lastname" class="display_none">
                                <input type="text" value="{{$uProfile->lastname}}" id="txtlastname" name="txtlastname" onchange="update_field('lastname');">
                            </div>
                            <div id="text_lastname" class="display_text" onclick="show_ele('lastname');">
                                {{$uProfile->lastname}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>สัญชาติ</th>
                        <td>
                            <div id="ele_national" class="display_none">
                                <input type="text" value="{{$uProfile->national}}" id="txtnational" name="txtnational" onchange="update_field('national');">

                            </div>
                            <div id="text_national" class="display_text" onclick="show_ele('national');">
                                {{$uProfile->national}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>เชื้อชาติ</th>
                        <td>
                            <div id="ele_race" class="display_none">
                                <input type="text" value="{{$uProfile->race}}" id="txtrace" name="{{$uProfile->race}}" onchange="update_field('race');">
                            </div>
                            <div id="text_race" class="display_text" onclick="show_ele('race');">
                                {{$uProfile->race}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>ศาสนา</th>
                        <td>
                            <div id="ele_religion" class="display_none">
                                <input type="text" value="{{$uProfile->religion}}" id="txtreligion" name="txtreligion" onchange="update_field('religion');">
                            </div>
                            <div id="text_religion" class="display_text" onclick="show_ele('religion');">
                                {{$uProfile->religion}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>ตำแหน่ง</th>
                        <td>
                            <div id="ele_position" class="display_none">

                                <select  class="form-control" id="txtposition" name="txtposition" onchange="update_field('position');" required>
                                    <option value="">-ตำแหน่ง-</option>
                                    @foreach(group_member('all') as $member)
                                    @if($uProfile->position==$member->group)
                                    <option value="{{$member->group}}" selected>{{$member->group}}</option>
                                    @else 
                                    <option value="{{$member->group}}">{{$member->group}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div id="text_position" class="display_text" onclick="show_ele('position');">
                                {{$uProfile->position}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>กลุ่มสาระ<br>การเรียนรู้</th>
                        <td>
                            <div id="ele_major" class="display_none">


                                <select  class="form-control" id="txtmajor" name="txtmajor" onchange="update_field('major');" required>
                                    <option value="">-กลุ่มสาระการเรียนรู้-</option>
                                    @foreach(group_learn('all') as $learn)
                                    @if($uProfile->major==$learn->group)
                                    <option value="{{$learn->group}}" selected>{{$learn->group}}</option>
                                    @else
                                    <option value="{{$learn->group}}">{{$learn->group}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div id="text_major" class="display_text" onclick="show_ele('major');">

                                {{$uProfile->major}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" >

                <table class="tbl_data" border="0">
                    <tr>
                        <th>ที่อยู่</th>
                        <td>
                            <div id="ele_address" class="display_none">
                                <textarea id="txtaddress" name="txtaddress" onchange="update_field('address');">{{$uProfile->address}}</textarea>
                            </div>
                            <div id="text_address" class="display_text" style="padding:0;" onclick="show_ele('address');">
                                {{$uProfile->address}}
                            </div>
                        </td>
                    </tr>
                </table>

            </div>   
        </div>
    </div>

 

    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="2">
                        <span class="blue_big"><b>ประวัติการทำงาน</b></span>
                    </td>
                    <td colspan="3" style="text-align:right;">

                    </td>
                </tr>
            </table>
        </div>

        <div class="row" id="block">

            <p><b><u> <span style="color:#1050A2;">การรับราชการ</span></u></b></p>
            <br>
            <div class="col-lg-4 col-md-4 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>วันที่บรรจุ</th>
                        <td>
                            <div id="ele_datestart" class="display_none">
                                <input type="date" value="{{$uProfile->datestart}}" id="txtdatestart" name="txtdatestart" onchange="update_field('datestart');">  
                            </div>
                            <div id="text_datestart" class="display_text" onclick="show_ele('datestart');">
                                {{datethai($uProfile->datestart)}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr> 
                        <th>วันที่เริ่มรับราชการ</th>
                        <td>

                            <div id="ele_datebegin" class="display_none">
                                <input type="date" value="{{$uProfile->datebegin}}" id="txtdatebegin" name="txtdatebegin" onchange="update_field('datebegin');">  
                            </div>
                            <div id="text_datebegin" class="display_text" onclick="show_ele('datebegin');">
                                {{datethai($uProfile->datebegin)}}
                            </div>

                        </td>
                    </tr>
                </table>
            </div>
             <div class="col-lg-12 col-md-12 col-sm-12"> 
            <div class="col-lg-4 col-md-4 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr> 
                        <th><span class="blue_small">อายุราชการรวม</span></th>
                        <td>

                            {{calage($uProfile->datestart)}} 

                        </td>
                    </tr>
                </table>
            </div>  
            </div>
            </div>

        <div class="row" id="block">

            <p><b><u> <span style="color:#1050A2;">วิทยฐานะ</span></u></b></p>
            <br>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-4 col-md-4 col-sm-12" style="float:left;">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>วิทยฐานะ</th>
                        <td>
                            <div id="ele_academic" class="display_none">


                                <select  class="form-control" id="txtacademic" name="txtacademic" onchange="update_field('academic');" required>
                                    <option value="">-วิทยฐานะ-</option>
                                    @foreach(teacher_academic('all') as $academic)
                                    @if($uProfile->academic==$academic->academic)
                                    <option value="{{$academic->academic}}" selected>{{$academic->academic}}</option>
                                    @else
                                    <option value="{{$academic->academic}}">{{$academic->academic}}</option>
                                    @endif
                                    @endforeach
                                </select>

                            </div>
                            <div id="text_academic" class="display_text" onclick="show_ele('academic');">
                                {{$uProfile->academic}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div> 

            <div class="col-lg-4 col-md-4 col-sm-12" style="float:left;">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>วันที่ดำรงตำแหน่ง</th>
                        <td>
                            <div id="ele_dateacademic" class="display_none">
                                <input type="date" id="txtdateacademic" name="txtdateacademic" value="{{$uProfile->dateacademic}}" onchange="update_field('dateacademic');">  
                            </div>
                            <div id="text_dateacademic" class="display_text" onclick="show_ele('dateacademic');">
                                {{datethai($uProfile->dateacademic)}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div> 

            <div class="col-lg-4 col-md-4 col-sm-12" style="float:left;">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>เงินเดือนปัจจุบัน</th>
                        <td>
                            <div id="ele_salary" class="display_none">
                                <input type="number" id="txtsalary" name="txtsalary" value="{{$uProfile->salary}}" onchange="update_field('salary');"> 
                            </div>
                            <div id="text_salary" class="display_text" onclick="show_ele('salary');">
                                {{$uProfile->salary}}
                            </div>

                        </td>
                    </tr>
                </table>
            </div>
            </div>
             <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-4 col-md-4 col-sm-12" style="float:left;">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>สังกัด</th>
                        <td>
                            <div id="ele_department_big" class="display_none">
                                
                                <select  class="form-control" id="txtdepartment_big" name="txtdepartment_big" style="width:100%;" onchange="selectdata(this);" required>    
                                    <option value="">-สังกัด-</option>
                                    @foreach(group_department('all') as $department)
                                    @if($uProfile->department_big==$department->department_bref)
                                    <option value="{{$department->department_bref}}" selected>{{$department->department_nm}} ({{$department->department_bref}})</option>
                                    @else
                                    <option value="{{$department->department_bref}}">{{$department->department_nm}} ({{$department->department_bref}})</option> 
                                    @endif
                                    @endforeach
                                </select>

                            </div>
                            <div id="text_department_big" class="display_text" onclick="show_ele_school_set('school_set');">
                                {{find_department_str($uProfile->department_big)}}
                            </div>

                        </td>
                    </tr>
                </table>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-12" style="float:left;">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>สังกัด</th>
                        <td>
                            <div id="ele_department_small" class="display_none">
                                
                                <select id="txtdepartment_small" name="txtdepartment_small" style="width:100%;">    

                                    @if($uProfile->department_small!="")
                                    <option value="{{$uProfile->department_small}}" selected>{{$uProfile->department_small}}</option>
                                    @else
                                    <option value="">ไม่มีสังกัด</option> 
                                    @endif
   
                                </select>

                            </div>
                             <div id="text_department_small" class="display_text" onclick="show_ele_school_set('txtdepartment_small');">
                                {{$uProfile->department_small}}
                            </div>
                        </td>
                    </tr>
                   
                </table>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-12" style="float:left;">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>โรงเรียน</th>
                        <td>

                            <div id="ele_school" class="display_none">
                                <select id="txtschools_st" name="txtschools_st" required style="width:100%;">    
                               
                                 <option value="{{$uProfile->school}}">{{$uProfile->school}}</option>
                                </select> 
                            </div>
                            <div id="text_school" class="display_text" onclick="show_ele_school_set('school_set');">
                                {{$uProfile->school}}
                            </div>


                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>

                            <div id="ele_schoolset" class="display_none">
                                 <a class="btn btn-primary" onclick="update_school_set();" style="margin-right: 10px;">save</a>
                        <a class="btn btn-primary" onclick="hide_school_set();">cancel</a>
                            </div>
                           


                        </td>
                    </tr>
                </table>
            </div> 
             </div>


            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px;margin-bottom:30px;">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th><b><span class="blue_small">อายุราชการตั้งแต่ดำรงค์ตำแหน่ง</span></b></th>
                            <td style="padding-left: 50px;">
                                {{calage($uProfile->dateacademic)}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
 
    <div class="child" >
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="2">
                        <span class="blue_big"><b>ประวัติการศึกษา</b></span>
                    </td>
                    <td colspan="3" style="text-align:right;">

                    </td>
                </tr>
            </table>
           
        </div>

        <div class="row" id="block">
            <table style="width: 100%;margin-bottom:30px;" border="0">
                <tr style="">
                    <td style="width: 50%;">
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_edu_edit();" ><li class="fa fa-plus"></li> เพิ่มวุฒิการศึกษา</a>
                    </td>
                </tr>
            </table>
            
            
            <div class="table-responsive">
                <table id="tbl_edu" class="table_green" style="width:100%;"> 
                    <tr class="tr_header">
                        <th style="width:25%;">วุฒิ</th>
                        <th style="width:20%;">คณะ</th>
                        <th style="width:20%;">สาขา</th>
                        <th style="width:20%;">สถานศึกษา</th>
                        <th style="width:15%;"></th>
                    </tr>         

                    <?php $i = 0; ?>
                    @if(count($uEducation)>0)
                    @foreach($uEducation as $edu)
                    <tr style="height:40px;">
                        <td>
                            <div id="ele_edu_type_{{$i}}" class="display_none">                        
                                <input type="hidden" id="txtid" name="txtid[{{$i}}]" value="{{$edu->id}}">
                                <select class="form-control" id="txtedu_type_{{$i}}" name="txtedu_type[{{$i}}]" style="width:95%;" onchange="update_edu_field({{$edu->id}},{{$i}}, 'edu_type');">
                                    <option value="">----</option>
                                    @foreach($edu_type as $edu_types)
                                    @if($edu_types->name==$edu->edu_type)
                                    <option value="{{$edu_types->name}}" selected>{{$edu_types->name}}</option>
                                    @else
                                    <option value="{{$edu_types->name}}">{{$edu_types->name}}</option>
                                    @endif 
                                    @endforeach
                                </select>                        
                            </div>


                            <div id="text_edu_type_{{$i}}" class="text" style="width:100%;" onclick="show_ele_array('edu_type', {{$i}});">
                                {{($edu->edu_type)}}
                            </div>
                        </td>
                        <td>
                            <div id="text_faculty_{{$i}}" style="width:100%;" onclick="show_ele_array('faculty', {{$i}});">
                                {{$edu->faculty}}
                            </div>
                            <div id="ele_faculty_{{$i}}" class="display_none">      
                                <input type="text" class="form-control" id="txtfaculty_{{$i}}" name="txtfaculty[{{$i}}]" value="{{$edu->faculty}}" onchange="update_edu_field({{$edu->id}},{{$i}},'faculty');" style="width:95%;">
                            </div>
                        </td>
                        <td>
                            <div id="text_major_{{$i}}" style="width:100%;" onclick="show_ele_array('major', {{$i}});">
                                {{$edu->major}}
                            </div>
                            <div id="ele_major_{{$i}}" class="display_none">      
                                <input type="text" class="form-control" id="txtmajor_{{$i}}" name="txtmajor[{{$i}}]" value="{{$edu->major}}" onchange="update_edu_field({{$edu->id}},{{$i}},'major');" style="width:95%;">
                            </div>
                        </td>
                        <td>
                            <div id="text_school_{{$i}}" style="width:100%;" onclick="show_ele_array('school', {{$i}});">
                                {{$edu->school}}
                            </div>
                            <div id="ele_school_{{$i}}" class="display_none">      
                                <input type="text" class="form-control" id="txtschool_{{$i}}" name="txtschool[{{$i}}]" value="{{$edu->school}}" onchange="update_edu_field({{$edu->id}}, {{$i}}, 'school');" style="width:95%;">
                            </div>


                        </td>
                        <td style="text-align: center;">
                            <a class="btn btn-default" onclick="delete_edu_row({{$edu->id}});"><li class="fa fa-trash"></li></a>
                        </td>
                    </tr>            
                    <?php $i++; ?>
                    @endforeach
                    @else
                    <tr style="height:40px;">
                        <td colspan="5" style="text-align:center;">ไม่มีข้อมูล</td>
                    </tr>
                    @endif




                </table>
            </div>
        </div>
    </div>
 

    <div class="child">
        <div class="page_header">
            <table class="tb_header" id="panel1_2">
                <tr class="border_bottom">
                    <td colspan="2">
                        <span class="text_blue"><b>ภาระงานตามที่ ก.ค.ศ. กำหนด</b></span> 
                    </td>
                    <td colspan="3" style="text-align:right;">

                    </td>
                </tr>
            </table>          
        </div>
        <div class="row" id="block">
            <table style="width: 100%;" border="0" >
                <tr style="height: 70px;">
                    <td style="width: 50%;">
                        <p><b><u><span style="color:#1050A2;">1.1. วิชาที่ทำการสอน</span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_schedule_edit();"><span class="fa fa-plus" ></span> เพิ่ม</a>
                    </td>
                </tr>
            </table> 
            <div class="table-responsive">
                <table class="table_green" >
                    <tr class="tr_header">
                        <th style="width:30%;">กลุ่มสาระ</th>
                        <th style="width:25%;">วิชาที่ทำการสอน</th>
                        <th style="width:10%;">ระดับชั้น</th>
                        <th style="width:20%;">ชั่วโมง</th>
                        <th style="width:15%;"></th>
                    </tr>
                    <?php
                    $sch_hr = 0;
                    $i = 0;
                    ?>

                    @if(count($schedule_hour)>0)

                    @foreach($schedule_hour as $schedule_hours)
                    <tr>
                        <td style="padding-left: 30px;">
                            <div id="ele_group_learn_{{$i}}" class="display_none">


                                <select  class="form-control" id="txtgroup_learn" name="txtgroup_learn[{{$i}}]" onchange="update_sch_field({{$schedule_hours->id}}, {{$i}}, 'group_learn');" required>
                                    <option value="">-กลุ่มสาระการเรียนรู้-</option>
                                    @foreach(group_learn('all') as $learn)
                                    @if($schedule_hours->group_learn == $learn->group)
                                    <option value="{{$learn->group}}" selected>{{$learn->group}}</option>
                                    @else
                                    <option value="{{$learn->group}}">{{$learn->group}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div id="text_group_learn_{{$i}}"  class="display_text"  onclick="show_ele('group_learn_{{$i}}');">
                                {{$schedule_hours->group_learn}}
                            </div>                        
                        </td>
                        <td style="padding-left: 30px;">
                            <div id="ele_subject_{{$i}}" class="display_none">
                                <input type="text" class="form-control" id="txtsubject" value="{{$schedule_hours->subject}}" onchange="update_sch_field({{$schedule_hours->id}}, {{$i}}, 'subject');" name="txtsubject[{{$i}}]" required>
                            </div>
                            <div id="text_subject_{{$i}}" class="display_text"  onclick="show_ele('subject_{{$i}}');">
                                {{$schedule_hours->subject}}
                            </div>                        
                        </td>
                        <td style="text-align:center;">
                            <div id="ele_grade_{{$i}}" class="display_none">
                                <input type="text" class="form-control" id="txtgrade" value="{{$schedule_hours->grade}}" onchange="update_sch_field({{$schedule_hours->id}},{{$i}}, 'grade');" name="txtgrade[{{$i}}]" required>
                            </div>
                            <div id="text_grade_{{$i}}" class="display_text"  onclick="show_ele('grade_{{$i}}');">
                                {{$schedule_hours->grade}}
                            </div>      
                        </td>
                        <td style="text-align:center;">
                            <div id="ele_sch_hour_{{$i}}" class="display_none">
                                <input type="text" class="form-control" id="txtsch_hour"   value="{{$schedule_hours->sch_hour}}" onchange="update_sch_field({{$schedule_hours->id}}, {{$i}}, 'sch_hour');" name="txtsch_hour[{{$i}}]" required>
                            </div>
                            <div id="text_sch_hour_{{$i}}" class="display_text"  onclick="show_ele('sch_hour_{{$i}}');">
                                {{$schedule_hours->sch_hour}}
                            </div>   
                            <?php $sch_hr += $schedule_hours->sch_hour; ?>
                        </td>
                        <td class="display_text" style="text-align:center;">
                            <a class="btn btn-default" onclick="delete_row_sch({{$schedule_hours->id}});"><li class="fa fa-trash"></li></a>   
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach

                    @else
                    <tr style="height:40px;">
                        <td colspan="5" style="text-align:center;">ไม่มีข้อมูล</td>
                    </tr>
                    @endif


                    <tr class="tr_footer" id="tbl_schedule">
                        <th colspan="3">สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                        <th style="text-align: center;">{{$sch_hr}}</th>
                        <th>
                        </th>
                    </tr>
                </table>
            </div>





            <table style="width: 100%;" border="0" >
                <tr style="height: 70px;">
                    <td style="width: 50%;">
                        <p><b><u> <span style="color:#1050A2;">1.2. งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_support_edit();" ><span class="fa fa-plus"></span> เพิ่ม</a>
                    </td>
                </tr>
            </table>  
            <div class="table-responsive">
                <table class="table_green" >
                    <tr class="tr_header">
                        <th style="width: 60%;">งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</th>
                        <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                        <th style="width: 20%;"></th>
                    </tr>
                    <?php
                    $sp_hr = 0;
                    $j = 0;
                    ?>

                    @if(count($support_hour)>0)

                    @foreach($support_hour as $support_hours)  
                    <tr style="height:40px;">
                        <td>
                            <div id="ele_support_detail_{{$j}}" class="display_none">
                                <input type="text" class="form-control" id="txtsupport_detail" value="{{$support_hours->support_detail}}" name="txtsupport_detail[{{$j}}]" onchange="update_sp_field({{$support_hours->id}},{{$j}},'support_detail');" required>
                            </div>
                            <div id="text_support_detail_{{$j}}" class="display_text"  onclick="show_ele('support_detail_{{$j}}');">
                                {{$support_hours->support_detail}}
                            </div>   
                        </td>
                        <td style="text-align:center;">
                            <div id="ele_sp_hour_{{$j}}" class="display_none">
                                <input type="text" class="form-control" id="txtsp_hour" value="{{$support_hours->sp_hour}}" name="txtsp_hour[{{$j}}]"  onchange="update_sp_field({{$support_hours->id}}, {{$j}}, 'sp_hour');" required>
                            </div>
                            <div id="text_sp_hour_{{$j}}" class="display_text" onclick="show_ele('sp_hour_{{$j}}');">
                                {{$support_hours->sp_hour}}
                            </div>   
                            <?php
                            $sp_hr += $support_hours->sp_hour;
                            $j++;
                            ?> 
                        </td>
                        <td style="text-align:center;">
                            <a class="btn btn-default" onclick="delete_row_sp({{$support_hours->id}});"><li class="fa fa-trash"></li></a>  
                        </td>
                    </tr>
                    @endforeach
                    @else 
                    <td colspan="3" style="text-align:center;">ไม่มีข้อมูล</td>
                    @endif
                    <tr class="tr_footer" id="tbl_support">
                        <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                        <th>{{$sp_hr}}</th>
                        <th></th>
                    </tr>
                </table>
            </div>
 



    <table style="width: 100%;" border="0" >
        <tr style="height: 70px;">
            <td style="width: 50%;">
                <p><b><u> <span style="color:#1050A2;">1.3. งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา </span></u></b></p>
            </td>
            <td style="text-align:right;width: 50%;">
                <a class="btn_page" onclick="add_develop_edit();" ><span class="fa fa-plus"></span> เพิ่ม</a>
            </td>
        </tr>
    </table>  
    <div class="table-responsive">
        <table class="table_green" >
            <tr class="tr_header">
                <th style="width: 60%;">งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</th>
                <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                <th style="width: 20%;"></th>
            </tr>
            <?php
            $dev_hr = 0;
            $k = 0;
            ?>
            @if(count($develop_hour)>0)
            @foreach($develop_hour as $develop_hours)
            <tr style="height:40px;">
                <td>
                    <div id="ele_develops_{{$k}}" class="display_none">
                        <input type="text" class="form-control" id="txtdevelops" value="{{$develop_hours->develops}}" name="txtdevelops[{{$k}}]" onchange="update_dev_field({{$develop_hours->id}},{{$k}},'develops');" required>
                    </div>
                    <div id="text_develops_{{$k}}" class="display_text" onclick="show_ele('develops_{{$k}}');">
                        {{$develop_hours->develops}}
                    </div>   
                </td>
                <td style="text-align:center;">
                    <div id="ele_dev_hour_{{$k}}" class="display_none">
                        <input type="number" class="form-control" id="txtdev_hour" value="{{$develop_hours->dev_hour}}" name="txtdev_hour[{{$k}}]" onchange="update_dev_field({{$develop_hours->id}},{{$k}},'dev_hour');" required>
                    </div>
                    <div id="text_dev_hour_{{$k}}" class="display_text"  onclick="show_ele('dev_hour_{{$k}}');">
                        {{$develop_hours->dev_hour}}
                    </div>   
<?php $dev_hr += $develop_hours->dev_hour;
$k++; ?> 
                </td>
                <td style="text-align:center;">
                    <a class="btn btn-default" onclick="delete_row_dev({{$develop_hours->id}});"><li class="fa fa-trash"></li></a>  
                </td>
            </tr> 
            @endforeach
            @else 
            <td colspan="3" style="text-align:center;">ไม่มีข้อมูล</td>
            @endif
            <tr class="tr_footer" id="tbl_develop">
                <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                <th>{{$dev_hr}}</th>
                <th></th>
            </tr>
        </table>
    </div>

        <table style="width: 100%;" border="0" >
            <tr style="height: 70px;">
                <td style="width: 50%;">
                    <p><b><u> <span style="color:#1050A2;">1.4. งานตอบสนองนโยบายและจุดเน้น </span></u></b></p>
                </td>
                <td style="text-align:right;width: 50%;">
                    <a class="btn_page" onclick="add_response_edit();" ><span class="fa fa-plus"></span> เพิ่ม</a>
                </td>
            </tr>
        </table>  
        <div class="table-responsive">
            <table class="table_green" >
                <tr class="tr_header">
                    <th style="width: 60%;">งานตอบสนองนโยบายและจุดเน้น</th>
                    <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                    <th style="width: 20%;"></th>
                </tr>
                <?php
                $res_hr = 0;
                $z = 0;
                ?>
                @if(count($response_hour)>0)
                @foreach($response_hour as $response_hours)
                <tr style="height:40px;">
                    <td>
                        <div id="ele_response_{{$z}}" class="display_none">
                            <input type="text" class="form-control" id="txtresponse" value="{{$response_hours->response}}" name="txtresponse[{{$z}}]" onchange="update_res_field({{$response_hours->id}},{{$z}},'response');" required>
                        </div>
                        <div id="text_response_{{$z}}" class="display_text" onclick="show_ele('response_{{$z}}');">
                            {{$response_hours->response}}
                        </div>   
                    </td>
                    <td style="text-align:center;">
                        <div id="ele_res_hour_{{$z}}" class="display_none">
                            <input type="number" class="form-control" id="txtres_hour" value="{{$response_hours->res_hour}}" name="txtres_hour[{{$z}}]" onchange="update_res_field({{$response_hours->id}},{{$z}},'res_hour');" required>
                        </div>
                        <div id="text_res_hour_{{$z}}" class="display_text" onclick="show_ele('res_hour_{{$z}}');">
                            {{$response_hours->res_hour}}
                        </div>   
<?php $res_hr += $response_hours->res_hour;
$z++; ?> 
                    </td>
                    <td style="text-align:center;">
                        <a class="btn btn-default" onclick="delete_row_res({{$response_hours->id}});"><li class="fa fa-trash"></li></a>  
                    </td>
                </tr>
                @endforeach
                @else 
                <td colspan="3" style="text-align:center;">ไม่มีข้อมูล</td>
                @endif
                <tr class="tr_footer" id="tbl_response">
                    <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th>{{$res_hr}}</th>
                    <th></th>
                </tr>
            </table>
        </div>
    </div>
</div> 
    

<form action="PA1_3_insert" method="post">
    @csrf
    <div class="child" style="margin-bottom:30px;">
        <div class="page_header">
            <table class="tb_header" id="panel1_3">
                <tr class="border_bottom">
                    <td colspan="2">
                        <span class="text_blue"><b>ประเภทห้องเรียนที่จัดการเรียนรู้</b></span> 
                    </td>
                    <td colspan="3">

                    </td>
                </tr>

            </table>

        </div>

        <div class="row" id="block">

            <div class="block3" style="margin-bottom:30px;">
                <span class="text_blue_small"><b>ประเภทห้องเรียนที่จัดการเรียนรู้</b></span> (สามารถระบุได้มากกว่า 1 ประเภทห้องเรียนตามสภาพการจัดการเรียนรู้จริง)



                <ul class="class_learning">                    
                    @foreach($pa_learn_class as $pa_learn_class) 
                    @if(!empty($arr_learn_class))
                    @if(in_array($pa_learn_class->id,$arr_learn_class))
                    <li><input type="checkbox" id="arr_learn_class" name="arr_learn_class[]" value="{{$pa_learn_class->id}}" checked>{{$pa_learn_class->value}}</li>
                    @else   
                    <li><input type="checkbox" id="arr_learn_class" name="arr_learn_class[]" value="{{$pa_learn_class->id}}" >{{$pa_learn_class->value}}</li>
                    @endif
                    @else   
                    <li><input type="checkbox" id="arr_learn_class" name="arr_learn_class[]" value="{{$pa_learn_class->id}}" >{{$pa_learn_class->value}}</li>
                    @endif

                    @endforeach

                </ul>                
            </div>
        
        
       
        <center>
        <button type="submit" class="btn_blue" style="width:150px;"><li class="fa fa-arrow-circle-right "></li> บันทึก</button> 
       </center>
        </div>
    </div>

   
</form>


<div class="child">
    <div class="page_header">
        <table class="tb_header" id="panel1_4">
            <tr class="border_bottom">
                <td colspan="2">
                    <span class="text_blue"><b>การอบรมและพัฒนาตนเอง</b></span> 
                </td>
                <td colspan="3" style="text-align:right;">

                </td>
            </tr>

        </table>

    </div>

    <div class="row" id="block">

        <div style="width: 100%;text-align: right;margin:1em;">
            <a class="btn_page" onclick="add_train_edit();" ><span class="fa fa-plus"></span> เพิ่มประวัติการอบรม</a>
        </div> 
        <div class="table-responsive">
            <table class="table_green" id='tbl_train'>
                <tr class="tr_header">                   
                    <th style="width:25%;">หัวข้อในการอบรม</th>
                    <th style="width:15%;">วันเริ่มต้น</th>
                    <th style="width:15%;">วันสิ้นสุด</th> 
                    <th style="width:10%;">จำนวนชั่วโมง</th>
                    <th style="width:20%;">หน่วยงานที่จัด</th> 
                    <th style="width:20%;"></th> 
                </tr>
<?php
$i = 0;
?>
                @foreach($train as $trains)
                <tr style="height:40px;">
                    <td>

                        <div id="ele_train_{{$i}}" class="display_none">
                            <input type="text" class="form-control" id="txttrain" name="txttrain[{{$i}}]" style="text-align: center;" value="{{$trains->train}}" onchange="update_train_field({{$trains->id}}, {{$i}}, 'train');" required>
                        </div>
                        <div id="text_train_{{$i}}" class="display_text" onclick="show_ele('train_{{$i}}');">
                            {{$trains->train}}
                        </div>      
                    </td>    
                    <td>
                        <div id="ele_start_date_{{$i}}" class="display_none">
                            <input type="date" class="form-control" id="txtstart_date" name="txtstart_date[{{$i}}]" style="text-align: center;" value="{{$trains->start_date}}" onchange="update_train_field({{$trains->id}}, {{$i}}, 'start_date');" required>
                        </div>
                        <div id="text_start_date_{{$i}}" class="display_text" onclick="show_ele('start_date_{{$i}}');">
                            {{datethai($trains->start_date)}}
                        </div>           
                    </td>
                    <td>
                        <div id="ele_end_date_{{$i}}" class="display_none">
                            <input type="date" class="form-control" id="txtend_date" name="txtend_date[{{$i}}]" style="text-align: center;" value="{{$trains->start_date}}" onchange="update_train_field({{$trains->id}},{{$i}},'end_date');" required>
                        </div>
                        <div id="text_end_date_{{$i}}" class="display_text" onclick="show_ele('end_date_{{$i}}');">
                            {{datethai($trains->end_date)}}
                        </div>           
                    </td>
                    <td style="text-align:center;">
                        <div id="ele_train_hour_{{$i}}" class="display_none">
                            <input type="number" class="form-control" id="txttrain_hour" name="txttrain_hour[{{$i}}]" style="text-align: center;" value="{{$trains->train_hour}}" onchange="update_train_field({{$trains->id}},{{$i}},'train_hour');" required>
                        </div>
                        <div id="text_train_hour_{{$i}}" class="display_text" onclick="show_ele('train_hour_{{$i}}');">
                            {{$trains->train_hour}}
                        </div>      
                    </td>
                    <td>
                        <div id="ele_agency_{{$i}}" class="display_none">
                            <input type="text" class="form-control" id="txtagency" name="txtagency[{{$i}}]" style="text-align: center;" value="{{$trains->agency}}" onchange="update_train_field({{$trains->id}},{{$i}},'agency');" required>
                        </div>
                        <div id="text_agency_{{$i}}" class="display_text" onclick="show_ele('agency_{{$i}}');">
                            {{$trains->agency}}
                        </div>   
                    </td>
                    <td style="text-align: center;"><a class="btn btn-default" onclick="delete_row_train({{$trains->id}});" ><li class="fa fa-trash"></li></a></td>
                </tr>  
<?php
$i++;
?>
                @endforeach
            </table>
        </div>
    </div>
</div>
<form method="post" action="/PA1_5_insert">
    @csrf
    <div class="child">
        <div class="page_header">
            <table class="tb_header" id="panel1_5">
                <tr class="border_bottom">
                    <td colspan="2">
                        <span class="text_blue"><b>สื่อการเรียนรู้และนวัตกรรม</b></span>
                    </td>
                    <td colspan="3" style="text-align:right;">

                    </td>
                </tr>

            </table>

        </div>

<div class="row" id="block">
        <div style="width: 100%;text-align: right;margin:1em;">
            <a class="btn_page" onclick="add_innovation_edit();">
                <span class="fa fa-plus"></span> เพิ่มสื่อการเรียนรู้ / นวัตกรรม
            </a>
        </div>
        <div>
           <div id="div_innovation">
            @if(count($inno)>0)
            @foreach($inno as $innos)
            <div class="panel_inno">
                <table style="width:90%;" border="0">
                    <tr>
                        <td style="width:90%;padding-left:20px;"><b><span class="text_blue_small">{{$innos->title}}</span></b></td>
                        <td rowspan="2" style="width:5%;text-align: center;"><a class="btn btn-default" href="PA_1_delete_inno/{{$innos->id}}"><li class="fa fa-trash"></li></a></td>
                    </tr>
                    <tr>
                        <td style="width:90%;padding-left: 20px;"> {{$innos->innovation}} </td>
                    </tr>
                </table>              
            </div>
            @endforeach
            @else
            <div class="panel_inno" id="blank_inno" style="height:70px;text-align: center;">
                <b>ไม่มีข้อมูล</b>
            </div>
            @endif
        </div>
        </div>
    </div>


</div>
</form>
    <center>
    <a style="margin-top: 50px;" class="btn_blue" href="{{url('PA2_1')}}">
        <li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> ส่วนที่ 2 ผลการประเมิณงานตามมาตรฐานตำแหน่งและภาระงานตามที่ กคศ. กำหนด
    </a>
</center>   

</div>

@endsection