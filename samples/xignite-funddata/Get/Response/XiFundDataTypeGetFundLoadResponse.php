<?php
/**
 * Class file for XiFundDataTypeGetFundLoadResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundLoadResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundLoadResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundLoadResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundLoad
	 */
	public $GetFundLoadResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundLoad GetFundLoadResult
	 * @return XiFundDataTypeGetFundLoadResponse
	 */
	public function __construct($_GetFundLoadResult = null)
	{
		parent::__construct(array('GetFundLoadResult'=>$_GetFundLoadResult));
	}
	/**
	 * Set GetFundLoadResult
	 * @param FundLoad GetFundLoadResult
	 * @return FundLoad
	 */
	public function setGetFundLoadResult($_GetFundLoadResult)
	{
		return ($this->GetFundLoadResult = $_GetFundLoadResult);
	}
	/**
	 * Get GetFundLoadResult
	 * @return XiFundDataTypeFundLoad
	 */
	public function getGetFundLoadResult()
	{
		return $this->GetFundLoadResult;
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