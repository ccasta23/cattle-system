@extends('layouts.base')
@section('content') {{-- @yield('content') --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Create new Cow</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('cows.store') }}" method="post" class="row">
                @csrf
                <div class="col-6">
                    <label for="cow_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="cow_name" name="cow_name" placeholder="Name" value="{{old('cow_name')}}">
                </div>
                <div class="col-6">
                    <label for="cow_alias" class="form-label">Alias</label>
                    <input type="text" class="form-control" id="cow_alias" name="cow_alias" placeholder="Alias" value="{{old('cow_alias')}}">
                </div>
                <div class="col-6">
                    <label for="cow_code" class="form-label">Code</label>
                    <input type="text" class="form-control" id="cow_code" name="cow_code" placeholder="Code" value="{{old('cow_code')}}">
                </div>
                <div class="col-6">
                    <label for="cow_birthdate" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="cow_birthdate" name="cow_birthdate" placeholder="Birthdate" value="{{old('cow_birthdate')}}">
                </div>
                <div class="col-6">
                    <label for="cow_weight" class="form-label">Weight</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="cow_weight" name="cow_weight" placeholder="Weight" value="{{old('cow_weight')}}">
                        <span class="input-group-text" id="basic-addon2">KG</span>
                    </div>
                </div>
                <div class="col-6">
                    <label for="cow_height" class="form-label">Height</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('cow_height') is-invalid @enderror" id="cow_height" name="cow_height" placeholder="Height" value="{{old('cow_height')}}">
                        <span class="input-group-text" id="basic-addon2">CM</span>
                    </div>
                </div>
                <div class="col-6">
                    <label for="cow_breed" class="form-label">Breed</label>
                    <select name="cow_breed" id="cow_breed" class="form-control">
                        @foreach ($breeds as $breed)
                            <option 
                                value="{{$breed}}"
                                {{ (old('cow_breed') === $breed->value) ? 'selected' : '' }}
                            >{{$breed}}</option>    
                        @endforeach
                    </select>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger col-12 mt-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-12 my-4">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Add</button>
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
@endsection
