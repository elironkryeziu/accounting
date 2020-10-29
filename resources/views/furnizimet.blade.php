@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <h4>Furnizimet</h4>
                <br>
                <a href="/furnizimet/new" class="btn btn-primary mb-3">Shto furnizim</a>
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Furnitori</th>
                    <th scope="col" class="text-center">Lloji</th>
                    <th scope="col" class="text-center">Shuma</th>
                    <th scope="col" class="text-center">Data</th>
                    <th scope="col" class="text-center">Pershkrimi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($furnizimet as $furnizimi)
                    <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td class="text-center">{{ $furnizimi->furnitori->name }}</td>
                    <td class="text-center">{{ $furnizimi->type }}</td>
                    <td class="text-center">{{ $furnizimi->amount }}</td>
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