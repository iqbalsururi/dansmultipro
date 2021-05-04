@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div id="search" class="clearfix">

                        <form class="positions" action="/joblist/index" accept-charset="UTF-8" method="get">
                            <input name="utf8" type="hidden" value="✓">
                            <input name="page1" type="hidden" value="0">
                            <div class="form-row align-items-center">
                                <div class="col-sm-4">
                                    <div class="form-group col-sm-2">
                                        <label >Description</label>
                                        <input type="text" name="description" id="description" value="" placeholder="Filter by title, benefits, companies, expertise" autocomplete="off">
                                      </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group col-sm-2">
                                        <label >Location</label>
                                        <input type="text" name="location" id="location" value="" placeholder="Filter by city, state, zip code or country" autocomplete="off">
                                      </div>
                                </div>
                                <div class="col-sm-2">
                                  <div class="form-check mb-2">
                                    <input type="checkbox" name="full_time" id="full_time_field" value="on">
                                    <label class="form-check-label" for="autoSizingCheck">
                                      Full Time
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-2">
                                  <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                </div>
                              </div>
                    </form>
                    </div>

                        @foreach ($data as $item)
                        <div class="card">
                            <div class="card-header">
                                {{$item['title']}}
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">{{$item['company']}}</h5>
                              @if ($item['type'] == 'Full Time')
                              <p class="card-text" style="color: greenyellow"><strong>{{$item['type']}}</strong><span style="color: black">-{{$item['location']}}</span></p>
                              @else
                              <p class="card-text">{{$item['type']}} - {{$item['location']}}</p>
                              @endif
                              <a href="/detail/{{ $item['id'] }}" class="btn btn-primary">Detail</a>
                            </div>
                          </div>
                          <br>
                            
                        @endforeach

                        <form class="button" action="/joblist/index" accept-charset="UTF-8" method="get">
                            <input name="pagea" id="pagea" type="hidden" value="{{$page}}" />
                            <button type="submit" class="btn btn-warning btn-lg btn-block">More Page</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
