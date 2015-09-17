<?php
  if (strlen($_POST["email"])>0) {
	$pos = strrpos($_POST["email"], "@");

	if ($pos>0){
			 	 
			// Mando la mail
			require("phpmailer/class.phpmailer.php");
			$mail = new PHPMailer();

			//Invio preventivo via email
			$mail->IsHTML(true);
			$mail->From = "info@gestionemessaggi.com";
			$mail->FromName = "info@gestionemessaggi.com";
			$mail->AddAddress($_POST["email"]);
			$myfile = fopen("email.html", "r") or die("Unable to open file!");
			$html=fread($myfile,filesize("email.html"));
			fclose($myfile);
			$mail->Subject="====> SCARICA GESTIONE MESSAGGI <====";
			$mail->Body=$html;
			$mail->Send();
			$mail = new PHPMailer();
			// Invia contatto alla nostra mail
			$mail->IsHTML(true);
			$mail->From = "info@gestionemessaggi.com";
			$mail->FromName = "info@gestionemessaggi.com";
			$mail->AddAddress("info@arkosoft.it");
			$mail->Subject="Nuovo utente per Gestione Messaggi";
			$html='La seguente Email: '.$_POST["email"].' ha scaricato gestionemessaggi.';
			$mail->Body=$html;
			$mail->Send();
			

		 
	}
}
?>


<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths wf-cabin-n4-active wf-allan-n4-active wf-active" style="" lang="en">
	<head>
    <!-- Decibel Insight - www.gestionemessaggi.com -->
    <script type="text/javascript">
    // <![CDATA[
      (function(d,e,c,i,b,el,it) {
        d._da_=d._da_||[];_da_.oldErr=d.onerror;_da_.err=[];
        d.onerror=function(){_da_.err.push(arguments);_da_.oldErr&&_da_.oldErr.apply(d,Array.prototype.slice.call(arguments));};
        d.DecibelInsight=b;d[b]=d[b]||function(){(d[b].q=d[b].q||[]).push(arguments);};
        el=e.createElement(c),it=e.getElementsByTagName(c)[0];el.async=1;el.src=i;it.parentNode.insertBefore(el,it);
      })(window,document,'script','//decibelinsight.net/i/20448/di.js','decibelInsight');
    // ]]>
    </script>
    <!-- Fine -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600%7CDamion&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
		<link href="stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	
		<style type="text/css">
			article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}
			audio,canvas,video{display:inline-block;*display:inline;*zoom:1}
			audio:not([controls]){display:none;height:0}[hidden]{display:none}html{font-size:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}
			html,button,input,select,textarea{font-family:sans-serif}
			body{margin:0}
			a:focus{outline:thin dotted}
			a:active,a:hover{outline:0}
			h1{font-size:2em;margin:.67em 0}
			h2{font-size:1.5em;margin:.83em 0}
			h3{font-size:1.17em;margin:1em 0}
			h4{font-size:1em;margin:1.33em 0}
			h5{font-size:.83em;margin:1.67em 0}
			h6{font-size:.67em;margin:2.33em 0}
			abbr[title]{border-bottom:1px dotted}
			b,strong{font-weight:bold}
			blockquote{margin:1em 40px}
			dfn{font-style:italic}
			hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}
			mark{background:#ff0;color:#000}
			p,pre{margin:1em 0}
			code,kbd,pre,samp{font-family:monospace,serif;_font-family:'courier new',monospace;font-size:1em}
			pre{white-space:pre;white-space:pre-wrap;word-wrap:break-word}q{quotes:none}
			q:before,q:after{content:'';content:none}
			small{font-size:80%}
			sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
			sup{top:-0.5em}sub{bottom:-0.25em}
			dl,menu,ol,ul{margin:1em 0}
			dd{margin:0 0 0 40px}
			menu,ol,ul{padding:0 0 0 40px}
			nav ul,nav ol{list-style:none;list-style-image:none}
			img{border:0;-ms-interpolation-mode:bicubic}
			svg:not(:root){overflow:hidden}
			figure{margin:0}form{margin:0}
			fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:.35em .625em .75em}
			legend{border:0;padding:0;white-space:normal;*margin-left:-7px}
			button,input,select,textarea{font-size:100%;margin:0;vertical-align:baseline;*vertical-align:middle}
			button,input{line-height:normal}
			button,select{text-transform:none}
			button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer;*overflow:visible}
			button[disabled],html input[disabled]{cursor:default}
			input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0;*height:13px;*width:13px}
			input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}
			input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-
			search-decoration{-webkit-appearance:none}
			button::-moz-focus-inner,input::-moz-
			focus-inner{border:0;padding:0}
			textarea{overflow:auto;vertical-align:top}
			table{border-collapse:collapse;border-spacing:0}
			html,button,input,select,textarea{color:#222}
			body{font-size:1em;line-height:1.4}::-moz-
			selection{background:#b3d4fc;text-shadow:none}::selection{background:#b3d4fc;text-shadow:none}
			hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}
			img{vertical-align:middle}fieldset{border:0;margin:0;padding:0}
			textarea{resize:vertical}
			.chromeframe{margin:0.2em 0;background:#ccc;color:#000;padding:0.2em 0}
			body{font-family:'Source Sans Pro',sans-serif;font-size:16px;background-color:#25364c!important;color:#000;word-wrap:break-word}*{-webkit-transition:all 200ms linear;-moz-transition:all 200ms linear;-ms-transition:all 200ms linear;-o-transition:all 200ms linear}
			.header{background:#ffffff;text-align:center;padding:40px 20px 60px}
			.header-inner{max-width:840px;margin:0 auto}
			.headline{color:#1fa2ed;font-family:'Source Sans Pro',sans-serif;font-size:72px;font-weight:bold;line-height:1.2}
			.subheadline{color:#231f20 ;font-family:'Source Sans Pro',sans-serif;font-size:22px}
			.social-bar{text-align:center;margin-top:-26px}
			.facebook,.twitter{display:inline-block;width:275px;vertical-align:top}
			.facebook-link,.twitter-link{display:inline}
			.facebook:hover,.twitter:hover{opacity:0.9}
			.facebook{margin-right:20px}
			.tw-btn-pre,.fb-btn-pre{display:table-cell;margin:0 auto;vertical-align:top;width:73px;height:52px;-moz-border-radius:8px 0px 0px 8px;-webkit-border-radius:8px 0px 0px 8px;border-radius:8px 0px 0px 8px}
			.tw-btn-pre{border-right:0px solid #eef7fd;background:#00bef2 no-repeat center center}
			.tw-btn-pre img,.fb-btn-pre img{padding-top:10%;margin-top:4px}
			.fb-btn-pre{border-right:0px solid #9fd3f4;background:#0071bb no-repeat center center}
			.fb-btn,.tw-btn{display:table-cell;margin:0 auto;overflow:hidden;color:#fff;font-family:'Source Sans Pro',sans-serif;font-size:18px;text-align:left;padding:10px 0px 0px 10px;font-weight:100;margin-left:-4px;-ms-word-break:break-all;word-break:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto}
      .fb-btn{width:200px;height:52px;-moz-border-radius:0px 8px 8px 0px;-webkit-border-radius:0px 8px 8px 0px;border-radius:0px 8px 8px 0px;-moz-background-clip:padding;-webkit-background-clip:padding-box;background-clip:padding-box;background-color:#0b7ac3;border-left:1px solid #9fd3f4}
			.tw-btn{width:200px;height:52px;-moz-border-radius:0px 8px 8px 0px;-webkit-border-radius:0px 8px 8px 0px;border-radius:0px 8px 8px 0px;-moz-background-clip:padding;-webkit-background-clip:padding-box;background-clip:padding-box;background-color:#6dcff6;border-left:1px solid #eef7fd}
			.hosts{max-width:560px;margin:40px auto!important}
			.host{margin:20px -15px;text-align:center}
			.host img,.quote-text{vertical-align:middle;display:inline-block}
			.host img{padding:0;width:192px;float:none;border-radius:50%}
			.quote-text{color:#1ec279;font-family:Allan,cursive;font-size:36px;float:none!important;display:inline-block;vertical-align:middle}
			.footer{text-align:center;padding:10px 0px 60px}
			.fb-icon,.tw-icon{margin:0px 2px}
			.fb-icon:hover,.tw-icon:hover{opacity:0.6}
			.copyright-text{color:#a6a6a6;font-family:'Source Sans Pro',sans-serif;font-size:14px;padding:0 20px}
			@media only screen and (max-width:810px){.host img{float:none}}
			@media only screen and (max-width:600px){.facebook,.twitter{display:inline-block;margin:5px auto 0px;float:none}.headline{line-height:70px}.subheadline{font-size:18px}}
		</style>
		
		<title>Gestione Messaggi il software per il tuo Mobile marketing | conferma email</title>
		<link href="https://fonts.googleapis.com/css?family=Cabin%7CAllan" rel="stylesheet">
	
	</head>
	<body data-twttr-rendered="true">
		<div class="container-fluid">
			<div id="header" class="row header">
				<div class="header-inner role-element leadstyle-container">
					<div id="logo-container">
						<a href="http://www.gestionemessaggi.com/" class="role-element leadstyle-image-link" target="_blank">
							<img id="logo" src="images/icona.fw.png" alt="logo" style="max-width: 100px; max-height: 100px;">
						</a>
					</div>
					<div id="headline" class="headline role-element leadstyle-text">
						<div>Ora puoi <em>raggiungere</em> i tuoi clienti<br> ovunque con un sms!</div>
					</div>
					<div id="subheadline" class="subheadline role-element leadstyle-text">
						<div>
							<span style="font-family:cabin;">
								Hai appena ricevuto un'email di conferma sulla tua posta elettronica per poter utilizzare la nostra demo. Una volta
								finiti i giorni di prova puoi decidere di acqustare i crediti direttamente da noi chiamandoci al numero: 0831-1815236 o
								direttamente dalla nostra pagina <a href="http://www.gestionemessaggi.com">www.gestionemessaggi.com</a>
								<strong>Condividi questo software con i tuoi amici e colleghi facendo clic sui pulsanti Facebook e Twitter qui sotto.</strong>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div id="social-bar" class="row social-bar role-element leadstyle-container">
				<a data-send="false" href="https://www.facebook.com/sharer/sharer.php?u=http://www.gestionemessaggi.com" id="facebook-btn" class="facebook-link popup">
					<div id="facebook-inner" class="facebook role-element leadstyle-dynamic">
						<span class="fb-btn-pre">
							<img src="images/facebook.png" id="facebook-lrg" class="role-element leadstyle-image" style="max-width: 35px; max-height: 35px;">
						</span>
						<span class="fb-btn role-element leadstyle-text" id="facebook-text">Condividi su Facebook</span>
					</div>
				</a>
				<a href="https://twitter.com/intent/tweet?text=gestione%20messaggi%20il%20software%20per%20il%20mobile%20marketing%20by%20@arkosoft" id="twitter-btn" class="twitter-link popup">
					<div id="twitter-inner" class="twitter role-element leadstyle-dynamic">
						<span class="tw-btn-pre">
							<img src="images/twitter.png" id="twitter-lrg" class="role-element leadstyle-image" style="max-width: 35px; max-height: 35px;">
						</span>
						<span class="tw-btn role-element leadstyle-text" id="twitter-text">Condividi su Twitter</span>
					</div>
				</a>
			</div>

			<div id="hosts" class="row hosts role-element leadstyle-container">
				<div id="host01" class="row host role-element leadstyle-container">
					<img id="host-image01" src="images/foto-donna.png" class="col-xs-6 col-md-4 role-element leadstyle-image" style="max-width: 192px; max-height: 192px;">
					<div id="host-quote01" class="col-xs-12 col-md-8 quote-text role-element leadstyle-text">
						<div>
							<span style="color:#FFFFFF;">Grazie per aver condiviso il nostro software</span>
							<br>
							<span style="color:#FFFFFF;">- 
								<span style="font-family: allan;">di Gestione messaggi</span>-
							</span>
						</div>
					</div>
				</div>
				<div id="host02" class="row host role-element leadstyle-container">
					<div id="host-quote02" class="col-xs-12 col-md-8 quote-text left role-element leadstyle-text">
						<div>
							<span style="font-family:cabin;">
								<a target="" href="http://wiki.gestionemessaggi.com">Per saperne di pi&ugrave; su Gestione messaggi</a>
							</span>
						</div>
					</div>
					<img id="host-image02" src="images/icona.fw.png" class="col-xs-6 col-md-4 role-element leadstyle-image" style="max-width: 192px; max-height: 192px;">
				</div>
			</div>

			<div id="footer" class="row footer role-element leadstyle-container">
				<a id="tw-link" class="pop-twitter2 popup" rel="nofollow" href="https://twitter.com/intent/tweet?text=FREE%20%40LeadPages%20course!&amp;url=http%3A%2F%2Fbit.ly%2F11epOxv" target="_blank" data-lead-id="twitter-link">
					<img src="images/twitter01.png" class="tw-icon role-element leadstyle-image" style="max-width: 28px;">
				</a>
				<a id="fb-link" class="pop-facebook2 popup" rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fbit.ly%2F11epOxv" data-href="" data-send="false" data-lead-id="facebook-link">
					<img src="images/facebook01.png" class="fb-icon role-element leadstyle-image" style="max-width: 28px;">
				</a>
			</div>
		</div>
	</body>
</html>