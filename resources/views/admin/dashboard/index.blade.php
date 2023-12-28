@extends('admin.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Dashboard</h4>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <div class="dashboard__single__counter">
                <div class="counterarea__text__wraper">
                    <div class="counter__img">
                        <img src="../img/counter/counter__1.png" alt="counter">
                    </div>
                    <div class="counter__content__wraper">
                        <div class="counter__number">
                            <span class="counter">900</span>+

                        </div>
                        <p>Enrolled Courses</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <div class="dashboard__single__counter">
                <div class="counterarea__text__wraper">
                    <div class="counter__img">
                        <img src="../img/counter/counter__2.png" alt="counter">
                    </div>
                    <div class="counter__content__wraper">
                        <div class="counter__number">
                            <span class="counter">500</span>+

                        </div>
                        <p>Active Courses</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <div class="dashboard__single__counter">
                <div class="counterarea__text__wraper">
                    <div class="counter__img">
                        <img src="../img/counter/counter__3.png" alt="counter">
                    </div>
                    <div class="counter__content__wraper">
                        <div class="counter__number">
                            <span class="counter">300</span>k

                        </div>
                        <p>Complete Courses</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <div class="dashboard__single__counter">
                <div class="counterarea__text__wraper">
                    <div class="counter__img">
                        <img src="../img/counter/counter__4.png" alt="counter">
                    </div>
                    <div class="counter__content__wraper">
                        <div class="counter__number">
                            <span class="counter">1500</span>+

                        </div>
                        <p>Total Courses</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <div class="dashboard__single__counter">
                <div class="counterarea__text__wraper">
                    <div class="counter__img">
                        <img src="../img/counter/counter__3.png" alt="counter">
                    </div>
                    <div class="counter__content__wraper">
                        <div class="counter__number">
                            <span class="counter">30</span>k

                        </div>
                        <p>Total Students</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <div class="dashboard__single__counter">
                <div class="counterarea__text__wraper">
                    <div class="counter__img">
                        <img src="../img/counter/counter__4.png" alt="counter">
                    </div>
                    <div class="counter__content__wraper">
                        <div class="counter__number">
                            <span class="counter">90,000</span>K+

                        </div>
                        <p>Total Earning</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dashboard__admin__report__wrap">
    <div class="dashboard__admin__report dashboard__linechart">
        <div class="dashboard__admin__report__top">
            <div class="dashboard__section__title">
                <h4>Dashboard</h4>
                <select class="form-select" aria-label="Default select example">
                    <option selected>HTML</option>
                    <option value="1">CSS</option>
                    <option value="2">Javascript</option>
                    <option value="3">PHP</option>
                    <option value="4">WordPress</option>
                </select>
            </div>
        </div>
        <canvas id="lineChart"></canvas>
    </div>
    <div class="dashboard__admin__report dashboard__piechart">
        <div class="dashboard__admin__report__top">

            <div class="dashboard__section__title">
                <h4>Traffic</h4>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Today</option>
                    <option value="1">Weekly</option>
                    <option value="2">Monthly</option>
                    <option value="3">Yearly</option>
                </select>
            </div>
        </div>
        <canvas id="pieChart"></canvas>
    </div>
</div>
@endsection