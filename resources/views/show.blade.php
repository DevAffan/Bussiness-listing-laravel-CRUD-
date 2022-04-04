@extends('layouts.app')

@section('content')

    <div class="m-auto" style="font-size: 40px">Company: {{$listing->name}}</div>

    <div class="list-group">
        <div class="list-grou-item">
            Address: {{$listing->address}}
        </div>
        <div class="list-grou-item">
            Eamil: {{$listing->eamil}}
        </div>
        <div class="list-grou-item">
            Phone: {{$listing->phone}}
        </div>
        <div class="list-grou-item">
            Website: {{$listing->website}}
        </div>
        <div class="list-grou-item">
            Bio: {{$listing->bio}}
        </div>
    </div>
@endsection
