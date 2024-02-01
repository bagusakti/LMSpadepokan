@extends('web.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Data CATC</h4>
        <div>
            <a class="btn btn-primary" href="{{ URL::previous() }}">
                Kembali
            </a>
            @if (Auth::check() && $users->hasRole('admin'))
            <a class="btn btn-secondary" href="{{ route('admin_catc_import') }}">
                Import Excel
            </a>
            <a class="btn btn-warning" href="{{ route('admin_catc_export') }}">
                Ekspor Excel
            </a>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="dashboard__table table-responsive">
                
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Sekolah</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Unduh Sertifikat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($catc as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->sekolah }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
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