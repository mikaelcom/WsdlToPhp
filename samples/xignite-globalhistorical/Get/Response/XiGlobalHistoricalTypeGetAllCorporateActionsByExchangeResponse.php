<?php
/**
 * Class file for XiGlobalHistoricalTypeGetAllCorporateActionsByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetAllCorporateActionsByExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetAllCorporateActionsByExchangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetAllCorporateActionsByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfCorporateActionHistory
	 */
	public $GetAllCorporateActionsByExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeArrayOfCorporateActionHistory GetAllCorporateActionsByExchangeResult
	 * @return XiGlobalHistoricalTypeGetAllCorporateActionsByExchangeResponse
	 */
	public function __construct($_GetAllCorporateActionsByExchangeResult = null)
	{
		parent::__construct(array('GetAllCorporateActionsByExchangeResult'=>new XiGlobalHistoricalTypeArrayOfCorporateActionHistory($_GetAllCorporateActionsByExchangeResult)));
	}
	/**
	 * Set GetAllCorporateActionsByExchangeResult
	 * @param ArrayOfCorporateActionHistory GetAllCorporateActionsByExchangeResult
	 * @return ArrayOfCorporateActionHistory
	 */
	public function setGetAllCorporateActionsByExchangeResult($_GetAllCorporateActionsByExchangeResult)
	{
		return ($this->GetAllCorporateActionsByExchangeResult = $_GetAllCorporateActionsByExchangeResult);
	}
	/**
	 * Get GetAllCorporateActionsByExchangeResult
	 * @return XiGlobalHistoricalTypeArrayOfCorporateActionHistory
	 */
	public function getGetAllCorporateActionsByExchangeResult()
	{
		return $this->GetAllCorporateActionsByExchangeResult;
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