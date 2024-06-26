<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'details' => array( 'almovinddia_ingresos_d' => array( 'displayPreview' => 1,
'previewPageId' => 'print' ) ),
'master' => array( 'gedocumentos_ingresos' => array( 'preview' => true ) ),
'totals' => array( 'almovdevdia_id' => array( 'totalsType' => '' ),
'devolutivo_id_FK' => array( 'totalsType' => '' ),
'doclasedoc_id_fk' => array( 'totalsType' => '' ),
'gefechaactua' => array( 'totalsType' => '' ),
'geusuario' => array( 'totalsType' => '' ),
'legalizado' => array( 'totalsType' => '' ),
'mdd_cantmovto' => array( 'totalsType' => 'TOTAL' ),
'mdd_cantmovto_verifica' => array( 'totalsType' => '' ),
'mdd_tax' => array( 'totalsType' => '' ),
'mdd_valmovto' => array( 'totalsType' => 'TOTAL' ),
'mdd_valunit' => array( 'totalsType' => 'TOTAL' ),
'mddalmacen' => array( 'totalsType' => '' ),
'mddclasedoc' => array( 'totalsType' => '' ),
'mddcodelem' => array( 'totalsType' => '' ),
'mddcuenta' => array( 'totalsType' => '' ),
'mddfechadoc' => array( 'totalsType' => '' ),
'mddnomelem' => array( 'totalsType' => '' ),
'mddnrodoc' => array( 'totalsType' => '' ),
'mddtipoestruc' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'mdd_cantmovto',
'mdd_valmovto',
'mdd_valunit',
'mddcodelem',
'mddcuenta',
'mddfechadoc',
'mddnomelem',
'legalizado' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'mdd_cantmovto' => array( 'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field17' ),
'mdd_valmovto' => array( 'simple_grid_field6',
'simple_grid_field18',
'simple_grid_field19' ),
'mdd_valunit' => array( 'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9' ),
'mddcodelem' => array( 'simple_grid_field10',
'simple_grid_field13' ),
'mddcuenta' => array( 'simple_grid_field11',
'simple_grid_field' ),
'mddfechadoc' => array( 'simple_grid_field12',
'simple_grid_field14' ),
'mddnomelem' => array( 'simple_grid_field15',
'simple_grid_field16' ),
'legalizado' => array( 'grid_field',
'grid_field_label' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader',
'master_info',
'image',
'print_pdf',
'custom_button' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field11',
'simple_grid_field13',
'simple_grid_field10',
'simple_grid_field16',
'simple_grid_field15',
'simple_grid_field14',
'simple_grid_field12',
'simple_grid_field8',
'simple_grid_field7',
'simple_grid_field9',
'simple_grid_field5',
'simple_grid_field4',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field6',
'simple_grid_field19',
'details_preview',
'grid_field_label',
'grid_field' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages',
'inline_cancel',
'inlineadd_link' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'grid_inline_cancel' => 'above-grid',
'inline_add' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'master_info' => 'top',
'image' => 'top',
'print_pdf' => 'top',
'custom_button' => 'top',
'simple_grid_field' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field19' => 'grid',
'details_preview' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'footcell_field4' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'footcell_field5' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'footcell_field6' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field4',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field15',
'grid_field' ),
'master_info' => array( 'master_info' ),
'details_preview' => array( 'details_preview' ),
'image' => array( 'image' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field13',
'simple_grid_field16',
'simple_grid_field14',
'simple_grid_field8',
'simple_grid_field5',
'simple_grid_field18',
'grid_field_label' ),
'grid_field_totals' => array( 'simple_grid_field9',
'simple_grid_field17',
'simple_grid_field19' ),
'print_pdf' => array( 'print_pdf' ),
'custom_button' => array( 'custom_button' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'mddcuenta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'mddcodelem_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'mddnomelem_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'mddfechadoc_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'mdd_valunit_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'mdd_cantmovto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'mdd_valmovto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'legalizado_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'mddcuenta_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'mddcodelem_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'mddnomelem_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'mddfechadoc_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'mdd_valunit_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'mdd_cantmovto_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'mdd_valmovto_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'legalizado_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array( 'mdd_valunit_fieldfootercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array( 'mdd_cantmovto_fieldfootercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array( 'mdd_valmovto_fieldfootercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 8,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => true,
'customButtons' => array( 'BtnPrint' ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'BtnPrint' ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'master_info' ) ),
'c' => array( 'model' => 'c2',
'items' => array( 'image' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf',
'custom_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 8 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'mddcuenta',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'mddcuenta',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'mddcodelem',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'mddcodelem',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'mddnomelem',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'mddnomelem',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'mddfechadoc',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'mddfechadoc',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'mdd_valunit',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'mdd_valunit',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'mdd_valunit',
'columnName' => 'field' ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'mdd_cantmovto',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'mdd_cantmovto',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'mdd_cantmovto',
'columnName' => 'field' ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'mdd_valmovto',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'mdd_valmovto',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'mdd_valmovto',
'columnName' => 'field' ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label' ),
'field' => 'legalizado',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'legalizado',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field4' => array( 'field' => 'mdd_cantmovto',
'type' => 'grid_field' ),
'simple_grid_field6' => array( 'field' => 'mdd_valmovto',
'type' => 'grid_field' ),
'simple_grid_field7' => array( 'field' => 'mdd_valunit',
'type' => 'grid_field' ),
'simple_grid_field10' => array( 'field' => 'mddcodelem',
'type' => 'grid_field' ),
'simple_grid_field11' => array( 'field' => 'mddcuenta',
'type' => 'grid_field',
'font-family' => 'Roboto',
'bold' => true ),
'simple_grid_field12' => array( 'field' => 'mddfechadoc',
'type' => 'grid_field' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'gedocumentos_ingresos' => 'true' ) ),
'simple_grid_field15' => array( 'field' => 'mddnomelem',
'type' => 'grid_field' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'almovinddia_ingresos_d',
'items' => array(  ),
'popup' => false,
'pageId' => 'print' ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'logo_960x100.png',
'source' => 2 ) ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'mddcuenta' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'mddcodelem' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'mddnomelem' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'mddfechadoc' ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'mdd_valunit' ),
'simple_grid_field9' => array( 'type' => 'grid_field_totals',
'field' => 'mdd_valunit',
'totals' => 'TOTAL',
'font-family' => 'Roboto',
'bold' => true,
'label' => array( 'type' => 0,
'text' => 'Total valor unitario:' ) ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'mdd_cantmovto' ),
'simple_grid_field17' => array( 'type' => 'grid_field_totals',
'field' => 'mdd_cantmovto',
'totals' => 'TOTAL',
'font-family' => 'Roboto',
'bold' => true,
'label' => array( 'type' => 0,
'text' => 'Total elementos : ' ) ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'mdd_valmovto' ),
'simple_grid_field19' => array( 'type' => 'grid_field_totals',
'field' => 'mdd_valmovto',
'totals' => 'TOTAL',
'font-family' => 'Roboto',
'bold' => true,
'label' => array( 'type' => 0,
'text' => 'Total general: ' ) ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ),
'buttonSize' => 'large',
'buttonStyle' => 'success',
'icon' => array( 'fa' => 'file-pdf-o' ) ),
'custom_button' => array( 'eventId' => 'BtnPrint',
'label' => array( 'type' => 0,
'text' => 'Enviar a impresora' ),
'type' => 'custom_button',
'icon' => array( 'fa' => 'print' ),
'buttonSize' => 'large',
'buttonStyle' => 'warning' ),
'grid_field' => array( 'field' => 'legalizado',
'type' => 'grid_field' ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'legalizado' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>