<?php
function reconstruct_url($url){
    $url_parts = parse_url($url);
    $constructed_url = $url_parts['scheme'] . '://' . $url_parts['host'] . (isset($url_parts['path'])?$url_parts['path']:'');
    return rtrim($constructed_url,'/');
}
    $url = reconstruct_url((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]").'/assets-publishers-consultancy';
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets-publishers-consultancy/images/favicon.png" type="image/png">
    <link rel="stylesheet" media="all" href="assets-publishers-consultancy/css/css-all.css">
    <link rel="stylesheet" media="all" type="text/css" href="assets-publishers-consultancy/css/css-style.css">
    <link rel="stylesheet" media="all" type="text/css" href="assets-publishers-consultancy/css/css-style-web.css">
    <link rel="stylesheet" media="all" type="text/css" href="assets-publishers-consultancy/css/css-responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link media="all" href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link media="all" href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <title>Amz Publication Experts | Hassle-free Book Publication Services NOW at ONLY 70% OFF</title>

<script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.defer = true;
    mf.src = "//cdn.mouseflow.com/projects/aaa41c19-b31e-4ac0-a79c-e02850dd3454.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6WPLBB');</script>
<!-- End Google Tag Manager -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11129540773"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11129540773');
</script>

</head> 
<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6WPLBB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--<a href="tel:+18889180661" class="callusnow">READY? CLICK TO CALL</a>-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="https://amazonpublicationexperts.com" class="logo">
                    <img alt="websiteimg" src="assets-publishers-consultancy/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-md-9">
                <nav class="navbar-expand-md main-menu">
                    <ul class="menu">
                        <li class="phone">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+18889180661">(888) 918-0661</a>
                        </li>
                        <li class="msg">
                            <a href="javascript:void(0)" name="0" data-fancybox="" data-src="#popupform" class="btn btn-dark chat various">
                            Get Started
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<section class="our-banner">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-7">
                <div class="info-banner">

                    <h1><span>Transform Your Writing Into a</span>
                       Published Masterpiece By<br> 
                        <strong> Amazon Publication Services</strong>
                    </h1>
                        <ul>
                        <li>Error free</li>
                        <li>Expand Your Market</li>
                        <li>Professional Publishers</li>
                        <li>Years of Experience</li>

                        </ul>
                    
                    <div class="btn-block">
                        <a href="javascript:void(0)" class="btn btn-light chat">
                            Live Chat
                        </a>
                        <a href="javascript:void(0)" name="0" data-fancybox="" data-src="#popupform" class="btn btn-dark chat various">
                            Get Started
                        </a>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="info-contact-banner">
                    <div class="head-cb">
                        <h6>Do You Have a Manuscript Ready?</h6>
                        <h4>
                          PUBLISH YOUR BOOK 
                            <!-- <strong>---For As Low As $399---</strong> -->
                        </h4>
                        <div class="seal">
                            <img alt="websiteimg" src="assets-publishers-consultancy/images/images-form-seal.png" alt="">
                        </div>
                    </div>
                    <div class="info-form">
                        <form id="formlppublishing1" action="sendmail.php" method="post" class="validate-banner">
                            <input type="hidden" id="" name="url" value="<?= $url ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="required form-control" required name="name" placeholder="Full Name">
                                    <div class="input-number-inline">
                                        <select required class="form-control" name="phone_code">
                                            <option selected value="+1">+1</option>
                                            <option value="+44">+44</option>
                                        </select>
                                        <input type="tel" class="required form-control  number ftpn" required minlength="10" maxlength="14" name="phone" placeholder="Phone No">
                                    </div>
                                    <input type="email" class="required form-control email" required name="email" placeholder="Email Address">
                                    <textarea autocomplete="nope" name="message" class="required form-control" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="btnsub show-s">
                                        <button type="submit" class="btn btn-dark">Submit</button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-btm">
        <div class="container">
            <h5>KEEP ALL THE RIGHTS &amp; REVENUES OF YOUR BOOK. GET PUBLISHED TODAY!</h5>
        </div>
    </div>
</section>
<section class="our-allow">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-3">
                <h2>We Publish <br>
                    Your Book <br>
                    On All Leading <br>
                    Platforms!
                </h2>
            </div>
            <div class="col-md-9">
                <img alt="websiteimg" src="assets-publishers-consultancy/images/images-our-allow.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="our-publishing">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-center zila">
            Make Your Mark On The Literary World<br>
With Our <br>Ebook Publishing Experts
        </h2>
        <div class="row">
            <div class="col-md-7">
                <div class="txt">
                    <ul>
                        <li><img alt="websiteimg" src="assets-publishers-consultancy/images/images-our-pub-ul.png" alt="">We provide best book publication services.</li>
                        <li><img alt="websiteimg" src="assets-publishers-consultancy/images/images-our-pub-ul.png" alt="">We have a team of experts who are professionals in providing amazon publishing services.</li>
                        <li><img alt="websiteimg" src="assets-publishers-consultancy/images/images-our-pub-ul.png" alt="">We are among the best self publishing companies who are experts in book advertising, book editing and book promotion services.</li>
                        <li><img alt="websiteimg" src="assets-publishers-consultancy/images/images-our-pub-ul.png" alt="">Our team help you out in proofreading as well.</li>
                        <!--<li><img alt="websiteimg" src="assets-publishers-consultancy/images/images-our-pub-ul.png" alt="">Having accounts across all platforms allows for marketplace integration.</li>-->
                        <!--<li><img alt="websiteimg" src="assets-publishers-consultancy/images/images-our-pub-ul.png" alt="">Anyone new to the ghostwriting business receives a free setup.</li>-->
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <p>Our team of publishing experts is dedicated to helping you achieve your goals. We're committed to providing personalized support and guidance throughout the entire publishing process. We understand that each author is unique, that is why we offer best book publishing services to fit your specific needs and goals.</p>
                <p>Whether you're an experienced writer or a first-time author, we're here to help you publish your ebook and share your story with the world. Our mission is to empower authors and make amazon book printing accessible to everyone. So why wait? Sign up today and start your ebook publishing journey with us.</p>
                <div class="btn-block">
                    <a href="javascript:void(0)" class="btn btn-light chat">
                        Live Chat
                    </a>
                    <a href="javascript:void(0)" name="0" data-fancybox="" data-src="#popupform" class="btn btn-dark chat various">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-author">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-7">
                <h2 class="zila">
                    Get Your Book Published By <br>Amz Publication Experts Without Having<br> To Worry About Upfront Costs
                </h2>
                <p>You won't have to worry about formatting, book editing, or marketing your book anymore. All of those are included in our amazon publishing services.</p>
                <div class="seal">
                            <img alt="websiteimg" src="assets-publishers-consultancy/images/images-form-seal.png" alt="">
                        </div>
                <div class="btn-block">
                    <a href="javascript:void(0)" class="btn btn-light chat">
                        Live Chat
                    </a>
                    <a href="javascript:void(0)" name="0" data-fancybox="" data-src="#popupform" class="btn btn-dark chat various">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-process">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-center zila">
          Amz Publication Experts Publishing Process
        </h2>
        <h3>In our Amazon Publication Services you can successfully publish and promote your ebook to a wide audience. Publishing an ebook takes time and effort, but with persistence, your book can reach readers all around the world.</h3>
        <div class="owl-process owl-carousel owl-theme">
            <div class="item">
                <div class="process">
                   <h5>step 01</h5>
                    <h4>Edit Your Ebook </h4>
                    <p>Write and edit it thoroughly to ensure it is free of errors and flows well.</p>
                </div>
            </div>
            <div class="item">
                <div class="process">
                    <h5>step 02</h5>
                    <h4>Format Your Ebook</h4>
                    <p>Properly format your ebook, including headings, images and other media. We use different software to help with formatting.</p>
                </div>
            </div>
            <div class="item">
                <div class="process">
                    <h5>step 03</h5>
                    <h4>Choose a Self-Publishing Platform</h4>
                    <p>Select a self-publishing platform, such as Amazon and sign up for an account. Upload your formatted ebook to the platform.</p>
                </div>
            </div>
            <div class="item">
                <div class="process">
                    <h5>step 04</h5>
                    <h4>Publish & Promote Your Ebook </h4>
                    <p>Set your price, publish your ebook and promote it through social media, email marketing, book reviews and other advertising methods.</p>
                </div>
            </div>
        
        </div>
    </div>
</section>
<section class="our-amazon">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="zila">Getting a Book Published Has Never Been This Easy</h2>
        <h3>Let us take away the hassle away and publish your book.</h3>
        <div class="btn-block">
            <a href="javascript:void(0)" class="btn btn-light chat">
                Live Chat
            </a>
            <a href="javascript:void(0)" name="0" data-fancybox="" data-src="#popupform" class="btn btn-dark chat various">
                Get Started
            </a>
        </div>
        <a class="tel" href="tel:+18889180661">
            <img alt="websiteimg" src="assets-publishers-consultancy/images/images-amazon-tel.png" alt="">
            +888-918-0661
        </a>
    </div>
</section>
<section class="our-testimonial">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="zila">
            REVIEWS FROM OUR CLIENTS <br>
            See what our clients have to say about us!
        </h2>
        <div class="owl-testimonial owl-carousel owl-theme">
            <div class="item">
                <div class="info-testi">
                    <p>“I’ve had several of my books ghostwritten, edited, formatted, designed, and published through Amz Publication Experts! They’ve taken my dreams of becoming a writer by profession and made it a reality and now all I have to do is come up with new book ideas.”</p>
                    <h4>Arnold Moss</h4>
                </div>
            </div>
            <div class="item">
                <div class="info-testi">
                    <p>“As a writer who writes a lot of books every month, I never have the time to edit my book let alone go after publishing agencies to notice my manuscript. Amz Publication Experts has taken a load off my back with their editing and publishing services!”</p>
                    <h4>Lindsey Page</h4>
                </div>
            </div>
            <div class="item">
                <div class="info-testi">
                    <p>“It’s not easy keeping up with readers’ demands for sequels to a book series you start. That’s why I outsource some of my writing projects to Amz Publication Experts! Their team is excellent with both the writing and the editing and they publish my work for me too!”</p>
                    <h4>Gabriel Watts</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-counter">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-8 offset-4">
                <div class="row">
                    <div class="col-md-3">
                        <h6>1000</h6>
                        <p>published books <br> (in print)</p>
                    </div>
                    <div class="col-md-3">
                        <h6>#1
                            </h6>
                        <p>times NYT <br> Bestsellers</p>
                    </div>
                    <div class="col-md-3">
                        <h6>15+</h6>
                        <p>bestsellers</p>
                    </div>
                    <div class="col-md-3">
                        <h6>BCC</h6>
                        <p>Featured Best <br> Ghostwriting Agency</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Contact us today to <br>
                    receive a free <br>
                    consultation
                </h2>
                <h3>Speak with our consultant now.</h3>
                <p>Feel free to reach out to us today to receive a free consultation from our experts. We will answer all your questions and help you get started on your journey to become a fully published author! We’re available 24/7.</p>
                <a href="javascript:void(0)" class="btn speak-btn chat">Live Chat</a>
                <a class="tel" href="tel:+18889180661">
                        <img alt="websiteimg" src="assets-publishers-consultancy/images/images-amazon-tel.png" alt="">
                        +888-918-0661
                 </a>
            </div>
            <div class="col-md-6">
                <div class="info-contact">
                    <h4>
                        Get in touch
                    </h4>
                    <p>Use the form below to contact us regarding your ghostwriting concerns. Please be as detailed as possible. You may also email or call us for more information.</p>
                         <div class="seal">
                            <img alt="websiteimg" src="assets-publishers-consultancy/images/images-form-seal.png" alt="">
                        </div>
                    <div class="info-form">
                        <form id="formlppublishing2" action="sendmail.php" class="app_contact_form" method="post" novalidate="novalidate">
                            <input type="hidden" id="" name="url" value="<?= $url ?>">
                            <div class="row">
                                <div class="col-md-7">
                                    <input type="text" name="name"  placeholder="Name" class="required form-control" required="" aria-required="true">
                                    <div class="input-number-inline">
                                    <select required="" class="form-control pr-0" name="phone_code" aria-required="true">
                                        <option selected value="+1">+1</option>
                                        <option value="+44">+44</option>
                                    </select>
                                    <input type="tel" class="required form-control ftpn" required="" name="phone" minlength="10" maxlength="14" placeholder="Your Phone" aria-required="true">
                                    </div>
                                    <input type="text" name="email"  placeholder="Email Address" class="required email form-control" required="" aria-required="true">
                                </div>
                                <div class="col-md-5">
                                    <textarea name="message" class="required form-control" placeholder="To help us understand better, enter a brief description about your project." aria-required="true"></textarea>
                                </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-red " value="Submit Your Request">

                              </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="copy">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p> Copyright © 2023 - Amz Publication Experts. All Rights Reserved</p>
            </div>
         
        </div>
    </div>
</section>
<div style="display: none;" class="popupform" id="popupform">
    <div class="modal-body">
        <div class="popup-content">
            <h2>We are here to help!</h2>
            <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
            <form id="formlppublishing3" action="sendmail.php" method="post" class="validate-popupform">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="required form-control" required name="name" placeholder="Your Name">
                        <input type="email" class="required form-control" required name="email" placeholder="Your Email">
                        <div class="input-number-inline">
                        <select required="" class="form-control valid" name="phone_code" >
                            <option selected="" value="+1">+1</option>
                            <option value="+44">+44</option>
                        </select>
                        <input type="tel" class="required form-control ftpn" required name="phone" minlength="10" maxlength="14" placeholder="Your Phone">
                        </div>
                        <textarea autocomplete="nope" name="message" class="required form-control" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                        <input type="hidden" id="" name="url" value="<?= $url ?>">
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-black" name="send_data" value="Submit Now">
                    </div>
                </div>
            </form>

               <a href="tel:+18889180661" class="bybtn">READY? CLICK TO CALL</a>
        </div>
    </div>
</div>

<div class="floatbutton">
  <div class="btns_wrap">

    <a href="javascript:;" class="chat_wrap chatt" onclick="setButtonURL();">
      <span class="icoo"><i class="fa fa-comment"></i></span>
      <span>Chat With Us</span>
    </a>
    <a href="tel:+18889180661" class="call_wrap">
      <span class="icoo"><i class="fa fa-phone"></i></span>
      <span> +1-888-918-0661 </span>
    </a>
  </div>


  <div class="clickbutton"><div class="crossplus">50% Off On All Services</div></div>
  <div class="banner-form">
    <h3>Chat With Us to <br>Avail 50% Discount</h3>
    <div class="banform">
      <div class="container">
        <div class="row">
          <div class="ban-form">
            <form data-noinfo="true" data-customcallback="querycallback" class="CrudForm cmxform" id="formlppublishing4" method="POST" action="sendmail.php">
            <input type="hidden" required="" name="page_url" value="assets-publishers-consultancy"> 
            <div class="alert alert-danger error" style="display: none;"></div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="fldset">
                    <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name" required="">
                 
                </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                    <input id="cemail" type="email" name="email" placeholder="Enter email here" required="">
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="fldset input-number-inline right-form-phone">
                    <select required="" class="form-control valid" name="phone_code">
                        <option selected="" value="+1">+1</option>
                        <option value="+44">+44</option>
                    </select>
                    <input id="cphone" type="tel" minlength="10" maxlength="14" name="phone" placeholder="Enter phone here" required="">
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="fldset">
                    <textarea name="message" id="" rows="7" placeholder="Talk About Your Project" required></textarea>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="fldset">
                    <input name="submit" type="submit" placeholder="Connect With Us" required="">                    
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>



<!-- POPUP FORM START -->

<!-- Modal -->
<div class="am-new">

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="top-close-bt">
        <div class="top-fiv">
            <img src="assets-publishers-consultancy/images/images-form-seal.png">
        </div>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="jur-heading">
        <h2>50% Off On Journal Publishing</h2>
        <h4>Promotional Offer <del>$500</del> <span>At<strong>$250</strong>only</span></h4>
    </div>
        <form id="discount-journal" action="sendmail.php" method="post">
        <div class="fr-fld">
            <input type="hidden" name="form_name" value="popup_form_discount_journal" />
            <input type="hidden" id="" name="url" value="<?= $url ?>">
            <input type="text" name="name" class="form-control" placeholder="Full Name *">

            <input type="email" name="email" class="form-control" placeholder="Email Address *">

              
        </div>

         <div class="fldset">
                    <input id="cphone" type="text" name="phone" minlength="14" maxlength="14" placeholder="Phone No *" class="form-control" required>
                  </div>  

                  <div class="fr-fld-bt">
                    <button type="submit">Sign up to avail NOW</button>
                  </div>
                </form>
      </div>
     
    </div>
  </div>
</div>
</div>







<script type="text/javascript" src="assets-publishers-consultancy/js/js-libs.js"></script>
<script type="text/javascript" src="assets-publishers-consultancy/js/js-functions.js"></script>


    <script>
    // zE(function() {
    //     $zopim.livechat.setOnUnreadMsgs(function(numUnread){
    //         if(numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
    //             $zopim.livechat.window.show();
    //         }
    //     })
    // });

     function setButtonURL() {

        //  $zopim.livechat.window.show();

     }

     function toggleChat() {

        //  $zopim.livechat.window.show();

     }
</script>

<script>

     function setButtonURL() {

        //  $zopim.livechat.window.show();

     }

     function toggleChat() {

        //  $zopim.livechat.window.show();

     }

</script>
<script type="text/javascript">
  window.zESettings = {
    webWidget: {
      chat: {
        connectOnPageLoad: false
      }
    }
  };
</script>

<script type="text/javascript">
    setTimeout(function(){
        const node = document.createElement("script");
        node.src = "https://static.zdassets.com/ekr/snippet.js?key=88f7b2ba-b6dd-49ae-89be-dccc8d1b7ae9";
        node.id = "ze-snippet";
        document.body.appendChild(node)
    },3000)
  $(".clickbutton").click(function(){
    $('.floatbutton').toggleClass("active");
    $('.crossplus').toggleClass("rotate");
  });
  function setButtonURL(){}
</script>
<script type="text/javascript">
(function($){
  $.fn.visible = function(partial){
      var $t        = $(this),
        $w        = $(window),
        viewTop     = $w.scrollTop(),
        viewBottom    = viewTop + $w.height(),
        _top      = $t.offset().top,
        _bottom     = _top + $t.height(),
        compareTop    = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;  
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
    };
})(jQuery);
$(document).ready(function(){
    showvisible();
    setTimeout(function(){
        $('#exampleModalCenter').modal('show')
    },5000)
    $(window).scroll(function(){
        setTimeout(function(){ showvisible() }, 100);
    });
    $('form').submit(function(e){
        var values = $(this).serialize();
        if($(this).find('[name="email"]')[0].validity.valid&&$(this).find('[name="phone"]')[0].validity.valid&&$(this).find('[name="name"]')[0].validity.valid&&$(this).find('[name="message"]')[0].validity.valid){
            $(this)[0].submit()
            return true
        }
        e.preventDefault()
        return false
    })
    fetch('https://ipinfo.io/json',{
        method: "GET"
    }).then(e=>e.json()).then(e=>{
        if(e.country.toLowerCase()=='us'){
            $('[name="phone_code"]').val('+1')
        }
        if(e.country.toLowerCase()=='ca'){
            $('[name="phone_code"]').val('+1')
        }
        if(e.country.toLowerCase()=='gb'){
            $('[name="phone_code"]').val('+44')
        }
    })
});
function showvisible(){
$('img').each(function(){
var visible = $(this).visible('partial');
var elem = $(this);
if (!elem.prop('complete')) {
  elem.on('load', function() {
    //console.log(this.complete);
  });
} else {
}
if(visible) { 
$(this).attr('src',$(this).data('url'));
}
});
}
</script>
<script> $('.chat, .chatt').click(function(){ $zopim.livechat.window.show(); }); </script>


</body>

</html>