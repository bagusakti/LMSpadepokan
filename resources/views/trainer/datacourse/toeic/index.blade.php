@extends('trainer.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Data TOEIC</h4>
        <a class="btn btn-secondary" href="{{ route('trainer_course_add_toeic') }}">
            Tambahkan TOEIC
        </a>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="dashboard__table table-responsive">
                
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($toeics ?? [] as $toeic)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $toeic->title }}</td>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                  
                                    <ul class="dropdown-menu" aria-labelledby="Menu">
                                      <li><a class="dropdown-item" href="">Edit</a></li>
                                      <li><a class="dropdown-item" href="" >Hapus</button></li>
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