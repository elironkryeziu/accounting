@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <h4>Investimet</h4>
                <br>

                <div class="container">
                <form action="{{ route('investimet') }}" method="get">
                @csrf
                <label>Prej:</label>
                <input type="date" name='date_from' id="datepicker" value="{{ $start_of_month }}">
                <label>Deri:</label>
                <input type="date" name='date_to' id="datepicker" value="{{ $day }}">
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="Filtro"/>
                    <br> <br>
                </div>
                </form>
                </div>
                <a href="/investimet/new" class="btn btn-primary mb-3">Shto investim</a> <br>
                <label>Totali: {{ $totali }} € </label>

                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Emri</th>
                    <th scope="col" class="text-center">Pershkrimi</th>
                    <th scope="col" class="text-center">Shuma</th>
                    <th scope="col" class="text-center">Data</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($investimet as $investimi)
                    <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td class="text-center">{{ $investimi->name }}</td>
                    <td class="text-center">{{ $investimi->notes }}</td>
                    <td class="text-center">{{ $investimi->amount }}€</td>
                    <td class="text-center">{{ $investimi->date }}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection