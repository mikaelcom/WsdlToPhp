<?php
/**
 * Class file for XiQuotesTypeGetIndicesResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetIndicesResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetIndicesResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetIndicesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfMarketIndex
	 */
	public $GetIndicesResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfMarketIndex GetIndicesResult
	 * @return XiQuotesTypeGetIndicesResponse
	 */
	public function __construct($_GetIndicesResult = null)
	{
		parent::__construct(array('GetIndicesResult'=>new XiQuotesTypeArrayOfMarketIndex($_GetIndicesResult)));
	}
	/**
	 * Set GetIndicesResult
	 * @param ArrayOfMarketIndex GetIndicesResult
	 * @return ArrayOfMarketIndex
	 */
	public function setGetIndicesResult($_GetIndicesResult)
	{
		return ($this->GetIndicesResult = $_GetIndicesResult);
	}
	/**
	 * Get GetIndicesResult
	 * @return XiQuotesTypeArrayOfMarketIndex
	 */
	public function getGetIndicesResult()
	{
		return $this->GetIndicesResult;
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