@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="multi" style="text-align:center;">
                        <img src="{{asset('img/dansmultipro.png')}}" alt="logo" style="width: 50%; display: block;
                        margin-left: auto;
                        margin-right: auto;">
                        <form action="/joblist/index">
                            <input type="submit" class="btn btn-warning" value="Job List" style="padding: 8px 36px; margin: 0 auto;" />
                        </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
