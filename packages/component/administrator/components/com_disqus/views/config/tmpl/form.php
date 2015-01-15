<? defined('KOOWA') or die('Protected Resource'); ?>

<?= @helper('behavior.mootools'); ?>
<script src="media://lib_koowa/js/koowa.js" /> 

<form method="post" action="<?= @route(); ?>" class="-koowa-form">
    <div class="row-fluid">
        <div class="span8">
            <fieldset class="form-horizontal">
                <legend><?= @text('DETAILS'); ?></legend>
                <div class="control-group">
                    <label class="control-label" for="name"><?= @text('Shortname'); ?></label>
                    <div class="controls">
                        <input class="required" type="text" name="shortname" size="32" maxlength="255" value="<?= $config->shortname; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="name"><?= @text('Multilingual'); ?></label>
                    <div class="controls">
                        <?= @helper('select.booleanlist', array(
                            'name' => 'multilingual',
                            'selected' => $config->multilingual
                        )); ?>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</form> 