<?php
/**
 *
 *
 *
 */

class siteActions extends sfActions {

	public function executeHome() {
		$this->content = sfConfig::get("app_content_home", "plop");
	}

	public function executeTeam() {
		$this->team = sfConfig::get("app_site_team");
	}

	public function executeProject() {

	}

	public function executeContact() {

	}

}