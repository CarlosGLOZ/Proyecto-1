# Proyecto-1 --> Sergi Garcia, Carlos Giraldo, Mario Gómez
 Disponemos de un login con validación de javascript, las claves para acceder son cualquier usuario de la tabla empleado. Se puede acceder con: carlos@gmail.com 1234 
 Una vez dentro de la web, se puede realizar:
   - Ocupar y liberar la mesa
   - Ponerla en mantenimiento e introducir el motivo por el cual está
   - Se pueden filtrar las mesas por salas, capacidad y disponibilidad
   - LogOut

 Cabe destacar que el número de mesas que aparecen es dinámico, por lo que cualquier cambio en la base de datos se actualizaría automáticamente. 
 Las imágenes de la web se cambian de color dependiendo el estado de la mesa. 

 Cada vez que se ocupa una mesa se crea una entrada automática con la información de la ocupación, y al liberarla, establecerá la hora de salida
 Cada vez que una mesa esté en mantenimiento se crea un registro en la tabla incidencias con la información de la misma. 