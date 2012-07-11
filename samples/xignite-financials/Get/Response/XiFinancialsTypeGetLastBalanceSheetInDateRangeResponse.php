<?php
/**
 * Class file for XiFinancialsTypeGetLastBalanceSheetInDateRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetLastBalanceSheetInDateRangeResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetLastBalanceSheetInDateRangeResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetLastBalanceSheetInDateRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeBalanceSheet
	 */
	public $GetLastBalanceSheetInDateRangeResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeBalanceSheet GetLastBalanceSheetInDateRangeResult
	 * @return XiFinancialsTypeGetLastBalanceSheetInDateRangeResponse
	 */
	public function __construct($_GetLastBalanceSheetInDateRangeResult = null)
	{
		parent::__construct(array('GetLastBalanceSheetInDateRangeResult'=>$_GetLastBalanceSheetInDateRangeResult));
	}
	/**
	 * Set GetLastBalanceSheetInDateRangeResult
	 * @param BalanceSheet GetLastBalanceSheetInDateRangeResult
	 * @return BalanceSheet
	 */
	public function setGetLastBalanceSheetInDateRangeResult($_GetLastBalanceSheetInDateRangeResult)
	{
		return ($this->GetLastBalanceSheetInDateRangeResult = $_GetLastBalanceSheetInDateRangeResult);
	}
	/**
	 * Get GetLastBalanceSheetInDateRangeResult
	 * @return XiFinancialsTypeBalanceSheet
	 */
	public function getGetLastBalanceSheetInDateRangeResult()
	{
		return $this->GetLastBalanceSheetInDateRangeResult;
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