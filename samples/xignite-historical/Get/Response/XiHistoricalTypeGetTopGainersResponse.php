<?php
/**
 * Class file for XiHistoricalTypeGetTopGainersResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetTopGainersResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetTopGainersResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetTopGainersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfTop
	 */
	public $GetTopGainersResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfTop GetTopGainersResult
	 * @return XiHistoricalTypeGetTopGainersResponse
	 */
	public function __construct($_GetTopGainersResult = null)
	{
		parent::__construct(array('GetTopGainersResult'=>new XiHistoricalTypeArrayOfTop($_GetTopGainersResult)));
	}
	/**
	 * Set GetTopGainersResult
	 * @param ArrayOfTop GetTopGainersResult
	 * @return ArrayOfTop
	 */
	public function setGetTopGainersResult($_GetTopGainersResult)
	{
		return ($this->GetTopGainersResult = $_GetTopGainersResult);
	}
	/**
	 * Get GetTopGainersResult
	 * @return XiHistoricalTypeArrayOfTop
	 */
	public function getGetTopGainersResult()
	{
		return $this->GetTopGainersResult;
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