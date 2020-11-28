@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <h4>Furnizimet</h4>
                <br>

                <div class="container">
                <form action="{{ route('furnizimet') }}" method="get">
                @csrf
                <label>Prej:</label>
                <input type="date" name='date_from' id="datepicker" value="{{ $start_of_month }}">
                <label>Deri:</label>
                <input type="date" name='date_to' id="datepicker" value="{{ $day }}">
                    <label>Furnitori:</label>
                    <select name="furnitori" id="furnitori">
                    <option value=0 selected>Te gjithe</option>
                    @foreach ($furnitoret as $furnitori)
                        @if ($furnitori->id == $selected_furnitori)
                            <option value="{{ $furnitori->id }}" selected>{{ $furnitori->name }}</option>
                        @else
                        <option value="{{ $furnitori->id }}">{{ $furnitori->name }}</option>
                        @endif
                    @endforeach
                    </select>

                    <label>Lloji:</label>
                    <select name="type" id="type">
                    <option value="all" selected>Te gjithe</option>
                    @foreach ($types as $type)
                        @if ($type == $selected_type)
                            <option value="{{ $type }}" selected>{{ $type }}</option>
                        @else
                        <option value="{{ $type }}">{{ $type }}</option>
                        @endif
                    @endforeach
                    </select>

                    <br><br>
                    <input type="submit" class="btn btn-primary" value="Filtro"/>
                    <br> <br>
                </div>
                </form>
                </div>


                <a href="/furnizimet/new" class="btn btn-primary mb-3">Shto furnizim</a> <br>
                <label>Totali: {{ $totali }} € </label>
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
                    <td class="text-center">{{ $furnizimi->amount }}€</td>
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