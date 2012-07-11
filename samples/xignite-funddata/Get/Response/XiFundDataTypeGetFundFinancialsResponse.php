<?php
/**
 * Class file for XiFundDataTypeGetFundFinancialsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundFinancialsResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundFinancialsResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundFinancialsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundFinancials
	 */
	public $GetFundFinancialsResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundFinancials GetFundFinancialsResult
	 * @return XiFundDataTypeGetFundFinancialsResponse
	 */
	public function __construct($_GetFundFinancialsResult = null)
	{
		parent::__construct(array('GetFundFinancialsResult'=>$_GetFundFinancialsResult));
	}
	/**
	 * Set GetFundFinancialsResult
	 * @param FundFinancials GetFundFinancialsResult
	 * @return FundFinancials
	 */
	public function setGetFundFinancialsResult($_GetFundFinancialsResult)
	{
		return ($this->GetFundFinancialsResult = $_GetFundFinancialsResult);
	}
	/**
	 * Get GetFundFinancialsResult
	 * @return XiFundDataTypeFundFinancials
	 */
	public function getGetFundFinancialsResult()
	{
		return $this->GetFundFinancialsResult;
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