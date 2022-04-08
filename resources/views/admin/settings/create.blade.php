@extends('layouts.app')
@section('title', 'Create User')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Users</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Users</a>
                                </li>
                                <li class="breadcrumb-item active">Create User
                                </li>
                       
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create User</h4>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">Errors</h4>
                                    <div class="alert-body">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endif
                                <form action="{{route('admin.users.store')}}" method="POST">
                                    @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" placeholder="Name" />
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="email">Email</label>
                                            <small class="text-muted">eg.<i>someone@example.com</i></small>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label" for="select2-multiple">Roles</label>
                                        <div class="mb-1">
                                        <select class="select2 form-select @error('roles') is-invalid @enderror" name="roles[]" id="select2-multiple" multiple>
                                            @foreach($roles as $key => $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('roles')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-12">
                                       <button class="btn btn-primary" type="submit">Submit</button>
                                   </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->

@endsection