<?php $logoimg=get_header_image() ?>   

    <footer class="footer-section  th-background-image">
        <div class="container">
            <div class="footer-top">
            <div class="row g-lg-4 gy-5 justify-content-center">
              <div class="col-lg-5 col-md-6 col-sm-6">
                <div id="custom_footer_widget-3" class="footer-widget widget_custom_footer_widget">
                    <div class="footer-logo">
                    <a href="<?php get_bloginfo('wpurl'); ?>">
                        <img class="footer-img-fluid" src="<?php echo $logoimg;?>" alt="logo">
                    </a>
                    </div>
                    <h3>Want to Take Tour Packages?</h3>
                    <a href="/contact" class="primary-btn1">Book A Tour</a>
                </div>
                </div>
              <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-lg-center justify-content-sm-start">
                <div id="nav_menu-3" class="footer-widget widget_nav_menu">
                    <div class="widget-title">
                    <h5>Quick Link</h5>
                    </div>
                    <div class="menu-footer-menu-container">
                        <?php 
                            wp_nav_menu(array('theme_location'=> 'footer-menu','menu_class'=>'footer-nav'))
                        ?>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-lg-center justify-content-md-start">
                <div id="company_info_widget-3" class="footer-widget widget_company_info_widget">
                    <div class="single-contact mb-30">
                    <div class="widget-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <g clip-path="url(#clip0_1139_225)">
                            <path d="M17.5107 13.2102L14.9988 10.6982C14.1016 9.80111 12.5765 10.16 12.2177 11.3262C11.9485 12.1337 11.0514 12.5822 10.244 12.4028C8.44974 11.9542 6.0275 9.62168 5.57894 7.73772C5.3098 6.93027 5.84808 6.03314 6.65549 5.76404C7.82176 5.40519 8.18061 3.88007 7.28348 2.98295L4.77153 0.470991C4.05382 -0.156997 2.97727 -0.156997 2.34929 0.470991L0.644745 2.17553C-1.0598 3.96978 0.82417 8.72455 5.04066 12.941C9.25716 17.1575 14.0119 19.1313 15.8062 17.337L17.5107 15.6324C18.1387 14.9147 18.1387 13.8382 17.5107 13.2102Z"></path>
                        </g>
                        </svg>
                        <h5>More Inquiry</h5>
                    </div>
                    <a href="tel:+918527087050">+91 852 708 7050</a>
                    </div>
                    <div class="single-contact mb-35">
                    <div class="widget-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <g clip-path="url(#clip0_1139_218)">
                            <path d="M6.56266 13.2091V16.6876C6.56324 16.8058 6.60099 16.9208 6.67058 17.0164C6.74017 17.112 6.83807 17.1832 6.9504 17.22C7.06274 17.2569 7.18382 17.2574 7.29648 17.2216C7.40915 17.1858 7.5077 17.1155 7.57817 17.0206L9.61292 14.2516L6.56266 13.2091ZM17.7639 0.104306C17.6794 0.044121 17.5799 0.00848417 17.4764 0.00133654C17.3729 -0.00581108 17.2694 0.015809 17.1774 0.0638058L0.302415 8.87631C0.205322 8.92762 0.125322 9.00617 0.0722333 9.1023C0.0191447 9.19844 -0.00472288 9.30798 0.00355981 9.41749C0.0118425 9.52699 0.0519151 9.6317 0.11886 9.71875C0.185804 9.80581 0.276708 9.87143 0.380415 9.90756L5.07166 11.5111L15.0624 2.96856L7.33141 12.2828L15.1937 14.9701C15.2717 14.9963 15.3545 15.0051 15.4363 14.996C15.5181 14.9868 15.5969 14.9599 15.6672 14.9171C15.7375 14.8743 15.7976 14.8167 15.8433 14.7482C15.8889 14.6798 15.9191 14.6021 15.9317 14.5208L17.9942 0.645806C18.0094 0.543093 17.996 0.438159 17.9554 0.342598C17.9147 0.247038 17.8485 0.164569 17.7639 0.104306Z"></path>
                        </g>
                        </svg>
                        <h5>Send Mail</h5>
                    </div>
                    <a href="mailto:info@travelopediaindia.com">info@travelopediaindia.com</a>
                    </div>
                    <div class="single-contact">
                    <div class="widget-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <g clip-path="url(#clip0_1137_183)">
                            <path d="M14.3281 3.08241C13.2357 1.19719 11.2954 0.0454395 9.13767 0.00142383C9.04556 -0.000474609 8.95285 -0.000474609 8.86071 0.00142383C6.70303 0.0454395 4.76268 1.19719 3.67024 3.08241C2.5536 5.0094 2.52305 7.32408 3.5885 9.27424L8.05204 17.4441C8.05405 17.4477 8.05605 17.4513 8.05812 17.4549C8.25451 17.7963 8.60632 18 8.99926 18C9.39216 18 9.74397 17.7962 9.94032 17.4549C9.94239 17.4513 9.9444 17.4477 9.9464 17.4441L14.4099 9.27424C15.4753 7.32408 15.4448 5.0094 14.3281 3.08241ZM8.99919 8.15627C7.60345 8.15627 6.46794 7.02076 6.46794 5.62502C6.46794 4.22928 7.60345 3.09377 8.99919 3.09377C10.3949 3.09377 11.5304 4.22928 11.5304 5.62502C11.5304 7.02076 10.395 8.15627 8.99919 8.15627Z"></path>
                        </g>
                        </svg>
                        <h5>Address</h5>
                    </div>
                    <address>Sadh Nagar, Palam Colony, New Delhi -110045</address>
                    </div>
                </div>
              </div>
            </div>
            </div>
            <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-12 d-flex flex-md-row flex-column align-items-center justify-content-md-between justify-content-center flex-wrap gap-3">
                <ul class="social-list">
                    <li>
                    <a href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </li>
                    <li>
                    <a href="https://twitter.com/">
                        <i class="fab fa-twitter"></i>
                    </a>
                    </li>
                    <li>
                    <a href="https://www.linkedin.com/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    </li>
                    <li>
                    <a href="https://www.instagram.com/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    </li>
                </ul>
                <div class="footer-right">
                    <p>©Copyright 2024 TravelOPedia</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </footer>
</main>

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
============================================ -->

    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
</body>

</html>