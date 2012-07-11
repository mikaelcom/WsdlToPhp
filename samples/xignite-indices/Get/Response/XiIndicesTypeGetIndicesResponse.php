<?php
/**
 * Class file for XiIndicesTypeGetIndicesResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetIndicesResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetIndicesResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetIndicesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfMarketIndex
	 */
	public $GetIndicesResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfMarketIndex GetIndicesResult
	 * @return XiIndicesTypeGetIndicesResponse
	 */
	public function __construct($_GetIndicesResult = null)
	{
		parent::__construct(array('GetIndicesResult'=>new XiIndicesTypeArrayOfMarketIndex($_GetIndicesResult)));
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
	 * @return XiIndicesTypeArrayOfMarketIndex
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