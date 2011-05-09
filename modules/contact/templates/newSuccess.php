<?php if($form->hasErrors()): ?>
<ul class="notification error clearfix">
	<?php if($form['name']->getError()): ?><li><?php echo $form['name']->getError() ?></li><?php endif; ?>
	<?php if($form['mail']->getError()): ?><li><?php echo $form['mail']->getError()?></li><?php endif; ?>
	<?php if($form['message']->getError()): ?><li><?php echo $form['message']->getError() ?></li><?php endif; ?>
	<?php if($form['captcha']->getError()): ?><li><?php echo $form['captcha']->getError() ?></li><?php endif; ?>
</ul>
<?php endif; ?>

<form action="<?php echo url_for('contact/new.html') ?>" class="cssform grid_12" method="post">

	<fieldset>

		<p>
			<?php echo $form['name']->renderLabel() ?><br />
			<?php echo $form['name']->render() ?>
		</p>

		<p>
			<?php echo $form['mail']->renderLabel() ?><br />
			<?php echo $form['mail']->render() ?>
		</p>

		<p>
			<?php echo $form['message']->renderLabel() ?><br />
			<?php echo $form['message']->render(array('class' => 'text-input textarea')) ?>
		</p>

        <?php echo $form['captcha']->render() ?>
		<?php echo $form->renderHiddenFields() ?>

		<input name="Send" type="submit" value="<?php echo __('Submit', null, 'peanutForm') ?>" class="button" id="send" size="16"/>

	</fieldset>

</form>

<section class="map grid_12">
  <img src="http://maps.google.com/maps/api/staticmap?center=<?php echo urlencode(sfConfig::get('app_smap_center', 'Paris')) ?>&zoom=<?php echo sfConfig::get('app_smap_zoom', '12') ?>&size=<?php echo sfConfig::get('app_smap_size', '512x288') ?>&maptype=roadmap&markers=color:red%7Clabel:A%7C<?php echo urlencode(sfConfig::get('app_smap_address', '93 faubourg St Honoré, Paris')) ?>&sensor=false" />
</section>