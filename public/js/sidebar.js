
// $(".alert").addClass("in").fadeOut(4500);

/* swap open/close side menu icons */
// $('[data-toggle=collapse]').click(function(){
//     // toggle icon
//     $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
// });

$('[data-toggle=collapse]').click(function() {
    //$('.sidebar').toggleClass('active');
    $('.sidebar').toggleClass('aria-expanded="true"');
    //$('.sidebar').toggleClass('bg-primary');
});

$('#hamburger').click(function(){
    window.scrollTo(0,0);
});

// $("#hamburger").on("click", function() {
//    $("body").scrollTop(0);
// });