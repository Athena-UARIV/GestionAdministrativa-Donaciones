<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_aldevindiv_sol  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;



		$this->events["AfterEdit"]=true;

		$this->events["AfterAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		IF($data['sol_estado'] == 1){
$pageObject->ShowItem("grid_edit", $recordId); 
}
else{
$pageObject->hideItem("grid_edit", $recordId);
$pageObject->hideItem("grid_alldetails_link", $recordId);
$pageObject->hideItem("grid_details_link", $recordId);
$pageObject->hideItem("grid_checkbox", $recordId);  
}



$sql = DB::PrepareSQL("UPDATE dbrf.aldevindiv_sol 
SET dbrf.aldevindiv_sol.sol_estado = 2 
WHERE
	dbrf.aldevindiv_sol.sign_a_hash_v IS NOT NULL 
	AND dbrf.aldevindiv_sol.sign_b_hash_v IS NOT NULL;");
DB::Exec( $sql );

// 

$sql = DB::PrepareSQL("UPDATE
	dbrf.aldevindiv_sol
	SET
	dbrf.aldevindiv_sol.sign_a_qr = CONCAT_WS('|',dbrf.aldevindiv_sol.sign_a_user,dbrf.aldevindiv_sol.sign_a_documento,dbrf.aldevindiv_sol.sol_rad,dbrf.aldevindiv_sol.sign_a_hash_v_date), 
	dbrf.aldevindiv_sol.sign_b_qr = CONCAT_WS('|',dbrf.aldevindiv_sol.sign_b_user,dbrf.aldevindiv_sol.sign_b_documento,dbrf.aldevindiv_sol.sol_rad,dbrf.aldevindiv_sol.sign_b_hash_v_date)
WHERE
	dbrf.aldevindiv_sol.sol_estado = 2;");
DB::Exec( $sql );




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		
//**********  Send email with new data  ************

$email=$values['sign_a_email'];
$from=$_SESSION['serversmtp'];
$msg="<h2>¡Bienvenido a la plataforma de firma electrónica!</h2>
  
  <p>Estimado usuario,</p>
  
  <p>Hemos generado una clave dinámica exclusiva de único uso. Utiliza esta clave junto con la URL proporcionada para acceder y firmar la entrega de documentos.</p>
  
  <p>Clave dinámica: <strong>".$values['sign_a_hash']."</strong></p>
  
  <p>Por favor, visita la siguiente URL para acceder a la página de firma:</p>
  
  <p><a href='".$_SESSION['GURL']."aldevindiv_sol_sign_a_list.php"."'>Firma electrónica</a></p>
  
  <p>Si tienes alguna pregunta o necesitas ayuda, no dudes en ponerte en contacto con nuestro equipo de soporte.</p>
  
  <p>¡Gracias por utilizar nuestra plataforma de firma electrónica!</p>
  
  <p>Saludos,</p>
  
  <p>".$_SESSION['GEntidad']."</p>

  <img src='".$_SESSION['logo']."' alt='Logo de ".$_SESSION['GEntidad']."'>";
$subject="Módulo de inventario | Firmar entrega | Radicado: ".$values['sol_rad'];

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'htmlbody' => $msg, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];

// firma 2


$emailb=$values['sign_b_email'];
$fromb=$_SESSION['serversmtp'];
$msgb="<h2>¡Bienvenido a la plataforma de firma electrónica!</h2>
  
  <p>Estimado usuario,</p>
  
  <p>Hemos generado una clave dinámica de único uso. Utiliza esta clave junto con la URL proporcionada para acceder y firmar el recibo de documentos.</p>
  
  <p>Clave dinámica: <strong>".$values['sign_b_hash']."</strong></p>
  
  <p>Por favor, visita la siguiente URL para acceder a la página de firma:</p>
  
  <p><a href='".$_SESSION['GURL']."aldevindiv_sol_sign_b_list.php"."'>Firma electrónica</a></p>
  
  <p>Si tienes alguna pregunta o necesitas ayuda, no dudes en ponerte en contacto con nuestro equipo de soporte.</p>
  
  <p>¡Gracias por utilizar nuestra plataforma de firma electrónica!</p>
  
  <p>Saludos,</p>
  
  <p>".$_SESSION['GEntidad']."</p>

  <img src='".$_SESSION['logo']."' alt='Logo de ".$_SESSION['GEntidad']."'>";
$subjectb="Módulo de inventario | Firmar recibido | Radicado: ".$values['sol_rad'];

$retb=runner_mail(array('to' => $emailb, 'subject' => $subjectb, 'htmlbody' => $msgb, 'from'=>$fromb));
if(!$retb["mailed"])
	echo $retb["message"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		
$sql = DB::PrepareSQL("INSERT IGNORE INTO dbrf.aldevindiv_sol_vinc(
	dbrf.aldevindiv_sol_vinc.transact_id_fk, 
	dbrf.aldevindiv_sol_vinc.aldevindiv_id_fk, 
	dbrf.aldevindiv_sol_vinc.t_placa, 
	dbrf.aldevindiv_sol_vinc.t_serie, 
	dbrf.aldevindiv_sol_vinc.t_fecha_compra, 
	dbrf.aldevindiv_sol_vinc.t_valor_compra, 
	dbrf.aldevindiv_sol_vinc.t_cuenta, 
	dbrf.aldevindiv_sol_vinc.t_elemento, 
	dbrf.aldevindiv_sol_vinc.t_marca)
	SELECT
	dbrf.q_lista_elementos_tyr.transact_id, 
	dbrf.q_lista_elementos_tyr.aldevindiv_id, 
	dbrf.q_lista_elementos_tyr.di_nroplaca, 
	dbrf.q_lista_elementos_tyr.di_nroserie, 
	dbrf.q_lista_elementos_tyr.di_fechacompra, 
	dbrf.q_lista_elementos_tyr.di_valorcompra, 
	dbrf.q_lista_elementos_tyr.ca_nomcuenta, 
	dbrf.q_lista_elementos_tyr.ed_nomelemento, 
	dbrf.q_lista_elementos_tyr.ma_nommarca
FROM
	dbrf.q_lista_elementos_tyr
	WHERE
	dbrf.q_lista_elementos_tyr.transact_id = ".$keys['transact_id']);
DB::Exec( $sql );

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>