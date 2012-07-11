<?php
/**
 * Class file for AmazonAlexaTypeAlexaBatch
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeAlexaBatch
 * @date 10/07/2012
 */
class AmazonAlexaTypeAlexaBatch extends AmazonAlexaWsdlClass
{
	/**
	 * The Alexa
	 * @var AmazonAlexaTypeAlexa
	 */
	public $Alexa;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeAlexa Alexa
	 * @return AmazonAlexaTypeAlexaBatch
	 */
	public function __construct($_Alexa = null)
	{
		parent::__construct(array('Alexa'=>$_Alexa));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>