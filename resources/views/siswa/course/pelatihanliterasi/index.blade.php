@extends('siswa.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Pengumpulan Link</h4>
        
    </div>
    <div class="row">
        <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">
            <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                <div class="col-xl-8 col-md-8 offset-md-2">
                    <div class="loginarea__wraper">
                        <form action="" method="POST">
                            @csrf
                            <div class="login__form">
                                <label for="linkblog" class="form__label">Pengumpulan Link Blog</label>
                            <input type="text" class="common__login__input" placeholder="Masukkan Link Blog Anda" name="link_blog" id="linkblog">
                            </div>
                            <div class="login__form">
                                <label for="linkgbook" class="form__label">Pengumpulan Link Gbook</label>
                            <input type="text" class="common__login__input" placeholder="Masukkan Link Gbook Anda" name="link_gbook" id="linkgbook">
                            </div>
                            <div class="login__button">
                                <button type="submit" class="dashboard__small__btn__2 dashboard__small__btn__3">
                                    <i class="icofont-paper-plane"></i> Submit
                                </button>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Unduh Serfitikat</h4>
        
    </div>
        <div class="row">
            <div class="tab-content tab__content__wrapper aos-init aos-animate" id="myTabContent" data-aos="fade-up">
                <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href=""><img src="{{ asset('assets/img/grid/grid_1.png') }}" alt="grid"></a>
                                    <div class="gridarea__small__button">
                                        <div class="grid__badge">Pelatihan Literasi</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>
        
                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="">Pelatihan Literasi</a></h3>
                                        <p>Tingkatkan keterampilan membaca, menulis, dan memahami informasi dengan metode yang menyenangkan. </p>
                                    </div>
                                    <div class="gridarea__price">
                                        
                                    </div>
                                    <div class="gridarea__bottom">
                                    </div>
                                </div>
                                <div class="grid__course__status populerarea__button">                                  
                                    <a class="default__button" href="#">Unduh Sertifikat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>


@endsection