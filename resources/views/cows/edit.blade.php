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
                    <h1 class="alert alert-info text-center">Edit Cow {{$cow->cow_name}}</h1>
                </div>
                <div class="col-12">
                    <form action="{{ route('cows.update', $cow) }}" method="post" class="row">
                        @csrf
                        @method('PUT')
                        <div class="col-6">
                            <label for="cow_name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="cow_name" name="cow_name" value="{{$cow->cow_name}}" placeholder="Name">
                        </div>
                        <div class="col-6">
                            <label for="cow_alias" class="form-label">Alias</label>
                            <input type="text" class="form-control" id="cow_alias" name="cow_alias" value="{{$cow->cow_alias}}" placeholder="Alias">
                        </div>
                        <div class="col-6">
                            <label for="cow_code" class="form-label">Code</label>
                            <input type="text" class="form-control" id="cow_code" name="cow_code" value="{{$cow->cow_code}}" placeholder="Code">
                        </div>
                        <div class="col-6">
                            <label for="cow_birthdate" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" id="cow_birthdate" name="cow_birthdate" value="{{$cow->cow_birthdate}}" placeholder="Birthdate">
                        </div>
                        <div class="col-6">
                            <label for="cow_weight" class="form-label">Weight</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="cow_weight" name="cow_weight" value="{{$cow->cow_weight}}" placeholder="Weight">
                                <span class="input-group-text" id="basic-addon2">KG</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="cow_height" class="form-label">Height</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="cow_height" name="cow_height" value="{{$cow->cow_height}}" placeholder="Height">
                                <span class="input-group-text" id="basic-addon2">CM</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="cow_breed" class="form-label">Breed</label>
                            <select name="cow_breed" id="cow_breed" class="form-control">
                                @foreach ($breeds as $breed)
                                    <option value="{{$breed}}" {{($cow->cow_breed === $breed->value) ? 'selected' : ''}}>{{$breed}}</option>
                                    {{-- TODO: Mejorar --}}
                                    {{-- @if ( $cow->cow_breed === $breed->value )
                                        <option value="{{$breed}}" selected>{{$breed}}</option>
                                    @else 
                                        <option value="{{$breed}}">{{$breed}}</option>
                                    @endif --}}
                                        
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 my-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 mb-4">
                    <div class="d-grid gap-2">
                        <a href="{{route('cows.index')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>