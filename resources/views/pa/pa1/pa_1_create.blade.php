                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                @extends('layouts.app')    
@section('content')
<!-- Page content-->
<style>
.select2-container--default .select2-selection--single{
    padding:6px;
    height:40px;
    font-size: 1.2em;  
    position: relative;
    
}
</style>



<div class="container-fluid">
      <form action="PA_1_insert" method="post" id="frm_pa_1_1" > 
        @csrf 

        <div class="child">
            <div class="page_header">
                <table class="tb_header">
                    <tr class="border_bottom">
                        <td colspan="2">
                            <span class="blue_big"><b><u>????????????????????? 1</u> ????????????????????????????????????????????????????????????????????????</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="blue_big"><b>????????????????????????????????????</b></span>
                        </td>
                    </tr>
                </table>        
		@include('layouts.main1')
            </div>

            <div class="row" id="block">
             
                <div class="col-lg-4 col-md-4 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>????????????????????????????????????</th>
                            <td>
                                <?php $arrprenm = ["?????????","?????????","??????????????????","???.???.","???.???.","???????????????"]; ?>
                                <select id="txtprenames" name="txtprenames" class="form-control" onchange="checkprename(this);">
                                    @for($i=0;$i<=count($arrprenm)-1;$i++)
                                    @if($arrprenm[$i]==uPreNm())
                                    <option value="{{$arrprenm[$i]}}" selected>{{$arrprenm[$i]}}</option>
                                    @else
                                    <option value="{{$arrprenm[$i]}}">{{$arrprenm[$i]}}</option>
                                    @endif
                                    @endfor
                                   
                                </select>
                                @if(uPreNm()=='???????????????')
                                <input type="text" id="txtprename_o" name="txtprename_o" value="uPreNm()">
                                @else
                                <input type="text" id="txtprename_o" name="txtprename_o" style="display:none;">
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            
                <div class="col-lg-4 col-md-4 col-sm-12 " >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>????????????</th>
                            <td>
                                
                                <input type="text" value="{{uFname()}}" id="txtfirstnames" name="txtfirstnames">
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>?????????????????????</th>
                            <td>
                                <input type="text" value="{{uLname()}}" id="txtlastnames" name="txtlastnames" required>

                            </td>
                        </tr>
                    </table>
                </div>

              

                <div class="col-lg-4 col-md-4 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>?????????????????????</th>
                            <td>
                                <input type="text" id="txtnationals" value="?????????" name="txtnationals" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>???????????????????????????</th>
                            <td>
                                <input type="text" id="txtraces" name="txtraces" value="?????????" required>
                            </td>
                        </tr>
                    </table>
                </div> 

                <div class="col-lg-4 col-md-4 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>???????????????</th>
                            <td>
                                <input type="text" id="txtreligions" name="txtreligions" required>
                            </td>
                        </tr>
                    </table>
                </div>

                  <div class="col-lg-4 col-md-4 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>?????????????????????</th>
                            <td>
                                <select  class="form-control" id="txtpositions" name="txtpositions" required>
                                 <option value="">-?????????????????????-</option>
                                    @foreach(group_member('all') as $member)
                                    <option value="{{$member->group}}">{{$member->group}}</option>
                                     @endforeach
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>????????????????????????????????????????????????????????????</th>
                            <td>
                                <select  class="form-control" id="txtmajor_nm" name="txtmajor_nm" required>
                                    <option value="">-????????????????????????????????????????????????????????????-</option>
                                    @foreach(group_learn('all') as $learn)
                                    <option value="{{$learn->group}}">{{$learn->group}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
             
                    <div class="col-lg-4 col-md-4 col-sm-12" >
                        <table class="tbl_data" border="0">
                            <tr>
                                <th style="vertical-align:top;padding-top:20px;">?????????????????????</th>
                                <td>
                                    <textarea id="txtaddress" name="txtaddress" style="height:100px;padding:1em;">{{uAddress()}}</textarea>
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
                            <span class="blue_big"><b><u>????????????????????? 1</u> ????????????????????????????????????????????????????????????????????????</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="blue_big"><b>?????????????????????????????????????????????</b></span>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row" id="block" >

                <p><b><u> <span class="blue_small">????????????????????????????????????</span></u></b></p>
                <br>
               <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="col-lg-6 col-md-6 col-sm-12" style="float:left;" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>?????????????????????????????????</th>
                            <td>
                           
                                <input type="date" value="" id="txtdatestarts" style="width:90%;" name="txtdatestarts" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="float:left;" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>????????????????????????????????????????????????????????????</th>
                            <td>
                                <input type="date" value="" id="txtdatebegins" style="width:90%;" name="txtdatebegins" required>

                            </td>
                        </tr>
                    </table>
                </div>
                </div>      
                

            </div>


            <div class="row" id="block">

                <p><b><u> <span style="color:#1050A2;">????????????????????????</span></u></b></p>
                <br>

                <div class="col-lg-12 col-md-12 col-sm-12">
                 <div class="col-lg-6 col-md-6 col-sm-12" style="float:left;">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>????????????????????????</th>
                            <td>
                                  <select  class="form-control" id="txtacademics" name="txtacademics" required>
                                    <option value="">-????????????????????????-</option>
                                    @foreach(teacher_academic('all') as $academic)
                                    <option value="{{$academic->academic}}">{{$academic->academic}}</option>
                                    @endforeach
                                </select>

                            </td>
                        </tr>
                    </table>
                </div> 

                 <div class="col-lg-6 col-md-6 col-sm-12" style="float:left;">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>???????????????????????????????????????????????????</th>
                            <td>
                                <input type="date" id="txtdateacademics" style="width:90%;" name="txtdateacademics">
                            </td>
                        </tr>
                    </table>
                </div> 
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                 <div class="col-lg-6 col-md-6 col-sm-12" style="float:left;">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th style="width:30%;">??????????????????</th>
                            <td>
                            <select  class="form-control" id="txtdepartment_big" name="txtdepartment_big"  onchange="selectdata(this);" required>    
                            <option value="">-??????????????????-</option>
                            @foreach(group_department('all') as $department)
                            <option value="{{$department->department_bref}}">{{$department->department_nm}} ({{$department->department_bref}})</option>
                            @endforeach
                            </select>
                                
                               
              
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                          
                                
                                <select id="txtdepartment_small" name="txtdepartment_small" style="width:350px;">     
                            <option value="">-??????????????????-</option>
                            </select> 
              
                            </td>
                        </tr>
                    </table>
                </div> 
                 <div class="col-lg-6 col-md-6 col-sm-12" style="float:left;">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>????????????????????????<font style="color:white;">111111111</font></th>
                            <td>
                                <select  id="txtschools_st" name="txtschools_st" style="width:370px;" required>    
                                 <option value="">-????????????????????????-</option>
                                </select> 
                                
                            </td>
                        </tr>
                    </table>
                </div> 
                </div>
                 <div class="col-lg-6 col-md-6 col-sm-12 " >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>???????????????????????????????????????????????????</th>
                            <td>
                                <input type="number" id="txtsalarys" name="txtsalarys" required>
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
                            <span class="blue_big"><b>????????????????????? 1 ????????????????????????????????????????????????????????????????????????</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="blue_big"><b>?????????????????????????????????????????????</b></span>
                        </td>
                    </tr>
                </table>
                <table style="width: 100%;" border="0">
                    <tr style="height: 70px;">
                        <td style="width: 50%;">
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <a class="btn_page" onclick="add_edu();" ><li class="fa fa-plus"></li> ???????????????????????????????????????????????????</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row" id="block" style="padding-bottom:100px;">
                
                <div class="table-responsive">
            <table id="tbl_edu" class="table table-striped">
                 <tr class="tr_header">
                <th style="width:25%;">????????????</th>
                <th style="width:20%;">?????????</th>
                  <th style="width:20%;">????????????</th>
                <th style="width:25%;">???????????????????????????</th>
                <th style="width:10%;"></th>
            </tr>    
                <tr style="height:40px;">
                    <td colspan="5" style="text-align: center;"><b>???????????????????????????????????????????????????</b></td>
                </tr>
            </table>
                </div>
     
             </div>     
        </div>
        

   
        <center>
            <button type="submit" class="btn_green">
                <li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> 
                ???????????????????????????????????????????????????????????????
            </button>
        </center>   
    </form>
    


    
</div>
@endsection