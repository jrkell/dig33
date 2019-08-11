<?php

//Displays different markup for the demo version while the release version is being finalised
if(isset($_GET['demo'])) {
    include 'header.php';
    echo " <main id='container'>
      <div class='row text-center'>
      <div class='col-sm-12'>
      <h1>PINATA BASH</h1>
      <p>Tap the pinata to reveal your ticket entry!</p>
      </div>
      </div>
      <div class='pinata-content text-center'>
                    <div id='pinata-div'>
                        <img src='images/pinata/pinata1.gif' id='pinata'>
                    </div>
                    <div id='ticket-div'>
                        <img src='images/pinata/ticket.png' id='ticket'>
                    </div>

                </div>

            <div class='row'>
            <div class='col-sm-12 text-center'>
                <button type='button' class='btn btn-warning' onclick='restore()'>Reset</button>
            </div>
            </div>
            </main>";
    include 'footer.php';
} else {
    echo "<div class='row'>
            <div id='pinata-div'>
                <img src='images/pinata/pinata1.gif' id='pinata'>
            </div>
            <div id='ticket-div'>
                <img src='images/pinata/ticket.png' id='ticket'>
            </div>
        </div>
        <div class='row text-center'>
            <button type='button' class='btn btn-warning' onclick='restore()'>Reset</button>
        </div>";
} ?>
