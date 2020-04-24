@extends('healthflex.master')
@section('title', 'Free checkup order')
@section('content')
    <body class="page-template-default page page-id-634 theme-healthflex woocommerce-no-js wpb-js-composer js-comp-ver-6.1 vc_responsive sticky_header transparent_header ">
    <div class="overflow_wrapper">
        <div class="header transparent">  <div class="mainbar  color">
                <div class="container">
                    <div class="logo">
                        <a href="/" class="brand">
                            <img src="https://plethorathemes.com/healthflex/wp-content/uploads/2013/06/healthflex_logo_color.png" alt="HealthFlex">
                        </a>
                    </div>                   <div class="menu_container"><span class="close_menu">&times;</span>
                        <ul id="menu-primary-menu" class="main_menu hover_menu"><li id="menu-item-1789" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1789"><a title="Home" href="/">Home</a></li>
                            <li id="menu-item-1673" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1673 lihasdropdown"><a title="Our Clinic" href="#">Our Clinic  </a>
                                <ul role="menu" class=" menu-dropdown">
                                    <li id="menu-item-1758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1758"><a title="About Us" href="/about-us/">About Us</a></li>
                                    <li id="menu-item-1769" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1769"><a title="Our Staff" href="/our-staff/">Our Staff</a></li>
                                    <li id="menu-item-1759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1759"><a title="Careers" href="/careers/">Careers</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-1760" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1760"><a title="Departments" href="/departments/">Departments</a></li>
                            <li id="menu-item-1771" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1771"><a title="Services" href="/services/">Services</a></li>
                            <li id="menu-item-1674" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1674 lihasdropdown"><a title="Info" href="#">Info  </a>
                                <ul role="menu" class=" menu-dropdown">
                                    <li id="menu-item-1792" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1792"><a title="The Patient&#039;s &amp; Visitor&#039;s Guide" href="/visit-guide/">The Patient&#8217;s &#038; Visitor&#8217;s Guide</a></li>
                                    <li id="menu-item-1767" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767"><a title="Appointment Booking" href="/appointment-booking/">Appointment Booking</a></li>
                                    <li id="menu-item-1762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1762"><a title="Health Plans" href="/health-plans/">Health Plans</a></li>
                                    <li id="menu-item-1761" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1761"><a title="Health Library A-Z" href="/health-library/">Health Library A-Z</a></li>
                                    <li id="menu-item-1756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1756"><a title="Fees &amp; Insurance" href="/fees-insurance/">Fees &#038; Insurance</a></li>
                                    <li id="menu-item-1768" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768"><a title="FAQ" href="/faq/">FAQ</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-1763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1763"><a title="Blog" href="/blog/">Blog</a></li>
                            <li id="menu-item-1764" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1764"><a title="Contact" href="/contact/">Contact</a></li>
                            <li id="menu-item-1765" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1765"><a title="Shop" href="/shop/">Shop</a></li>
                            <li id="menu-item-1672" class="two-column dropleft menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1672 lihasdropdown"><a title="More" href="#">More  </a>
                                <ul role="menu" class=" menu-dropdown">
                                    <li id="menu-item-1772" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-634 current_page_item menu-item-1772 active"><a title="Free Offer Landing Page" href="/free-checkup-offer/">Free Offer Landing Page</a></li>
                                    <li id="menu-item-1770" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1770"><a title="A Department&#039;s Page" href="/departments/cosmetic-surgery/">A Department&#8217;s Page</a></li>
                                    <li id="menu-item-1790" class="menu-item menu-item-type-post_type menu-item-object-terminology menu-item-1790"><a title="Knowledgebase Article" href="/alzheimers-disease">Knowledgebase Article</a></li>
                                    <li id="menu-item-1793" class="menu-item menu-item-type-post_type menu-item-object-profile menu-item-1793"><a title="A Doctor&#039;s Profile" href="/blog/profile/elias-carson/">A Doctor&#8217;s Profile</a></li>
                                    <li id="menu-item-1766" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766"><a title="Shortcodes" href="/shortcodes/">Shortcodes</a></li>
                                    <li id="menu-item-1675" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1675"><a title="Error 404 page" href="/healthflex/404">Error 404 page</a></li>
                                    <li id="menu-item-1816" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1816"><a title="All Other Demos &lt;span class=&quot;label label-danger&quot;&gt; NEW! &lt;/span&gt;" target="_blank" href="/all-demos/">All Other Demos <span class="label label-danger"> NEW! </span></a></li>
                                    <li id="menu-item-1918" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1918"><a title="Buy this Theme!" target="_blank" href="https://1.envato.market/1VoM9">Buy this Theme!</a></li>
                                    <li id="menu-item-1754" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1754"><a title="Documentation" href="http://doc.plethorathemes.com/healthflex/">Documentation</a></li>
                                    <li id="menu-item-1676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1676"><a title="Support" href="http://plethorathemes.com/support/">Support</a></li>
                                    <li id="menu-item-2044" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2044"><a title="Admin Demo &lt;span class=&quot;label label-danger&quot;&gt; NEW! &lt;/span&gt;" href="/healthflex-admin">Admin Demo <span class="label label-danger"> NEW! </span></a></li>
                                </ul>
                            </li>
                        </ul>        </div>

                    <label class="mobile_collapser"><span>MENU</span></label> <!-- Mobile menu title -->
                </div>
            </div>

        </div>

        <div class="brand-colors"> </div>
        <div class="main foo" data-colorset="foo">
            <section style="background-image: url('https://plethorathemes.com/healthflex/wp-content/uploads/2013/06/doctor_blue_left.jpg')" class="vc_row wpb_row vc_row-fluid skincolored_section no_padding full_height vertical_center bgimage parallax-window bg_vcenter">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column vc_column_container col-sm-12">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space"   style="height: 128px"><span class="vc_empty_space_inner"></span></div><div class="section_header subtitle_bottom   fancy text-center">

                                    <h1 style="text-align: center">Request a Free Checkup!</h1>


                                    <p >Medicus Clinic offers a full free checkup for all</p>
                                </div><div class="vc_row wpb_row vc_inner vc_row-fluid folded_section">            <div class="wpb_column vc_column_container col-sm-6 dark_section transparent_film boxed_plus same_height_col">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space"   style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h3>Book you Free checkup Now!</h3>
                                                    <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                    <ul>
                                                        <li>Height / weight check</li>
                                                        <li>Blood pressure check</li>
                                                        <li>Cholesterol level check</li>
                                                        <li>Blood sugar test</li>
                                                        <li>Throat check</li>
                                                        <li>Electrocardiogram</li>
                                                        <li>Chest x-ray</li>
                                                    </ul>
                                                    <h4>Call Us at (+555) 567 894 for more info</h4>

                                                </div>
                                            </div>
                                            <div class="vc_empty_space"   style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container col-sm-6 dark_section transparent_film boxed_plus same_height_col">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space"   style="height: 32px"><span class="vc_empty_space_inner"></span></div><div role="form" class="wpcf7" id="wpcf7-f263-p634-o1" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response"></div>
                                                <form action="/healthflex/free-checkup-offer/#wpcf7-f263-p634-o1" method="post" class="wpcf7-form demo" novalidate="novalidate">
                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="263" />
                                                        <input type="hidden" name="_wpcf7_version" value="5.1.6" />
                                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f263-p634-o1" />
                                                        <input type="hidden" name="_wpcf7_container_post" value="634" />
                                                    </div>
                                                    <p><span class="wpcf7-form-control-wrap menu-919"><select name="menu-919" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="Department">Department</option><option value="Pathology">Pathology</option><option value="X-Ray">X-Ray</option><option value="Gynecology">Gynecology</option></select></span> </p>
                                                    <p><span class="wpcf7-form-control-wrap fullname"><input type="text" name="fullname" value="" size="40" class="wpcf7-form-control wpcf7-form-control form-control wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Full Name" /></span></p>
                                                    <p><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-form-control form-control wpcf7-form-control form-control wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span></p>
                                                    <p><span class="wpcf7-form-control-wrap appointmentdate"><input type="date" name="appointmentdate" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" placeholder="Appointment Date" /></span></p>
                                                    <p><span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="4" class="wpcf7-form-control wpcf7-form-control wpcf7-form-control form-control" aria-invalid="false" placeholder="Message"></textarea></span> </p>
                                                    <p><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit btn btn-primary" /></p>
                                                    <div class="wpcf7-response-output wpcf7-display-none"></div></form></div><div class="vc_empty_space"   style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <div id="new_comment">
                <div class="container">        <div class="new_comment">
                    </div>
                </div>      </div>

        </div>            <div class="copyright dark_section">
            <div class="dark_section transparent_film">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            Copyright &copy;2016 all rights reserved                           </div>
                        <div class="col-sm-6 col-md-6 text-right">
                            Designed by <a href="http://plethorathemes.com" target="_blank">Plethora Themes</a>                           </div>
                    </div>
                </div>
            </div>
        </div></div><a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a><script type="text/html" id="wpb-modifications"></script>	<script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {"apiSettings":{"root":"https:\/\/plethorathemes.com\/healthflex\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.6'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {"ajax_url":"\/healthflex\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/healthflex\/?wc-ajax=%%endpoint%%"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.9.2'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {"ajax_url":"\/healthflex\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/healthflex\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_7ddcbb30211a49c6daec1afbe3946776","fragment_name":"wc_fragments_7ddcbb30211a49c6daec1afbe3946776","request_timeout":"5000"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.9.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/totop/jquery.ui.totop.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/assets/js/libs/bootstrap.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/easing/easing.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/wow/wow.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/conformity/dist/conformity.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/assets/js/libs/particlesjs/particles.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/parallax/parallax.min.js?ver=5.3.2'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var themeConfig = {"GENERAL":{"debug":false,"onePagerScrollSpeed":300},"NEWSLETTERS":{"messages":{"successMessage":"SUCCESS","errorMessage":"ERROR","required":"This field is required.","remote":"Please fix this field.","url":"Please enter a valid URL.","date":"Please enter a valid date.","dateISO":"Please enter a valid date ( ISO ).","number":"Please enter a valid number.","digits":"Please enter only digits.","creditcard":"Please enter a valid credit card number.","equalTo":"Please enter the same value again.","name":"Please specify your name","email":{"required":"We need your email address to contact you","email":"Your email address must be in the format of name@domain.com"}}},"PARTICLES":{"enable":true,"color":"#bcbcbc","opacity":0.8,"bgColor":"transparent","bgColorDark":"transparent","colorParallax":"#4D83C9","bgColorParallax":"transparent"}};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/assets/js/theme.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-includes/js/wp-embed.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.1'></script>
    <!-- TEMPLATE PART: /themes/healthflex/page.php --></body>
@endsection
