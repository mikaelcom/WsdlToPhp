<?php
/**
 * Class file for XiRatesTypeGetREIBIDResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetREIBIDResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetREIBIDResponse extends XiRatesWsdlClass
{
	/**
	 * The GetREIBIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeREIBIDRate
	 */
	public $GetREIBIDResult;
	/**
	 * Constructor
	 * @param XiRatesTypeREIBIDRate GetREIBIDResult
	 * @return XiRatesTypeGetREIBIDResponse
	 */
	public function __construct($_GetREIBIDResult = null)
	{
		parent::__construct(array('GetREIBIDResult'=>$_GetREIBIDResult));
	}
	/**
	 * Set GetREIBIDResult
	 * @param REIBIDRate GetREIBIDResult
	 * @return REIBIDRate
	 */
	public function setGetREIBIDResult($_GetREIBIDResult)
	{
		return ($this->GetREIBIDResult = $_GetREIBIDResult);
	}
	/**
	 * Get GetREIBIDResult
	 * @return XiRatesTypeREIBIDRate
	 */
	public function getGetREIBIDResult()
	{
		return $this->GetREIBIDResult;
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