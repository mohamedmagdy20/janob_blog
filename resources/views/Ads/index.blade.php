@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الإعلانات</h3>
            <div class="text-center">
                <a href="{{ route('Ad.create') }}" class="btn btn-primary">إضافة إعلان <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
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
                {{-- @foreach ($blogs as $index => $blog)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $Ad->title }}</td>
                        <td>{{ $Ad->type }}</td>
                        <td>{{ $Ad->likes }}</td>
                        <td>
                            <a href="{{ route('Ad.show', $blog->id) }}" class="btn btn-warning"><i
                                    class="fa fa-eye text-white"></i></a>
                            <a href="{{ route('Ad.delete', $blog->id) }}" class="btn btn-danger"><i
                                    class="fa fa-trash"></i></a>
                            <a href="{{ route('Ad.edit', $blog->id) }}" class="btn btn-primary"><i
                                    class="fa fa-pen"></i></a>
                        </td>
                    </tr>
                @endforeach --}}
            </table>
        </div>

        <div class="card-footer clearfix">
            {{-- {{ $blogs->links() }} --}}
        </div>
    </div>
@endsection
