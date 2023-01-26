@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">السوشيال ميديا</h3>
        <div class="text-center">
            <a href="{{ route('social.create') }}" class="btn btn-primary">إضافة سوشيال ميديا <i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-responsive ">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>اللينك</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            @foreach ($socialMedia as $index => $social)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $social->link }}</td>
                    <td>
                        <a href="{{ route('social.delete', $social->id) }}" class="btn btn-danger"  title="Delete" id="delete"><i
                                class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    {{-- <div class="card-footer clearfix">
        {{ $socialMedia->links() }}
    </div> --}}

</div>

@endsection