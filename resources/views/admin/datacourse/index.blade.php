@extends('admin.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Data Course</h4>
        <a class="btn btn-secondary" href="{{ route('admin_add_course') }}">
            Tambahkan Course
        </a>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="dashboard__table table-responsive">
                
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
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
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                  
                                    <ul class="dropdown-menu" aria-labelledby="Menu">
                                      <li><a class="dropdown-item" href="{{ route('admin_detail_course', ['id' => $course->id]) }}">Detail</a></li>
                                      <li><a class="dropdown-item" href="{{ route('admin_edit_course', ['id' => $course->id]) }}">Edit Course</a></li>
                                      <li><a class="dropdown-item" href="{{ route('admin_delete_course', ['id' => $course->id]) }}" >Hapus Course</button></li>
                                    </ul>
                                  </div>
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
@endsection