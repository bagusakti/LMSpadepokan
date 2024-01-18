@extends('admin.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <a class="btn btn-secondary" href="{{ URL::previous() }}">Kembali</a>
        <h4>Detail Course | {{ $course->name }}</h4>

    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="dashboard__table table-responsive">
                <table>
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    Nama :
                                    <li>{{ $course->name }}</li>
                                </ul>
                                <ul>
                                    Kategori :
                                    <li>{{ $course->category }}</li>
                                </ul>
                                <ul>
                                    Deskripsi 1 :
                                    <li>{{ $course->d1 }}</li>
                                </ul>
                                <ul>
                                    Deskripsi 2 :
                                    <li>{{ $course->d2 }}</li>
                                </ul>
                                <ul>
                                    Keuntungan 1 :
                                    <li>{{ $course->p1 }}</li>
                                </ul>
                                <ul>
                                    Keuntungan 2 :
                                    <li>{{ $course->p2 }}</li>
                                </ul>
                                <ul>
                                    Keuntungan 3 :
                                    <li>{{ $course->p3 }}</li>
                                </ul>

                                <ul>
                                    Deskripsi Poin 1 :
                                    <li>{{ $course->dp1 }}</li>
                                </ul>
                                <ul>
                                    Deskripsi Poin 2 :
                                    <li>{{ $course->dp2 }}</li>
                                </ul>
                                <ul>
                                    Deskripsi Poin 3 :
                                    <li>{{ $course->dp3 }}</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection