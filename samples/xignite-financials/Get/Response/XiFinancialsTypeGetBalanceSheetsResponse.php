<?php
/**
 * Class file for XiFinancialsTypeGetBalanceSheetsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetBalanceSheetsResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetBalanceSheetsResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetBalanceSheetsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfBalanceSheet
	 */
	public $GetBalanceSheetsResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfBalanceSheet GetBalanceSheetsResult
	 * @return XiFinancialsTypeGetBalanceSheetsResponse
	 */
	public function __construct($_GetBalanceSheetsResult = null)
	{
		parent::__construct(array('GetBalanceSheetsResult'=>new XiFinancialsTypeArrayOfBalanceSheet($_GetBalanceSheetsResult)));
	}
	/**
	 * Set GetBalanceSheetsResult
	 * @param ArrayOfBalanceSheet GetBalanceSheetsResult
	 * @return ArrayOfBalanceSheet
	 */
	public function setGetBalanceSheetsResult($_GetBalanceSheetsResult)
	{
		return ($this->GetBalanceSheetsResult = $_GetBalanceSheetsResult);
	}
	/**
	 * Get GetBalanceSheetsResult
	 * @return XiFinancialsTypeArrayOfBalanceSheet
	 */
	public function getGetBalanceSheetsResult()
	{
		return $this->GetBalanceSheetsResult;
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