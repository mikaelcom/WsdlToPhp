<?php
/**
 * Class file for XiFundDataTypeGetFundTurnoverResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundTurnoverResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundTurnoverResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundTurnoverResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundTurnover
	 */
	public $GetFundTurnoverResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundTurnover GetFundTurnoverResult
	 * @return XiFundDataTypeGetFundTurnoverResponse
	 */
	public function __construct($_GetFundTurnoverResult = null)
	{
		parent::__construct(array('GetFundTurnoverResult'=>$_GetFundTurnoverResult));
	}
	/**
	 * Set GetFundTurnoverResult
	 * @param FundTurnover GetFundTurnoverResult
	 * @return FundTurnover
	 */
	public function setGetFundTurnoverResult($_GetFundTurnoverResult)
	{
		return ($this->GetFundTurnoverResult = $_GetFundTurnoverResult);
	}
	/**
	 * Get GetFundTurnoverResult
	 * @return XiFundDataTypeFundTurnover
	 */
	public function getGetFundTurnoverResult()
	{
		return $this->GetFundTurnoverResult;
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