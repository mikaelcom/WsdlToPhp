<?php
/**
 * Class file for XiIndicesTypeGetDelayedValueResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetDelayedValueResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetDelayedValueResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetDelayedValueResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeIndexQuote
	 */
	public $GetDelayedValueResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndexQuote GetDelayedValueResult
	 * @return XiIndicesTypeGetDelayedValueResponse
	 */
	public function __construct($_GetDelayedValueResult = null)
	{
		parent::__construct(array('GetDelayedValueResult'=>$_GetDelayedValueResult));
	}
	/**
	 * Set GetDelayedValueResult
	 * @param IndexQuote GetDelayedValueResult
	 * @return IndexQuote
	 */
	public function setGetDelayedValueResult($_GetDelayedValueResult)
	{
		return ($this->GetDelayedValueResult = $_GetDelayedValueResult);
	}
	/**
	 * Get GetDelayedValueResult
	 * @return XiIndicesTypeIndexQuote
	 */
	public function getGetDelayedValueResult()
	{
		return $this->GetDelayedValueResult;
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