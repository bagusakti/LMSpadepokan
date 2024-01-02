@extends('trainer.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Dashboard</h4>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <div class="dashboard__single__counter">
                <div class="counterarea__text__wraper">
                    
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
                            <span class="counter">08</span>+

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
                            <span class="counter">5</span>k

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
                            <span class="counter">14</span>+

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
                            <span class="counter">10</span>k

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
                            <span class="counter">30,000</span>+

                        </div>
                        <p>Total Earning</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Dashboard</h4>
        <a href="../course.html">See More...</a>
    </div>
    <div class="row">
    <div class="col-xl-12">
        <div class="dashboard__table table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Enrolled</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><a href="#">Javascript</a></th>
                        <td>1100</td>
                        <td>
                            <div class="dashboard__table__star">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </div>
                        </td>
                    </tr>
                    <tr class="dashboard__table__row">
                        <th><a href="#">PHP</a></th>
                        <td>700</td>
                        <td>
                            <div class="dashboard__table__star">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="#">HTML</a></th>
                        <td>1350</td>
                        <td>
                            <div class="dashboard__table__star">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </div>
                        </td>
                    </tr>
                    <tr class="dashboard__table__row">
                        <th><a href="#">Graphic</a></th>
                        <td>1266</td>
                        <td>
                            <div class="dashboard__table__star">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
@endsection

