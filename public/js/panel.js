/***************************drop down button in Table*********/
function showDetailTrOfTable(Tag) {
    var btnTag = $(Tag);
    var firstTr = btnTag.parents('tr');
    firstTr.next().fadeToggle(200);
    if(btnTag.hasClass('fa-chevron-circle-down')){
        btnTag.removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
    }else {
        btnTag.removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
    }
}
/***************************End drop down button in Table*********/

/***************************Click Function in Tab****************/
$(document).ready ( function () {

    $(document).on ("click", ".favoriteList li", function (event) {
          $('.favoriteList li').removeClass('activeList');
          var CurrentTag=$(this);
          CurrentTag.addClass('activeList');
        event.preventDefault();

    });
});
/***************************End Click Function in Tab****************/