// window.addEventListener('load', () =>{
//     quicklink();
// });

$(window).on('load', function () {
    quicklink();
});



$(document).ajaxSuccess(function() {
    quicklink(); 
});