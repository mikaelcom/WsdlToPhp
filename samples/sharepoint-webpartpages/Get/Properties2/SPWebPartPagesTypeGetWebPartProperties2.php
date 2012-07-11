<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartProperties2
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartProperties2
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartProperties2 extends SPWebPartPagesWsdlClass
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
	 * The behavior
	 * @var SPWebServiceBehavior
	 */
	public $behavior;
	/**
	 * Constructor
	 * @param string pageUrl
	 * @param Storage storage
	 * @param SPWebServiceBehavior behavior
	 * @return SPWebPartPagesTypeGetWebPartProperties2
	 */
	public function __construct($_pageUrl = null,$_storage = null,$_behavior = null)
	{
		parent::__construct(array('pageUrl'=>$_pageUrl,'storage'=>$_storage,'behavior'=>$_behavior));
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