@extends('admin.partials.main')

@section('content')
    <div class="dashboard__content__wraper">
        <div class="dashboard__section__title">
            <h4>Data Users</h4>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="dashboard__table table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Course</th>
                                <th>Institusi</th>
                                <th>Whatsapp</th>
                                <th>Email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $siswa)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $siswa->name }}</td>
                                <td>
                                    <ul>
                                        @if ($siswa->courses->isEmpty())
                                            <li>
                                                None
                                            </li>
                                        @else
                                            @foreach ($siswa->courses as $course)
                                                <li>
                                                    {{ $course->name }}
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </td>
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
                                        <li><a class="dropdown-item" href="{{ route('admin_edit_users', ['id' => $siswa->id]) }}">Edit Users</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin_delete_users', ['id' => $siswa->id]) }}" >Hapus Users</a></li>
                                        <li>
                                            <button type="button" class="dropdown-item add-course-button" data-bs-toggle="modal" data-bs-target="#addCourseModal" data-user-id="{{ $siswa->id }}">
                                                Tambah Course
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item remove-course-button" data-bs-toggle="modal" data-bs-target="#removeCourseModal" data-user-id="{{ $siswa->id }}">
                                                Hapus Course
                                            </button>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addCourseModal" tabindex="-1" aria-labelledby="addCourseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="addCourseModalLabel">Tambah Course</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('admin_add_course_users') }}" method="POST" id="addCourseForm">
                @csrf
                <input type="hidden" name="user_id" id="userIdInput" >
                <select name="course_id[]" multiple>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary">Save changes</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="removeCourseModal" tabindex="-1" aria-labelledby="removeCourseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="removeCourseModalLabel">Hapus Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin_remove_course_users') }}" method="POST" id="removeCourseForm">
                        @csrf
                        <input type="hidden" name="user_id" id="userIdInputRemove" >
                        <select name="course_id[]" multiple>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dapatkan semua tombol "Tambah Course"
            var buttons = document.querySelectorAll('.add-course-button');
        
            // Tambahkan event listener ke setiap tombol
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Dapatkan ID user dari atribut data-user-id
                    var userId = button.getAttribute('data-user-id');
        
                    // Temukan input user_id di form
                    var input = document.querySelector('#userIdInput');
        
                    // Atur value dari input menjadi ID user
                    input.value = userId;
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dapatkan semua tombol "Hapus Course"
            var buttons = document.querySelectorAll('.remove-course-button');
    
            // Tambahkan event listener ke setiap tombol
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Dapatkan ID user dari atribut data-user-id
                    var userId = button.getAttribute('data-user-id');
    
                    // Temukan input user_id di form
                    var input = document.querySelector('#userIdInputRemove');
    
                    // Atur value dari input menjadi ID user
                    input.value = userId;
                });
            });
        });
    </script>
@endsection
