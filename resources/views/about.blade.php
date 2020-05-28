@section('content')
@extends('layouts.header')

<main>
	<form class="form">
		<p><input type="text" name="name" class="feedback-input" placeholder="Введите Имя" id="name"></p>
		<p><input type="email" name="email" class="feedback-input" placeholder="Введите Email" id="email"></p>
		<p><textarea name="text" id="comment" placeholder="Message" class="feedback-input"> </textarea></p>
		<input type="submit" value="Отправить" class="batton-submit">
		<div class="ease"></div>
	</form>
</main>






@endsection('content')
