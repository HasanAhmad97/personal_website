@php
$settings  = \App\Models\User::first();
$portfolios = \App\Models\Portfolio::orderBy('id','DESC')->paginate();
@endphp
@extends('layouts.app',[
  'page_title'=>"معرض الأعمال",
  'page_description'=>"معرض أعمال ".$settings->name
])
@section('content')
<div class="col-12 p-0 main" style="transition: .5s all ease-in-out;">
  <div class="col-12 p-0">
  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts">
  <blockquote><h2>معرض أعمالي .</h2><h5><br>لحسن الحظ أن لدي معرض أعمال بالفعل على منصة نفذلي&nbsp;</h5><h5>يمكنك عرضه بكل بساطة عبر الرابط التالي .</h5><h5><a href="https://nafezly.com/u/hasan_ahmad/portfolio">رابط معرض أعمالي</a>&nbsp;</h5></blockquote>
  </div>
  <div class="col-12 row p-2 d-flex justify-content-center">
  </div>
  <div class="col-12 p-3">
  </div>
<div class="col-12 p-0">
  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts">
    {!!$settings->portfolios_text!!}
  </div>
  <div class="col-12 row p-2 d-flex justify-content-center">
    @foreach($portfolios as $portfolio)
    <div class="col-12 col-12 col-md-6 col-lg-3 ">
      <a href="{{route('front.portfolio.show',$portfolio)}}" class="d-block">
        <div class="col-12 p-0 ">
          <img  src="{{$portfolio->main_image_url()}}" style="width:100%">
          <div class="col-12 p-2 border ">
            <h2 style="font-size:15px;line-height: 1.8;">{{$portfolio->title}}</h2>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  <div class="col-12 p-3">
    {{$portfolios->links()}}
  </div>
</div>
@endsection