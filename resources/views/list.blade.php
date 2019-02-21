<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Category</th>
        <th>Create_up</th>
        <th>Updated_up</th>
    </tr>
    @foreach($list as $key=>$value)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$value->category}}</td>