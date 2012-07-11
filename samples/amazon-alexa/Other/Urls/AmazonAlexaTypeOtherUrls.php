<?php
/**
 * Class file for AmazonAlexaTypeOtherUrls
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeOtherUrls
 * @date 10/07/2012
 */
class AmazonAlexaTypeOtherUrls extends AmazonAlexaWsdlClass
{
	/**
	 * The OtherUrl
	 * @var AmazonAlexaTypeOtherUrl
	 */
	public $OtherUrl;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeOtherUrl OtherUrl
	 * @return AmazonAlexaTypeOtherUrls
	 */
	public function __construct($_OtherUrl = null)
	{
		parent::__construct(array('OtherUrl'=>$_OtherUrl));
	}
	/**
	 * Set OtherUrl
	 * @param OtherUrl OtherUrl
	 * @return OtherUrl
	 */
	public function setOtherUrl($_OtherUrl)
	{
		return ($this->OtherUrl = $_OtherUrl);
	}
	/**
	 * Get OtherUrl
	 * @return AmazonAlexaTypeOtherUrl
	 */
	public function getOtherUrl()
	{
		return $this->OtherUrl;
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