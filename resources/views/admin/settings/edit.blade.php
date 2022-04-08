@extends('layouts.app')
@section('title', 'Update User')
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
                                <li class="breadcrumb-item active">Update User
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
                                <h4 class="card-title">Update User</h4>
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
                                <form action="{{ route('admin.settings.store') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label for="app_name">App name</label>
                                        <input type="text" name="app_name" class="form-control @error('app_name') is-invalid @enderror" id="app_name"
                                               placeholder="App name" value="{{ old('app_name', config('settings.app_name')) }}">
                                        @error('app_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="app_description">App description</label>
                                        <textarea name="app_description" class="form-control @error('app_description') is-invalid @enderror" id="app_description"
                                                  placeholder="App description">{{ old('app_description', config('settings.app_description')) }}</textarea>
                                        @error('app_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="currency_symbol">Currency symbol</label>
                                        <input type="text" name="currency_symbol" class="form-control @error('currency_symbol') is-invalid @enderror" id="currency_symbol"
                                               placeholder="Currency symbol" value="{{ old('currency_symbol', config('settings.currency_symbol')) }}">
                                        @error('currency_symbol')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Change Setting</button>
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