<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="UTF-8">

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/news.css">
	<title>Вставить объявление</title>
</head>
<body>
<div class="container">

<div class="col-md-9">
<div class="input-group">

<div class="border">
	<p class="NewsP">Текущий заголовок</p>	
<input type="text" class="form-control newsForm" placeholder="" id="headline" name="headline">

</div>

<div class="border">
<p class="NewsP">Адрес электронной почты</p>
<input type="text" class="form-control newsForm" placeholder="" id="email" name="email">
</div>

<div class="border">
<p class="NewsP">Имя</p> 
<input type="text" class="form-control newsForm" placeholder="" id="name" name="name">
</div>

<div class="border">
<p class="NewsP">Телефон</p>
<input type="text" class="form-control newsForm" placeholder="" id="phone" name="phone">
</div>

<div class="border">
<p class="NewsP">Категория</p>
<input type="text" class="form-control newsForm" placeholder="" id="category" name="category">
</div>

  <div class="border">
<p class="NewsP">Описание</p>
<input type="text" class="form-control newsForm" placeholder="" id="description" name="description">
</div>

<div class="border">
<p class="NewsP">Ваш город</p>
</div>

<input type="text" class="form-control newsForm" placeholder="" id="city" name="city">

<div class="border">
<p class="NewsP">Цена</p>
<input type="text" class="form-control newsForm" placeholder="" id="price" name="price">
</div>

 <div class="border">
 <p class="NewsP">Фото</p>	 
<input type="text" class="form-control newsForm" placeholder="" id="photo" name="photo">
</div>

	</div>

</div>
	
	<input type="submit" name="send" value="Добавить">
	 


	 <button type="button" class="btn btn-default">
	 <a href="{{ url('/test') }}">Назад</a>
	 </button>

	 

</div>


<script src="../js/jquery-1.12.3.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>