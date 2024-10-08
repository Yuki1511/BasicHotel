@extends('layouts.hotel')

@section('body')
<table>
    <th>部屋ID</th>
    <th>お部屋の種類</th>
    <th>部屋番号</th>
@foreach ($rooms as $room)
<tr>
    <td>{{$room->room_id}} </td>
    <td>{{$room->roomtype->room_name}}</td>
    <td>{{$room->room_Num}}</td>
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