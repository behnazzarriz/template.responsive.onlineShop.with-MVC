

//for slider1
var sliderTag=$('.firstSlide');
var sliderItems=sliderTag.find('.sliderImg .item');
var numberOfslides=sliderItems.length;
var nextSlide=1;
var timeOut=5000;
var slidernavigator=$('.sliderNavigation').find('ul li');
function slider(){

    if(nextSlide>numberOfslides){
        nextSlide=1
    }
    if(nextSlide<1){
        nextSlide=numberOfslides;
    }
    sliderItems.hide();
    slidernavigator.removeClass('active_slider');
    sliderItems.eq(nextSlide-1).fadeIn(100);
    slidernavigator.eq(nextSlide-1).addClass('active_slider');
    nextSlide++;

}
slider();
var sliderInterval=setInterval(slider,timeOut);

sliderTag.on('mouseleave touchend', function(){
    clearInterval(sliderInterval);
    sliderInterval=setInterval(slider,timeOut);
});

function gotoPrev(){
    nextSlide=nextSlide-2;
    slider();

}

$('.next').click(function () {
    clearInterval(sliderInterval);
    slider();
});
$('.prev').click(function () {
    clearInterval(sliderInterval);
    gotoPrev()
});

$('.sliderNavigation ul li').click(function () {
    clearInterval(sliderInterval);
    var index=$(this).index();
    gotoSlide(index);
});
function gotoSlide(index){
    nextSlide=index+1;
    slider();
}
//**************************************End Slider1*************************************

//**************************************start slider2***********************************
var sliderTag2=$('.slide2');
var sliderItems2=sliderTag2.find('.end-parentDiscount .sliderContent');
var numberOfSlides2=sliderItems2.length;
var nextSlide2=1;
var timeOut2=5000;
var slidernavigator2=$('.slider2Navigation').find('ul li');

$('.slider2Navigation ul li').click(function (e) {
    clearInterval(sliderInterval2);
    var index2=$(this).index();
    gotoSlide2(index2);
    e.preventDefault();
});

function gotoSlide2(index2){
    nextSlide2=index2+1;
    slider2();
}

function slider2(){
    if(nextSlide2>numberOfSlides2){
        nextSlide2=1
    }
    if(nextSlide2<1){
        nextSlide2=numberOfSlides2;
    }
    sliderItems2.hide();
    slidernavigator2.removeClass('activeSlider2');
    sliderItems2.eq(nextSlide2-1).fadeIn(100);
    slidernavigator2.eq(nextSlide2-1).addClass('activeSlider2');
    nextSlide2++;



}

slider2();

var sliderInterval2=setInterval(slider2,timeOut);
sliderTag2.mouseleave(function () {
    clearInterval(sliderInterval2);
    sliderInterval2=setInterval(slider2,timeOut);
});
//**************************************end slider2*************************************

//******************************SliderScroll********************************//

$('.multi-item-carousel').carousel({
    interval: false
});
//******************************SliderScroll********************************//

