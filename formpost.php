<!DOCTYPE html>
<html lang="en">
<body>
    <form action="formulario.php" method="post">
        ¿Qué pedido quieres?
        <br><br>
        <!--usuario: <input name="usuario" type="text">
        departamento: <input name="departamento" type="text">
        <input type="submit" value="Enviar" />
        <input type="reset" value="borrar"/>
-->
        <input type="radio" id="barra" value="barra" name="pan" >
        <label for="barra">Barra</label><br>
        <input type="radio" id="andaluza" value="andaluza" name="pan">
        <label for="andaluza">Andaluza</label><br>
        <input type="radio" id="bollo" value="bollo" name="pan">
        <label for="bollo">Bollo</label><br>
        <input type="radio" id="redondo" value="redondo" name="pan">
        <label for="redondo">Redondo</label><br><br>

        ¿Cómo nos ha conocido? <br>
        <input type="radio" id="google" value="google" name="conocer" >
        <label for="google">Google</label><br>
        <input type="radio" id="amazon" value="amazon" name="conocer" >
        <label for="amazon">Amazon</label><br>
        <input type="radio" id="facebook" value="facebook" name="conocer" >
        <label for="facebook">Facebook</label><br>

        <input type="submit" value="Enviar">
        
    </form>
</body>
</html>