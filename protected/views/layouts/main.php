<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/metro.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/site.less" rel="stylesheet/less" type="text/css" />

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less-1.3.0.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/metroui.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/site.js" type="text/javascript"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="metro">
	<div class="layout">
		<div class="header" id="header">
		</div>
		<div class="commands" id="commands">
			 <ul class="commands-list place-right">
                <li>
                    <a class="command">
                        <img/>
                        <span></span>
                    </a>
                </li>
            </ul>
		</div>
	</div>
</div>
</body>
</html>
