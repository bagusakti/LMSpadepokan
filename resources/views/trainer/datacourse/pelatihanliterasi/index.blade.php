@extends('trainer.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__selection__title">
        <h4>Data Absensi</h4>
    </div>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success1') }}
    </div>
@endif
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
                            <th>Status</th>
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
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success2') }}
    </div>
@endif
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Data Pengumpulan Tugas</h4>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="dashboard__table table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Judul</th>
                            <th>Link Blog</th>
                            <th>Link G-Book</th>
                            <th>Status Tugas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1
                        @endphp
                        @foreach ($paratugas as $tugas)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $tugas->user->name }}</td>
                            <td>{{ $tugas->judul }}</td>
                            <td>{{ $tugas->link_blog}}</td>
                            <td>{{ $tugas->link_gbook }}</td>
                            <td>
                                <span class="{{ $tugas->status_tugas ? 'badge bg-success' : 'badge bg-danger' }}">{{ $siswa->status_tugas ? 'Belum Dikerjakan' : 'Selesai' }}</span>
                            </td>
                            <td>
                                <a href="{{ route('change_status_tugas', ['id' => $tugas->id]) }}" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus tugas ini dan mereset status siswa?')">Reset Tugas</a>
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

