<?php include 'header.php';

//Displays different markup for the demo version while the release version is being finalised
if(isset($_GET['demo'])) {
    echo "<body>
            <main class='pinata-content'>
                <div class='row'>
                    <div id='pinata-div'>
                        <img src='images/pinata/pinata.png' id='pinata'>
                    </div>
                    <div id='ticket-div'>
                        <img src='images/pinata/ticket.png' id='ticket'>
                    </div>
                </div>
                <div class='clearfix'>

                </div>
            </main>
            <div class='row'>
                <button id='restore' type='button' onclick='restore()'>Reset</button>
            </div>
        </body>";
} else {
    echo "<div class='row'>
            <div id='pinata-div'>
                <img src='images/pinata/pinata.png' id='pinata'>
            </div>
            <div id='ticket-div'>
                <img src='images/pinata/ticket.png' id='ticket'>
            </div>
        </div>
        <div class='clearfix'>

        </div>
        <div class='row'>
            <button id='restore' type='button' onclick='restore()'>Reset</button>
        </div>";
}

include 'footer.php'; ?>
