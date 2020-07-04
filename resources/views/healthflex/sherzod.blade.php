@extends('healthflex.master')
@section('title', 'healthflex.shortcodes')
@section('content')


    <div class="head_panel">
        <div
            style="background-image: url(https://plethorathemes.com/healthflex/wp-content/uploads/2013/06/doctor_blue_left.jpg)"
            class="full_width_photo   ">
                    <div class="content"></div>
            <div class="banner-wrapper">
                <div class=" text-center" style="color: #2f2f2f;">
                    <h2 style="color: #f0f0f0">O'zbekiston boylab Eng zo'r oliy toifali Shifokorlarni toping.</h2>
                </div>

                <div class="row">
                <!-- Search -->
                <div class="search-box pb-4 pb-lg-4 pb-md-4 pb-sm-4">

                    <form action="/search" method="GET">
                        @csrf
                        <div class="form-group search-location">
                            <input type="text" name="cityKey" id="cityKey" value="{{ request()->input('cityKey') }}"
                                   class="form-control" list="shahar" placeholder="Shaharni izlash">
                            <datalist id="shahar">
                                <option>Toshkent</option>
                                <option>Samarqand</option>
                                <option>Farg'ona</option>
                                <option>Namangan</option>
                                <option>Andijon</option>
                                <option>Qo'qon</option>
                                <option>Nukus</option>
                                <option>Urganch</option>
                                <option>Termiz</option>
                                <option>Guliston</option>
                                <option>Navoiy</option>
                                <option>Marg'ilon</option>
                                <option>Shahrisabz</option>
                                <option>Qarshi</option>
                                <option>Kattaqurg'on</option>
                            </datalist>
                            <h4 style="color: #f0f0f0">Sizga kerak bo'lgan Shaharni kiriting yoki tanlang</h4>
                        </div>
                        <div class="form-group search-info">

                            <input type="text" name="key" id="key" value="{{ request()->input('key') }}"
                                   class="form-control" placeholder="Search Doctors, Clinics, Hospitals">
                            <h4 style="color: #f0f0f0">masalan: Stomatolog yoki 5 chi shahar klinikasi</h4>

                        </div>
                        <button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i>
                            <span>Qidirish</span></button>
                    </form>
                </div>
                <!-- /Search -->
                </div>

            </div>
            <div class="hgroup">

                <div class="title diagonal-bgcolor-trans   ">
                    <div class="container">
                        <h1>Mamlakatimizdagi oliy toifali doktorlar</h1>
                    </div>
                </div>

                <div class="subtitle body-bg_section   ">
                    <div class="container">
                        <p>Featured by Department</p>
                    </div>

                </div>

            </div>


        </div>
    </div>


    <div class="main foo" data-colorset="foo">
        <section class="vc_row wpb_row vc_row-fluid">

            @include('healthflex.include.sherzod')


        </section>

        <section
            style="background-image: url('https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/help_desk.jpg')"
            class="vc_row wpb_row vc_row-fluid secondary_section transparent_film bgimage bg_vcenter">
            <div class="container">
                <div class="row">
                    <div class="wpb_column vc_column_container col-sm-12">
                        <div class="wpb_wrapper">
                            <div class="section_header subtitle_bottom   fancy text-center">

                                <h2>Zudlik bilan yordam kerakmi??</h2>


                                <p>Qung'iroq qiling <b> (+555) 959-595-959</b> yoki bu yerdagi formani to'ldiring...</p>
                            </div>
                            <div class="plethora_button wpb_content_element   text-center ">
                                <a href="http://plethorathemes.com/healthflex/appointment-booking/" debug
                                   class=" btn btn-success with-icon " title="" target="_self">


                                    Appointment Form
                                    <i class="wmi icon-i-registration"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <script type="text/html" id="wpb-modifications"></script>
    <script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>

    @include('healthflex.alljavascriptfiles')



@endsection
