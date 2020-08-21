@extends('layouts.app')
@section('content')

<center><h1><br>Contact Table</h1></center>

<table class="table " style="width:100% ;text-align:center ">
 
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Message</th>
    <th>Action</th>
  </tr>
  <tr>

 
  <?php if($tbltest): ?>
    <?php foreach($tbltest as $post): ?>
    <tr>

        <td>{{ $post->id }}</td>
        <td>{{ $post->name }}</td>
        <td>{{ $post->age }}</td>
        <td>{{ $post->email }}</td>
        <td>{{ $post->message }}</td>
        <td>
        <a href="/edit/{{$post->id}}" class="btn btn-success" name="delete">Edit</a>&nbsp;|&nbsp;
        <a href="/delete/{{$post->id}}" class="btn btn-danger" name="delete">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>

  </tr>

</table>


@endsection
