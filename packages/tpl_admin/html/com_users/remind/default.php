<?php
/**
 * Seblod Admin Template
 *
 * @version       2.x
 * @package       admin
 * @author        Denys D. Nosov (denys@joomla-ua.org)
 * @copyright (C) 2018-2023 by Denys D. Nosov (https://joomla-ua.org)
 * @license       GNU General Public License version 2 or later; see LICENSE.md
 *
 **/

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $this->document->getWebAssetManager();
$wa->useScript('keepalive')->useScript('form.validate');

?>
<div class="com-users-remind remind">

	<form id="user-registration" action="<?php echo Route::_('index.php?option=com_users&task=remind.remind'); ?>" method="post" class="com-users-remind__form form-validate uk-form">

		<?php foreach($this->form->getFieldsets() as $fieldset) : ?>
			<?php if(isset($fieldset->label)) : ?>
				<legend><?php echo Text::_($fieldset->label); ?></legend>
			<?php endif; ?>
			<?php echo $this->form->renderFieldset($fieldset->name); ?>
		<?php endforeach; ?>

		<div class="com-users-remind__submit uk-margin">
			<button type="submit" class="uk-button uk-button-primary validate">
				<?php echo Text::_('JSUBMIT'); ?>
			</button>
		</div>
		<?php echo HTMLHelper::_('form.token'); ?>
	</form>
</div>
