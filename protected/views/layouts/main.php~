<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
	
	<nav id="menu">
				<?php $this->widget('bootstrap.widgets.TbNavbar', array(
				'type'=>'inverse', // null or 'inverse'
				'brand'=>'Cóndor',
				'fixed' => 'top',
				'brandUrl'=>array('/site/index'),
				'collapse'=>true, // requires bootstrap-responsive.css
				'items'=>array(
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
						array('label'=>'Inicio', 'url'=>array('/site/index')),
						
						/* Inicio del menu de general*/
						array('label' => 'Programación', 'items' => array(
						array('label'=>'Tema', 'url'=>array('/Temas_g/index')),
						array('label'=>'Lección', 'url'=>array('/Lecciones_g/index')),
						array('label'=>'Contenido', 'url'=>array('/Contenido_g/index')),
						array('label'=>'Ejemplo', 'url'=>array('/Ejemplos_g/index')),
						array('label'=>'Ejercicio', 'url'=>array('/Ejercicios_g/index')),
						array('label'=>'Fuente de Referencia', 'url'=>array('/Freferencias_g/index')),
						
						)), /* Find del menu de usuario general*/						
						
						/* Inicio del menu de administrador*/
						array('label' => 'G.Contenido', 'items' => array(
						array('label'=>'Temas', 'url'=>array('/Temas/index')),
						array('label'=>'Lecciones', 'url'=>array('/Lecciones/index')),
						array('label'=>'Contenido', 'url'=>array('/Contenido/index')),
						array('label'=>'Ejemplos', 'url'=>array('/Ejemplos/index')),
						array('label'=>'Ejercicios', 'url'=>array('/Ejercicios/index')),
						array('label'=>'Fuentes de Referencia', 'url'=>array('/Freferencias/index')),
						
						)), /* Find del menu de administrador*/
							
						array('label'=>'¿Quienes Somos?', 'url'=>array('/site/page', 'view'=>'about'),),
						array('label'=>'Contactanos', 'url'=>array('/site/contact')),
						
			),
		),
		'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				
			),
		),
	),
));?>
	</nav><!-- mainmenu -->
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<footer>
		<img style="border:10px;width:38px;height:34px"
            src="./images/cuc-logo.png"
            alt="¡CUC Logo!" />
		Colegio Universitario de Caracas - PNFI. <?php echo date('Y'); ?>.<br/>
		Coordinación de Desarrollo Tecnológico.<br/>
		Este sitio web está liberado bajo una licencia <a href="http://creativecommons.org/licenses/by/3.0/"target="_blank">Creative Commons Attribution 3.0 License</a>.<br/>
		<?php echo Yii::app()->params['adminEmail']?>
		
			<article class="herramientas">
			
        	<img style="border:0;width:58px;height:31px"
            src="./images/HTML5-Logo.png"
            alt="¡HTML5!" />

            
            <img style="border:0;width:58px;height:31px"
            src="./images/HTML5-Styling.png"
            alt="¡HTML5 CSS3!" />
            
            
            <img style="border:0;width:58px;height:31px"
            src="./images/HTML5-Multimedia.png"
            alt="¡HTML5 Multimedia!" />
            
            
            <img style="border:0;width:58px;height:31px"
            src="./images/HTML5-3D-Effects.png"
            alt="¡HTML5 Multimedia!" />            
            
            
            <img style="border:0;width:58px;height:31px"
            src="./images/HTML5-Semantics.png"
            alt="¡HTML5 Semantica!" />
            
			</article>
		
	</footer><!-- footer -->
	<article class="redes-sociales">
			<!--  <h4 align="right">Encuentranos por las Redes Sociales!!.</h4>-->
				<aside>
					<a>
					<img style="border:1;width:58px;height:58px" align="right"
            		src="./images/twitter.png"
            		alt="¡HTML5 Semantica!" />
            
            		<img style="border:1;width:58px;height:58px" align="right"
            		src="./images/facebook.png"
            		alt="¡HTML5 Semantica!" />
            		
            		<img style="border:1;width:58px;height:58px" align="right"
            		src="./images/googleplus.png"
            		alt="¡HTML5 Semantica!" />
				</aside>	
				<div class="btn-toolbar">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
'buttons'=>array(
array('label'=>'1', 'url'=>'www.twitter.com', 'icon'=>'./images/condor.png'),
array('label'=>'2', 'url'=>'#'),
array('label'=>'3', 'url'=>'#'),
array('label'=>'4', 'url'=>'#'),
),
)); ?>
	</article>

</div><!-- page -->

</body>
</html>
