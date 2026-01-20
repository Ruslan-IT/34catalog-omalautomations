<footer class="footer-area bg-img">
    <div  class="footer-top bg-img pt-82 pb-50"

         style="background-image: url({{ asset('assets/img/bg-image/footer-bg.jpg') }})">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-55">
                            <h4>Services</h4>
                        </div>
                        <div class="footer-content">
                            <ul>

                                <li><a href="contacts">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="footer-widget">
                        <div class="footer-logo mb-43">
                            <a href="/">

                                <img style="width: 150px;" src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                        <div class="footer-addres">
                            <p>{{ $siteSettings->address }}</p>

                            <div class="footer-phn-email">
                                <a href="tel:{{ preg_replace('/\s+/', '', $siteSettings->phone) }}">
                                    {{ $siteSettings->phone }}
                                </a>
                            </div>

                            <div class="footer-phn-email">
                                <a href="mailto:{{ $siteSettings->email }}">
                                    {{ $siteSettings->email }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright text-center">
                <p>Copyright ©<a href="#">Omalautomations</a>. All Right Reserved.</p>
            </div>
        </div>
    </div>
</footer>
