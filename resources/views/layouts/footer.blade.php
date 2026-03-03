<!-- FOOTER -->
<footer class="footer">
        <div class="container">
            <h4 class="text-center mb-3">Follow Us on Social Media</h4>
            <div class="row footer_social_boxes mb-5 justify-content-center">
                <div class="col-md-3">
                    <a class="social_box" href="https://www.instagram.com/mkautoscarrental/" target="_blank">
                        <div class="icon_area">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                              <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                              <circle cx="12" cy="12" r="4"></circle>
                              <circle cx="17.5" cy="6.5" r="1"></circle>
                            </svg>
                        </div>
                        <div class="social_name">
                            <span class="on_platform">
                                @mkautoscarrental
                            </span>
                            <span class="platform_name">
                                Instagram
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="social_box" href="https://www.facebook.com/people/MK-Autos-Luxury-Car-Rental/100092581629200/" target="_blank">
                        <div class="icon_area">
                            <svg viewBox="0 0 24 24" fill="#fff">
                              <path d="M14 22v-8h3l1-4h-4V7.6c0-1.1.3-1.6 1.7-1.6H18V2h-3.2C11.7 2 10 3.9 10 7.2V10H7v4h3v8h4Z"></path>
                            </svg>
                        </div>
                        <div class="social_name">
                            <span class="on_platform">
                                @MKAutosLuxuryCarRental
                            </span>
                            <span class="platform_name">
                                Facebook
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="social_box" href="https://www.linkedin.com/company/mk-car-rental/" target="_blank">
                        <div class="icon_area">
                            <svg viewBox="0 0 24 24" fill="#fff">
                              <path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5ZM0 8h5v16H0V8Zm7.5 0h4.8v2.2h.1c.7-1.3 2.4-2.7 4.9-2.7 5.2 0 6.2 3.4 6.2 7.8V24h-5v-7.7c0-1.8 0-4.2-2.6-4.2-2.6 0-3 2-3 4.1V24h-5V8Z"/>
                            </svg>
                        </div>
                        <div class="social_name">
                            <span class="on_platform">
                                @MKAutosCarRental
                            </span>
                            <span class="platform_name">
                                LinkedIn
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="social_box" href="https://www.tiktok.com/@mkautoscarrentaldubai?_r=1&_t=ZS-93nrMGG2BnQ" target="_blank">
                        <div class="icon_area">
                            <svg viewBox="0 0 24 24" fill="#fff">
                              <path d="M15 3c.4 3 2.6 5.1 5 5.4V12c-2-.1-3.6-.8-5-2v6.2c0 3-2.4 5.4-5.4 5.4S4.2 19.2 4.2 16.2s2.4-5.4 5.4-5.4c.4 0 .8 0 1.2.1v3.1c-.3-.1-.6-.2-1-.2-1.3 0-2.4 1.1-2.4 2.4s1.1 2.4 2.4 2.4 2.4-1.1 2.4-2.4V3H15Z"></path>
                            </svg>
                        </div>
                        <div class="social_name">
                            <span class="on_platform">
                                @MKAutosCarRental
                            </span>
                            <span class="platform_name">
                                Tiktok
                            </span>
                        </div>
                    </a>
                </div>
                
                
            </div>
            <div class="row justify-content-between">
                <div class="col-md-2">
                    <a href="#" class="footerLogo">
                        <img src="{{asset('public/assets/images/logo-white.png')}}" class="logo" alt="img">
                    </a>
                    <div class="quickList mt-2">
                        <ul>
                            <li><a href="{{ route('our.fleet') }}">Our Cars</a></li>
                            <li><a href="{{ route('about.us') }}">About Us</a></li>
                            <li><a href="{{ route('blogs') }}">Blogs</a></li>
                            <li><a href="{{ route('contact.us') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="quickList">
                        <h2>Car Types</h2>
                        <ul>{!! \App\Helpers\GeneralHelper::getCarCategoriesMenuHtml() !!}</ul>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="quickList">
                        <h2>Inquiries & Support</h2>
                    </div>
                    <div class="calFoter">
                        <ul>
                            <li><strong>Phone:</strong> <a href="tel:+971 58 835 7508">+971 58 835 7508</a></li>
                            </li>
                            <li><strong>Location:</strong> 
                                <span>
                                    6B Street - Al Quoz - Al Quoz Industrial Area 3 - Dubai - United Arab Emirates
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="quickList mt-4">
                        <!--<h2>Certificates</h2>-->
                        <ul>
                            <li>
                                <a href="#" class="btn_flex">
                                    <img src="{{asset('public/assets/images/home/payment-logos.png')}}" alt="" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="quickList">
                        <h2>Working Hours</h2>
                        <ul class="footer_working_hours mb-2">
                            <li><a href="#">Available 24/7</a></li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.273098919537!2d55.20834928682699!3d25.12645627722342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d33debae7ab%3A0x6aeedd2874aaa3a3!2sMKAutos%20%7C%20Luxury%20%26%20Sports%20Car%20Rental%20Dubai!5e0!3m2!1sen!2s!4v1769543622937!5m2!1sen!2s" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
               
            </div>
            <div class="row footer_brands">
                <div class="col-12">
                    <div class="quickList">
                        <h2><span>Brands</span></h2>
                        <ul class="brands_list">
                            {!! \App\Helpers\GeneralHelper::getCarBrandsMenuHtml() !!}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row copyRight">
                <div class="col-md-12 text-center">
                    <p>© Copyright 2026 - MKAutos, Dubai. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>   
    <a href="https://wa.me/971588357508" target="_blank" class="whatsapp-float">
        <img src="{{asset('public/assets/images/WhatsApp.svg')}}" alt="WhatsApp" />
    </a>
     <a href="tel:+971588357508" target="_blank" class="whatsapp-float call-float">
        <img src="{{asset('public/assets/images/Phone_icon.png')}}" alt="Call" />
    </a>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/split-type@0.3.4/umd/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lenis@1.1.2/dist/lenis.min.js"></script>
    <script src="{{asset('public/assets/js/custom.min.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.quickList a').forEach(function (link) {
                if (link.textContent.trim() === 'View All') {
                    const li = link.closest('li');
                    if (li) {
                        li.style.display = 'none';
                    }
                }
            });
        });
        </script>
        @yield('scripts')
</body>
</html>