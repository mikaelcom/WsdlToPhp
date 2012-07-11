<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartProperties
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartProperties
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartProperties extends SPWebPartPagesWsdlClass
{
	/**
	 * The pageUrl
	 * @var string
	 */
	public $pageUrl;
	/**
	 * The storage
	 * @var Storage
	 */
	public $storage;
	/**
	 * Constructor
	 * @param string pageUrl
	 * @param Storage storage
	 * @return SPWebPartPagesTypeGetWebPartProperties
	 */
	public function __construct($_pageUrl = null,$_storage = null)
	{
		parent::__construct(array('pageUrl'=>$_pageUrl,'storage'=>$_storage));
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