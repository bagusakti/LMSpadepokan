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
                                        <a class="default__button" href="{{ route('login_page') }}">Masuk</a>
                                        
										@if (Auth::guest())
										<a class="default__button hreobannerarea__button__3" href="{{ route('register_page') }}">Daftar</a>
										@endif

										@if ($users->hasAnyRole('admin', 'trainer', 'siswa'))
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
                <!-- <img class="herobanner__common__img herobanner__img__2" src="img/herobanner/herobanner__2.png" alt="photo">
                <img class="herobanner__common__img herobanner__img__3" src="img/herobanner/herobanner__3.png" alt="photo">
                <img class="herobanner__common__img herobanner__img__4" src="img/herobanner/herobanner__4.png" alt="photo">
                <img class="herobanner__common__img herobanner__img__5" src="img/herobanner/herobanner__5.png" alt="photo"> -->
            </div>

        </div>
   
		<div class="early__programs research__programs sp_bottom_100">
			<div class="container-fluid full__width__padding">

				<div class="row">
					<div class="section__title text-center" data-aos="fade-up">
						<div class="section__title__button">
							<div class="default__small__button">#Research</div>
						</div>
						<div class="section__title__heading heading__underline">
							<h2>Komunitas Belajar Online <span>Berbagi Pengetahuan</span> <br>Membangun Inspirasi.</h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_1.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>Literasi</p>
								<h4> <a href="#">PELATIHAN LITERASI</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_2.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>Technopreneur</p>
								<h4> <a href="#">LOMBA TECHNOPRENEUR</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_3.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>Game</p>
								<h4> <a href="#">LOMBA PEMBUATAN GAME</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_4.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>Golden Ticket</p>
								<h4> <a href="#">PERSIAPAN PROGRAM GOLDEN TICKET</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_1.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>game</p>
								<h4> <a href="#">SIMULASI GAME NIB</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_2.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>Metaverse</p>
								<h4> <a href="#">PELATIHAN METAVERSE DASAR</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_3.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>Metaverse</p>
								<h4> <a href="#">PELATIHAN METAVERSE INTERMEDIETE</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_4.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>Metaverse</p>
								<h4> <a href="#">PELATIHAN METAVERSE LANJUT</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_1.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>Story Telling</p>
								<h4> <a href="#">PELATIHAN STORY TELLING</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
						<div class="single__blog__wraper">
							<div class="single__blog__img">
								<img src="{{asset('assets/img/program/ai_2.jpg')}}" alt="blog">
							</div>
							<div class="single__blog__content">
								<p>Web Development</p>
								<h4> <a href="#">PELATIHAN FRONTEND & BACKEND</a></h4>
								<div class="single__blog__bottom__button">
									<a href="#">Read More </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        <div class="gridarea__2 sp_bottom_100" data-aos="fade-up">
            <div class="container-fluid full__width__padding">

                
            </div>
        </div>


@endsection