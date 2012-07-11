<?php
/**
 * Class file for XiRealTimeTypeIsTradedResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeIsTradedResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeIsTradedResponse extends XiRealTimeWsdlClass
{
	/**
	 * The IsTradedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeBooleanResult
	 */
	public $IsTradedResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeBooleanResult IsTradedResult
	 * @return XiRealTimeTypeIsTradedResponse
	 */
	public function __construct($_IsTradedResult = null)
	{
		parent::__construct(array('IsTradedResult'=>$_IsTradedResult));
	}
	/**
	 * Set IsTradedResult
	 * @param BooleanResult IsTradedResult
	 * @return BooleanResult
	 */
	public function setIsTradedResult($_IsTradedResult)
	{
		return ($this->IsTradedResult = $_IsTradedResult);
	}
	/**
	 * Get IsTradedResult
	 * @return XiRealTimeTypeBooleanResult
	 */
	public function getIsTradedResult()
	{
		return $this->IsTradedResult;
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