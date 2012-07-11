<?php
/**
 * Class file for AmazonFPSTypeVerifySignature
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeVerifySignature
 * @date 10/07/2012
 */
class AmazonFPSTypeVerifySignature extends AmazonFPSWsdlClass
{
	/**
	 * The UrlEndPoint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $UrlEndPoint;
	/**
	 * The HttpParameters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $HttpParameters;
	/**
	 * Constructor
	 * @param string UrlEndPoint
	 * @param string HttpParameters
	 * @return AmazonFPSTypeVerifySignature
	 */
	public function __construct($_UrlEndPoint = null,$_HttpParameters = null)
	{
		parent::__construct(array('UrlEndPoint'=>$_UrlEndPoint,'HttpParameters'=>$_HttpParameters));
	}
	/**
	 * Set UrlEndPoint
	 * @param string UrlEndPoint
	 * @return string
	 */
	public function setUrlEndPoint($_UrlEndPoint)
	{
		return ($this->UrlEndPoint = $_UrlEndPoint);
	}
	/**
	 * Get UrlEndPoint
	 * @return string
	 */
	public function getUrlEndPoint()
	{
		return $this->UrlEndPoint;
	}
	/**
	 * Set HttpParameters
	 * @param string HttpParameters
	 * @return string
	 */
	public function setHttpParameters($_HttpParameters)
	{
		return ($this->HttpParameters = $_HttpParameters);
	}
	/**
	 * Get HttpParameters
	 * @return string
	 */
	public function getHttpParameters()
	{
		return $this->HttpParameters;
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