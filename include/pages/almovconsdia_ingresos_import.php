<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'almovconsdia_id',
'doclasedoc_id_fk',
'geusuario',
'mcd_cantmovto',
'mcd_valmovto',
'mcd_valunitant',
'mcdalmacen',
'mcdclasedoc',
'mcdcodelem',
'mcdcuenta',
'mcdfechadoc',
'mcdnrodoc',
'consumo_id_fk',
'mcdnomelem' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'almovconsdia_id' => array( 'import_field' ),
'doclasedoc_id_fk' => array( 'import_field1' ),
'geusuario' => array( 'import_field3' ),
'mcd_cantmovto' => array( 'import_field5' ),
'mcd_valmovto' => array( 'import_field8' ),
'mcd_valunitant' => array( 'import_field9' ),
'mcdalmacen' => array( 'import_field10' ),
'mcdclasedoc' => array( 'import_field11' ),
'mcdcodelem' => array( 'import_field12' ),
'mcdcuenta' => array( 'import_field13' ),
'mcdfechadoc' => array( 'import_field14' ),
'mcdnrodoc' => array( 'import_field15' ),
'consumo_id_fk' => array( 'import_field17' ),
'mcdnomelem' => array( 'import_field18' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field3',
'import_field5',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field17',
'import_field18' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field3' => 'grid',
'import_field5' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field3',
'import_field5',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field17',
'import_field18' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field3',
'import_field5',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field17',
'import_field18' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'almovconsdia_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'doclasedoc_id_fk',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'geusuario',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'mcd_cantmovto',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'mcd_valmovto',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'mcd_valunitant',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'mcdalmacen',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'mcdclasedoc',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'mcdcodelem',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'mcdcuenta',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'mcdfechadoc',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'mcdnrodoc',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'consumo_id_fk',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'mcdnomelem',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>