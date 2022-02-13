<!DOCTYPE HTML>
<html>
<head>
    <title>ゴリ単</title>
</head>
<body>

<h1>ゴリ単</h1>


<h2>単語練習</h2>
<form action="/index" method="POST">
    
    単語:<br>
    <input name="name">
    <br>
    <button class="btn btn-success"> 意味 </button>
    <br>
    <input name="name">
    <br>
    練習帳:<br>
    <textarea name="comment" rows="4" cols="40"></textarea>
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> テスト </button>
</form>

</body>
</html>