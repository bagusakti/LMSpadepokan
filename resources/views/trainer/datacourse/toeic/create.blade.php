@extends('trainer.partials.main')

@section('content')
<div class="loginarea sp_top_100 sp_bottom_100">
    <div class="container">
        <div class="row">
            <div class="loginarea__wraper">
                <div class="login__heading">
                    <h5 class="login__title">TAMBAHKAN TOEIC TASK</h5>
                </div>

                <form id="addtoeic-form" action="{{ route('trainer_addtoeic') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="login__form">
                            <label for="title" class="form__label">Judul TOEIC :</label>
                            <input class="common__login__input" type="text" name="title" id="title" required>
                            @if ($errors->has('title'))
                                <span class="error">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        
                        <div class="login__form">
                            <a class="btn btn-secondary" href="{{ URL::previous() }}">Kembali</a>
                            <button type="submit" id="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection