
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>60 Days Credit Repair</title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.html" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link href="fonts/fonts.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="">

    <script>
        window.dataLayer = window.dataLayer || [];
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !(function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod
                    ? n.callMethod.apply(n, arguments)
                    : n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = "2.0";
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        })(
            window,
            document,
            "script",
            "../connect.facebook.net/en_US/fbevents.js"
        );
        fbq("init", "127655681959527");
        fbq("track", "PageView");
    </script>

    <noscript
    ><img
            height="1"
            width="1"
            style="display: none"
            src="https://www.facebook.com/tr?id=127655681959527&amp;ev=PageView&amp;noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript
><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-K8K2V7W"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
    ></iframe
    ></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="top-strip">
    <div class="container">
        <p>We Fix Your Credit In 60 Days!</p>
    </div>
</div>
<div class="top-fix-bar">
    <div class="menu-bar">
        <div class="container">
            <div class="logo-wrapper">
                <a href="/"
                ><img
                        src="{{ URL('images/60-update-logo.png') }}"
                        style="height: 80px; width: 110px"
                        alt=""
                        class="logo"
                    />
                </a>
            </div>

            <div class="mob-mnu-ic show-mob show-tab">
                <button class="dl-trigger" id="mobMenuBtn">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </button>
            </div>
            <a href="tel:+18665310119" class="menu-btn show-desk"
            >Fix Your Credit</a
            >
            <ul class="menu-list show-desk scroller">
                <li><a href="#home" class="">Home</a></li>
                <li><a href="#facts" class="">Facts</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services" class="">Services</a></li>
                <li><a href="#why-us">Why Us</a></li>
                <li><a href="#reviews">Reviews</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="show-mob show-tab">
    <ul class="mobilemenu">
        <li><a href="javascript:bookmarkscroll.scrollTo('home')">Home</a></li>
        <li><a href="javascript:bookmarkscroll.scrollTo('facts')">Facts</a></li>
        <li><a href="javascript:bookmarkscroll.scrollTo('about')">About</a></li>
        <li>
            <a href="javascript:bookmarkscroll.scrollTo('services')">Services</a>
        </li>
        <li>
            <a href="javascript:bookmarkscroll.scrollTo('why-us')">Why Us</a>
        </li>
        <li>
            <a href="javascript:bookmarkscroll.scrollTo('reviews')">Reviews</a>
        </li>
    </ul>
</div>

<div class="sec1" id="home">
    <div class="container">
        <div class="s1-lft">
            <h2>Tired of Credit Repair Companies - Us Too!</h2>
            <p>
                At 60 Days Credit Repair we are committed to<br />
                helping fix your credit, guaranteed!
            </p>
            <ul class="s1-list">
                <li>Get 6 - 12X Faster Results</li>
                <li>Free Assessment & Consultation</li>
            </ul>
        </div>
        <div class="s1-frm-rgt">
            <div class="s1-frm-bg">
                <div class="frm-hd">
                    <p>Register Now For</p>
                    <p>Free Consultation</p>
                </div>
                <div class="frm-inr">
                    <div class="form-response" style="color: #fff"></div>
                    <form action="{{ url('create-lead') }}" method="post">
                        @csrf
                        <input
                            type="text"
                            name="first_name"
                            placeholder="First Name"
                            id="first_name"
                            required
                        />
                        <input
                            type="text"
                            name="last_name"
                            placeholder="Last Name"
                            id="last_name"
                            required
                        />
                        <input type="text" name="phone_number" placeholder="Phone" id="phone" required />
                        <input type="text" name="email" placeholder="Email" id="email" required />
                        <input type="submit" value="Free Assessment" class="frm-btn" onClick="pushData()" />
                    </form>


{{--                    script for data layer--}}
                    <script async src="https://www.googletagmanager.com/gtag/js?id=TAG_ID"></script>
                    <script type="text/javascript">
                        var first_name = document.getElementById("first_name").value;
                        var last_name = document.getElementById("last_name").value;
                        var phone = document.getElementById("phone").value;
                        var email = document.getElementById("email").value;
                        function pushData(){
                            console.log("CLICKEDDDDDD")
                            dataLayer.push({
                                "first_name": first_name,
                                "last_name": last_name,
                                "phone": phone,
                                "email": email,
                            })

                            console.log(dataLayer)
                        }
                    </script>


{{--                    Script for data layer ends--}}







                    <ul class="frm-list">
                        <li><img src="images/help.svg" />Call: (866) 531-0119</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="strip">
    <div class="container">
        <p>We Work With</p>
        <img src="images/strp-img.png" alt="" />
    </div>
</div>

<div class="sec2" id="facts">
    <div class="container">
        <div class="comn-hdg">
            Know The Facts
            <p>About Your Credit Score</p>
        </div>
        <div class="s2-inr">
            <div class="s2-inr-bx">
                <p class="s2-tx1">Fact #1</p>
                <p class="s2-tx2">
                    Credit Score<br />
                    Matters
                </p>
                Your Personal Credit Is With You Until You Die
            </div>
            <div class="s2-inr-bx">
                <p class="s2-tx1">Fact #2</p>
                <p class="s2-tx2">
                    Bad Credit Costs<br />
                    Money
                </p>
                Higher Interest Rates, Higher Down Payments
            </div>
            <div class="s2-inr-bx">
                <p class="s2-tx1">Fact #3</p>
                <p class="s2-tx2">
                    Bad Credit Limits<br />
                    Your Life
                </p>
                Effects Vacations, Homes, Cars, & Business
            </div>
        </div>
    </div>
</div>

<div class="sec3" id="about">
    <div class="container">
        <div class="comn-hdg">
            We Can Help Repair
            <p>Your Credit Score, Guaranteed</p>
        </div>
        <p class="comn-txt">
            Most traditional credit repair companies are all in the same dinosaur
            business model of charging you monthly fees for 12-24 months to give
            you little to No results!
        </p>
        <p class="comn-txt">
            At 60 Days Credit Repair we understand that you want results and you
            want them as quick as possible! Our process is going to get you real
            results 6-12x faster than a traditional credit repair company through
            our proprietary process! And best of all RESULTS.
        </p>
        <img src="images/s3-img.png" alt="" class="s3-img" />
        <ul class="s3-list">
            <li>
                <img src="images/s3-list-img1.png" alt="" />
                Free Assessment & Consultation
            </li>
            <li>
                <img src="images/s3-list-img2.png" alt="" />
                12x Faster Results Within 60 Days
            </li>
            <li>
                <img src="images/s3-list-img4.png" alt="" />
                Bespoke & Affordable Pricing Plans
            </li>
        </ul>
        <div class="clearall"></div>
        <div class="btn-bx">
            <a href="#" class="comn-btn">Free Assessment</a>
            <ul class="btn-list">
                <li>
                    <img src="images/help-b.svg" /><a href="tel:+18665310119"
                    >Call: (866) 531-0119</a
                    >
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="sec4" id="services">
    <div class="container">
        <div class="comn-hdg">
            3 Simple Steps
            <p>To Fix Your Credit</p>
        </div>
        <img src="images/s4-stp-img.png" alt="" class="s4-stp" />
        <ul class="s4-list">
            <li>
                <img src="images/s4-lst-img-mb.png" alt="" class="s4-mb show-mob" />
                <p class="s4-lst-tx1">Check</p>
                <div class="s4-list-bx">
                    <p class="s4-lst-tx2">
                        <img src="images/s4-lst-img1.png" alt="" />Fill In <br />Our
                        Form
                    </p>
                    <p class="s4-lst-tx3">
                        We need to get more information on your situation to best help
                        you.
                    </p>
                </div>
            </li>
            <li>
                <img src="images/s4-lst-img-mb.png" alt="" class="s4-mb show-mob" />
                <p class="s4-lst-tx1">Challenge</p>
                <div class="s4-list-bx">
                    <p class="s4-lst-tx2">
                        <img src="images/s4-lst-img2.png" alt="" />Free
                        <br />Consultation
                    </p>
                    <p class="s4-lst-tx3">
                        A rep will contact you and go over your file in details and how
                        we can help
                    </p>
                </div>
            </li>
            <li>
                <img src="images/s4-lst-img-mb.png" alt="" class="s4-mb show-mob" />
                <p class="s4-lst-tx1">Change</p>
                <div class="s4-list-bx">
                    <p class="s4-lst-tx2">
                        <img src="images/s4-lst-img3.png" alt="" />Payment <br />Options
                    </p>
                    <p class="s4-lst-tx3">
                        We will review your options to help get you started!
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="sec5" id="why-us">
    <div class="container">
        <div class="comn-hdg">
            No Matter What
            <p>We Can Help Fix It</p>
        </div>
        <ul class="s5-list">
            <li>
                <img src="images/s5-list-img1.png" alt="" />
                <p>Late Payments</p>
            </li>
            <li>
                <img src="images/s5-list-img6.png" alt="" />
                <p>Inaccurate Child Support</p>
            </li>
            <li>
                <img src="images/s5-list-img7.png" alt="" />
                <p>Inaccurate Accounts</p>
            </li>
            <li>
                <img src="images/s5-list-img2.png" alt="" />
                <p>Foreclosures</p>
            </li>
            <li>
                <img src="images/s5-list-img3.png" alt="" />
                <p>Bankruptcy</p>
            </li>
            <li>
                <img src="images/s5-list-img4.png" alt="" />
                <p>Liens</p>
            </li>
            <li>
                <img src="images/s5-list-img5.png" alt="" />
                <p>Judgements</p>
            </li>
            <li>
                <img src="images/s5-list-img8.png" alt="" />
                <p>Repossession</p>
            </li>
        </ul>
        <div class="btn-bx">
            <a href="#" class="comn-btn">Free Assessment</a>
            <ul class="btn-list">
                <li>
                    <img src="images/help-b.svg" /><a href="tel:+18665310119"
                    >Call: (866) 531-0119</a
                    >
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="sec6" id="reviews">
    <div class="container">
        <div class="comn-hdg">
            A Credit Repair Company
            <p>That Customers Trust</p>
        </div>
        <div class="clearall"></div>
        <div class="s6-inr">
            <div class="clearall"></div>
            <div class="slider-nav">
                <div><img src="images/s6-img1.png" alt="" class="s6-img" /></div>
                <div><img src="images/s6-img2.png" alt="" class="s6-img" /></div>
                <div><img src="images/s6-img3.png" alt="" class="s6-img" /></div>
                <div><img src="images/s6-img4.png" alt="" class="s6-img" /></div>
            </div>

            <div class="s6-slide">
                <div class="s6-bx">
                    <img src="images/star-img.png" alt="" class="star-img" />
                    <p class="s6-tx1">
                        60 Days Credit Repair has improved my standard of living!
                    </p>
                    <p class="s6-tx2">
                        I started the process in November with bad credit in the 520
                        range. No joke, by the following January I was pulling my very
                        first new car off the lot! Up until this point I dealt with cash
                        because my credit was so bad that I couldn’t get approved for
                        anything without having a co-signer. My Life was used cars that
                        barley worked, little to no cash on hand, and stuck in a rut.
                        Life was tough! It’s been a year now since I went through the
                        process and life has only gotten better! By not getting charged
                        outrageous interest rates I am able to put more money in my
                        pocket and overall have more confidence in my finances, but more
                        importantly MYSELF! Worth every penny! I can’t thank you enough
                        60 Days Credit Repair!
                    </p>
                    <p class="s6-tx3">Braden Fox</p>
                </div>
                <div class="s6-bx">
                    <img src="images/star-img.png" alt="" class="star-img" />
                    <p class="s6-tx1">
                        My name is Miranda, last year in October I decided it was time
                        to fix my credit.
                    </p>
                    <p class="s6-tx2">
                        I was just notified that my current rental property was being
                        sold and I needed to move out, My credit score was a 505 and I
                        had about 38 separate collections on my credit report and my
                        future was not looking too bright. I was introduced to “60 Days
                        Credit Repair” by a friend and decided this would be the fastest
                        option for me so I took a chance, I was amazed at my results!!
                        Within the first 30 days my credit score jumped 100 points,
                        after 45 days I met with a lender and received the OK to start
                        looking at houses to buy. By the time I hit my 60 days all 38
                        collections were removed from my credit report not to mention
                        from October 28th to Jan 1st my credit went from a 505 to a 750,
                        I put a offer in on my first home in January and closed on my
                        home March 12th. I also was able to get a credit card and a line
                        of credit through m bank which goes a long way for a single mom.
                        I am able to live comfortably now and guarantee my babies have a
                        roof over there head and everything they need, 60 Day credit
                        Repair changed my life and I’m forever grateful! I recommend
                        them all day long!
                    </p>
                    <p class="s6-tx3">Miranda Pearson</p>
                </div>
                <div class="s6-bx">
                    <img src="images/star-img.png" alt="" class="star-img" />
                    <p class="s6-tx1">
                        E60 day credit repair has changed our lives forever!
                    </p>
                    <p class="s6-tx2">
                        We worked with Colter who helped us tremendously and was there
                        for us every step of the way! With the help of 60 day credit
                        repair we were able to remove fraudulent accounts that had been
                        opened without our knowledge, learn how to properly secure our
                        accounts, credit scores and identities and rebuild our credit
                        scores by more than 125 points in under 60 days! Thanks to
                        Colter and 60 day credit repair we were able to rebuild our
                        scores and obtain a new family vehicle, rebuild our home and
                        live better! Going to 60 day credit repair has been the absolute
                        best decision we ever made! We highly recommend them to
                        absolutely everyone looking for any and all accounting needs!
                    </p>
                    <p class="s6-tx3">Jasen Workmen</p>
                </div>
                <div class="s6-bx">
                    <img src="images/star-img.png" alt="" class="star-img" />
                    <p class="s6-tx2">
                        60 day credit repair helped me remove a foreclosure from my
                        credit that was not mine in under 45 days.
                    </p>
                    <p class="s6-tx3">Brett Baron</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec7">
    <div class="container">
        <div class="comn-hdg">
            Fix Your Credit Today
            <p>Let's Get Started</p>
        </div>
        <div class="s7-inr">
            <p class="s7-tx fl">
                <img src="images/mail-icn.png" alt="" /><span>Email:</span>
                <a href="mailto:info@sixtydayscreditrepair.com"
                >info@sixtydayscreditrepair.com</a
                >
            </p>
            <p class="s7-tx fr">
                <img src="images/phn-icn.png" alt="" /><span>Phone:</span>
                <a href="tel:+18665310119">(866) 531-0119</a>
            </p>
            <div class="s7-frm-bg">
                <p class="s7-frm-hd">
                    Register Now For <span>Free Consultation</span>
                </p>
                <div class="s7-frm-inr">
                    <div class="form-response" style="color: #fff"></div>
                    <form action="contact.php">
                        <input
                            type="text"
                            name="fname"
                            class="fl"
                            placeholder="First Name"
                            required
                        />
                        <input
                            type="text"
                            name="lname"
                            class="fr"
                            placeholder="Last Name"
                            required
                        />
                        <input
                            type="text"
                            name="phones"
                            class="fl"
                            placeholder="Phone"
                            required
                        />
                        <input
                            type="text"
                            name="emails"
                            class="fr"
                            placeholder="Email"
                            required
                        />
                        <button class="frm-btn">Free Assessment</button>
                    </form>
                    <ul class="frm-list white">
                        <li>
                            <svg
                                version="1.1"
                                id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 384 384"
                                style="enable-background: new 0 0 384 384"
                                xml:space="preserve"
                            >
                    <g>
                        <g>
                            <g>
                                <path
                                    fill="#000"
                                    d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.896-3.719-23.313-0.854-30.438,6.417l-43.177,32.594
                c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.812C13.823,0,0,13.823,0,30.812
                C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z
                 M362.667,353.188c0,5.229-4.25,9.479-9.479,9.479c-182.99,0-331.854-148.865-331.854-331.854c0-5.229,4.25-9.479,9.479-9.479
                h70.521c5.229,0,9.479,4.25,9.479,9.479c0,25.802,4.052,51.125,11.979,75.115c1.104,3.542,0.208,7.208-3.375,10.938
                L82.75,165.427c-2.458,3.26-2.844,7.625-1,11.26c29.927,58.823,66.292,95.188,125.531,125.542
                c3.625,1.875,8.031,1.5,11.292-0.979l49.677-37.635c2.51-2.521,6.26-3.406,9.667-2.25c24.156,7.979,49.479,12.021,75.271,12.021
                c5.229,0,9.479,4.25,9.479,9.479V353.188z"
                                />
                            </g>
                        </g>
                    </g></svg
                            ><a class="mobile" href="tel:+18665310119"
                            >Call: (866) 531-0119</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="f-logo">
                <div class="footer-logo-wrap">
                    <a href="/index.html">
                        <img
                            src="images/footer-logo.png"
                            alt="logo"
                            class="footer-logo"
                        />
                    </a>
                    <p class="footer-desc">A FASTER SOLUTION TO REPAIRING
                        CREDIT.</p>
                </div>
            </div>
            <div class="f-pages-link">
                <div class="footer-pages-link">
                    <h3 class="footer-menu-title">Menu Links</h3>
                    <ul class="footer-menu">
                        <li class="footer-menu-item">
                            <a href="#home" class="footer-menu-link">Home</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#facts" class="footer-menu-link">Facts</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#about" class="footer-menu-link">About</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#services" class="footer-menu-link">Services</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#why-us" class="footer-menu-link">Why Us</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#reviews" class="footer-menu-link">Reviews</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="{{ URL('privacy-policy') }}" class="footer-menu-link">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="f-contact">
                <div class="footer-contact">
                    <h3 class="footer-menu-title">Contact Us</h3>
                    <div class="footer-contact-e-p">
                        <a href="tel:+1 866-531-0119">+1 866-531-0119</a>
                        <a href="mailto:info@sixtydayscreditrepair.com">info@sixtydayscreditrepair.com</a>
                    </div>
                    <ul class="footer-social">
                        <li class="footer-social-item">
                            <a href="#" class="footer-social-link">
                                <img src="images/facebook.svg" alt="facebook">
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a href="#" class="footer-social-link">
                                <img src="images/linkedin.svg" alt="linkedin">
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a href="#" class="footer-social-link">
                                <img src="images/instagram.svg" alt="instagram">
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a href="#" class="footer-social-link">
                                <img src="images/twitter.svg" alt="twitter">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="f-getin-touch">
                <div class="footer-getin-touch">
                    <h3 class="footer-menu-title">Newsletter</h3>
                    <form action="#" class="footer-newslatter">
                        <input type="email" name="email" id="email" placeholder="Your Email">
                        <button type="submit">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container f-copyright">
        <!-- <p class="ftr-txt"><a href="">Terms of Use</a> | <a href="">Privacy Policy</a> | <a href="">Sitemap</a></p> -->
        <p class="ftr-txt">Copyright &copy; 2022 60 Days Credit Repair. All rights reserved.</p>
    </div>
</footer>


<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery.scroller.js"></script>
<script type="text/javascript" src="js/bookmarkscroll.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $(".mob-mnu-ic, ul.mobilemenu li a").click(function (e) {
            $(".mobilemenu").slideToggle();
            $(".dl-trigger").toggleClass("dl-active");
        });
        $(".menu-list").scroller();

        $(".s6-slide").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            dots: false,
            autoplaySpeed: 11000,
            asNavFor: ".slider-nav",
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        autoplay: false,
                    },
                },
            ],
        });

        $(".slider-nav").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: ".s6-slide",
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            arrows: false,

            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $(document).scroll(function () {
            if ($(this).scrollTop() > 20) {
                $(".mobilemenu").addClass("mobimenu-top");
            } else {
                $(".mobilemenu").removeClass("mobimenu-top");
            }

            if ($(this).scrollTop() > 40) {
                $(".top-fix-bar").addClass("fixed-nav");
            } else {
                $(".top-fix-bar").removeClass("fixed-nav");
            }

            /*var $elem = $('.footer');
                  var $window = $(window);

                  var docViewTop = $window.scrollTop();
                  var docViewBottom = docViewTop + $window.height();

                  var elemTop = $elem.offset().top;
                  var elemBottom = elemTop + $elem.height();

                  if (elemTop >= (docViewBottom + 20) || (elemTop + $('#call-btn').height()) >= (docViewBottom + 134) ) {
                  $('#call-btn').css('position', 'fixed');
                  } else {
                  $('#call-btn').css({'position' : 'relative'});

                  }*/
        });
        $.support.cors = true;
        $(".contact-form").on("submit", function (e) {
            e.preventDefault();
            $(".contact-form #submit").prop("disabled", true);
            $(".form-response").html("Registration in progress...").show();
            // $.ajax({
            //     type: 'POST',
            //     //url: '/ajax-contact.php',
            //     url: 'ajax-contact.rb',
            //     //url: 'http://localhost:3000/api/v1/leads?api_key=DoXV7rmzVJrpRQ1fucxxzg',
            //     // url: 'https://crm.sixtydaycreditrepair.com/api/v1/leads?api_key=ds06LFZq2J0c6sKb6wBwjg;referral_code=7e85d1f3fdb4',
            //     beforeSend: function(xhr){xhr.setRequestHeader('Access-Control-Allow-Origin', '*');},
            //     data: $(this).serialize(),
            //     success: function(response) {
            //         if (response.captcha_failed) {
            //             $('.form-response').html('The captcha failed. Please refresh and try again.').show();
            //         }
            //         if (response.success) {
            //             $('.form-response').html('Your registration is complete!').show();
            //         }
            //         else {
            //             $('.form-response').html('An error ocurred. Please try again.').show();
            //         }
            //         $('.contact-form #submit').prop("disabled", false);
            //     },
            //     error: function(response) {
            //     }
            // })
            var data = {
                lead: {
                    first_name: e.target.first_name.value,
                    last_name: e.target.last_name.value,
                    phone: e.target.phone.value,
                    email: e.target.email.value,
                },
            };
            $.ajax({
                method: "POST",
                crossDomain: true,
                //dataType: 'json',
                crossOrigin: true,
                async: true,
                contentType: "application/json",
                data: JSON.stringify(data),
                headers: {
                    "Access-Control-Allow-Methods": "*",
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers":
                        "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    "Content-Type": "application/json",
                },
                url: "/somephpfile.php",
                success: function (response, status) {
                    console.log("reponse", response);
                    console.log("reponse status", status);
                    if (status === "success") {
                        $(".form-response")
                            .html("Your registration is complete!")
                            .show();
                    }
                    $(".contact-form #submit").prop("disabled", false);
                    $(".contact-form").find("input[type=text]").val("");
                },
                error: function (request, status, error) {
                    console.log("There was an error: ", request.responseText);
                    console.log("status: ", status);
                    console.log("error: ", error);
                    $(".form-response")
                        .html("An error ocurred. Please try again.")
                        .show();
                },
            });
        });
    });
</script>
<script src="../www.google.com/recaptcha/api3cf0.js?render=6LchR9EUAAAAAGKsdeKjgrlpTLWwYlYLToaJrGWb"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha
            .execute("6LchR9EUAAAAAGKsdeKjgrlpTLWwYlYLToaJrGWb", {
                action: "application",
            })
            .then(function (token) {
                $(".contact-form").append(
                    `<input type="hidden" name="captcha_token" value="${token}">`
                );
            });
    });
</script>
<!-- Google Tag Manager -->
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-K8K2V7W");
</script>
<!-- End Google Tag Manager -->
</body>
</html>


