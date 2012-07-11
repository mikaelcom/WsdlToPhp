<?php
/**
 * Class file for AmazonAlexaTypeUrlServiceType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeUrlServiceType
 * @date 10/07/2012
 */
class AmazonAlexaTypeUrlServiceType extends AmazonAlexaWsdlClass
{
	/**
	 * The DataUrl
	 * @var AmazonAlexaTypeDataUrl
	 */
	public $DataUrl;
	/**
	 * The NavigableUrl
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $NavigableUrl;
	/**
	 * The Alexa
	 * @var AmazonAlexaTypeAlexa
	 */
	public $Alexa;
	/**
	 * The Asin
	 * @var token
	 */
	public $Asin;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeDataUrl DataUrl
	 * @param AmazonAlexaTypeGenericDataType NavigableUrl
	 * @param AmazonAlexaTypeAlexa Alexa
	 * @param token Asin
	 * @return AmazonAlexaTypeUrlServiceType
	 */
	public function __construct($_DataUrl = null,$_NavigableUrl = null,$_Alexa = null,$_Asin = null)
	{
		parent::__construct(array('DataUrl'=>$_DataUrl,'NavigableUrl'=>$_NavigableUrl,'Alexa'=>$_Alexa,'Asin'=>$_Asin));
	}
	/**
	 * Set DataUrl
	 * @param DataUrl DataUrl
	 * @return DataUrl
	 */
	public function setDataUrl($_DataUrl)
	{
		return ($this->DataUrl = $_DataUrl);
	}
	/**
	 * Get DataUrl
	 * @return AmazonAlexaTypeDataUrl
	 */
	public function getDataUrl()
	{
		return $this->DataUrl;
	}
	/**
	 * Set NavigableUrl
	 * @param GenericDataType NavigableUrl
	 * @return GenericDataType
	 */
	public function setNavigableUrl($_NavigableUrl)
	{
		return ($this->NavigableUrl = $_NavigableUrl);
	}
	/**
	 * Get NavigableUrl
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getNavigableUrl()
	{
		return $this->NavigableUrl;
	}
	/**
	 * Set Alexa
	 * @param Alexa Alexa
	 * @return Alexa
	 */
	public function setAlexa($_Alexa)
	{
		return ($this->Alexa = $_Alexa);
	}
	/**
	 * Get Alexa
	 * @return AmazonAlexaTypeAlexa
	 */
	public function getAlexa()
	{
		return $this->Alexa;
	}
	/**
	 * Set Asin
	 * @param token Asin
	 * @return token
	 */
	public function setAsin($_Asin)
	{
		return ($this->Asin = $_Asin);
	}
	/**
	 * Get Asin
	 * @return token
	 */
	public function getAsin()
	{
		return $this->Asin;
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