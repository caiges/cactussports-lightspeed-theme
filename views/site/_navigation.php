<div id="menubar" class="row-fluid">

	<div class="span9">
		<?php $cats = Category::GetTree(); ?>
		<?php foreach($cats as $cat): ?>
			<?php $this->widget('application.extensions.wsmenu.wsmenu', array(
				'categories'=> $cat['children'],
				'menuheader'=> Yii::t('global', $cat['label']),
				'showarrow'=>true,
			)); //products dropdown menu ?>
		<?php endforeach; ?>
	</div>

	<!--<div class="span7">
		<?php /*if (count(CustomPage::model()->toptabs()->findAll()))
			$this->widget('zii.widgets.CMenu', array(
			'id'=>'menutabs',
			'itemCssClass'=>'menutab menuheight menuunderline span'.round(12/count(CustomPage::model()->toptabs()->findAll())),
			'items'=>CustomPage::model()->toptabs()->findAll()
		)); */?>
	</div>-->

	<div id="searchentry" class="span3">
		<?php echo $this->renderPartial("/site/_search",array(),true); ?>
	</div>

</div><!-- menubar -->

<div class="clearfix"></div>