<?php
/**
 *
 *
 *
 */

class siteActions extends sfActions {

	public function executeHome() {

	}

	public function executeTeam() {
		$this->team = sfConfig::get("app_site_team");
	}

	public function executeProject() {

	}

	public function executeContact() {

	}

}