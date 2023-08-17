<!DOCTYPE html>
<html lang="en">


<head>
    <title>Counselor Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('assets/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script nonce="60988fcd-92b4-4ca6-bdda-59df2392efa7">
        (function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +254 708 683 439</a>
                        <a href="#"><span class="fa fa-paper-plane mr-1"></span> <span class="__cf_email__">vincentwambuguvw97@gmail.com</span></a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">Counselor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{url('counsellor')}}" class="nav-link">Counselor</a></li>
                    <li class="nav-item active"><a href="{{url('services')}}" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="{{url('pricing')}}" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_5.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{url('/')}}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Services <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Services</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Services</span>
                    <h2>How It Works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-calendar"></span>
                            </div>
                        </div>
                        <h2>Make Schedule</h2>
                        <p>Plan with us on when we can start assisting you through our qualified personnel.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-qa"></span>
                            </div>
                        </div>
                        <h2>Start Discussion</h2>
                        <p>Share with us on what you would like us to assist you with. We are here for you.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-checklist"></span>
                            </div>
                        </div>
                        <h2>Enjoy Plan</h2>
                        <p>Enjoy the results of a successful interaction with us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Services</span>
                    <h2>We Can Help You With This Situation</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img" style="background-image: url(assets/images/services-1.jpg);"></div>
                        <div class="text">
                            <h2>Relation Problem</h2>
                            <p>Discover renewed ronnection and harmony with our relationship support services. We specialize in offering compassionate and effective solutions for individuals and couples facing relationship challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img" style="background-image: url(assets/images/services-2.jpg);"></div>
                        <div class="text">
                            <h2>Couples Counseling</h2>
                            <p>Rediscover Connection and Strengthen Your Bond with Our Couples Counseling Services. We are your dedicated partner in nurturing and revitalizing relationships through our specialized couples counseling services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img order-md-last" style="background-image: url(assets/images/services-3.jpg);"></div>
                        <div class="text">
                            <h2>Depression Treatment</h2>
                            <p>Discover Hope and Healing on Your Journey to Overcoming Depression with Our Specialized Treatment Services. We are a place of support, understanding, and transformation for individuals seeking effective treatment for depression.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img order-md-last" style="background-image: url(assets/images/services-4.jpg);"></div>
                        <div class="text">
                            <h2>Family Problem</h2>
                            <p>Guidance and Reconciliation for Families Facing Challenges – Your Path to Healing Starts Here. We are a haven of support and understanding for families navigating through difficult times.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img" style="background-image: url(assets/images/services-5.jpg);"></div>
                        <div class="text">
                            <h2>Personal Problem</h2>
                            <p>Empowering You to Overcome Personal Challenges and Rediscover Your Strength – Your Journey to Transformation Starts Here. We are a haven of support and guidance for individuals facing personal struggles and seeking positive change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img" style="background-image: url(assets/images/services-6.jpg);"></div>
                        <div class="text">
                            <h2>Business Problem</h2>
                            <p>Navigating Business Challenges with Expert Guidance – Your Blueprint to Success Begins Here. We are your trusted ally in overcoming the hurdles and complexities of the business world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Explore</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>What We Do</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Legal</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Join us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy &amp; Policy</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Company</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span
                                            class="text"><span class="__cf_email__"
                                                data-cfemail="1871767e775861776d6a7c7775797176367b7775">[email&#160;protected]</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script src="{{asset('assets/js/google-map.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"7f7020eeeefe11a6","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>