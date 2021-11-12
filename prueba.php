<!DOCTYPE html>
<html>
<body>
  
<form action="ordenes.php" method="post">

<label class="heading">Seleccione su lenguaje favorito:</label>
<div class="checkbox">
  <label><input type="checkbox" name="C" value="C++">C++</label>
</div>
<div class="checkbox"> 
  <label><input type="checkbox" name="java" value="Java">Java</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="php" value="PHP">PHP</label>
</div> 
<div class="checkbox">
  <label><input type="checkbox" name="jquery" value="jquery">JQUERY</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" id='id' name="idvalor" value="jquery">valorID</label>
</div> 
<button type="submit" class="btn btn-primary" name="enviar">Enviar Información</button>
</form>

    
 



<input type="checkbox" id='button'>
<div id="newpost" style="display:none" >
    Test text
</div>
<script>
var button = document.getElementById('button');

button.onclick = function() {
  var div = document.getElementById('newpost');
  if (div.style.display !== 'none') {
      div.style.display = 'none';
  }
  else {
      div.style.display = 'block';
  }
};

</script>
</body>
</html>


