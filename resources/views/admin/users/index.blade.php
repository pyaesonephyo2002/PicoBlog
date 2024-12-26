@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
    <h1 class="mt-4 d-inline">Users</h1>
    <a href="{{route('backend.users.create')}}" class="btn btn-primary float-end">Create User</a>
    </div>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
  
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Posts List
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Profile</th>
                        <th>Role</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Profile</th>
                        <th>Role</th>
                        <th>#</th>
                    </tr>
                </tfoot>
               <tbody>
                @php
                    $i =1;
                @endphp
                    @foreach($users as $user)
                    <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger ">Delete</a>

                        </td>
                    </tr>
                    @endforeach
               </tbody>
            </table>

            {{$users->links()}}
        </div>
    </div>
</div>


@endsection
