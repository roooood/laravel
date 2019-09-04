@extends('front.layouts.default')
@section('title')
    {{__('title')}}
@stop
@section('content')
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
        <h1>جست و جوی شماره دلخواه</h1>
        <div class="serach-box" >
            <div class="select-wrapper fa fa-angle-down">
                <select>
                    <option></option>
                    <option>0912</option>
                    <option>0919</option>
                    <option>0935</option>
                </select>
            </div>
            <input type="text" style="display:none" id="pincode">
        </div>
        <a href="#get-started" class="btn-get-started scrollto">جست و جو</a>
    </div>
  </section>
@stop