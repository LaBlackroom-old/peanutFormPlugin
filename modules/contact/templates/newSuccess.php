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

<?php $adr = peanutConfig::get('map_address'); ?>

<section class="map grid_12">
  <img src="http://maps.google.com/maps/api/staticmap?center=<?php echo urlencode(peanutConfig::get('map_center')) ?>&zoom=<?php echo peanutConfig::get('map_zoom') ?>&size=<?php echo peanutConfig::get('map_size') ?>&maptype=roadmap&markers=color:red%7Clabel:A%7C<?php echo urlencode($adr) ?>&sensor=false" />
</section>