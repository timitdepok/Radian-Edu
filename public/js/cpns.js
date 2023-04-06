$(document).ready(function(){

    // navbar 
    $("#btn-navbar").click(function(){
        $("#open-navbar").toggleClass("hidden");
        $("#close-navbar").toggleClass("hidden");
        $("#menu").toggleClass("hidden");
        $("#button").toggleClass("hidden");
    });

    // tombol program 
    $('#btn-premium').click(function() {
        $("#program-senior").addClass("hidden");
        $("#program-premium").removeClass("hidden");

        $("#btn-premium").addClass("border-b");
        $("#btn-senior").removeClass("border-b");
    });

    $("#btn-senior").click(function() {
        $("#program-premium").addClass("hidden");
        $("#program-senior").removeClass("hidden");
        
        $("#btn-senior").addClass("border-b");
        $("#btn-premium").removeClass("border-b");
    });

    // slider testimoni
    $('#slider-testimoni').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1280:{
                items:3
            }
        }
    });
});


// countdown timer 
window.addEventListener("load", () => {
    let cpns = "2024,01,01";

    (function () {
        const second = 1000;
        const minute = second * 60;
        const hour = minute * 60;
        const day = hour * 24;

        const countDown = new Date(cpns).getTime();
        x = setInterval(function () {
            const now = new Date().getTime();
            const distance = countDown - now;

            document.getElementById("days").innerText = setNumber(
            distance / day
            );

            document.getElementById("hours").innerText = setNumber(
            (distance % day) / hour
            );
            document.getElementById("minutes").innerText = setNumber(
            (distance % hour) / minute
            );
            
            document.getElementById("seconds").innerText = setNumber(
                (distance % minute) / second
            );

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("days").innerText = setNumber(
                   00
                );
        
                document.getElementById("hours").innerText = setNumber(
                    00
                );
                document.getElementById("minutes").innerText = setNumber(
                    00
                );
                
                document.getElementById("seconds").innerText = setNumber(
                    00
                );
            }

        }, 100);
    }());

    function setNumber(num) {
        const res = Math.floor(num);
        return res >= 10 ? res : `0${res}`;
    }
});