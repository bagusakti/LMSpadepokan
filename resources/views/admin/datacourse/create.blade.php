@extends('admin.partials.main')

@section('content')
<div class="loginarea sp_top_100 sp_bottom_100">
    <div class="container">
        <div class="row">
            <div class="loginarea__wraper">
                <div class="login__heading">
                    <h5 class="login__title">TAMBAHKAN COURSE</h5>
                </div>

                <form id="addcourse-form" action="{{ route('admin_store_course') }}" method="POST" enctype="multipart/form-data">

                   @csrf
                        <div class="login__form">
                            <label for="name" class="form__label">Name:</label>
                            <input class="common__login__input" type="text" name="name" id="name" required>
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="category" class="form__label">Category:</label>
                            <input class="common__login__input" type="text" name="category" id="category" required>
                            @if ($errors->has('category'))
                                <span class="error">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="image" class="form__label">Poster:</label>
                            <input class="common__login__input" type="file" name="image" id="image" required>
                            @if ($errors->has('image'))
                                <span class="error">{{ $errors->first('image') }}</span>
                            @endif
                        <div class="login__form">
                            <label for="d1" class="form__label">Deskripsi (1):</label>
                            <input class="common__login__input" type="text" name="d1" id="d1" required>
                            @if ($errors->has('d1'))
                                <span class="error">{{ $errors->first('d1') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="d2" class="form__label">Deskripsi (2)</label>
                            <input class="common__login__input" type="text" name="d2" id="d2" required>
                            @if ($errors->has('d2'))
                                <span class="error">{{ $errors->first('d2') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="p1" class="form__label">Keuntungan (1):</label>
                            <input class="common__login__input" type="text" name="p1" id="p1" required>
                            @if ($errors->has('p1'))
                                <span class="error">{{ $errors->first('p1') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="p2" class="form__label">Keuntungan (2):</label>
                            <input class="common__login__input" type="text" name="p2" id="p2" required>
                            @if ($errors->has('p2'))
                                <span class="error">{{ $errors->first('p2') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="p3" class="form__label">Keuntungan (3):</label>
                            <input class="common__login__input" type="text" name="p3" id="p3" required>
                            @if ($errors->has('p3'))
                                <span class="error">{{ $errors->first('p3') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="dp1" class="form__label">Deskripsi Keuntungan(1):</label>
                            <input class="common__login__input" type="text" name="dp1" id="dp1" required>
                            @if ($errors->has('dp1'))
                                <span class="error">{{ $errors->first('dp1') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="dp2" class="form__label">Deskripsi Kentungan (2):</label>
                            <input class="common__login__input" type="text" name="dp2" id="dp2" required>
                            @if ($errors->has('dp2'))
                                <span class="error">{{ $errors->first('dp2') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="dp3" class="form__label">Deskripsi Keuntungan (3):</label>
                            <input class="common__login__input" type="text" name="dp3" id="dp3" required>
                            @if ($errors->has('dp3'))
                                <span class="error">{{ $errors->first('dp3') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <label for="pendaftaran" class="form__label">Link Pendaftaran:</label>
                            <input class="common__login__input" type="text" name="pendaftaran" id="pendaftaran" required>
                            @if ($errors->has('pendaftaran'))
                                <span class="error">{{ $errors->first('pendaftaran') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <a class="btn btn-secondary" href="{{ URL::previous() }}">Kembali</a>
                            <button type="submit" id="submit" class="btn btn-primary">Tambah Course</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.querySelector('#addcourse-form').addEventListener('submit', function(event) {
        const submitButton = event.target.querySelector('#submit');
        if (!submitButton.disabled) {
            submitButton.disabled = true;
            event.target.submit();
        }
        event.preventDefault();
    });
</script>
@endsection
