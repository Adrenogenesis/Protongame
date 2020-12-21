<!DOCTYPE html>
<html>
  <head>
    <title>Protongame reload</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Jeux gratuit - ProtonGame" >
  <meta name="keywords" content="Jeux gratuit - ProtonGame"/>
    <meta name="referrer" content="always" />
    <meta name='robots' content='noodp'/>
    <link rel="canonical" href="https://fredericbrodar.com/" />
    <meta name="geo.region" content="Centre-Val de Loire" />
    <meta name="geo.position" content="47.1851005554,2.61315989494" />
    <meta name="geo.placename" content="Protonwebmaster" />   
    <META NAME="DC.Title" CONTENT="Jeux gratuit - ProtonGame">
    <META NAME="DC.Description" CONTENT="Jeux gratuit - ProtonGame">
    <META NAME="DC.Date" CONTENT="2020">
    <META NAME="DC.Type" CONTENT="image">
    <META NAME="DC.Format" CONTENT="text/html">
    <META NAME="DC.Identifier" CONTENT="https://fredericbrodar.com/"> 
    <META NAME="DC.Source" CONTENT="Codepen">
    <META NAME="DC.Language" CONTENT="fr">
    <META NAME="DC.Rights" CONTENT="Copyright">
    <META NAME="DC.Creator" CONTENT="Brodar, Frédéric">
    <META NAME="DC.Publisher" CONTENT="Brodar, Frédéric">
    <META NAME="DC.Contributor" CONTENT="Brodar, Frédéric">
    <meta name="author" content="Protonwebmaster - webmaster freelance">
    <meta name="publisher" content="BRODAR">
    <link rel="image_src" href="https://fredericbrodar.com/assets/img/logo-protonwebmaster.jpg">
    <meta name="language" content="fr" >
    <meta name="distribution" content="global" >
    <meta name="expires" content="never">
    <meta name="Robots" content="index, follow">
    <link rel="author" href="protonwebmaster.info@gmail.com">
    <meta name="copyright" content="PROTONWEBMASTER-2020">
    <meta property="og:locale" content="fr_FR" />
      <meta property="og:title" content="Jeux gratuit - ProtonGame">
      <meta property="og:description" content="Jeux gratuit - ProtonGame"/>
      <meta property="og:url" content="https://fredericbrodar.com/">
      <meta property="og:site_name" content="Protonwebmaster" />
      <meta property="og:type" content="website" />
      <meta property="article:publisher" content="https://www.facebook.com/protonwebmaster/" />
      <meta property="og:image" content="https://fredericbrodar.com/assets/img/logo-protonwebmaster.jpg">
      <meta property="fb:app_id" content="330944807970336"/>
      <meta property="og:see_also" content="https://twitter.com/@protonwebmaster" />
      <meta property="og:see_also" content="https://www.facebook.com/protonwebmaster" />
      <meta property="og:see_also" content="https://fr.linkedin.com/in/brodarfrederic" />
      <meta property="og:see_also" content="https://github.com/protonwebmaster" />
      <meta property="og:see_also" content="https://protonwebmaster.business.site/" />
      <meta property="og:see_also" content="https://www.tidio.com/talk/a4awdc1i2s8kzk0u1horagmyqfznx9v5" />
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@protonwebmaster">
      <meta name="twitter:title" content="freelance developpeur web - créer son site internet - Frédéric Brodar">
      <meta name="twitter:description" content="freelance developpeur web, créer son site internet, création site internet, developpeur freelance, site e commerce, solution e commerce">
      <meta name="twitter:creator" content="@protonwebmaster">
      <meta name="twitter:image:src" content="https://fredericbrodar.com/assets/img/logo-protonwebmaster.jpg">
      <meta name="twitter:domain" content="https://www.protonwebmaster.com/">
      <meta name="twitter:image" content="https://fredericbrodar.com/assets/img/logo-protonwebmaster.jpg">
      <meta name="twitter:url" content="https://twitter.com/protonwebmaster" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="prerender-status-code" content="404">
      <meta name="prerender-header" content="Location: https://fredericbrodar.com/protongame/reloadgame.php">
  <!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
<link rel="dns-prefetch" href="//fredericbrodar.com">
<link rel="dns-prefetch" href="//www.google.com">
<link rel="dns-prefetch" href="//cdn.jsdelivr.net">
 <link rel="stylesheet" type="text/css" href="css/magic.css" />   
 <script src="https://cdn.jsdelivr.net/npm/magic-sdk/dist/magic.js"></script>
   <script>   
      let magic = new Magic("pk_live_xxxxxxxxxxxxxxxx");     
      const render = async () => {
        const isLoggedIn = await magic.user.isLoggedIn();
        /* Show login form if user is not logged in */
        let html = `
            <h1>Connexion sans mot de passe sécurisée</h1>
            <h2>Rejouez une partie !</h2>
            <p>Un lien de validation vous est envoyé par mail, revenez sur votre page, et c'est tout.</p>         
            <form onsubmit="handleLogin(event)">
            <input type="email" name="email" required="required" placeholder="Entrez votre email" />
            <button type="submit">Envoyé</button>
            </form>
        `;

        if (isLoggedIn) {
          /* Get user metadata including email */
          const userMetadata = await magic.user.getMetadata();
          html = `
            <h1>Current user: ${userMetadata.email}</h1>           
            <button onclick="handleLogout()">Rejouer</button>           
          `;
        }
        document.getElementById("app").innerHTML = html;
      };
     
      const handleLogin = async (e) => {
        e.preventDefault();
        const email = new FormData(e.target).get("email");
        if (email) {       
          await magic.auth.loginWithMagicLink({ email });
          render();
        }
      };
    
      const handleLogout = async () => {
        await magic.user.logout();
        window.location="https://fredericbrodar.com/protongame/delxxxxxxxxxxxxxxxx.php";
        render();
      };     
    </script>
    <script>
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on","addSourceMiddleware","addIntegrationMiddleware","setAnonymousId","addDestinationMiddleware"];analytics.factory=function(e){return function(){var t=Array.prototype.slice.call(arguments);t.unshift(e);analytics.push(t);return analytics}};for(var e=0;e<analytics.methods.length;e++){var key=analytics.methods[e];analytics[key]=analytics.factory(key)}analytics.load=function(key,e){var t=document.createElement("script");t.type="text/javascript";t.async=!0;t.src="https://cdn.segment.com/analytics.js/v1/" + key + "/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.13.1";
  analytics.load("xxxxxxxxxxxxxxxxxxxxxxxxx");
  analytics.page();
  }}();
</script>
  </head>
  <body onload="render()">
    <div id="app">
      Connexion...
    </div>
  </body>
</html>
