@extends('layouts.app')
@section('content')
<center><h1>EDIT PAGES</h1><br></center>
<div class="row">
      <div class="col-md-9">
        <form action="/update/{{$tbltest->id}}" name="edit-user" id="edit-user" method="post" accept-charset="utf-8">
        @csrf
            <input type="hidden" name="id" class="form-control" id="id" value="{{$tbltest->id}}">
    
            <div class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name" value="{{$tbltest->name}}">
                
            </div> 
    
            <div class="form-group">
                <label for="email">Age</label>
                <input type="text" name="age" class="form-control" id="age" placeholder="Please enter email id" value="{{$tbltest->age}}">
                
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Please enter your contact number"value="{{$tbltest->email}}">
                
                
            </div>   

            <div class="form-group">
                <label >Message</label>
                <input type="textarea" name="message" class="form-control" id="message" placeholder="Please enter your message"value="{{$tbltest->message}}">
                
                
            </div>   
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>


@endsection