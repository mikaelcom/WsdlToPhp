<?php
/**
 * Class file for AmazonAlexaTypePhoneNumbers
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypePhoneNumbers
 * @date 10/07/2012
 */
class AmazonAlexaTypePhoneNumbers extends AmazonAlexaWsdlClass
{
	/**
	 * The PhoneNumber
	 * @var AmazonAlexaTypePhoneNumberType
	 */
	public $PhoneNumber;
	/**
	 * Constructor
	 * @param AmazonAlexaTypePhoneNumberType PhoneNumber
	 * @return AmazonAlexaTypePhoneNumbers
	 */
	public function __construct($_PhoneNumber = null)
	{
		parent::__construct(array('PhoneNumber'=>$_PhoneNumber));
	}
	/**
	 * Set PhoneNumber
	 * @param PhoneNumberType PhoneNumber
	 * @return PhoneNumberType
	 */
	public function setPhoneNumber($_PhoneNumber)
	{
		return ($this->PhoneNumber = $_PhoneNumber);
	}
	/**
	 * Get PhoneNumber
	 * @return AmazonAlexaTypePhoneNumberType
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
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