<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="form-horizontal">
	<fieldset>
	  <legend><?php  echo t('Selector'); ?></legend>
		<div class="control-group">
			<?php 	echo $form->label('selector', t("CSS selector"))?>
			<div class="controls">
				<?php   echo $form->text('selector', $selector); ?>
				<span class="help-block"><?php echo t('jQuery style DOM selector (e.g. h2.title). For more information see: <a href="%s" target="_blank">%s</a>', "http://api.jquery.com/jQuery/", "http://api.jquery.com/jQuery/"); ?></span>
			</div>
		</div>
	</fieldset>
</div>