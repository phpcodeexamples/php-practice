<!DOCTYPE html>
<html>
<head>
  <style>p { margin:10px; padding:10px; }</style>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
  <p><span>Hello</span>, how are you?</p>
  
<script>$("p").find("span").end().css("border", "2px red solid");</script>

</body>
</html>