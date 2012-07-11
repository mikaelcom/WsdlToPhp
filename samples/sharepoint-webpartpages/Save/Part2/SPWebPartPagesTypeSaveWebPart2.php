<?php
/**
 * Class file for SPWebPartPagesTypeSaveWebPart2
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeSaveWebPart2
 * @date 06/07/2012
 */
class SPWebPartPagesTypeSaveWebPart2 extends SPWebPartPagesWsdlClass
{
	/**
	 * The pageUrl
	 * @var string
	 */
	public $pageUrl;
	/**
	 * The storageKey
	 * @var guid
	 */
	public $storageKey;
	/**
	 * The webPartXml
	 * @var string
	 */
	public $webPartXml;
	/**
	 * The storage
	 * @var Storage
	 */
	public $storage;
	/**
	 * The allowTypeChange
	 * @var boolean
	 */
	public $allowTypeChange;
	/**
	 * Constructor
	 * @param string pageUrl
	 * @param guid storageKey
	 * @param string webPartXml
	 * @param Storage storage
	 * @param boolean allowTypeChange
	 * @return SPWebPartPagesTypeSaveWebPart2
	 */
	public function __construct($_pageUrl = null,$_storageKey = null,$_webPartXml = null,$_storage = null,$_allowTypeChange = null)
	{
		parent::__construct(array('pageUrl'=>$_pageUrl,'storageKey'=>$_storageKey,'webPartXml'=>$_webPartXml,'storage'=>$_storage,'allowTypeChange'=>$_allowTypeChange));
	}
	/**
	 * Set pageUrl
	 * @param string pageUrl
	 * @return string
	 */
	public function setPageUrl($_pageUrl)
	{
		return ($this->pageUrl = $_pageUrl);
	}
	/**
	 * Get pageUrl
	 * @return string
	 */
	public function getPageUrl()
	{
		return $this->pageUrl;
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
	 * Set webPartXml
	 * @param string webPartXml
	 * @return string
	 */
	public function setWebPartXml($_webPartXml)
	{
		return ($this->webPartXml = $_webPartXml);
	}
	/**
	 * Get webPartXml
	 * @return string
	 */
	public function getWebPartXml()
	{
		return $this->webPartXml;
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
	 * Set allowTypeChange
	 * @param boolean allowTypeChange
	 * @return boolean
	 */
	public function setAllowTypeChange($_allowTypeChange)
	{
		return ($this->allowTypeChange = $_allowTypeChange);
	}
	/**
	 * Get allowTypeChange
	 * @return boolean
	 */
	public function getAllowTypeChange()
	{
		return $this->allowTypeChange;
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