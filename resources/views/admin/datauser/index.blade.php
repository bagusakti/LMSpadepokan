@extends('admin.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Data Users  | {{ $courses->name }}</h4>
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
                        @foreach ($courses->users as $siswa)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $siswa->name }}</td>
                            <td>{{ $siswa->institusi }}</td>
                            <td>{{ $siswa->whatsapp }}</td>
                            <td>{{ $siswa->email }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
