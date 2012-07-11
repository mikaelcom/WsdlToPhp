<?php
/**
 * Class file for SPSitedataType_sWebWithTime
 * @date 06/07/2012
 */
/**
 * Class SPSitedataType_sWebWithTime
 * @date 06/07/2012
 */
class SPSitedataType_sWebWithTime extends SPSitedataWsdlClass
{
	/**
	 * The Url
	 * @var string
	 */
	public $Url;
	/**
	 * The LastModified
	 * @var dateTime
	 */
	public $LastModified;
	/**
	 * Constructor
	 * @param string Url
	 * @param dateTime LastModified
	 * @return SPSitedataType_sWebWithTime
	 */
	public function __construct($_Url = null,$_LastModified = null)
	{
		parent::__construct(array('Url'=>$_Url,'LastModified'=>$_LastModified));
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set LastModified
	 * @param dateTime LastModified
	 * @return dateTime
	 */
	public function setLastModified($_LastModified)
	{
		return ($this->LastModified = $_LastModified);
	}
	/**
	 * Get LastModified
	 * @return dateTime
	 */
	public function getLastModified()
	{
		return $this->LastModified;
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