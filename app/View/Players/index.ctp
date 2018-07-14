<!-- File: /app/View/Players/index.ctp -->

<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Jugador</th>
        <th>Pais</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <!-- $jugadores = variable que trae la DATA desde el Controlador -->

    <!-- echo $var_jugador * es la variable que creamos que contendra lo que trae la variable $jugadores
              ['Player'] * el nombre de nuestro MODELO
              ['id_jugador'] * nombre del campo en la tabla
    -->

    <?php foreach ($jugadores as $var_jugador): ?>
    <tr>
        <td><?php echo $var_jugador['Player']['id_jugador']; ?></td>
        <td>
            <?php echo $this->Html->link($var_jugador['Player']['nombre'],
            array('controller' => 'jugadores', 'action' => 'view', $var_jugador['Player']['id_jugador'])); ?>
        </td>
        <td><?php echo $var_jugador['Player']['pais']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>