@extends('layouts/vertical')

@section('title', 'Title')

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Portal Karyawan</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total Dokumen</span>
                        <h2 class="mb-0">-</h2>
                    </div>
                    <div class="align-self-center" style="position: relative;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Coming soon</span>
                        <h2 class="mb-0">-</h2>
                    </div>
                    <div class="align-self-center" style="position: relative;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Coming soon</span>
                        <h2 class="mb-0">-</h2>
                    </div>
                    <div class="align-self-center" style="position: relative;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Coming soon</span>
                        <h2 class="mb-0">-</h2>
                    </div>
                    <div class="align-self-center" style="position: relative;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- content --}}
<div class="row">
    <div class="col-xl-9">
        <div class="card">
            <div class="card-body">
                {{-- <a href="" class="btn btn-primary btn-sm float-right">
                    <i class="uil uil-export ml-1"></i> Export
                </a> --}}
                <h5 class="card-title mt-0 mb-0 header-title">Berita Terbaru! <div class="badge badge-danger float-right">Headline News</div></h5>
                <br>
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('img/portal/BERITA_ACARA.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/portal/berita_acara_flow.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/pexels-cliff-booth-4058226.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                    </div>

                    <div class="row bg-light p-1">
                    <div class="col-lg-6 col-xl-3">
                        <!-- Simple card -->
                        <div class="card mb-4 mb-xl-0">
                            <img class="card-img-top img-fluid" src="{{asset('html/dist')}}/assets/images/small/img-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title font-size-16">Card title</h5>
                                <p class="card-text text-muted">Some quick example text to build on the card title and make
                                    up the bulk of the card's content. With supporting text below as a natural lead-in to additional content.</p>
                                <a href="javascript:void(0);" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-4 mb-xl-0">
                            <img class="card-img-top img-fluid" src="{{asset('html/dist')}}/assets/images/small/img-2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title font-size-16">Card title</h5>
                                <p class="card-text text-muted">Some quick example text to build on the card title.</p>
                            </div>
                            <ul class="list-group list-group-flush  text-muted">
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                            </ul>
                            <div class="card-body">
                                <a href="javascript:void(0);" class="card-link text-custom">Card link</a>
                                <a href="javascript:void(0);" class="card-link text-custom">Another link</a>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-5">
                                    <img src="{{asset('html/dist')}}/assets/images/small/img-6.jpg" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title font-size-16">Card title</h5>
                                        <p class="card-text text-muted">This is a wider card with supporting text lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title font-size-16">Card title</h5>
                                        <p class="card-text text-muted">This is a wider card with supporting text lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{asset('html/dist')}}/assets/images/small/img-4.jpg" class="card-img" alt="...">
                                </div>

                            </div>
                        </div>

                    </div><!-- end col -->
                </div>



            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body pt-2">
                <h5 class="mb-4 header-title">Daftar Online</h5>
                <div class="media border-top pt-3">
                    <img src="{{asset('html/dist')}}/assets/images/users/avatar-7.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Shreyu N</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Senior Sales Guy</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown" aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-exit mr-2"></i>Remove from Team</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="media mt-1 border-top pt-3">
                    <img src="{{asset('html/dist')}}/assets/images/users/avatar-9.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Greeva Y</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Social Media Campaign</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown" aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-exit mr-2"></i>Remove from Team</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="media mt-1 border-top pt-3">
                    <img src="{{asset('html/dist')}}/assets/images/users/avatar-4.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Nik G</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Inventory Manager</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown" aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-exit mr-2"></i>Remove from Team</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="media mt-1 border-top pt-3">
                    <img src="{{asset('html/dist')}}/assets/images/users/avatar-1.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Hardik G</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Sales Person</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown" aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-exit mr-2"></i>Remove from Team</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>

                <div class="media mt-1 border-top pt-3">
                    <img src="{{asset('html/dist')}}/assets/images/users/avatar-5.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Stive K</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-1">Sales Person</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown" aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-exit mr-2"></i>Remove from Team</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
