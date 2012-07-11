<?php
/**
 * Class file for XiIndicesTypeGetHistoricalValueResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetHistoricalValueResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetHistoricalValueResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetHistoricalValueResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeIndexQuote
	 */
	public $GetHistoricalValueResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndexQuote GetHistoricalValueResult
	 * @return XiIndicesTypeGetHistoricalValueResponse
	 */
	public function __construct($_GetHistoricalValueResult = null)
	{
		parent::__construct(array('GetHistoricalValueResult'=>$_GetHistoricalValueResult));
	}
	/**
	 * Set GetHistoricalValueResult
	 * @param IndexQuote GetHistoricalValueResult
	 * @return IndexQuote
	 */
	public function setGetHistoricalValueResult($_GetHistoricalValueResult)
	{
		return ($this->GetHistoricalValueResult = $_GetHistoricalValueResult);
	}
	/**
	 * Get GetHistoricalValueResult
	 * @return XiIndicesTypeIndexQuote
	 */
	public function getGetHistoricalValueResult()
	{
		return $this->GetHistoricalValueResult;
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