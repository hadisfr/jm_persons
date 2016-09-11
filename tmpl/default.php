<?php 
/*
	jm_persons
	2016 © Hadi Safari
*/
// No direct access
defined("_JEXEC") or die; ?>
<?php $document = JFactory::getDocument(); $document->addStyleSheet("modules/jm_persons/css/style.css"); ?>
<li class="jm_persons">
	<?php echo $person; ?>
</li>