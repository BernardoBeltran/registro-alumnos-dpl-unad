<?php include("conection.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bernardo Beltrán App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Registro de Estudiantes Diplomado de Profundización en Linux</h1>
    <form action="script.php" method="post" class="registration-form">
        <fieldset>
            <legend>Formulario de registro</legend>
            <label for="name">
                Nombres:
                <br>
                <input type="text" id="name" name="name" required>
            </label>
            <br>
            <label for="surname">
                Primer Apellido:
                <br>
                <input type="text" id="surname" name="surname" required>
            </label>
            <br>
            <label for="secondSurname">
                Segundo Apellido:
                <br>
                <input type="text" id="secondSurname" name="secondSurname" required>
            </label>
            <br>
            <label for="groupNumber">
                Número de grupo:
                <br>
                <select id="groupNumber" name="groupNumber" required>
                    <option value="">Elija su número de grupo</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>
                  </select>
            </label>
            <br>
            <input type="submit"  name="registrationForm" class="btnSubmit" value="Registrar">
        </fieldset>
    </form>

    <h4>Listado de estudiantes</h4>
    <table class="students-list">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Número de Grupo</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM students ORDER BY name";
        $result = mysqli_query($con, $query);

        while($fila = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $fila['name'] ?></td>
            <td><?php echo $fila['surname'] ?></td>
            <td><?php echo $fila['secondSurname'] ?></td>
            <td><?php echo $fila['groupNumber'] ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
</body>
</html>