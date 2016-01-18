<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * xForms module
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         xforms
 * @since           1.30
 * @author          Xoops Development Team
 */
$myDirName = basename(__DIR__);
$modversion['name']           = _MI_XFORMS_NAME;
$modversion['version']        = "2.00";
$modversion['description']    = _MI_XFORMS_DESC;
$modversion['author']         = "Brandycoke Productions, Dylian Melgert, Juan Garcés";
$modversion['credits']        = "XOOPS Development Team: Black_beard, Cesag, Philou, Mamba";
$modversion['help']           = 'page=help';
$modversion['license']        = 'GNU GPL 2.0 or later';
$modversion['license_url']    = "www.gnu.org/licenses/gpl-2.0.html";
$modversion['official']       = 0;
$modversion['image']          = "assets/images/logo.png";
$modversion['dirname']        = $myDirName;
$modversion['dirmoduleadmin'] = '/Frameworks/moduleclasses/moduleadmin';
$modversion['icons16']        = '../../Frameworks/moduleclasses/icons/16';
$modversion['icons32']        = '../../Frameworks/moduleclasses/icons/32';

//about
$modversion["module_status"]       = "Alpha 1";
$modversion['release_date']        = '2014/09/29';
$modversion["module_website_url"]  = "http://xoops.org/";
$modversion["module_website_name"] = "XOOPS";
$modversion['min_php']             = "5.5";
$modversion['min_xoops']           = "2.5.7.2";
$modversion['min_admin']           = "1.1";
$modversion['min_db']              = array("mysql" => "5.0.7", "mysqli" => "5.0.7");

// Install, update, unistall
$modversion['onInstall'] = 'include/module.php';
$modversion['onUpdate']  = 'include/module.php';
//$modversion['onUninstall'] = 'include/module.php';

// Sql file (must contain sql generated by phpMyAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "xforms_form";
$modversion['tables'][1] = "xforms_element";
$modversion['tables'][2] = "xforms_userdata";

// Admin things
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu']  = "admin/menu.php";

// Menu content in main menu block
$modversion['hasMain'] = 1;

$modversion['onInstall']   = 'include/functions.php';
$modversion['system_menu'] = 1;

// Templates
$modversion['templates'][1]['file']        = 'xforms_index.tpl';
$modversion['templates'][1]['description'] = _MI_XFORMS_TMPL_MAIN_DESC;
$modversion['templates'][2]['file']        = 'xforms_form.tpl';
$modversion['templates'][2]['description'] = _MI_XFORMS_TMPL_FORM_DESC;
$modversion['templates'][3]['file']        = 'xforms_form_poll.tpl';
$modversion['templates'][3]['description'] = _MI_XFORMS_TMPL_FORM_DESC;
$modversion['templates'][4]['file']        = 'xforms_error.tpl';
$modversion['templates'][4]['description'] = _MI_XFORMS_TMPL_ERROR_DESC;

//	Module Configs
// $xoopsModuleConfig['t_width']
$i = 0;
$modversion['config'][$i]['name']        = 't_width';
$modversion['config'][$i]['title']       = '_MI_XFORMS_TEXT_WIDTH';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '35';

// $xoopsModuleConfig['t_max']
++$i;
$modversion['config'][$i]['name']        = 't_max';
$modversion['config'][$i]['title']       = '_MI_XFORMS_TEXT_MAX';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '255';

// $xoopsModuleConfig['ta_rows']
++$i;
$modversion['config'][$i]['name']        = 'ta_rows';
$modversion['config'][$i]['title']       = '_MI_XFORMS_TAREA_ROWS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '5';

// $xoopsModuleConfig['ta_cols']
++$i;
$modversion['config'][$i]['name']        = 'ta_cols';
$modversion['config'][$i]['title']       = '_MI_XFORMS_TAREA_COLS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '35';

// $xoopsModuleConfig['moreinfo']
++$i;
$modversion['config'][$i]['name']        = 'moreinfo';
$modversion['config'][$i]['title']       = '_MI_XFORMS_MOREINFO';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select_multi';
$modversion['config'][$i]['valuetype']   = 'array';
$modversion['config'][$i]['default']     = array('user', 'ip', 'agent');
$modversion['config'][$i]['options']     = array(_MI_XFORMS_MOREINFO_USER => 'user', _MI_XFORMS_MOREINFO_IP => 'ip', _MI_XFORMS_MOREINFO_AGENT => 'agent', _MI_XFORMS_MOREINFO_FORM => 'form');

// Select Default Country
$modversion['config'][$i]['name']        = "mycountry";
$modversion['config'][$i]['title']       = '_MI_XFORMS_ELE_SELECT_CTRY_DEFAULT';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = '-----';
xoops_load('XoopsLists');
$modversion['config'][$i]['options'] = array_flip(XoopsLists::getCountryList());

// $xoopsModuleConfig['mail_charset']
++$i;
$modversion['config'][$i]['name']        = 'mail_charset';
$modversion['config'][$i]['title']       = '_MI_XFORMS_MAIL_CHARSET';
$modversion['config'][$i]['description'] = '_MI_XFORMS_MAIL_CHARSET_DESC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = _CHARSET;

// $xoopsModuleConfig['prefix']
++$i;
$modversion['config'][$i]['name']        = 'prefix';
$modversion['config'][$i]['title']       = '_MI_XFORMS_PREFIX';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = '';

// $xoopsModuleConfig['suffix']
++$i;
$modversion['config'][$i]['name']        = 'suffix';
$modversion['config'][$i]['title']       = '_MI_XFORMS_SUFFIX';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = '*';

// $xoopsModuleConfig['dtitle']
++$i;
$modversion['config'][$i]['name']        = 'dtitle';
$modversion['config'][$i]['title']       = '_MI_XFORMS_DEFAULT_TITLE';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = _MI_XFORMS_DEFAULT_TITLE_DESC;

// $xoopsModuleConfig['intro']
++$i;
$modversion['config'][$i]['name']        = 'intro';
$modversion['config'][$i]['title']       = '_MI_XFORMS_INTRO';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textarea';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = _MI_XFORMS_INTRO_DEFAULT;

// $xoopsModuleConfig['noform']
++$i;
$modversion['config'][$i]['name']        = 'noform';
$modversion['config'][$i]['title']       = '_MI_XFORMS_NOFORM';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textarea';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = _MI_XFORMS_NOFORM_DEFAULT;

// $xoopsModuleConfig['global']
++$i;
$modversion['config'][$i]['name']        = 'global';
$modversion['config'][$i]['title']       = '_MI_XFORMS_GLOBAL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textarea';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = _MI_XFORMS_GLOBAL_DEFAULT;

// $xoopsModuleConfig['uploaddir']
++$i;
$modversion['config'][$i]['name']        = 'uploaddir';
$modversion['config'][$i]['title']       = '_MI_XFORMS_UPLOADDIR';
$modversion['config'][$i]['description'] = '_MI_XFORMS_UPLOADDIR_DESC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = "XOOPS_VAR_PATH" . '/uploads/' . $myDirName;

// $xoopsModuleConfig['captcha']
++$i;
$modversion['config'][$i]['name']        = 'captcha';
$modversion['config'][$i]['title']       = '_MI_XFORMS_CAPTCHA';
$modversion['config'][$i]['description'] = '_MI_XFORMS_CAPTCHADSC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;

// $xoopsModuleConfig['showforms']
++$i;
$modversion['config'][$i]['name']        = 'showforms';
$modversion['config'][$i]['title']       = '_MI_XFORMS_SHOWFORMS';
$modversion['config'][$i]['description'] = '_MI_XFORMS_SHOWFORMS_DESC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 0;
