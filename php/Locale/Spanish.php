<?php

namespace Lychee\Locale;

final class Spanish
{
	static public function code()
	{
		return 'es';
	}

	static public function get_locale()
	{
		$locale = array(
			'USERNAME'		=> 'nombre de usuario',
			'PASSWORD'		=> 'contraseña',
			'ENTER'			=> 'Entrar',
			'CANCEL'		=> 'Cancelar',
			'SIGN_IN'		=> 'Iniciar sesión',
			'CLOSE'			=> 'Cerrar',

			'SETTINGS'			=> 'Configuración',
			'USERS'				=> 'Usuarios',
			'SHARING'			=> 'Compartir',
			'CHANGE_LOGIN'		=> 'Cambiar inicio de sesión',
			'CHANGE_SORTING'	=> 'Cambiar clasificación',
			'SET_DROPBOX'		=> 'Establecer Dropbox',
			'ABOUT_LYCHEE'		=> 'Acerca de Lychee',
			'DIAGNOSTICS'		=> 'Diagnóstico',
			'LOGS'				=> 'Mostrar Registros',
			'SIGN_OUT'			=> 'Cerrar Sesión',
			'UPDATE_AVAILABLE'	=> '¡Actualización disponible!',
			'DEFAULT_LICENSE'	=> 'Licencia predeterminada para nuevas cargas:',
			'SET_LICENSE'		=> 'Establecer Licencia',
			'SET_OVERLAY_TYPE'	=> 'Establecer Superposición',

			'SMART_ALBUMS'		=> 'Álbumes inteligentes',
			'SHARED_ALBUMS'		=> 'Álbumes compartidos',
			'ALBUMS'			=> 'Álbumes',
			'PHOTOS'			=> 'Imágenes',

			'RENAME'			=> 'Renombrar',
			'RENAME_ALL'		=> 'Renombrar Todo',
			'MERGE'				=> 'Unir',
			'MERGE_ALL'			=> 'Unir Todo',
			'MAKE_PUBLIC'		=> 'Hacer Público',
			'SHARE_ALBUM'		=> 'Compartir Album',
			'SHARE_PHOTO'		=> 'Compartir Foto',
			'DOWNLOAD_ALBUM'	=> 'Descargar Álbum',
			'ABOUT_ALBUM'		=> 'Acerca del Álbum',
			'DELETE_ALBUM'		=> 'Eliminar Álbum',
			'FULLSCREEN_ENTER'	=> 'Ingreser a pantalla completa',
			'FULLSCREEN_EXIT'	=> 'Salir de pantalla completa',

			'DELETE_ALBUM_QUESTION'			=> 'Eliminar Álbum y Fotos',
			'KEEP_ALBUM'					=> 'Mantener Álbum',
			'DELETE_ALBUM_CONFIRMATION_1'	=> "¿Estás seguro de que deseas eliminar el álbum?",
			'DELETE_ALBUM_CONFIRMATION_2'	=> '¿Ha seleccionado un álbum y todas las fotos que contiene? ¡Esta acción no se puede deshacer!',

			'DELETE_ALBUMS_QUESTION'		=> 'Eliminar Álbumes y Fotos',
			'KEEP_ALBUMS'					=> 'Mantener Álbumes',
			'DELETE_ALBUMS_CONFIRMATION_1'	=> "¿Está seguro de que desea eliminar todo",
			'DELETE_ALBUMS_CONFIRMATION_2'	=> 'Ha seleccionado álbumes y todas las fotos que contienen? ¡Esta acción no se puede deshacer!',

			'DELETE_UNSORTED_CONFIRM'		=> '¿Estás seguro de que deseas eliminar todas las fotos de \'Sin clasificar\'?<br>¡Esta acción no se puede deshacer!',
			'CLEAR_UNSORTED'				=> 'Borrar \'Sin Clasificar\'',
			'KEEP_UNSORTED'					=> 'Mantener \'Sin Clasificar\'',

			'EDIT_SHARING'					=> 'Editar Compartido',
			'MAKE_PRIVATE'					=> 'Hazlo Privado',

			'CLOSE_ALBUM'					=> 'Cerrar Álbum',
			'CLOSE_PHOTO'					=> 'Cerrar Foto',

			'ADD'							=> 'Añadir',
			'MOVE'							=> 'Mover',
			'MOVE_ALL'						=> 'Muever Todo',
			'DUPLICATE'						=> 'Duplicar',
			'DUPLICATE_ALL'					=> 'Duplicar Todo',
			'COPY_TO'						=> 'Copiar a...',
			'COPY_ALL_TO'					=> 'Copiar Todo a ...',
			'DELETE'						=> 'Eliminar',
			'DELETE_ALL'					=> 'Eliminar Todos',
			'DOWNLOAD'						=> 'Descargar',
			'DOWNLOAD_MEDIUM'				=> 'Descargar Tamaño Mediano',
			'DOWNLOAD_SMALL'				=> 'Descargar Tamaño Pequeño',
			'UPLOAD_PHOTO'					=> 'Subir Foto',
			'IMPORT_LINK'					=> 'Importar desde Enlace',
			'IMPORT_DROPBOX'				=> 'Importar desde Dropbox',
			'IMPORT_SERVER'					=> 'Importar desde Servidor',
			'NEW_ALBUM'						=> 'Nuevo Álbum',

			'TITLE_NEW_ALBUM'			=> 'Ingrese un título para el nuevo álbum:',
			'UNTITLED'					=> 'Sin Título',
			'UNSORTED'					=> 'Sin Clasificar',
			'STARRED'					=> 'Destacado',
			'RECENT'					=> 'Reciente',
			'PUBLIC'					=> 'Público',
			'NUM_PHOTOS'				=> 'Fotos',

			'CREATE_ALBUM'				=> 'Crear Álbum',

			'STAR_PHOTO'				=> 'Destacar Photo',
			'STAR'						=> 'Destacar',
			'STAR_ALL'					=> 'Destacar Todo',
			'TAGS'						=> 'Etiquetar',
			'TAGS_ALL'					=> 'Etiquetar Todo',
			'UNSTAR_PHOTO'				=> 'Desetiquetar Foto',

			'FULL_PHOTO'				=> 'Foto Completa',
			'ABOUT_PHOTO'				=> 'Acerca de la Foto',
			'DIRECT_LINK'				=> 'Enlace Directo',

			'ALBUM_ABOUT'				=> 'Acerca de',
			'ALBUM_BASICS'				=> 'Basico',
			'ALBUM_TITLE'				=> 'Título',
			'ALBUM_NEW_TITLE'			=> 'Ingrese un nuevo título para este álbum:',
			'ALBUMS_NEW_TITLE_1'		=> 'Ingrese un título para todos',
			'ALBUMS_NEW_TITLE_2'		=> 'álbumes seleccionados:',
			'ALBUM_SET_TITLE'			=> 'Establecer Título',
			'ALBUM_DESCRIPTION'			=> 'Descripción',
			'ALBUM_NEW_DESCRIPTION'		=> 'Ingrese una nueva descripción para este álbum:',
			'ALBUM_SET_DESCRIPTION'		=> 'Establecer Descripción',
			'ALBUM_ALBUM'				=> 'Álbum',
			'ALBUM_CREATED'				=> 'Creado',
			'ALBUM_IMAGES'				=> 'Imágenes',
			'ALBUM_SHARING'				=> 'Compartir',
			'ALBUM_SHR_YES'				=> 'SI',
			'ALBUM_SHR_NO'				=> 'No',
			'ALBUM_PUBLIC'				=> 'Público',
			'ALBUM_HIDDEN'				=> 'Oculto',
			'ALBUM_HIDDEN_EXPL'			=> "Solo las personas con el enlace directo pueden ver este álbum.",
			'ALBUM_DOWNLOADABLE'		=> 'Descargable',
			'ALBUM_DOWNLOADABLE_EXPL'	=> "Los visitantes de su Lychee pueden descargar este álbum.",
			'ALBUM_PASSWORD'			=> 'Contraseña',
			'ALBUM_PASSWORD_PROT'		=> 'Contraseña protegida',
			'ALBUM_PASSWORD_PROT_EXPL'	=> 'Álbum solo accesible con una contraseña válida',
			'ALBUM_PASSWORD_REQUIRED'	=> 'Este álbum está protegido por una contraseña. Ingrese la contraseña a continuación para ver las fotos de este álbum: ',
			'ALBUM_MERGE_1'				=> "¿Estás seguro de que quieres fusionar el álbum",
			'ALBUM_MERGE_2'				=> 'en el álbum',
			'ALBUMS_MERGE'				=> "¿Está seguro de que desea fusionar todos los álbumes seleccionados en el álbum",
			'MERGE_ALBUM'				=> 'Fusionar álbumes',
			'DONT_MERGE'				=> "No combinar",
			'ALBUM_MOVE_1'				=> "¿Estás seguro de que quieres mover el álbum",
			'ALBUM_MOVE_2'				=> 'detro del álbum',
			'ALBUMS_MOVE'				=> "¿Está seguro de que desea mover todos los álbumes seleccionados al álbum",
			'MOVE_ALBUMS'				=> "Mover álbumes",
			'NOT_MOVE_ALBUMS'			=> "No te muevas",
			'ROOT'						=> "Raíz",
			'ALBUM_REUSE'				=> "Reutilizar",
			'ALBUM_LICENSE'				=> 'Licencia',
			'ALBUM_SET_LICENSE'			=> 'Establecer licencia',
			'ALBUM_LICENSE_HELP'		=> '¿Necesitas ayuda para elegir?',
			'ALBUM_LICENSE_NONE'		=> 'Ninguna',
			'ALBUM_RESERVED'			=> 'Todos los derechos reservados',

			'PHOTO_ABOUT'				=> 'Acerca de',
			'PHOTO_BASICS'				=> 'Basico',
			'PHOTO_TITLE'				=> 'Título',
			'PHOTO_NEW_TITLE'			=> 'Ingrese un nuevo título para esta foto:',
			'PHOTO_SET_TITLE'			=> 'Establecer título',
			'PHOTO_UPLOADED'			=> 'Subido',
			'PHOTO_DESCRIPTION'			=> 'Descripción',
			'PHOTO_NEW_DESCRIPTION'		=> 'Ingrese una nueva descripción para esta foto:',
			'PHOTO_SET_DESCRIPTION'		=> 'Establecer descripción',
			'PHOTO_NEW_LICENSE'			=> 'Agregar una licencia',
			'PHOTO_SET_LICENSE'			=> 'Establecer licencia',
			'PHOTO_LICENSE'				=> 'Licencia',
			'PHOTO_REUSE'				=> 'Reutilizar',
			'PHOTO_LICENSE_NONE'		=> 'Ninguna',
			'PHOTO_RESERVED'			=> 'Todos los derechos reservados',
			'PHOTO_IMAGE'				=> 'Imagen',
			'PHOTO_SIZE'				=> 'Tamaño',
			'PHOTO_FORMAT'				=> 'Formato',
			'PHOTO_RESOLUTION'			=> 'Resolución',
			'PHOTO_TAGS'				=> 'Etiquetas',
			'PHOTO_NOTAGS'				=> 'Sin etiquetas',
			'PHOTO_NEW_TAGS'			=> 'Ingrese sus etiquetas para esta foto. Puede agregar varias etiquetas separándolas con una coma: ',
			'PHOTO_NEW_TAGS_1'			=> 'Ingrese sus etiquetas para todos',
			'PHOTO_NEW_TAGS_2'			=> 'fotos seleccionadas. Las etiquetas existentes se sobrescribirán. Puede agregar varias etiquetas separándolas con una coma: ',
			'PHOTO_SET_TAGS'			=> 'Establecer etiquetas',
			'PHOTO_CAMERA'				=> 'Cámara',
			'PHOTO_CAPTURED'			=> 'Capturado',
			'PHOTO_MAKE'				=> 'Hacer',
			'PHOTO_TYPE'				=> 'Tipo / Modelo',
			'PHOTO_SHUTTER'				=> 'Velocidad de obturación',
			'PHOTO_APERTURE'			=> 'Abertura',
			'PHOTO_FOCAL'				=> 'Longitud focal',
			'PHOTO_ISO'					=> 'ISO',
			'PHOTO_SHARING'				=> 'Compartir',
			'PHOTO_SHR_PLUBLIC'			=> 'Público',
			'PHOTO_SHR_ALB'				=> 'Sí (Álbum)',
			'PHOTO_SHR_PHT'				=> 'Sí (Foto)',
			'PHOTO_SHR_NO'				=> 'No',
			'PHOTO_DELETE'				=> 'Borrar Foto',
			'PHOTO_KEEP'				=> 'Mantener Foto',
			'PHOTO_DELETE_1'			=> "¿Estás seguro de que deseas eliminar la foto",
			'PHOTO_DELETE_2'			=> '? ¡Esta acción no se puede deshacer!',
			'PHOTO_DELETE_ALL_1'		=> "¿Está seguro de que desea eliminar todo",
			'PHOTO_DELETE_ALL_2'		=> 'foto seleccionada? ¡Esta acción no se puede deshacer!',
			'PHOTO_NEW_TITLE'			=> 'Ingrese un nuevo título para esta foto:',
			'PHOTOS_NEW_TITLE_1'		=> 'Ingrese un título para todos',
			'PHOTOS_NEW_TITLE_2'		=> 'fotos seleccionadas:',
			'PHOTO_MAKE_PRIVATE_ALBUM'	=> 'Esta foto se encuentra en un álbum público. Para que esta foto sea privada o pública, edite la visibilidad del álbum asociado. ',
			'PHOTO_SHOW_ALBUM'			=> 'Mostrar álbum',

			'LOADING'					=> 'Cargando',
			'ERROR'						=> 'Error',
			'ERROR_TEXT'				=> 'Vaya, parece que algo salió mal. ¡Vuelva a cargar el sitio e intente nuevamente! ',
			'ERROR_DB_1'				=> 'No se puede conectar a la base de datos del host porque se denegó el acceso. Vuelva a verificar su host, nombre de usuario y contraseña y asegúrese de que se permita el acceso desde su ubicación actual. ',
			'ERROR_DB_2'				=> 'No se puede crear la base de datos. Vuelva a verificar su host, nombre de usuario y contraseña y asegúrese de que el usuario especificado tenga los derechos para modificar y agregar contenido a la base de datos. ',
			'ERROR_CONFIG_FILE'			=> "No se puede guardar esta configuración. Permiso denegado en <b> 'datos/'</b>. Establezca los derechos de lectura, escritura y ejecución para otros en <b> 'datos/'</b>y<b>'uploads/'</b>. Consulte el archivo Léame para obtener más información ",
			'ERROR_UNKNOWN'				=> 'Algo inesperado sucedió. Intente nuevamente y verifique su instalación y servidor. Eche un vistazo al archivo Léame para obtener más información.',
			'ERROR_LOGIN'				=> 'No se puede guardar el inicio de sesión. ¡Inténtalo de nuevo con otro nombre de usuario y contraseña!',
			'SUCCESS'					=> 'OK',
			'RETRY'						=> 'Procesar de nuevo',

			'SETTINGS_SUCCESS_LOGIN'		=> 'Información de inicio de sesión actualizada',
			'SETTINGS_SUCCESS_SORT'			=> 'Orden de clasificación actualizado',
			'SETTINGS_SUCCESS_DROPBOX'		=> 'Dropbox Key updated',
			'SETTINGS_SUCCESS_LANG'			=> 'Idioma actualizado',
			'SETTINGS_SUCCESS_LAYOUT'		=> 'Diseño actualizado',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY'=> 'Configuración de superposición EXIF ​​actualizada',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH'=> 'Búsqueda pública actualizada',
			'SETTINGS_SUCCESS_LICENSE'		=> 'Licencia predeterminada actualizada',

			'DB_INFO_TITLE'				=> 'Ingrese los detalles de conexión de su base de datos a continuación:',
			'DB_INFO_HOST'				=> 'Host de base de datos (opcional)',
			'DB_INFO_USER'				=> 'Nombre de usuario de la base de datos',
			'DB_INFO_PASSWORD'			=> 'Contraseña de la base de datos',
			'DB_INFO_TEXT'				=> 'Lychee creará su propia base de datos. Si es necesario, puede ingresar el nombre de una base de datos existente en su lugar: ',
			'DB_NAME'					=> 'Nombre de la base de datos (opcional)',
			'DB_PREFIX'					=> 'Prefijo de tabla (opcional)',
			'DB_CONNECT'				=> 'Conectar',

			'LOGIN_TITLE'				=> 'Ingrese un nombre de usuario y contraseña para su instalación:',
			'LOGIN_USERNAME'			=> 'Nuevo nombre de usuario',
			'LOGIN_PASSWORD'			=> 'Nueva contraseña',
			'LOGIN_CREATE'				=> 'Crear inicio de sesión',

			'PASSWORD_TITLE'			=> 'Introduce tu contraseña actual:',
			'USERNAME_CURRENT'			=> 'Nombre de usuario actual',
			'PASSWORD_CURRENT'			=> 'Contraseña actual',
			'PASSWORD_TEXT'				=> 'Su nombre de usuario y contraseña se cambiarán a lo siguiente:',
			'PASSWORD_CHANGE'			=> 'Cambiar inicio de sesión',


			'EDIT_SHARING_TITLE'		=> 'Editar compartir',
			'EDIT_SHARING_TEXT'			=> 'Las propiedades para compartir de este álbum se cambiarán a lo siguiente:',
			'SHARE_ALBUM_TEXT'			=> 'Este álbum se compartirá con las siguientes propiedades:',

			'SORT_ALBUM_BY_1'			=> 'Ordenar álbumes por',
			'SORT_ALBUM_BY_2'			=> 'en un',
			'SORT_ALBUM_BY_3'			=> 'orden.',

			'SORT_ALBUM_SELECT_1'		=> 'Tiempo de creación',
			'SORT_ALBUM_SELECT_2'		=> 'Título',
			'SORT_ALBUM_SELECT_3'		=> 'Descripción',
			'SORT_ALBUM_SELECT_4'		=> 'Público',
			'SORT_ALBUM_SELECT_5'		=> 'Última fecha de toma',
			'SORT_ALBUM_SELECT_6'		=> 'La fecha de toma más antigua',

			'SORT_PHOTO_BY_1'			=> 'Ordenar fotos por',
			'SORT_PHOTO_BY_2'			=> 'en un',
			'SORT_PHOTO_BY_3'			=> 'orden.',

			'SORT_PHOTO_SELECT_1'		=> 'Tiempo de carga',
			'SORT_PHOTO_SELECT_2'		=> 'Take Date',
			'SORT_PHOTO_SELECT_3'		=> 'Título',
			'SORT_PHOTO_SELECT_4'		=> 'Descripción',
			'SORT_PHOTO_SELECT_5'		=> 'Público',
			'SORT_PHOTO_SELECT_6'		=> 'Estrella',
			'SORT_PHOTO_SELECT_7'		=> 'Formato de foto',

			'SORT_ASCENDING'			=> 'Ascendente',
			'SORT_DESCENDING'			=> 'Descendente',
			'SORT_CHANGE'				=> 'Cambiar clasificación',

			'DROPBOX_TITLE'				=> 'Establecer clave de Dropbox',
			'DROPBOX_TEXT'				=> "Para importar fotos desde su Dropbox, necesita una clave de aplicación válida desde <a href='https://www.dropbox.com/developers/apps/create'> su sitio web </a>. Generar usted mismo una clave personal e ingrésela a continuación: ",

			'LANG_TEXT'					=> 'Cambiar el idioma Lychee para:',
			'LANG_TITLE'				=> 'Cambiar idioma',

			'LAYOUT_TYPE'				=> 'Diseño de fotos:',
			'LAYOUT_SQUARES'			=> 'Miniaturas cuadradas',
			'LAYOUT_JUSTIFIED'			=> 'Con aspecto justificado',
			'LAYOUT_UNJUSTIFIED'		=> 'Con aspecto, injustificado',
			'SET_LAYOUT'				=> 'Cambia el diseño',
			'PUBLIC_SEARCH_TEXT'		=> 'Búsqueda pública permitida:',

			'IMAGE_OVERLAY_TEXT'		=> 'Mostrar superposición de datos por defecto:',

			'OVERLAY_TYPE'				=> 'Datos para usar en la superposición de imágenes:',
			'OVERLAY_EXIF'				=> "Datos EXIF ​​de fotos",
			'OVERLAY_DESCRIPTION'		=> 'Descripción de la foto',
			'OVERLAY_DATE'				=> 'Fecha de foto tomada',

			'VIEW_NO_RESULT'			=> 'No hay resultados',
			'VIEW_NO_PUBLIC_ALBUMS'		=> 'Sin álbumes públicos',
			'VIEW_NO_CONFIGURATION'		=> 'Sin configuración',
			'VIEW_PHOTO_NOT_FOUND'		=> 'Foto no encontrada',

			'NO_TAGS'					=> 'No etiquetas',

			'UPLOAD_MANAGE_NEW_PHOTOS'	=> "Ahora puede administrar sus nuevas fotos.",
			'UPLOAD_COMPLETE'			=> 'Carga completa',
			'UPLOAD_COMPLETE_FAILED'	=> "No se pudo cargar una o más fotos.",
			'UPLOAD_IMPORTING'			=> 'Importador',
			'UPLOAD_IMPORTING_URL'		=> 'Importando URL',
			'UPLOAD_UPLOADING'			=> 'Subiendo',
			'UPLOAD_FINISHED'			=> 'Terminado',
			'UPLOAD_PROCESSING'			=> 'Tratamiento',
			'UPLOAD_FAILED'				=> 'Ha fallado',
			'UPLOAD_FAILED_ERROR'		=> 'Subida fallida. ¡El servidor devolvió un error! ',
			'UPLOAD_FAILED_WARNING'		=> 'Subida fallida. ¡El servidor devolvió una advertencia! ',
			'UPLOAD_SKIPPED'			=> 'Saltado',
			'UPLOAD_ERROR_CONSOLE'		=> 'Por favor, eche un vistazo a la consola de su navegador para más detalles.',
			'UPLOAD_UNKNOWN'			=> 'El servidor devolvió una respuesta desconocida. Por favor, eche un vistazo a la consola de su navegador para más detalles.',
			'UPLOAD_ERROR_UNKNOWN'		=> 'Subida fallida. ¡El servidor devolvió un error desconocido! ',
			'UPLOAD_IN_PROGRESS'		=> '¡Lychee está subiendo actualmente!',
			'UPLOAD_IMPORT_WARN_ERR'	=> 'La importación ha finalizado, pero devolvió advertencias o errores. Por favor, eche un vistazo al registro (Configuración -> Mostrar registro) para obtener más detalles.',
			'UPLOAD_IMPORT_COMPLETE'	=> 'Importación completa',
			'UPLOAD_IMPORT_INSTR'		=> 'Ingrese el enlace directo a una foto para importarla:',
			'UPLOAD_IMPORT'				=> 'Importar',
			'UPLOAD_IMPORT_SERVER'		=> 'Importando desde el servidor',
			'UPLOAD_IMPORT_SERVER_FOLD'	=> 'Carpeta vacía o no hay archivos legibles para procesar. Por favor, eche un vistazo al registro (Configuración -> Mostrar registro) para obtener más detalles.',
			'UPLOAD_IMPORT_SERVER_INSTR'=> 'Esta acción importará todas las fotos, carpetas y subcarpetas que se encuentran en el siguiente directorio. Los <b> archivos originales se eliminarán </b> después de la importación cuando sea posible.',
			'UPLOAD_ABSOLUTE_PATH'		=> 'Ruta absoluta al directorio',
			'UPLOAD_IMPORT_SERVER_EMPT'	=> "No se pudo iniciar la importación porque la carpeta estaba vacía",

			'ABOUT_SUBTITLE'			=> 'Gestión de fotos autohospedada bien',
			'ABOUT_DESCRIPTION'			=> 'es una herramienta gratuita de gestión de fotos, que se ejecuta en su servidor o espacio web. La instalación es cuestión de segundos. Cargue, administre y comparta fotos como desde una aplicación nativa. Lychee viene con todo lo que necesitas y todas tus fotos se almacenan de forma segura.'

		);

		return $locale;
	}
}
