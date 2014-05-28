function fadeLogo() {
    $("#logo").hide().delay(100).fadeIn(400);
}
function fadeGallery() {
    $("#gallery li").hide().delay(400).fadeIn(400);
}

//change selected page in nav bar
var $nav = $("nav li");
$nav.click(function(event) {
    event.preventDefault();
    $(this).siblings().children().removeClass("selected");
    $(this).children().addClass("selected");
    
});
    
//add html for lightbox
var $overlay = $('<div id="overlay"></div>');
var $controls = $('<div id="controls"></div>');
var $image = $('<img>');
var $next = $('<div id="rightarrow"></div>');
var $prev = $('<div id="leftarrow"></div>');
var $exit = $('<div id="exit"></div>');
$controls.append($prev, $next, $exit);
$overlay.append($image);
$overlay.append($controls);


//add image locations to array
var images = [];
$("#gallery a").children("img").each(function(){
    images.push($(this).attr("src"));
});
var imageCount = images.length;



var currentImage;
var gallery = $("#gallery a");

//open lightbox when image is clicked
$("#gallery a").click(function(event) {
    $("body").append($overlay);
    //determine current image
    if ($(this).attr("href") == images[0]){
        currentImage = 0;    
    } else if ($(this).attr("href") == images[1]) {
        currentImage = 1;
    } else if ($(this).attr("href") == images[2]) {
        currentImage = 2;
    } else if ($(this).attr("href") == images[3]) {
        currentImage = 3;
    }

    //set #overlay img to current image and fade in #overlay
    event.preventDefault();
    $image.attr("src", images[currentImage]);
    $overlay.fadeIn("fast");
    if (currentImage <= 0) {
        $prev.hide();
    } else {$prev.show();} 
    if (currentImage >= imageCount -1) {
        $next.hide();
    } else {$next.show();}

    console.log(currentImage);

});

$next.click(function(){
    currentImage++;
    $image.attr("src", images[currentImage]);
    if (currentImage >= imageCount - 1) {
        $next.hide();
    }
    if (currentImage >= 0) {
        $prev.show();
    }
    console.log("next:",currentImage);
    });
    
$(document).keydown(function(e){
    if (e.keyCode == 39) {
        currentImage++;
        $image.attr("src", images[currentImage]);
        if (currentImage >= imageCount - 1) {
        $next.hide();
        }
        if (currentImage >= 0) {
            $prev.show();
        }
    }
        
});

$prev.click(function(){
    currentImage--;
    $image.attr("src", images[currentImage]);
    if (currentImage <= 0) {
        $prev.hide();
    }
    if (currentImage <= imageCount - 1) {
        $next.show();
    }
    console.log("prev:",currentImage);
});

$exit.click(function(){
    $overlay.fadeOut("fast");
});

fadeLogo();
fadeGallery();