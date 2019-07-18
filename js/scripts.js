//------------------- Pinata Bash relevant code -------------------
var clickCount = 0;
var iterations = 500;
var swingTime = 1;

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

function restore() {
    $("#ticket-div").css("display", "none");
    $("#pinata-div").html('<img src="images/pinata/pinata.png" id="pinata">');
    clickCount = 0;
    resetSwing();
}

function swing() {
    $(".content").css("-webkit-transform-origin", "50% 0");
    $(".content").css("transform-origin", "50% 0");
    $(".content").css("-webkit-animation", "swinging " + swingTime + "s ease-in-out forwards infinite");
    $(".content").css("animation", "swinging " + swingTime + "s ease-in-out forwards infinite");
}

function resetSwing() {
    $(".content").css("-webkit-transform-origin", "none");
    $(".content").css("transform-origin", "none");
    $(".content").css("-webkit-animation", "none");
    $(".content").css("animation", "none");
}
//------------------------------------------------------------------

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

function redirectToProduct() {
    $('#product-slider').find("img").click(function () {
        var product = $(this).attr('id');
        window.location.href = "products.php?product=" + product;
    });
}

function productClickListener() {
    $('#product-slider').find("img").click(function () {
        var title = $(this).attr('id');
        displayProduct(title);
    });
}

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

function changeToSignUp() {
    document.getElementById("pinata-container").innerHTML =
        "<h1>Sign Up</h1>\
            <form action='api/user_signup.php' method='post'>\
                Email:<br>\
                <input type='email' name='email'>\
                <br>\
                First Name:<br>\
                <input type='text' name='first'>\
                <br>\
                Surname:<br>\
                <input type='text' name='sur'>\
                <br>\
                Password:<br>\
                <input type='password' name='password1'>\
                <br>\
                Re-Enter Password:<br>\
                <input type='password' name='password2'>\
                <br><br>\
                <input type='submit' value='Sign Up'>\
            </form>\
            <br><br>\
            <p>Already have an account?</p>\
            <button onclick='changeToLogin()'>Login</button>";
}

function changeToLogin() {
    document.getElementById("pinata-container").innerHTML =
        "<h1>Login</h1>\
            <form action='api/user_login.php' method='post'>\
                Email:<br>\
                <input type='email' name='email'>\
                <br>\
                Password:<br>\
                <input type='password' name='password'>\
                <br><br>\
                <input type='submit' value='Login'>\
            </form>\
            <br><br>\
            <p>Don't have an account?</p>\
            <button onclick='changeToSignUp()'>Sign Up</button>";
}
