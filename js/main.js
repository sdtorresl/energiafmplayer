// Setup energía player
$(document).ready(function() {
    
    var stream = {
        title: "Energia FM",
        mp3: "http://stream02.exeamedia.com:8000/energiaweb02.mp3"
    },
    ready = false;

    $("#jquery_jplayer_1").jPlayer({
        ready: function (event) {
            ready = true;
            $(this).jPlayer("setMedia", stream);
        },
        pause: function() {
            $(this).jPlayer("clearMedia");
        },
        error: function(event) {
            if(ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {
                // Setup the media stream again and play it.
                $(this).jPlayer("setMedia", stream).jPlayer("play");
            }
        },
        swfPath: "js",
        supplied: "mp3",
        preload: "none",
        wmode: "window",
        keyEnabled: true,
        cssSelectorAncestor: "#jp_container_1",
        autoPlay: true
    });
});

// Facebook functions
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Twitter functions
!function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
    if(!d.getElementById(id)){
        js=d.createElement(s);
        js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js,fjs);
    }
}(document,"script","twitter-wjs");

(function($){
    $(window).load(function(){
        // Custom scrollbar for news
        $("#newsContainer").mCustomScrollbar();

        // Put styles for tweets tittle
        setTimeout(function() {
            var $head = $("#twitter-widget-0").contents().find("head");                
            $head.append($("<link/>", { rel: "stylesheet", href: '//fonts.googleapis.com/css?family=Podkova:400,700', type: "text/css" }));
        }, 1); 

        setTimeout(function(){
            $("#twitter-widget-0").contents().find('h1.summary a').css("font-size", "20px");
            $("#twitter-widget-0").contents().find('h1.summary a').css("font-family", "'Podkova', Sans-Serif");
            $("#twitter-widget-0").contents().find('h1.summary a').css("color", "#49524C");
            $("#twitter-widget-0").contents().find('h1.summary a').css("text-transform", "uppercase");
            $("#twitter-widget-0").contents().find('h1.summary a').css("text-decoration", "none");
            $("#twitter-widget-0").contents().find('h1.summary a').css("padding-left", "10px");
        }, 500);
    });

})(jQuery);

