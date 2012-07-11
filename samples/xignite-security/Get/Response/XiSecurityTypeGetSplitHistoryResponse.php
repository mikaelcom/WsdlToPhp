<?php
/**
 * Class file for XiSecurityTypeGetSplitHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetSplitHistoryResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetSplitHistoryResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetSplitHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeSplitHistory
	 */
	public $GetSplitHistoryResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeSplitHistory GetSplitHistoryResult
	 * @return XiSecurityTypeGetSplitHistoryResponse
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
	 * @return XiSecurityTypeSplitHistory
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