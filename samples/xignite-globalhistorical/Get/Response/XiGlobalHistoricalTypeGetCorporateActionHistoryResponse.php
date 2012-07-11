<?php
/**
 * Class file for XiGlobalHistoricalTypeGetCorporateActionHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetCorporateActionHistoryResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetCorporateActionHistoryResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetCorporateActionHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public $GetCorporateActionHistoryResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeCorporateActionHistory GetCorporateActionHistoryResult
	 * @return XiGlobalHistoricalTypeGetCorporateActionHistoryResponse
	 */
	public function __construct($_GetCorporateActionHistoryResult = null)
	{
		parent::__construct(array('GetCorporateActionHistoryResult'=>$_GetCorporateActionHistoryResult));
	}
	/**
	 * Set GetCorporateActionHistoryResult
	 * @param CorporateActionHistory GetCorporateActionHistoryResult
	 * @return CorporateActionHistory
	 */
	public function setGetCorporateActionHistoryResult($_GetCorporateActionHistoryResult)
	{
		return ($this->GetCorporateActionHistoryResult = $_GetCorporateActionHistoryResult);
	}
	/**
	 * Get GetCorporateActionHistoryResult
	 * @return XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public function getGetCorporateActionHistoryResult()
	{
		return $this->GetCorporateActionHistoryResult;
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