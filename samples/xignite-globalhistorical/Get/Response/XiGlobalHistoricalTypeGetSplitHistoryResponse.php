<?php
/**
 * Class file for XiGlobalHistoricalTypeGetSplitHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetSplitHistoryResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetSplitHistoryResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetSplitHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSplitHistory
	 */
	public $GetSplitHistoryResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSplitHistory GetSplitHistoryResult
	 * @return XiGlobalHistoricalTypeGetSplitHistoryResponse
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
	 * @return XiGlobalHistoricalTypeSplitHistory
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