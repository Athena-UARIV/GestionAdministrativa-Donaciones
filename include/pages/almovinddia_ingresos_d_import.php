<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'midcuenta',
'midcodelem',
'midnroplaca',
'midnroserie',
'mid_valunit',
'devolutivo_id_FK',
'md_legalizado' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'midcuenta' => array( 'import_field9' ),
'midcodelem' => array( 'import_field10' ),
'midnroplaca' => array( 'import_field11' ),
'midnroserie' => array( 'import_field12' ),
'mid_valunit' => array( 'import_field14' ),
'devolutivo_id_FK' => array( 'import_field' ),
'md_legalizado' => array( 'import_field1' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field14',
'import_field',
'import_field1' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field14' => 'grid',
'import_field' => 'grid',
'import_field1' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field14',
'import_field',
'import_field1' ) ),
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
'items' => array( 'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field14',
'import_field',
'import_field1' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field9' => array( 'field' => 'midcuenta',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'midcodelem',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'midnroplaca',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'midnroserie',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'mid_valunit',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'devolutivo_id_FK',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'md_legalizado',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>