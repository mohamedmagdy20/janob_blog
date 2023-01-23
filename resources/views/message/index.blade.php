@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الرسائل</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>الاسم</th>
                        <th>الرساله</th>
                        <th>تاريخ الارسال</th>

                    </tr>
                </thead>
                <tbody>
                </tbody>
                @foreach ($messages as $index => $message)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{$message->name}}</td>
                        <td>{{ $message->body }}</td>
                        <td>{{ $message->created_at->format('Y-m-d  H:i:s') }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="card-footer clearfix">
            {{ $messages->links() }}
        </div>
    </div>
@endsection
