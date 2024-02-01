@extends('trainer.partials.main')

@section('content')
<div class="loginarea sp_top_100 sp_bottom_100">
    <div class="container">
        <div class="row">
            <div class="loginarea__wraper">
                <div class="login__heading">
                    <h5 class="login__title">Edit TOEIC</h5>
                </div>

                <form id="addcourse-form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="login__form">
                            <label for="title" class="form__label">Judul TOEIC :</label>
                            <input class="common__login__input" type="text" title="title" id="title" value="{{ $toeic->title }}" required>
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="login__form">
                            <a class="btn btn-secondary" href="{{ URL::previous() }}">Kembali</a>
                            <button type="submit" class="btn btn-primary">Perbarui TOEIC</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection