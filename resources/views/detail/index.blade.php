@extends('layouts.hotel')

@section('body')
<table>
    <th>予約明細</th>
    <th>予約ID</th>
    <th>部屋ID</th>
    <th>宿泊日</th>
    <th>宿泊料</th>
@foreach ($details as $detail)
<tr>
    <td>{{$detail->reservation_details_id}}</td>
    <td>{{$detail->reserve_id}}</td>
    <td>{{$detail->room_room_id}}</td>
    <td>{{$detail->days}}</td>
    <td>{{$detail->price}}</td>
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