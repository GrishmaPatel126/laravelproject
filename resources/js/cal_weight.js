$(document).ready(function(){

    $('#gross_weight').keyup(function(){
        $('#net_weight').val($("#gross_weight").val() + " " + $('#tar_weight').val());
    });

    $('#tar_weight').keyup(function(){
        $('#net_weight').val($("#gross_weight").val() + " " + $(this).val());
    });

    $("body").on('click',function(){
        $('#net_weight').val($("#gross_weight").val() + " " + $('#tar_weight').val());
    });
});

    