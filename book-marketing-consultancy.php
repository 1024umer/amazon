<?php
function reconstruct_url($url){
    $url_parts = parse_url($url);
    $constructed_url = $url_parts['scheme'] . '://' . $url_parts['host'] . (isset($url_parts['path'])?$url_parts['path']:'');
    return rtrim($constructed_url,'/');
}
    $url = reconstruct_url((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]").'/assets-marketing-consultancy';
?>
<!DOCTYPE html>
<html lang="en">
   
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" type="image/x-icon" href="<?=$url?>/images/webp/favicon.png">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500&amp;family=Poppins:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?=$url?>/css/plugin.css">
      <link rel="stylesheet" href="<?=$url?>/css/custom.css">
      <link rel="stylesheet" href="<?=$url?>/css/responsive.css">
      <title>Professional Book Promotion & Book Marketing Services.</title>
      <meta name="Amz Publication Experts offers a staggering discount on its book marketing service. Get help for book promotion, eBook marketing services. Hire a dedicated book marketer that too at an affordable price.">
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
<!-- End Google Tag Manager --><!-- Google tag (gtag.js) --><script async src="https://www.googletagmanager.com/gtag/js?id=AW-11129540773"></script><script>  window.dataLayer = window.dataLayer || [];  function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'AW-11129540773');</script>
   </head>
   <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6WPLBB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--<a href="tel:+888-918-0661" class="callusnow">READY? CLICK TO CALL</a>-->
      <header class="header_area">
         <div class="container">
            <div class="main-header">
               <div class="logo-area" data-aos="fade-left">
                  <img src="<?=$url?>/images/logo.png" alt="">
               </div>
               <div class="header-contact" data-aos="fade-right">
                  <a href="tel:+18889180661" class="header-call">
                  <i class="fas fa-phone-alt"></i>
                  <span>888-918-0661</span>
                  </a>
                  <button href="javascript:;" class="gold-btn open-popup hvr-grow-shadow" href="javascript:;">Get A Free Quote</button>
               </div>
            </div>
         </div>
      </header>
      <section class="main-banner">
         <div class="container">
            <div class="row ">
               <div class="col-md-8 col-12">
                  <h6 class="top-content" data-aos="fade-down">Effective Book Marketing Solutions </h6>
                  <h3 class="banner-heading" data-aos="fade-right"><span>Unlock The <span>Power</span> Of Ebook Marketing And Become a <span>Bestselling</span> Author</h3>

                  <div class="banner-form-wrapper" data-form-type="signup_form">
                     <h4 class="sec-heading form-heading" data-aos="fade-up">Sign Up Now & GET UP TO 50% OFF</h4>
                     
                     <form id="formlpmarket1" action="sendmail.php" method="POST">
                         
                        <input type="hidden" id="" name="url" value="<?= $url ?>">
                        <input type="hidden" name="subject" value="Banner Form (amazonpublicationexperts.com)">
                        <div class="banner-form-form" data-aos="fade-down">
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <i class="far fa-user"></i>
                                 <input class="form-control" type="text" name="name" placeholder="Name" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <i class="far fa-envelope"></i>
                                 <input class="form-control" name="email" type="email" placeholder="Email" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <i class="fas fa-phone-alt"></i>
                                 <select required="" class="form-control" name="phone_code">
                                    <option selected="" value="+1">+1</option>
                                    <option value="+44">+44</option>
                                </select>
                                 <input type="tel" name="phone" placeholder="Phone Number" class="form-control" minlength="10" maxlength="14" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <i class="far fa-comments"></i>
                                 <textarea name="message" type="text" class="form-control" placeholder="Enter Your Message" required></textarea>
                              </div>
                           </div>
                           <div class="form-btn-area header-contact">
                              <button class="gold-btn resp-btn  hvr-grow-shadow" type="submit" id="signupBtn">Submit</button>
                              <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                              <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                              <div class="loader" style="display: none">
                                 <img alt="loader" src="loader.gif">
                              </div>
                           </div>
                        </div>
                     </form>

                  </div>
               </div>
               <div class="col-md-3 book-area">
                  <img class="img-fluid banner-img1" src="<?=$url?>/images/webp/banner-book.webp" alt="">
               </div>
               <div class="banner-laptop">
                  <img class="img-fluid laptop-img" src="<?=$url?>/images/webp/banner-laptop.webp" alt="">
               </div>
            </div>
         </div>
      </section>
      <section class="book-marketing sec-padding">
         <img class="img-fluid before-img1" src="<?=$url?>/images/webp/book-mark-before.webp" alt="" data-aos="fade-up">
         <div class="container">
            <div class="row">
               <div class="col-md-5 book-mark-left-img">
                  <img class="img-fluid left-img1" src="<?=$url?>/images/webp/book-mark-img1.webp" alt="" data-aos="fade-down">
               </div>
               <div class="col-md-7">
                  <h2 class="sec-heading" data-aos="fade-down">Discover Exceptional Book Marketing & Book Promotion Services</h2>
                  <p class="sec-para" data-aos="fade-left">Our comprehensive marketing books strategy will help you skyrocket your sales and become a bestselling author in no time. With our expert tips and tricks, you'll learn how to optimize your book listing, reach your target audience and maximize your profits with book advertising. <br>
We understand that the world of book marketing can be overwhelming, so we've created this manual to simplify the process and help you succeed. Whether you're a new author or a seasoned pro, our strategies will take your book marketing to the next level. So what are you waiting for? Let's get started on your journey to book marketing service!
                  </p>
                  <div class="row count-slider" data-aos="fade-right">
                     <div class="col-lg-6 col-md-12">
                        <div class="counters">
                           <div class="counter custom-sm-counter-style">
                              <h3 class="number-count counting" data-count="100">100+</h3>
                              <h6>Ebook Advertising Marketers</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <div class="counters">
                           <div class="counter custom-sm-counter-style">
                              <h3 class="number-count counting" data-count="1000">1000+</h3>
                              <h6 class="text-center">Contented Clients Across The World</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <div class="counters">
                           <div class="counter custom-sm-counter-style">
                              <h3 class="number-count counting" data-count="500">500+</h3>
                              <h6>Best Author Sellers</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <div class="counters">
                           <div class="counter custom-sm-counter-style">
                              <h3 class="number-count counting" data-count="100">100+</h3>
                              <h6 class="text-center">Talented Professionals</h6>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="header-contact book-mark-btns" data-aos="fade-down">
                     <button href="javascript:;" class="gold-btn open-popup hvr-grow-shadow">Get Started</button>
                     <button href="javascript:;" class="black-btn chat hvr-grow-shadow">Live Chat</button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="client-reviews sec-padding">
         <div class="container">
            <h2 class="sec-heading" data-aos="fade-down">How Amz Publication Experts Are Different From Others?</h2>
            <p class="sec-para" data-aos="fade-up">We are dedicated to helping you achieve maximum success in book advertising and we will do everything in our potential to help you get there.</p>
            <div class="row books-main-slider">
               <div class="col-lg-3" data-aos="fade-down">
                  <div class="featured-box text-center">
                     <div class="intro-header">
                        <img alt="" src="<?=$url?>/images/webp/client-icon2.webp">
                        <h2 class="p-1">Marketing Books Experience</h2>
                     </div>
                     <div class="content">
                        <p>We have years of experience and a deep understanding of the Amazon platform, algorithms, and trends. We've worked with authors from all genres and backgrounds and we know what it takes to make ebook Advertising successful.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3" data-aos="fade-up">
                  <div class="featured-box text-center">
                     <div class="intro-header">
                        <img alt="" src="<?=$url?>/images/webp/client-icon1.webp">
                        <h2>Data-driven Approach</h2>
                     </div>
                     <div class="content">
                        <p>We believe that the best way to achieve success in Amazon book marketing is through a data-driven approach. We use advanced analytics and insights to track your book promotion performance and optimize our marketing book strategies accordingly.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3" data-aos="fade-down">
                  <div class="featured-box text-center">
                     <div class="intro-header">
                        <img alt="" src="<?=$url?>/images/webp/client-icon3.webp">
                        <h2>Transparency & Honesty</h2>
                     </div>
                     <div class="content">
                        <p>We believe in honesty and transparency that's why we offer straightforward and affordable pricing with no hidden fees or surprises.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3" data-aos="fade-up">
                  <div class="featured-box text-center">
                     <div class="intro-header">
                        <img alt="" src="<?=$url?>/images/webp/client-icon4.webp">
                        <h2>Communication & Support</h2>
                     </div>
                     <div class="content">
                        <p>We believe in the power of communication and support. We are always available to answer your questions and provide you with the support you need to achieve success.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

       <section id="pricing-sec" class="price-sec">
          <div class="container">
            <div class="hd-txt">
             <h2 class="sec-heading wow fadeInUp" data-wow-delay="500ms" >Services & Pricing</h2>
           </div>
              <div class="row">
                 <div class="col-sm-4">
                   <div class="price-box">
                       <div class="price-icon-bx">
                         <img src="<?=$url?>/images/price-icon-1.png">
                       </div>
                       <div class="price-txt">
                         <h3>SILVER </h3>
                         <ul>
                             <li>Google Preview Book</li>
                             <li>Social Media Promotion for 1 month</li>
                             <li>Marketing Strategy Call - 90 Min</li>
                             <li>Amazon Optimization</li>
                             <li>Search Engine Optimization - (1 Month)</li>
                             <li>Video Reviews- 3 Reviews</li>
                             <li>Book Launch Animated Video - one 1-minute video</li>
                             <li>Author Website Setup- 1</li>
                             <li>Website for author and book</li>
                             <li>Promotional Bookmarks Design- 3 each</li>
                             <li>Promotional Postcards Design-3 each</li>
                             <li>Promotional Business Cards Design-10 each</li>
                             <li>Blogs/Articles Marketing- 10</li>
                             <li>Blogs written and posted on high authority domain platforms </li>
                             <li>Press Release Campaign - 5</li>
                             <li>Media Outlets/ 5 Press Releases</li>
                         </ul>
                         <!-- <h2>$5999</h2> -->
                         <a href="javascript:;" onclick="setButtonURL();" class="chat btn-sts livcht-btn">Live Chat</a>
                       </div>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="price-box">
                       <div class="price-icon-bx">
                         <img src="<?=$url?>/images/price-icon-1.png">
                       </div>
                       <div class="price-txt">
                         <h3>GOLD</h3>
                         <ul>
                             <li>Google Preview Book</li>
                             <li>Social Media Promotion for 3 months</li>
                             <li>Marketing Strategy Call - 90 Min</li>
                             <li>Amazon Optimization</li>
                             <li>Search Engine Optimization - (3 Months)</li>
                             <li>Video Reviews- 5 Reviews</li>
                             <li>Book Launch Animated Video - one 1-minute video</li>
                             <li>Author Website Setup- 1</li>
                             <li>Website for author and book</li>
                             <li>Promotional Bookmarks Design- 5 each</li>
                             <li>Promotional Postcards Design-5 each</li>
                             <li>Promotional Business Cards Design-10 each</li>
                             <li>Blogs/Articles Marketing- 15</li>
                             <li>Blogs written and posted on high authority domain platforms </li>
                             <li>Press Release Campaign - 5</li>
                             <li>Media Outlets/ 10 Press Releases</li>
                             <li>Wikipedia Page for the book</li>
                             <li>Google Knowledge Panel for the book</li>
                         </ul>
                         <!-- <h2>$7999</h2> -->
                         <a href="javascript:;" onclick="setButtonURL();" class="chat btn-sts livcht-btn">Live Chat</a>
                       </div>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="price-box bdr-rem">
                       <div class="price-icon-bx">
                         <img src="<?=$url?>/images/price-icon-1.png">
                       </div>
                       <div class="price-txt">
                         <h3>DIAMOND </h3>
                         <ul>
                             <li>Google Preview Book</li>
                             <li>Social Media Promotion for 6 months</li>
                             <li>Marketing Strategy Call - 90 Min</li>
                             <li>Amazon Optimization</li>
                             <li>Search Engine Optimization - (6 Months)</li>
                             <li>Video Reviews- 10 Reviews</li>
                             <li>Book Launch Animated Video - two 1-minute videos</li>
                             <li>Author Website Setup- 1</li>
                             <li>Website for author and book</li>
                             <li>Promotional Bookmarks Design- 10 each</li>
                             <li>Promotional Postcards Design-10 each</li>
                             <li>Promotional Business Cards Design-10 each</li>
                             <li>Blogs/Articles Marketing- 30</li>
                             <li>Blogs written and posted on high authority domain platforms</li>
                             <li>Press Release Campaign - 10</li>
                             <li>Media Outlets/ 10 Press Releases</li>
                             <li>Wikipedia Page for the book</li>
                             <li>Google Knowledge Panel for the book</li>
                         </ul>
                         <!-- <h2>$13,999</h2> -->
                         <a href="javascript:;" onclick="setButtonURL();" class="chat btn-sts livcht-btn">Live Chat</a>
                       </div>
                   </div>
                 </div>
              </div>
          </div>
        </section>

      <section class="recent-books sec-padding">
         <div class="container">
            <h2 class="sec-heading" data-aos="fade-up">Our Recent Book Releases</h2>
            <p class="sec-para" data-aos="fade-down">We have marketed 1000+ books, take a look at few straight from the Vault.</p>
            <!-- <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up">
               <li class="nav-item">
                  <a class="nav-link active" id="fiction-tab" data-toggle="tab" href="#fiction" role="tab" aria-controls="fiction" aria-selected="true">FICTION</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="non-fiction-tab" data-toggle="tab" href="#non-fiction" role="tab" aria-controls="non-fiction" aria-selected="false">NON-FICTION
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="biography-tab" data-toggle="tab" href="#biography" role="tab" aria-controls="biography" aria-selected="false">BIOGRAPHY</a>
               </li>
               <li class="nav-item mr-top">
                  <a class="nav-link" id="informative-tab" data-toggle="tab" href="#informative" role="tab" aria-controls="informative" aria-selected="false">INFORMATIVE</a>
               </li>
               <li class="nav-item mr-top">
                  <a class="nav-link" id="autobiography-tab" data-toggle="tab" href="#autobiography" role="tab" aria-controls="autobiography" aria-selected="false">HISTORY</a>
               </li>
               <li class="nav-item mr-top">
                  <a class="nav-link" id="memoirs-tab" data-toggle="tab" href="#memoirs" role="tab" aria-controls="memoirs" aria-selected="false">THRILLER</a>
               </li>
            </ul> -->
            <div class="tab-content">
               <div class="tab-pane active" id="fiction" role="tabpanel" aria-labelledby="fiction-tab">
                  <div class="portfolio-wrpaer ">
                     <ul class="portfolio-slider">
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/1.jpg">
                           <img src="<?=$url?>/images/1.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/2.jpg">
                           <img src="<?=$url?>/images/6.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/3.jpg">
                           <img src="<?=$url?>/images/3.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/4.jpg">
                           <img src="<?=$url?>/images/4.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/5.jpg">
                           <img src="<?=$url?>/images/5.jpg" class="img-fluid">
                           </a>
                        </li>
                     </ul>

                     <ul class="portfolio-slider">
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/7.jpg">
                           <img src="<?=$url?>/images/7.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/8.jpg">
                           <img src="<?=$url?>/images/8.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/9.jpg">
                           <img src="<?=$url?>/images/9.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/10.jpg">
                           <img src="<?=$url?>/images/10.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/11.jpg">
                           <img src="<?=$url?>/images/11.jpg" class="img-fluid">
                           </a>
                        </li>
                     </ul>

                     <ul class="portfolio-slider">
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/12.jpg">
                           <img src="<?=$url?>/images/12.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/13.jpg">
                           <img src="<?=$url?>/images/13.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/14.jpg">
                           <img src="<?=$url?>/images/14.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/15.jpg">
                           <img src="<?=$url?>/images/15.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/16.jpg">
                           <img src="<?=$url?>/images/16.jpg" class="img-fluid">
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-pane" id="non-fiction" role="tabpanel" aria-labelledby="non-fiction-tab">
                  <div class="portfolio-wrpaer">
                     <ul class="portfolio-slider">
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/6.jpg">
                           <img src="<?=$url?>/images/6.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/7.jpg">
                           <img src="<?=$url?>/images/7.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/8.jpg">
                           <img src="<?=$url?>/images/8.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/9.jpg">
                           <img src="<?=$url?>/images/9.jpg" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/10.jpg">
                           <img src="<?=$url?>/images/10.jpg" class="img-fluid">
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-pane" id="biography" role="tabpanel" aria-labelledby="biography-tab">
                  <div class="portfolio-wrpaer">
                     <ul class="portfolio-slider">
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/biography/big-img1.webp">
                           <img src="<?=$url?>/images/webp/portfolio/biography/big-img1.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/biography/big-img2.webp">
                           <img src="<?=$url?>/images/webp/portfolio/biography/big-img2.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/biography/big-img3.webp">
                           <img src="<?=$url?>/images/webp/portfolio/biography/big-img3.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/biography/big-img4.webp">
                           <img src="<?=$url?>/images/webp/portfolio/biography/big-img4.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/biography/big-img5.webp">
                           <img src="<?=$url?>/images/webp/portfolio/biography/big-img5.webp" class="img-fluid">
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-pane" id="informative" role="tabpanel" aria-labelledby="informative-tab">
                  <div class="portfolio-wrpaer">
                     <ul class="portfolio-slider">
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/informative/inf-img1.webp">
                           <img src="<?=$url?>/images/webp/portfolio/informative/inf-img1.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/informative/inf-img2.webp">
                           <img src="<?=$url?>/images/webp/portfolio/informative/inf-img2.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/informative/inf-img3.webp">
                           <img src="<?=$url?>/images/webp/portfolio/informative/inf-img3.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/informative/inf-img4.webp">
                           <img src="<?=$url?>/images/webp/portfolio/informative/inf-img4.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/informative/inf-img5.webp">
                           <img src="<?=$url?>/images/webp/portfolio/informative/inf-img5.webp" class="img-fluid">
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-pane" id="autobiography" role="tabpanel" aria-labelledby="autobiography-tab">
                  <div class="portfolio-wrpaer">
                     <ul class="portfolio-slider">
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/history/01.webp">
                           <img src="<?=$url?>/images/webp/portfolio/history/01.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/history/02.webp">
                           <img src="<?=$url?>/images/webp/portfolio/history/02.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/history/03.webp">
                           <img src="<?=$url?>/images/webp/portfolio/history/03.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/history/04.webp">
                           <img src="<?=$url?>/images/webp/portfolio/history/04.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/history/05.webp">
                           <img src="<?=$url?>/images/webp/portfolio/history/05.webp" class="img-fluid">
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-pane" id="memoirs" role="tabpanel" aria-labelledby="memoirs-tab">
                  <div class="portfolio-wrpaer">
                     <ul class="portfolio-slider">
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/thriller/0.webp">
                           <img src="<?=$url?>/images/webp/portfolio/thriller/02.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/thriller/03.webp">
                           <img src="<?=$url?>/images/webp/portfolio/thriller/03.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/thriller/04.webp">
                           <img src="<?=$url?>/images/webp/portfolio/thriller/04.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/thriller/05.webp">
                           <img src="<?=$url?>/images/webp/portfolio/thriller/05.webp" class="img-fluid">
                           </a>
                        </li>
                        <li class="portfolio-img">
                           <a data-fancybox="gallery" href="<?=$url?>/images/webp/portfolio/thriller/06.webp">
                           <img src="<?=$url?>/images/webp/portfolio/thriller/06.webp" class="img-fluid">
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="header-contact recent-books-btn book-mark-btns">
               <button href="javascript:;" class="gold-btn open-popup hvr-grow-shadow">Get Started</button>
               <button href="javascript:;" class="black-btn chat hvr-grow-shadow">Live Chat</button>
            </div>
         </div>
      </section>
      <section class="main-cta">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 col-md-8 cta-wrapper">
                  <h2 class="sec-heading" data-aos="fade-left">Experience Outstanding Book Marketing & Promotion Services</h2>
                  <p class="sec-para aos-init aos-animate" data-aos-delay="1000" data-aos="fade-down">Hire Us Today for Professional Ghostwriting & Marketing Services</p>
                  <div class="header-contact book-mark-btns" data-aos="fade-up">
                     <button href="javascript:;" class="gold-btn open-popup hvr-grow-shadow">Get Started</button>
                     <button href="javascript:;" class="black-btn chat hvr-grow-shadow">Live Chat</button>
                     <a href="tel:+18889180661" class="transparent-btn hvr-grow-shadow">888-918-0661</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="cta-img" data-aos="fade-left">
            <img class="img-fluid" src="<?=$url?>/images/webp/cta-books.webp" alt="">
         </div>
      </section>
      <section class="how-it-works sec-padding">
         <div class="container">
            <h2 class="sec-heading" data-aos="fade-down">Get Effective Book Promotion Strategies From Our Book Experts</h2>
            <p class="sec-para" data-aos="fade-up">Are you troubled about your book marketing? Need some direction? You are in the correct spot.</p>
            <div class="row how-it-slider">
               <div class="col-md-4 work-box-wrapper" data-aos="fade-right">
                  <h2 class="box-number">1</h2>
                  <h5>Author Website</h5>
                  <p>Being present online is crucial for authors. Create a website for your author brand that is both useful and beautifully designed so that readers can learn more about you and your books.</p>
               </div>
               <div class="col-md-4 work-box-wrapper" data-aos="fade-left">
                  <h2 class="box-number">2</h2>
                  <h5>Press Release</h5>
                  <p>A press release is crucial to your book marketing strategy. Our marketing book professionals will be happy to help you create and distribute it throughout the book advertising campaign.</p>
               </div>
               <div class="col-md-4 work-box-wrapper" data-aos="fade-up">
                  <h2 class="box-number">3</h2>
                  <h5>Video Trailer</h5>
                  <p>Create a captivating book trailer that visually communicates your book's concept to readers.</p>
               </div>
               <div class="col-md-4 work-box-wrapper" data-aos="fade-down">
                  <h2 class="box-number">4</h2>
                  <h5>Email Marketing</h5>
                  <p>It is another strategy to promote your book through email marketing. Get in touch with us and specify the age groups, keywords, and geographic areas you want to emphasize to boost marketing book sales.</p>
               </div>
               <div class="col-md-4 work-box-wrapper" data-aos="fade-left">
                  <h2 class="box-number">5</h2>
                  <h5>Social Media Marketing</h5>
                  <p>Sign up for our social media marketing service to boost your ebook sales and achieve profitable outcomes. Effective social media marketing can increase traffic, readers, and book sales.</p>
               </div>
               <div class="col-md-4 work-box-wrapper" data-aos="fade-right">
                  <h2 class="box-number">6</h2>
                  <h5>Book Reviews</h5>
                  <p>We send your manuscript to independent book reviewers who provide objective feedback for your independently published book and post those reviews on online retailers like Amazon.</p>
               </div>
            </div>
         </div>
      </section>
      <section class="testimonials sec-padding">
         <div class="container">
            <h2 class="sec-heading" data-aos="fade-down">Client's Feedback</h2>
            <p class="sec-para" data-aos="fade-up">Below are some client testimonials about our work. We have a track record of delivering excellence through our services.</p>
            <div class="row testi-slider">
               <div class="col-md-4" data-aos="fade-left">
                  <div class="testi-wrapper">
                     <img class="img-fluid testi-image" src="<?=$url?>/images/webp/testi-img1.webp" alt="">
                     <p class="testi-content">At first, I was nervous about hiring a marketing company. My book is very personal, so it was hard to trust someone online. But all my fears disappeared when I got a chance to work with them. The level of professionalism shown by each individual in the team made me proud.</p>
                     <h6 class="client-name">James Scott</h6>
                     <p class="author-name">Book author.</p>
                     <img class="img-fluid testi-cots" src="<?=$url?>/images/webp/test-dcots.webp" alt="">
                  </div>
               </div>
               <div class="col-md-4" data-aos="fade-down">
                  <div class="testi-wrapper">
                     <img class="img-fluid testi-image" src="<?=$url?>/images/webp/testi-img2.webp" alt="">
                     <p class="testi-content">The Amz Publication Experts was very helpful marketing the book. If it wasn't ghostwriting’s untiring efforts, amazing marketing strategies, feedback, and promotional efforts, my book would only be an ordinary book not the best seller of the month. </p>
                     <h6 class="client-name">Esperanza Lang</h6>
                     <p class="author-name">Book author.</p>
                     <img class="img-fluid testi-cots" src="<?=$url?>/images/webp/test-dcots.webp" alt="">
                  </div>
               </div>
               <div class="col-md-4" data-aos="fade-right">
                  <div class="testi-wrapper">
                     <img class="img-fluid testi-image" src="<?=$url?>/images/webp/testi-img3.webp" alt="">
                     <p class="testi-content">As I had a limited budget and couldn't afford an expensive marketing company for the book, I was quite worried. However, my friend suggested Amz Publication Experts's affordable marketing services, and wow! they did a fantastic job. I can attest that there services meet the benchmark.</p>
                     <h6 class="client-name">John Delgado</h6>
                     <p class="author-name">Book author.</p>
                     <img class="img-fluid testi-cots" src="<?=$url?>/images/webp/test-dcots.webp" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="main-cta">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 col-md-8 cta-wrapper">
                  <h2 class="sec-heading" data-aos="fade-up">#1 Book Marketing Company </h2>
                  <p class="sec-para aos-init aos-animate" data-aos-delay="1000" data-aos="fade-down">Hire Us Today for Professional Ghostwriting & Marketing Services</p>
                  <div class="header-contact book-mark-btns" data-aos="fade-left">
                     <button href="javascript:;" class="gold-btn open-popup hvr-grow-shadow">Get Started</button>
                     <button href="javascript:;" class="black-btn chat hvr-grow-shadow">Live Chat</button>
                     <a href="tel:+18889180661" class="transparent-btn hvr-grow-shadow">888-918-0661</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="cta-img">
            <img class="img-fluid" src="<?=$url?>/images/webp/cta-books.webp" alt="">
         </div>
      </section>
      <footer class="footer-pt">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-9 col-md-12 col-sm-12">
                  <div class="contact-footer">
                     <a href="mailto:info@amazonpublicationexperts.com" class="phone image-zoom" style="transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                        info@amazonpublicationexperts.com 
                     </a>
                     <a href="tel:+18889180661" class="email image-zoom">
                        888-918-0661 
                        <div class="icon-circle"></div>
                     </a>
                     <a href="javascript:;" class="address image-zoom">
                        1423 Broadway PMB 114 Oakland, CA 94612 
                     </a>

                  </div>
                  <div class="copyright-social">
                     <p>© 2023 , Amz Publication Experts, All right reserved.</p>
                    
                  </div>
                  <p class="disclaimer-para"><b>Disclaimer:</b> The services provided by Amz Publication Experts become clients' property once delivered. Amz Publication Experts. will not hold any ownership rights once your work is successfully accepted by a publishing house.</p>
               </div>
               <div class="col-lg-3 col-md-12 col-sm-12 footer-logo">
                  <img style="width:240px;" src="<?=$url?>/images/logo.png" alt="">
               </div>
               <!-- <div class="col-lg-12">
                 
               </div> -->
            </div>
         </div>
      </footer>
      <div id="entry-popup">
         <div class="container">
            <div class="entry-box" data-form-type="popup_form">
               <a href="javascript:;" id="entry-box_close" class="closed"><i class="fa fa-times"></i></a>
               <form id="formlpmarket2" class="form_submission" action="sendmail.php" method="POST">
                  <input type="hidden" id="" name="url" value="<?= $url ?>">
                  <input type="hidden" name="subject" value="Popup Form (amazonpublicationexperts.com)">
                  <div id="input-box"></div>
                  <div class="col-sm-12 entry-right">
                     <div class="text-1">
                        <h1><span class="red">50% OFF</span> ON BOOK MARKETING SERVICES</h1>
                        <p>Fill in the details to get your Discount Reserved. </p>
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Your Name" required>
                     </div>
                     <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Email Address" required>
                     </div>
                     <div class="form-group input-number-inline">
                         <select required="" class="form-control" name="phone_code">
                            <option selected="" value="+1">+1</option>
                            <option value="+44">+44</option>
                        </select>
                        <input type="tel" name="phone" placeholder="Phone" class="form-control" minlength="10" maxlength="14" required>
                     </div>
                     <div class="form-group form-btn">
                        <button class="btn btn-default" type="submit" id="signupBtn">
                           Reserve your discount
                        </button>
                        <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                        <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                        <div class="loader" style="display: none">
                           <img alt="loader" src="loader.gif">
                        </div>
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
            <form data-noinfo="true" data-customcallback="querycallback" class="CrudForm cmxform" id="formlpmarket3" method="POST" action="sendmail.php">
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
                  <div class="fldset input-number-inline right-form-phone">
                    <select required="" class="form-control" name="phone_code">
                        <option selected="" value="+1">+1</option>
                        <option value="+44">+44</option>
                    </select>
                    <input id="cphone" type="tel" name="phone" minlength="10" maxlength="14" placeholder="Enter phone here" required="">
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
      <script src="<?=$url?>/js/plugin.js"></script>
      <script src="<?=$url?>/js/custom.js"></script>
      <script src="https://kit.fontawesome.com/9f18182673.js" crossorigin="anonymous"></script>
      <!--<script src="<?=$url?>/js/jquery.validate.min.js"></script>-->
      <script> $('.chat, .chatt').click(function(){  $zopim.livechat.window.show(); }); </script>

      
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
  </body>

</html>