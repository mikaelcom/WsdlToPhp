<?php
/**
 * Class file for XiIndicesTypeGetDelayedValuesResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetDelayedValuesResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetDelayedValuesResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetDelayedValuesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndexQuote
	 */
	public $GetDelayedValuesResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfIndexQuote GetDelayedValuesResult
	 * @return XiIndicesTypeGetDelayedValuesResponse
	 */
	public function __construct($_GetDelayedValuesResult = null)
	{
		parent::__construct(array('GetDelayedValuesResult'=>new XiIndicesTypeArrayOfIndexQuote($_GetDelayedValuesResult)));
	}
	/**
	 * Set GetDelayedValuesResult
	 * @param ArrayOfIndexQuote GetDelayedValuesResult
	 * @return ArrayOfIndexQuote
	 */
	public function setGetDelayedValuesResult($_GetDelayedValuesResult)
	{
		return ($this->GetDelayedValuesResult = $_GetDelayedValuesResult);
	}
	/**
	 * Get GetDelayedValuesResult
	 * @return XiIndicesTypeArrayOfIndexQuote
	 */
	public function getGetDelayedValuesResult()
	{
		return $this->GetDelayedValuesResult;
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