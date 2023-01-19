@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">المقالات</h3>
            <div class="text-center">
                <a href="{{ route('blog.create') }}" class="btn btn-primary">إضافة مقال <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>العنوان</th>
                        <th>النوع</th>
                        <th>عدد الاعجابات</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                @foreach ($blogs as $index => $blog)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->type }}</td>
                        <td>{{ $blog->likes }}</td>
                        <td>
                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-warning"><i
                                    class="fa fa-eye text-white"></i></a>
                            <a href="{{ route('blog.delete', $blog->id) }}" class="btn btn-danger"  title="Delete" id="delete"><i
                                    class="fa fa-trash"></i></a>
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary"><i
                                    class="fa fa-pen"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="card-footer clearfix">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
