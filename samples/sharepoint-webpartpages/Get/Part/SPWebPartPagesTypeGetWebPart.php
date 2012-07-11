<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPart
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPart
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPart extends SPWebPartPagesWsdlClass
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
	 * Constructor
	 * @param string pageurl
	 * @param guid storageKey
	 * @param Storage storage
	 * @return SPWebPartPagesTypeGetWebPart
	 */
	public function __construct($_pageurl = null,$_storageKey = null,$_storage = null)
	{
		parent::__construct(array('pageurl'=>$_pageurl,'storageKey'=>$_storageKey,'storage'=>$_storage));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>