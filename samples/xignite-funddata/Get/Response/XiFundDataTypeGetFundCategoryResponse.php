<?php
/**
 * Class file for XiFundDataTypeGetFundCategoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundCategoryResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundCategoryResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundCategoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundCategory
	 */
	public $GetFundCategoryResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundCategory GetFundCategoryResult
	 * @return XiFundDataTypeGetFundCategoryResponse
	 */
	public function __construct($_GetFundCategoryResult = null)
	{
		parent::__construct(array('GetFundCategoryResult'=>$_GetFundCategoryResult));
	}
	/**
	 * Set GetFundCategoryResult
	 * @param FundCategory GetFundCategoryResult
	 * @return FundCategory
	 */
	public function setGetFundCategoryResult($_GetFundCategoryResult)
	{
		return ($this->GetFundCategoryResult = $_GetFundCategoryResult);
	}
	/**
	 * Get GetFundCategoryResult
	 * @return XiFundDataTypeFundCategory
	 */
	public function getGetFundCategoryResult()
	{
		return $this->GetFundCategoryResult;
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