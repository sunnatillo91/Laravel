@extends('layouts.app')
@section('content')
    <h1 class="text-center p-3">Laboratoriya haqida ma'lumot</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-3">
                <a href="{{ route('companies.index') }}">Ortga</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td>Laboratoriya nomi</td>
                    <td>{{ $company->name }}</td>
                </tr>       
                <tr>
                    <td>Laboratoriya manzili</td>
                    <td>{{ $company->address }}</td>
                </tr>
                <tr>
                    <td>Laboratoriya telefoni</td>
                    <td>{{ $company->phone }}</td>
                </tr>
                <tr>
                    <td>Qo'shilgan vaqti</td>
                    <td>{{ $company->created_at }}</td>
                </tr>
            </table>
        </div>
    </div>
    
@endsection