<?php
			$optionsArray = array( 'totals' => array( 'almovdevdia_id' => array( 'totalsType' => '' ),
'devolutivo_id_FK' => array( 'totalsType' => '' ),
'doclasedoc_id_fk' => array( 'totalsType' => '' ),
'gefechaactua' => array( 'totalsType' => '' ),
'geusuario' => array( 'totalsType' => '' ),
'legalizado' => array( 'totalsType' => '' ),
'mdd_cantmovto' => array( 'totalsType' => '' ),
'mdd_cantmovto_verifica' => array( 'totalsType' => '' ),
'mdd_tax' => array( 'totalsType' => '' ),
'mdd_valmovto' => array( 'totalsType' => '' ),
'mdd_valunit' => array( 'totalsType' => '' ),
'mddalmacen' => array( 'totalsType' => '' ),
'mddclasedoc' => array( 'totalsType' => '' ),
'mddcodelem' => array( 'totalsType' => '' ),
'mddcuenta' => array( 'totalsType' => '' ),
'mddfechadoc' => array( 'totalsType' => '' ),
'mddnomelem' => array( 'totalsType' => '' ),
'mddnrodoc' => array( 'totalsType' => '' ),
'mddtipoestruc' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'geusuario',
'mdd_cantmovto',
'mdd_valmovto',
'mdd_valunit',
'mddalmacen',
'mddcodelem',
'mddcuenta',
'mddfechadoc',
'mddnomelem',
'devolutivo_id_FK',
'legalizado' ),
'exportFields' => array( 'geusuario',
'mdd_cantmovto',
'mdd_valmovto',
'mdd_valunit',
'mddalmacen',
'mddcodelem',
'mddcuenta',
'mddfechadoc',
'mddnomelem',
'devolutivo_id_FK',
'legalizado' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'geusuario' => array( 'export_field3' ),
'mdd_cantmovto' => array( 'export_field4' ),
'mdd_valmovto' => array( 'export_field6' ),
'mdd_valunit' => array( 'export_field7' ),
'mddalmacen' => array( 'export_field8' ),
'mddcodelem' => array( 'export_field10' ),
'mddcuenta' => array( 'export_field11' ),
'mddfechadoc' => array( 'export_field12' ),
'mddnomelem' => array( 'export_field15' ),
'devolutivo_id_FK' => array( 'export_field2' ),
'legalizado' => array( 'export_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field3',
'export_field4',
'export_field6',
'export_field7',
'export_field8',
'export_field10',
'export_field11',
'export_field12',
'export_field15',
'export_field2',
'export_field' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field15' => 'grid',
'export_field2' => 'grid',
'export_field' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field3',
'export_field4',
'export_field6',
'export_field7',
'export_field8',
'export_field10',
'export_field11',
'export_field12',
'export_field15',
'export_field2',
'export_field' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field3',
'export_field4',
'export_field6',
'export_field7',
'export_field8',
'export_field10',
'export_field11',
'export_field12',
'export_field15',
'export_field2',
'export_field' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field3' => array( 'field' => 'geusuario',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'mdd_cantmovto',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'mdd_valmovto',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'mdd_valunit',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'mddalmacen',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'mddcodelem',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'mddcuenta',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'mddfechadoc',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'mddnomelem',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'devolutivo_id_FK',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'legalizado',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>