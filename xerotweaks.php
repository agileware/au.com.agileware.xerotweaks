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
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function xerotweaks_civicrm_postInstall() {
  _xerotweaks_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function xerotweaks_civicrm_uninstall() {
  _xerotweaks_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function xerotweaks_civicrm_enable() {
  _xerotweaks_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function xerotweaks_civicrm_disable() {
  _xerotweaks_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function xerotweaks_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _xerotweaks_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function xerotweaks_civicrm_entityTypes(&$entityTypes) {
  _xerotweaks_civix_civicrm_entityTypes($entityTypes);
}

function xerotweaks_civicrm_accountPushAlterMapped($entity, &$data, &$save, &$params) {
  if (method_exists('CRM_Xerotweaks_Map', $entity)) {
    CRM_Xerotweaks_Map::{$entity}($data, $params);
  }
}
