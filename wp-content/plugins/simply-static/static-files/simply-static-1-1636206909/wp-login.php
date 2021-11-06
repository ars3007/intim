<!DOCTYPE html>
<html lang="ru-RU">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Войти &lsaquo; intim &#8212; WordPress</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="stylesheet" id="dashicons-css" href="https://intim.tk/wp-includes/css/dashicons.min.css?ver=5.8.1" type="text/css" media="all">
<link rel="stylesheet" id="buttons-css" href="https://intim.tk/wp-includes/css/buttons.min.css?ver=5.8.1" type="text/css" media="all">
<link rel="stylesheet" id="forms-css" href="https://intim.tk/wp-admin/css/forms.min.css?ver=5.8.1" type="text/css" media="all">
<link rel="stylesheet" id="l10n-css" href="https://intim.tk/wp-admin/css/l10n.min.css?ver=5.8.1" type="text/css" media="all">
<link rel="stylesheet" id="login-css" href="https://intim.tk/wp-admin/css/login.min.css?ver=5.8.1" type="text/css" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-ru-ru">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://ru.wordpress.org/">Сайт работает на WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="https://intim.tk/wp-login.php" method="post">
			<p>
				<label for="user_login">Имя пользователя или email</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Пароль</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Показать пароль">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Запомнить меня</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Войти">
									<input type="hidden" name="redirect_to" value="https://intim.tk/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
								<a href="https://intim.tk/wp-login.php?action=lostpassword">Забыли пароль?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog">
			<a href="https://intim.tk/">&larr; Перейти к intim</a>		</p>
			</div>
	<script type="text/javascript" src="https://intim.tk/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script type="text/javascript" src="https://intim.tk/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script type="text/javascript" id="zxcvbn-async-js-extra">
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/intim.tk\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type="text/javascript" src="https://intim.tk/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script type="text/javascript" src="https://intim.tk/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="https://intim.tk/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" src="https://intim.tk/wp-includes/js/dist/hooks.min.js?ver=a7edae857aab69d69fa10d5aef23a5de" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://intim.tk/wp-includes/js/dist/i18n.min.js?ver=5f1269854226b4dd90450db411a12b79" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script type="text/javascript" id="password-strength-meter-js-extra">
/* <![CDATA[ */
var pwsL10n = {"unknown":"Надёжность пароля неизвестна","short":"Очень слабый","bad":"Слабый","good":"Средний","strong":"Надёжный","mismatch":"Несовпадение"};
/* ]]> */
</script>
<script type="text/javascript" id="password-strength-meter-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2021-07-30 14:32:45+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=3; plural=(n % 10 == 1 && n % 100 != 11) ? 0 : ((n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14)) ? 1 : 2);","lang":"ru"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s устарела с версии %2$s! Вместо неё используйте %3$s. Пожалуйста, рассмотрите возможность написания более инклюзивного кода."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
</script>
<script type="text/javascript" src="https://intim.tk/wp-admin/js/password-strength-meter.min.js?ver=5.8.1" id="password-strength-meter-js"></script>
<script type="text/javascript" src="https://intim.tk/wp-includes/js/underscore.min.js?ver=1.13.1" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/intim\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://intim.tk/wp-includes/js/wp-util.min.js?ver=5.8.1" id="wp-util-js"></script>
<script type="text/javascript" id="user-profile-js-extra">
/* <![CDATA[ */
var userProfileL10n = {"user_id":"0","nonce":"644d94e2bd"};
/* ]]> */
</script>
<script type="text/javascript" id="user-profile-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2021-07-30 14:32:45+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=3; plural=(n % 10 == 1 && n % 100 != 11) ? 0 : ((n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14)) ? 1 : 2);","lang":"ru"},"Your new password has not been saved.":["Ваш новый пароль не был сохранён."],"Hide":["Скрыть"],"Show":["Показать"],"Confirm use of weak password":["Разрешить использование слабого пароля."],"Hide password":["Скрыть пароль"],"Show password":["Показать пароль"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
</script>
<script type="text/javascript" src="https://intim.tk/wp-admin/js/user-profile.min.js?ver=5.8.1" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>