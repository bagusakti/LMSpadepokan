@extends('admin.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Data CATC</h4>
    </div>
    <div class="row">
        <form action="{{ route('admin_catc_import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control">
            <br>
            <button class="btn btn-secondary">Import Excel</button>
            <a class="btn btn-warning" href="{{ route('admin_catc_export') }}">Ekspor Excel</a>
        </form>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection