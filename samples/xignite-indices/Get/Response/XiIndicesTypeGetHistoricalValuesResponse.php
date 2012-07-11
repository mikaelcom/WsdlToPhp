<?php
/**
 * Class file for XiIndicesTypeGetHistoricalValuesResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetHistoricalValuesResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetHistoricalValuesResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetHistoricalValuesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndexQuote
	 */
	public $GetHistoricalValuesResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfIndexQuote GetHistoricalValuesResult
	 * @return XiIndicesTypeGetHistoricalValuesResponse
	 */
	public function __construct($_GetHistoricalValuesResult = null)
	{
		parent::__construct(array('GetHistoricalValuesResult'=>new XiIndicesTypeArrayOfIndexQuote($_GetHistoricalValuesResult)));
	}
	/**
	 * Set GetHistoricalValuesResult
	 * @param ArrayOfIndexQuote GetHistoricalValuesResult
	 * @return ArrayOfIndexQuote
	 */
	public function setGetHistoricalValuesResult($_GetHistoricalValuesResult)
	{
		return ($this->GetHistoricalValuesResult = $_GetHistoricalValuesResult);
	}
	/**
	 * Get GetHistoricalValuesResult
	 * @return XiIndicesTypeArrayOfIndexQuote
	 */
	public function getGetHistoricalValuesResult()
	{
		return $this->GetHistoricalValuesResult;
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