<?php
/**
 * Class file for XiRatesTypeGetRateFamilyTableResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateFamilyTableResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRateFamilyTableResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRateFamilyTableResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTable
	 */
	public $GetRateFamilyTableResult;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTable GetRateFamilyTableResult
	 * @return XiRatesTypeGetRateFamilyTableResponse
	 */
	public function __construct($_GetRateFamilyTableResult = null)
	{
		parent::__construct(array('GetRateFamilyTableResult'=>$_GetRateFamilyTableResult));
	}
	/**
	 * Set GetRateFamilyTableResult
	 * @param RateTable GetRateFamilyTableResult
	 * @return RateTable
	 */
	public function setGetRateFamilyTableResult($_GetRateFamilyTableResult)
	{
		return ($this->GetRateFamilyTableResult = $_GetRateFamilyTableResult);
	}
	/**
	 * Get GetRateFamilyTableResult
	 * @return XiRatesTypeRateTable
	 */
	public function getGetRateFamilyTableResult()
	{
		return $this->GetRateFamilyTableResult;
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