@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
            <a href="/shpenzimet" class="btn btn-secondary mb-4">< Kthehu</a>
            <h3>Investim i ri:</h3>
            <form action="{{ route('addInvestim') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Data</label>
                <input type="date" class="form-control" id="date" value="{{ $date }}" name="date" placeholder="Data">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Pershkrim i shkurte</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Pershkrim i shkurte">
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