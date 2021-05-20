<?php

	$errors = array();

	// Check if name has been entered
	if (!isset($_POST['name'])) {
		$errors['name'] = 'お名前をご記入ください。';
	}

	// Check if email has been entered and is valid
	if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'メールアドレスを入力してください。';
	}
	// Check if phone has been entered
	// if (!isset($_POST['phone'])) {
	// $errors['phone'] = '電話番号を入力してください。';
	// }
	// Check if addr has been entered
	// if (!isset($_POST['addr'])) {
	// 	$errors['addr'] = '住所を入力してください。';
	// 	}
	//Check if message has been entered
	if (!isset($_POST['message'])) {
		$errors['message'] = 'お問い合わせ内容をご記入ください。';
	}

	$errorOutput = '';

	if(!empty($errors)){

		$errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
 		$errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

		$errorOutput  .= '<ul>';

		foreach ($errors as $key => $value) {
			$errorOutput .= '<li>'.$value.'</li>';
		}

		$errorOutput .= '</ul>';
		$errorOutput .= '</div>';

		echo $errorOutput;
		die();
	}



	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	$addr = $_POST['addr'];
	$from = $email;
	$to = 'okagawa1981@gmail.com';  // please change this email id
	$subject = 'Contact Form : mazStayホームページよりお問い合わせ';

	$body = "From: $name\n E-Mail: $email\n PhoneNo: $phone\n  Address: $addr\n Message:\n $message";

	$headers = "From: ".$from;


	//send the email
	$result = '';
	if (mail ($to, $subject, $body, $headers)) {
		// $result .= '<div class="alert alert-success alert-dismissible" role="alert">';
 		// $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		$result .= 'ありがとうございます!<br><br>確認しだい、<br>ご連絡致します。';
		// $result .= '</div>';

		// echo $result;
		// die();
	} else {

	// $result = '';
	// $result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
	// $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
	$result .= 'メッセージの送信中に<br>何か問題が発生しました。<br>後でもう一度やり直してください。';
	// $result .= '</div>';

	// echo $result;
	}
?>
<!doctype html>
<html lang="ja">
  <head>
    <title>mazStay[まずステイ]|移住と地方を元気にするプロジェクト</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKHX7RS');</script>
<!-- End Google Tag Manager -->
    
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP|Roboto|Spinnaker&display=swap" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKHX7RS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  
    <div class="site-wrap">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
    
    
      <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center">
            
            <div class="col-6 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0" style="font-family: 'Roboto', sans-serif;">mazStay</a></h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li><a href="index.html#home-section" class="nav-link">Home</a></li>
                  <li class="has-children">
                    <a href="index.html#about-section" class="nav-link">About Us</a>
                    <ul class="dropdown">
                      <li><a href="rinen.html">Philosophy</a></li>
                      <li><a href="sympathy.html">Sympathy</a></li>
                      <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </li>
                  <li><a href="index.html#story-section" class="nav-link">Story</a></li>
                  <li><a href="index.html#services-section" class="nav-link">Our Services</a></li>
                  <li><a href="index.html#domain-section" class="nav-link">Domain</a></li>
                  <li><a href="index.html#blog-section" class="nav-link">Latest Infomation</a></li>
                  <li><a href="index.html#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>      
      </header>

  

      <!-- トップ画面 -->
      <div class="site-blocks-cover overlay" style="background-image: url(images/form-back.jpg);" data-aos="fade">
        <div class="container">
          <div class="row align-items-center justify-content-center">            
            <div class="col-md-9 mt-lg-5 text-center">
              <h3 style="color:yellow; text-size:3rem;"><?php echo $result;?></h3>
            <p class="post-meta"><a href="index.html">mazStay-project</a><br>started in 2020</p>
            </div>
          </div>
        </div>
      </div>  

      <!-- フッター -->

      <footer class="site-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-3">
                    <h2 class="footer-heading mb-4">About Us</h2>
                    <ul class="list-unstyled">
                      <li><a href="rinen.html" class="smoothscroll"><span class="icon-navigate_next d-block">Philosophy</span></a></li>
                      <li><a href="sympathy.html" class="smoothscroll"><span class="icon-navigate_next d-block">Sympathy</span></a></li>
                      <li><a href="privacy-policy.html" class="smoothscroll"><span class="icon-navigate_next d-block">Privacy Policy</span></a></li>
                    </ul><br>
                  </div>
                  <div class="col-md-2">
                    <h2 class="footer-heading mb-4">Quick Links</h2>
                    <ul class="list-unstyled">
                      <li><a href="#story-section" class="smoothscroll"><span class="icon-navigate_next d-block">Story</span></a></li>
                      <li><a href="#services-section" class="smoothscroll"><span class="icon-navigate_next d-block">Services</span></a></li>
                      <li><a href="#domain-section" class="smoothscroll"><span class="icon-navigate_next d-block">Domain</span></a></li>
                    </ul><br>
                  </div>
                  <div class="col-md-2 mb-4 mr-4">
                    <h2 class="footer-heading mb-4">Follow Us</h2>
                    <a href="#" class="pl-0 pr-2"><span class="icon-facebook" style="font-size:1.7rem"></span></a>
                    <a href="#" class="pl-2 pr-2"><span class="icon-twitter" style="font-size:1.7rem"></span></a>
                    <a href="https://www.instagram.com/show_goon/" target="_blank" class="pl-2 pr-2"><span class="icon-instagram" style="font-size:1.7rem"></span></a>
                    <br>
                  </div>
                  <div class="col-md-4"  style="border-left: white solid 1px; margin-left:1rem;">
                    <h5>I-FAM Co.,Ltd.</h5>
                    <h5>mazStay-project</h5>
                    <p>#509 (Sobashima Noritake Bldg) 1-10-6<br>
                    Noritake Nakamura(-ku) Nagoya City<br>
                    453-0014 Japan</p> 
                    <p>Tel:052-462-1930</p>               
                </div>
              </div>
            </div>
            <div class="col-md-12  pt-5 mt-5 border-top">
                    <p class="text-center">Copyright &copy; mazStay-project <script>document.write(new Date().getFullYear());</script><br> All rights reserved | <br>This template is made with by <a href="https://colorlib.com" target="_blank" >Colorlib</a></p>
            </div>
          </div>
      </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>

  
    
  </body>
</html>
