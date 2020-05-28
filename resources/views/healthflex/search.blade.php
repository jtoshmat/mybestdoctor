@extends('healthflex.master')
@section('title', 'Shortcodes')
@section('content')
    <!DOCTYPE html>
<html lang="en">


<body>

<!-- Main Wrapper -->
<div class="container-fluid" style="transform: none">

    <!-- Page Content -->
    <div class="content">

        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/sherzod">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Search</li>
                            </ol>
                        </nav>
<<<<<<< HEAD
                        @php $searchNum = 0; @endphp
                        @foreach($doctorlist as $doctor)
                           @php $searchNum++; @endphp
                            @endforeach

                        <h2 class="breadcrumb-title">Uzbekiston bo'ylab: {{$searchNum}} ta Stamatolog topildi</h2>
=======

                        <h2 class="breadcrumb-title">Uzbekiston bo'ylab: {{ $doctors->count() }} ta Stamatolog topildi</h2>

>>>>>>> fc202b03c5ea6e2c3ae31c9b2ffa9d80145ff364
                    </div>
                    <div class="col-md-4 col-12 d-md-block d-none">
                        <div class="sort-by">
                            <span class="sort-title">Sortlash</span>
                            <span class="sortby-fliter">
									<select class="select filter-select" data-column="0">
										<option>tanlang</option>
										<option class="sorting">Rating</option>
										<option class="sorting">Popular</option>
										<option class="sorting">Ohirgi</option>
									</select>
								</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-wrapper">
            <div class="banner-header text-center">
                <p>Uzbekiston boylab Eng zo'r oliy toifali Shifokorlarni toping.</p>
            </div>

            <!-- Search -->
            <div class="search-box">
                <form action="search" method="get">
                    <div class="form-group search-location">
                        <input type="text" name="cityKey" value="{{request()->input('cityKey')}}" class="form-control" list="shahar" placeholder="Shaharni izlash">
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
                        <span class="form-text">Sizga kerak bo'lgan Shaharni kiriting yoki tanlang</span>
                    </div>
                    <div class="form-group search-info">
                        <input type="text" class="form-control" name="key" value="{{request()->input('key')}}" placeholder="Search Doctors, Clinics, Hospitals">
                        <span class="form-text">masalan: Stomatolog yoki 5 chi shahar klinikasi</span>
                    </div>
                    <button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Qidirish</span></button>
                </form>
            </div>
            <!-- /Search -->

        </div>


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

                    @foreach($doctors as $doctor)


                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <img src="/healthflex_files/assets/img/doctors/doctor-thumb-01.jpg"
                                             class="img-fluid" alt="User Image">
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name">{{$doctor->doctors_name}}</h4>
                                        <p class="doc-speciality">{{$doctor->speciality_type}}</p>
                                        <h5 class="doc-department"><img
                                                src="/healthflex_files/assets/img/specialities/specialities-05.png"
                                                class="img-fluid" alt="Speciality">{{$doctor->speciality_title}}</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i>{{$doctor->location}}
                                            </p>

                                        </div>
                                        <div class="clini-services">
                                            <span> {{$doctor->spec_desc1}}</span>
                                            <span>{{$doctor->spec_desc2}}</span>
                                            <span>{{$doctor->spec_desc3}}</span>
                                            <span>{{$doctor->spec_desc4}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i>{{$doctor->rate}}</li>
                                            <li><i class="far fa-comment"></i> 17 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> {{$doctor->location}}</li>
                                            <li><i class="far fa-money-bill-alt"></i>{{$doctor->price_range}}<i
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
                    <!-- /Doctor Widget -->
                    @endforeach



                    <div class="load-more text-center">
                        <a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->

</div>

</body>
@include('healthflex.allcssfiles')
@include('healthflex.alljavascriptfiles')
<!-- doccure/search.html  30 Nov 2019 04:12:16 GMT -->
</html>
@endsection
