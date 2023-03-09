$(document).ready(function(){
    $(".button-resize").click(function(){
        $(".button-resize").toggleClass("rotate-180")
        $(".sidebar-lg").toggleClass("hidden")
        $(".sidebar-sm").toggleClass("hidden")

        $(".resize-lg").toggleClass("hidden")
        $(".resize-sm").toggleClass("hidden")
    })

    $(".btn-sidebar").click(function(){
        $("#sidebar").toggleClass("hidden")
    })

    $("#btn-dropdown").click(function(){
        $("#btn-dropdown").toggleClass("rotate-180")
        $("#menu-dropdown").toggleClass("hidden")
    })
})