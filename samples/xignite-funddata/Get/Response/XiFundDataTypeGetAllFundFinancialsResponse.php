<?php
/**
 * Class file for XiFundDataTypeGetAllFundFinancialsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetAllFundFinancialsResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetAllFundFinancialsResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetAllFundFinancialsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundFinancials
	 */
	public $GetAllFundFinancialsResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundFinancials GetAllFundFinancialsResult
	 * @return XiFundDataTypeGetAllFundFinancialsResponse
	 */
	public function __construct($_GetAllFundFinancialsResult = null)
	{
		parent::__construct(array('GetAllFundFinancialsResult'=>$_GetAllFundFinancialsResult));
	}
	/**
	 * Set GetAllFundFinancialsResult
	 * @param FundFinancials GetAllFundFinancialsResult
	 * @return FundFinancials
	 */
	public function setGetAllFundFinancialsResult($_GetAllFundFinancialsResult)
	{
		return ($this->GetAllFundFinancialsResult = $_GetAllFundFinancialsResult);
	}
	/**
	 * Get GetAllFundFinancialsResult
	 * @return XiFundDataTypeFundFinancials
	 */
	public function getGetAllFundFinancialsResult()
	{
		return $this->GetAllFundFinancialsResult;
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