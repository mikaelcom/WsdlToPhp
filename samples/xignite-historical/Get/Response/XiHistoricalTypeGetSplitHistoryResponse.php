<?php
/**
 * Class file for XiHistoricalTypeGetSplitHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetSplitHistoryResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetSplitHistoryResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetSplitHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeSplitHistory
	 */
	public $GetSplitHistoryResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSplitHistory GetSplitHistoryResult
	 * @return XiHistoricalTypeGetSplitHistoryResponse
	 */
	public function __construct($_GetSplitHistoryResult = null)
	{
		parent::__construct(array('GetSplitHistoryResult'=>$_GetSplitHistoryResult));
	}
	/**
	 * Set GetSplitHistoryResult
	 * @param SplitHistory GetSplitHistoryResult
	 * @return SplitHistory
	 */
	public function setGetSplitHistoryResult($_GetSplitHistoryResult)
	{
		return ($this->GetSplitHistoryResult = $_GetSplitHistoryResult);
	}
	/**
	 * Get GetSplitHistoryResult
	 * @return XiHistoricalTypeSplitHistory
	 */
	public function getGetSplitHistoryResult()
	{
		return $this->GetSplitHistoryResult;
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