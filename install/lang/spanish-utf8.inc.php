<?php
/**
 * MODX Installer language file
 *
 * @author MODX Team
 * @version 1.0.15
 * @date 2014/02/24
 *
 * @language Spanish
 * @package modx
 * @subpackage installer
 *
 * Please commit your language changes on Transifex (https://www.transifex.com/projects/p/modx-evolution/) or on GitHub (https://github.com/modxcms/evolution).
 */
$_lang["agree_to_terms"] = 'Acordar con los Términos de la Licencia e Instalar';
$_lang["alert_database_test_connection"] = '!Necesitas crear tu base de datos o probar la selección de tu base de datos!';
$_lang["alert_database_test_connection_failed"] = '!La prueba de tu selección de base de datos ha fallado';
$_lang["alert_enter_adminconfirm"] = '¡Las dos contraseñas para el administrador no coinciden!';
$_lang["alert_enter_adminlogin"] = '¡Necesitas escribir un nombre de usuario para la cuenta del administrador del sistema!';
$_lang["alert_enter_adminpassword"] = '¡Necesitas escribir una contraseña para la cuenta de administrador del sistema!';
$_lang["alert_enter_database_name"] = '¡Necesitas escribir un nombre para la base de datos!';
$_lang["alert_enter_host"] = '¡Necesitas escribir el nombre del servidor (host) de la base de datos!';
$_lang["alert_enter_login"] = '¡Necesitas escribir tu nombre de usuario (login name) de la base de datos!';
$_lang["alert_server_test_connection"] = '¡Necesitas probar la conexión de tu servidor!';
$_lang["alert_server_test_connection_failed"] = '¡La prueba de la conexión de tu servidor ha fallado!';
$_lang["alert_table_prefixes"] = '¡El prefijo de las tablas debe de comenzar con una letra!';
$_lang["all"] = 'Todos';
$_lang["and_try_again"] = 'y vuélvelo a intentar. Si necesitas ayuda de como resolver el problema';
$_lang["and_try_again_plural"] = 'y vuélvelo a intentar. Si necesitas ayuda de como resolver los problemas';
$_lang["begin"] = 'Iniciar';
$_lang["btnback_value"] = 'Anterior';
$_lang["btnclose_value"] = 'Cerrar';
$_lang["btnnext_value"] = 'Siguiente';
$_lang["cant_write_config_file"] = 'MODX no pudo escribir al archivo de configuración. Por favor copia lo siguiente en el archivo. ';
$_lang["cant_write_config_file_note"] = 'Una vez que se ha hecho eso, puedes entrar al sistema administrativo de MODX al poner en tu navegador la dirección YourSiteName.com/[+MGR_DIR+]/.';
$_lang["checkbox_select_options"] = 'Lista Múltiple:';
$_lang["checking_if_cache_exist"] = 'Comprobando si el directorio <span class="mono">assets/cache</span> existe: ';
$_lang["checking_if_cache_file_writable"] = 'Comprobando que el archivo <span class="mono">assets/cache/siteCache.idx.php</span> es escribible: ';
$_lang["checking_if_cache_file2_writable"] = 'Comprobando que el archivo <span class="mono">assets/cache/sitePublishing.idx.php</span> es escribible: ';
$_lang["checking_if_cache_writable"] = 'Comprobando que el directorio <span class="mono">assets/cache</span>  es escribible: ';
$_lang["checking_if_config_exist_and_writable"] = 'Comprobando que el archivo <span class="mono">[+MGR_DIR+]/includes/config.inc.php</span> existe y es escribible: ';
$_lang["checking_if_export_exists"] = 'Comprobando que el directorio <span class="mono">assets/export</span> existe: ';
$_lang["checking_if_export_writable"] = 'Comprobando que el directorio <span class="mono">assets/export</span> es escribible: ';
$_lang["checking_if_images_exist"] = 'Comprobando que los directorios <span class="mono">assets/images</span>, <span class="mono">/assets/files</span>, <span class="mono">/assets/flash</span>, <span class="mono">/assets/media</span>, <span class="mono">/assets/backup</span> y <span class="mono">/assets/.thumbs</span> existan: ';
$_lang["checking_if_images_writable"] = 'Comprobando que los directorios <span class="mono">assets/images</span>, <span class="mono">/assets/files</span>, <span class="mono">/assets/flash</span>, <span class="mono">/assets/media</span>, <span class="mono">/assets/backup</span> y <span class="mono">/assets/.thumbs</span> sean escribibles: ';
$_lang["checking_mysql_strict_mode"] = 'Checando MySQL para el sql_mode estricto: ';
$_lang["checking_mysql_version"] = 'Checando la versión de MySQL: ';
$_lang["checking_php_version"] = 'Checando la versión de PHP: ';
$_lang["checking_registerglobals"] = 'Checando si Register_Globals está deshabilitado (off): ';
$_lang["checking_registerglobals_note"] = 'Esta configuración hace tu sitio mucho más propenso a ataques de programas (Cross Site Scripting - XSS).  Deberías hablar con tu proveedor de hospedaje para deshabilitar esta configuración, normalmente de una de estas tres maneras: modificando el archivo php.ini global, añadiendo reglas al archivo .htaccess en la raíz de tu instalación de MODX o añadiendo archivos personalizados de php.ini en cada directorio de tu instalación (y hay muchos de ellos).  Todavía podrás instalar MODX, pero considérate advertido.';
$_lang["checking_sessions"] = 'Checando si las sesiones están apropiadamente configuradas: ';
$_lang["checking_table_prefix"] = 'Checando el prefijo de las tablas `';
$_lang["chunks"] = 'Chunks';
$_lang["config_permissions_note"] = 'Para instalaciones nuevas en servidores Linux/Unix, favpr de crear un archivo nuevo en blanco llamado <span class="mono">config.inc.php</span> en el directorio <span class="mono">[+MGR_DIR+]/includes/</span> con los permisos de archivo configurados a 0666.';
$_lang["connection_screen_collation"] = 'Compaginación:';
$_lang["connection_screen_connection_method"] = 'Método de Conexión:';
$_lang["connection_screen_database_connection_information"] = 'Información de la base de datos';
$_lang["connection_screen_database_connection_note"] = 'Favor de escribir el nombre de la base de datos creada para MODX.  Si no existe una base de datos todavía, el instalador tratará de crear una para ti.  Esto puede fallar dependiendo de la configuración de MySQL o de los permisos del usuario de bases de datos para tu dominio/instalación.';
$_lang["connection_screen_database_host"] = 'Servidor de base de datos:';
$_lang["connection_screen_database_info"] = 'Información de la base de datos';
$_lang["connection_screen_database_login"] = 'Nombre de usuario de la base de datos:';
$_lang["connection_screen_database_name"] = 'Nombre de la base de datos:';
$_lang["connection_screen_database_pass"] = 'Contraseña de la base de datos:';
$_lang["connection_screen_database_test_connection"] = 'Haz clic aquí para crear tu base de datos o para probar la selección de tu base de datos';
$_lang["connection_screen_default_admin_email"] = 'Email del administrador:';
$_lang["connection_screen_default_admin_login"] = 'Nombre de usuario para el administrador:';
$_lang["connection_screen_default_admin_note"] = 'Ahora necesitarás escribir algunos detalles para la cuenta principal del administrador de MODX.  Puedes llenar tu nombre y una contraseña que no se te vaya a olvidar.  Necesitarás esta información para entrar al administrador una vez que la configuración esté completa.';
$_lang["connection_screen_default_admin_password"] = 'Contraseña para Administrador:';
$_lang["connection_screen_default_admin_password_confirm"] = 'Confirmar contraseña:';
$_lang["connection_screen_default_admin_user"] = 'Usuario Administrador Prefijado';
$_lang["connection_screen_defaults"] = 'Configuración del Administrador Prefijada';
$_lang["connection_screen_server_connection_information"] = 'Conexión del servidor e información de entrada';
$_lang["connection_screen_server_connection_note"] = 'Por favor escribe el nombre de tu servidor, tu nombre de usuario y tu contraseña y entonces prueba la conexión.';
$_lang["connection_screen_server_test_connection"] = 'Haz clic aquí para probar la conexión de tu servidor y obtener las compaginaciones disponibles';
$_lang["connection_screen_table_prefix"] = 'Prefijo de las tablas:';
$_lang["creating_database_connection"] = 'Creando conexión a la base de datos: ';
$_lang["database_alerts"] = '¡Alertas de la base de datos!';
$_lang["database_connection_failed"] = '¡La conexión a la base de datos falló!';
$_lang["database_connection_failed_note"] = 'Favor de revisar los detalles de conexión a tu base de datos y vuélvelo a intentar.';
$_lang["database_use_failed"] = '¡No se pudo seleccionar la base de datos!';
$_lang["database_use_failed_note"] = 'Favor de revisar los permisos de base de datos para el usuario especificado  y vuélvelo a intentar.';
$_lang["default_language"] = 'Idioma del Administrador Prefijado';
$_lang["default_language_description"] = 'Este es el idioma prefijado que será usado en el panel de control del Administrador de MODX.';
$_lang["depedency_create"] = 'Dependencia creada';
$_lang["depedency_update"] = 'Dependencia actualizada';
$_lang["during_execution_of_sql"] = ' durante la ejecución del comando SQL ';
$_lang["encoding"] = 'UTF-8';
$_lang["error"] = 'error';
$_lang["errors"] = 'errores';
$_lang["failed"] = '¡Falló!';
$_lang["guid_set"] = 'Ajuste del GUID';
$_lang["help"] = '!Ayuda!';
$_lang["help_link"] = 'http://forums.modx.com/';
$_lang["help_title"] = 'Asistencia para la instalación en los foros de MODX';
$_lang["iagree_box"] = 'Estoy de acuerdo con los términos de <a href="../assets/docs/license.txt" target="_blank">la licencia de MODX</a>.  Para las traducciones de la licencia GPL version 2, por favor visitar <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0-translations.html" target="_blank">el sitio del Sistema Operativo GNU</a>.';
$_lang["install"] = 'Instalar';
$_lang["install_overwrite"] = 'Instalar/Sobrescribir';
$_lang["install_results"] = 'Resultados de Instalación';
$_lang["install_update"] = 'Instalar/Actualizar';
$_lang["installation_error_occured"] = 'Los siguientes errores han ocurrido durante la instalación';
$_lang["installation_install_new_copy"] = 'Instalar una copia nueva de ';
$_lang["installation_install_new_note"] = 'Favor de notar que esta opción puede sobreescribir cualquier dato en tu base de datos.';
$_lang["installation_mode"] = 'Modo de Instalación';
$_lang["installation_new_installation"] = 'Instalación Nueva';
$_lang["installation_note"] = '<strong>Nota:</strong> Después de entrar al sistema de administración de MODX, debes de editar y guardar las configuraciones del sistema antes de navegar por el sitio al ir a <strong>Herramientas</strong> -> Configuración del Sistema en el administrador de MODX.';
$_lang["installation_successful"] = '¡La instalación fue exitosa!';
$_lang["installation_upgrade_advanced"] = 'Actualización Avanzada';
$_lang["installation_upgrade_advanced_note"] = 'Para administradores avanzados de base de datos o para cambiar a servidores con una conexión de base de datos con un conjunto de caracteres diferente.  <b>Necesitarás saber el nombre completo de tu base de datos, su usuario, contraseña, y detalles de su conexión y compaginación.</b>';
$_lang["installation_upgrade_existing"] = 'Actualizar un Instalación Existente';
$_lang["installation_upgrade_existing_note"] = 'Actualizar tus archivos y la base de datos existentes.';
$_lang["installed"] = 'Instalado';
$_lang["installing_demo_site"] = 'Instalando el sitio de demostración: ';
$_lang["language_code"] = 'es';
$_lang["loading"] = 'Cargando...';
$_lang["modules"] = 'Módulos';
$_lang["modx_footer1"] = '&copy; 2005-2014 del proyecto de <a href="http://modx.com/" target="_blank" style="color: green; text-decoration:underline">MODX</a> Content Management Framework (CMF). Todos los derechos reservados. MODX tiene licencia GPL de GNU.';
$_lang["modx_footer2"] = 'MODX es software gratuito.  Te invitamos a ser creativo y usarlo de cualquier manera que se te antoje. Sólo asegura que si haces cambios y decides distribuir una versión modificada de MODX que el código fuente siga siendo gratis.';
$_lang["modx_install"] = 'MODX &raquo; Instalar';
$_lang["modx_requires_php"] = ', y MODX requiere de PHP versión [+min_version+] o mayor';
$_lang["mysql_5051"] = ' la versión del servidor de MySQL es 5.0.51!';
$_lang["mysql_5051_warning"] = 'Se sabe de algunos problemas con MySQL 5.0.51.  Es recomendado que actualices antes de continuar.';
$_lang["mysql_version_is"] = ' Tu versión de MySQL es: ';
$_lang["no"] = 'No';
$_lang["none"] = 'Ninguna';
$_lang["not_found"] = 'no encontrado';
$_lang["ok"] = 'OK';
$_lang["optional_items"] = 'Opciones adicionales';
$_lang["optional_items_note"] = 'Escoge tus opciones de instalación y haz clic en Instalar:';
$_lang["php_security_notice"] = '<legend>Aviso de Seguridad</legend><p>Aunque MODX puede funcionar con esta versión de PHP, no lo recomendamos. Tu versión de PHP es vulnerable a numerosos problemas de seguridad.  Por favor actualiza  a la versión PHP 4.3.8 o mayor, la cual resuelve estos problemas.  Se recomienda que actualices a esta versión para la seguridad de tu propio sitio de internet.</p>';
$_lang["please_correct_error"] = '. Favor de corregir el error';
$_lang["please_correct_errors"] = '. Favor de corregir los errores';
$_lang["plugins"] = 'Plugins';
$_lang["preinstall_validation"] = 'Validación previa a la instalación';
$_lang["recommend_setting_change_title"] = 'Se Recomienda cambiar configuración';
$_lang["recommend_setting_change_validate_referer_confirmation"] = 'Cambiar configuración: <em>¿ Validar cabeceras HTTP_REFERER ?</em>';
$_lang["recommend_setting_change_validate_referer_description"] = 'Su sitio web no está configurado para validar las peticiones entrantes HTTP_REFERER al Manager. Recomendamos habilitar esta configuración para reducir el riesgo de un ataque CSRF (Falsificación de petición en sitios cruzados).';
$_lang["remove_install_folder_auto"] = 'Borrar la carpeta de instalación y sus archivos de mi sitio de internet <br />&nbsp;(Esta operación requiere los permisos correctos para borrar la carpeta).';
$_lang["remove_install_folder_manual"] = 'Por favor recuerda borrar la carpeta &quot;<b>install</b>&quot; antes de entrar al sistema de administración.';
$_lang["retry"] = 'Volver a Intentar';
$_lang["running_database_updates"] = 'Actualizando la base de datos: ';
$_lang["sample_web_site"] = 'Sitio de Muestra';
$_lang["sample_web_site_note"] = 'Favor de notar que esto va a <b style="color:#CC0000">sobreescribir</b> los documentos y recursos existentes.';
$_lang["session_problem"] = 'Un problema fue detectado con tus sesiones de servidor.  Por favor consulta con tu admin de servidor para corregir este problema.';
$_lang["session_problem_try_again"] = '¿Intentar nuevamente?';
$_lang["setup_cannot_continue"] = 'Desafortunadamente, el configurador no puede continuar en este momento, debido a lo anterior ';
$_lang["setup_couldnt_install"] = 'El configurador de MODX no pudo instalar/alterar algunas tablas dentro de la base de datos seleccionada.';
$_lang["setup_database"] = 'El configurador intentará ahora configurar la base de datos:<br />';
$_lang["setup_database_create_connection"] = 'Creando una conexión a la base de datos: ';
$_lang["setup_database_create_connection_failed"] = '¡La conexión a la base de datos falló!';
$_lang["setup_database_create_connection_failed_note"] = 'Favor de revisar los detalles de conexión de la base de datos y volver a intentar.';
$_lang["setup_database_creating_tables"] = 'Creando tablas de la base de datos: ';
$_lang["setup_database_creation"] = 'Creando la base de datos: `';
$_lang["setup_database_creation_failed"] = '¡No se pudo crear la base de datos!';
$_lang["setup_database_creation_failed_note"] = ' - ¡El configurador no pudo crear la base de datos!';
$_lang["setup_database_creation_failed_note2"] = 'El configurador no pudo crear la base de datos, y no se encontró una base de datos con el mismo nombre. Es probable que la seguridad de su proveedor de hospedaje no prmita programas externos para crear bases de datos.  Favor de crear una base de datos de acuerdo con el procedimiento de tu proveedor de hospedaje y vuélvelo a intentar.';
$_lang["setup_database_selection"] = 'Seleccionando la base de datos: `';
$_lang["setup_database_selection_failed"] = '¡No se pudo seleccionar la base de datos!';
$_lang["setup_database_selection_failed_note"] = 'No existe la base de datos. El configurador intentará crearla.';
$_lang["snippets"] = 'Snippets';
$_lang["some_tables_not_updated"] = 'Algunas tablas no fueron actualizadas.  Esto puede ser debido a modificaciones previas.';
$_lang["status_checking_database"] = 'Checando la base de datos: ';
$_lang["status_connecting"] = ' Conexión al servidor: ';
$_lang["status_failed"] = '¡falló!';
$_lang["status_failed_could_not_create_database"] = 'falló - no se pudo crear la base de datos';
$_lang["status_failed_database_collation_does_not_match"] = 'falló  - no coincide la compaginación de la base de datos; usa SET NAMES o elige %s';
$_lang["status_failed_table_prefix_already_in_use"] = 'falló - el prefijo de tabla ya existe';
$_lang["status_passed"] = 'pasó - base de datos seleccionada';
$_lang["status_passed_database_created"] = 'pasó - base de datos creada';
$_lang["status_passed_server"] = 'pasó - compaginaciones ahora disponibles';
$_lang["strict_mode"] = ' !El modo sql_mode estricto del servidor MySQL está habilitado!';
$_lang["strict_mode_error"] = 'Algunas características de MODX pueden no trabajar apropiadamente a no se de que el modo STRICT_TRANS_TABLES sql_mode esté habilitado.  Puedes configurar el modo de MySQL al editar el archivo my.cnf o contactar al administrador de tu servidor.';
$_lang["summary_setup_check"] = 'El configurador ha revisado varios elementos para ver si todo está listo para comenzar la configuración.';
$_lang["system_configuration"] = 'Configuración de sistema';
$_lang["system_configuration_validate_referer_description"] = 'Es recomendable configurar la <strong>Validación de Cabeceras HTTP_REFERER</strong> para proteger su sitio contra ataques CSRF, pero en algunos servidores esta opción puede ser inaccesible. 
';
$_lang["table_prefix_already_inuse"] = ' - ¡Este prefijo ya se está usando en esta base de datos!';
$_lang["table_prefix_already_inuse_note"] = 'El configurador no puede instalar en la base de datos seleccionada, ya contiene tablas con el prefijo que especificaste.  Por favor escoge un nuevo prefijo para tablas y corre el configurador otra vez.';
$_lang["table_prefix_not_exist"] = ' - ¡Este prefijo no existe en esta base de datos!';
$_lang["table_prefix_not_exist_note"] = 'El configurador no pudo instalar en la base de datos seleccionada, no contiene tablas existentes con el prefijo que especificaste para ser actualizadas.  Por favor escoge un prefijo de tablas existente y corre el configurador otra vez.';
$_lang["templates"] = 'Templates';
$_lang["to_log_into_content_manager"] = 'Para entrar al sistema de administración de MODX ([+MGR_DIR+]/index.php) dando clic en el botón de `Cerrar`.';
$_lang["toggle"] = 'Invertir';
$_lang['tvs'] = 'Template Variables';
$_lang["unable_install_chunk"] = 'No se pudo instalar el chunk. Archivo';
$_lang["unable_install_module"] = 'No se pudo instalar el módulo. Archivo';
$_lang["unable_install_plugin"] = 'No se pudo instalar el plugin. Archivo';
$_lang["unable_install_snippet"] = 'No se pudo instalar el snippet. Archivo';
$_lang["unable_install_template"] = 'No se pudo instalar el template. Archivo';
$_lang["upgrade_note"] = '<strong>Nota:</strong> Antes de navegar por tu sitio debes de entrar al admin con una cuenta de administrador, revisar y guardar tus configuraciones del Sistema.';
$_lang["upgraded"] = 'Actualizado';
$_lang["validate_referer_title"] = 'Validar encabezados HTTP_REFERER?';
$_lang["visit_forum"] = 'visita los <a href="http://forums.modx.com/" target="_blank">Foros de MODX</a>.';
$_lang["warning"] = '!ADVERTENCIA!';
$_lang["welcome_message_start"] = 'Primero, elige el tipo de instalación a efectuarse:';
$_lang["welcome_message_text"] = 'Este programa te guiará por el resto de la instalación.';
$_lang["welcome_message_welcome"] = 'Bienvenido al programa de instalación de MODX.';
$_lang["writing_config_file"] = 'Escribiendo el archivo de configuración: ';
$_lang["yes"] = 'Si';
$_lang["you_running_php"] = ' - Estás operando con PHP ';
?>