<?php
/**
 * Class file for SPWebPartPagesTypeAddWebPartToZone
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeAddWebPartToZone
 * @date 06/07/2012
 */
class SPWebPartPagesTypeAddWebPartToZone extends SPWebPartPagesWsdlClass
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
	 * The zoneId
	 * @var string
	 */
	public $zoneId;
	/**
	 * The zoneIndex
	 * @var int
	 */
	public $zoneIndex;
	/**
	 * Constructor
	 * @param string pageUrl
	 * @param string webPartXml
	 * @param Storage storage
	 * @param string zoneId
	 * @param int zoneIndex
	 * @return SPWebPartPagesTypeAddWebPartToZone
	 */
	public function __construct($_pageUrl = null,$_webPartXml = null,$_storage = null,$_zoneId = null,$_zoneIndex = null)
	{
		parent::__construct(array('pageUrl'=>$_pageUrl,'webPartXml'=>$_webPartXml,'storage'=>$_storage,'zoneId'=>$_zoneId,'zoneIndex'=>$_zoneIndex));
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
	 * Set zoneId
	 * @param string zoneId
	 * @return string
	 */
	public function setZoneId($_zoneId)
	{
		return ($this->zoneId = $_zoneId);
	}
	/**
	 * Get zoneId
	 * @return string
	 */
	public function getZoneId()
	{
		return $this->zoneId;
	}
	/**
	 * Set zoneIndex
	 * @param int zoneIndex
	 * @return int
	 */
	public function setZoneIndex($_zoneIndex)
	{
		return ($this->zoneIndex = $_zoneIndex);
	}
	/**
	 * Get zoneIndex
	 * @return int
	 */
	public function getZoneIndex()
	{
		return $this->zoneIndex;
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