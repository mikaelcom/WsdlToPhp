<?php
/**
 * Class file for XiFundDataTypeGetFundFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundFamilyResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundFamilyResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundFamily
	 */
	public $GetFundFamilyResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundFamily GetFundFamilyResult
	 * @return XiFundDataTypeGetFundFamilyResponse
	 */
	public function __construct($_GetFundFamilyResult = null)
	{
		parent::__construct(array('GetFundFamilyResult'=>$_GetFundFamilyResult));
	}
	/**
	 * Set GetFundFamilyResult
	 * @param FundFamily GetFundFamilyResult
	 * @return FundFamily
	 */
	public function setGetFundFamilyResult($_GetFundFamilyResult)
	{
		return ($this->GetFundFamilyResult = $_GetFundFamilyResult);
	}
	/**
	 * Get GetFundFamilyResult
	 * @return XiFundDataTypeFundFamily
	 */
	public function getGetFundFamilyResult()
	{
		return $this->GetFundFamilyResult;
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