@extends('admin.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Data Course</h4>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="dashboard__table table-responsive">
                <a class="btn btn-secondary" href="{{ route('admin_add_course') }}">
                    Tambahkan Course
                </a>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Deskripsi (1)</th>
                            <th>Deskripsi (2)</th>
                            <th>Poin (1)</th>
                            <th>Poin (2)</th>
                            <th>Poin (3)</th>
                            <th>Deskripsi Poin (1)</th>
                            <th>Deskripsi Poin (2)</th>
                            <th>Deskripsi Poin (3)</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses ?? [] as $course)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->category }}</td>
                            <td>{{ $course->d1 }}</td>
                            <td>{{ $course->d2 }}</td>
                            <td>{{ $course->p1 }}</td>
                            <td>{{ $course->p2 }}</td>
                            <td>{{ $course->p3 }}</td>
                            <td>{{ $course->dp1 }}</td>
                            <td>{{ $course->dp2 }}</td>
                            <td>{{ $course->dp3 }}</td>
                            <td></td>
                            {{-- <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                  
                                    <ul class="dropdown-menu" aria-labelledby="Menu">
                                      <li><a class="dropdown-item" href="{{ route('trainer_edit_siswa', ['id' => $siswa->id]) }}">Edit Siswa</a></li>
                                      <li><a class="dropdown-item" href="{{ route('trainer_hapus_siswa', ['id' => $siswa->id]) }}" >Hapus Siswa</button></li>
                                      <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addCourseModal-{{ $siswa->id }}">Tambahkan Course</button></li>
                                    </ul>
                                  </div>
                            </td> --}}
                        </tr>
                        @endforeach
                        {{-- <td><span class="dashboard__td dashboard__td__2">Processing</span></td> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection