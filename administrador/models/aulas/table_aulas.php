<?php

require_once '../../../includes/conexion.php';

$sql = 'SELECT * FROM aulas WHERE estado != 0';
$query = $pdo->prepare($sql);
$query->execute();

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);

for($i = 0;$i < count($consulta);$i++) {
    if ($consulta[$i]['estado'] == 1) {
        $consulta[$i]['estado'] = '<span class="badge-success">Activo</span>';
    } else {
        $consulta[$i]['estado'] = '<span class="badge-danger">Inactivo</span>';
    }

    $consulta[$i]['acciones'] = '
        <button class="btn btn-primary" title="Editar" onclick="editarAula('.$consulta[$i]['aula_id'].')">Editar</button>
        <button class="btn btn-danger" title="Eliminar" onclick="eliminarAula('.$consulta[$i]['aula_id'].')">Eliminar</button>
                                ';
}

echo json_encode($consulta, JSON_UNESCAPED_UNICODE);    