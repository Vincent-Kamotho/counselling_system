<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{url('admin/home')}}"><img src="{{asset('assets/admin/img/logo.png')}}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/dashboard.svg')}}" alt>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/2.svg')}}" alt>
                </div>
                <span>Appointment Requests</span>
            </a>
            <ul>
                <li><a href="{{url('admin/adult_appointments')}}">Adults</a></li>
                {{-- <li><a href="{{url('admin/children_appointments')}}">Children</a></li> --}}
                <li><a href="{{url('admin/business_appointments')}}">Business</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/3.svg')}}" alt>
                </div>
                <span>My Schedule</span>
            </a>
            <ul>
                <li><a href="{{url('admin/schedule')}}">Appointments</a></li>
                
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/4.svg')}}" alt>
                </div>
                <span>Staff</span>
            </a>
            <ul>
                <li><a href="{{url('admin/counsellors/list')}}">Counsellors</a></li>
                
            </ul>
        </li>
        {{-- <li class>
            <a href="Board.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/5.svg')}}" alt>
                </div>
                <span>Board</span>
            </a>
        </li>
        <li class>
            <a href="invoice.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/6.svg')}}" alt>
                </div>
                <span>Invoice</span>
            </a>
        </li>
        <li class>
            <a href="calender.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/7.svg')}}" alt>
                </div>
                <span>Calander</span>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/8.svg')}}" alt>
                </div>
                <span>Products</span>
            </a>
            <ul>
                <li><a href="Products.html">Products</a></li>
                <li><a href="Product_Details.html">Product Details</a></li>
                <li><a href="Cart.html">Cart</a></li>
                <li><a href="Checkout.html">Checkout</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/8.svg')}}" alt>
                </div>
                <span>Icons</span>
            </a>
            <ul>
                <li><a href="Fontawesome_Icon.html">Fontawesome Icon</a></li>
                <li><a href="themefy_icon.html">themefy icon</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/9.svg')}}" alt>
                </div>
                <span>Animations</span>
            </a>
            <ul>
                <li><a href="wow_animation.html">Animate</a></li>
                <li><a href="Scroll_Reveal.html">Scroll Reveal</a></li>
                <li><a href="tilt.html">Tilt Animation</a></li>
            </ul>
        </li> --}}

    </ul>
</nav>