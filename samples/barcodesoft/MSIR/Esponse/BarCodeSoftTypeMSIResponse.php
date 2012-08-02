<?php
/**
 * Class file for BarCodeSoftTypeMSIResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeMSIResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeMSIResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The MSIResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $MSIResult;
	/**
	 * Constructor
	 * @param base64Binary MSIResult
	 * @return BarCodeSoftTypeMSIResponse
	 */
	public function __construct($_MSIResult = null)
	{
		parent::__construct(array('MSIResult'=>$_MSIResult));
	}
	/**
	 * Set MSIResult
	 * @param base64Binary MSIResult
	 * @return base64Binary
	 */
	public function setMSIResult($_MSIResult)
	{
		return ($this->MSIResult = $_MSIResult);
	}
	/**
	 * Get MSIResult
	 * @return base64Binary
	 */
	public function getMSIResult()
	{
		return $this->MSIResult;
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