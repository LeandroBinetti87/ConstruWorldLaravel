<?php require('header.php'); ?>

<div>
  <a href="contacto.php" style="font-size: 20px; margin-left: 30px;">Contacto</a><br>
  <form method="post" action="action_page" style="margin-left: 30px;">
    <p>
    <br><label for="nombre">Nombre: </label>
    <input id="nombre" type="text" name="nombre">
    </p>
    <p>
    <label for="">E - mail : </label>
    <input id="email" type="text" name="email">
    </p>
    <p>
    <label for="">Mensaje: </label>
    <input id="mensaje" type="text" name="mensaje">
    </p>
    <p>
    <input id="enviar" type="submit" value="Enviar">
    </p>
  </form>
</div>
<br><br>
<footer class="page-footer">
  <div class="containerb">
	<br>
    <p class="footer-legend">Copyright 2019 - The Bill Gates Group @ Digital House Lima.</p>
    <p>Podés contactarnos <a href="contacto.php"> aquí </a></p>
   </div><br>
 </footer>
</body>
</html>
