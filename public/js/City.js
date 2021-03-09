function City(tag) {
    var id=$(tag).find('option:selected').attr('data-val');
    var arr=new Array();
    if(id==41){
        arr=['41-1','41-2','41-3'];
    }//if
    if (id==42){
        arr=['42-1','42-2','42-3'];
    }//if
    if (id==43){
        arr=['43-1','43-2','43-3'];
    }//if
$('.city').find('select option').remove();//tamame optionhaye ghabli ro pak mikone
    var count=0;
    if(arr.length>0){
        for (count=0;count<arr.length;count++){
            $('.city').find('select').append(
               $('<option>',{text:arr[count]})//Add new options
            )
        }
    }

}//function