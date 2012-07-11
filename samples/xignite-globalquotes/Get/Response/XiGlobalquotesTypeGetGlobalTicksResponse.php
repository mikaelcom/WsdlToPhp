<?php
/**
 * Class file for XiGlobalquotesTypeGetGlobalTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeGetGlobalTicksResponse
 * @date 08/07/2012
 */
class XiGlobalquotesTypeGetGlobalTicksResponse extends XiGlobalquotesWsdlClass
{
	/**
	 * The GetGlobalTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalquotesTypeGlobalTickSet
	 */
	public $GetGlobalTicksResult;
	/**
	 * Constructor
	 * @param XiGlobalquotesTypeGlobalTickSet GetGlobalTicksResult
	 * @return XiGlobalquotesTypeGetGlobalTicksResponse
	 */
	public function __construct($_GetGlobalTicksResult = null)
	{
		parent::__construct(array('GetGlobalTicksResult'=>$_GetGlobalTicksResult));
	}
	/**
	 * Set GetGlobalTicksResult
	 * @param GlobalTickSet GetGlobalTicksResult
	 * @return GlobalTickSet
	 */
	public function setGetGlobalTicksResult($_GetGlobalTicksResult)
	{
		return ($this->GetGlobalTicksResult = $_GetGlobalTicksResult);
	}
	/**
	 * Get GetGlobalTicksResult
	 * @return XiGlobalquotesTypeGlobalTickSet
	 */
	public function getGetGlobalTicksResult()
	{
		return $this->GetGlobalTicksResult;
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