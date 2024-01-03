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
                            <td><span class="{{ $siswa->status ? 'dashboard__td dashboard__td__2' : 'dashboard__td ' }}">{{ $siswa->status ? 'Belum Lulus' : 'Lulus' }}</span></td>

                            {{-- <td><span class="dashboard__td dashboard__td__2">Processing</span></td> --}}

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

