<?php dsm($contacto); ?>
<?php if(isset($contacto->nombre_completo)): ?>
	<p><em>Nombre Completo: <?php print $contacto->nombre_completo; ?></em></p>
<?php  endif; ?>
<?php if(isset($contacto->departamento)): ?>
	<p>Departamento: <?php print $contacto->departamento; ?></p>
<?php endif; ?>
<?php if(isset($contacto->oficina_extension)): ?>
	<p>Extension de Oficina: <?php print $contacto->oficina_extension; ?></p>
<?php endif; ?>
<?php if(isset($contacto->telefono_celular)): ?>
	<p>Telefono Celular: <?php print $contacto->telefono_celular; ?></p>
<?php endif; ?>
<?php if(isset($contacto->email_trabajo)): ?>
	<p>Correo del Trabajo: <?php print $contacto->email_trabajo; ?></p>
<?php endif; ?>
<?php if(isset($contacto->email_personal)): ?>
	<p>Correo Personal: <?php print $contacto->email_personal; ?></p>
<?php endif; ?>
<?php if(isset($contacto->telefono_casa)): ?>
	<p>Telefono de Casa: <?php print $contacto->telefono_casa; ?></p>
<?php endif; ?>
<p>Fecha de ultimo acceso : <?php print $ultimaconsulta ?></p>
