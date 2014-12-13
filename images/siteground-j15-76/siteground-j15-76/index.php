<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
JPlugin::loadLanguage( 'tpl_SG1' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

<!--[if lte IE 7]>
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/ie6.css" type="text/css" />
<![endif]-->

</head>
<body class="body_bg">
<div id="clouds">
	<div id="wrapper">
		<div id="header">
			<div id="header_img">
				<div id="top">
					<div id="search">
						<jdoc:include type="modules" name="user4" />
					<div class="clr"></div>	
					</div>
					<div id="logo">
						<a href="index.php"><?php echo $mainframe->getCfg('sitename') ;?></a>
						<div class="clr"></div>	
					</div>
				</div>
				<div id="news">
					<div id="news_flash">
						<jdoc:include type="modules" style="rounded" name="top" />
						<div class="clr"></div>
					</div>	
				</div>	
				<div id="top_menu">	
					<jdoc:include type="modules" name="user3" />
				</div>
			</div>
		</div>
		<div class="content_m">
			<div class="content_b">
				<div class="content_t">
					<div id="pathway">
						<div class="pathway_l">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<jdoc:include type="module" name="breadcrumbs" />
									</td>	
								</tr>
							</table>
						</div>
					</div>
						<?php if($this->countModules('left') and JRequest::getCmd('layout') != 'form') : ?>
						<div id="leftcolumn">	
							<jdoc:include type="modules" name="left" style="rounded" />
							<?php $sg = 'banner'; include "templates.php"; ?>
						</div>
						<?php endif; ?>
						
						<?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>			
						<div id="main">
						<?php else: ?>
						<div id="main_full">
							<?php endif; ?>
							<div class="nopad">				
								<jdoc:include type="message" />
								<?php if($this->params->get('showComponent')) : ?>
									<jdoc:include type="component" />
								<?php endif; ?>
							</div>						
						</div>							
						<div class="clr"></div>						
				</div>		
			</div>
		</div>
		<div id="footer">
			Consultation: Artem - <a href="http://mybaza.com.ua/obuchenie/31-vvedenie.html" target="_blank">Создать сайт самому</a> - просто!
		</div>
	</div>
</div>	
<jdoc:include type="modules" name="debug" />		
</body>
</html>
