           // Smooth scroll lien carousel
            $(document).ready(function(){
              // Add smooth scrolling to all links
              $("a").on('click', function(event) {
            
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();
            
                  // Store hash
                  var hash = this.hash;
            
                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 800, function(){
            
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });
            // Retour en haut de page 
            document.addEventListener('DOMContentLoaded', function() {
                window.onscroll = function(ev) {
                  document.getElementById("cRetour").className = (window.pageYOffset > 10) ? "cVisible" : "cInvisible";
                };
              });
            // Active les tooltips
              $(function () {
                $('[data-toggle="tooltip"]').tooltip()
              })
            //Animation d'arrivée des éléments
            $( function () {
    
              var charts = $( ".isVisible" );
            // Return boolean Quand l'element est completement visible a l'ecran
              function isWholeVisible( element ) { 
                var 
                    viewPortHeight = $( window ).height(), // Viewport Height
                    scrollTop = $( window ).scrollTop(), // Scroll Top
                    currElementPosY = $( element ).offset().top,
                    elementHeight = $( element ).height();
                
                return ( currElementPosY > scrollTop && currElementPosY + elementHeight < ( viewPortHeight + scrollTop ) );
              }
            // Lance l'animation une fois que l'element est completement visible 
              function animateIsVisible ( chart ) {
                for ( var i = 0, count = chart.length; i < count; i++ ) {
                    if ( isWholeVisible( chart[ i ] )  ) {
                        $( chart[ i ] ).addClass(".slideIn");
                    }
                }
            }

            // Fin de l'animation
                
                // au scroll
                $( window ).scroll( function () {  
                  animateIsVisible( charts );
              } );
              
              /* au chargement */    
              animateIsVisible( charts );
            });

           function checkMusee() {
               var checkBox = document.getElementById("checkMusee");

               if (checkBox.checked === true){
                   $(".Musée").css("display","block");
               } else {
                   $(".Musée").css("display","none");
               }
           }
           function checkPatrimoine() {
               var checkBox = document.getElementById("checkPatrimoine");

               if (checkBox.checked === true){
                   $(".Patrimoine").css("display","block");
               } else {
                   $(".Patrimoine").css("display","none");
               }
           }
           function checkCulture() {
               var checkBox = document.getElementById("checkCulture");

               if (checkBox.checked === true){
                   $(".Culture").css("display","block");
               } else {
                   $(".Culture").css("display","none");
               }
           }
           function checkShopping() {
               var checkBox = document.getElementById("checkShopping");

               if (checkBox.checked === true){
                   $(".Shopping").css("display","block");
               } else {
                   $(".Shopping").css("display","none");
               }
           }
           function checkParcs() {
               var checkBox = document.getElementById("checkParcs");

               if (checkBox.checked === true){
                   $(".Parcs").css("display","block");
               } else {
                   $(".Parcs").css("display","none");
               }
           }
           function checkLoisirs() {
               var checkBox = document.getElementById("checkLoisirs");

               if (checkBox.checked === true){
                   $(".Loisirs").css("display","block");
               } else {
                   $(".Loisirs").css("display","none");
               }
           }
           function checkSiteNaturel() {
               var checkBox = document.getElementById("checkSite-naturel");

               if (checkBox.checked === true){
                   $(".Site-naturel").css("display","block");
               } else {
                   $(".Site-naturel").css("display","none");
               }
           }
           function checkGastronomie() {
               var checkBox = document.getElementById("checkGastronomie");

               if (checkBox.checked === true){
                   $(".Gastronomie").css("display","block");
               } else {
                   $(".Gastronomie").css("display","none");
               }
           }

