@extends('healthflex.master')
@section('title', 'Shortcodes')
@section('content')

        <div class="head_panel">
            <div
                style="background-image: url(https://plethorathemes.com/healthflex/wp-content/uploads/2013/06/doctor_blue_left.jpg)"
                class="full_width_photo   ">
                <div class="content"></div>
                    <div class="banner-wrapper">
                        <div class=" text-center" style="color: #2f2f2f;">
                            <h2 style="color: #f0f0f0;">O'zbekiston boylab Eng zo'r oliy toifali Shifokorlarni toping.</h2>
                        </div>

                        <!-- Search -->
                        <div class="search-box">

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

                <div class="hgroup">

                    <div class="title diagonal-bgcolor-trans   ">
                        <div class="container">
                            <h1>Mamlakatimizdagi oliy toifali doktorlar</h1>
                        </div>
                    </div>

                    <div class="subtitle body-bg_section   ">
                        <div class="pull-right">
                                <div class="sort-by">
                                    <span class="sort-title" style="color: #2f2f2f">Sortlash</span>
                                    <span class="sortby-fliter">
									<select name="sortBy" class="select">
										<option>tanlang</option>
										<option class="sorting" value="rate">rate</option>
										<option class="sorting">Popular</option>
										<option class="sorting">Ohirgi</option>
									</select>
								</span>
                                </div>
                        </div>
                        <div class="container">

                            <p class="breadcrumb-title">O'zbekistonda {{ Request::get('cityKey') }} bo'ylab: {{ Request::get('key') ?? 'Doktorlar yoki Klinikalar' }}
                                topildi</p>

                        </div>

                    </div>

                </div>


            </div>
        </div>


        <div class="main foo" data-colorset="foo">
            <section class="vc_row wpb_row vc_row-fluid">
                <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                        <!-- Search Filter -->
                        <div class="card search-filter">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Qidiruvni Filterlash</h4>
                            </div>
                            <div class="card-body">

                                <div class="filter-widget">
                                    <h4>Select Specialist</h4>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist" checked>
                                            <span class="checkmark"></span> Urolog
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist" checked>
                                            <span class="checkmark"></span> Neurolog
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Stamatolog
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Orthopedik
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Kardiolog
                                        </label>
                                    </div>

                                </div>
                                <div class="btn-search">
                                    <button type="button" class="btn btn-block">Izlash</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Search Filter -->

                    </div>

                    <div class="col-md-12 col-lg-8 col-xl-9">

                        <!-- Doctor Widget -->
                        @foreach($doctors as $doctor)
                            <div class="card">
                                <div class="card-body">
                                    <div class="doctor-widget">
                                        <div class="doc-info-left">
                                            <div class="doctor-img">
                                                <img src="/healthflex_files/assets/img/doctors/doctor-thumb-03.jpg"
                                                     class="img-fluid" alt="User Image">
                                            </div>
                                            <div class="doc-info-cont">
                                                <h4 class="doc-name">{{ $doctor->doctors_name }}</h4>
                                                <p class="doc-speciality">{{ $doctor->speciality_type }}</p>
                                                <h5 class="doc-department"><img
                                                        src="/healthflex_files/assets/img/specialities/specialities-05.png"
                                                        class="img-fluid"
                                                        alt="Speciality">{{ $doctor->speciality_title }}</h5>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span
                                                        class="d-inline-block average-rating">{{ $doctor->rate }}</span>
                                                </div>
                                                <div class="clinic-details">

                                                    <p class="doc-location"><i
                                                            class="fas fa-map-marker-alt"></i> {{ $doctor->location }}
                                                    </p>

                                                </div>
                                                <div class="clinic-services">
                                                    <span>{{ $doctor->spec_desc1 }}</span>
                                                    <span> {{ $doctor->spec_desc2 }}</span>
                                                    <span> {{ $doctor->spec_desc3 }}</span>
                                                    <span>{{ $doctor->spec_desc4 }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="doc-info-right">
                                            <div class="clini-infos">
                                                <ul>
                                                    <li><i class="far fa-thumbs-up"></i> 100%</li>
                                                    <li><i class="far fa-comment"></i> 35 Feedback</li>
                                                    <li><i class="fas fa-map-marker-alt"></i> {{ $doctor->location }}
                                                    </li>
                                                    <li><i class="far fa-money-bill-alt"></i> {{ $doctor->price_range }}
                                                        <i
                                                            class="fas fa-info-circle" data-toggle="tooltip"
                                                            title="Lorem Ipsum"></i></li>
                                                </ul>
                                            </div>
                                            <div class="clinic-booking">
                                                <a class="apt-btn" href="khursand">Book Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- /Doctor Widget -->


                        <div class="load-more text-center">
                            <a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
                        </div>
                    </div>
                </div>
                </div>

            </section>>

        </div>






    @include('healthflex.alljavascriptfiles')
    <!-- doccure/search.html  30 Nov 2019 04:12:16 GMT -->

@endsection
