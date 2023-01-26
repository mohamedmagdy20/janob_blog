@extends('layouts.app')
@section('content')
    <style>
        label {
            float: right;
            clear: both
        }
    </style>
    <div class="container" style="margin-top:0;padding-top:30px;direction:rtl">
        <div class="card card-primary" style="padding-top:0">
            <div class="card-header">
                <h3 class="card-title" style="float:right;clear:both"> المقاله</h3>
            </div>


            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان المقاله</label>
                        <input type="test" value="{{$blog->title}}" disabled class="form-control" id="exampleInputEmail1" placeholder="عنوان المقاله">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" disabled placeholder="المحتوى">{{$blog->body}}</textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">النوع</label>
                        <input type="test" value="{{$blog->type}}" disabled class="form-control" id="exampleInputEmail1" placeholder="عنوان المقاله">
                       
                    </div> --}}
                    <div class="form-group">
                        <div class="form-group">
                            <div class="img-fluid text-center">
                                <img class="w-25" src="{{asset('blog-img/'.$blog->img)}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <div class="img-fluid text-center">
                                <iframe src="{{asset('blog-file/'.$blog->file)}}" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div id="answer_inputs" class="row mt-2">

                            @foreach ($blog->comment as $comment )
                            <div class="col-md-6 mb-2 ">
                                <input type="text" name="answers[]" disabled value="{{$comment->body}}" class="form-control">
                                <a style="position: absolute; top:10px;left:15px" href="{{route('comment.delete',$comment->id)}}"><i class="fa fa-trash text-danger"></i></a>
                            </div>
                                @endforeach
                        </div>
    
                    </div>
                </div>

                <center class="card-footer">
                    <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary">تعديل </a>
                </center>
            </form>
        </div>
    </div>
@endsection
