@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الإعلانات</h3>
            <div class="text-center">
                <a href="{{ route('ad.create') }}" class="btn btn-primary">إضافة إعلان <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>العنوان</th>
                        <th>تاريخ من</th>
                        <th>تاريخ الي</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ads as $index => $ad )
                    <td>{{$index +1}}</td>
                    <td>{{$ad->title}}</td>
                    <td>{{$ad->date_from}}</td>
                    <td>{{$ad->date_to}}</td>
                    <td>
                        <a href="{{ route('ad.show', $ad->id) }}" class="btn btn-warning"><i
                                class="fa fa-eye text-white"></i></a>
                        <a href="{{ route('ad.delete', $ad->id) }}" class="btn btn-danger"  title="Delete" id="delete"><i
                                class="fa fa-trash"></i></a>
                        <a href="{{ route('ad.edit', $ad->id) }}" class="btn btn-primary"><i
                                class="fa fa-pen"></i></a>
                    </td>
                    @endforeach                    
                </tbody>
               
            </table>
        </div>

        <div class="card-footer clearfix">
            {{ $ads->links() }}
        </div>
    </div>
@endsection
