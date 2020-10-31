@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
            <h3>Zgjedh pijet:</h3> <br>
            <form action="{{ route('pijetlist') }}" method="post">
            @csrf
            @foreach ($pijet as $pija)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="{{$pija->id}}" id="inlineCheckbox1">
                <label class="form-check-label" for="inlineCheckbox1">{{ $pija->name }}</label>
            </div>
            @endforeach

            <br> <br>
            <input type="submit" class="btn btn-primary btn-lg" value="Vazhdo"></input>
            </form>


            </div>
        </div>
    </div>
</div>
@endsection