<?php
/**
 * Class file for XiGlobalrealtimeTypeGetGlobalTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeGetGlobalTicksResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeGetGlobalTicksResponse extends XiGlobalrealtimeWsdlClass
{
	/**
	 * The GetGlobalTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeGlobalTickSet
	 */
	public $GetGlobalTicksResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeTypeGlobalTickSet GetGlobalTicksResult
	 * @return XiGlobalrealtimeTypeGetGlobalTicksResponse
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
	 * @return XiGlobalrealtimeTypeGlobalTickSet
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