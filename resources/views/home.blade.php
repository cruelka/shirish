@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="grey-text center-align">Hi, {{\Illuminate\Support\Facades\Auth::user()->name}}</div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="center-align" style="height: 500px">You are logged in!</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
