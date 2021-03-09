var tag=$('.showCart4').find('.sameMethod .sendingMethodDt input');
var subtag=$('.showCart4').find('.sameMethod .sendingMethodDt .bank input');
$(tag).prop('checked', false);
$(subtag).prop('checked', false);
subtag.click(function () {

    if ($('#SendingMethod2').is(':checked')) {
        $(this).prop('checked', true);
    }
    else
    {
        alert('please select Online Shop und next click me!');
        $(this).prop('checked', false);
    }

});
tag.click(function () {
    if (!$('#SendingMethod2').is(':checked')) {
        $(subtag).prop('checked', false);
    }

});
