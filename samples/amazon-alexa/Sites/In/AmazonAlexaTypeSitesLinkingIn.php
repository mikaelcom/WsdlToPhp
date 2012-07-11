<?php
/**
 * Class file for AmazonAlexaTypeSitesLinkingIn
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeSitesLinkingIn
 * @date 10/07/2012
 */
class AmazonAlexaTypeSitesLinkingIn extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeSitesLinkingInRequest
	 */
	public $Request;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeSitesLinkingInRequest Request
	 * @return AmazonAlexaTypeSitesLinkingIn
	 */
	public function __construct($_Request = null)
	{
		parent::__construct(array('Request'=>$_Request));
	}
	/**
	 * Set Request
	 * @param SitesLinkingInRequest Request
	 * @return SitesLinkingInRequest
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeSitesLinkingInRequest
	 */
	public function getRequest()
	{
		return $this->Request;
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