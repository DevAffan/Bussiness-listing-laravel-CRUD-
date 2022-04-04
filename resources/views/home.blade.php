@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <span style="float: right"><a href="{{route('listings.create')}}" class="btn btn-success">Create</a></span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($listings))
                    <table class="table">
                            <th>
                                Companies
                            </th>
                            <th></th>
                        @foreach ($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td>
                                    <a href="{{route('listings.edit' , $listing->id)}}" class="btn btn-info" style="float: right">Edit</a>
                                    <form action="{{route('listings.destroy' , $listing->id)}}" method="post" style="float: right">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger mx-2">
                                    </form>
                                </td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                        <tr></tr>
                    </table>
                @endif
                </div>



            </div>
        </div>
    </div>
@endsection
