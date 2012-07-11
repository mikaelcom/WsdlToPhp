<?php
/**
 * Class file for XiRatesTypeGetFHLBankRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetFHLBankRatesResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetFHLBankRatesResponse extends XiRatesWsdlClass
{
	/**
	 * The GetFHLBankRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfFHLBankRate
	 */
	public $GetFHLBankRatesResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfFHLBankRate GetFHLBankRatesResult
	 * @return XiRatesTypeGetFHLBankRatesResponse
	 */
	public function __construct($_GetFHLBankRatesResult = null)
	{
		parent::__construct(array('GetFHLBankRatesResult'=>new XiRatesTypeArrayOfFHLBankRate($_GetFHLBankRatesResult)));
	}
	/**
	 * Set GetFHLBankRatesResult
	 * @param ArrayOfFHLBankRate GetFHLBankRatesResult
	 * @return ArrayOfFHLBankRate
	 */
	public function setGetFHLBankRatesResult($_GetFHLBankRatesResult)
	{
		return ($this->GetFHLBankRatesResult = $_GetFHLBankRatesResult);
	}
	/**
	 * Get GetFHLBankRatesResult
	 * @return XiRatesTypeArrayOfFHLBankRate
	 */
	public function getGetFHLBankRatesResult()
	{
		return $this->GetFHLBankRatesResult;
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