<?php
function reconstruct_url($url){
    $url_parts = parse_url($url);
    $constructed_url = $url_parts['scheme'] . '://' . $url_parts['host'] . (isset($url_parts['path'])?$url_parts['path']:'');
    return rtrim($constructed_url,'/');
}
    $url = reconstruct_url((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?=$url?>/images/favicon.png" type="image/png">
    <link rel="stylesheet" media="all" href="<?=$url?>/css/css-all.css">
    <link rel="stylesheet" media="all" type="text/css" href="<?=$url?>/css/css-style.css">
    <link rel="stylesheet" media="all" type="text/css" href="<?=$url?>/css/css-style-web.css">
    <link rel="stylesheet" media="all" type="text/css" href="<?=$url?>/css/css-responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link media="all" href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link media="all" href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <title>Amazon Publication Experts | Hassle-free Book Publication Services NOW at ONLY 70% OFF</title>


	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6WPLBB');</script>
<!-- End Google Tag Manager -->

</head> 
<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6WPLBB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<a href="tel:+888-918-0661" class="callusnow">READY? CLICK TO CALL</a>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="logo">
                    <img alt="websiteimg" src="<?=$url?>/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-md-9">
                <nav class="navbar-expand-md main-menu">
                    <ul class="menu">
                        <li class="phone">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+888-918-0661">(888) 918-0661</a>
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
                    <h1><span>BOOK WRITING & PUBLISHING</span>
                        SERVICES OFFERED AT
                        <strong>AFFORDABLE PRICES!</strong>
                    </h1>
                        <ul>
                        <li>Professional Writing, Editing, Proofreading, and Formatting</li>
                        <li>Publishing on Amazon, Kindle, Barnes & Noble, Google Books, and More</li>
                        <li>Premium Book Cover Design</li>
                        <li>Effective Book Marketing Strategies</li>
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
                            <img alt="websiteimg" src="<?=$url?>/images/images-form-seal.png" alt="">
                        </div>
                    </div>
                    <div class="info-form">
                        <form id="formlppublishing1" action="../sendmail.php" method="post" class="validate-banner">
                            <input type="hidden" id="" name="url" value="<?= $url ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="required form-control" required name="name" placeholder="Full Name">
                                    <input type="tel" class="required form-control  number ftpn" required name="phone" placeholder="Phone No">
                                    <input type="email" class="required form-control email" required name="email" placeholder="Email Address">
                                    <textarea autocomplete="nope" name="message" class="required form-control" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="btnsub show-s">
                                        <button type="submit" class="btn btn-dark">Activate Your Coupon Now</button>
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
                <img alt="websiteimg" src="<?=$url?>/images/images-our-allow.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="our-publishing">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-center zila">
            BOOK PUBLISHING <br>
            Hassle-Free and Affordable <br>
            Get Published with Us Now <br>
        </h2>
        <div class="row">
            <div class="col-md-7">
                <div class="txt">
                    <ul>
                        <li><img alt="websiteimg" src="<?=$url?>/images/images-our-pub-ul.png" alt=""> A premium cover to get your book noticed.</li>
                        <li><img alt="websiteimg" src="<?=$url?>/images/images-our-pub-ul.png" alt=""> EBook conversion to any format including HTML.</li>
                        <li><img alt="websiteimg" src="<?=$url?>/images/images-our-pub-ul.png" alt=""> Keep all revenues from your eBooks with our suggested price.</li>
                        <li><img alt="websiteimg" src="<?=$url?>/images/images-our-pub-ul.png" alt=""> The final step to get your eBook selling is publishing.</li>
                        <li><img alt="websiteimg" src="<?=$url?>/images/images-our-pub-ul.png" alt=""> Marketplace integration by having accounts on all platforms.</li>
                        <li><img alt="websiteimg" src="<?=$url?>/images/images-our-pub-ul.png" alt=""> Free setup for those new to the ghostwriting industry.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <p>The publishing industry has evolved considerably in the last decade to deal with digital disruption, piracy, changing reading habits, the rise of audiobooks, extreme competition, production problems, and excessive promotion. It is extremely hard to get a traditional publisher to even read your manuscript let alone offer you a publishing contract. Traditional publishers are generally bombarded with hundreds of manuscripts from tons of writers and agents. That is why choosing Amazon Publication Experts to get your book published is the way to go for new and established writers!</p>
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
                    Get your book published by us <br>
                    And get all distribution perks <br>
                    Without the worry of any <br>
                    upfront cost.
                </h2>
                <p>Now you won’t have to worry about editing, formatting, or promoting your book. Our publishing services include all those for you!</p>
                <div class="seal">
                            <img alt="websiteimg" src="<?=$url?>/images/images-form-seal.png" alt="">
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
            Amazon Publication Experts Book <br>
            Publishing Process
        </h2>
        <h3>Amazon Publication Experts book publishing process is a simple six-step process that has been streamlined over the years to make the entire experience smooth, functional, and easy to understand for our clients. Check out our publishing process down below.</h3>
        <div class="owl-process owl-carousel owl-theme">
            <div class="item">
                <div class="process">
                   <h5>step 01</h5>
                    <h4>Connect <br> with Us</h4>
                    <p>The first step of the process is for you to leave us a message online with details of your project. We will then get back to you and answer any questions you may have.</p>
                </div>
            </div>
            <div class="item">
                <div class="process">
                    <h5>step 02</h5>
                    <h4>Draft <br> Review</h4>
                    <p>The second step is when you submit to us your book’s final and complete draft and our experts will review it to see how they can market it after publishing.</p>
                </div>
            </div>
            <div class="item">
                <div class="process">
                    <h5>step 03</h5>
                    <h4>Editing, Proofreading, <br> &amp; Formatting</h4>
                    <p>The third step is when your book’s final draft is handed over to our team of editors and formatters wherein they check for any errors and format the book to industry standard.</p>
                </div>
            </div>
            <div class="item">
                <div class="process">
                    <h5>step 04</h5>
                    <h4>Book Cover Design</h4>
                    <p>The fourth step is when our creative team of designers get to work on designing your book’s front and back covers to make it worthy of being picked up from a shelf.</p>
                </div>
            </div>
            <div class="item">
                <div class="process">
                    <h5>step 05</h5>
                    <h4>Book <br> Publishing</h4>
                    <p>The fifth step is when we finally publish your book! We’ll publish your book in print, digitally (on all platforms), and even offer print-on-demand services.</p>
                </div>
            </div>
            <div class="item">
                <div class="process">
                    <h5>step 06</h5>
                    <h4>Profit!</h4>
                    <p>The sixth step is quite simple: you sit back and enjoy the revenue generated by your published book after we’re done distributing and promoting it to maximize sales.</p>
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
        <a class="tel" href="tel:+888-918-0661">
            <img alt="websiteimg" src="<?=$url?>/images/images-amazon-tel.png" alt="">
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
                    <p>“I’ve had several of my books ghostwritten, edited, formatted, designed, and published through Amazon Publication Experts! They’ve taken my dreams of becoming a writer by profession and made it a reality and now all I have to do is come up with new book ideas.”</p>
                    <h4>Arnold Moss</h4>
                </div>
            </div>
            <div class="item">
                <div class="info-testi">
                    <p>“As a writer who writes a lot of books every month, I never have the time to edit my book let alone go after publishing agencies to notice my manuscript. Amazon Publication Experts has taken a load off my back with their editing and publishing services!”</p>
                    <h4>Lindsey Page</h4>
                </div>
            </div>
            <div class="item">
                <div class="info-testi">
                    <p>“It’s not easy keeping up with readers’ demands for sequels to a book series you start. That’s why I outsource some of my writing projects to Amazon Publication Experts! Their team is excellent with both the writing and the editing and they publish my work for me too!”</p>
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
                <a class="tel" href="tel:+888-918-0661">
                        <img alt="websiteimg" src="<?=$url?>/images/images-amazon-tel.png" alt="">
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
                            <img alt="websiteimg" src="<?=$url?>/images/images-form-seal.png" alt="">
                        </div>
                    <div class="info-form">
                        <form id="formlppublishing2" action="../sendmail.php" class="app_contact_form" method="post" novalidate="novalidate">
                            <input type="hidden" id="" name="url" value="<?= $url ?>">
                            <div class="row">
                                <div class="col-md-7">
                                    <input type="text" name="name"  placeholder="Name" class="required form-control" required="" aria-required="true">
                                    <input type="tel" class="required form-control ftpn" required="" name="phone" minlength="7" maxlength="14" placeholder="Your Phone" aria-required="true">
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
                <p> Copyright © 2023 - Amazon Publication Experts. All Rights Reserved</p>
            </div>
         
        </div>
    </div>
</section>
<div style="display: none;" class="popupform" id="popupform">
    <div class="modal-body">
        <div class="popup-content">
            <h2>We are here to help!</h2>
            <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
            <form id="formlppublishing3" action="../sendmail.php" method="post" class="validate-popupform">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="required form-control" required name="name" placeholder="Your Name">
                        <input type="email" class="required form-control" required name="email" placeholder="Your Email">
                        <input type="number" class="required form-control ftpn" required name="phone" minlength="7" maxlength="14" placeholder="Your Phone">
                        <textarea autocomplete="nope" name="message" class="required form-control" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                        <input type="hidden" id="" name="url" value="<?= $url ?>">
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-black" name="send_data" value="Submit Now">
                    </div>
                </div>
            </form>

               <a href="tel:+888-918-0661" class="bybtn">READY? CLICK TO CALL</a>
        </div>
    </div>
</div>

<div class="floatbutton">
  <div class="btns_wrap">

    <a href="javascript:;" class="chat_wrap chatt" onclick="setButtonURL();">
      <span class="icoo"><i class="fa fa-comment"></i></span>
      <span>Chat With Us</span>
    </a>
    <a href="tel:+1-888-918-0661" class="call_wrap">
      <span class="icoo"><i class="fa fa-phone"></i></span>
      <span> +1-888-918-0661 </span>
    </a>
  </div>


  <div class="clickbutton"><div class="crossplus">60% Off On All Services</div></div>
  <div class="banner-form">
    <h3>Chat With Us to <br>Avail 60% Discount</h3>
    <div class="banform">
      <div class="container">
        <div class="row">
          <div class="ban-form">
            <form data-noinfo="true" data-customcallback="querycallback" class="CrudForm cmxform" id="formlppublishing4" method="POST" action="../sendmail.php">
            <input type="hidden" required="" name="page_url" value="<?=$url?>"> 
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
                  <div class="fldset">
                    <input id="cphone" type="text" name="phone" placeholder="Enter phone here" required="">
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="fldset">
                    <textarea name="message" id="" rows="7" placeholder="Talk About Your Project"></textarea>
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

<script type="text/javascript" src="<?=$url?>/js/js-libs.js"></script>
<script type="text/javascript" src="<?=$url?>/js/js-functions.js"></script>



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
$(document).ready(function(){
  setTimeout(function(){
        const node = document.createElement("script");
        node.src = "https://static.zdassets.com/ekr/snippet.js?key=88f7b2ba-b6dd-49ae-89be-dccc8d1b7ae9";
        node.id = "ze-snippet";
        document.body.appendChild(node)
    },3000)
})
  $(".clickbutton").click(function(){
    $('.floatbutton').toggleClass("active");
    $('.crossplus').toggleClass("rotate");
  });
</script>
<script> $('.chat, .chatt').click(function(){ $zopim.livechat.window.show(); }); </script>


</body>

</html>
