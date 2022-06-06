@extends('main.home')
@section('content')
<style>
    table{
        border:3px solid black;
    }
    th{
        border:2px solid black;
    }
    td{
        border:1px solid black;
    }
</style>
<table>
        <tr>
            <th>NAME</th>
            <th>ID</th>
            <th>PRICE</th>
        </tr>
        @foreach($products as $p)
            <tr>
                <td><a href="{{route('others.form.productDetails',['name'=>$p->Name,'id'=>$p->Product_ID,'price'=>$p->Price])}}">{{$p->Name}}</a></td>
                <td>{{$p->Product_ID}}</td>
                <td>{{$p->Price}}</td>
            </tr>
        @endforeach
    </table>
@endsection