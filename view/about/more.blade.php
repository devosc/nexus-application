@extends(['layout', 'template' => 'layout'])
@section('content')
@import(arc5)

@{{ test }}
<div class="jumbotron">
    <h1><a href="{{ url('explore/more') }}">More</a></h1>
    <p class="lead">{!! 'Demo Application.' !!}</p>
    <pre>{{ __FILE__ }}</pre>
    <p>
        <a style="margin-left:10px;" class="btn btn-primary btn-lg" href="{{ url('explore') }}" role="button">Explore</a>
    </p>
</div>
@php

    /** @var Request $request */

    $request = $this->shared('request');

    var_dump([
        'name'   => $request['name'],
        'uri'    => $request['uri'],
        'params' => $request['params'],
    ]);

@endphp

@endsection