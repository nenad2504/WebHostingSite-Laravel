@extends('layouts.app')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset('img/contact-bg.jpg')}})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Contact Me</h1>
          <span class="subheading">Have questions? I have answers.</span>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">All the users</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($users as $user)
                            <li class="list-group-item">{{$user->name}}</li>
                            <li class="list-group-item">{{$user->email}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="mt-2 ml-3 mb-4">
                    <a href="/hobby/create" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i> Create new Hobby</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection