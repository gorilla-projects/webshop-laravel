@extends('admin.layouts.app')

@section('content')
    <form method="{{ $method }}" action="{{ $action }}" autocomplete="off">
        <div class="container-fluid">
            <h3 class="mt-3">{{ $method == 'PUT' ? "Edit" : "Create" }} user</h3>
            <div class="row">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="first_name">First name</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ isset($user) ? $user->first_name : '' }}">
                    </div>
                </div>

                <div class="col-5">
                    <div class="mb-3">
                        <label for="last_name">Last name</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ isset($user) ? $user->last_name : '' }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" autocomplete="off" value="{{ isset($user) ? $user->email : '' }}">
                    </div>
                </div>
                
                <div class="col-3">
                    <div class="mb-3">
                        <label for="last_name">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>

                <div class="mt-3">
                    <input type="submit" value="Save">
                </div>
            </div>
        </div>
    </form>
@endsection