<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
 document.getElementById("demo").innerHTML = "Heading changed.";
    document.getElementById("demo2").innerHTML = "Paragraph changed.";
    var x = document.getElementById("demo2");
    x.style.fontsize = "25px";
    x.style.color = "blue";
    var y = document.getElementById("demo");
    y.style.color = "Red";
}
</script>
</head>

<body>

<h1 id="demo">JavaScript in Head</h1>

<p id="demo2">A Paragraph.</p>

<button type="button" onclick="myFunction()">Try it</button>

</body>
</html> 
