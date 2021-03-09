//******************************active buttoon******************************//

$('#checkInputPrivacy').prop('checked', false);  //when lode page checkbox be unchecked
$('#checkInputInfo').prop('checked', false);  //when lode page checkbox be unchecked
$('#checkInputRemember').prop('checked', false);  //when lode page checkbox be unchecked

$('#checkInputPrivacy').change(function () {
    if($(this).is(':checked')){
        $('.btn-success').removeAttr('disabled');
    }
    else {
        $('.btn-success').attr('disabled', 'disabled');

    }
});
//******************************End active buttoon******************************//