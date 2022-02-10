@extends('layouts.loggedin')
@section('listt')
<h1>list</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Dept</th>
    </tr>
    @foreach($students as $s)
        <tr>
            <td><a href="{{route('student.details',['id'=>$s->id+839,'name'=>$s->name])}}">{{$s->name}}</a></td>
            <td>{{$s->id}}</td>
            <td>{{$s->dept}}</td>
        </tr>
    @endforeach    
    
</table>    
@endsection('listt')