<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class PageContentsAutonavPackage extends Package {

	protected $pkgHandle = 'page_contents_autonav';
	protected $appVersionRequired = '5.6.0';
	protected $pkgVersion = '0.1';
	
	public function getPackageDescription() {
		return t("Horizontal nav of page contents");
	}
	
	public function getPackageName() {
		return t("Page Contents Auto-nav");
	}
	
	public function install() {
		$pkg = parent::install();
		BlockType::installBlockTypeFromPackage('page_contents_autonav',$pkg);
	}

}