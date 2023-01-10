@extends('layouts.main')

@section('content')
    <div class="container d-flex justify-content-center">
        <h1 class="text-danger">Treni</h1>
    </div>
    <div class="container">
        <table class="table table-success table-striped my-5">
            <thead>
            <tr class="text-center align-middle ">
                <th scope="col">#</th>
                <th scope="col">Brand</th>
                <th scope="col">Station Start</th>
                <th scope="col">Station End</th>
                <th scope="col">Time start</th>
                <th scope="col">Time end</th>
                <th scope="col">Code</th>
                <th scope="col">Number wagons</th>
                <th scope="col">InTime</th>
                <th scope="col">Cancel</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($trains as $train)
            <tr class="text-center align-middle">
                <th scope="row">{{$train->id}}</th>
                    <td>{{$train->brand}}</td>
                    <td>{{$train->railway_station_start}}</td>
                    <td>{{$train->railway_station_end}}</td>
                    <td>{{$train->date_start}}</td>
                    <td>{{$train->date_end}}</td>
                    <td>{{$train->code}}</td>
                    <td>{{$train->number_wagons}}</td>
                    <td>{{$train->isDate}}</td>
                    <td>{{$train->isDeleted}}</td>

                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
@endsection
