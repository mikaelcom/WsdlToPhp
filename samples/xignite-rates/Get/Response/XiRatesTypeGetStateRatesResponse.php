<?php
/**
 * Class file for XiRatesTypeGetStateRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetStateRatesResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetStateRatesResponse extends XiRatesWsdlClass
{
	/**
	 * The GetStateRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfInterestRate
	 */
	public $GetStateRatesResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfInterestRate GetStateRatesResult
	 * @return XiRatesTypeGetStateRatesResponse
	 */
	public function __construct($_GetStateRatesResult = null)
	{
		parent::__construct(array('GetStateRatesResult'=>new XiRatesTypeArrayOfInterestRate($_GetStateRatesResult)));
	}
	/**
	 * Set GetStateRatesResult
	 * @param ArrayOfInterestRate GetStateRatesResult
	 * @return ArrayOfInterestRate
	 */
	public function setGetStateRatesResult($_GetStateRatesResult)
	{
		return ($this->GetStateRatesResult = $_GetStateRatesResult);
	}
	/**
	 * Get GetStateRatesResult
	 * @return XiRatesTypeArrayOfInterestRate
	 */
	public function getGetStateRatesResult()
	{
		return $this->GetStateRatesResult;
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