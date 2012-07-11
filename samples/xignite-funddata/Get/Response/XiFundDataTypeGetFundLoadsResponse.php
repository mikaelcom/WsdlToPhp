<?php
/**
 * Class file for XiFundDataTypeGetFundLoadsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundLoadsResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundLoadsResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundLoadsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundLoads
	 */
	public $GetFundLoadsResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundLoads GetFundLoadsResult
	 * @return XiFundDataTypeGetFundLoadsResponse
	 */
	public function __construct($_GetFundLoadsResult = null)
	{
		parent::__construct(array('GetFundLoadsResult'=>$_GetFundLoadsResult));
	}
	/**
	 * Set GetFundLoadsResult
	 * @param FundLoads GetFundLoadsResult
	 * @return FundLoads
	 */
	public function setGetFundLoadsResult($_GetFundLoadsResult)
	{
		return ($this->GetFundLoadsResult = $_GetFundLoadsResult);
	}
	/**
	 * Get GetFundLoadsResult
	 * @return XiFundDataTypeFundLoads
	 */
	public function getGetFundLoadsResult()
	{
		return $this->GetFundLoadsResult;
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