<?php

/**
 * @subpackage  mod_wkcontact
 * @copyright   Copyright (C) 2017 - Web Keys.
 * @license     GNU/GPL
 */


// Acesso ao Joomla
defined('_JEXEC') or die;

use Joomla\CMS\Uri\Uri;
$uri = Uri::getInstance();

$moduleId = 'awForm-'.$module->id;

$classHelper = new modawformHelper;
?>

<form action="" class="aw-form" method="post" id="<?= $moduleId;?>" <?= $modal == 'modal' ? 'style="display: none"': null;?> <?= $modal == 'modal' ? 'class="awModalForm"': null;?>>
	<div class="aw-form-fields">
		<?php awRender::getDados($params->get('awform'),$classHelper->awCaptchaAjax(null,$params->get('awcaptcha'),$module->id),$module->id,null,$params); ?>
	
	<div class="aw-form-status"></div>
	<input type="hidden" name="awCurrent" value="<?= $uri->toString();?>" >
</div>
</form>

<script type="text/javascript">
	jQuery(function($){
		$( document ).ready(function(){
			$( '#<?= $moduleId;?>' ).valid({
				formId: '#<?= $moduleId;?>',
				idForm: '<?= $module->id;?>',
				modalForm: <?= $modal == 'modal' ? 'true' : 'false';?>,
				captAlign: '<?= $cAlign;?>',
				divParent: '.sp-module'
			})
		})
	})
</script>


