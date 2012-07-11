<?php
/**
 * Class file for AmazonAlexaTypeResponseStatus
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeResponseStatus
 * @date 10/07/2012
 */
class AmazonAlexaTypeResponseStatus extends AmazonAlexaWsdlClass
{
	/**
	 * The StatusCode
	 * @var string
	 */
	public $StatusCode;
	/**
	 * Constructor
	 * @param string StatusCode
	 * @return AmazonAlexaTypeResponseStatus
	 */
	public function __construct($_StatusCode = null)
	{
		parent::__construct(array('StatusCode'=>$_StatusCode));
	}
	/**
	 * Set StatusCode
	 * @param string StatusCode
	 * @return string
	 */
	public function setStatusCode($_StatusCode)
	{
		return ($this->StatusCode = $_StatusCode);
	}
	/**
	 * Get StatusCode
	 * @return string
	 */
	public function getStatusCode()
	{
		return $this->StatusCode;
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