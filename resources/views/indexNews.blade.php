<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="UTF-8">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/news.css">
	<title>Страница объявления</title>
</head>
<div class="container">
	<div class="col-md-2">
		
		 <button type="button" class="btn btn-default newsButton">
	 <a href="{{ url('/test/create') }}">добавить объявление</a>
	 </button>
	</div>
	<div class="col-md-6">



@foreach($news as $new)


<h3 name="{{$new->id}}">Заголовок объявления</h3>{{ $new->headline}}<br>

<h3>номер объявления</h3>{{ $new->id}}<br>



<h3>Адрес электронной почты</h3>{{ $new->email}}<br>

<h3>Имя</h3>{{ $new->name}}<br>

<h3>телефон</h3>{{ $new->phone}}<br>

<h3>категория</h3>{{ $new->category}}<br>

<h3>ваш город</h3>{{ $new->city}}<br>


<h3>Описание</h3>{{ $new->description}}<br>

<h3>цена</h3>{{ $new->price}}<br>

<h3>Фото</h3>{{ $new->photo}}<br>


 

	<a href="test/{{$new->id}}/edit?id={{$new->id}}">редактировать</a>
	<a href="test/{{$new->id}}/destroy?id={{$new->id}}">удалить</a>


	 	@endforeach
	 		
	 

	 

	 	
	</div>
	
	
		

	
	

	
	


</div>

<script src="js/jquery-1.12.3.js"></script>
<script src="js/bootstrap.js"></script>
	

</body>
</html>