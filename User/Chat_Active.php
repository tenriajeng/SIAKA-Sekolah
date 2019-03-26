<?php
    session_start();
    $user = $_SESSION['kd'];
    include "Config/Connection.php";
    if($_SESSION['login_user']=='')
    header("location: index.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">
		<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="//onesignal.github.io/emoji-picker/lib/css/emoji.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container" id="chat-realtime">
		
			<div class="card-container" id="login">
			<?php 
			$username = $_SESSION['login_user'];
			$ni = $_SESSION['pass'];
			$foto = $_SESSION['foto'];
			?>
				<img id="profile-img" class="profile-img-card" src="file/user-profile/<?php echo $foto; ?>" alt="User-Profile-Image">
				<center>
					<span><?php echo $username; ?></span>
					<?php if(!($_SESSION['level_user']=="admin")){?>
					<span><?php echo $ni; ?></span>
					<?php } ?>
				</center>
				<p id="profile-name" class="profile-name-card"></p>
				<form class="form-signin" action="#">
					<input type="hidden" id="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
					<input type="hidden" id="avatar" class="form-control" placeholder="Avatar" value="file/user-profile/<?php echo $foto; ?>">
					<button id="btnLogin" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Online</button>
				</form><!-- /form -->
				<div id="ref"></div>
			</div><!-- /card-container -->
		
			<div class="row app-one">
					<div class="col-sm-4 side">
						<div class="side-one">
							<div class="row heading">
								<div class="col-sm-2 col-xs-2 heading-avatar">
									<div class="heading-avatar-icon">
										<img class="me" src="image/user.jpg">
									</div>
								</div>
								<div class="col-sm-2 col-xs-2  heading-logout  pull-right">
									<i class="fa fa-sign-out fa-2x  pull-right" aria-hidden="true"></i>
								</div>
								<div class="col-sm-2 col-xs-2 heading-compose  pull-right">
									<i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
								</div>
								<div class="col-sm-2 col-xs-2 heading-home  pull-right" data-tipe="rooms" data-avatar="image/public.jpg" id="Public">
									<span class="inbox-status">0</span>
									<i class="fa fa-home fa-2x  pull-right" aria-hidden="true"></i>
								</div>
							</div>
							
							<div class="row searchBox">
								<div class="col-sm-12 searchBox-inner">
									<div class="form-group has-feedback">
										<input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
									</div>
								</div>
							</div>
							<div class="row sideBar">
								<!-- side1 -->
							</div>
						</div>
						<div class="side-two">
							<div class="row newMessage-heading">
								<div class="row newMessage-main">
									<div class="col-sm-2 col-xs-2 newMessage-back">
										<i class="fa fa-arrow-left" aria-hidden="true"></i>
									</div>
									<div class="col-sm-10 col-xs-10 newMessage-title">
										New Chat
									</div>
								</div>
							</div>
							<div class="row composeBox">
								<div class="col-sm-12 composeBox-inner">
									<div class="form-group has-feedback">
										<input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
									</div>
								</div>
							</div>
							<div class="row compose-sideBar">
								<!-- side2 -->
							</div>
						</div>
					</div>
					<div class="col-sm-8 conversation">
						<div class="row heading">
							<div class="col-sm-1 col-xs-1 user-back">
								<i class="fa fa-arrow-left" aria-hidden="true"></i>
							</div>
							<div class="col-sm-1 col-md-1 col-xs-3 heading-avatar">
								<div class="heading-avatar-icon">
									<img class="you" src="image/public.jpg">
								</div>
							</div>
							<div class="col-sm-6 col-xs-4 heading-name">
								<p id="heading-name-meta">Akil</p>
								<span id="heading-online">Online</span>
							</div>
						</div>
						<div class="row message" id="conversation">
							<p class="messages">
								<!-- message -->
							</p>
							<div class="row message-previous">
								<div class="col-sm-12 previous">
									<a>
									Show Previous Message!
									</a>
								</div>
							</div>
							<div class="message-scroll">
								<div id="scroll">
									<a>
									<i class="fa fa-chevron-down"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="row imagetmp">
								<div id="reviewImg"></div>
						</div>
						<div class="row reply">
							<div class="col-sm-1 col-xs-1 reply-recording" align="center">
								<label class="btn btn-default fileinput">
								<i class="fa fa-camera fa-2x" aria-hidden="true"></i> <input type="file" id="fileinput" multiple style="display: none;">
								</label>	
							</div>
							<div class="col-sm-10 col-xs-10 reply-main">
								<textarea class="form-control" data-emojiable="true" rows="1" id="comment"></textarea>
							</div>
							<div class="col-sm-1 col-xs-1 reply-send" id="send">
								<i class="fa fa-send fa-2x pull-right" aria-hidden="true"></i>
							</div>
						</div>
					</div>
			</div>
		</div>
		<!-- Firebase -->
		<script src="//www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
		<script src="//www.gstatic.com/firebasejs/3.9.0/firebase-app.js"></script>
		<script src="//www.gstatic.com/firebasejs/3.9.0/firebase-database.js"></script>
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
		<!-- emoji-picker -->
		<script type="text/javascript" src="//onesignal.github.io/emoji-picker/lib/js/config.js"></script>
		<script type="text/javascript" src="//onesignal.github.io/emoji-picker/lib/js/util.js"></script>
		<script type="text/javascript" src="//onesignal.github.io/emoji-picker/lib/js/jquery.emojiarea.js"></script>
		<script type="text/javascript" src="//onesignal.github.io/emoji-picker/lib/js/emoji-picker.js"></script>
		<!-- chat_realtime -->
		<script type="text/javascript" src="js/config.js"></script>
		<script type="text/javascript" src="js/chat_realtime.js"></script>
	</body>
</html>