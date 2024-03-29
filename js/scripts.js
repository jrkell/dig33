$("document").ready(function () {
    activeNav();
});


//------------------- Pinata Bash relevant code -------------------
var clickCount = 0;
var iterations = 500;
var swingTime = 1;

//Changes the pinata image with each click and executes the explode plugin on the third click
$("#pinata-div").click(function () {
    switch (clickCount) {

        case 0:
            $("#pinata").attr("src", "images/pinata/pinata2.gif");
            swing();
            ++clickCount;
            break;

        case 1:
            $("#pinata").attr("src", "images/pinata/pinata3.gif");
            swing();
            ++clickCount;
            break;

        case 2:

            $("#pinata").attr("src", "images/pinata/pinata3.gif");
            resetSwing();
            $("#pinata").explode({
                "minWidth": 3,
                "maxWidth": 12,
                "radius": 350,
                "minRadius": 15,
                "release": false,
                "fadeTime": 0,
                "recycle": false,
                "recycleDelay": 500,
                "explodeTime": 300,
                "round": false,
                "minAngle": 0,
                "maxAngle": 360,
                "gravity": 5,
                "groundDistance": 400
            });

            congrats();
            $("#ticket-div").fadeIn(400);

            ++clickCount;
            break;
    }
});

// Changes the text on the pinata bash page to inform the user that they have entered,
// sourcing their name from a cookie set in header.php
function congrats() {
    var name = document.cookie.split("pinata_name=");
    var split = name[1].split(";");
    $("#pinata-top").html('<h1>ENTRY CONFIRMATION</h1>\
                    <h2>Good Luck ' + split[0] + '!</h2>\
                    <p>Your entry ticket has been emailed to you.</p>');
    $("#play-again").html("<div class='col-sm-12 text-center'>\
                            <button type='button' class='btn btn-warning' onclick='playAgain()'>Play Again</button>\
                            </div>");
    $.get("./api/enter_code.php");
}

function playAgain() {
    window.location.href = "pinata_bash.php";
}

//Resets changes made by clicking or the explode plugin
function restore() {
    $("#ticket-div").css("display", "none");
    $("#pinata-div").html('<img src="images/pinata/pinata1.gif" id="pinata">');
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
    $(".pinata-content").css("-webkit-transform-origin", "0");
    $(".pinata-content").css("transform-origin", "0");
    $(".pinata-content").css("-webkit-animation", "none");
    $(".pinata-content").css("animation", "none");
}
//------------------------------------------------------------------

//Executes and configures product slider plugin
function productSlider() {
    $("#product-slider").flexisel({
        visibleItems: 3,
        itemsToScroll: 1,
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
                itemsToScroll: 1
            },
            tablet: {
                changePoint: 768,
                visibleItems: 3,
                itemsToScroll: 1
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

// Adds class to currently active nav link for CSS styling
function activeNav() {

    // Get current url path
    var url = window.location.pathname;

    // Separate file name from url path
    var filename = url.substring(url.lastIndexOf('/') + 1);

    // Find each nav link, if filename matches url, assign active class, else remove active class
    $(".navbar-nav").find("a").each(function () {
        if ($(this).attr("href") == filename) {
            $(this).addClass("nav-active");
        } else {
            if ($(this).hasClass("nav-active")) {
                $(this).removeClass("nav-active");
            }
        }
    });
}

// Stockists cart page - when user changes a quantity, the Proceed to Checkout button
// changes to an Update Prices Button
function toggleCartButtons() {
    var update = document.getElementById("update");
    var proceed = document.getElementById("proceed");
    proceed.style.display = "none";
    update.style.display = "block";
    document.cartForm.action = "stockist_cart.php";


}
