<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Conqui Virtual</title>

</head>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name = "google-signin-client_id" content = "833315976802-7mgsi4hih15bcfjldiaufot6v7rldtp5.apps.googleusercontent.com">
<div class="g-signin2" data-onsuccess="onSignIn" onclick="location.href='principal.php'"></div>



<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });

    function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
$app->register(new SessionServiceProvider);
// fall back on PHP's "session.save_handler" for session storage
$app['session.storage.handler'] = null;
$app['user'] = function ($app) {
    /** @var Symfony\Component\HttpFoundation\Session\Session $session */
    $session = $app['session'];

    return $session->has('user') ? $session->get('user') : null;
};
$app['google_client'] = function ($app) {
    /** @var Symfony\Component\Routing\Generator\UrlGenerator $urlGen */
    $urlGen = $app['url_generator'];
    $redirectUri = $urlGen->generate('login_callback', [], $urlGen::ABSOLUTE_URL);
    return new Google_Client([
        'client_id'     => $app['config']['google_client_id'],
        'client_secret' => $app['config']['google_client_secret'],
        'redirect_uri'  => $redirectUri,
    ]);
};
$app->get('/login', function () use ($app) {
    /** @var Google_Client $client */
    $client = $app['google_client'];

    $scopes = [ \Google_Service_Oauth2::USERINFO_PROFILE ];
    $authUrl = $client->createAuthUrl($scopes);

    return $app->redirect($authUrl);
})->bind('login');
{% if app.user %}
  {% if app.user.picture %}
    <img src="{{ app.user.picture }}" class="img-circle" width="24" alt="Photo" />
  {% endif %}
  <span>
    {{ app.user.name }} &nbsp;
    <a href="/logout">(logout)</a>
  </span>
{% else %}
  <a href="/login">Login</a>
{% endif %}
  }

</script>
</html>
<STYLE TYPE="text/css" MEDIA=screen>
<!--
  
  P EM  { background: yellow; color: white }
  .nota { margin-left: 500em; margin-right: 500em }
    


 body{
    margin: 0px;
    
}

script{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
    position: center;
    bottom:30px;
    left: 500px;

    
  }

  .btn-danger{
  display: block !important;
}

.menu-main{
    display: flex;
    justify-content: space-between;
    background: #3b5998;
    border-bottom: 1px solid #29487d;
    height: 45px;
}

.menu-main div a{
    flex: 1;
    font-family: arial;
    display: flex;
    color: #ffffff;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;    
    justify-content: center;
    align-items: center;
}

.menu-main a:hover{
    background: rgba(0,0,0, .1);
}

.menu-main a.active{
    background-color: #29487d;
}

@media (max-width: 768px) {
    
    .menu-main{
        height: auto;
        border-bottom: 0px;
        display: block;
    }
    
    .menu-main a{
        height: 45px;
        border-bottom: 1px solid #29487d;
    }
    
@media screen and (max-width:640px) {
  /* reglas CSS */
}
@media screen and (max-width:1024px) and (min-width:640px) {
  /* reglas CSS */
}

 @media screen and (*condición*) {
  /* reglas CSS */
  /* reglas CSS */
}
}
        
-->
</STYLE>