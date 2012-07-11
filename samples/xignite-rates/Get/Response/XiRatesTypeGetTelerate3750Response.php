<?php
/**
 * Class file for XiRatesTypeGetTelerate3750Response
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetTelerate3750Response
 * @date 08/07/2012
 */
class XiRatesTypeGetTelerate3750Response extends XiRatesWsdlClass
{
	/**
	 * The GetTelerate3750Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeTelerate3750
	 */
	public $GetTelerate3750Result;
	/**
	 * Constructor
	 * @param XiRatesTypeTelerate3750 GetTelerate3750Result
	 * @return XiRatesTypeGetTelerate3750Response
	 */
	public function __construct($_GetTelerate3750Result = null)
	{
		parent::__construct(array('GetTelerate3750Result'=>$_GetTelerate3750Result));
	}
	/**
	 * Set GetTelerate3750Result
	 * @param Telerate3750 GetTelerate3750Result
	 * @return Telerate3750
	 */
	public function setGetTelerate3750Result($_GetTelerate3750Result)
	{
		return ($this->GetTelerate3750Result = $_GetTelerate3750Result);
	}
	/**
	 * Get GetTelerate3750Result
	 * @return XiRatesTypeTelerate3750
	 */
	public function getGetTelerate3750Result()
	{
		return $this->GetTelerate3750Result;
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