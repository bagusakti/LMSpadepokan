@extends('admin.partials.main')

@section('content')
    <div class="loginarea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">
                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                        <div class="col-xl-8 col-md-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">EDIT USERS</h5>
                                </div>

                                <form id="edit-form" action="{{ route('admin_update_users', ['id' => $users->id]) }}" method="POST" >
                                    @csrf
                                    <div class="login__form">
                                        <label class="form__label">Nama Lengkap :</label>
                                            <input class="common__login__input @error('name') is-invalid @enderror" name="name" value="{{ $users->name }}" id="name" type="text" placeholder="Nama Lengkap Anda" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="login__form">
                                        <label for="institusi" class="form__label">Asal Institusi :</label>
                                        <input class="common__login__input" type="text" placeholder="Asal Institusi Anda" name="institusi" value="{{ $users->institusi }}" id="institusi" required>
                                    </div>
                                    <div class="login__form">
                                        <label for="whatsapp" class="form__label">Nomor Whatsapp :</label>
                                        <input class="common__login__input @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ $users->whatsapp }}" id="whatsapp" type="number" placeholder="Nomor Whatsapp anda *contoh 08546...(sesuaikan dengan nomor anda)" required>
                                        @error('whatsapp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="login__form">
                                        <label for="email" class="form__label">Email :</label>
                                            <input class="common__login__input @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" id="email" type="email" placeholder="Email anda *contoh example@gmail.com" required autocomplete="email">
                                            @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                    </div>
                                    <div class="login__form">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

