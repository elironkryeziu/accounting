@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
            <a href="/furnizimet" class="btn btn-secondary mb-4">< Kthehu</a>
            <h3>Furnizim i ri:</h3>
            <form action="{{ route('addFurnizim') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Furnitori</label>
                <select class="form-control" id="furnitori" name="furnitori">
                @foreach ($furnitoret as $furnitori)
                <option value="{{ $furnitori->id }}">{{ $furnitori->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Data</label>
                <input type="date" class="form-control" id="date" value="{{ $date }}" name="date" placeholder="Data">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tipi</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tipi">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Shuma</label>
                <input type="number" step=".01" class="form-control" id="amount" name="amount" placeholder="Shuma">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Pershkrim</label>
                <textarea rows=3 class="form-control" id="notes" name="notes" placeholder="Pershkrim"></textarea>
            </div>
            

            <input type="submit" class="btn btn-primary btn-lg" value="Ruaj"></input>
            </form>

            </div>
        </div>
    </div>
</div>
@endsection