@include('user')
<h1>Blade File</h1>
@if($data['name']=='sumon')
<h3>Same User</h3>
@else
<h3>Other User</h3>
@endif

<h2>Data Retrieved:</h2>
@foreach($data as $key=>$value)
<h4>{{$key}}: {{$value}}</h4>
@endforeach

<x-profile/>
