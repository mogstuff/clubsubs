<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mark Morgan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Mark Morgan</h1>
  <p>Some sample projects</p> 
</div>
  
<div class="container">
  <div class="row">
  <div ng-app="">
  <p>Name : <input type="text" ng-model="name"></p>
  <h1> {{name}}</h1>
</div>
  </div>
</div>

</body>
</html>
