@extends('trainer.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Data Siswa</h4>
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
                            <th>Whatsapp</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1
                        @endphp
                        @foreach ($parasiswas as $siswa)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $siswa->name }}</td>
                            <td>{{ $siswa->institusi }}</td>
                            <td>{{ $siswa->whatsapp }}</td>
                            <td>{{ $siswa->email }}</td>
                            <td></td>
                            <td>
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
                            </td>
                        </tr>

                        <div class="modal fade" id="addCourseModal-{{ $siswa->id }}" tabindex="-1" aria-labelledby="addCourseModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addCourseModalLabel">Tambahkan Course</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('add_course_to_siswa', ['id' => $siswa->id]) }}" method="POST">
                                            @csrf
                                            <label for="course_id">Pilih Course:</label>
                                            <select name="course_id" id="course_id">
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit">Tambahkan Course</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <td><span class="dashboard__td dashboard__td__2">Processing</span></td> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection