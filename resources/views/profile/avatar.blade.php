@extends('layouts.app')
@section('header')
    @include('layouts.header')
@endsection

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <strong>{{ $message }}</strong>

                </div>

            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3">
                    <div class="card p-2 text-center">
                        <img id="profile-img" class="card-img-top" src="/storage/avatars/{{ $user->avatar }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{$user->name}}</h4>
                        </div>
                    </div>


                        <!-- <div class="profile-header-container">
                                <div class="profile-header-img">
                                    <img class="rounded-circle" src="/storage/avatars/{{ $user->avatar }}" height="150px" width="150px%" />
                                   
                                    <div class="rank-label-container">
                                        <span class="label label-default rank-label">{{$user->name}}</span>
                                    </div>
                                </div>
                            </div> -->
                </div>
                <div class="col-md-9">
                        <form action="/profile" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
            </div>
        </div>
    @endsection
