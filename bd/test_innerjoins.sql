SELECT `tbl_empleado.nom_empleado`,`id_registro`, `fecha_entrada`, `fecha_salida`, `id_mesa`, `num_comensales`,  FROM `tbl_registro` INNER JOIN tbl_empleado on tbl_registro.id_camarero=tbl_empleado.id_empleado;


select tbl_empleado.nom_empleado, tbl_registro.id_mesa from tbl_registro inner join tbl_empleado on tbl_registro.id_camarero=tbl_empleado.id_empleado;

SELECT `id_registro`, `fecha_entrada`, `fecha_salida`, `id_mesa`, `nom_empleado`, `num_comensales` FROM `tbl_registro` INNER JOIN tbl_empleado on tbl_registro.id_camarero=tbl_empleado.id_empleado;


"ID Registro" . "\t" . "Fecha Entrada" . "\t" . "Fecha Salida" . "\t" . "Mesa" . "\t". "Camarero" . "\t". "Comensales" . "\t";