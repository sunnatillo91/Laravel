@extends('app')

@section('title', 'Bu jamoa azolari sahifasi')

@section('content')

<h1>Bu members sahifasi</h1>
<ul>
    @foreach($members as $member)
    <li>{{ $member }} </li>
    @empty
        Hech qanday jamoa a'zosi mavjud emas.
    @endforelse
</ul>

@endsection