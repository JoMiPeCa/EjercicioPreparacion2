
<?php 
    require 'titles/title.php';
    require 'titles/titulo.php';
        
?>

<!DOCTYPE html>
<!--
Solicitudes de vacaciones
rut , nombre , cargo, fecha de inicio, días totales y un espacio de comentario.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo;?></title>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <form action="resumen.php" method="post">
            <table border="0">
                <tbody>
                    <tr>
                        <td>Run: </td>
                        <td><input type="number" name="rut" id="rut" required="true" ></td>
                    </tr>
                    <tr>
                        <td>Nombre: </td>
                        <td><input type="text" name="nombre" id="nombre" required="true" ></td>
                    </tr>
                    <tr>
                        <td>Fecha de Inicio: </td>
                        <td><input type="date" name="fechaInicio" id="fecha"></td>
                    </tr>
                    <tr>
                        <td>Cargo: </td>
                        <td><select name="cargo" id="cargo">
                                <option value="default">Selecciona</option>
                                <option value="1001">Desarrollador Senior(1001)</option>
                                <option value="1002">Desarrollador Junior(1002)</option>
                                <option value="2001">DBA(2001)</option>
                                <option value="1003">Jefe de Proyecto(1003)</option>
                                <option value="2002">Diseñador gráfico(2002)</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Dias Totales: </td>
                        <td><input type="number" name="dias" id="dias"></td>
                    </tr>
                    <tr>
                        <td>Comentarios: </td>
                        <td><input type="text" name="comment"></td>
                    </tr>
                    <tr>
                        <td><input type="reset" value="Limpiar" ></td>
                        <td><input type="submit" value="Enviar" onclick="validar();"></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
    <script type="text/javascript">
        $("input").focus(function () {
            $(this).css("backgroudn-color", "#cccccc")
        });
        $("input").blur(function () {
            $(this).css("backgroudn-color", "#ffffff")
        });
        function validar() {
            var dias = $("#dias").val();
            if (dias == "") {
                alert("Defina numero de Dias");
                return false;
            }
        }

    </script>
    
</html>