<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyCommodityRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyCommodityRangeResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyCommodityRangeResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyCommodityRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuotes
	 */
	public $GetHistoricalEnergyCommodityRangeResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuotes GetHistoricalEnergyCommodityRangeResult
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityRangeResponse
	 */
	public function __construct($_GetHistoricalEnergyCommodityRangeResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyCommodityRangeResult'=>$_GetHistoricalEnergyCommodityRangeResult));
	}
	/**
	 * Set GetHistoricalEnergyCommodityRangeResult
	 * @param FutureQuotes GetHistoricalEnergyCommodityRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalEnergyCommodityRangeResult($_GetHistoricalEnergyCommodityRangeResult)
	{
		return ($this->GetHistoricalEnergyCommodityRangeResult = $_GetHistoricalEnergyCommodityRangeResult);
	}
	/**
	 * Get GetHistoricalEnergyCommodityRangeResult
	 * @return XiEnergyTypeFutureQuotes
	 */
	public function getGetHistoricalEnergyCommodityRangeResult()
	{
		return $this->GetHistoricalEnergyCommodityRangeResult;
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