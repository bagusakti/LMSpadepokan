@extends('siswa.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Pengumpulan Tugas | Skor TOEIC</h4>

    </div>
    <div class="row">
        <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">
            <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                <div class="col-xl-8 col-md-8 offset-md-2">
                    <div class="loginarea__wraper">
                        <form action="{{ route('siswa_up_toeic') }}" method="POST">
                            @csrf
                            <div class="login__form">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Tes TOEIC</option>
                                    @foreach ($toeic as $item)
                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="login__form">
                                <label for="title" class="form__label">nilai TOEIC : </label>
                                <input type="number" class="common__login__input" placeholder="Masukkan nilai TOEIC : " name="title" id="title" required>
                            </div>
                            <div class="login__button">
                                <button type="submit" class="dashboard__small__btn__2 dashboard__small__btn__3">
                                    <i class="icofont-paper-plane"></i> Kirim Score
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection