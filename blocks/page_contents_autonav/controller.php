<?php
namespace Concrete\Package\PageContentsAutonav\Block\PageContentsAutonav;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
	public function getBlockTypeDescription() {
		return t('Horizontal nav of page contents');
	}
	
	public function getBlockTypeName() {
		return t('Page Contents Auto-nav');
	}
	
	protected $btTable = 'btPageContentsAutonav';
	
	protected $btInterfaceWidth = "460";
	protected $btInterfaceHeight = "300";
	protected $btWrapperClass = 'ccm-ui';
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = true;
	protected $btCacheBlockOutputLifetime = 0; //until manually updated or cleared
	
	public function view() {
		$b = $this->getBlockObject();
		$bid = $b->getBlockID();
		$this->set('bid',$bid);
	}
	
}
