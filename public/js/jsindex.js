'use strict'
let path = document.querySelectorAll('path');
let back = document.getElementById("fond");

for (let index = 0; index < path.length; index++) {
    path[index].addEventListener("mouseover", function (event) {

        let numdep = path[index].getAttribute("data-numerodepartement")
        let nomdep = path[index].getAttribute("data-nom")
        console.log(nomdep);
        console.log(numdep);
        $('#fond').finish().fadeTo('fast', 0.7, function () {
            $(this).css('background-image', 'url(img/index/' + numdep + '.jpg)');
        }).delay(100).fadeTo('fast', 1);

    });

}