@extends('layouts.appmaster')
@section('title', 'Login Failed')

@section('content')
<h2>Login Failed</h2>

<?php 
echo "Hermes did not login";
?>

<button formaction="login" class="btn btn-primary">Try Again!</button>
@endsection