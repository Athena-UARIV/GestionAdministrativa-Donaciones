<?php
$tdataalmovconsdia_egresos_t = array();
$tdataalmovconsdia_egresos_t[".searchableFields"] = array();
$tdataalmovconsdia_egresos_t[".ShortName"] = "almovconsdia_egresos_t";
$tdataalmovconsdia_egresos_t[".OwnerID"] = "";
$tdataalmovconsdia_egresos_t[".OriginalTable"] = "almovconsdiae";


$tdataalmovconsdia_egresos_t[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalmovconsdia_egresos_t[".originalPagesByType"] = $tdataalmovconsdia_egresos_t[".pagesByType"];
$tdataalmovconsdia_egresos_t[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalmovconsdia_egresos_t[".originalPages"] = $tdataalmovconsdia_egresos_t[".pages"];
$tdataalmovconsdia_egresos_t[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalmovconsdia_egresos_t[".originalDefaultPages"] = $tdataalmovconsdia_egresos_t[".defaultPages"];

//	field labels
$fieldLabelsalmovconsdia_egresos_t = array();
$fieldToolTipsalmovconsdia_egresos_t = array();
$pageTitlesalmovconsdia_egresos_t = array();
$placeHoldersalmovconsdia_egresos_t = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalmovconsdia_egresos_t["Spanish"] = array();
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"] = array();
	$placeHoldersalmovconsdia_egresos_t["Spanish"] = array();
	$pageTitlesalmovconsdia_egresos_t["Spanish"] = array();
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["almovconsdiae_id"] = "No. nterno";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["almovconsdiae_id"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["almovconsdiae_id"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["almovconsdia_id_fk"] = "Buscar elemento";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["almovconsdia_id_fk"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["almovconsdia_id_fk"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["almovconsdiae_cantidad"] = "Cantidad asignada";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["almovconsdiae_cantidad"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["almovconsdiae_cantidad"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["sys_user"] = "Gestionado por:";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["sys_user"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["sys_user"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["sys_fecha"] = "Sys Fecha";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["sys_fecha"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["sys_fecha"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["sys_time"] = "Sys Time";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["sys_time"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["sys_time"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["sys_status"] = "Sys Status";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["sys_status"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["sys_status"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["sys_document_func"] = "Cédula ";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["sys_document_func"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["sys_document_func"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["sys_doclasedoc_id_fk"] = "Documento";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["sys_doclasedoc_id_fk"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["sys_doclasedoc_id_fk"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["mcdalmacen"] = "Almacén";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["mcdalmacen"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["mcdalmacen"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["mcdcuenta"] = "Cuenta";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["mcdcuenta"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["mcdcuenta"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["mcdcodelem"] = "Código elemento";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["mcdcodelem"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["mcdcodelem"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["mcdnomelem"] = "Nombre del elemento";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["mcdnomelem"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["mcdnomelem"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["consumo_id_fk"] = "";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["consumo_id_fk"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["consumo_id_fk"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["ctrl_saldo"] = "Saldo disponible";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["ctrl_saldo"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["ctrl_saldo"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["mcd_valunitant"] = "Valor unitario";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["mcd_valunitant"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["mcd_valunitant"] = "";
	$fieldLabelsalmovconsdia_egresos_t["Spanish"]["mcd_valmovto"] = "Valor Total";
	$fieldToolTipsalmovconsdia_egresos_t["Spanish"]["mcd_valmovto"] = "";
	$placeHoldersalmovconsdia_egresos_t["Spanish"]["mcd_valmovto"] = "";
	if (count($fieldToolTipsalmovconsdia_egresos_t["Spanish"]))
		$tdataalmovconsdia_egresos_t[".isUseToolTips"] = true;
}


	$tdataalmovconsdia_egresos_t[".NCSearch"] = true;



$tdataalmovconsdia_egresos_t[".shortTableName"] = "almovconsdia_egresos_t";
$tdataalmovconsdia_egresos_t[".nSecOptions"] = 0;

$tdataalmovconsdia_egresos_t[".mainTableOwnerID"] = "";
$tdataalmovconsdia_egresos_t[".entityType"] = 1;
$tdataalmovconsdia_egresos_t[".connId"] = "dbrf_at_127_0_0_1";


$tdataalmovconsdia_egresos_t[".strOriginalTableName"] = "almovconsdiae";

	



$tdataalmovconsdia_egresos_t[".showAddInPopup"] = false;

$tdataalmovconsdia_egresos_t[".showEditInPopup"] = false;

$tdataalmovconsdia_egresos_t[".showViewInPopup"] = false;

$tdataalmovconsdia_egresos_t[".listAjax"] = false;
//	temporary
//$tdataalmovconsdia_egresos_t[".listAjax"] = false;

	$tdataalmovconsdia_egresos_t[".audit"] = false;

	$tdataalmovconsdia_egresos_t[".locking"] = false;


$pages = $tdataalmovconsdia_egresos_t[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalmovconsdia_egresos_t[".edit"] = true;
	$tdataalmovconsdia_egresos_t[".afterEditAction"] = 0;
	$tdataalmovconsdia_egresos_t[".closePopupAfterEdit"] = 1;
	$tdataalmovconsdia_egresos_t[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataalmovconsdia_egresos_t[".add"] = true;
$tdataalmovconsdia_egresos_t[".afterAddAction"] = 0;
$tdataalmovconsdia_egresos_t[".closePopupAfterAdd"] = 1;
$tdataalmovconsdia_egresos_t[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataalmovconsdia_egresos_t[".list"] = true;
}



$tdataalmovconsdia_egresos_t[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalmovconsdia_egresos_t[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalmovconsdia_egresos_t[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalmovconsdia_egresos_t[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalmovconsdia_egresos_t[".printFriendly"] = true;
}



$tdataalmovconsdia_egresos_t[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalmovconsdia_egresos_t[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalmovconsdia_egresos_t[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalmovconsdia_egresos_t[".isUseAjaxSuggest"] = true;



																														

$tdataalmovconsdia_egresos_t[".ajaxCodeSnippetAdded"] = false;

$tdataalmovconsdia_egresos_t[".buttonsAdded"] = false;

$tdataalmovconsdia_egresos_t[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalmovconsdia_egresos_t[".isUseTimeForSearch"] = false;


$tdataalmovconsdia_egresos_t[".badgeColor"] = "00c2c5";


$tdataalmovconsdia_egresos_t[".allSearchFields"] = array();
$tdataalmovconsdia_egresos_t[".filterFields"] = array();
$tdataalmovconsdia_egresos_t[".requiredSearchFields"] = array();

$tdataalmovconsdia_egresos_t[".googleLikeFields"] = array();
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "almovconsdia_id_fk";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "almovconsdiae_cantidad";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "almovconsdiae_id";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "consumo_id_fk";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "ctrl_saldo";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "mcd_valmovto";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "mcd_valunitant";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "mcdalmacen";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "mcdcodelem";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "mcdcuenta";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "mcdnomelem";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "sys_doclasedoc_id_fk";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "sys_document_func";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "sys_fecha";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "sys_status";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "sys_time";
$tdataalmovconsdia_egresos_t[".googleLikeFields"][] = "sys_user";



$tdataalmovconsdia_egresos_t[".tableType"] = "list";

$tdataalmovconsdia_egresos_t[".printerPageOrientation"] = 0;
$tdataalmovconsdia_egresos_t[".nPrinterPageScale"] = 100;

$tdataalmovconsdia_egresos_t[".nPrinterSplitRecords"] = 40;

$tdataalmovconsdia_egresos_t[".geocodingEnabled"] = false;




$tdataalmovconsdia_egresos_t[".isDisplayLoading"] = true;






$tdataalmovconsdia_egresos_t[".pageSize"] = 20;

$tdataalmovconsdia_egresos_t[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalmovconsdia_egresos_t[".strOrderBy"] = $tstrOrderBy;

$tdataalmovconsdia_egresos_t[".orderindexes"] = array();


$tdataalmovconsdia_egresos_t[".sqlHead"] = "SELECT almovconsdia_id_fk,  	almovconsdiae_cantidad,  	almovconsdiae_id,  	consumo_id_fk,  	ctrl_saldo,  	mcd_valmovto,  	mcd_valunitant,  	mcdalmacen,  	mcdcodelem,  	mcdcuenta,  	mcdnomelem,  	sys_doclasedoc_id_fk,  	sys_document_func,  	sys_fecha,  	sys_status,  	sys_time,  	sys_user";
$tdataalmovconsdia_egresos_t[".sqlFrom"] = "FROM almovconsdiae";
$tdataalmovconsdia_egresos_t[".sqlWhereExpr"] = "";
$tdataalmovconsdia_egresos_t[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalmovconsdia_egresos_t[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalmovconsdia_egresos_t[".arrGroupsPerPage"] = $arrGPP;

$tdataalmovconsdia_egresos_t[".highlightSearchResults"] = true;

$tableKeysalmovconsdia_egresos_t = array();
$tableKeysalmovconsdia_egresos_t[] = "almovconsdiae_id";
$tdataalmovconsdia_egresos_t[".Keys"] = $tableKeysalmovconsdia_egresos_t;


$tdataalmovconsdia_egresos_t[".hideMobileList"] = array();




//	almovconsdia_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "almovconsdia_id_fk";
	$fdata["GoodName"] = "almovconsdia_id_fk";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","almovconsdia_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "almovconsdia_id_fk";

		$fdata["sourceSingle"] = "almovconsdia_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovconsdia_id_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_ctrl_saldo_consumo_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"consumo_id_fk", 'lookupF'=>"consumo_id_fk");
	$edata["autoCompleteFields"][] = array('masterF'=>"ctrl_saldo", 'lookupF'=>"saldo_disponible");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcd_valunitant", 'lookupF'=>"mcd_valunitant");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdalmacen", 'lookupF'=>"mcdalmacen");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdcodelem", 'lookupF'=>"mcdcodelem");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdcuenta", 'lookupF'=>"mcdcuenta");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdnomelem", 'lookupF'=>"mcdnomelem");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "almovconsdia_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "almovconsdia_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["almovconsdia_id_fk"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "almovconsdia_id_fk";
//	almovconsdiae_cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "almovconsdiae_cantidad";
	$fdata["GoodName"] = "almovconsdiae_cantidad";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","almovconsdiae_cantidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "almovconsdiae_cantidad";

		$fdata["sourceSingle"] = "almovconsdiae_cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovconsdiae_cantidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["almovconsdiae_cantidad"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "almovconsdiae_cantidad";
//	almovconsdiae_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "almovconsdiae_id";
	$fdata["GoodName"] = "almovconsdiae_id";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","almovconsdiae_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "almovconsdiae_id";

		$fdata["sourceSingle"] = "almovconsdiae_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovconsdiae_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["almovconsdiae_id"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "almovconsdiae_id";
//	consumo_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "consumo_id_fk";
	$fdata["GoodName"] = "consumo_id_fk";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","consumo_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "consumo_id_fk";

		$fdata["sourceSingle"] = "consumo_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consumo_id_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["consumo_id_fk"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "consumo_id_fk";
//	ctrl_saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ctrl_saldo";
	$fdata["GoodName"] = "ctrl_saldo";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","ctrl_saldo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ctrl_saldo";

		$fdata["sourceSingle"] = "ctrl_saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl_saldo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["ctrl_saldo"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "ctrl_saldo";
//	mcd_valmovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mcd_valmovto";
	$fdata["GoodName"] = "mcd_valmovto";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","mcd_valmovto");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mcd_valmovto";

		$fdata["sourceSingle"] = "mcd_valmovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_valmovto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["mcd_valmovto"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "mcd_valmovto";
//	mcd_valunitant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mcd_valunitant";
	$fdata["GoodName"] = "mcd_valunitant";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","mcd_valunitant");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mcd_valunitant";

		$fdata["sourceSingle"] = "mcd_valunitant";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_valunitant";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["mcd_valunitant"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "mcd_valunitant";
//	mcdalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mcdalmacen";
	$fdata["GoodName"] = "mcdalmacen";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","mcdalmacen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcdalmacen";

		$fdata["sourceSingle"] = "mcdalmacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdalmacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "inv_almacen";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ascodalmacen";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ascodalmacen_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["mcdalmacen"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "mcdalmacen";
//	mcdcodelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mcdcodelem";
	$fdata["GoodName"] = "mcdcodelem";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","mcdcodelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcdcodelem";

		$fdata["sourceSingle"] = "mcdcodelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdcodelem";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["mcdcodelem"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "mcdcodelem";
//	mcdcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mcdcuenta";
	$fdata["GoodName"] = "mcdcuenta";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","mcdcuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mcdcuenta";

		$fdata["sourceSingle"] = "mcdcuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdcuenta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["mcdcuenta"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "mcdcuenta";
//	mcdnomelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mcdnomelem";
	$fdata["GoodName"] = "mcdnomelem";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","mcdnomelem");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mcdnomelem";

		$fdata["sourceSingle"] = "mcdnomelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdnomelem";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 70;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["mcdnomelem"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "mcdnomelem";
//	sys_doclasedoc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sys_doclasedoc_id_fk";
	$fdata["GoodName"] = "sys_doclasedoc_id_fk";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","sys_doclasedoc_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sys_doclasedoc_id_fk";

		$fdata["sourceSingle"] = "sys_doclasedoc_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_doclasedoc_id_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["sys_doclasedoc_id_fk"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "sys_doclasedoc_id_fk";
//	sys_document_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sys_document_func";
	$fdata["GoodName"] = "sys_document_func";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","sys_document_func");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_document_func";

		$fdata["sourceSingle"] = "sys_document_func";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_document_func";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["sys_document_func"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "sys_document_func";
//	sys_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_fecha";
	$fdata["GoodName"] = "sys_fecha";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","sys_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_fecha";

		$fdata["sourceSingle"] = "sys_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["sys_fecha"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "sys_fecha";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","sys_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_status";

		$fdata["sourceSingle"] = "sys_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["sys_status"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "sys_status";
//	sys_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sys_time";
	$fdata["GoodName"] = "sys_time";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","sys_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "sys_time";

		$fdata["sourceSingle"] = "sys_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["sys_time"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "sys_time";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos_t","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalmovconsdia_egresos_t["sys_user"] = $fdata;
		$tdataalmovconsdia_egresos_t[".searchableFields"][] = "sys_user";


$tables_data["almovconsdia_egresos_t"]=&$tdataalmovconsdia_egresos_t;
$field_labels["almovconsdia_egresos_t"] = &$fieldLabelsalmovconsdia_egresos_t;
$fieldToolTips["almovconsdia_egresos_t"] = &$fieldToolTipsalmovconsdia_egresos_t;
$placeHolders["almovconsdia_egresos_t"] = &$placeHoldersalmovconsdia_egresos_t;
$page_titles["almovconsdia_egresos_t"] = &$pageTitlesalmovconsdia_egresos_t;


changeTextControlsToDate( "almovconsdia_egresos_t" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["almovconsdia_egresos_t"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["almovconsdia_egresos_t"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="gedocumentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="gedocumentos_egresos_consumo_t";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "gedocumentos_egresos_consumo_t";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["almovconsdia_egresos_t"][0] = $masterParams;
				$masterTablesData["almovconsdia_egresos_t"][0]["masterKeys"] = array();
	$masterTablesData["almovconsdia_egresos_t"][0]["masterKeys"][]="doclasedoc_id";
				$masterTablesData["almovconsdia_egresos_t"][0]["masterKeys"][]="doccnit";
				$masterTablesData["almovconsdia_egresos_t"][0]["detailKeys"] = array();
	$masterTablesData["almovconsdia_egresos_t"][0]["detailKeys"][]="sys_doclasedoc_id_fk";
				$masterTablesData["almovconsdia_egresos_t"][0]["detailKeys"][]="sys_document_func";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_almovconsdia_egresos_t()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "almovconsdia_id_fk,  	almovconsdiae_cantidad,  	almovconsdiae_id,  	consumo_id_fk,  	ctrl_saldo,  	mcd_valmovto,  	mcd_valunitant,  	mcdalmacen,  	mcdcodelem,  	mcdcuenta,  	mcdnomelem,  	sys_doclasedoc_id_fk,  	sys_document_func,  	sys_fecha,  	sys_status,  	sys_time,  	sys_user";
$proto0["m_strFrom"] = "FROM almovconsdiae";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "almovconsdia_id_fk",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto6["m_sql"] = "almovconsdia_id_fk";
$proto6["m_srcTableName"] = "almovconsdia_egresos_t";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "almovconsdiae_cantidad",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto8["m_sql"] = "almovconsdiae_cantidad";
$proto8["m_srcTableName"] = "almovconsdia_egresos_t";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "almovconsdiae_id",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto10["m_sql"] = "almovconsdiae_id";
$proto10["m_srcTableName"] = "almovconsdia_egresos_t";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "consumo_id_fk",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto12["m_sql"] = "consumo_id_fk";
$proto12["m_srcTableName"] = "almovconsdia_egresos_t";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl_saldo",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto14["m_sql"] = "ctrl_saldo";
$proto14["m_srcTableName"] = "almovconsdia_egresos_t";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_valmovto",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto16["m_sql"] = "mcd_valmovto";
$proto16["m_srcTableName"] = "almovconsdia_egresos_t";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_valunitant",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto18["m_sql"] = "mcd_valunitant";
$proto18["m_srcTableName"] = "almovconsdia_egresos_t";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdalmacen",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto20["m_sql"] = "mcdalmacen";
$proto20["m_srcTableName"] = "almovconsdia_egresos_t";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdcodelem",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto22["m_sql"] = "mcdcodelem";
$proto22["m_srcTableName"] = "almovconsdia_egresos_t";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdcuenta",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto24["m_sql"] = "mcdcuenta";
$proto24["m_srcTableName"] = "almovconsdia_egresos_t";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdnomelem",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto26["m_sql"] = "mcdnomelem";
$proto26["m_srcTableName"] = "almovconsdia_egresos_t";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_doclasedoc_id_fk",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto28["m_sql"] = "sys_doclasedoc_id_fk";
$proto28["m_srcTableName"] = "almovconsdia_egresos_t";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_document_func",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto30["m_sql"] = "sys_document_func";
$proto30["m_srcTableName"] = "almovconsdia_egresos_t";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_fecha",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto32["m_sql"] = "sys_fecha";
$proto32["m_srcTableName"] = "almovconsdia_egresos_t";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto34["m_sql"] = "sys_status";
$proto34["m_srcTableName"] = "almovconsdia_egresos_t";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_time",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto36["m_sql"] = "sys_time";
$proto36["m_srcTableName"] = "almovconsdia_egresos_t";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos_t"
));

$proto38["m_sql"] = "sys_user";
$proto38["m_srcTableName"] = "almovconsdia_egresos_t";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "almovconsdiae";
$proto41["m_srcTableName"] = "almovconsdia_egresos_t";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "almovconsdia_id_fk";
$proto41["m_columns"][] = "almovconsdiae_cantidad";
$proto41["m_columns"][] = "almovconsdiae_id";
$proto41["m_columns"][] = "consumo_id_fk";
$proto41["m_columns"][] = "ctrl_saldo";
$proto41["m_columns"][] = "mcd_valmovto";
$proto41["m_columns"][] = "mcd_valunitant";
$proto41["m_columns"][] = "mcdalmacen";
$proto41["m_columns"][] = "mcdcodelem";
$proto41["m_columns"][] = "mcdcuenta";
$proto41["m_columns"][] = "mcdnomelem";
$proto41["m_columns"][] = "sys_doclasedoc_id_fk";
$proto41["m_columns"][] = "sys_document_func";
$proto41["m_columns"][] = "sys_fecha";
$proto41["m_columns"][] = "sys_status";
$proto41["m_columns"][] = "sys_time";
$proto41["m_columns"][] = "sys_user";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "almovconsdiae";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "almovconsdia_egresos_t";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="almovconsdia_egresos_t";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_almovconsdia_egresos_t = createSqlQuery_almovconsdia_egresos_t();


	
								;

																	

$tdataalmovconsdia_egresos_t[".sqlquery"] = $queryData_almovconsdia_egresos_t;



include_once(getabspath("include/almovconsdia_egresos_t_events.php"));
$tdataalmovconsdia_egresos_t[".hasEvents"] = true;

?>