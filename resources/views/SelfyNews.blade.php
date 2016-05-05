<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="UTF-8">

	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/news.css">
	<title>Страница объявления</title>
</head>

<body>
<?php 



 ?>

<form method="post" action="edit">	
@foreach($news as $new)


{!! csrf_field() !!}
<div class="container">


<div class="col-md-9">
<div class="input-group">

<div class="border">
	<p class="NewsP">Текущий заголовок</p>	
<input type="text" class="form-control newsForm" placeholder="{{$new->headline}}" id="headline" name="headline">

</div>

<div class="border">
<p class="NewsP">Адрес электронной почты</p>
<input type="text" class="form-control newsForm" placeholder="{{$new->email}}" id="email" name="email">
</div>

<div class="border">
<p class="NewsP">Имя</p> 
<input type="text" class="form-control newsForm" placeholder="{{ $new->name}}" id="name" name="name">
</div>

<div class="border">
<p class="NewsP">Телефон</p>
<input type="text" class="form-control newsForm" placeholder="{{ $new->phone}}" id="phone" name="phone">
</div>

<div class="border">
<p class="NewsP">Категория</p>
<input type="text" class="form-control newsForm" placeholder="{{ $new->category}}" id="category" name="category">
</div>

  <div class="border">
<p class="NewsP">Описание</p>
<input type="text" class="form-control newsForm" placeholder="{{$new->city}}" id="city" name="city">
</div>

<div class="border">
<p class="NewsP">Ваш город</p>
</div>

<input type="text" class="form-control newsForm" placeholder="{{$new->description}}"id="description" name="description">

<div class="border">
<p class="NewsP">Цена</p>
<input type="text" class="form-control newsForm" placeholder="{{ $new->price}}" id="price" name="price">
</div>

 <div class="border">
 <p class="NewsP">Фото</p>	 
<input type="text" class="form-control newsForm" placeholder="{{$new->photo}}" id="photo" name="photo">
</div>

	</div>

</div> 
<input type="submit" name="save" value="Cохранить"/>

	
	

	
@endforeach
</form>

 		<a href="/test/updating?id={{$new->id}}" name="save"> Сохранить по - новому</a>


 <a href="{{ url('/test') }}">Назад</a>


</div>

<script src="../../js/jquery-1.12.3.js"></script>
<script src="../../js/bootstrap.js"></script>
	

</body>
</html>