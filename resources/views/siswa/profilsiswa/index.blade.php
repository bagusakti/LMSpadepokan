@extends('siswa.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Profil saya</h4>
    </div>
    <div class="row">
        
        <div class="col-lg-4 col-md-4">
            <div class="dashboard__form">Nama</div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div class="dashboard__form">{{ $siswa->name }}</div>
        </div>


        <div class="col-lg-4 col-md-4">
            <div class="dashboard__form dashboard__form__margin">Email</div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div class="dashboard__form dashboard__form__margin">{{ $siswa->email }}</div>
        </div>


        <div class="col-lg-4 col-md-4">
            <div class="dashboard__form dashboard__form__margin">Institusi</div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div class="dashboard__form dashboard__form__margin">{{ $siswa->institusi }}</div>
        </div>


        <div class="col-lg-4 col-md-4">
            <div class="dashboard__form dashboard__form__margin">Nomor Whatsapp</div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div class="dashboard__form dashboard__form__margin">{{ $siswa->whatsapp }}</div>
        </div>
        
    </div>
</div>
@endsection