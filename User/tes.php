<?php
session_start();
include "Config/Connection.php";

if($_SESSION['login_user']=='')
header("location: index.php");

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<!------ Include the above in your HEAD tag ----------> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> 
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
<!------ Include the above in your HEAD tag ----------> 
<!DOCTYPE html>
<html class=''> 
    <head>
        
        <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
        <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
        <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
        <meta charset='UTF-8'>
        <meta name="robots" content="noindex">
        <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
        <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
        <link rel="canonical" href="https://codepen.io/emilcarlsson/pen/ZOQZaV?limit=all&page=74&q=contact+" /> 
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'> 
        <script src="https://use.typekit.net/hoy3lrg.js"></script> 
        <script>try {
            Typekit.load( {
                async: true
            }
        );
        }

        catch(e) {}

        </script>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'> 
        <link rel="stylesheet" type="text/css" href="Chat.css">
        <style class="cp-pen-styles">
            

        </style>
    </head>
<body>
<!-- A concept for a chat interface. Try writing a new message!:) Follow me here: Twitter: https: //twitter.com/thatguyemil
Codepen: https: //codepen.io/emilcarlsson/
Website: http: //emilcarlsson.se/
--> 
<div id="frame">
    <div id="sidepanel">
        <div id="profile">
            <div class="wrap"> <img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
                <p>Mike Ross</p>
                
                
            </div>
        </div>
        <div id="search">
            <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
            <input type="text" placeholder="Search contacts..." /> </div>
        <div id="contacts">
            <ul>
                <li class="contact">
                    <div class="wrap"> <span class="contact-status online"></span> <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                        <div class="meta">
                            <p class="name">Louis Litt</p>
                            <p class="preview">You just got LITT up, Mike.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="contact active">
                    <div class="wrap"> <span class="contact-status busy"></span> <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <div class="meta">
                            <p class="name">Harvey Specter</p>
                            <p class="preview">Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="contact-profile"> 
            <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
            <p>Harvey Specter</p>
        </div>
        <div class="messages">
            <ul>
                <li class="sent"> <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                    <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                </li>
                <li class="replies"> <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                    <p>When you're backed against the wall, break the god damn thing down.</p>
                </li>
            </ul>
        </div>
        <div class="message-input">
            <div class="wrap">
                <input type="text" placeholder="Write your message..." /> 
                <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script >
    
$(".messages").animate( {
    scrollTop: $(document).height()
}

,
"fast");
$("#profile-img").click(function() {
    $("#status-options").toggleClass("active");
}

);
$(".expand-button").click(function() {
    $("#profile").toggleClass("expanded");
    $("#contacts").toggleClass("expanded");
}

);
$("#status-options ul li").click(function() {
    $("#profile-img").removeClass();
    $("#status-online").removeClass("active");
    $("#status-away").removeClass("active");
    $("#status-busy").removeClass("active");
    $("#status-offline").removeClass("active");
    $(this).addClass("active");
    if($("#status-online").hasClass("active")) {
        $("#profile-img").addClass("online");
    }
    else if ($("#status-away").hasClass("active")) {
        $("#profile-img").addClass("away");
    }
    else if ($("#status-busy").hasClass("active")) {
        $("#profile-img").addClass("busy");
    }
    else if ($("#status-offline").hasClass("active")) {
        $("#profile-img").addClass("offline");
    }
    else {
        $("#profile-img").removeClass();
    }
    ;
    $("#status-options").removeClass("active");
}

);
function newMessage() {
    message=$(".message-input input").val();
    if($.trim(message)=='') {
        return false;
    }
    $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
    $('.message-input input').val(null);
    $('.contact.active .preview').html('<span>You: </span>' + message);
    $(".messages").animate( {
        scrollTop: $(document).height()
    }
    ,
    "fast");
}

;
$('.submit').click(function() {
    newMessage();
}

);
$(window).on('keydown',
function(e) {
    if (e.which==13) {
        newMessage();
        return false;
    }
}

);
//# sourceURL=pen.js
</script> 
</body>
</html>