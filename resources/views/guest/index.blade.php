@extends('layouts.hotel')

@section('body')
<table>
    <th>氏名</th>
    <th>住所</th>
    <th>電話番号</th>
@foreach ($guests as $guest)
<tr>
    <td>{{$guest->name}}</td>
    <td>{{$guest->address}}</td>
    <td>{{$guest->tell}}</td>
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