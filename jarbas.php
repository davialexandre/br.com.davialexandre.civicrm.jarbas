<?php

require_once 'jarbas.civix.php';
use CRM_Jarbas_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function jarbas_civicrm_config(&$config) {
  _jarbas_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function jarbas_civicrm_xmlMenu(&$files) {
  _jarbas_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function jarbas_civicrm_install() {
  _jarbas_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function jarbas_civicrm_postInstall() {
  _jarbas_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function jarbas_civicrm_uninstall() {
  _jarbas_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function jarbas_civicrm_enable() {
  _jarbas_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function jarbas_civicrm_disable() {
  _jarbas_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function jarbas_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _jarbas_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_pageRun().
 *
 * @param \CRM_Core_Page $page
 */
function jarbas_civicrm_pageRun($page) {
  _jarbas_civicrm_addResources();
}

/**
 * Implements hook_civicrm_buildForm().
 *
 * @param string $formName
 * @param \CRM_Core_Form $form
 */
function jarbas_civicrm_buildForm($formName, $form) {
  _jarbas_civicrm_addResources();
}

/**
 * Adds extension resources (JS and CSS files) to Civi
 */
function _jarbas_civicrm_addResources() {
  Civi::resources()
      ->addStyleFile(E::LONG_NAME, 'css/jarbas.css')
      ->addScriptFile(E::LONG_NAME, 'js/mousetrap.min.js')
      ->addScriptFile(E::LONG_NAME, 'js/mousetrap-bindings.js');

  CRM_Core_Region::instance('page-body')->add(array(
    'template' => 'CRM/Jarbas/QuickActions.tpl',
  ));
}
