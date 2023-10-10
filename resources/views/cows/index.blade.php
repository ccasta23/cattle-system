@extends('layouts.base')
@section('content') {{-- @yield('content') --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Cattle System - Cows</h1>
        </div>
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Alias</th>
                        <th scope="col">Code</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Height</th>
                        <th scope="col">Breed</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cows as $cow)
                        <tr>
                            <th scope="row">{{$cow->id_cow}}</th>
                            <td>{{$cow->cow_name}}</td>
                            <td>{{$cow->cow_alias}}</td>
                            <td>{{$cow->cow_code}}</td>
                            <td>{{$cow->cow_birthdate}}</td>
                            <td>{{$cow->cow_weight}} KG</td>
                            <td>{{$cow->cow_height}} CM</td>
                            <td>{{$cow->cow_breed}}</td>
                            {{-- <td><a class="btn btn-success" href="/cows/{{$cow->id_cow}}/edit">Edit</td> --}}
                            <td><a class="btn btn-success" href="{{route('cows.edit', $cow)}}"><i class="fa-solid fa-pen-to-square"></i></td>
                            <td>
                                <form 
                                    action="{{route('cows.destroy', $cow)}}" 
                                    method="post"
                                    onsubmit="return confirm('Are you sure?')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <a href="/cows/create" class="btn btn-success">Add Cow</a>
        </div>
    </div>
</div>
@endsection