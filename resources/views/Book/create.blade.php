@extends('layouts.layout')
@section('content')

<section class="add-product">
<form action="/Book" method="POST" enctype="multipart/form-data">
    @csrf
<input type="hidden" value="" name="">
 
    <h3>Create your hashtag</h3>
    <p>Name Of hashtag <span>*</span></p>
    <input type="text"  id ="name" name="name" required maxlength="50"
    placeholder="enter book name" class="box">

    <p>About <span>*</span></p>
    <input type="text" id="about" name="about"class="ab" required maxlength="250"
    placeholder="About" class="ab">

    <p>Category <span>*</span></p>
   <select name="category" id="category" class="box" required>
<option value="Bussiness">Day experince</option>
<option value="Travel">Holiday</option>
    
</option>
   </select>
   
   
    <input type="submit" value="Here we go!" name="add_Book" class="btn">
</section>

















@endsection