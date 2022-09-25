@extends('layouts.app')
@section('content')
    <h1 class="text-center p-3">Laboratoriya ma'lumotlarini o'zgartirish</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('companies.update', ['company' => $company->id]) }}">
                @method('PUT')
                @csrf
                @include('companies.form')     
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
    
@endsection