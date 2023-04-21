@extends('main')
@section('content')
  <div class="container content-center my-4">
    
    <div class="card col-md-8">
        <div class="card-header text-center">Login page</div>
        @if (session('successMsg'))
        <div class="alert alert-danger" role="alert">
            {{session('successMsg')}}
        </div>
        @endif
        <div class="row justify-content-center my-3">
        <div class="col-sm-8 col-offset-4">
            <form action="/login" method="POST">
            <div class="form-group">
                @csrf
                <label for="email">Email </label>
                <input type="email" name="email" id="email" class='form-control' placeholder="Enter Email">
            </div> 
            <div class="form-group">
                <label for="pass">Password </label>
                <input type="password" name="password" id="pass" class='form-control' placeholder="Enter Password">
            </div>
            <div class="col text-center"><button type="submit" class="btn btn-success">SUBMIT</button></div> 
            
            </form>
            
        </div>
    </div>
    </div>
    
  </div>
@endsection