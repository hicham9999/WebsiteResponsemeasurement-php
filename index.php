<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="shortcut icon" type="image/png" href="favicon.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>SpeedEx | Website Speed and Performance Optimization</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <meta name="description" content="GTmetrix is a free tool that analyzes your page&#039;s speed performance.  Using PageSpeed and YSlow, GTmetrix generates scores for your pages and offers actionable recommendations on how to fix them.">
      <link rel="alternate" type="application/rss+xml" href="/news.xml" title="Latest GTmetrix News">
      <link rel="stylesheet" href="style.css">
  </head>

  <body class="page-home">
    <div class="page-wrapper">
      <noscript>
        <div class="no-script-info">
          <div class="box box-info">
          </div>
        </div>
      </noscript>
      <header class="header">
        <div class="header-content clear">
          <nav>
            <ul class="site-nav clear">
              <li class="site-nav-home"><a href="/"><i class="sprite-gtmetrix sprite-display-block"></i></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
            </ul>
          </nav>
          <ul class="user-nav clear">
            <li class="user-nav-login" id="user-nav-login"><a href="#" class="js-auth-widget-link" rel="login">Log In</a></li>
            <li class="user-nav-signup" id="user-nav-signup"><a href="#" class="js-auth-widget-link btn" rel="signup">Sign Up</a></li>
          </ul>
          <a href="#" class="site-nav-menu"><i class="sprite-menu sprite-display-block"></i></a>
        </div>
      </header>

      <main class="clear page-home-content layout-zebra">
      <section class="layout-zebra-section home-section-analyze">
        <div class="layout-zebra-section-content">
          <h1>How fast does a website respond?<br>Find out with SpeedEx</h1>
          <h2>See how a Website performs, reveal why it's slow and discover optimization opportunities.</h2>

        <form action="https://ybenjaa.me/aza/index.php" method="POST">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Votre site</span>
            </div>
            <input type="text" value="<?php echo $_POST["url"]; ?>" name="url" class="form-control" placeholder="URL du site à tester">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Intervalle d'interrogation</span>
            </div>
            <input type="text" name="time"  value="<?php if($_POST["time"]){ echo $_POST["time"]; }else{ echo "1";
          }?>" class="form-control" placeholder="intervalle d'interrogation en seconde">
          </div>
          <input type="submit" class="btn btn-primary" style="width: 60%;font-size: 25px;" value="Testez votre site Web">

            <?php
            
              $ch = curl_init($_POST['url']);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
              if(curl_exec($ch))
              {
              $info = curl_getinfo($ch);
              if($info['total_time']<$_POST["time"]){
              echo '<H3 class="badge-success" style="font-size: 29px;color: #ffffff;padding: 10Px;border-radius: 10px;margin-right: auto;margin-left: auto;width: 50%;">Took ' . $info['total_time'] . 'ms</H3>';
              }else{
                  echo '<H3 class="badge-danger" style="font-size: 29px;color: #ffffff;padding: 10Px;border-radius: 10px;margin-right: auto;margin-left: auto;width: 50%;">Took ' . $info['total_time'] . 'ms , Longer than the time you\'ve specified!</H3>';
              }
              
              
              }
            
              curl_close($ch);
            ?>
        </form>
      </section>

      </div>

      <script src="/static/r245/js/gtmetrix.min.js"></script>
  </body>
</html>

            