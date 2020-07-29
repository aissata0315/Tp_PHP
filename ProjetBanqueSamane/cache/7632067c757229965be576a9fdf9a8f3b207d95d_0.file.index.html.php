<?php
/* Smarty version 3.1.30, created on 2020-07-28 14:14:37
  from "/home/aissata/TP/PHP/ProjetBanqueSamane/src/view/personne/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2032cd9e8c24_09469837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7632067c757229965be576a9fdf9a8f3b207d95d' => 
    array (
      0 => '/home/aissata/TP/PHP/ProjetBanqueSamane/src/view/personne/index.html',
      1 => 1595933041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2032cd9e8c24_09469837 (Smarty_Internal_Template $_smarty_tpl) {
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
Personne/add">Ajouter client</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/add">Creer compte </a></li>

    </ul>
</div>
<div class="container" style="margin-top:100px;">
    <div class="col-md-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Liste Clients</div>
            <div class="panel-body"> </div>
        </div>
    </div>

    <div class="col-md-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Liste Comptes</div>
            <div class="panel-body"></div>
        </div>
    </div>
</div>
</body>
</html>
<?php }
}
