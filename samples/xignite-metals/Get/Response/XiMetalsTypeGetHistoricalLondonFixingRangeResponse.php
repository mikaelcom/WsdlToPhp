<?php
/**
 * Class file for XiMetalsTypeGetHistoricalLondonFixingRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalLondonFixingRangeResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalLondonFixingRangeResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalLondonFixingRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfLondonFixing
	 */
	public $GetHistoricalLondonFixingRangeResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeArrayOfLondonFixing GetHistoricalLondonFixingRangeResult
	 * @return XiMetalsTypeGetHistoricalLondonFixingRangeResponse
	 */
	public function __construct($_GetHistoricalLondonFixingRangeResult = null)
	{
		parent::__construct(array('GetHistoricalLondonFixingRangeResult'=>new XiMetalsTypeArrayOfLondonFixing($_GetHistoricalLondonFixingRangeResult)));
	}
	/**
	 * Set GetHistoricalLondonFixingRangeResult
	 * @param ArrayOfLondonFixing GetHistoricalLondonFixingRangeResult
	 * @return ArrayOfLondonFixing
	 */
	public function setGetHistoricalLondonFixingRangeResult($_GetHistoricalLondonFixingRangeResult)
	{
		return ($this->GetHistoricalLondonFixingRangeResult = $_GetHistoricalLondonFixingRangeResult);
	}
	/**
	 * Get GetHistoricalLondonFixingRangeResult
	 * @return XiMetalsTypeArrayOfLondonFixing
	 */
	public function getGetHistoricalLondonFixingRangeResult()
	{
		return $this->GetHistoricalLondonFixingRangeResult;
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