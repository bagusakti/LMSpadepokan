@extends('siswa.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Dashboard</h4>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="dashboard__single__counter">
                <div class="counterarea__text__wraper">
                    <h2>Selamat Datang, {{ $users->name }} Semangat Berkarya</h2>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection