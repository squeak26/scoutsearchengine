<?php
return [
    'header' => [
        '1' => 'Configuración de la búsqueda',
        '2' => 'Motores de búsqueda utilizados',
        '3' => 'Filtro de búsqueda',
        '4' => 'Lista negra',
    ],
    'text' => [
        '1' => 'Aquí puede realizar los ajustes de búsqueda permanentes para su búsqueda de MetaGer en el foco :fokusName. Si no se guardan permanentemente, compruebe la configuración de su navegador para ver si borra las cookies guardadas al salir.',
        '2' => 'A continuación puede ver todos los motores de búsqueda disponibles para este enfoque. Pueden activarse y desactivarse haciendo clic en el nombre. Los motores de búsqueda activados se muestran en verde. Los motores de búsqueda desactivados se muestran en rojo o gris.',
        '3' => 'En este punto puede establecer filtros de búsqueda de forma permanente. Cuando se selecciona un filtro de búsqueda, sólo están disponibles los motores de búsqueda que admiten este filtro. A la inversa, sólo se muestran los filtros de búsqueda compatibles con la selección actual del motor de búsqueda.',
        '4' => 'Aquí puede introducir los dominios que deben ser excluidos de su búsqueda. Si desea incluir todos los subdominios, comience con "*.". Un dominio por línea.',
    ],
    'hint' => [
        'header' => 'Configuración de las cookies',
        'loadSettings' => 'Aquí encontrarás un enlace que puedes establecer como página de inicio o marcador para llevarte tu configuración actual. El enlace crea cookies con la configuración correspondiente cuando se llama.',
        'hint' => 'Estos ajustes afectan a todos los focos y subpáginas en general',
    ],
    'disabledByFilter' => 'Desactivado por el filtro de búsqueda:',
    'address' => 'Introducción de la dirección',
    'save' => 'Guardar',
    'reset' => 'Borrar todos los ajustes',
    'back' => 'Volver a la última página',
    'add' => 'Añadir',
    'clear' => 'Lista negra vacía',
    'copy' => 'Copiar',
    'darkmode' => 'Cambiar el modo oscuro',
    'system' => 'Sistema estándar',
    'dark' => 'Oscuro',
    'light' => 'Brillante',
    'newTab' => 'Abrir los resultados en una nueva pestaña',
    'off' => 'Desde',
    'on' => 'A',
    'more' => 'Más ajustes',
    'noSettings' => 'Actualmente no hay ninguna configuración establecida',
    'allSettings' => [
        'header' => 'Configuración establecida en :root',
        'text' => 'Aquí encontrará un resumen de todos los ajustes y cookies que ha establecido. Puede eliminar entradas individuales o eliminarlas todas. Tenga en cuenta que los ajustes asociados ya no se utilizarán.',
    ],
    'meaning' => 'Significado',
    'actions' => 'Acciones',
    'engineDisabled' => 'El buscador :engine no se consulta en el foco :focus.',
    'inFocus' => 'en el punto de mira',
    'key' => 'La clave para una búsqueda sin publicidad',
    'blentry' => 'Entrada en la lista negra',
    'removeCookie' => 'Eliminar esta cookie',
    'aria' => [
        'label' => [
            '1' => 'activa',
            '2' => 'desactivado',
        ],
    ],
    'metager-key' => [
        'header' => 'Búsqueda libre de publicidad',
        'charge' => 'Crédito: Ficha :token',
        'manage' => 'Llave de carga',
        'logout' => 'Quitar la llave',
        'no-key' => 'No ha configurado una clave para búsquedas sin publicidad.',
        'actions' => [
            'info' => '¿De qué se trata?',
            'login' => 'Configurar la llave existente',
            'create' => 'Crear nueva clave',
        ],
    ],
    'disabledBecausePaymentRequired' => 'Los siguientes motores de búsqueda requieren una <a href="#metager-key">clave MetaGer</a>',
    'no-engines' => 'Con la configuración de búsqueda actual, no se consulta ningún motor de búsqueda.',
    'cost' => 'Calculamos <strong>:cost tokens</strong> por consulta de búsqueda con la configuración actual.',
    'cost-free' => 'Sus búsquedas son <strong>gratuitas</strong> con la configuración actual.',
    'free' => 'gratis',
    'enable-engine' => 'Activar el motor de búsqueda',
    'disable-engine' => 'Seleccionar motor de búsqueda',
    'filtered-engine' => 'Buscador desactivado por filtro',
    'payment-engine' => 'El motor de búsqueda requiere la configuración de la clave MetaGer',
    'externalservice' => [
        'heading' => 'Utilizar un servicio de búsqueda externo',
        'description' => 'Puede configurar el uso de cualquiera de los siguientes motores de búsqueda externos en lugar de nuestra solución integrada. Redirigiremos sus búsquedas al proveedor configurado.',
    ],
    'suggestions' => [
        'label' => 'Sugerencias de búsqueda',
        'off' => "Discapacitados",
        'on' => "Activado",
    ],
    'self_advertisements' => [
        'label' => "Publicidad sutil de nuestro propio servicio",
    ],
];
