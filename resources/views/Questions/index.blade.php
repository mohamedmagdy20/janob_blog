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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>العنوان</th>
                        <th>عدد الاجابات</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $index => $question )
                    <tr>
                        <td>{{$index +1}}</td>
                        <td>{{$question->body}}</td>
                        <td>{{count($question->answer)}}</td>
                        <td>
                            <a href="{{ route('poll.show', $question->id) }}" class="btn btn-warning"><i
                                class="fa fa-eye text-white"></i></a>
                            <a href="{{ route('poll.delete', $question->id) }}" class="btn btn-danger"  title="Delete" id="delete"><i
                                class="fa fa-trash"></i></a>
                            <a href="{{ route('poll.edit', $question->id) }}" class="btn btn-primary"><i
                                    class="fa fa-pen"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        <div class="card-footer clearfix">
            {{ $questions->links() }}
        </div>
    </div>
@endsection
