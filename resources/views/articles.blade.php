@section('content')
@extends('layouts.header')

<div class="poisk">
<form method="get" action="/search" id="search_field">
	<input type="search" name="search_field" placeholder="Поиск"/>
	<input type="submit" class="btn" value="Найти" id="button">
</form>
</div>
@foreach($article as $articles)
	<main>
		<div class="st-container">

			<div class="st">

				<div class="steam-body">

					<h1>{{$articles->title}}</h1>
					<br>
					<a href="#"><img class="sp" src="{{$articles->img_url}}" alt="не удалось загрузить фото"></a>


					<div class="st-tags">
						<ul>
							<br>
							<p>{{$articles->description}}</p>
							<br>
			 				<li><a href="https://vk.com/better_than___you">Оспорить тему</a></li>
						</ul>
					</div>

				</div>

			</div>
	</div>

	</main>

	@endforeach
@endsection('content')
