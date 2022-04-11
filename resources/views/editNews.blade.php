<!Doctype html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
 @foreach ($news as $news_all)   
<table border = "1">

<tr>
<td>id</td>
<td>tags_1</td>
<td>titre_1</td>
<td>image_1</td>
<td>description_1</td>
<td>lienB_1</td>
<td>Edit</td>
</tr>

<tr>
<td>{{ $news_all->id }}</td>
<td>{{ $news_all->tags_1 }}</td>
<td>{{ $news_all->titre_1}}</td>
<td>{{ $news_all->image_1}}</td>
<td>{{ $news_all->description_1 }}</td>
<td>{{ $news_all->lienB_1 }}</td>
<td><a href = 'edit/{{ $news_all->id }}'>Edit</a></td>
</tr>

<br>

   
</table>
@endforeach