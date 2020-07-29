<?php
/* Smarty version 3.1.30, created on 2020-07-28 15:30:17
  from "/home/aissata/TP/PHP/ProjetBanqueSamane/src/view/welcome/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f204489645a78_63177294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dce564c318160623086d79554b9106169d83c6d' => 
    array (
      0 => '/home/aissata/TP/PHP/ProjetBanqueSamane/src/view/welcome/index.html',
      1 => 1595950216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f204489645a78_63177294 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			}

			<?php echo '</script'; ?>
>
		
	</head>
	<body onload="load_design()">
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Personne/add">Ajouter client </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/add">Creer compte </a></li>

				<!-- 	<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu test page </a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu test get id page </a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu test list page </a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Upload/index">upload file </a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
PdfGenerator/generate">Samane Generate pdf file </a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/generate">Samane Generate excel file </a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/read">Samane read excel file </a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Email/sendMail">Samane Mailing </a></li !-->
                </ul>
            </div>
		<div class="container" style="margin-top:100px;">
            <div class="col-md-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Liste Comptes</div>
                    <div class="panel-body">

					</div>
                </div>
            </div>

			<div class="col-md-6 col-xs-12">
				<div class="panel panel-info">
					<div class="panel-heading">Liste Clients</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<tr>
							<th>Identifiant</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Adresse</th>
							<th>Email</th>
							</tr>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePersonne']->value, 'personne');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['personne']->value) {
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getId();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getNom();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getPrenom();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getAdresse();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getEmail();?>
</td>

							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
        </body>
    </html>
<?php }
}
