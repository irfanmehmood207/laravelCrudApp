@extends('app')
@include('layouts.navigation')
@section('content')
    <h2>Update User Data</h2>
    <hr>
    <?php 
    $id = $haveUserId;
   // echo $id;   

    ?>
    <form method="GET" action="http://localhost/testApp/public/storingEditUserDataRequest/<?php echo $id; ?>">
         <div class="form-group">
            <label>First Name</label>
            <input type="text" name="name" pattern="^[A-Za-z ]+$" title="Use Alphabetic Letters Only" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection