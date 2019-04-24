
@extends('layouts.master')


@section('content')


<!-- CSS Menu Start-->
<div class="clear"></div>

<!-- Hero Element Strat -->
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
 <!-- Loading Screen -->
 <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
  <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
  <div style="position:absolute;display:block;background:url('{{asset('public')}}/img/loading.html') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
 </div>
 <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
 @foreach($sliders as $slider)
   <div data-p="225.00" style="display: none;"> <img data-u="image" src="{{ asset('public/uploads/large/' . $slider->media->guid) }}" />
   <div style="position: absolute; top: 160px; left: 10%; width: 1000px;; height: 120px; font-size: 45px; color: #ffffff; line-height: 60px;font-family:rr;text-transform:uppercase;font-weight:bold;">{{$slider->post_title}}</div>
   <div style="position: absolute; top: 230px; left: 10%; width: 900px; height: 120px; font-size: 22px; color: #ffffff; line-height: 28px;font-family:rr;text-transform:uppercase;font-weight:600;">{!!@ $slider->post_content !!}</div>
  </div>

  <a data-u="ad" href="http://www.jssor.com/" style="display:none">Bootstrap Slider</a>@endforeach </div>
 <!-- Bullet Navigator -->
 <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
  <!-- bullet navigator item prototype -->
  <div data-u="prototype" style="width:16px;height:16px;"></div>
 </div>
 <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span> <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span> </div>




    @stop