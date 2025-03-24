<?php

require_once 'xerotweaks.civix.php';
use CRM_Xerotweaks_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function xerotweaks_civicrm_config(&$config) {
  _xerotweaks_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function xerotweaks_civicrm_install() {
  _xerotweaks_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function xerotweaks_civicrm_enable() {
  _xerotweaks_civix_civicrm_enable();
}

function xerotweaks_civicrm_accountPushAlterMapped($entity, &$data, &$save, &$params) {
  if (method_exists('CRM_Xerotweaks_Map', $entity)) {
    CRM_Xerotweaks_Map::{$entity}($data, $params);
  }
}
