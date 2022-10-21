<?php /* Smarty version 3.1.27, created on 2022-10-18 17:11:17
         compiled from "C:\xampp\htdocs\application\views\web\pagina\contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1880857153634ec21532a972_07547348%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58e2ffe97ca00fe1e10545a9049c123547b406c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\views\\web\\pagina\\contacto.tpl',
      1 => 1666066420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880857153634ec21532a972_07547348',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_634ec215386e14_92290319',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_634ec215386e14_92290319')) {
function content_634ec215386e14_92290319 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1880857153634ec21532a972_07547348';
?>
<section class="sect_title_interna" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/fondo/fondo-nosotros.jpg);"><div class="container"><div class="row row_height"><div class="col-lg-12"><h1>CONTÁCTANOS</h1></div></div></div></section><section class="sect_contact"><div class="container"><div class="row"><div class="col-sm-9 col-md-9"><!--div class="title_contact"><h1>CONTÁCTANOS</h1><h5>Envíanos tu consulta y con gusto te atenderemos. Recuerda que es necesario llenar todos los campos.</h5></div--><div class="form_contact"><form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" name="contact-form" class="bform h-contact-form" id="contact-form"  novalidate="novalidate" method="post"><span class="response"></span><div class="row"><div class="col-md-6"><div class="form-group"><label>Nombre o Empresa</label><input type="text" class="form-control" name="name" id="name"></div></div><div class="col-md-6"><div class="form-group"><label>Teléfono</label><input type="text" class="form-control" name="phone" id="phone"></div></div><div class="col-md-12"><div class="form-group"><label>E-mail</label><input type="text" class="form-control" name="email" id="email"></div></div><div class="col-md-12"><div class="form-group"><label>Mensaje</label><textarea class="form-control" rows="5" name="message" id="message"></textarea></div></div><div class="col-md-12"><div class="g-recaptcha" data-sitekey="6Le0DSYUAAAAAM6-6Yw5uOshqMW4w1YFd7tGEbKy" style="width: 100%;max-width: 300px;position: relative;margin: 0 auto;"></div></div><div class="col-md-12"><input type="submit" name="" value="Enviar" class="btn_frm_contact"></div></div></form></div></div><div class="col-sm-3 col-md-3"><div class="box_info_contact"><div class="item"><div class="item_head"><h3>MOVIL </h3></div><div class="item_body"><span class="fa fa-phone"></span><div class="content_info"><a >(+51) 924 144 284</a></div></div></div><div class="item"><div class="item_head"><h3>MÓVIL 2</h3></div><div class="item_body"><span class="fa fa-mobile"></span><div class="content_info"><a >(+51) 930 660 732</a></div></div></div><div class="item"><div class="item_head"><h3>E-MAIL</h3></div><div class="item_body"><span class="fa fa-envelope-o"></span><div class="content_info"><a>medinamedina050590@gmail.com</a></div></div></div><div class="item"><div class="item_head"><h3>HORARIO</h3></div><div class="item_body"><span class="fa fa-map-marker"></span><div class="content_info"><p>Lun - Sab: 8:00am - 5:00pm</p><p>Dom: 8:00am - 1:00pm</p></div></div></div></div></div></div></div></section><?php }
}
?>