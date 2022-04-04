@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                    <div class="card-header">Create <span style="float: right"><a href="/home" class="btn btn-secondary">back</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            <div class="form-group p-2">
                <form class="form" action="{{route('listings.update' , $list->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Name" value="{{$list->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email" value="{{$list->email}}">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="address" class="form-control" id="address" name="address" placeholder="address" value="{{$list->address}}">
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="website" name="website" class="form-control" id="website" placeholder="website" value="{{$list->website}}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="phone" value="{{$list->phone}}">
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <input type="bio" name="bio" class="form-control" id="bio" placeholder="bio" value="{{$list->bio}}">
                    </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            </div>
        </div>
</div>
@endsection
