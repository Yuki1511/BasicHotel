@extends('layouts.hotel')

@section('body')
<table>
    <th>予約ID</th>
    <th>利用者</th>
    <th>人数</th>
    <th>チェックイン</th>
    <th>チェックアウト</th>
    <th>宿泊料金</th>
@foreach ($reserves as $reserve)
<tr>
    <td>{{$reserve->reserve_id}}</td>
    <td>{{$reserve->guest->name}}</td>
    <td>{{$reserve->num_people}}</td>
    <td>{{$reserve->check_in}}</td>
    <td>{{$reserve->check_out}}</td>
    {{-- roomメソッドのbelongsToManyでroomモデルとその中間テーブルdetailテーブルにアクセス。
    []が配列なので、first=1番目に入っているroom_idみたいすると引っ張ってこれる --}}
    <td>{{$reserve->rooms->first()->pivot->price}}</td>
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