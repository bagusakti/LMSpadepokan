@extends('admin.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Dashboard Admin | Course Saat Ini</h4>
    </div>
    <div class="row">
        @foreach ($courses as $course)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="fade-up">
            <div class="single__blog__wraper">
                <div class="single__blog__img">
                    <img src="{{asset("storage/program/$course->image")}}" alt="{{ $course->name }}">
                </div>
                <div class="single__blog__content">
                    <p>{{ $course->category }}</p>
                    <h4> <a href="{{ route('course_detail', $course->id) }}">{{ $course->name }}</a></h4>
                    <div class="single__blog__bottom__button">
                        <a href="{{ route('course_detail', $course->id) }}">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection