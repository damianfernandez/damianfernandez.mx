<?php
if (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'form') {
	if (isset($_REQUEST['formname'])) {

	}
} elseif (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'widget') {
	if (isset($_REQUEST['formname'])) {
		$formname = $_REQUEST['formname'];
		$field_003 = $_REQUEST['field_003'];
		$field_004 = $_REQUEST['field_004'];

		$mailAddress = 'abogados@damianfernandez.mx';
		$subject = 'Contacto';
		$msg = "Mensaje $field_003\r\n $field_004";
		$headers = "MIME-Version: 1.0\r\n Content-type: text/plain; charset=utf-8\r\n From: " . $_REQUEST[$result->slug] . "\r\n Reply-To: " . $_REQUEST[$result->slug] . "\r\n X-Mailer: PHP/" . phpversion();

		mail($mailAddress, $subject, $msg, $headers);
	}
} elseif (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'contactf') {
	if (isset($_REQUEST['formname'])) {
		$formname = $_REQUEST['formname'];
		$contact_name = $_REQUEST['contact_name'];
		$contact_email = $_REQUEST['contact_email'];
		$contact_url = $_REQUEST['contact_url'];
		$contact_subject = $_REQUEST['contact_subject'];
		$contact_message = $_REQUEST['contact_message'];

		$mailAddress = 'abogados@damianfernandez.mx';
		$subject = 'Contacto';
		$msg = "$contact_name\r\n $contact_email\r\n $contact_subject\r\n $contact_message\r\n $contact_url";
		$headers = "MIME-Version: 1.0\r\n Content-type: text/plain; charset=utf-8\r\n From: " . $_REQUEST[$result->slug] . "\r\n Reply-To: " . $_REQUEST[$result->slug] . "\r\n X-Mailer: PHP/" . phpversion();

		mail($mailAddress, $subject, $msg, $headers);
	}
} elseif (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'contactf') {
	if (isset($_REQUEST['formname'])) {
		$formname = $_REQUEST['formname'];
		$contact_name = $_REQUEST['contact_name'];
		$contact_email = $_REQUEST['contact_email'];
		$contact_url = $_REQUEST['contact_url'];
		$contact_subject = $_REQUEST['contact_subject'];
		$contact_message = $_REQUEST['contact_message'];

		$mailAddress = 'abogados@damianfernandez.mx';
		$subject = 'Contacto';
		$msg = "$contact_name\r\n $contact_email\r\n $contact_subject\r\n $contact_message\r\n $contact_url";
		$headers = "MIME-Version: 1.0\r\n Content-type: text/plain; charset=utf-8\r\n From: " . $_REQUEST[$result->slug] . "\r\n Reply-To: " . $_REQUEST[$result->slug] . "\r\n X-Mailer: PHP/" . phpversion();

		mail($mailAddress, $subject, $msg, $headers);
	}
}
?>
