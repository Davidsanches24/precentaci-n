<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingresar sede</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>
<body>
    <div>
        <form action="#">
            <input type="text" name="sede" placeholder="sede"><br><br>
            <input type="text" name="bloque" placeholder="bloque 1"><br>
            <input type="text" name="piso" placeholder=" piso 1">
            <!-- espacio para crear mas campos de pisos -->
            <div id="pisos1">

            </div>
            <input onclick="Agregarpiso();" type="button" value="+ pisos" class="btn btn-primary" /><br><br>


            <input type="text" name="ambiente" placeholder=" ambiente 1"><br>

            <div id="campos">
              
            </div>
            <br>
            <input onclick="Agregarbloque();" type="button" value="+ bloques" class="btn btn-primary" />
        </form>
    </div>
    <script>
        let nextinput=1;
        let numreropiso=1;
        // funcion para agregar mas bloques
        function Agregarbloque() {
          nextinput++;
          var content = '<br><br><br><div class="row">' +
            '<div class="col-xs-5"><br><input type="text" name="bloque " placeholder="bloques'+nextinput+'" ></div><div id="pisos'+nextinput+'">hola</div><input  type="button" value="+ pisos" class="piso" /><br><br>' + 
            '<div class="col-xs-2"><button type="button">eliminar</button><br></div>' +
          '</div>';
          $("#campos").append(content);
          $("button").click(function() {
            $(this).closest('div.row').remove();
            nextinput --;
          });
          $("button").click(function(){
              $('div.row').append('<input type="text" placeholder="prueva de deciocion">');
            })
        }
        function Agregarpiso() {
          numreropiso++;
          var contente = '<div class="row">' +
            '<div class="col-xs-5"><br><input type="text" name="piso'+numreropiso+'" placeholder="piso'+numreropiso+'" ><button type="button">eliminar</button><br></div>' +
          '</div>';
          //console.log(nextinput);
          $("pisos1").append(contente);
          $("button").click(function() {
            $(this).closest('div.row').remove();
          });
          
        }
        
    </script>
    
</body>
</html>