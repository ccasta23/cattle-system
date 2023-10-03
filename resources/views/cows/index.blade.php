<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cattle System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        
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
                                    <td><a class="btn btn-success" href="{{route('cows.edit', $cow)}}">Edit</td>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>