@section('content')
@extends('layouts.header')

<!-- поиск -->
<!-- <form method="get" action="/search" id="search_field">

	<input type="search" name="search_field" placeholder="Поиск"/>
	<input type="submit" class="btn" value="Найти">

</form> -->

@foreach($now as $nows)
<main>
	<div class="news-container">
		<div class="news-header">
			<div class="news-cover">

			</div>
		</div>
			<div class="news-body">
				<div class="news-title">
					<h1><a href="#">{{$nows->title}}</a></h1>
				</div>
				<div class="news-text">
					<p>{{$nows->description}}</p>
				</div>
				<div class="news-tags">
					<ul>
						<li><a href="#">новости</a></li>
						<li><a href="#">кибербезопасность</a></li>
						<li><a href="#">хаккинг</a></li>
						<li><a href="#">деанон</a></li>
					</ul>
				</div>
			</div>
			<div class="news-footer">
				<ul>
					<li class="published-day">день публикации {{$nows->created_at}}</li>
				</ul>
			</div>
	</div>

</main>
@endforeach
@endsection('content')
