@extends('siswa.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Pengumpulan Tugas | Literasi</h4>

    </div>
    <div class="row">
        <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">
            <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                <div class="col-xl-8 col-md-8 offset-md-2">
                    <div class="loginarea__wraper">
                        <form action="{{ route('siswa_up_toeic') }}" method="POST">
                            @csrf
                            <div class="login__form">
                                <label for="judul" class="form__label">Pengumpulan Judul Karya Tulis</label>
                                <input type="text" class="common__login__input" placeholder="Masukkan Judul Karya Tulis Anda" name="judul" id="judul" required>
                            </div>
                            <div class="login__form">
                                <label for="link_blog" class="form__label">Pengumpulan Link Blog</label>
                                <input type="text" class="common__login__input" placeholder="Masukkan Link Blog Anda" name="link_blog" id="link_blog" required>
                            </div>
                            <div class="login__form">
                                <label for="link_gbook" class="form__label">Pengumpulan Link Gbook</label>
                                <input type="text" class="common__login__input" placeholder="Masukkan Link Gbook Anda" name="link_gbook" id="link_gbook" required>
                            </div>
                            <div class="login__button">
                                <button type="submit" class="dashboard__small__btn__2 dashboard__small__btn__3">
                                    <i class="icofont-paper-plane"></i> Kumpulkan Tugas
                                </button>
                            </div>
                        </form>
                        <br>
                        <p style="color: red;">*Pastikan Link yang dikumpulkan dalam bentuk Shortlink !! (contoh: http://bit.ly/3Hc7MlC )</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection