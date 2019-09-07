@extends('user.layouts.default')
@section('title')
    haraji
@stop
@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-face"></i>
        </span> {{__('profile')}} 
    </h3>
    
</div>
<div class="card">
    <div class="card-body">
        @if($page == 'basic')
        <p class="card-description">{{__('basicInfo')}}</p>
        <form class="forms-sample">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">{{__('name')}}</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" placeholder="{{__('name')}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="family" class="col-sm-2 col-form-label">{{__('family')}}</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="family" placeholder="{{__('family')}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">{{__('gender')}}</label>
                   <div class="col-sm-2">
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="gender1" value="male" checked> {{__('male')}} </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="gender2" value="fmale"> {{__('fmale')}} </label>
                        </div>
                    </div>
            </div>
            <div class="form-group row">
                <label for="id-cumber" class="col-sm-2 col-form-label">{{__('idNumber')}}</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="id-number" placeholder="{{__('idNumber')}}">
                </div>
            </div>
            <button type="submit" class="btn btn-gradient-success mr-2">{{__('submit')}}</button>
        </form>
        @endif
    </div>
</div>
@stop