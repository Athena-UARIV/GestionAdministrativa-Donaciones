<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'addToBottom' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'almovconsdia_id' => array( 'totalsType' => '' ),
'cantidad_asignada' => array( 'totalsType' => '' ),
'consumo_id_fk' => array( 'totalsType' => '' ),
'estado' => array( 'totalsType' => '' ),
'mcd_cantmovto' => array( 'totalsType' => '' ),
'mcd_valunitant' => array( 'totalsType' => '' ),
'mcdalmacen' => array( 'totalsType' => '' ),
'mcdcodelem' => array( 'totalsType' => '' ),
'mcdcuenta' => array( 'totalsType' => '' ),
'mcdfechadoc' => array( 'totalsType' => '' ),
'mcdnomelem' => array( 'totalsType' => '' ),
'mcdnrodoc' => array( 'totalsType' => '' ),
'saldo_disponible' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'mcdcuenta',
'mcdcodelem',
'mcdnomelem',
'cantidad_asignada',
'mcd_cantmovto',
'mcdalmacen',
'mcdnrodoc',
'saldo_disponible',
'mcd_valunitant' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'mcd_valunitant',
'saldo_disponible',
'mcdnrodoc',
'mcdnomelem',
'mcdfechadoc',
'mcdcuenta',
'mcdcodelem',
'mcdalmacen',
'mcd_cantmovto',
'estado',
'consumo_id_fk',
'cantidad_asignada',
'almovconsdia_id' ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'mcd_valunitant' ),
'inlineEditFields' => array( 'mcd_valunitant' ),
'fieldItems' => array( 'mcdcuenta' => array( 'simple_grid_field7',
'simple_grid_field8' ),
'mcdcodelem' => array( 'simple_grid_field6',
'simple_grid_field12' ),
'mcdnomelem' => array( 'simple_grid_field9',
'simple_grid_field13' ),
'cantidad_asignada' => array( 'simple_grid_field1',
'simple_grid_field2' ),
'mcd_cantmovto' => array( 'simple_grid_field4',
'simple_grid_field14' ),
'mcdalmacen' => array( 'simple_grid_field5',
'simple_grid_field15' ),
'mcdnrodoc' => array( 'simple_grid_field10',
'simple_grid_field16' ),
'saldo_disponible' => array( 'simple_grid_field11',
'simple_grid_field17' ),
'mcd_valunitant' => array( 'simple_grid_field',
'simple_grid_field3' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'details_found',
'page_size' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'top' => array(  ),
'grid' => array( 'simple_grid_field8',
'simple_grid_field7',
'simple_grid_field12',
'simple_grid_field6',
'simple_grid_field13',
'simple_grid_field9',
'simple_grid_field2',
'simple_grid_field1',
'simple_grid_field14',
'simple_grid_field4',
'simple_grid_field15',
'simple_grid_field5',
'simple_grid_field16',
'simple_grid_field10',
'simple_grid_field17',
'simple_grid_field11',
'simple_grid_field3',
'simple_grid_field',
'grid_checkbox_head',
'grid_checkbox' ) ),
'formXtTags' => array( 'above-grid' => array( 'details_found',
'recsPerPage' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'details_found' => 'above-grid',
'page_size' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'simple_grid_field8' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid' ),
'itemLocations' => array( 'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'details_found' => array( 'details_found' ),
'list_options' => array( 'list_options' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'-' => array( '-',
'-1',
'-2' ),
'search_panel' => array( 'search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field7',
'simple_grid_field6',
'simple_grid_field9',
'simple_grid_field1',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field' ),
'grid_field_label' => array( 'simple_grid_field8',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field2',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field3' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_checkbox' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'mcdcuenta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'mcdcodelem_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'mcdnomelem_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'cantidad_asignada_fieldheadercolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'mcd_cantmovto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'mcdalmacen_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'mcdnrodoc_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'saldo_disponible_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'mcd_valunitant_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'mcdcuenta_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'mcdcodelem_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'mcdnomelem_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'cantidad_asignada_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'mcd_cantmovto_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'mcdalmacen_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'mcdnrodoc_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'saldo_disponible_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'mcd_valunitant_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 10,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'mcdcuenta',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'mcdcuenta',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'mcdcodelem',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'mcdcodelem',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'mcdnomelem',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'mcdnomelem',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'cantidad_asignada',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'cantidad_asignada',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'mcd_cantmovto',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'mcd_cantmovto',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'mcdalmacen',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'mcdalmacen',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'mcdnrodoc',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'mcdnrodoc',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'saldo_disponible',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'saldo_disponible',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'mcd_valunitant',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'mcd_valunitant',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'details_found' => array( 'type' => 'details_found' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'advsearch_link' ) ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'search_panel_field' => array( 'field' => 'mcd_valunitant',
'type' => 'search_panel_field',
'required' => false ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'search_panel_field1' => array( 'field' => 'almovconsdia_id',
'type' => 'search_panel_field' ),
'search_panel_field2' => array( 'field' => 'cantidad_asignada',
'type' => 'search_panel_field' ),
'search_panel_field3' => array( 'field' => 'consumo_id_fk',
'type' => 'search_panel_field' ),
'search_panel_field4' => array( 'field' => 'estado',
'type' => 'search_panel_field' ),
'search_panel_field5' => array( 'field' => 'mcd_cantmovto',
'type' => 'search_panel_field' ),
'search_panel_field6' => array( 'field' => 'mcdalmacen',
'type' => 'search_panel_field' ),
'search_panel_field7' => array( 'field' => 'mcdcodelem',
'type' => 'search_panel_field' ),
'search_panel_field8' => array( 'field' => 'mcdcuenta',
'type' => 'search_panel_field' ),
'search_panel_field9' => array( 'field' => 'mcdfechadoc',
'type' => 'search_panel_field' ),
'search_panel_field10' => array( 'field' => 'mcdnomelem',
'type' => 'search_panel_field' ),
'search_panel_field11' => array( 'field' => 'mcdnrodoc',
'type' => 'search_panel_field' ),
'search_panel_field12' => array( 'field' => 'saldo_disponible',
'type' => 'search_panel_field' ),
'simple_grid_field7' => array( 'field' => 'mcdcuenta',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'mcdcuenta' ),
'simple_grid_field6' => array( 'field' => 'mcdcodelem',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'mcdcodelem' ),
'simple_grid_field9' => array( 'field' => 'mcdnomelem',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'mcdnomelem' ),
'simple_grid_field1' => array( 'field' => 'cantidad_asignada',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field2' => array( 'type' => 'grid_field_label',
'field' => 'cantidad_asignada' ),
'simple_grid_field4' => array( 'field' => 'mcd_cantmovto',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'mcd_cantmovto' ),
'simple_grid_field5' => array( 'field' => 'mcdalmacen',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'mcdalmacen' ),
'simple_grid_field10' => array( 'field' => 'mcdnrodoc',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'mcdnrodoc' ),
'simple_grid_field11' => array( 'field' => 'saldo_disponible',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'saldo_disponible' ),
'simple_grid_field' => array( 'field' => 'mcd_valunitant',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'mcd_valunitant' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>