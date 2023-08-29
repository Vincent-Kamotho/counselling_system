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
    <script nonce="a42097db-e173-4f0f-90c7-2b6972d98072">
        (function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="tel:0708683439" class="mr-2"><span class="fa fa-phone mr-1"></span> +254 708 683 439</a>
                        <a href="mailto:vincentwambuguvw97@gmail.com"><span class="fa fa-paper-plane mr-1"></span> <span class="__cf_email__">vincentwambuguvw97@gmail.com</span></a>
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index-2.html">Counselor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{url('counsellor')}}" class="nav-link">Counselor</a></li>
                    <li class="nav-item"><a href="{{url('services')}}" class="nav-link">Services</a></li>
                    <li class="nav-item active"><a href="{{url('pricing')}}" class="nav-link">Pricing</a></li>
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
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index-2.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Pricing <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Pricing &amp; Plans</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Price &amp; Plans</span>
                    <h2>Affordable Packages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate d-flex">
                    <div class="block-7 w-100">
                        <div class="text-center">
                            <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mo</sub></span>
                            <span class="excerpt d-block">For Adults</span>
                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Individual Counseling</li>
                                <li><span class="fa fa-check mr-2"></span>Couples Therapy</li>
                                <li><span class="fa fa-check mr-2"></span>Family Therapy</li>
                            </ul>
                            <a href="{{url('adults/adult_counselling')}}" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate d-flex">
                    <div class="block-7 w-100">
                        <div class="text-center">
                            <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mo</sub></span>
                            <span class="excerpt d-block">For Children</span>
                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Counseling for Children</li>
                                <li><span class="fa fa-check mr-2"></span>Behavioral Management</li>
                                <li><span class="fa fa-check mr-2"></span>Educational Counseling</li>
                            </ul>
                            <a href="{{url('children/children_counselling')}}" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate d-flex">
                    <div class="block-7 w-100">
                        <div class="text-center">
                            <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mo</sub></span>
                            <span class="excerpt d-block">For Business</span>
                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Consultancy Services</li>
                                <li><span class="fa fa-check mr-2"></span>Employee Counseling</li>
                                <li><span class="fa fa-check mr-2"></span>Psychological Assessment</li>
                            </ul>
                            <a href="{{url('business/business_counselling')}}" class="btn btn-primary d-block px-2 py-3">Get Started</a>
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
                            <li><a href="{{url('/')}}"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                            <li><a href="{{url('about')}}"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="{{url('counsellor')}}"><span class="fa fa-chevron-right mr-2"></span>Counselor</a></li>
                            <li><a href="{{url('services')}}"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                            <li><a href="{{url('pricing')}}"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li>
                            <li><a href="{{url('contact')}}"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="tel:0708683439"><span class="icon fa fa-phone"></span><span class="text">+254 708 683 439</span></a></li>
                                <li><a href="mailto:vincentwambuguvw97@gmail.com"><span class="icon fa fa-paper-plane pr-4"></span><span
                                            class="text"><span class="__cf_email__"
                                                data-cfemail="e68f888089a69f89939482898b878f88c885898b">vincentwambuguvw97@gmail.com</span></span></a>
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
        data-cf-beacon='{"rayId":"7f7020f10aae0db9","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>