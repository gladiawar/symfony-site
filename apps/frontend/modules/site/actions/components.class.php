<?php
/**
 *
 *
 *
 *
 */

class siteComponents extends sfComponents {

	public function executeMenu() {
		$this->menu = sfConfig::get("app_site_menu", array());
		$this->current = $this->getActionName();
	}

	public function executeLink() {

	}

	public function executeSidebar() {
		$this->items = array();
	}

	public function executeFooter() {

	}

}