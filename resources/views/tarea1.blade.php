<!DOCTYPE html>
<html lang="es">
  <head>
  <style>
    table, th, td {
      padding: 10px;
      text-align: left;
      width: 35%;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    tr:hover {background-color: dodgerblue;}
    label {
      color: black;
      font-weight: bold;
      display: block;
      width: 80px;
      float: left;
    }
    textarea {
      background: url(images/benice.png) center center no-repeat; /* This ruins default border */
      border: 1px solid #888; 
    }
  </style>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Tarea1</title>

  </head>
  <body>
    <div class="w3-container w3-teal">
      <h2>Tarea 1</h2>
    </div>

    <form class="w3-container">
      <label class="w3-text-teal"><b>Nombre:</b></label>
      <input class="w3-input w3-border w3-light-grey" type="text"><br><br>

      <label class="w3-text-teal"><b>Apellido:</b></label>
      <input class="w3-input w3-border w3-light-grey" type="text"><br><br>

      <label class="w3-text-teal"><b>Telefono:</b></label>
      <input class="w3-input w3-border w3-light-grey" type="number"><br><br>

      <label class="w3-text-teal"><b>Correo:</b></label>
      <input class="w3-input w3-border w3-light-grey" type="email"><br><br>

      <label class="w3-text-teal"><b>Detalles:</b></label>
      <input class="w3-input w3-border w3-light-grey" type="email"><br><br>

      <label class="w3-text-teal"><b>Ciudad:</b></label>
      <select class="w3-select" name="option">
        <option value="" disabled selected>Choose your option</option>
        <option value="1">Potosi</option>
        <option value="2">La Paz</option>
        <option value="3">Santa Cruz</option>
      </select><br><br>
      <table>
        <tr>
          <td>Materia</td>
          <td>Tecnologia Web <span class="w3-badge">1</span></td>
          <td>Tarde</td>
        </tr>
        <tr>
          <td>Materia</td>
          <td>Tecnologia Web <span class="w3-badge">2</span></td>
          <td>Tarde</td>
        </tr>
      </table><br><br>
      
    </form>

    <label for="lname">Detalles:</label><br>
    <textarea id="w3review" name="w3review" rows="4" cols="50">
      Este es mi texto en area.
    </textarea><br><br>
    <label for="lname">Lenguajes:</label><br>
    <input type="checkbox" id="html" name="lenguaje" value="HTML">
    <label for="html">HTML</label><br>
    <input type="checkbox" id="css" name="lenguaje" value="CSS">
    <label for="css">CSS</label><br>
    <input type="checkbox" id="javascript" name="lenguaje" value="JavaScript">
    <label for="javascript">JavaScript</label><br><br>

    <input type="button" onclick="alert('Guardado')" value="Guardar">
  </body>
</html>