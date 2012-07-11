<?php
/**
 * Class file for SPWebPartPagesTypeAddWebPart
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeAddWebPart
 * @date 06/07/2012
 */
class SPWebPartPagesTypeAddWebPart extends SPWebPartPagesWsdlClass
{
	/**
	 * The pageUrl
	 * @var string
	 */
	public $pageUrl;
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
	 * Constructor
	 * @param string pageUrl
	 * @param string webPartXml
	 * @param Storage storage
	 * @return SPWebPartPagesTypeAddWebPart
	 */
	public function __construct($_pageUrl = null,$_webPartXml = null,$_storage = null)
	{
		parent::__construct(array('pageUrl'=>$_pageUrl,'webPartXml'=>$_webPartXml,'storage'=>$_storage));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>