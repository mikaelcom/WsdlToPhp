<?php
/**
 * Class file for SPListsTypeCheckOutFile
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeCheckOutFile
 * @date 07/07/2012
 */
class SPListsTypeCheckOutFile extends SPListsWsdlClass
{
	/**
	 * The pageUrl
	 * @var string
	 */
	public $pageUrl;
	/**
	 * The checkoutToLocal
	 * @var string
	 */
	public $checkoutToLocal;
	/**
	 * The lastmodified
	 * @var string
	 */
	public $lastmodified;
	/**
	 * Constructor
	 * @param string pageUrl
	 * @param string checkoutToLocal
	 * @param string lastmodified
	 * @return SPListsTypeCheckOutFile
	 */
	public function __construct($_pageUrl = null,$_checkoutToLocal = null,$_lastmodified = null)
	{
		parent::__construct(array('pageUrl'=>$_pageUrl,'checkoutToLocal'=>$_checkoutToLocal,'lastmodified'=>$_lastmodified));
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
	 * Set checkoutToLocal
	 * @param string checkoutToLocal
	 * @return string
	 */
	public function setCheckoutToLocal($_checkoutToLocal)
	{
		return ($this->checkoutToLocal = $_checkoutToLocal);
	}
	/**
	 * Get checkoutToLocal
	 * @return string
	 */
	public function getCheckoutToLocal()
	{
		return $this->checkoutToLocal;
	}
	/**
	 * Set lastmodified
	 * @param string lastmodified
	 * @return string
	 */
	public function setLastmodified($_lastmodified)
	{
		return ($this->lastmodified = $_lastmodified);
	}
	/**
	 * Get lastmodified
	 * @return string
	 */
	public function getLastmodified()
	{
		return $this->lastmodified;
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