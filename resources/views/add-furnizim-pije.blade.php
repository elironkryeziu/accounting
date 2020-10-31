@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
            <h3>Shkruaj te dhenat per pijet:</h3> <br>
            <form action="{{ route('addFurnizimpije') }}" method="post">
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
                <label for="exampleFormControlInput1">Pershkrim</label>
                <textarea rows=3 class="form-control" id="notes" name="notes" placeholder="Pershkrim"></textarea>
            </div>
            <!-- {{ $pijet }} -->
            @foreach ($pijet as $pija)
            <div class="form-group">
            <label for="exampleFormControlInput1">{{ $pija->name }}</label>
                <div class="form-row">
                    <div class="col">
                    <input type="number" step=".01" class="form-control" id="quantity" name="pijet[{{$pija->id}}][quantity]" placeholder="Sasia">
                    </div>
                    <div class="col">
                    <input type="number" step=".01" class="form-control" id="amount" name="pijet[{{$pija->id}}][amount]" placeholder="Shuma">
                    </div>
                </div>
            </div>
            @endforeach

            <br>
            <input type="submit" class="btn btn-primary btn-lg" value="Ruaj"></input>
            </form>

            </div>
        </div>
    </div>
</div>
@endsection