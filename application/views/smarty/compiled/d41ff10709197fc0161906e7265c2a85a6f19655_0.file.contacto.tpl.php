<?php /* Smarty version 3.1.27, created on 2022-03-14 23:33:45
         compiled from "/home/logosper/public_html/plantillas/new/plantilla_7/application/views/web/pagina/contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1650952594622ffb09107430_85520488%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd41ff10709197fc0161906e7265c2a85a6f19655' => 
    array (
      0 => '/home/logosper/public_html/plantillas/new/plantilla_7/application/views/web/pagina/contacto.tpl',
      1 => 1539719302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650952594622ffb09107430_85520488',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_622ffb0922e3f3_64732068',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_622ffb0922e3f3_64732068')) {
function content_622ffb0922e3f3_64732068 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1650952594622ffb09107430_85520488';
?>
<section class="sect_title_interna" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/fondo/fondo-nosotros.jpg);"><div class="container"><div class="row row_height"><div class="col-lg-12"><h1>CONTÁCTANOS</h1></div></div></div></section><section class="sect_contact"><div class="container"><div class="row"><div class="col-sm-9 col-md-9"><!--div class="title_contact"><h1>CONTÁCTANOS</h1><h5>Envíanos tu consulta y con gusto te atenderemos. Recuerda que es necesario llenar todos los campos.</h5></div--><div class="form_contact"><form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" name="contact-form" class="bform h-contact-form" id="contact-form"  novalidate="novalidate" method="post"><span class="response"></span><div class="row"><div class="col-md-6"><div class="form-group"><label>Nombre o Empresa</label><input type="text" class="form-control" name="name" id="name"></div></div><div class="col-md-6"><div class="form-group"><label>Teléfono</label><input type="text" class="form-control" name="phone" id="phone"></div></div><div class="col-md-12"><div class="form-group"><label>E-mail</label><input type="text" class="form-control" name="email" id="email"></div></div><div class="col-md-12"><div class="form-group"><label>Mensaje</label><textarea class="form-control" rows="5" name="message" id="message"></textarea></div></div><div class="col-md-12"><div class="g-recaptcha" data-sitekey="6Le0DSYUAAAAAM6-6Yw5uOshqMW4w1YFd7tGEbKy" style="width: 100%;max-width: 300px;position: relative;margin: 0 auto;"></div></div><div class="col-md-12"><input type="submit" name="" value="Enviar" class="btn_frm_contact"></div></div></form></div></div><div class="col-sm-3 col-md-3"><div class="box_info_contact"><div class="item"><div class="item_head"><h3>FIJO</h3></div><div class="item_body"><span class="fa fa-phone"></span><div class="content_info"><a href="tel:015237734">(01) 523 7734</a></div></div></div><div class="item"><div class="item_head"><h3>MÓVIL</h3></div><div class="item_body"><span class="fa fa-mobile"></span><div class="content_info"><a href="tel:51993765495">(+51) 993 765 495</a></div></div></div><div class="item"><div class="item_head"><h3>E-MAIL</h3></div><div class="item_body"><span class="fa fa-envelope-o"></span><div class="content_info"><a href="mailto:ventas&#64;exportando-online&#46;com"> ventas&#64;exportando-online&#46;com</a></div></div></div><div class="item"><div class="item_head"><h3>HORARIO</h3></div><div class="item_body"><span class="fa fa-map-marker"></span><div class="content_info"><p>Lun - Vie: 8:00am - 5:00pm</p><p>Sab: 9:00am - 2:00pm</p></div></div></div></div></div></div></div></section><?php }
}
?>