$(document).ready(function () {

});

function clickfile(id) {
    $("#Uplodfile_" + id).click();
}

function preview(input, id) {

    $("#Image_"+id).hide();

    if (input.files && input.files[0]) {

        move("Bar_"+id);

        $("#Progress_"+id).fadeIn(3000, function () {

            var reader = new FileReader();
            reader.onload = function (e) {

                $('#Photo_'+id).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            $("#Image_"+id).fadeIn('slow');
            $("#Progress_"+id).hide();

        });
    } else {
        alert('select a file to see preview');
    }
}


var i = 0;
function move(bar) {
    if (i == 0) {
        i = 1;
        var elem = document.getElementById(bar);
        var width = 1;
        var id = setInterval(frame, 10);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
                i = 0;
            } else {
                width++;
                elem.style.width = width + "%";
            }
        }
    }
}

      