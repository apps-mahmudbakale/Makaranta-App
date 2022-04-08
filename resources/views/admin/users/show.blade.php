@extends('layouts.app')
@section('title', 'User Show')
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
                        <h2 class="content-header-title float-start mb-0">User</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Users</a>
                                </li>
                                <li class="breadcrumb-item active"> Show
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <!-- profile -->
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">User Details</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                               <table class="table table-bordered">
                                   <tr>
                                       <td><strong>Name:</strong></td>
                                       <td>{{$user->name}}</td>
                                   </tr>
                                   <tr>
                                       <td><strong>Email:</strong></td>
                                       <td>{{$user->email}}</td>
                                   </tr>
                                   <tr>
                                       <td><strong>Roles:</strong></td>
                                       <td>
                                       @foreach($user->roles as $key => $role)
                                       <span class="badge rounded-pill bg-success">{{ $role->name }}</span>
                                       @endforeach
                                       </td>
                                   </tr>
                               </table>
                            <!--/ form -->
                        </div>
                    </div>
                    <!--/ profile -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection