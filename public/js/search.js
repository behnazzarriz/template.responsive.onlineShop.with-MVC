/*for lode page checkboxes of sidebar unchecked*/
$('.custom-control-input').prop('checked',false);


/*for selected item in content*/
var button =$('.filterTop li');
var items=$('.filterTop li .options li input');


items.click(function () {
    var attribute=$(this).attr('id');
    var title=$(this).parents('li').find('.title').text();
    var subtitle=$(this).parent('li').find('label').text();
    var filterSelected=$('.filterSelected');
    var existItem=filterSelected.find('span[data-id='+attribute+']');
    var countItem=existItem.length;
    if(countItem>0){
        existItem.remove();
    }
    else {
        var appendItem='<span data-id='+attribute+' class="filter btn btn-light text-secondary ml-2"><span>'+title+' : '+subtitle+'</span><i onclick="removeTag(this)" class="fa fa-times text-danger ml-md-5 ml-2 filterClose"></i></span>';
        $('.filterSelected').append(appendItem);
    }




});

//***********************************************remove tag appended
//rah aval
/*
$('.filterSelected').on('click', '.filter i', function() {
  $(this).parent('.filter').remove();
}); */
//rah dovom
function removeTag(tag) {
    var sapnTag= $(tag).parent('.filter');
    var dataId=sapnTag.attr('data-id');
    sapnTag.remove();
    $('.filterTop li .options li input[id='+dataId+']').prop('checked',false);


}
//**********************************************end remove tag appended

//*********************************************when click each li display block dropdownMenu
var mainTag=$('.filterTop .btn-light').find('span');
/*mainTag.hover(function () {
    $(this).find('.options').slideDown(200);
},function () {
    $(this).find('.options').slideUp(200);
});*/
mainTag.click(function () {
    var parent=$(this).parent('li');
    var div=$('.options',parent);
    if(div.css('display') == 'none'){
        div.slideDown(400);
    }
    else {
        div.slideUp(400);
        return false;
    }
    $(".options").not(div).slideUp(400);
});
//**when click out of filterTop dropdown hide
$(function(){
    var mainparent=$('.filterTop > li');
    var parent=mainTag.parent('li');
    var div=$('.options',parent);
    var win = $(window); // or $box parent container


    win.on("click",function(event){
        if (

           mainparent.has(event.target).length == 0 //checks if descendants of .filterTop > li was clicked
            &&
            !mainparent.is(event.target) //checks if the .filterTop > li itself was clicked
        ){
            //you clicked outside the box
            div.slideUp(400);
        } else {
            //"you clicked inside the box"
        }
    });

});
//*****************************************End when click each li display block dropdownMenu
//***********************switch Toggle*************/


//***********************************change display mode********************/
$('.type1').click(function (event) {
    event.preventDefault();
    $('.products').addClass('displayStyle');
    $(this).addClass('active');
    $('.type2').removeClass('active');

});
$('.type2').click(function (event) {
    event.preventDefault();
    $('.products').removeClass('displayStyle');
    $(this).addClass('active');
    $('.type1').removeClass('active');

});


