function main(){
    update(getGlobe());
}

var getGlobe = function(){
    //todo: document.getElementById()
    return document.getElementsByClassName("spinner")[0];
};

var rotate = function(obj){
    if(obj.degree == 360 || !obj.degree)
        obj.degree = 0;

    obj.style.transform = "rotate("+(obj.degree++)+"deg)";
};

var update = function(spinner){
    setTimeout(function(){
        rotate(spinner);
        update(spinner);
    }, 50);
};

function resume(){
    getGlobe().src = 'img/Sonic.gif';
}

function project(){
    getGlobe().src = 'img/Blaze.gif';
}

function about(){
    getGlobe().src = 'img/CentralDistrict.gif';
}

//note: workaround for some mobile devices (particularly IE mobile)
function SyntheticLink(url){
    window.location.href = url;
}

main();