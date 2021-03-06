<?php
/**
 * Copyright (c) 2016-present, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the code directory.
 */

require_once 'app/Mage.php';
require_once __DIR__.'/../lib/fb.php';

class Facebook_AdsToolbox_Block_Common extends Mage_Core_Block_Template {

  public function getContentType() {
    return 'product';
  }

  public function arryToContentIdString($a) {
    return implode(',', array_map(function ($i) { return '"'.$i.'"'; }, $a));
  }

  public function getCurrency() {
    return Mage::app()->getStore()->getCurrentCurrencyCode();
  }

  public function escapeQuotes($string) {
    return addslashes($string);
  }

  public function getMagentoVersion() {
    return FacebookAdsToolbox::getMagentoVersion();
  }

  public function getPluginVersion() {
    return FacebookAdsToolbox::version();
  }

  public function getFacebookAgentVersion() {
    return 'exmagento-'
      . $this->getMagentoVersion() . '-' . $this->getPluginVersion();
  }
}
