

var border = 'border-bottom';
var red = '2px solid #ff5252';
var green = '2px solid #00695c';
var error = 0;
var div = '';


function Validator(collection){

    collection.each(function(index, val){
        input = val.value.trim();

        if(input == ''){
            $(this).css(border, red);
            error = 1;
        } else {
            $(this).css(border, green);
        }

    });
 

    return error;

}


function HideAlert(){

}

function onlyNumber(input){

}

function RutValidate(input){

}


