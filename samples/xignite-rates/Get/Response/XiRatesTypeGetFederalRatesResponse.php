<?php
/**
 * Class file for XiRatesTypeGetFederalRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetFederalRatesResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetFederalRatesResponse extends XiRatesWsdlClass
{
	/**
	 * The GetFederalRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfInterestRate
	 */
	public $GetFederalRatesResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfInterestRate GetFederalRatesResult
	 * @return XiRatesTypeGetFederalRatesResponse
	 */
	public function __construct($_GetFederalRatesResult = null)
	{
		parent::__construct(array('GetFederalRatesResult'=>new XiRatesTypeArrayOfInterestRate($_GetFederalRatesResult)));
	}
	/**
	 * Set GetFederalRatesResult
	 * @param ArrayOfInterestRate GetFederalRatesResult
	 * @return ArrayOfInterestRate
	 */
	public function setGetFederalRatesResult($_GetFederalRatesResult)
	{
		return ($this->GetFederalRatesResult = $_GetFederalRatesResult);
	}
	/**
	 * Get GetFederalRatesResult
	 * @return XiRatesTypeArrayOfInterestRate
	 */
	public function getGetFederalRatesResult()
	{
		return $this->GetFederalRatesResult;
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