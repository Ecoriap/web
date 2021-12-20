<?php

$data = array(
            'secret' => "0xB88308E594DdCF79Bb24A7EEf83CC723DDFd3853",
            'response' => $_POST['h-captcha-response']
        );

$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($verify);
// var_dump($response);
$responseData = json_decode($response);

if($responseData->success) {
	$content = file_get_contents("https://server.duinocoin.com/transaction/?username=MyEcoria&password=Antoine@120707.&recipient=".$_POST['pseudo']."&amount=0.004&memo=MyEcoria_Faucet_(s.ddns.net)");
	header("Location: valide.php");



}
 

?>
<!DOCTYPE html>
<html>
<head>
	<title>MyEcoria | Faucet</title>
	<link rel="stylesheet" type="text/css" href="css/faucet.css">
	<script src="https://js.hcaptcha.com/1/api.js" async defer></script>
	<link rel="icon" type="image/png" href="img/logo.png">
	<script data-ad-client="ca-pub-9645466131870589" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>	
	
	<!--METAS-->
	
	<meta name="Content-Type" content="UTF-8">
	<meta name="Content-Language" content="fr">
	<meta name="Description" content="C'est un faucet duinocoin créé par MyEcoria qui vous offre la possibilité de découvrir le monde de la crypto">
	<meta name="Keywords" content="faucet duinocoin MyEcoria">
	<meta name="Subject" content="faucet">
	<meta name="Copyright" content="MyEcoria">
	<meta name="Author" content="MyEcoria">
	<meta name="Publisher" content="Pierric">
	<meta name="Identifier-Url" content="http://s.ddns.net/">
	<meta name="Reply-To" content="contact.myecoria@protonmail.com">
	<meta name="Robots" content="index">
	<meta name="Rating" content="general">
	<meta name="Distribution" content="global">
	<meta name="Category" content="internet">
	
	<!-- METAS-->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-VF7WYPMW94"></script>
	<script>
  	  window.dataLayer = window.dataLayer || [];
  	  function gtag(){dataLayer.push(arguments);}
 	  gtag('js', new Date());

  	  gtag('config', 'G-VF7WYPMW94');
	</script>	

</head>
<body>
	<div class="faucet">
		<h1 class="titre">MyEcoria Faucet <img src="img/logo.png" height="45px"></h1>
		<br>
		<form action="" method="POST">
		  <label for="fname">Pseudo DuinoCoin:</label><br>
		  <input type="text" name="pseudo" placeholder="MyEcoria" required>
		</br>
		  <br>
		  <div class="h-captcha" data-sitekey="d70460c5-b57e-4361-9f18-8ff853341f8a" data-theme="dark" data-size="compact"></div>
		</br>
		  <input type="submit" value="Go">
		</br>
	</br>
		</form>
	</div>

	<script type="text/javascript">
		$("form").submit(function(event) {

		   var hcaptchaVal = $('[name=h-captcha-response]').value;
		   if (hcaptchaVal === "") {
		      event.preventDefault();
		      alert("Please complete the hCaptcha");
		   }
		});
	</script>
</body>
</html>
