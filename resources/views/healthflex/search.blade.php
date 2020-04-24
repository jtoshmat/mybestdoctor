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
                        <h2 class="breadcrumb-title">Uzbekiston bo'ylab: 198 ta Stamatolog topildi</h2>
                    </div>
                    <div class="col-md-4 col-12 d-md-block d-none">
                        <div class="sort-by">
                            <span class="sort-title">Sortlash</span>
                            <span class="sortby-fliter">
									<select class="select">
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
                <form action="">
                    <div class="form-group search-location">
                        <input type="text" class="form-control" list="shahar" placeholder="Shaharni izlash">
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
                        <input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals">
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
                                        <h4 class="doc-name">Dr. Ruby Perrin</h4>
                                        <p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                        <h5 class="doc-department"><img
                                                src="/healthflex_files/assets/img/specialities/specialities-05.png"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i>Toshkent, Uzb
                                            </p>

                                        </div>
                                        <div class="clinic-services">
                                            <span> Oqartirish</span>
                                            <span>Koronka urnatish</span>
                                            <span>Implant</span>
                                            <span>Va Boshqalar</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clinic-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 98%</li>
                                            <li><i class="far fa-comment"></i> 17 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Toshkent, UZB</li>
                                            <li><i class="far fa-money-bill-alt"></i>$10dan - $1000gacha <i
                                                    class="fas fa-info-circle" data-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="apt-btn" href="#">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <img src="/healthflex_files/assets/img/doctors/doctor-thumb-03.jpg"
                                             class="img-fluid" alt="User Image">
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name">Dr. Darren Elder</h4>
                                        <p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                                        <h5 class="doc-department"><img
                                                src="/healthflex_files/assets/img/specialities/specialities-05.png"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Samarkand, UZB
                                            </p>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Tish tozalash</span>
                                            <span> Oqartirish</span>
                                            <span> Plombalash</span>
                                            <span>Nerv olish</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 100%</li>
                                            <li><i class="far fa-comment"></i> 35 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Samarqand, UZB</li>
                                            <li><i class="far fa-money-bill-alt"></i> $50 - $300 <i
                                                    class="fas fa-info-circle" data-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="apt-btn" href="">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <img src="/healthflex_files/assets/img/doctors/doctor-thumb-04.jpg"
                                             class="img-fluid" alt="User Image">
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name">Dr. Darren Elder</h4>
                                        <p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                                        <h5 class="doc-department"><img
                                                src="/healthflex_files/assets/img/specialities/specialities-05.png"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Samarkand, UZB
                                            </p>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Tish tozalash</span>
                                            <span> Oqartirish</span>
                                            <span> Plombalash</span>
                                            <span>Va Boshqalar</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 100%</li>
                                            <li><i class="far fa-comment"></i> 35 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Samarqand, UZB</li>
                                            <li><i class="far fa-money-bill-alt"></i> $50 - $300 <i
                                                    class="fas fa-info-circle" data-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="apt-btn" href="booking.html">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <img src="/healthflex_files/assets/img/doctors/doctor-thumb-06.jpg"
                                             class="img-fluid" alt="User Image">
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name">Dr. Darren Elder</h4>
                                        <p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                                        <h5 class="doc-department"><img
                                                src="/healthflex_files/assets/img/specialities/specialities-05.png"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Samarkand, UZB
                                            </p>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Tish tozalash</span>
                                            <span> Oqartirish</span>
                                            <span> Plombalash</span>
                                            <span>Va Boshqalar</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 100%</li>
                                            <li><i class="far fa-comment"></i> 35 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Samarqand, UZB</li>
                                            <li><i class="far fa-money-bill-alt"></i> $50 - $300 <i
                                                    class="fas fa-info-circle" data-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="apt-btn" href="booking.html">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <img src="/healthflex_files/assets/img/doctors/doctor-thumb-07.jpg"
                                             class="img-fluid" alt="User Image">
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name">Dr. Jessica</h4>
                                        <p class="doc-speciality">Maxillofacial Surgery</p>
                                        <h5 class="doc-department"><img
                                                src="/healthflex_files/assets/img/specialities/specialities-05.png"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Samarkand, UZB
                                            </p>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Tish tozalash</span>
                                            <span> Oqartirish</span>
                                            <span> Plombalash</span>
                                            <span>Va Boshqalar</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 100%</li>
                                            <li><i class="far fa-comment"></i> 35 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Samarqand, UZB</li>
                                            <li><i class="far fa-money-bill-alt"></i> $50 - $300 <i
                                                    class="fas fa-info-circle" data-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="apt-btn" href="booking.html">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

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
