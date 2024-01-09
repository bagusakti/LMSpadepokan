@extends('web.partials.main')

@section('content')

<div class="aboutarea__5 sp_bottom_ sp_top_100 ml" style="margin-left: 12%">
    <div class="row">
        <div class="col-xl-6 col-lg-6 mt-20">
            <div class="btn btn-primary">
                <a href="{{ route('home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    Halaman Utama</a>
            </div>
        </div>
    </div>
</div>

<div class="aboutarea__5 sp_bottom_100 sp_top_40">
    <div class="container">
        
        <div class="row">
            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="aboutarea__5__img" data-tilt>
                    <img src="{{ asset('assets/img/program/literasi.jpg') }}" alt="about">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="aboutarea__content__wraper__5">
                    <div class="section__title">
                        <div class="section__title__button">
                            <div class="default__small__button">Literasi</div>
                        </div>
                        <div class="section__title__heading ">
                            <h2>Pelatihan Literasi</h2>
                        </div>
                    </div>
                    <div class="about__text__5">
                        <p>Membuat buku digital memungkinkan aksesibilitas global, distribusi yang mudah, dan interaktivitas multimedia tanpa penggunaan kertas,</p>
                    </div>
                    <div class="aboutarea__para__5">
                        <p>sambil memberikan keuntungan pembaruan mudah dan kemungkinan interaksi sosial. Pengetahuan tentang platform Word dan Canva mempermudah pembuatan dan pengeditan teks, serta memberikan fleksibilitas dalam desain visual untuk berbagai keperluan.</p>
                    </div>
                    <div class="create__course__wraper">
                        <div class="create__course__title">
                            <h4>Pengalaman Yang Diperoleh :</h4>
                        </div>
                        <div class="create__course__list">
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Belajar Word/Canva dll
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Belajar membuat cover berbentuk svg
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Belajar mengenai format buku
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Penulisan isi buku
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Mengikuti aturan GBook
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Referensi buku
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Kompilasi buku
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Review buku dan keterbacaan (saling membaca buku masing masing)
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Saran Kewirausahaan/STEM/Puisi/ dongeng nusantara/dll
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Saran Topik
                                </li>
                                

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="abouttabarea sp_bottom_70">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" data-aos="fade-up">
                <ul class="nav  about__button__wrap" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="single__tab__link active" data-bs-toggle="tab"
                            data-bs-target="#projects__one" type="button">Tentang</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="single__tab__link" data-bs-toggle="tab"
                            data-bs-target="#projects__four" type="button">Keuntungan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="single__tab__link" data-bs-toggle="tab"
                            data-bs-target="#projects__three" type="button">Peserta</button>
                    </li>


                </ul>
            </div>
            <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">
                <div class="tab-pane fade active show" id="projects__one" role="tabpanel"
                    aria-labelledby="projects__one">
                    <div class="col-xl-12">
                        <div class="aboutarea__content__tap__wraper">
                            <p class="paragraph__1">Anda akan menggali berbagai keterampilan dalam pengelolaan kata dan desain grafis menggunakan alat seperti Microsoft Word dan Canva. Proses pembelajaran melibatkan kemampuan membuat sampul buku berbentuk SVG dan memahami aturan GBook untuk format buku. Selain itu, saya memperdalam penulisan isi buku dengan mematuhi pedoman industri dan merangkul beragam topik seperti kewirausahaan, STEM, puisi, dan dongeng nusantara. Langkah-langkah kompilasi buku, termasuk penyuntingan dan penggabungan elemen desain, juga menjadi bagian integral dari pembelajaran saya. Saya berusaha menciptakan karya-karya yang merangsang pertukaran ide dengan mengajak orang lain untuk saling membaca buku masing-masing, sambil terus mengembangkan keterbacaan dan memberikan ulasan konstruktif untuk mendukung perkembangan literasi dan seni.</p>
                            <p class="paragraph__2">Anda dapat menguasai keterampilan pengelolaan kata dan desain grafis dengan alat seperti Microsoft Word dan Canva, serta pemahaman aturan G-Book untuk format buku. Proses pembelajaran mencakup pembuatan sampul buku berbentuk SVG, penulisan isi dengan fokus pada beragam topik seperti kewirausahaan, STEM, puisi, dan dongeng nusantara.</p>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="projects__two" role="tabpanel"
                    aria-labelledby="projects__two">

                    <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list"
                        data-aos="fade-up">
                        <div class="gridarea__img">
                            <a href="course-details.html"><img src="img/grid/grid_1.png" alt="grid"></a>
                            <div class="gridarea__small__button">
                                <div class="grid__badge">Data & Tech</div>
                            </div>
                            <div class="gridarea__small__icon">
                                <a href="#"><i class="icofont-heart-alt"></i></a>
                            </div>

                        </div>
                        <div class="gridarea__content">
                            <div class="gridarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-book-alt"></i> 23 Lesson
                                    </li>
                                    <li>
                                        <i class="icofont-clock-time"></i> 1 hr 30 min
                                    </li>
                                </ul>
                            </div>
                            <div class="gridarea__heading">
                                <h3><a href="course-details.html">Become a product Manager learn the
                                        skills & job.
                                    </a></h3>
                            </div>
                            <div class="gridarea__price">
                                $32.00 <del>/ $67.00</del>
                                <span>Free.</span>

                            </div>
                            <div class="gridarea__bottom">
                                <div class="gridarea__bottom__left">
                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <img src="img/grid/grid_small_1.jpg" alt="grid">
                                            <div class="gridarea__small__content">
                                                <h6>Mirnsdo .H</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="gridarea__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44)</span>
                                    </div>
                                </div>

                                <div class="gridarea__details">
                                    <a href="course-details.html">Know Details
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list"
                        data-aos="fade-up">
                        <div class="gridarea__img">
                            <img src="img/grid/grid_2.png" alt="grid">
                            <div class="gridarea__small__button">
                                <div class="grid__badge blue__color">Mechanical</div>
                            </div>
                            <div class="gridarea__small__icon">
                                <a href="#"><i class="icofont-heart-alt"></i></a>
                            </div>

                        </div>
                        <div class="gridarea__content">
                            <div class="gridarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-book-alt"></i> 23 Lesson
                                    </li>
                                    <li>
                                        <i class="icofont-clock-time"></i> 1 hr 30 min
                                    </li>
                                </ul>
                            </div>
                            <div class="gridarea__heading">
                                <h3><a href="course-details.html">Foundation course to under stand
                                        about softwere</a></h3>
                            </div>
                            <div class="gridarea__price">
                                $32.00 <del>/ $67.00</del>
                                <span>Free.</span>

                            </div>
                            <div class="gridarea__bottom">
                                <div class="gridarea__bottom__left">
                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <img src="img/grid/grid_small_1.jpg" alt="grid">
                                            <div class="gridarea__small__content">
                                                <h6>Mirnsdo .H</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="gridarea__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44)</span>
                                    </div>
                                </div>

                                <div class="gridarea__details">
                                    <a href="course-details.html">Know Details
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list"
                        data-aos="fade-up">
                        <div class="gridarea__img">
                            <a href="course-details.html"><img src="img/grid/grid_3.png" alt="grid"></a>
                            <div class="gridarea__small__button">
                                <div class="grid__badge pink__color">Development</div>
                            </div>
                            <div class="gridarea__small__icon">
                                <a href="#"><i class="icofont-heart-alt"></i></a>
                            </div>

                        </div>
                        <div class="gridarea__content">
                            <div class="gridarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-book-alt"></i> 23 Lesson
                                    </li>
                                    <li>
                                        <i class="icofont-clock-time"></i> 1 hr 30 min
                                    </li>
                                </ul>
                            </div>
                            <div class="gridarea__heading">
                                <h3><a href="course-details.html">Strategy law and with for organization
                                        Foundation
                                    </a></h3>
                            </div>
                            <div class="gridarea__price">
                                $32.00 <del>/ $67.00</del>
                                <span>Free.</span>

                            </div>
                            <div class="gridarea__bottom">
                                <div class="gridarea__bottom__left">
                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <img src="img/grid/grid_small_1.jpg" alt="grid">
                                            <div class="gridarea__small__content">
                                                <h6>Mirnsdo .H</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="gridarea__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44)</span>
                                    </div>
                                </div>

                                <div class="gridarea__details">
                                    <a href="course-details.html">Know Details
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="projects__three" role="tabpanel"
                    aria-labelledby="projects__three">
                    <div class="dashboard__content__wraper">
                        <div class="dashboard__section__title">
                            <h4>Peserta | Pelatihan Literasi</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="dashboard__table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Institusi</th>
                                                <th></th>
                                                <th></th>
                                                <th>Status Kelulusan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no=1
                                            @endphp
                                            @foreach ($pesertas as $siswa)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>{{ $siswa->name }}</td>
                                                <td>{{ $siswa->institusi }}</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <span class="{{ $siswa->status ? 'badge bg-success' : 'badge bg-danger' }}">{{ $siswa->status ? 'Lulus' : 'Belum Lulus' }}</span>
                                                </td>
                    
                                                
                                            </tr>
                                            @endforeach
                                            {{-- <td><span class="dashboard__td dashboard__td__2">Processing</span></td> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="projects__four" role="tabpanel"
                    aria-labelledby="projects__four">
                    <div class="col-xl-12">
                        <div class="aboutarea__content__tap__wraper">
                            <div class="aboutarea__tap__heading">
                                <h5>Membuat buku digital
                                </h5>
                                <p>Membuat buku digital memberikan aksesibilitas global, memudahkan distribusi, dan memungkinkan interaktivitas dengan fitur multimedia, sementara juga ramah lingkungan tanpa penggunaan kertas. Keuntungan lainnya mencakup pembaruan mudah, pencarian yang efisien, dan kemungkinan interaksi sosial melalui integrasi media sosial.
                                </p>
                            </div>

                            <div class="aboutarea__tap__heading">
                                <h5>Mengetahui tentang platform Word dan Canva
                                </h5>
                                <p>Mengetahui platform Word memudahkan pembuatan dan pengeditan dokumen teks, sementara penggunaan Canva memberikan keleluasaan dalam desain visual untuk presentasi, media sosial, dan materi pemasaran. Keduanya memberikan fleksibilitas dan efisiensi dalam menciptakan konten yang beragam dan menarik.
                                </p>
                            </div>
                            <div class="aboutarea__tap__heading">
                                <h5>Mendapatkan keuntungan jika buku diupload melalui platform G-Book
                                </h5>
                                <p>Mengunggah buku melalui platform G-Book memberikan keuntungan aksesibilitas global, distribusi cepat, interaktivitas multimedia, pembaruan konten, dan analitika pembacaan, meningkatkan pengalaman pembaca dan memfasilitasi penyebaran buku secara efisien. Platform ini juga mendukung integrasi sosial, keberlanjutan lingkungan, dan kemudahan pembelian online, memberikan penulis kontrol terhadap keamanan konten mereka.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection