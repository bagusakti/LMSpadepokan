@extends('trainer.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__selection__title">
        <h4>Data Absensi (Segera Hadir!)</h4>
    </div>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success1') }}
    </div>
@endif
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Data Siswa | {{ $dcourses->name }}</h4>
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
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dcourses as $siswa)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $siswa->name }}</td>
                            <td>{{ $siswa->institusi }}</td>
                            <td>{{ $siswa->whatsapp }}</td>
                            <td>{{ $siswa->email }}</td>
                            <td>
                                <a href="{{ route('change_status_siswa', ['id' => $siswa->id]) }}" class="{{ $siswa->status ? 'btn btn-success' : 'btn btn-danger' }}">{{ $siswa->status ? 'Lulus' : 'Belum Lulus' }}</a>
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