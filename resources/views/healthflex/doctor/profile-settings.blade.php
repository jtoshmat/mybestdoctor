@extends('healthflex.doctor.layout')
@section('sub-content')

{{--    Profile Settings--}}
<div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
    <div class="row">

    </div>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4>Profilingiz</h4>
                    <p class="text-muted"><span style="font-family: 'courier'">Bu yerda profilingizni uzgartirish kiritishingiz mumkin</span></p>

                </div>

            </div>
            <div class="card-body">
                <div class="row gutters">
                    <form enctype="multipart/form-data" action="profile-settings" method="POST">
                        @csrf
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Ism Sharifingiz</label>
                                <input type="text" class="form-control pr-5 @error('name') has-error @enderror" name="name" id="fullName"
                                       placeholder="Ism sharifingizni kiriting" autocomplete="name">
                                @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fullName">Email</label>
                                <input type="email" class="form-control pr-5 @error('email') has-error @enderror" name="email" id="eMail"
                                       placeholder="Email'ingizni kiriting">

                            </div>
                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input type="text" class="form-control @error('phone') has-error @enderror" name="phone" id="phone"
                                       placeholder="Tel raqamingizni kiriting">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Upload profile picture</label>
                                    <input type="file" class="form-control" name="avatar">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="addRess">Address</label>
                                <input type="text" class="form-control @error('address') has-error @enderror" name="address" id="addRess"
                                       placeholder="Uy Raqamingiz va Ko'cha nomini kiriting">
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Shaxar</label>
                                <input type="text" class="form-control @error('city') has-error @enderror" name="city" id="ciTy" placeholder="Shaxringiz">
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="region">Viloyat</label>
                                <input type="text" class="form-control @error('region') has-error @enderror" name="region" id="region"
                                       placeholder="Viloyatingizni kiriting">
                                @error('region')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Speciality</label>
                                <input type="text" class="form-control @error('speciality') has-error @enderror" name="speciality_title" id="speciality_title"
                                       placeholder="Enter your speciality">
                                @error('speciality')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <button type="submit" id="submit2" name="submit" class="btn btn-light">
                                    Orqaga Qaytish
                                </button>
                                <button type="submit" id="submit2" name="submit" class="btn btn-primary">
                                    Kiritish Tugmasi
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{--    Profile settingd--}}

@endsection
