@extends('master/master')

@section('content')
<div class="demo-card-square2 mdl-card mdl-shadow--2dp">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="LoginFont">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
