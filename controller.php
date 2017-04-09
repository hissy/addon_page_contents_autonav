<?php
namespace Concrete\Package\PageContentsAutonav;

use Concrete\Core\Block\BlockType\BlockType;
use Concrete\Core\Package\Package;

class Controller extends Package
{
	protected $pkgHandle = 'page_contents_autonav';
	protected $appVersionRequired = '8.1.0';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Horizontal nav of page contents");
	}
	
	public function getPackageName() {
		return t("Page Contents Auto-nav");
	}
	
	public function install() {
		$pkg = parent::install();
		BlockType::installBlockType('page_contents_autonav', $pkg);
	}
}