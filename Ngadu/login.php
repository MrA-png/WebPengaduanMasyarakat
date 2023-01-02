<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sigup</title>
	<link rel="stylesheet" href="css/styleLogin.css">
	<!-- GOOGLE -->
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="442928492343-lds4noi5801thdo1r13sv96ieag0nlv1.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
	<div class="login-box">
		<div class="left-box">
			<h1>Sign In</h1>
			<input type="email" class="input-box" placeholder="Email">
			<input type="password" class="input-box" placeholder="password">
			<input type="submit" class="submit-btn" value="sign in">
		</div>
		<div class="right-box">
			<span class="right-title">Sign Up With <br>Sosial Network</span>
			<div id="tampil">
				<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
			</div>
			<br>
			<div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0&appId=338790431688596&autoLogAppEvents=1" nonce="P91qWs32"></script>
            
            <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>
       
		</div>
			<div class="or">OR</div>
		</div>

	<!-- GOOGLE -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        // console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        // console.log('Full Name: ' + profile.getName());
        // console.log('Given Name: ' + profile.getGivenName());
        // console.log('Family Name: ' + profile.getFamilyName());
        // console.log("Image URL: " + profile.getImageUrl());
        // console.log("Email: " + profile.getEmail());

        // // The ID token you need to pass to your backend:
        // var id_token = googleUser.getAuthResponse().id_token;
        // console.log("ID Token: " + id_token);

        var nama = profile.getName();
        var email = profile.getEmail();
        var img = profile.getImageUrl();

        $.ajax({
      	url:"index.php",
	      	type:"post",
	      	data:{nama:nama,email:email,img:img},
	      	succes:function(data){
	      		$("#tampil").html(data);
	      	}
	      })
     }

      
    </script>
</body>
</html>