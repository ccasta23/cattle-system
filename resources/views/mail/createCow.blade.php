@extends('layouts.base')
@section('content') {{-- @yield('content') --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">{{$cow->cow_name}}</h1>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <p><strong>Name:</strong> {{$cow->cow_name}}</p>
                    <p><strong>Alias:</strong> {{$cow->cow_alias}}</p>
                    <p><strong>Code:</strong> {{$cow->cow_code}}</p>
                    <p><strong>Birthdate:</strong> {{$cow->cow_birthdate}}</p>
                    <p><strong>Weight:</strong> {{$cow->cow_weight}} KG</p>
                    <p><strong>Height:</strong> {{$cow->cow_height}} CM</p>
                    <p><strong>Breed:</strong> {{$cow->cow_breed}}</p>
                </div>
                <div class="col-6">
                    <h2 class="alert alert-success">Vaccines</h2>
                    <div class="col-12">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Vaccine Name</th>
                                <th scope="col">Vaccine Description</th>
                                <th scope="col">Vaccine Observations</th>
                                <th scope="col">Vaccine Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($cow->vaccines as $vaccine)
                                    <tr>
                                        <td>{{$vaccine->vaccine_name}}</td>
                                        <td>{{$vaccine->vaccine_description}}</td>
                                        <td>{{$vaccine->pivot->cow_vaccine_observations}}</td>
                                        <td>{{$vaccine->pivot->cow_vaccine_date}}</td>
                                    </tr>-->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

