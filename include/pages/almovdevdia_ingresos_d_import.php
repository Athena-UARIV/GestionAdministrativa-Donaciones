<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'almovdevdia_id',
'doclasedoc_id_fk',
'geusuario',
'mdd_cantmovto',
'mdd_valmovto',
'mdd_valunit',
'mddalmacen',
'mddclasedoc',
'mddcodelem',
'mddcuenta',
'mddfechadoc',
'mddnrodoc',
'mddnomelem',
'devolutivo_id_FK',
'legalizado' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'almovdevdia_id' => array( 'import_field' ),
'doclasedoc_id_fk' => array( 'import_field1' ),
'geusuario' => array( 'import_field3' ),
'mdd_cantmovto' => array( 'import_field4' ),
'mdd_valmovto' => array( 'import_field6' ),
'mdd_valunit' => array( 'import_field7' ),
'mddalmacen' => array( 'import_field8' ),
'mddclasedoc' => array( 'import_field9' ),
'mddcodelem' => array( 'import_field10' ),
'mddcuenta' => array( 'import_field11' ),
'mddfechadoc' => array( 'import_field12' ),
'mddnrodoc' => array( 'import_field13' ),
'mddnomelem' => array( 'import_field15' ),
'devolutivo_id_FK' => array( 'import_field2' ),
'legalizado' => array( 'import_field5' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field3',
'import_field4',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field15',
'import_field2',
'import_field5' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field15' => 'grid',
'import_field2' => 'grid',
'import_field5' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field3',
'import_field4',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field15',
'import_field2',
'import_field5' ) ),
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
'import_field4',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field15',
'import_field2',
'import_field5' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'almovdevdia_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'doclasedoc_id_fk',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'geusuario',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'mdd_cantmovto',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'mdd_valmovto',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'mdd_valunit',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'mddalmacen',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'mddclasedoc',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'mddcodelem',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'mddcuenta',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'mddfechadoc',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'mddnrodoc',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'mddnomelem',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'devolutivo_id_FK',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'legalizado',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>