@extends('layouts.hotel')

@section('body')
<table>
    <th>お部屋の種類</th>
    <th>宿泊可能人数</th>
    <th>料金</th>
    @foreach ($roomtypes as $roomtype)
        <tr>
            <td>{{$roomtype->room_name}}</td>
            <td>{{$roomtype->max_num_people}}</td>
            <td>{{$roomtype->room_value}}</td>
        </tr>
    @endforeach
</table>
    
@endsection


<style>
    table {
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
    }
    table th, table td {
        padding: 10px 0;
        text-align: center;
    }
    table tr:nth-child(odd){
        background-color: #eeeeee;
    }

</style>