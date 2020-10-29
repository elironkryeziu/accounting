@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
            <h4>Lista e furnitoreve</h4>
            <br>
            <a href="/furnitoret/new" class="btn btn-primary mb-3">Shto furnitore te ri</a>
            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Emri</th>
                <th scope="col" class="text-center">Nr. Telefonit</th>
                <th scope="col" class="text-center">Adresa</th>
                <th scope="col" class="text-center">Pershkrim</th>
                <th scope="col" class="text-center"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($furnitoret as $furnitori)
                <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td class="text-center">{{ $furnitori->name }}</td>
                <td class="text-center">{{ $furnitori->phone }}</td>
                <td class="text-center">{{ $furnitori->address }}</td>
                <td class="text-center">{{ $furnitori->notes }}</td>
                <td class="text-center">
                <button onclick="fshije({{$furnitori->id}})" class="btn btn-pill btn-youtube">Fshije</button>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>

            </div>
        </div>
    </div>
</div>

<script>
    function fshije(id) {
        var r = confirm("A jeni i sigurt ?");
        if (r == true) {
            // fetch(`/furnitoret/${id}`, {
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },
        //     method: "DELETE", 
        // }).then(res => {
        //     location.replace("/furnitoret");
        // });
        } else {
        txt = "You pressed Cancel!";
        }
    }
</script>
@endsection