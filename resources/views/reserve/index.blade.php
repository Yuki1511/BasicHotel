@extends('layouts.hotel')

@section('body')
<table>
    <th>予約ID</th>
    <th>利用者ID</th>
    <th>人数</th>
    <th>チェックイン</th>
    <th>チェックアウト</th>
@foreach ($reserves as $reserve)
<tr>
    <td>{{$reserve->reserve_ID}}</td>
    <td>{{$reserve->guest_ID}}</td>
    <td>{{$reserve->num_people}}</td>
    <td>{{$reserve->check_in}}</td>
    <td>{{$reserve->check_out}}</td>
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