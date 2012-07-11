<?php
/**
 * Class file for XiMoneyMarketsTypeGetSwapRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetSwapRateFamilyResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetSwapRateFamilyResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetSwapRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeArrayOfSwapRate
	 */
	public $GetSwapRateFamilyResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeArrayOfSwapRate GetSwapRateFamilyResult
	 * @return XiMoneyMarketsTypeGetSwapRateFamilyResponse
	 */
	public function __construct($_GetSwapRateFamilyResult = null)
	{
		parent::__construct(array('GetSwapRateFamilyResult'=>new XiMoneyMarketsTypeArrayOfSwapRate($_GetSwapRateFamilyResult)));
	}
	/**
	 * Set GetSwapRateFamilyResult
	 * @param ArrayOfSwapRate GetSwapRateFamilyResult
	 * @return ArrayOfSwapRate
	 */
	public function setGetSwapRateFamilyResult($_GetSwapRateFamilyResult)
	{
		return ($this->GetSwapRateFamilyResult = $_GetSwapRateFamilyResult);
	}
	/**
	 * Get GetSwapRateFamilyResult
	 * @return XiMoneyMarketsTypeArrayOfSwapRate
	 */
	public function getGetSwapRateFamilyResult()
	{
		return $this->GetSwapRateFamilyResult;
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