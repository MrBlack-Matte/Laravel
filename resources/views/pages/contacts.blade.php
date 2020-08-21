@extends('layouts.app')
@section('content')




<div class='container'>

<br><br><a href="contacts/views" class="btn btn-success mb-2">View Table</a>

<div class="row">
      <div class="col-md-9">
        <form action="contacts/store" name="save" id="save" method="post" accept-charset="utf-8">
            @csrf
            
    
            <div class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Please enter name" >
                
            </div> 
    
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" id="age" placeholder="Please enter age" >
                
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Please enter your email">

            </div>   

            <div class="form-group">
                <label >Message</label>
                <input type="textarea" name="message" class="form-control" id="message" placeholder="Please enter your message">

            </div>   
 
          <div class="form-group">
           <a><button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
       
</div>


<center><h1 class="home">Contact PAGES</h1></center>

@endsection