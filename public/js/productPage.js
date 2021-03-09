
/*use variable of Class and show 3dImage in browser*/
viewer.init();
viewer.update(true);


//choos color
var colorCheck=$('.details .colors li');
colorCheck.click(function () {
    //this line if choose just one checkbox
    colorCheck.find('.active').removeClass('active');
    //
    var currentTag=$(this).find('span i');
    if(currentTag.hasClass('active')){
        currentTag.removeClass('active');
    }
    else {
        currentTag.addClass('active')
    }
});
//read More
$('.productOverview .readMore').click(function (event) {
    event.preventDefault();
    $('.productOverview p').toggleClass('active');
});


/**************************************zoom image************************************/

//Triggered when window width is changed.
$( window ).on( "resize", function() {
    var windowWidth = $( window ).width(), // get window width
        imgWidth = $( "#ImageZoom").width(); // get image width
    //Init elevateZoom
    initEZPlus();
    //display status
    $( "#status" ).html("Status: Window resized!.");
    //display image and window width
    $( "#imgWidth" ).html("Image width: " + imgWidth + "px" + "<br />" + "Window width: " + windowWidth + "px");
});

$('#ImageZoom').ezPlus({
    responsive : true,
    scrollZoom :true,
    showLens: true,
    easing:true,
    lensSize:150,
    lensFadeIn:1000,
    lensFadeOut:1000,
    zoomWindowFadeIn:1000,

    cursor:'pointer',


    tint: true,
    tintColour: '#ffaac4',
    tintOpacity: 0.5,
    respond: [
        {
            range: '600-799',
            tintColour: '#ffe02d',
            zoomWindowHeight: 100,
            zoomWindowWidth: 100
        },
        {
            range: '800-1199',
            tintColour: '#ff0959',
            zoomWindowHeight: 200,
            zoomWindowWidth: 200
        },
        {
            range: '100-599',
            enabled: false,
            showLens: false
        }
    ]


});
/**************************************End zoom image************************************/


/************************************************Start LightBox***************************************************/
/**************Close Light Box************/
$('#productGalleryModal .fa-close').click(function () {
    $('#productGalleryModal').fadeOut(200);/*close lightBox*/
});

/***********Scrollbar for lightBox**********/
$("#productGalleryModal .thumbnail-lightBox").mCustomScrollbar({
    autoHideScrollbar:false,
    mouseWheel:{
        enable:true,
        disableOver: ["select","option","keygen","datalist","textarea"]
    },
    scrollButtons:{
        enable: true,
        scrollType: "stepped",
        scrollAmount:"auto"
    },
    keyboard:{
        enable:true,
        scrollType: "stepless",
        scrollAmount:"auto"
    },
    advanced:{
        autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
        updateOnContentResize:true,
    },
    theme:"my-theme",/*rounded-dark ,dark , 3d-dark ,...*/
    documentTouchScroll:true,
});


/*************image gallery in LightBox******/
var productGallery=$('.productGalleryModal-content');
var productGalleryItems=productGallery.find('.right .item');
var productThumbnails=productGallery.find('.thumbnail-lightBox li');

function showGallery(dataMainImage,index) {
    productGalleryItems.fadeIn(200);
    productThumbnails.removeClass('image_active');
    productThumbnails.eq(index).addClass('image_active');

    if(dataMainImage.length>0){
        /*when image is not 3d then show img and not show canvas*/
        productGalleryItems.find('img').fadeIn(100);
        productGalleryItems.find('canvas').fadeOut(0);
         productGalleryItems.find('img').attr('src','public/'+dataMainImage);
    }
    else{
        /*this tag for 3d when image is 3d then show canvas and not show img Tag*/
        productGalleryItems.find('img').fadeOut(0);
        productGalleryItems.find('canvas').fadeIn(100);



    }

}

productThumbnails.click(function () {
   var dataMainImage=$(this).find('img').attr('data-main-image');
   var index=$(this).index();
   showGallery(dataMainImage,index);
});
/*****show LightBox and send active image in light Box******/

$('.details  .gallery .thumbnail li').click(function () {
    $('#productGalleryModal').fadeIn(200);
    var dataMainImage=$(this).attr('data-main-image');
    var index=$(this).index();
     index--;//be khatere li ke more dare image nadare
    if(index<0){
        index=0;
    }
    showGallery(dataMainImage,index);

});
/******************************************End LightBox***********************************************************/

