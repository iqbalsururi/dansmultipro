@extends('layouts.app')

@section('content')
<style>
    .jud{
        margin-bottom: -5px;
    }
    .imeg{
        width: 100%;
    height: 15vw;
    object-fit: cover;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f8fafc;
      height: 100%;
    }
    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
        <div class="card">
            <div class="card-header">{{ $data['company'] }}</div>

            <div class="card-body">
                <img class="imeg" src="{{ $data['company_logo'] }}" alt="logo" />
                <a href="{{$data['company_url']}}">{{$data['company_url']}}</a>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">How To Apply</div>
            <div class="card-body">
                {!! $data['how_to_apply'] !!}
                
                
            </div>
        </div>
    </div>

    <div class="col-sm-9">
      
      
      <p><span class="badge">{{$data['created_at']}}</span></p>
      <h2 class="jud"><strong>{{$data['title']}}</strong></h2>
      <p><span class="badge">{{$data['type']}} - {{$data['location']}} </span></p>
      <div class="row">
       <h5></h5>
       <span>
        {!! $data['description'] !!}
    </span>
       
       
        
      </div>
    </div>
  </div>
</div>

<script>
</script>

@endsection
