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
                <form class="form" action="{{route('listings.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="address" class="form-control" id="address" name="address" placeholder="address">
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="website" name="website" class="form-control" id="website" placeholder="website">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="phone">
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <input type="bio" name="bio" class="form-control" id="bio" placeholder="bio">
                    </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
</div>
@endsection
