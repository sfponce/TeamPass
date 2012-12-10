<?php
//SPANISH
if (!isset($_SESSION['settings']['cpassman_url'])) {
    $TeamPass_url = '';
} else {
    $TeamPass_url = $_SESSION['settings']['cpassman_url'];
}

$txt['help_on_folders'] = "<div class=\"\'ui-state-highlight\" ui-corner-all\=\"\" style=\"font-weight: bold;\"> Esta pagina se utiliza para crear y administrar CARPETAS.<br> Se necesita una carpeta para organizar sus items. Es similar a los directorios de archivos de windows.<br> <span class=\"\'ui-icon\" ui-icon-lightbulb\=\"\" style=\"\" left;\=\"\">&nbsp;</span>El nivel mas bajo de carpeta se llama RAIZ.<br> <span class=\"\'ui-icon\" ui-icon-lightbulb\=\"\" style=\"\" left;\=\"\">&nbsp;</span>Todas las carpetas y subcarpetas crean la estructura de arbol.<br> <span class=\"\'ui-icon\" ui-icon-lightbulb\=\"\" style=\"\" left;\=\"\">&nbsp;</span>Cada carpeta esta asociada a un nivel de profundidad en la estructura de arbol. </div> <div id=\"\'accordion\'\"> <h3><a href=\"%5C%27#%5C%27\">Agregar una nueva CARPETA</a></h3> <div> Hacer click en el icono <img src=\"%5C%27includes/images/folder--plus.png%5C%27\" alt=\"\'\'\">. Aparecera un cuadro de dialogo dedicado en el cual usted tendra que ingresar:<br> - La etiqueta o nombre de la carpeta<br> - La carpeta pariente (cada carpeta es una subcarpeta de otra)<br> - Un nivel de complejidad (El nivel de complejidad se usa para la complejidad del password. Cuando se crea un nuevo item, el password asociado no puede ser menos complejo que el del nivel requerido)<br> - un periodo de renovacion expresado en meses (se necesita para forzar la renovacion de password despues de un periodo especifico). </div> <h3><a href=\"%5C%27#%5C%27\">Editar una carpeta existente</a></h3> <div> Para cambiar la carpeta, la complejidad, la carpeta pariente o el periodo de renovacion, solamente debe hacer un click sobre la celda.<br> Esto hara que la celda sea editable. Cambie el valor y clickee sobre el icono <img src=\"%5C%27includes/images/disk_black.png%5C%27\" alt=\"\'\'\"> para salvar, o sobre el icono <img src=\"%5C%27includes/images/cross.png%5C%27\" alt=\"\'\'\"> para cancelar.<br> <p style=\"\"> <img src=\"%5C%27includes/images/help/folders_1.png%5C%27\" alt=\"\'\'\"> </p> <div style=\"\" opx=\"\" 0px=\"\" 20px;\=\"\"> Tenga en cuenta que si cambia la carpeta pariente, todas las subcarpetas de la carpeta modificada seran removidas. </div> </div> <h3><a href=\"%5C%27#%5C%27\">Borrar una carpeta</a></h3> <div> Puede borrar una carpeta. Para hacer esto haga click sobre el icono <img src=\"%5C%27includes/images/folder--minus.png%5C%27\" alt=\"\'\'\">.<br> Esto borrara todos los items dentro de la carpeta y todas las subcarpetas ... tenga cuidado!!!! <p style=\"\"> <img src=\"%5C%27includes/images/help/folders_2.png%5C%27\" alt=\"\'\'\"> </p> </div> <h3><a href=\"%5C%27#%5C%27\">Ajustes especiales</a></h3> <div> Existen dos ajustes para una carpeta.<br> El 1ero permite la creacion de items sin respetar el nivel de complejidad requerido para el password.<br> El segundo permite la modificacion de un item sin respetar el nivel de complejidad requerido para el password.<br> Puede tambien combinar ambos.<br> Puede tambien usarlos temporariamente. <p style=\"\"> <img src=\"%5C%27includes/images/help/folders_3.png%5C%27\" alt=\"\'\'\"> </p> </div> </div><br>";
$txt['help_on_roles'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Esta página se usa para crear y administrar ROLES.<br /> Un rol se asocia a un conjunto de carpetas permitidas y prohibidas.<br /> Un vez que se han definido varios roles, puede asociarles USUARIOS a estos. </div> <div id='accordion'> <h3><a href='#'>Añadir un nuevo ROL</a></h3> <div> Simplemente haga click en el icono <img src='includes/images/users--plus.png' alt='' />. Aparecerá una ventana de diálogo en la que podrá poner un título al nuevo ROL. </div> <h3><a href='#'>Permitir o prohibir una carpeta</a></h3> <div> Podrá usar la matriz 'Roles vs Carpetas' para definir los derechos de acceso. Si una celda es roja, el rol no podrá acceder a esa carpeta, y si la celda es verde, el rol podrá acceder a ella.<br /> Para poder cambiar el acceso, simplemente haga click en las celdas que quiera.<br/> <p style='text-align:center;'> <span style='text-align:center;'><img src='includes/images/help/roles_1.png' alt='' /></span> </p> En la anterior captura de pantalla, puede ver la carpeta 'Cleaner' que esta permitida para el rol 'Dev' pero no para el rol 'Commercial'. </div> <h3><a href='#'>Actualice manualmente la matriz</a></h3> <div> Simplemente haga click en el icono <img src='includes/images/arrow_refresh.png' alt='' />. </div> <h3><a href='#'>Editar un rol</a></h3> <div> Puede cambiar el titulo de un rol sin impacto en los parámetros ya establecidos.<br /> Seleccione el rol que quiera cambiar y haga click en el icono <img src='includes/images/ui-tab--pencil.png' alt='' />.<br /> Esto le presentará un diálogo emergente en el que se le va a pedir un nuevo título. </div> <h3><a href='#'>Eliminar un rol</a></h3> <div> Le permite eliminar un rol existente.<br /> Seleccione el rol que quiera eliminar y haga click en el icono <img src='includes/images/ui-tab--minus.png' alt='' />.<br /> Esto le presentará un diálogo emergente en el que podrá confirmar la eliminación. </div> </div>";
$txt['help_on_users'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Esta página sirve para crear y gestionar USUARIOS.<br /> Una cuenta de usuario es necesaria para cada persona física que quiera usar TeamPass.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>El primer paso es seleccionar que ROLES tiene el usuario.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>El segundo paso es personalizar las carpetas a las que tiene acceso o no. </div> <div id='accordion'> <h3><a href='#'>Añadir un nuevo USUARIO</a></h3> <div> Simplemente haga click en el icono <img src='includes/images/user--plus.png' alt='' />. Un diálogo aparecerá en el cual tendrá que introducir:<br /> - El login del usuario<br /> - una contraseña (puede ser generada y se cambiará por el usuario en su primera conexión)<br /> - un eMail válido<br /> - si el usuario puede ser un administrador (acceso completo a todas las funcionalidades)<br /> - si el usuario puede ser Manager (acceso completo a los Elementos)<br /> - si el usuario puede tener Carpetas Personales </div> <h3><a href='#'>Añadir un ROL a un USUARIO</a></h3> <div> Puede asociar a un USUARIO todos los ROLES que quiera. Para eso, simplemente haga click en el icono <img src='includes/images/cog_edit.png' alt='' />.<br /> Un cuadro de diálogo aparecerá en el cual podrá seleccionar o no los roles necesarios.<br /><br /> Cuando un ROL es añadido a un USUARIO, el USUARIO podrá acceder a las carpetas permitidas de este ROL y no tendrá acceso a las prohibidas.<br /><br /> Ahora puede ser más preciso en los permisos otorgados a un USUARIO utilizando los campos 'Carpetas permitidas' y 'Carpetas prohibidas'. De hecho, podrá permitir o no algunas carpetas de las demás incluso si están especificadas en el ROL. <div style='margin:2px Opx 0px 20px;'> Por ejemplo: <p style='margin-left:20px;margin-top: 2px;'> - El USUARIO1 está asociado al ROL1 y ROL2. <br /> - El ROL1 está configurado para permitir el acceso a las carpetas F1 y F2. <br /> - F1 tiene 4 subcarpetas: S1, S2, S3 y S4.<br /> - Esto significa que el USUSARIO1 tiene acceso a F1, F2, S1, S2, S3 y S4.<br /> - Ahora puede personalizar al USUARIO1 prohibiéndole el acceso a S4 utilizando esta página. </p> </div> </div> <h3><a href='#'>Es Administrador (GOD)</a></h3> <div> Puede decidir proporcionar el permiso GOD a un usario. Para hacer esto, solo tiene que seleccionar la casilla.<br /> GOD tiene todo permitido en TeamPass sin ningún tipo de restricción... ¡¡¡utilicelo con cuidado!!!! <p style='text-align:center;'> <img src='includes/images/help/users_1.png' alt='' /> </p> </div> <h3><a href='#'>Manager</a></h3> <div> Puede decidir otorgar permisos de MANAGER a un usuario. Para eso, seleccione la casilla.<br /> Un Manager puede modificar y suprimir elementos y carpetas, incluso las que él no ha creado.<br /> Un manager solo puede acceder a las carpetas que tiene permitidas. Así puede crear managers dedicados a departamentos concretos. <p style='text-align:center;'> <img src='includes/images/help/users_2.png' alt='' /> </p> </div> <h3><a href='#'>Eliminar USUARIO</a></h3> <div> Puede decidir eliminar un usuario. Para ello, simplemente haga click en el icono <img src='includes/images/user--minus.png' alt='' />. <p style='text-align:center;'> <img src='includes/images/help/users_3.png' alt='' /> </p> </div> <h3><a href='#'>Cambiar contraseña de de Usuario</a></h3> <div> Puede cambiar la contraseña de un usuario. Para eso, simplemente haga click en el icono <img src='includes/images/lock__pencil.png' alt='' />.<br /> En la primera conexión, el usuario la tendrá que cambiar. <p style='text-align:center;'> <img src='includes/images/help/users_4.png' alt='' /> </p> </div> <h3><a href='#'>Cambiar el eMail del Usuario</a></h3> <div> Puede cambiar el eMail de un Usuario haciendo click en el icono <img src='includes/images/mail--pencil.png' alt='' />.<br /> <p style='text-align:center;'> <img src='includes/images/help/users_5.png' alt='' /> </p> </div> </div>";
