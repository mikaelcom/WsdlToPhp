<?php
/**
 * Class file for XiFundDataTypeGetFundInceptionDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundInceptionDateResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundInceptionDateResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundInceptionDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundInceptionDate
	 */
	public $GetFundInceptionDateResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundInceptionDate GetFundInceptionDateResult
	 * @return XiFundDataTypeGetFundInceptionDateResponse
	 */
	public function __construct($_GetFundInceptionDateResult = null)
	{
		parent::__construct(array('GetFundInceptionDateResult'=>$_GetFundInceptionDateResult));
	}
	/**
	 * Set GetFundInceptionDateResult
	 * @param FundInceptionDate GetFundInceptionDateResult
	 * @return FundInceptionDate
	 */
	public function setGetFundInceptionDateResult($_GetFundInceptionDateResult)
	{
		return ($this->GetFundInceptionDateResult = $_GetFundInceptionDateResult);
	}
	/**
	 * Get GetFundInceptionDateResult
	 * @return XiFundDataTypeFundInceptionDate
	 */
	public function getGetFundInceptionDateResult()
	{
		return $this->GetFundInceptionDateResult;
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