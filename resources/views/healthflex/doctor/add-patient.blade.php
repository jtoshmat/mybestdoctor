@extends('healthflex.doctor.layout')
@section('title', 'Add Patient')
@section('sub-content')

    {{--    Profile Settings--}}

    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4>Add Patient</h4>
                    <p class="text-muted"><span style="font-family: 'courier'"></span>
                    </p>

                </div>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ __('add-patient') }}" method="POST">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="fullName">Ism va Familiya</label>
                            <input type="text" class="form-control pr-5 @error('name') has-error @enderror"
                                   name="name" id="fullName" value="{{ old('name') }}"
                                   placeholder="Ism va Familiya kiriting" autocomplete="name">

                            <strong class="text-danger">{{ $errors->first('name') }}</strong>

                        </div>
                        <div class="form-group">
                            <label for="fullName">Patient ID</label>
                            <input type="text" class="form-control pr-5 @error('id') has-error @enderror"
                                   name="patient_id" id="patient_id" value="{{ $a = 1000, $a++ }}"
                                   placeholder="enter patient id" autocomplete="id">
                            <strong class="text-danger">{{ $errors->first('patient_id') }}</strong>
                        </div>
                        <div class="form-group">
                            <label for="fullName">Type of Patient</label>

                            <select name="type_patient" class="form-control" id="">
                                <option value="New Patient">New Patient</option>
                                <option value="Old Patient">Old Patient</option>
                            </select>


                        </div>
                        <div class="form-group">
                            <label for="phone">Date Of Birth</label>
                            <input type="date" class="form-control @error('date Birth') has-error @enderror"
                                   name="date_birth" id="date_birth"
                                   placeholder="Tugilgan kuningiz kun/oy/19xx kiriting">
                            <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                        </div>
                        <div class="form-group">
                            <label for="fullName">Email</label>
                            <input type="email" class="form-control pr-5 @error('email') has-error @enderror"
                                   name="email" id="eMail"
                                   placeholder="Email'ingizni kiriting">
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>

                        </div>
                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="text" class="form-control @error('phone') has-error @enderror"
                                   name="phone" id="phone"
                                   placeholder="Tel raqamingizni kiriting">
                            <strong class="text-danger">{{ $errors->first('phone') }}</strong>

                        </div>
                        <div class="form-group">
                            <label for="">Upload profile picture</label>
                            <input type="file" class="form-control" name="avatar">
                        </div>

                        <div class="form-group">
                            <label for="admit">Date Of Admit</label>
                            <input type="date" class="form-control @error('date of Admit') has-error @enderror"
                                   name="date_admit" id="date_addt"
                                   placeholder="Tugilgan kuningiz kun/oy/19xx kiriting">
                            <strong class="text-danger">{{ $errors->first('date_admit') }}</strong>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                        <div class="form-group">
                            <label>Date Of Appointment</label>
                            <input type="date"
                                   class="form-control @error('date of Appointment') has-error @enderror"
                                   name="date_appt" id="date_appt"
                                   placeholder="Date Of Appointment">
                            <strong class="text-danger">{{ $errors->first('date_appt') }}</strong>
                        </div>
                        <div class="form-group">
                            <label for="time_appt">Time Of Appointment</label>
                            <input type="time"
                                   class="form-control @error('time of Appointment') has-error @enderror"
                                   name="time_appt" id="time_appt"
                                   placeholder="Time of appointment">
                            <strong class="text-danger">{{ $errors->first('time_appt') }}</strong>
                        </div>

                        <div class="form-group">
                            <label for="condition">Condition</label>
                            <input type="text" class="form-control pr-5 @error('condition') has-error @enderror"
                                   name="condition" id="condition"
                                   placeholder="injury/condition" autocomplete="condition">
                            <strong class="text-danger">{{ $errors->first('condition') }}</strong>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control @error('price') has-error @enderror"
                                   name="price" id="price"
                                   placeholder="Narhi">
                            <strong class="text-danger">{{ $errors->first('number') }}</strong>
                        </div>
                        <div class="form-group">
                            <label for="addRess">Address</label>
                            <input type="text" class="form-control @error('address') has-error @enderror"
                                   name="address" id="addRess"
                                   placeholder="Uy Raqamingiz va Ko'cha nomini kiriting">
                            <strong class="text-danger">{{ $errors->first('address') }}</strong>
                        </div>
                        <div class="form-group">
                            <label for="">Shaxar</label>
                            <input type="text" class="form-control @error('city') has-error @enderror"
                                   name="city" id="ciTy" placeholder="Shaxringiz">
                            <strong class="text-danger">{{ $errors->first('city') }}</strong>
                        </div>
                        <div class="form-group">
                            <label for="region">Viloyat</label>
                            <input type="text" class="form-control @error('region') has-error @enderror"
                                   name="region" id="region"
                                   placeholder="Viloyatingizni kiriting">
                            <strong class="text-danger">{{ $errors->first('region') }}</strong>
                        </div>

                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="reset" id="resetw" name="reset" class="btn btn-dark">
                                RESET
                            </button>
                            <button type="submit" id="submit2" name="submit" class="btn btn-primary">
                                SUBMIT
                            </button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
        </div>
    </div>


    {{--    Profile settingd--}}

@endsection

