<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'almovconsdiae_id',
'almovconsdia_id_fk',
'almovconsdiae_cantidad',
'sys_user',
'sys_document_func',
'sys_doclasedoc_id_fk',
'mcdalmacen',
'mcdcuenta',
'mcdcodelem',
'mcdnomelem',
'consumo_id_fk',
'ctrl_saldo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'almovconsdiae_id' => array( 'import_field' ),
'almovconsdia_id_fk' => array( 'import_field1' ),
'almovconsdiae_cantidad' => array( 'import_field2' ),
'sys_user' => array( 'import_field3' ),
'ctrl_saldo' => array( 'import_field4' ),
'sys_document_func' => array( 'import_field7' ),
'sys_doclasedoc_id_fk' => array( 'import_field8' ),
'mcdalmacen' => array( 'import_field9' ),
'mcdcuenta' => array( 'import_field10' ),
'mcdcodelem' => array( 'import_field11' ),
'mcdnomelem' => array( 'import_field12' ),
'consumo_id_fk' => array( 'import_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field4' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field4' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13' ) ),
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
'import_field2',
'import_field3',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field4' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'almovconsdiae_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'almovconsdia_id_fk',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'almovconsdiae_cantidad',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'sys_user',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'ctrl_saldo',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'sys_document_func',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'sys_doclasedoc_id_fk',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'mcdalmacen',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'mcdcuenta',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'mcdcodelem',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'mcdnomelem',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'consumo_id_fk',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>