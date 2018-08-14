// // Get the modal
// var modal = document.getElementById('myModal');

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on the button, open the modal
// btn.onclick = function() {
//     modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// } 

jQuery(document).ready(function(){
    jQuery(".loader-container").fadeOut(3000);
})

    function goToByScroll(id){
          // Scroll
        jQuery('html,body').animate({
            scrollTop: jQuery(id).offset().top},
            'slow');
    }

    jQuery('a[href*="scroll"]').click(function(e) { 
        // alert(jQuery(this).attr("id"))
          // Prevent a page reload when a link is pressed
        e.preventDefault(); 
          // Call the scroll function
        goToByScroll(jQuery(this).attr("href"));           
    });

jQuery(document).ready(function(){
    jQuery(".toggle").click(function(){
       var self =  document.getElementById(jQuery(this).attr('id'));
        //jQuery(self + '.span').text('Show');
        jQuery(self).parent().siblings('.toggler').slideToggle("slow","swing", function(){
            var showText = jQuery(self ).children()
            if (showText.html() === 'Show'){
                showText.html('Hide');
            }else{
                 showText.html('Show');
            }
        });
    });
});