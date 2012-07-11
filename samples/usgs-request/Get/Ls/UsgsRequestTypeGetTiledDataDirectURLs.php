<?php
/**
 * Class file for UsgsRequestTypeGetTiledDataDirectURLs
 * @date 08/07/2012
 */
/**
 * Class UsgsRequestTypeGetTiledDataDirectURLs
 * @date 08/07/2012
 */
class UsgsRequestTypeGetTiledDataDirectURLs extends UsgsRequestWsdlClass
{
	/**
	 * The requestInfoXml
	 * @var string
	 */
	public $requestInfoXml;
	/**
	 * Constructor
	 * @param string requestInfoXml
	 * @return UsgsRequestTypeGetTiledDataDirectURLs
	 */
	public function __construct($_requestInfoXml = null)
	{
		parent::__construct(array('requestInfoXml'=>$_requestInfoXml));
	}
	/**
	 * Set requestInfoXml
	 * @param string requestInfoXml
	 * @return string
	 */
	public function setRequestInfoXml($_requestInfoXml)
	{
		return ($this->requestInfoXml = $_requestInfoXml);
	}
	/**
	 * Get requestInfoXml
	 * @return string
	 */
	public function getRequestInfoXml()
	{
		return $this->requestInfoXml;
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