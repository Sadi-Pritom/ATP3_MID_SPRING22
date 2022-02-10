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
            <td>{{$s->name}}</td>
            <td>{{$s->id}}</td>
            <td>{{$s->dept}}</td>
        </tr>
    @endforeach    
    
</table>    
@endsection('listt')