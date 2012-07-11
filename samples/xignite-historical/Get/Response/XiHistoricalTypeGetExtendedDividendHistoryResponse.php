<?php
/**
 * Class file for XiHistoricalTypeGetExtendedDividendHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetExtendedDividendHistoryResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetExtendedDividendHistoryResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetExtendedDividendHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeExtendedDividendHistory
	 */
	public $GetExtendedDividendHistoryResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeExtendedDividendHistory GetExtendedDividendHistoryResult
	 * @return XiHistoricalTypeGetExtendedDividendHistoryResponse
	 */
	public function __construct($_GetExtendedDividendHistoryResult = null)
	{
		parent::__construct(array('GetExtendedDividendHistoryResult'=>$_GetExtendedDividendHistoryResult));
	}
	/**
	 * Set GetExtendedDividendHistoryResult
	 * @param ExtendedDividendHistory GetExtendedDividendHistoryResult
	 * @return ExtendedDividendHistory
	 */
	public function setGetExtendedDividendHistoryResult($_GetExtendedDividendHistoryResult)
	{
		return ($this->GetExtendedDividendHistoryResult = $_GetExtendedDividendHistoryResult);
	}
	/**
	 * Get GetExtendedDividendHistoryResult
	 * @return XiHistoricalTypeExtendedDividendHistory
	 */
	public function getGetExtendedDividendHistoryResult()
	{
		return $this->GetExtendedDividendHistoryResult;
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