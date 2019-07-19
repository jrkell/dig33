//------------------- Pinata Bash relevant code -------------------
var clickCount = 0;
var iterations = 500;
var swingTime = 1;

//Changes the pinata image with each click and executes the explode plugin on the third click
$("#pinata-div").click(function () {
    switch (clickCount) {

        case 0:
            $("#pinata").attr("src", "images/pinata/pinata2.png");
            swing();
            ++clickCount;
            break;

        case 1:
            $("#pinata").attr("src", "images/pinata/pinata3.png");
            swing();
            ++clickCount;
            break;

        case 2:

            $("#pinata").attr("src", "images/pinata/pinata4.png");
            resetSwing();
            $("#pinata").explode({
                "minWidth": 3,
                "maxWidth": 12,
                "radius": 350,
                "minRadius": 15,
                "release": false,
                "fadeTime": 300,
                "recycle": false,
                "recycleDelay": 500,
                "explodeTime": 300,
                "round": false,
                "minAngle": 0,
                "maxAngle": 360,
                "gravity": 0,
                "groundDistance": 500
            });

            $("#ticket-div").fadeIn(400);

            ++clickCount;
            break;
    }
});

//Resets changes made by clicking or the explode plugin
function restore() {
    $("#ticket-div").css("display", "none");
    $("#pinata-div").html('<img src="images/pinata/pinata.png" id="pinata">');
    clickCount = 0;
    resetSwing();
}

//Triggers CSS animation to create the swinging effect
function swing() {
    $(".pinata-content").css("-webkit-transform-origin", "50% 0");
    $(".pinata-content").css("transform-origin", "50% 0");
    $(".pinata-content").css("-webkit-animation", "swinging " + swingTime + "s ease-in-out forwards infinite");
    $(".pinata-content").css("animation", "swinging " + swingTime + "s ease-in-out forwards infinite");
}

//Cancels CSS animations
function resetSwing() {
    $(".pinata-content").css("-webkit-transform-origin", "none");
    $(".pinata-content").css("transform-origin", "none");
    $(".pinata-content").css("-webkit-animation", "none");
    $(".pinata-content").css("animation", "none");
}
//------------------------------------------------------------------

//Executes and configures product slider plugin
function productSlider() {
    $("#product-slider").flexisel({
        visibleItems: 5,
        itemsToScroll: 3,
        animationSpeed: 200,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: false,
            interval: 5000,
            pauseOnHover: true
        },
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 1,
                itemsToScroll: 1
            },
            landscape: {
                changePoint: 640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: {
                changePoint: 768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        },
        loaded: function (object) {
            console.log('Slider loaded...');
        },
        before: function (object) {
            console.log('Before transition...');
        },
        after: function (object) {
            console.log('After transition...');
        },
        resize: function (object) {
            console.log('After resize...');
        }
    });
}

// Click listener for home page product slider which redirects browser to products page
function redirectToProduct() {
    $('#product-slider').find("img").click(function () {
        var product = $(this).attr('id');
        window.location.href = "products.php?product=" + product;
    });
}

// Click listener for products page product slider
function productClickListener() {
    $('#product-slider').find("img").click(function () {
        var title = $(this).attr('id');
        displayProduct(title);
    });
}

// Utilises AJAX so that each product selected can be displayed without reloading the products page
function displayProduct(title = "original") {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("product").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "api/product.php?product=" + title, true);
    xhttp.send();
}

// The following two functions utilise AJAX so that the pinata bash page can toggle between login and signup without reloading----------
function changeToSignUp() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("pinata-container").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "user_signup.php", true);
    xhttp.send();
}

function changeToLogin() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("pinata-container").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "user_login.php", true);
    xhttp.send();
}
// -----------------------------------------------------------------------------------------------------------------------------------------
