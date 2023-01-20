@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      <div class="row pt-5">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
            <div class="inner">
            <h3>{{count($ads)}}</h3>
            <p>اعلانات الموقع</p>
            </div>
            <div class="icon">
                <i class="far fa-calendar-alt"></i>
            </div>
            <a href="{{route('ad.index')}}" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
            </a>
            </div>
            </div>
    
            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                <div class="inner">
                <h3>{{count($blogs)}}</h3>
                <p>المقالات</p>
                </div>
                <div class="icon">
                    <i class="far fa-copy"></i>
                </div>
                <a href="{{route('blogs.index')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
                </div>
    
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>{{count($messages)}}</h3>
                    <p>الرسائل</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <a href="{{route('message.index')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-danger">
                        <div class="inner">
                        <h3>{{count($questions)}}</h3>
                        <p>الاسئله</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-chart-pie"></i>
                        </div>
                        <a href="{{route('poll.index')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                        </div>

            </div>
    
    
        </div>
    </div>
@endsection
