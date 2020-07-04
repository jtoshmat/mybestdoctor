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
                        <h4>Profil Parolingiz</h4>
                        <p class="text-muted"><span style="font-family: 'courier'">Bu yerda profilingiz parolini uzgartirishingiz mumkin</span></p>

                    </div>

                </div>

                <div class="card-body">
                    <div class="row gutters">
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach
                        <form enctype="multipart/form-data" action="{{ route('doctor.change-password') }}" method="POST">
                            @csrf

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ml-lg-5 mr-lg-5">
                                <div class="form-group">
                                    <label for="old_password" >{{ __('Current password') }}</label>
                                    <input id="old_password" name="old_password" type="password" class="form-control" placeholder="Eski parolingizni kiriting"  autofocus>

                                </div>
                                <div class="form-group">
                                    <label for="new_password">{{ __('New password') }}</label>
                                    <input id="new_password" name="new_password" type="password" class="form-control" placeholder="Yangi parolingizni kiriting"  autofocus>

                                </div>
                                <div class="form-group">
                                    <label  for="password_confirm">{{ __('Confirm password') }}</label>
                                    <input id="password_confirm" name="password_confirm" type="password" class="form-control" placeholder="Yangi parolingizni qayta kiriting"
                                           autofocus>

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


@endsection
