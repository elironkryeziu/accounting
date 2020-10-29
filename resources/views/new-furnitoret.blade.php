@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
            <a href="/furnitoret" class="btn btn-secondary mb-4">< Kthehu</a>
            <h3>Furnitori i ri:</h3>
            <form action="{{ route('addFurnitor') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Emri</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Emri">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nr. telefonit</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefoni">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Adresa</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Adresa">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Pershkrim</label>
                <input type="textares" class="form-control" id="notes" name="notes" placeholder="Pershkrim">
            </div>

            <input type="submit" class="btn btn-primary btn-lg" value="Ruaj"></input>
            </form>

            </div>
        </div>
    </div>
</div>
@endsection