@extends('user.layouts.default')
@section('title')
    haraji
@stop
@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
        </span> {{__('dashboard')}} 
    </h3>
    
</div>
<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
            <img src="user/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">{{__('auctionOwner')}}<i
                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-2 text-center">1</h2>
        </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
        <div class="card-body">
            <img src="user/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">{{__('auctionCompany')}}<i
                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-2  text-center">2</h2>
        </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
            <img src="user/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">{{__('orders')}}<i
                class="mdi mdi-diamond mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-2  text-center">1</h2>
        </div>
        </div>
    </div>
</div>
@stop