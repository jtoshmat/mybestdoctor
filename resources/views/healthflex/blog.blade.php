@extends('healthflex.master')
@section('title', 'Blog')
@section('content')
    <body class="blog theme-healthflex woocommerce-no-js wpb-js-composer js-comp-ver-6.1 vc_responsive sticky_header ">
    <div class="overflow_wrapper">
        <div class="header "><div class="topbar vcenter transparent">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 col-sm-6 hidden-xs hidden-sm text-left">
                            <div class="top_menu_container">
                                <ul id="menu-top-bar" class="top_menu hover_menu"><li id="menu-item-1774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1774"><a title="FAQ" href="/faq/">FAQ</a></li>
                                    <li id="menu-item-1775" class="hidden menu-item menu-item-type-post_type menu-item-object-page menu-item-1775"><a title="Fees &amp; Insurance" href="/fees-insurance/">Fees &#038; Insurance</a></li>
                                    <li id="menu-item-1773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1773"><a title="Request an Appointment" href="/appointment-booking/">Request an Appointment</a></li>
                                    <li id="menu-item-2027" class="more_demos_top_bar menu-item menu-item-type-custom menu-item-object-custom menu-item-2027"><a title="More Demos" target="_blank" href="/all-demos/">More Demos</a></li>
                                </ul>          </div>
                        </div>

                        <div class="col-md-6 col-sm-6 hidden-xs hidden-sm text-right">
                            <i class="fa fa-ambulance"></i> Emergency Line <strong>(+555) 959-595-959</strong>            </div>


                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- .topbar -->
            <div class="mainbar  color">
                <div class="container">
                    <div class="logo">
                        <a href="/" class="brand">
                            <img src="https://plethorathemes.com/healthflex/wp-content/uploads/2013/06/healthflex_logo_color.png" alt="HealthFlex">
                        </a>
                    </div>      	<a title="" href="#" class="social_links"><i class="fa fa-share-alt"></i></a>
                    <div class="team_social"><a href="#" title="Twitter" target="_self"><i class="fa fa fa-twitter"></i></a><a href="#" title="Facebook" target="_self"><i class="fa fa fa-facebook"></i></a><a href="#" title="Google+" target="_self"><i class="fa fa fa-google-plus"></i></a><a href="#" title="LinkedIn" target="_self"><i class="fa fa fa-linkedin"></i></a><a href="#" title="Skype" target="_self"><i class="fa fa fa-skype"></i></a><a href="#" title="Send Us An Email" target="_self"><i class="fa fa fa-envelope"></i></a></div>
                    <div class="menu_container"><span class="close_menu">&times;</span>
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
                            <li id="menu-item-1763" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-236 current_page_item current_page_parent menu-item-1763 active"><a title="Blog" href="/blog/">Blog</a></li>
                            <li id="menu-item-1764" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1764"><a title="Contact" href="/contact/">Contact</a></li>
                            <li id="menu-item-1765" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1765"><a title="Shop" href="/shop/">Shop</a></li>
                            <li id="menu-item-1672" class="two-column dropleft menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1672 lihasdropdown"><a title="More" href="#">More  </a>
                                <ul role="menu" class=" menu-dropdown">
                                    <li id="menu-item-1772" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1772"><a title="Free Offer Landing Page" href="/free-checkup-offer/">Free Offer Landing Page</a></li>
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

        <div class="head_panel">
            <div style="background-image: url(https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/slider-12.jpg)" class="full_width_photo   ">


                <div class="hgroup">

                    <div class="title  secondary_section transparent_film text-left">
                        <div class="container">
                            <h1>The Blog</h1>
                        </div>
                    </div>

                    <div class="subtitle  skincolored_section transparent_film text-left">
                        <div class="container">
                            <p>Medical Articles &amp; News</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>        <div class="brand-colors"> </div>
        <div class="main foo" data-colorset="foo"><section class="sidebar_on padding_top_half" ><div class="container"><div class="row"><div class="col-sm-8 col-md-8 main_col ">  <div class="post-grid classic">
                                <div class="row">
                                    <div class="col-md-12">
                                        <article id="post-1557" class="post post-1557 type-post status-publish format-standard has-post-thumbnail sticky hentry category-news tag-exercise tag-fitness tag-health tag-tips">
                                            <div class="post_headings">
                                                <h2 class="post_title"><a href="/blog/2015/11/23/daily-exercise-is-essential-for-your-health/">Daily Exercise is essential</a></h2>          </div>
                                            <div class="post_figure_and_info">
                                                <div class="post_sub"><span class="post_info post_date"><i class="fa fa-calendar"></i> November 23, 2015</span><a href="/blog/author/cleanstart/" title="HealthX"><span class="post_info post_author">HealthX</span></a><a href="/blog/category/news/" title="View all posts in category: News"><span class="post_info post_categories">News</span></a></div>        <a href="/blog/2015/11/23/daily-exercise-is-essential-for-your-health/" title="Daily Exercise is essential"><figure class="stretchy_wrapper ratio_2-1" style="background-image: url(&#039;https://plethorathemes.com/healthflex/wp-content/uploads/2015/11/woman_running-1024x541.jpg&#039;)"><img src="https://plethorathemes.com/healthflex/wp-content/uploads/2015/11/woman_running-1024x541.jpg" alt="Daily Exercise is essential"></figure></a>      </div>
                                            <p>When was the last time you went out for a 30min walk? Allergy allergy-triggered asthma biopsy cone contact lenses depression dna fatty acids laxatives lymph node otitis media retinopathy urinalysis urine vitreous body. Allergy-triggered asthma blood bank blood type carbohydrate carbohydrate counting cardiologist cough diaphragm diarrhea ear canal epiglottis gingivitis histamine hyperglycemia immune system insulin insulin [&hellip;]</p>      <p><a href="/blog/2015/11/23/daily-exercise-is-essential-for-your-health/" class="btn btn-primary">Read More</a></p>
                                        </article>
                                    </div>

                                    <div class="col-md-12">
                                        <article id="post-258" class="post post-258 type-post status-publish format-standard has-post-thumbnail hentry category-news tag-article tag-fitness tag-health tag-medical">
                                            <div class="post_headings">
                                                <h2 class="post_title"><a href="/blog/2015/09/30/medical-advice/">Medical Advice for all ages and sexes</a></h2>          </div>
                                            <div class="post_figure_and_info">
                                                <div class="post_sub"><span class="post_info post_date"><i class="fa fa-calendar"></i> September 30, 2015</span><a href="/blog/author/plethorathemes/" title="plethorathemes"><span class="post_info post_author">plethorathemes</span></a><a href="/blog/category/news/" title="View all posts in category: News"><span class="post_info post_categories">News</span></a><a href="/blog/2015/09/30/medical-advice/#post_comments"><span class="post_info post_comment"><i class="fa fa-comments"></i>1 </span></a></div>        <a href="/blog/2015/09/30/medical-advice/" title="Medical Advice for all ages and sexes"><figure class="stretchy_wrapper ratio_2-1" style="background-image: url(&#039;https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-pills.jpg&#039;)"><img src="https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-pills.jpg" alt="Medical Advice for all ages and sexes"></figure></a>      </div>
                                            <p>How often does a post start with all these words? Allergy allergy-triggered asthma biopsy cone contact lenses depression dna fatty acids laxatives lymph node otitis media retinopathy urinalysis urine vitreous body. Allergy-triggered asthma blood bank blood type carbohydrate carbohydrate counting cardiologist cough diaphragm diarrhea ear canal epiglottis gingivitis histamine hyperglycemia immune system insulin insulin pump involuntary [&hellip;]</p>      <p><a href="/blog/2015/09/30/medical-advice/" class="btn btn-primary">Read More</a></p>
                                        </article>
                                    </div>

                                    <div class="col-md-12">
                                        <article id="post-267" class="post post-267 type-post status-publish format-standard has-post-thumbnail hentry category-news tag-diabetes tag-diet tag-fitness tag-sugar tag-tips">
                                            <div class="post_headings">
                                                <h2 class="post_title"><a href="/blog/2015/09/30/diabetes-diet-and-food-tips/">Diabetes Diet and Healthy Food Tips</a></h2>          </div>
                                            <div class="post_figure_and_info">
                                                <div class="post_sub"><span class="post_info post_date"><i class="fa fa-calendar"></i> September 30, 2015</span><a href="/blog/author/plethorathemes/" title="plethorathemes"><span class="post_info post_author">plethorathemes</span></a><a href="/blog/category/news/" title="View all posts in category: News"><span class="post_info post_categories">News</span></a></div>        <a href="/blog/2015/09/30/diabetes-diet-and-food-tips/" title="Diabetes Diet and Healthy Food Tips"><figure class="stretchy_wrapper ratio_2-1" style="background-image: url(&#039;https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-salad.jpg&#039;)"><img src="https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-salad.jpg" alt="Diabetes Diet and Healthy Food Tips"></figure></a>      </div>
                                            <p>Let&#8217;s talk about what is health and how can this article help you. When was the last time you went out for a 30min walk? Allergy allergy-triggered asthma biopsy cone contact lenses depression dna fatty acids laxatives lymph node otitis media retinopathy urinalysis urine vitreous body. Allergy-triggered asthma blood bank blood type carbohydrate carbohydrate counting cardiologist cough [&hellip;]</p>      <p><a href="/blog/2015/09/30/diabetes-diet-and-food-tips/" class="btn btn-primary">Read More</a></p>
                                        </article>
                                    </div>

                                    <div class="col-md-12">
                                        <article id="post-378" class="post post-378 type-post status-publish format-video hentry category-videos-fg tag-clinic tag-health tag-video post_format-post-format-video">
                                            <div class="post_headings">
                                                <h2 class="post_title"><a href="/blog/2015/09/29/meet-our-veterinaries/">Labs Walkthrough</a></h2>          </div>
                                            <div class="post_figure_and_info">
                                                <figure class="video_iframe stretchy_wrapper ratio_2-1" style=""><iframe style="border:none;" title="What is Narcolepsy?" src="https://player.vimeo.com/video/87309145?dnt=1&amp;app_id=122963" width="500" height="281"  allow="autoplay; fullscreen" allowfullscreen></iframe></figure>      </div>
                                            <div class="post_figure_and_info">
                                                <div class="post_sub"><span class="post_info post_date"><i class="fa fa-calendar"></i> September 29, 2015</span><a href="/blog/author/plethorathemes/" title="plethorathemes"><span class="post_info post_author">plethorathemes</span></a><a href="/blog/category/videos-fg/" title="View all posts in category: Educational Videos"><span class="post_info post_categories">Educational Videos</span></a></div>      </div>
                                            <p>Health care (or healthcare) is the diagnosis, treatment, and prevention of disease, illness, injury, and other physical and mental impairments in human beings.</p>      <p><a href="/blog/2015/09/29/meet-our-veterinaries/" class="btn btn-primary">Read More</a></p>
                                        </article>
                                    </div>

                                    <div class="col-md-12">
                                        <article id="post-373" class="post post-373 type-post status-publish format-image has-post-thumbnail hentry category-images-fg tag-article tag-diet tag-health tag-tips post_format-post-format-image">
                                            <div class="post_headings">
                                                <h2 class="post_title"><a href="/blog/2015/09/29/dietary-advice/">Dietary Advice</a></h2>          </div>
                                            <div class="post_figure_and_info">
                                                <div class="post_sub"><span class="post_info post_date"><i class="fa fa-calendar"></i> September 29, 2015</span><a href="/blog/author/plethorathemes/" title="plethorathemes"><span class="post_info post_author">plethorathemes</span></a><a href="/blog/category/images-fg/" title="View all posts in category: Medical Articles"><span class="post_info post_categories">Medical Articles</span></a></div>        <a href="/blog/2015/09/29/dietary-advice/" title="Dietary Advice"><figure class="stretchy_wrapper ratio_2-1" style="background-image: url(&#039;https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-salad.jpg&#039;)"><img src="https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-salad.jpg" alt="Dietary Advice"></figure></a>      </div>
                                            <p>Health care (or healthcare) is the diagnosis, treatment, and prevention of disease, illness, injury, and other physical and mental impairments in human beings.</p>      <p><a href="/blog/2015/09/29/dietary-advice/" class="btn btn-primary">Read More</a></p>
                                        </article>
                                    </div>

                                    <div class="col-md-12">
                                        <article id="post-369" class="post post-369 type-post status-publish format-video has-post-thumbnail hentry category-videos-fg post_format-post-format-video">
                                            <div class="post_headings">
                                                <h2 class="post_title"><a href="/blog/2015/09/29/practitioners-advice/">Practitioner&#8217;s Advice</a></h2>          </div>
                                            <div class="post_figure_and_info">
                                                <figure class="video_iframe stretchy_wrapper ratio_2-1" style=""><iframe style="border:none;" title="7 Counterintuitive Health Tips!" width="500" height="281" src="https://www.youtube.com/embed/30uTT3SsPzA?feature=oembed"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>      </div>
                                            <div class="post_figure_and_info">
                                                <div class="post_sub"><span class="post_info post_date"><i class="fa fa-calendar"></i> September 29, 2015</span><a href="/blog/author/plethorathemes/" title="plethorathemes"><span class="post_info post_author">plethorathemes</span></a><a href="/blog/category/videos-fg/" title="View all posts in category: Educational Videos"><span class="post_info post_categories">Educational Videos</span></a></div>      </div>
                                            <p>The practice of medicine entails more than just good communication, but good communication is essential to effective practice.</p>      <p><a href="/blog/2015/09/29/practitioners-advice/" class="btn btn-primary">Read More</a></p>
                                        </article>
                                    </div>

                                    <div class="col-md-12">
                                        <article id="post-271" class="post post-271 type-post status-publish format-video hentry category-videos-fg post_format-post-format-video">
                                            <div class="post_headings">
                                                <h2 class="post_title"><a href="/blog/2015/09/24/educational-video/">EDUCATIONAL VIDEO</a></h2>          </div>
                                            <div class="post_figure_and_info">
                                                <figure class="video_iframe stretchy_wrapper ratio_2-1" style=""><iframe style="border:none;" title="Women&#039;s Health Program" src="https://player.vimeo.com/video/121395439?dnt=1&amp;app_id=122963" width="500" height="281"  allow="autoplay; fullscreen" allowfullscreen></iframe></figure>      </div>
                                            <div class="post_figure_and_info">
                                                <div class="post_sub"><span class="post_info post_date"><i class="fa fa-calendar"></i> September 24, 2015</span><a href="/blog/author/plethorathemes/" title="plethorathemes"><span class="post_info post_author">plethorathemes</span></a><a href="/blog/category/videos-fg/" title="View all posts in category: Educational Videos"><span class="post_info post_categories">Educational Videos</span></a></div>      </div>
                                            <p><a href="/blog/2015/09/24/educational-video/" class="btn btn-primary">Read More</a></p>
                                        </article>
                                    </div>

                                    <div class="col-md-12">
                                        <article id="post-382" class="post post-382 type-post status-publish format-link hentry category-links-fg post_format-post-format-link">
                                            <div class="post_headings">
                                                <h2 class="post_title"><a href="/blog/2015/09/20/top-health-tips/">Top Health Tips</a></h2>          </div>
                                            <div class="post_figure_and_info">
                                                <div class="post_sub"><span class="post_info post_date"><i class="fa fa-calendar"></i> September 20, 2015</span><a href="/blog/author/plethorathemes/" title="plethorathemes"><span class="post_info post_author">plethorathemes</span></a><a href="/blog/category/links-fg/" title="View all posts in category: Usefull info Links"><span class="post_info post_categories">Usefull info Links</span></a></div>              </div>
                                            <p>Health care (or healthcare) is the diagnosis, treatment, and prevention of disease, illness, injury, and other physical and mental impairments in human beings.</p>      <p><a href="/blog/2015/09/20/top-health-tips/" class="btn btn-primary">Read More</a></p>
                                        </article>
                                    </div>
                                </div>
                            </div></div><div id="sidebar" class="col-sm-4 col-md-4"><!-- ===================== MULTIBOX ========================-->
                            <div class="widget plethora-multibox-widget  bg_vcenter    " >


                                <div class=""><!-- ========================== TEASER BOX ==========================-->
                                    <div class="teaser_box wpb_content_element text-left  skincolored_section    with_button    ">

                                        <div class="figure ">


                                            <a href="http://plethorathemes.com/healthflex/visit-guide/" debug title="" target="">


                                                <div class="figure  stretchy_wrapper ratio_16-9" style="background-image:url('https://plethorathemes.com/healthflex/wp-content/uploads/2013/06/health_clinic_outside.jpg')"></div>





                                            </a>

                                        </div>



                                        <div class="content text-left boxed  with_button ">

                                            <div class="hgroup">
                                                <h4 class="neutralize_links">
                                                    Patient & Visitor Guide
                                                </h4>
                                                <p>Plan your visit to our Clinic</p>
                                            </div>



                                            <div class="link centered">
                                                <a href="http://plethorathemes.com/healthflex/visit-guide/"  target="" class="btn btn-xs btn-secondary"><strong>More</strong></a>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- END======================= TEASER BOX ==========================--></div>

                            </div>

                            <!-- END================== INFOBOX ========================--><!-- ===================== MULTIBOX ========================-->
                            <div class="widget plethora-multibox-widget dark_section bg_vcenter transparent_film boxed_plus  "  style="background-image:url(https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-salad.jpg);">


                                <div class=""><p style="font-size:1.4em;">Ever wondered what a Health Coach does?</p>
                                    <a href="/health-coach">Visit our Health Coach Demo!</a></div>

                            </div>

                            <!-- END================== INFOBOX ========================--><aside id="search-2" class="widget widget_search">                         <form method="get" name="s" id="s" action="https://plethorathemes.com/healthflex/">                              <div class="row">                                <div class="col-lg-12">                                    <div class="input-group">                                        <input name="s" id="search" class="form-control" type="text" placeholder="Search">                                        <span class="input-group-btn">                                          <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>                                        </span>                                    </div>                                </div>                              </div>                         </form></aside><aside id="categories-3" class="widget widget_categories"><h4>Categories</h4>		<ul>
                                    <li class="cat-item cat-item-9"><a href="/blog/category/videos-fg/" title="Category description for &quot;Educational Videos&quot;">Educational Videos</a>
                                    </li>
                                    <li class="cat-item cat-item-6"><a href="/blog/category/images-fg/" title="Category description for &quot;Medical Articles&quot;">Medical Articles</a>
                                    </li>
                                    <li class="cat-item cat-item-8"><a href="/blog/category/news/" title="Category description for &quot;News&quot;">News</a>
                                    </li>
                                    <li class="cat-item cat-item-7"><a href="/blog/category/links-fg/" title="Category description for &quot;Usefull info Links&quot;">Usefull info Links</a>
                                    </li>
                                </ul>
                            </aside><aside id="archives-3" class="widget widget_archive"><h4>Archives</h4>		<ul>
                                    <li><a href='https://plethorathemes.com/healthflex/blog/2015/11/'>November 2015</a></li>
                                    <li><a href='https://plethorathemes.com/healthflex/blog/2015/09/'>September 2015</a></li>
                                </ul>
                            </aside><aside id="text-1" class="widget widget_text"><h4>Text Widget</h4>			<div class="textwidget">Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters tum aecenas faucib sadips amets.</div>
                            </aside><aside id="tag_cloud-1" class="widget widget_tag_cloud"><h4>Tag Cloud</h4><div class="tagcloud"><a href="/blog/tag/article/" class="tag-cloud-link tag-link-10 tag-link-position-1" style="font-size: 14.3pt;" aria-label="Article (2 items)">Article</a>
                                    <a href="/blog/tag/clinic/" class="tag-cloud-link tag-link-11 tag-link-position-2" style="font-size: 8pt;" aria-label="Clinic (1 item)">Clinic</a>
                                    <a href="/blog/tag/diabetes/" class="tag-cloud-link tag-link-12 tag-link-position-3" style="font-size: 8pt;" aria-label="Diabetes (1 item)">Diabetes</a>
                                    <a href="/blog/tag/diet/" class="tag-cloud-link tag-link-13 tag-link-position-4" style="font-size: 14.3pt;" aria-label="Diet (2 items)">Diet</a>
                                    <a href="/blog/tag/exercise/" class="tag-cloud-link tag-link-14 tag-link-position-5" style="font-size: 8pt;" aria-label="Exercise (1 item)">Exercise</a>
                                    <a href="/blog/tag/fitness/" class="tag-cloud-link tag-link-15 tag-link-position-6" style="font-size: 18.5pt;" aria-label="Fitness (3 items)">Fitness</a>
                                    <a href="/blog/tag/health/" class="tag-cloud-link tag-link-16 tag-link-position-7" style="font-size: 22pt;" aria-label="Health (4 items)">Health</a>
                                    <a href="/blog/tag/medical/" class="tag-cloud-link tag-link-17 tag-link-position-8" style="font-size: 8pt;" aria-label="Medical (1 item)">Medical</a>
                                    <a href="/blog/tag/sugar/" class="tag-cloud-link tag-link-18 tag-link-position-9" style="font-size: 8pt;" aria-label="Sugar (1 item)">Sugar</a>
                                    <a href="/blog/tag/tips/" class="tag-cloud-link tag-link-19 tag-link-position-10" style="font-size: 18.5pt;" aria-label="Tips (3 items)">Tips</a>
                                    <a href="/blog/tag/video/" class="tag-cloud-link tag-link-20 tag-link-position-11" style="font-size: 8pt;" aria-label="Video (1 item)">Video</a></div>
                            </aside><aside id="calendar-1" class="widget widget_calendar"><h4>Calendar</h4><div id="calendar_wrap" class="calendar_wrap"><table id="wp-calendar">
                                        <caption>February 2020</caption>
                                        <thead>
                                        <tr>
                                            <th scope="col" title="Monday">M</th>
                                            <th scope="col" title="Tuesday">T</th>
                                            <th scope="col" title="Wednesday">W</th>
                                            <th scope="col" title="Thursday">T</th>
                                            <th scope="col" title="Friday">F</th>
                                            <th scope="col" title="Saturday">S</th>
                                            <th scope="col" title="Sunday">S</th>
                                        </tr>
                                        </thead>

                                        <tfoot>
                                        <tr>
                                            <td colspan="3" id="prev"><a href="/blog/2015/11/">&laquo; Nov</a></td>
                                            <td class="pad">&nbsp;</td>
                                            <td colspan="3" id="next" class="pad">&nbsp;</td>
                                        </tr>
                                        </tfoot>

                                        <tbody>
                                        <tr>
                                            <td colspan="5" class="pad">&nbsp;</td><td>1</td><td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
                                        </tr>
                                        <tr>
                                            <td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td>
                                        </tr>
                                        <tr>
                                            <td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td>
                                        </tr>
                                        <tr>
                                            <td>24</td><td>25</td><td>26</td><td>27</td><td id="today">28</td><td>29</td>
                                            <td class="pad" colspan="1">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table></div></aside></div></div></div></section></div>		<footer class="sep_angled_positive_top separator_top ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6"><!-- ========================== WIDGET ABOUT US ==========================-->

                        <aside id="plethora-aboutus-widget-1" class="widget aboutus-widget">

                            <div class="pl_about_us_widget  ">

                                <p><img src="https://plethorathemes.com/healthflex/wp-content/uploads/2013/06/healthflex_logo_white.png" alt=""  style="max-width:"></p>


                                <p>Premium Wordpress Theme mainly Medical Oriented but so flexible that lets you build various layouts for any "Health & Beauty" related business!</p>


                                <p class='contact_detail'><a href='tel:(+30) 210 1234567'><i class='fa fa-phone'></i></a><span><a href='tel:(+30) 210 1234567'>(+30) 210 1234567</a></span></p>



                                <p class='contact_detail'><a href='mailto:info@plethorathemes.com'><i class='fa fa-envelope'></i></a><span><a href='mailto:info@plethorathemes.com'>info@plethorathemes.com</a></span></p>




                                <p class="contact_detail">
                                    <a href='https://www.google.com/maps/place/79+Folsom+St,+San+Francisco,+CA+94105,+USA/@37.7902642,-122.3929651,17z/data=!3m1!4b1!4m2!3m1!1s0x8085807aad0a9e0b:0x378e593dff7a2ac3?hl=en' target='_blank'>
                                        <i class='fa fa-location-arrow'></i>
                                    </a>
                                    <span><a href='https://www.google.com/maps/place/79+Folsom+St,+San+Francisco,+CA+94105,+USA/@37.7902642,-122.3929651,17z/data=!3m1!4b1!4m2!3m1!1s0x8085807aad0a9e0b:0x378e593dff7a2ac3?hl=en' target='_blank'>79 Folsom Ave, San Francisco, CA 94107</a></span>
                                </p>






                            </div>

                        </aside>

                        <!-- END======================= WIDGET ABOUT US ==========================--></div>
                    <div class="col-sm-6 col-md-3"><aside id="nav_menu-2" class="widget widget_nav_menu"><h4>Quick Links</h4><div class="menu-quick-links-container"><ul id="menu-quick-links" class="menu"><li id="menu-item-1784" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1784"><a href="/services/">All Medical Services</a></li>
                                    <li id="menu-item-1785" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1785"><a href="/appointment-booking/">Appointment Booking</a></li>
                                    <li id="menu-item-1786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1786"><a href="/faq/">FAQ</a></li>
                                    <li id="menu-item-1787" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1787"><a href="/fees-insurance/">Fees &amp; Insurance</a></li>
                                    <li id="menu-item-1788" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1788"><a href="/health-library/">Health Library A-Z</a></li>
                                    <li id="menu-item-1755" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1755"><a href="/shop/">Shop</a></li>
                                    <li id="menu-item-1791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1791"><a href="/free-checkup-offer/">Free Checkup Offer</a></li>
                                </ul></div></aside><!-- ========================== WIDGET ABOUT US ==========================-->

                        <aside id="plethora-aboutus-widget-2" class="widget aboutus-widget">

                            <div class="pl_about_us_widget  ">








                                <p class="social">

                                    <a href='#' target='_blank' title="Twitter"><i class='fa fa-twitter'></i></a>
                                    <a href='#' target='_blank' title="Facebook"><i class='fa fa-facebook'></i></a>
                                    <a href='#' target='_blank' title="Google+"><i class='fa fa-google-plus'></i></a>
                                    <a href='#' target='_blank' title="LinkedIn"><i class='fa fa-linkedin'></i></a>
                                    <a href='#' target='_blank' title="Skype"><i class='fa fa-skype'></i></a>
                                    <a href='#' target='_blank' title="Send Us An Email"><i class='fa fa-envelope'></i></a>
                                </p>



                            </div>

                        </aside>

                        <!-- END======================= WIDGET ABOUT US ==========================--></div>
                    <div class="col-sm-6 col-md-3"><!-- ===================== LATEST NEWS: MUSTACHE ========================-->

                        <aside id="plethora-latestnews-widget-1" class="widget latestnews-widget">

                            <div class="pl_latest_news_widget">
                                <h4>Latest News </h4>
                                <ul class="media-list">

                                    <li class="media">

                                        <a href="/blog/2015/11/23/daily-exercise-is-essential-for-your-health/" class="media-photo" style="background-image:url(' https://plethorathemes.com/healthflex/wp-content/uploads/2015/11/woman_running-150x150.jpg ')"></a>

                                        <h5 class="media-heading">
                                            <a href="/blog/2015/11/23/daily-exercise-is-essential-for-your-health/">Daily Exercise is essential</a>
                                            <small>Nov 23</small>
                                        </h5>
                                        <p>When was the last time you went out for a...</p>
                                    </li>


                                    <li class="media">

                                        <a href="/blog/2015/09/30/medical-advice/" class="media-photo" style="background-image:url(' https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-pills-150x150.jpg ')"></a>

                                        <h5 class="media-heading">
                                            <a href="/blog/2015/09/30/medical-advice/">Medical Advice for all ages and sexes</a>
                                            <small>Sep 30</small>
                                        </h5>
                                        <p>How often does a post start with all these words? Allergy...</p>
                                    </li>


                                    <li class="media">

                                        <a href="/blog/2015/09/30/diabetes-diet-and-food-tips/" class="media-photo" style="background-image:url(' https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-salad-150x150.jpg ')"></a>

                                        <h5 class="media-heading">
                                            <a href="/blog/2015/09/30/diabetes-diet-and-food-tips/">Diabetes Diet and Healthy Food Tips</a>
                                            <small>Sep 30</small>
                                        </h5>
                                        <p>Let&#8217;s talk about what is health and how can this...</p>
                                    </li>

                                </ul>
                            </div>

                        </aside>

                        <!-- END================== LATEST NEWS: MUSTACHE ========================--></div>					</div>
            </div>		</footer>
        <div class="copyright dark_section">
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
        </div></div><a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>	<script type="text/javascript">
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
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/parallax/parallax.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/assets/js/libs/bootstrap.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/easing/easing.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/wow/wow.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/conformity/dist/conformity.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/assets/js/libs/particlesjs/particles.min.js?ver=5.3.2'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var themeConfig = {"GENERAL":{"debug":false},"NEWSLETTERS":{"messages":{"successMessage":"SUCCESS","errorMessage":"ERROR","required":"This field is required.","remote":"Please fix this field.","url":"Please enter a valid URL.","date":"Please enter a valid date.","dateISO":"Please enter a valid date ( ISO ).","number":"Please enter a valid number.","digits":"Please enter only digits.","creditcard":"Please enter a valid credit card number.","equalTo":"Please enter the same value again.","name":"Please specify your name","email":{"required":"We need your email address to contact you","email":"Your email address must be in the format of name@domain.com"}}},"PARTICLES":{"enable":true,"color":"#bcbcbc","opacity":0.8,"bgColor":"transparent","bgColorDark":"transparent","colorParallax":"#4D83C9","bgColorParallax":"transparent"}};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/assets/js/theme.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-includes/js/wp-embed.min.js?ver=5.3.2'></script>
    <!-- TEMPLATE PART: /themes/healthflex/index.php --></body>
@endsection
