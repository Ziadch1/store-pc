@extends('layouts.master')

@section('content')
<style>
  .contact-form {
    max-width: 400px;
    margin: 0 auto;
  }

  .contact-form h1 {
    text-align: center;
  }

  .contact-form .form-group {
    margin-bottom: 20px;
  }

  .contact-form label {
    font-weight: bold;
    display: block;
  }

  .contact-form input[type="text"],
  .contact-form input[type="email"],
  .contact-form input[type="password"],
  .contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .contact-form textarea {
    height: 100px;
  }

  .contact-form button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .contact-form button[type="submit"]:hover {
    background-color: #218838;
  }

</style>
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif



<form action="{{ route('contact.store') }}" method="POST" class="contact-form">
  @csrf
  <h1>Contact</h1>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your name..." value="{{ old('name') }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your email..." value="{{ old('email') }}">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="message">Enter your message</label>
    <textarea class="form-control" name="message" placeholder="Enter your message..." rows="4">{{ old('message') }}</textarea>
    @error('message')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-success">Send</button>
</form>
<br><br>

@endsection
