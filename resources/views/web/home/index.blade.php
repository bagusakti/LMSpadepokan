@extends('web.partials.main')

@section('content')
        <div class="herobannerarea herobannerarea__2 herobannerarea__machine__learning" style="background: url(img/herobanner/ai_1.jpg)">

            <div class="swiper ai__slider">

                <div class="herobannerarea__slider__wrap swiper-wrapper">

                    <div class="swiper-slide herobannerarea__single__slider">
                        <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                                <div class="herobannerarea__content__wraper text-center">


                                    <div class="herobannerarea__title">
                                        <div class="herobannerarea__small__title">
                                            <span>Selamat Datang Di</span>
                                        </div>
                                        <div class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                            <h2>Platform Pembelajaran Online Kami! <span>Gema</span> E-learning.</h2>
                                        </div>
                                    </div>


                                    <div class="herobannerarea__text herobannerarea__text__2">
                                        <p>Peluang Baru, Wawasan Baru, Prestasi Baru <br>Temukan Potensi Anda Melalui Pembelajaran Interaktif </p>
                                    </div>
                                    <div class="hreobannerarea__button__2">
										@if (Auth::guest())
                                        <a class="default__button" href="{{ route('login_page') }}">Masuk</a>
											@elseif(Auth::check() && $users->hasRole('admin'))
											<a class="default__button" href="{{ route('dashboard_admin') }}">Masuk (Dashboard Admin)</a>
												@elseif(Auth::check() && $users->hasRole('trainer'))
												<a class="default__button" href="{{ route('dashboard_trainer') }}">Masuk (Dashboard Trainer)</a>
													@elseif(Auth::check() && $users->hasRole('siswa'))
													<a class="default__button" href="{{ route('dashboard_siswa') }}">Masuk (Dashboard)</a>
										@endif

                                        
										@if (Auth::guest())
										<a class="default__button hreobannerarea__button__3" href="{{ route('register_page') }}">Daftar</a>
										@endif

										@if (Auth::check() && $users->hasAnyRole('admin', 'trainer', 'siswa'))
										<a href="{{ route('logout') }}" class="default__button hreobannerarea__button__3">Logout</a>		
										@endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>



            </div>
            <div class="slider__controls__wrap slider__controls__pagination slider__controls__arrows">
                <!--<div class="swiper-button-next arrow-btn"></div>
                <div class="swiper-button-prev arrow-btn"></div>-->
                <div class="swiper-pagination"></div>
            </div>

            <div class="herobannerarea__icon__2">
                <img class="herobanner__common__img herobanner__img__1" src="{{asset('assets/img/herobanner/herobanner__4.png')}}" alt="photo">
            </div>

        </div>
   
		<div class="early__programs research__programs sp_bottom_100">
			<div class="container-fluid full__width__padding">

				<div class="row">
					<div class="section__title text-center" data-aos="fade-up">
						<div class="section__title__button">
							<div class="default__small__button">Pelatihan Kami</div>
						</div>
						<div class="section__title__heading heading__underline">
							<h2>Komunitas Belajar Online <span>Berbagi Pengetahuan</span> <br>Membangun Inspirasi.</h2>
						</div>
					</div>
				</div>

				<div class="row">
					@foreach ($courses as $course)
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset("storage/program/$course->image")}}" alt="{{ $course->name }}">
							</div>
							<div class="single__blog__content">
								<p>{{ $course->category }}</p>
								<h4> <a href="{{ route('course_detail', $course->id) }}">{{ $course->name }}</a></h4>
								<div class="single__blog__bottom__button">
									<a href="{{ route('course_detail', $course->id) }}">Baca Selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__content">
								<p>CATC</p>
								<h4> <a href="{{ route('sertifikat_catc') }}">UNDUH SERTIFIKAT CATC</a></h4>
								<div class="single__blog__bottom__button">
									<a href="{{ route('sertifikat_catc') }}">Baca Selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection