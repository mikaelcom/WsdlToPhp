<?php
/**
 * Class file for XiFinancialsTypeGetBalanceSheetResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetBalanceSheetResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetBalanceSheetResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetBalanceSheetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeBalanceSheet
	 */
	public $GetBalanceSheetResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeBalanceSheet GetBalanceSheetResult
	 * @return XiFinancialsTypeGetBalanceSheetResponse
	 */
	public function __construct($_GetBalanceSheetResult = null)
	{
		parent::__construct(array('GetBalanceSheetResult'=>$_GetBalanceSheetResult));
	}
	/**
	 * Set GetBalanceSheetResult
	 * @param BalanceSheet GetBalanceSheetResult
	 * @return BalanceSheet
	 */
	public function setGetBalanceSheetResult($_GetBalanceSheetResult)
	{
		return ($this->GetBalanceSheetResult = $_GetBalanceSheetResult);
	}
	/**
	 * Get GetBalanceSheetResult
	 * @return XiFinancialsTypeBalanceSheet
	 */
	public function getGetBalanceSheetResult()
	{
		return $this->GetBalanceSheetResult;
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