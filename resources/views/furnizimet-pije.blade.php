@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <h4>Pijet</h4>
                <br>
                <a href="/choose-pijet" class="btn btn-primary mb-3">Shto furnizim</a>
                <br><br>
                <label>Totali: {{ $totali }} € </label>
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Furnitori</th>
                    <th scope="col" class="text-center">Shuma</th>
                    <th scope="col" class="text-center">Pijet</th>
                    <th scope="col" class="text-center">Data</th>
                    <th scope="col" class="text-center">Pershkrimi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($furnizimet as $furnizimi)
                    <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td class="text-center">{{ $furnizimi->furnitori->name }}</td>
                    <td class="text-center">{{ $furnizimi->total }}€</td>
                    <td class="text-center">
                    <ol>
                    @foreach ($furnizimi->pijet as $pija)
                    <li>{{ $pija->name }} - {{ $pija->pivot->qty }} cope - {{ $pija->pivot->amount }}€</li>
                    @endforeach
                    </ol>
                    </td>
                    <td class="text-center">{{ $furnizimi->date }}</td>
                    <td class="text-center">{{ $furnizimi->notes }}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection