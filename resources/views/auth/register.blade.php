@extends('auth.partials.main')

@section('content')
<div class="loginarea sp_top_100 sp_bottom_100">
    <div class="container">
        <div class="row">
            <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                    <div class="col-xl-8 col-md-8 offset-md-2">
                        <div class="loginarea__wraper">
                            <div class="login__heading">
                                <h5 class="login__title">Daftar</h5>
                                <p class="login__description">Sudah Memiliki Akun? <a href="{{ route('login_page') }}">Silahkan Masuk</a></p>
                            </div>



                            <form id="register-form" action="{{ route('register') }}" method="POST" >
                                @csrf
                                <div class="login__form">
                                    <label class="form__label">Masukkan Nama Lengkap Anda :</label>
                                        <input class="common__login__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" type="text" placeholder="Nama Lengkap Anda" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="login__form">
                                    <label class="form__label">Masukkan Asal Institusi :</label>
                                    <input class="common__login__input" type="text" placeholder="Asal Institusi Anda" name="institusi" value="{{ old('institusi') }}" id="institusi" required>

                                </div>
                                <div class="login__form">
                                    <label class="form__label">Masukkan Nomor Whatsapp :</label>
                                    <input class="common__login__input @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" id="whatsapp" type="number" placeholder="Nomor Whatsapp anda *contoh 08546...(sesuaikan dengan nomor anda)" required>
                                    @error('whatsapp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="login__form">
                                    <label class="form__label">Masukkan Email Anda :</label>
                                        <input class="common__login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" type="email" placeholder="Email anda *contoh example@gmail.com" required autocomplete="email">
                                        @if($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                </div>
                                <div class="login__form">
                                    <label class="form__label">Masukkan Password Anda :</label>
                                                <input class="common__login__input @error('password') is-invalid @enderror" id="password" type="password" placeholder="Buat Password" name="password" required autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                </div>
                                <div class="login__form">
                                    <label class="form__label">Masukkan Kembali Password :</label>
                                                <input id="password-confirm" type="password" placeholder="Konfirmasi Password" class="common__login__input  @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                                @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                </div>
                                <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                
                                    <div class="text-end login__form__link">
                                        <p>Data diperlukan sebagai pembuatan E-sertifikat</p>
                                    </div>
                                    <div class="text-end login__form__link">
                                        <p style="color: red">*Daftarkan data dengan tepat</p>
                                    </div>
                                </div>
                                <div class="login__button">
                                    <button class="default__button" type="submit">Daftar</button>
                                </div>
                            </form>

                            <div class="login__social__option">
                                <p></p>

                                
                            </div>


                        </div>
                    </div>
                </div>

                



            </div>

        </div>

        <div class=" login__shape__img educationarea__shape_image">
            <img class="hero__shape hero__shape__1" src="{{ asset('assets/img/education/hero_shape2.png') }}" alt="Shape">
            <img class="hero__shape hero__shape__2" src="{{ asset('assets/img/education/hero_shape3.png') }}" alt="Shape">
            <img class="hero__shape hero__shape__3" src="{{ asset('assets/img/education/hero_shape4.png') }}" alt="Shape">
            <img class="hero__shape hero__shape__4" src="{{ asset('assets/img/education/hero_shape5.png') }}" alt="Shape">
        </div>


    </div>
</div>
@endsection