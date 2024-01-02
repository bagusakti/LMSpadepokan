@extends('siswa.partials.main')

@section('content')
<div class="dashboard__content__wraper">
    <div class="dashboard__section__title">
        <h4>Penugasan</h4>
        
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="dashboard__table table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <p>
                                    Pengumpulan Link Blog
                                </p>
                                <form action="">

                                </form>
                            </th>
                            <th></th>
                            <th></th>
                        
                        
                            <td>
                                <div class="dashboard__button__group">
                                    <a class="dashboard__small__btn__2 dashboard__small__btn__3" href="#">
                                        <i class="icofont-paper-plane"></i> Submit
                                    </a>
                                </div>
                            </td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="dashboard__table table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <p>
                                    Pengumpulan Link Gbook
                                </p>
                            </th>
                            <th></th>
                            <th></th>
                        
                        
                            <td>
                                <div class="dashboard__button__group">
                                    <a class="dashboard__small__btn__2 dashboard__small__btn__3" href="#">
                                        <i class="icofont-paper-plane"></i> Submit
                                    </a>
                                </div>
                            </td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-content tab__content__wrapper aos-init aos-animate" id="myTabContent" data-aos="fade-up">

            <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href=""><img src="{{ asset('assets/img/grid/grid_1.png') }}" alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge">Pelatihan Literasi</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="">Pelatihan Literasi</a></h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident nam cupiditate possimus</p>
                                </div>
                                <div class="gridarea__price">
                                    
                                </div>
                                <div class="gridarea__bottom">
                                </div>
                            </div>
                            <div class="grid__course__status populerarea__button">                                  
                                <a class="default__button" href="#">Download Certificate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection