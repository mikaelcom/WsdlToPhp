<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPart2
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPart2
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPart2 extends SPWebPartPagesWsdlClass
{
	/**
	 * The pageurl
	 * @var string
	 */
	public $pageurl;
	/**
	 * The storageKey
	 * @var guid
	 */
	public $storageKey;
	/**
	 * The storage
	 * @var Storage
	 */
	public $storage;
	/**
	 * The behavior
	 * @var SPWebServiceBehavior
	 */
	public $behavior;
	/**
	 * Constructor
	 * @param string pageurl
	 * @param guid storageKey
	 * @param Storage storage
	 * @param SPWebServiceBehavior behavior
	 * @return SPWebPartPagesTypeGetWebPart2
	 */
	public function __construct($_pageurl = null,$_storageKey = null,$_storage = null,$_behavior = null)
	{
		parent::__construct(array('pageurl'=>$_pageurl,'storageKey'=>$_storageKey,'storage'=>$_storage,'behavior'=>$_behavior));
	}
	/**
	 * Set pageurl
	 * @param string pageurl
	 * @return string
	 */
	public function setPageurl($_pageurl)
	{
		return ($this->pageurl = $_pageurl);
	}
	/**
	 * Get pageurl
	 * @return string
	 */
	public function getPageurl()
	{
		return $this->pageurl;
	}
	/**
	 * Set storageKey
	 * @param guid storageKey
	 * @return guid
	 */
	public function setStorageKey($_storageKey)
	{
		return ($this->storageKey = $_storageKey);
	}
	/**
	 * Get storageKey
	 * @return guid
	 */
	public function getStorageKey()
	{
		return $this->storageKey;
	}
	/**
	 * Set storage
	 * @param Storage storage
	 * @return Storage
	 */
	public function setStorage($_storage)
	{
		return ($this->storage = $_storage);
	}
	/**
	 * Get storage
	 * @return Storage
	 */
	public function getStorage()
	{
		return $this->storage;
	}
	/**
	 * Set behavior
	 * @param SPWebServiceBehavior behavior
	 * @return SPWebServiceBehavior
	 */
	public function setBehavior($_behavior)
	{
		return ($this->behavior = $_behavior);
	}
	/**
	 * Get behavior
	 * @return SPWebServiceBehavior
	 */
	public function getBehavior()
	{
		return $this->behavior;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>