<?php
/**
 * Class file for XiFundDataTypeGetFundExpenseRatioResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundExpenseRatioResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundExpenseRatioResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundExpenseRatioResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundExpenseRatio
	 */
	public $GetFundExpenseRatioResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundExpenseRatio GetFundExpenseRatioResult
	 * @return XiFundDataTypeGetFundExpenseRatioResponse
	 */
	public function __construct($_GetFundExpenseRatioResult = null)
	{
		parent::__construct(array('GetFundExpenseRatioResult'=>$_GetFundExpenseRatioResult));
	}
	/**
	 * Set GetFundExpenseRatioResult
	 * @param FundExpenseRatio GetFundExpenseRatioResult
	 * @return FundExpenseRatio
	 */
	public function setGetFundExpenseRatioResult($_GetFundExpenseRatioResult)
	{
		return ($this->GetFundExpenseRatioResult = $_GetFundExpenseRatioResult);
	}
	/**
	 * Get GetFundExpenseRatioResult
	 * @return XiFundDataTypeFundExpenseRatio
	 */
	public function getGetFundExpenseRatioResult()
	{
		return $this->GetFundExpenseRatioResult;
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