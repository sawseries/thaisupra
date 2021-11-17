<style>

    .menu-main {
        list-style-type:none;
        margin-top: 5px;
        padding: 0;
    }
    .menu-main li {
        display: inline-block;
        min-width: 3em;
        /*  min-width: 3em;
          margin: 0 0.2em;*/
    }
    .menu-main a {
        text-decoration: none;
        display: block;
        position: relative;
        color: black;
        padding:.5em;
        font-size: 12pt; 
    }

    .menu-main a span {
        margin-right:5px;font-size: 18pt;
    } 
    .menu-main a:hover {
        color: #0062cc;
        background-color: #E1EBEE;
    }

    .menu-main a:hover:before {
        left: 0;
        width: 100%;
    }
    .menu-main a:before {
        content: "";
        position: absolute;
        width: 0;
        height: .5px;
        background-color: #c69f73;
        bottom: calc(-1px);
        right: 0;
        transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    }
</style>
<script>
$(document).ready(function () {

$('#pa1_1').click(function(e){ 
    $('html, body').animate({
        scrollTop: $('#panel1_1').offset().top - 10
    }, 'slow');
});


$('#pa1_2').click(function(e){ 
    $('html, body').animate({
        scrollTop: $('#panel1_2').offset().top - 10 
    }, 'slow');
});

$('#pa1_3').click(function(e){ 
    $('html, body').animate({
        scrollTop: $('#panel1_3').offset().top - 10 
    }, 'slow');
});

$('#pa1_4').click(function(e){ 
    $('html, body').animate({
        scrollTop: $('#panel1_4').offset().top - 10 
    }, 'slow');
});

$('#pa1_5').click(function(e){ 
    $('html, body').animate({
        scrollTop: $('#panel1_5').offset().top - 10 
    }, 'slow');
});

});


</script>
<ul class='menu-main'>
    <li style="width:130px;"><a href="{{url('PA1')}}"  id="pa1_1"><span class="fa fa-arrow-circle-right "></span> ข้อมูลทั่วไป</a></li>
    <li><a href="#" id="pa1_2"><span  class="fa fa-arrow-circle-right "></span>ภาระงานตามที่ ก.ค.ศ.กำหนด</a></li>
    <li><a href="#" id="pa1_3"><span  class="fa fa-arrow-circle-right "></span>ประเภทห้องเรียนที่จัดการเรียนรู้</a></li>
    <li><a href="#" id="pa1_4"><span  class="fa fa-arrow-circle-right "></span>การอบรมและพัฒนาตนเอง</a></li>
    <li><a href="#" id="pa1_5"><span  class="fa fa-arrow-circle-right "></span>สื่อการเรียนรู้และนวัตกรรม</a></li>

</ul>