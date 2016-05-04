$(function() {

    var $Image=$(".spinner"), degree=0, timer;
    var Speed=60; //speed gets faster with lower numbers
    var Degree=0;

    function rotate() {
        if(Degree===360){Degree=0;}

        $Image.css({ transform: 'rotate(' + Degree + 'deg)'});

        timer = setTimeout(function(){
            ++Degree;
            rotate();
        }, Speed);
    }

    rotate();
});

function resume(){
    $("#animated_menu").attr('src','img/Sonic.gif');
}

function project(){
    $("#animated_menu").attr('src','img/Blaze.gif');
}

function about(){
    $("#animated_menu").attr('src','img/CentralDistrict.gif');
}

//note: workaround for some mobile devices (particularly IE mobile)
function SyntheticLink(url){
    window.location.href = url;
}