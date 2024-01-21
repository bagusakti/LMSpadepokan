@extends('web.partials.main')

@section('content')

        <div class="aboutarea__5 sp_bottom_ sp_top_100 ml" style="margin-left: 12%">
            <div class="row">
                <div class="col-xl-6 col-lg-6 mt-20">
                    <div class="btn btn-secondary">
                        <a href="{{ URL::previous() }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="aboutarea__5 sp_bottom_100 sp_top_40">
            <div class="container">
                
                <div class="row">
                    <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                        <div class="aboutarea__5__img" data-tilt>
                                <img src="{{asset("storage/program/$courses->image")}}" alt="{{ $courses->name }}">
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                        <div class="aboutarea__content__wraper__5">
                            <div class="section__title">
                                <div class="section__title__button">
                                    <div class="default__small__button">{{ $courses->category }}</div>
                                </div>
                                <div class="section__title__heading ">
                                    <h2>{{ $courses->name }}</h2>
                                </div>
                            </div>
                            <div class="about__text__5">
                                <p>
                                    {{ $courses->d1 }}
                                </p>
                            </div>
                            <div class="aboutarea__para__5">
                                <p>
                                    {{ $courses->d2 }}
                                </p>
                            </div>
                            <div class="create__courses__wraper">
                                <div class="create__courses__title">
                                    <h4>Pengalaman Yang Diperoleh :</h4>
                                </div>
                                <div class="create__courses__list">
                                    <ul>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            {{ $courses->p1 }}
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            {{ $courses->p2 }}
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            {{ $courses->p3 }}
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
                                    <p class="paragraph__1">{{ $courses->d1 }}</p>
                                    <p class="paragraph__2">{{ $courses->d2 }}</p>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="projects__three" role="tabpanel"
                            aria-labelledby="projects__three">
                            <div class="dashboard__content__wraper">
                                <div class="dashboard__section__title">
                                    <h4>Peserta | {{ $courses->name }}</h4>
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
                                                    @foreach ($users as $siswa)
                                                        <tr>
                                                            <th>{{ $loop->iteration }}</th>
                                                            <td>{{ $siswa->name }}</td>
                                                            <td>{{ $siswa->institusi }}</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <span class="{{ $siswa->status_kelulusan ? 'badge bg-success' : 'badge bg-danger' }}">{{ $siswa->status_kelulusan ? 'Lulus' : 'Belum Lulus' }}</span>
                                                            </td>
                                
                                                            
                                                        </tr>
                                                    @endforeach
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