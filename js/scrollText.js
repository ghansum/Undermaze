            "use strict";
 
      
            ( function( $ ){
                $.fn.dvjhEcrit = function( options ){
                    var opts = $.extend( true, {}, $.fn.dvjhEcrit.defaults, options );
 
                    return this.each( function( i, item ){
                        var interval = parseInt( opts.interval , 10) || 100,
                            tabChaine = $( item ).text().split(''),
                            longueur = tabChaine.length,
                            lettre = [];
                        $(item).text('');
 
                        for( var k = 0; k < longueur; k++ ){
                            lettre.push(
                                $( "<span/>", { 
                                    "css" : {
                                        "display" : "none",
                                        "backgroundColor" : opts.backgroundColor,
                                        "color" : opts.color,
                                        "fontFamily" : opts.fontFamily,
                                        "fontSize" : opts.fontSize,
                                        "fontWeight" : opts.fontWeight,
                                        "lineHeight" : opts.lineHeight,
                                        "letterSpacing" : opts.letterSpacing
                                    }, 
                                    "text" : tabChaine[ k ] 
                                })
                            );
                        }
 
                        $( item ).queue( function(){
                            for( var i = 0; i < longueur; i++ ){
                                lettre.shift().appendTo( item ).delay( interval * i ).fadeIn( 50 );
                            }
 
                            $( this ).dequeue();
                         });
                    });
                }
 
                $.fn.dvjhEcrit.defaults = {
                    "backgroundColor" : "black",
                    "color" :"white",
                    "fontFamily" : "cursive",
                    "fontSize" : "1.2em",
                    "fontWeight" : "normal",
                    "lineHeight" : "1.5em",
                    "letterSpacing" : "0.15em",
                    "interval" : 50,
                };
            })(jQuery);
 
            $( function(){
                $( "article" ).dvjhEcrit();
            });