<?php
$tdatatparam_direcc_territoriales = array();
$tdatatparam_direcc_territoriales[".searchableFields"] = array();
$tdatatparam_direcc_territoriales[".ShortName"] = "tparam_direcc_territoriales";
$tdatatparam_direcc_territoriales[".OwnerID"] = "";
$tdatatparam_direcc_territoriales[".OriginalTable"] = "tparam_direcc_territoriales";


$tdatatparam_direcc_territoriales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatparam_direcc_territoriales[".originalPagesByType"] = $tdatatparam_direcc_territoriales[".pagesByType"];
$tdatatparam_direcc_territoriales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatparam_direcc_territoriales[".originalPages"] = $tdatatparam_direcc_territoriales[".pages"];
$tdatatparam_direcc_territoriales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatparam_direcc_territoriales[".originalDefaultPages"] = $tdatatparam_direcc_territoriales[".defaultPages"];

//	field labels
$fieldLabelstparam_direcc_territoriales = array();
$fieldToolTipstparam_direcc_territoriales = array();
$pageTitlestparam_direcc_territoriales = array();
$placeHolderstparam_direcc_territoriales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_direcc_territoriales["Spanish"] = array();
	$fieldToolTipstparam_direcc_territoriales["Spanish"] = array();
	$placeHolderstparam_direcc_territoriales["Spanish"] = array();
	$pageTitlestparam_direcc_territoriales["Spanish"] = array();
	$fieldLabelstparam_direcc_territoriales["Spanish"]["cedula_resp"] = "Documento funcionario contacto";
	$fieldToolTipstparam_direcc_territoriales["Spanish"]["cedula_resp"] = "";
	$placeHolderstparam_direcc_territoriales["Spanish"]["cedula_resp"] = "";
	$fieldLabelstparam_direcc_territoriales["Spanish"]["ciudad_terr"] = "Municipio";
	$fieldToolTipstparam_direcc_territoriales["Spanish"]["ciudad_terr"] = "";
	$placeHolderstparam_direcc_territoriales["Spanish"]["ciudad_terr"] = "";
	$fieldLabelstparam_direcc_territoriales["Spanish"]["correo_terr"] = "Correo electrónico funcionario";
	$fieldToolTipstparam_direcc_territoriales["Spanish"]["correo_terr"] = "";
	$placeHolderstparam_direcc_territoriales["Spanish"]["correo_terr"] = "";
	$fieldLabelstparam_direcc_territoriales["Spanish"]["direc_territorial_id"] = "DT_ID";
	$fieldToolTipstparam_direcc_territoriales["Spanish"]["direc_territorial_id"] = "";
	$placeHolderstparam_direcc_territoriales["Spanish"]["direc_territorial_id"] = "";
	$fieldLabelstparam_direcc_territoriales["Spanish"]["direcion_terr"] = "Dirección";
	$fieldToolTipstparam_direcc_territoriales["Spanish"]["direcion_terr"] = "";
	$placeHolderstparam_direcc_territoriales["Spanish"]["direcion_terr"] = "";
	$fieldLabelstparam_direcc_territoriales["Spanish"]["nombre_terr"] = "Nombre Dirección Territorial";
	$fieldToolTipstparam_direcc_territoriales["Spanish"]["nombre_terr"] = "";
	$placeHolderstparam_direcc_territoriales["Spanish"]["nombre_terr"] = "";
	$fieldLabelstparam_direcc_territoriales["Spanish"]["responsable_terr"] = "Funcionario contacto";
	$fieldToolTipstparam_direcc_territoriales["Spanish"]["responsable_terr"] = "";
	$placeHolderstparam_direcc_territoriales["Spanish"]["responsable_terr"] = "";
	$fieldLabelstparam_direcc_territoriales["Spanish"]["telefono_res_terr"] = "Teléfono funcionario contacto";
	$fieldToolTipstparam_direcc_territoriales["Spanish"]["telefono_res_terr"] = "";
	$placeHolderstparam_direcc_territoriales["Spanish"]["telefono_res_terr"] = "";
	$fieldLabelstparam_direcc_territoriales["Spanish"]["telefono_terr"] = "Teléfono DT";
	$fieldToolTipstparam_direcc_territoriales["Spanish"]["telefono_terr"] = "";
	$placeHolderstparam_direcc_territoriales["Spanish"]["telefono_terr"] = "";
	if (count($fieldToolTipstparam_direcc_territoriales["Spanish"]))
		$tdatatparam_direcc_territoriales[".isUseToolTips"] = true;
}


	$tdatatparam_direcc_territoriales[".NCSearch"] = true;



$tdatatparam_direcc_territoriales[".shortTableName"] = "tparam_direcc_territoriales";
$tdatatparam_direcc_territoriales[".nSecOptions"] = 0;

$tdatatparam_direcc_territoriales[".mainTableOwnerID"] = "";
$tdatatparam_direcc_territoriales[".entityType"] = 0;
$tdatatparam_direcc_territoriales[".connId"] = "dbrf_at_127_0_0_1";


$tdatatparam_direcc_territoriales[".strOriginalTableName"] = "tparam_direcc_territoriales";

	



$tdatatparam_direcc_territoriales[".showAddInPopup"] = false;

$tdatatparam_direcc_territoriales[".showEditInPopup"] = false;

$tdatatparam_direcc_territoriales[".showViewInPopup"] = false;

$tdatatparam_direcc_territoriales[".listAjax"] = false;
//	temporary
//$tdatatparam_direcc_territoriales[".listAjax"] = false;

	$tdatatparam_direcc_territoriales[".audit"] = false;

	$tdatatparam_direcc_territoriales[".locking"] = false;


$pages = $tdatatparam_direcc_territoriales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_direcc_territoriales[".edit"] = true;
	$tdatatparam_direcc_territoriales[".afterEditAction"] = 1;
	$tdatatparam_direcc_territoriales[".closePopupAfterEdit"] = 1;
	$tdatatparam_direcc_territoriales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_direcc_territoriales[".add"] = true;
$tdatatparam_direcc_territoriales[".afterAddAction"] = 1;
$tdatatparam_direcc_territoriales[".closePopupAfterAdd"] = 1;
$tdatatparam_direcc_territoriales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_direcc_territoriales[".list"] = true;
}



$tdatatparam_direcc_territoriales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_direcc_territoriales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_direcc_territoriales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_direcc_territoriales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_direcc_territoriales[".printFriendly"] = true;
}



$tdatatparam_direcc_territoriales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_direcc_territoriales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_direcc_territoriales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_direcc_territoriales[".isUseAjaxSuggest"] = true;



															

$tdatatparam_direcc_territoriales[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_direcc_territoriales[".buttonsAdded"] = false;

$tdatatparam_direcc_territoriales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_direcc_territoriales[".isUseTimeForSearch"] = false;


$tdatatparam_direcc_territoriales[".badgeColor"] = "9ACD32";


$tdatatparam_direcc_territoriales[".allSearchFields"] = array();
$tdatatparam_direcc_territoriales[".filterFields"] = array();
$tdatatparam_direcc_territoriales[".requiredSearchFields"] = array();

$tdatatparam_direcc_territoriales[".googleLikeFields"] = array();
$tdatatparam_direcc_territoriales[".googleLikeFields"][] = "cedula_resp";
$tdatatparam_direcc_territoriales[".googleLikeFields"][] = "ciudad_terr";
$tdatatparam_direcc_territoriales[".googleLikeFields"][] = "correo_terr";
$tdatatparam_direcc_territoriales[".googleLikeFields"][] = "direc_territorial_id";
$tdatatparam_direcc_territoriales[".googleLikeFields"][] = "direcion_terr";
$tdatatparam_direcc_territoriales[".googleLikeFields"][] = "nombre_terr";
$tdatatparam_direcc_territoriales[".googleLikeFields"][] = "responsable_terr";
$tdatatparam_direcc_territoriales[".googleLikeFields"][] = "telefono_res_terr";
$tdatatparam_direcc_territoriales[".googleLikeFields"][] = "telefono_terr";



$tdatatparam_direcc_territoriales[".tableType"] = "list";

$tdatatparam_direcc_territoriales[".printerPageOrientation"] = 0;
$tdatatparam_direcc_territoriales[".nPrinterPageScale"] = 100;

$tdatatparam_direcc_territoriales[".nPrinterSplitRecords"] = 40;

$tdatatparam_direcc_territoriales[".geocodingEnabled"] = false;










$tdatatparam_direcc_territoriales[".pageSize"] = 20;

$tdatatparam_direcc_territoriales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_direcc_territoriales[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_direcc_territoriales[".orderindexes"] = array();


$tdatatparam_direcc_territoriales[".sqlHead"] = "SELECT cedula_resp,  	ciudad_terr,  	correo_terr,  	direc_territorial_id,  	direcion_terr,  	nombre_terr,  	responsable_terr,  	telefono_res_terr,  	telefono_terr";
$tdatatparam_direcc_territoriales[".sqlFrom"] = "FROM tparam_direcc_territoriales";
$tdatatparam_direcc_territoriales[".sqlWhereExpr"] = "";
$tdatatparam_direcc_territoriales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_direcc_territoriales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_direcc_territoriales[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_direcc_territoriales[".highlightSearchResults"] = true;

$tableKeystparam_direcc_territoriales = array();
$tableKeystparam_direcc_territoriales[] = "direc_territorial_id";
$tdatatparam_direcc_territoriales[".Keys"] = $tableKeystparam_direcc_territoriales;


$tdatatparam_direcc_territoriales[".hideMobileList"] = array();




//	cedula_resp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cedula_resp";
	$fdata["GoodName"] = "cedula_resp";
	$fdata["ownerTable"] = "tparam_direcc_territoriales";
	$fdata["Label"] = GetFieldLabel("tparam_direcc_territoriales","cedula_resp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cedula_resp";

		$fdata["sourceSingle"] = "cedula_resp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cedula_resp";

	
	
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


	$tdatatparam_direcc_territoriales["cedula_resp"] = $fdata;
		$tdatatparam_direcc_territoriales[".searchableFields"][] = "cedula_resp";
//	ciudad_terr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ciudad_terr";
	$fdata["GoodName"] = "ciudad_terr";
	$fdata["ownerTable"] = "tparam_direcc_territoriales";
	$fdata["Label"] = GetFieldLabel("tparam_direcc_territoriales","ciudad_terr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ciudad_terr";

		$fdata["sourceSingle"] = "ciudad_terr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ciudad_terr";

	
	
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
	$edata["LookupTable"] = "q_divipola";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CODMUN";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOMMUNICIPIO";

	

	
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


	$tdatatparam_direcc_territoriales["ciudad_terr"] = $fdata;
		$tdatatparam_direcc_territoriales[".searchableFields"][] = "ciudad_terr";
//	correo_terr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "correo_terr";
	$fdata["GoodName"] = "correo_terr";
	$fdata["ownerTable"] = "tparam_direcc_territoriales";
	$fdata["Label"] = GetFieldLabel("tparam_direcc_territoriales","correo_terr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "correo_terr";

		$fdata["sourceSingle"] = "correo_terr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correo_terr";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatatparam_direcc_territoriales["correo_terr"] = $fdata;
		$tdatatparam_direcc_territoriales[".searchableFields"][] = "correo_terr";
//	direc_territorial_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "direc_territorial_id";
	$fdata["GoodName"] = "direc_territorial_id";
	$fdata["ownerTable"] = "tparam_direcc_territoriales";
	$fdata["Label"] = GetFieldLabel("tparam_direcc_territoriales","direc_territorial_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "direc_territorial_id";

		$fdata["sourceSingle"] = "direc_territorial_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direc_territorial_id";

	
	
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


	$tdatatparam_direcc_territoriales["direc_territorial_id"] = $fdata;
		$tdatatparam_direcc_territoriales[".searchableFields"][] = "direc_territorial_id";
//	direcion_terr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "direcion_terr";
	$fdata["GoodName"] = "direcion_terr";
	$fdata["ownerTable"] = "tparam_direcc_territoriales";
	$fdata["Label"] = GetFieldLabel("tparam_direcc_territoriales","direcion_terr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direcion_terr";

		$fdata["sourceSingle"] = "direcion_terr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direcion_terr";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatatparam_direcc_territoriales["direcion_terr"] = $fdata;
		$tdatatparam_direcc_territoriales[".searchableFields"][] = "direcion_terr";
//	nombre_terr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_terr";
	$fdata["GoodName"] = "nombre_terr";
	$fdata["ownerTable"] = "tparam_direcc_territoriales";
	$fdata["Label"] = GetFieldLabel("tparam_direcc_territoriales","nombre_terr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_terr";

		$fdata["sourceSingle"] = "nombre_terr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_terr";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatatparam_direcc_territoriales["nombre_terr"] = $fdata;
		$tdatatparam_direcc_territoriales[".searchableFields"][] = "nombre_terr";
//	responsable_terr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "responsable_terr";
	$fdata["GoodName"] = "responsable_terr";
	$fdata["ownerTable"] = "tparam_direcc_territoriales";
	$fdata["Label"] = GetFieldLabel("tparam_direcc_territoriales","responsable_terr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responsable_terr";

		$fdata["sourceSingle"] = "responsable_terr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsable_terr";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatparam_direcc_territoriales["responsable_terr"] = $fdata;
		$tdatatparam_direcc_territoriales[".searchableFields"][] = "responsable_terr";
//	telefono_res_terr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "telefono_res_terr";
	$fdata["GoodName"] = "telefono_res_terr";
	$fdata["ownerTable"] = "tparam_direcc_territoriales";
	$fdata["Label"] = GetFieldLabel("tparam_direcc_territoriales","telefono_res_terr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono_res_terr";

		$fdata["sourceSingle"] = "telefono_res_terr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono_res_terr";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatatparam_direcc_territoriales["telefono_res_terr"] = $fdata;
		$tdatatparam_direcc_territoriales[".searchableFields"][] = "telefono_res_terr";
//	telefono_terr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "telefono_terr";
	$fdata["GoodName"] = "telefono_terr";
	$fdata["ownerTable"] = "tparam_direcc_territoriales";
	$fdata["Label"] = GetFieldLabel("tparam_direcc_territoriales","telefono_terr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono_terr";

		$fdata["sourceSingle"] = "telefono_terr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono_terr";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatatparam_direcc_territoriales["telefono_terr"] = $fdata;
		$tdatatparam_direcc_territoriales[".searchableFields"][] = "telefono_terr";


$tables_data["tparam_direcc_territoriales"]=&$tdatatparam_direcc_territoriales;
$field_labels["tparam_direcc_territoriales"] = &$fieldLabelstparam_direcc_territoriales;
$fieldToolTips["tparam_direcc_territoriales"] = &$fieldToolTipstparam_direcc_territoriales;
$placeHolders["tparam_direcc_territoriales"] = &$placeHolderstparam_direcc_territoriales;
$page_titles["tparam_direcc_territoriales"] = &$pageTitlestparam_direcc_territoriales;


changeTextControlsToDate( "tparam_direcc_territoriales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_direcc_territoriales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_direcc_territoriales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_direcc_territoriales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cedula_resp,  	ciudad_terr,  	correo_terr,  	direc_territorial_id,  	direcion_terr,  	nombre_terr,  	responsable_terr,  	telefono_res_terr,  	telefono_terr";
$proto0["m_strFrom"] = "FROM tparam_direcc_territoriales";
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
	"m_strName" => "cedula_resp",
	"m_strTable" => "tparam_direcc_territoriales",
	"m_srcTableName" => "tparam_direcc_territoriales"
));

$proto6["m_sql"] = "cedula_resp";
$proto6["m_srcTableName"] = "tparam_direcc_territoriales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudad_terr",
	"m_strTable" => "tparam_direcc_territoriales",
	"m_srcTableName" => "tparam_direcc_territoriales"
));

$proto8["m_sql"] = "ciudad_terr";
$proto8["m_srcTableName"] = "tparam_direcc_territoriales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "correo_terr",
	"m_strTable" => "tparam_direcc_territoriales",
	"m_srcTableName" => "tparam_direcc_territoriales"
));

$proto10["m_sql"] = "correo_terr";
$proto10["m_srcTableName"] = "tparam_direcc_territoriales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "direc_territorial_id",
	"m_strTable" => "tparam_direcc_territoriales",
	"m_srcTableName" => "tparam_direcc_territoriales"
));

$proto12["m_sql"] = "direc_territorial_id";
$proto12["m_srcTableName"] = "tparam_direcc_territoriales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "direcion_terr",
	"m_strTable" => "tparam_direcc_territoriales",
	"m_srcTableName" => "tparam_direcc_territoriales"
));

$proto14["m_sql"] = "direcion_terr";
$proto14["m_srcTableName"] = "tparam_direcc_territoriales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_terr",
	"m_strTable" => "tparam_direcc_territoriales",
	"m_srcTableName" => "tparam_direcc_territoriales"
));

$proto16["m_sql"] = "nombre_terr";
$proto16["m_srcTableName"] = "tparam_direcc_territoriales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable_terr",
	"m_strTable" => "tparam_direcc_territoriales",
	"m_srcTableName" => "tparam_direcc_territoriales"
));

$proto18["m_sql"] = "responsable_terr";
$proto18["m_srcTableName"] = "tparam_direcc_territoriales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono_res_terr",
	"m_strTable" => "tparam_direcc_territoriales",
	"m_srcTableName" => "tparam_direcc_territoriales"
));

$proto20["m_sql"] = "telefono_res_terr";
$proto20["m_srcTableName"] = "tparam_direcc_territoriales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono_terr",
	"m_strTable" => "tparam_direcc_territoriales",
	"m_srcTableName" => "tparam_direcc_territoriales"
));

$proto22["m_sql"] = "telefono_terr";
$proto22["m_srcTableName"] = "tparam_direcc_territoriales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tparam_direcc_territoriales";
$proto25["m_srcTableName"] = "tparam_direcc_territoriales";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cedula_resp";
$proto25["m_columns"][] = "ciudad_terr";
$proto25["m_columns"][] = "correo_terr";
$proto25["m_columns"][] = "direc_territorial_id";
$proto25["m_columns"][] = "direcion_terr";
$proto25["m_columns"][] = "nombre_terr";
$proto25["m_columns"][] = "responsable_terr";
$proto25["m_columns"][] = "telefono_res_terr";
$proto25["m_columns"][] = "telefono_terr";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tparam_direcc_territoriales";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tparam_direcc_territoriales";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_direcc_territoriales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_direcc_territoriales = createSqlQuery_tparam_direcc_territoriales();


	
								;

									

$tdatatparam_direcc_territoriales[".sqlquery"] = $queryData_tparam_direcc_territoriales;



$tdatatparam_direcc_territoriales[".hasEvents"] = false;

?>