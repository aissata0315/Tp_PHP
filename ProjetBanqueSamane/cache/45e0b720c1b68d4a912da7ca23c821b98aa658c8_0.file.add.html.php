<?php
/* Smarty version 3.1.30, created on 2020-07-28 11:43:33
  from "/home/aissata/TP/PHP/ProjetBanqueSamane/src/view/personne/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f200f65b33d43_90133158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e0b720c1b68d4a912da7ca23c821b98aa658c8' => 
    array (
      0 => '/home/aissata/TP/PHP/ProjetBanqueSamane/src/view/personne/add.html',
      1 => 1595936612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f200f65b33d43_90133158 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
    <style>
        h1{
            color: #40007d;
        }
    </style>
</head>
<body>
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
    </ul>
</div>
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire ajout client</div>
        <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
            <div class="alert alert-success">Données ajoutées!</div>
            <?php } else { ?>
            <div class="alert alert-danger">Erreur!</div>
            <?php }?>
            <?php }?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Personne/add">
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="nom" id="nom"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input class="form-control" type="text" name="prenom" id="prenom"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Adresse</label>
                    <input class="form-control" type="text" name="adresse" id="adresse"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="text" name="email" id="email"/>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php }
}
