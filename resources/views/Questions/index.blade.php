@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الاسئله المطروحه</h3>
            <div class="text-center">
                <a href="{{ route('poll.create') }}" class="btn btn-primary">إضافة سؤال <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-responsive w-100">
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
                {{-- @foreach ($Question as $index => $Question)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $Question->title }}</td>
                        <td>{{ $Question->type }}</td>
                        <td>{{ $Question->likes }}</td>
                        <td>
                            <a href="{{ route('blog.show', $Question->id) }}" class="btn btn-warning"><i
                                    class="fa fa-eye text-white"></i></a>
                            <a href="{{ route('blog.delete', $Question->id) }}" class="btn btn-danger"><i
                                    class="fa fa-trash"></i></a>
                            <a href="{{ route('blog.edit', $Question->id) }}" class="btn btn-primary"><i
                                    class="fa fa-pen"></i></a>
                        </td>
                    </tr>
                @endforeach --}}
            </table>
        </div>

        <div class="card-footer clearfix">
            {{-- {{ $Question->links() }} --}}
        </div>
    </div>
@endsection
