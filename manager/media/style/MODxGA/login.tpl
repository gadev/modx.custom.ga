<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <title>MODX CMF Manager Login</title>
    <meta http-equiv="content-type" content="text/html; charset=[+modx_charset+]" />
    <meta name="robots" content="noindex, nofollow" />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <style type="text/css">
		body {
			font-family: 'Ubuntu', Arial;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		*, *:after, *:before {
			box-sizing: border-box;
		}
		input {
			font-family: 'Ubuntu', Arial;
			line-height: normal;
			font-size: 100%;
			margin: 0px;
		}
		#login {
			background: url(media/style/[+theme+]/images/misc/bg-pattern.png) repeat 0 0 #eee;
		}
		#mx_loginbox {
			width: 309px;
			margin-left: -155px;
			margin-top: -212px;
			position:absolute;
			top:50%;
			left:50%;
			
		}
		.sectionBody {
			border:1px solid #ddd;
			border-top: 3px solid #3697CD;
			background: #FEFEFE;
		    padding: 25px 0 0 20px;
			overflow: hidden;
		}
		.sectionHeader {
			margin: 0 0 15px;
		}
		.logo img{
			border: 0 none;
		}
		.sectionBody .text, #FMP-email {
			width: 261px;
			height: 33px;
			border: 1px solid #E5E5E5;
			text-indent: 5px;
			margin: 0 0 20px;
			font-size: 20px;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;
			transition: border-color 0.3s ease-out, box-shadow 0.3s ease-out
		}
		.sectionBody .text:focus, #FMP-email:focus {
			border: 1px solid #3697CD;
			box-shadow:         0 0 0 1px #3697CD;
			border-radius:0;
		}
		#rememberme {
			float: left;
			margin: 3px 5px 0 1px;
		}
		.sectionBody .remtext {
			color: #999999;
			display: block;
			float: left;
			font-size: 13px;
			margin: 0;
		} 
		#submitButton, #FMP-email_button {
			display: block;
			float: right;
			border: 0;
			border-radius:2px;
			padding: 8px 20px;
			cursor: pointer;
			color:#fff;
			font-size: 14px;
			font-weight: 100;
			margin:-7px 22px 10px 0;
			background:#58A598;
		}
			#submitButton:hover, #FMP-email_button {
				background:#51AD9C;
			}
		#submitButton:after {
			content:'';
			clear: both;
			display:block;
		}
		#onManagerLoginFormRender {
			clear: both;
			position:relative;
			border-top:1px solid #ddd;
			background:#f5f5f5;
			margin:30px 0 0 -20px;
			padding:20px;
			overflow:hidden;
		}
		#FMP-email_label {
			color: #666666;
			font-size: 13px;
			margin: 0 0 7px;
		}
		/*
		#FMP-email {
			width: 261px;
			height: 33px;
			border: 1px solid #E5E5E5;
			text-indent: 5px;
			margin: 0 0 10px;
			font-size: 14px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 0 0 5px rgba(188, 188, 188, 0.2);
			-moz-box-shadow:    0 0 5px rgba(188, 188, 188, 0.2);
			box-shadow:         0 0 5px rgba(188, 188, 188, 0.2);
		}
		#FMP-email:focus {
			border: 1px solid #DECBA5;
			-webkit-box-shadow: 0 0 5px rgba(222, 203, 165, 0.5);
			-moz-box-shadow:    0 0 5px rgba(222, 203, 165, 0.5);
			box-shadow:         0 0 5px rgba(222, 203, 165, 0.5);
		}
		*/
		#FMP-email_button {
			margin: 2px 0 0 0;
		}
		.loginLicense {
			width: 309px;
			margin: 0 auto;
			display: block;
		}
		.loginLicense a {
			color: #999999;
			display: block;
			font-size: 13px;
			margin: 13px 0 0 21px;
			text-decoration: underline;
		}
		#ForgotManagerPassword-show_form {
			color: #999999;
			display: block;
			font-size: 12px;
			margin: 0 0 10px;
			text-align: left;
		}
		.error {
			font-size: 13px;
			color: #f00;
		}
		.gpl {
			position: absolute;
			bottom: 0;
			right: 0;
			color: #B2B2B2;
			margin: 0.5em auto;
			font-size: 80%;
		}
        .gpl a, .loginLicense a {
			color: #B2B2B2;
		}
		/* styled inputs */
		.input {
			position: relative;
			z-index: 1;
			display: inline-block;
			margin: 0 0 1em;
			width: 265px;
			-width: calc(100% - 2em);
			vertical-align: top;
		}

		.input__field {
			position: relative;
			display: block;
			float: right;
			padding: 0.8em;
			width: 60%;
			border: none;
			border-radius: 0;
			background: #f0f0f0;
			color: #aaa;
			font-weight: 400;
			-webkit-appearance: none; /* for box shadows to show on iOS */
		}

		.input__field:focus {
			outline: none;
		}

		.input__label {
			display: inline-block;
			float: right;
			padding: 0 1em;
			width: 40%;
			color: #6a7989;
			font-weight: 400;
			font-size: 70.25%;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			-webkit-font-smoothing: antialiased;
		}

		.input__label-content {
			position: relative;
			display: block;
			padding: 1.6em 0;
			width: 100%;
		}

		.input--hoshi {
			overflow: hidden;
		}

		.input__field--hoshi {
			margin-top: 1em;
			padding: 0.85em 0.15em;
			width: 100%;
			background: transparent;
			color: #333;
		}

		.input__label--hoshi {
			position: absolute;
			bottom: 0;
			left: 0;
			padding: 0 0.25em;
			width: 100%;
			height: calc(100% - 1em);
			text-align: left;
			pointer-events: none;
			-webkit-font-smoothing: antialiased;
		}

		.input__label-content--hoshi {
			position: absolute;
		}

		.input__label--hoshi::before,
		.input__label--hoshi::after {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: calc(100% - 10px);
			border-bottom: 1px solid #B9C1CA;
		}

		.input__label--hoshi::after {
			margin-top: 2px;
			border-bottom: 3px solid red;
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0);
			-webkit-transition: -webkit-transform 0.3s;
			transition: transform 0.3s;
		}

		.input__label--hoshi-color-1::after {
			border-color: #3697CD;
		}

		.input__label--hoshi-color-2::after {
			border-color: hsl(160, 100%, 50%);
		}

		.input__label--hoshi-color-3::after {
			border-color: hsl(20, 100%, 50%);
		}

		.input__field--hoshi:focus + .input__label--hoshi::after,
		.input--filled .input__label--hoshi::after {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
		}

		.input__field--hoshi:focus + .input__label--hoshi .input__label-content--hoshi,
		.input--filled .input__label-content--hoshi {
			-webkit-animation: anim-1 0.3s forwards;
			animation: anim-1 0.3s forwards;
		}

		@-webkit-keyframes anim-1 {
			50% {
				opacity: 0;
				-webkit-transform: translate3d(1em, 0, 0);
				transform: translate3d(1em, 0, 0);
			}
			51% {
				opacity: 0;
				-webkit-transform: translate3d(-1em, -40%, 0);
				transform: translate3d(-1em, -40%, 0);
			}
			100% {
				opacity: 1;
				-webkit-transform: translate3d(0, -40%, 0);
				transform: translate3d(0, -40%, 0);
			}
		}

		@keyframes anim-1 {
			50% {
				opacity: 0;
				-webkit-transform: translate3d(1em, 0, 0);
				transform: translate3d(1em, 0, 0);
			}
			51% {
				opacity: 0;
				-webkit-transform: translate3d(-1em, -40%, 0);
				transform: translate3d(-1em, -40%, 0);
			}
			100% {
				opacity: 1;
				-webkit-transform: translate3d(0, -40%, 0);
				transform: translate3d(0, -40%, 0);
			}
		}		
    </style>

    <script src="media/script/mootools/mootools.js" type="text/javascript"></script>

    <script type="text/javascript">
    /* <![CDATA[ */
        if (top.frames.length!=0) {
            top.location=self.document.location;
        }
        
        window.addEvent('domready', function() {
            $('submitButton').addEvent('click', function(e) {
                 e = new Event(e).stop();
                 params = 'ajax=1&' + $('loginfrm').toQueryString();
                 url = 'processors/login.processor.php';
                 new Ajax(url,
                    {
                        method: 'post',
                        postBody: params,
                        onComplete:ajaxReturn
                    }
                ).request();
                $$('input').setProperty('readonly', 'readonly');
            });  
			
			// Initial focus
			if ($('username').value != '') {
				$('password').focus();
			} else {
				$('username').focus();
			}
			   
        });

        function ajaxReturn(response) {
            var header = response.substr(0,9);
            if (header.toLowerCase()=='location:') top.location = response.substr(10);
            else {
                var cimg = $('captcha_image');
                if (cimg) {
                	cimg.src = 'includes/veriword.php?rand=' + Math.random();
                }
                $$('input').removeProperty('readonly');
                alert(response);
            }
        }
    </script>
</head>
<body id="login">
<div id="mx_loginbox">
    <form method="post" name="loginfrm" id="loginfrm" action="processors/login.processor.php">
    <!-- anything to output before the login box via a plugin? -->
    [+OnManagerLoginFormPrerender+]
        <div class="sectionHeader">
			<a class="logo" href="../" title="[+site_name+]">
				<img src="media/style/[+theme+]/images/modx-logo-color.svg" alt="[+site_name+]" id="logo" />
			</a>
		</div>
        <div class="sectionBody">
            <!--<p class="loginMessage">[+login_message+]</p>-->
            <span class="input input--hoshi">
				<input name="username" id="username" tabindex="1" class="input__field input__field--hoshi" type="text"></input>
				<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="username">
					<span class="input__label-content input__label-content--hoshi">[+username+]</span>
				</label>
			</span>
          	<span class="input input--hoshi">
				<input name="password" id="password" tabindex="2" class="input__field input__field--hoshi" type="password"></input>
				<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="password">
					<span class="input__label-content input__label-content--hoshi">[+password+]</span>
				</label>
			</span>
           <!--
            <label for="username">[+username+]</label>
            <input type="text" class="text" name="username" id="username" tabindex="1" value="[+uid+]" />
            
            <label for="password">[+password+]</label>
            <input type="password" class="text" name="password" id="password" tabindex="2" value="" />
            -->
            <p class="caption">[+login_captcha_message+]</p>
            <div>[+captcha_image+]</div>
            [+captcha_input+]
            <input type="checkbox" id="rememberme" name="rememberme" tabindex="4" value="1" class="checkbox" [+remember_me+] />
			<label for="rememberme" style="cursor:pointer" class="remtext">[+remember_username+]</label>
            <input type="submit" class="login" id="submitButton" value="[+login_button+]" />
            <!-- anything to output before the login box via a plugin ... like the forgot password link? -->
            [+OnManagerLoginFormRender+]
        </div>
    </form>
</div>
<!-- close #mx_loginbox -->

<!-- convert this to a language include -->
<p class="loginLicense" >
	
</p>
<div class="gpl">&copy; 2005-2015 by the <a href="http://modx.com/" target="_blank">MODX</a>. <strong>MODX</strong>&trade; is licensed under the GPL.</div>

<script>
	var elements = document.querySelectorAll('.input__field');
	var className = 'input--filled';
	
	function onInputFocus( ev ) {
		el = ev.target.parentNode;
		if (el.classList) el.classList.add(className);
		else el.className += ' ' + className;
	}

	function onInputBlur( ev ) {
		if( ev.target.value.trim() === '' ) {
			el = ev.target.parentNode;
			if (el.classList) el.classList.remove(className);
			else el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
		}
	}

		
	Array.prototype.forEach.call(elements, function(el, i){
		// events:
		el.addEventListener( 'focus', onInputFocus );
		el.addEventListener( 'blur', onInputBlur );
		//console.log(el.value);
		if(el.value != ''){
			//addClass
			if (el.parentNode.classList)
				  el.parentNode.classList.add(className);
				else
				  el.parentNode.className += ' ' + className;
			} else {
				//removeClass
				if (el.parentNode.classList)
				  el.parentNode.classList.remove(className);
				else
				  el.parentNode.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
			}
		});

		
    /* ]]> */

</script>

</body>
</html>