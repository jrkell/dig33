function productSlider() {
    $("#product-slider").flexisel({
        visibleItems: 5,
        itemsToScroll: 3,
        animationSpeed: 200,
        infinite: true,
        //            focusOnSelect: true,
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

function displayProduct() {
    $('#product-slider').find("img").click(function () {
        var title = $(this).attr('id');

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("product").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "api/product.php?product=" + title, true);
        xhttp.send();

    });
}

function displayDefaultProduct(title = "original") {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("product").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "api/product.php?product=" + title, true);
    xhttp.send();
}
