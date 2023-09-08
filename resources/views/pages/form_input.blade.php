@extends('layout.master')

@section('judul')
Form input
@endsection

@section('content')
<form action="/welcome" method="post">
    @csrf
   <h4>Sign Up Form</h4>
   <p>first name :</p>
   <input type="text" name=first_name>
   <p>Last Name :</p>
   <input type="text" name=last_name>

   <p>Gender</p>
   <label><input type="radio" name="jenis_kelamin" value="male"> Male</label><br />
   <label><input type="radio" name="jenis_kelamin" value="female"> Female</label><br />

   <p>Nationality</p>
   <select name="nationality">
       <option selected>Indonesia</option>
       <option>Amerika</option>
       <option>Inggris</option>
   </select>

   <p>Language Spoken</p>
   <label><input type="checkbox" name="language" value="indonesia"> Bahasa Indonesia</label> <br />
   <label><input type="checkbox" name="language" value="English"> English</label> <br />
   <label><input type="checkbox" name="language" value="Other"> Other </label><br />

   <p>Bio</p>
   <textarea name="bio"></textarea> <br />

   <input type="submit" name="sign_up" value="Sign Up">
</form>
@endsection