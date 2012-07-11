<?php
/**
 * Class file for XiHistoricalTypeGetTopMoversByMarketCapitalizationResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetTopMoversByMarketCapitalizationResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetTopMoversByMarketCapitalizationResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetTopMoversByMarketCapitalizationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfTopByCapitalization
	 */
	public $GetTopMoversByMarketCapitalizationResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfTopByCapitalization GetTopMoversByMarketCapitalizationResult
	 * @return XiHistoricalTypeGetTopMoversByMarketCapitalizationResponse
	 */
	public function __construct($_GetTopMoversByMarketCapitalizationResult = null)
	{
		parent::__construct(array('GetTopMoversByMarketCapitalizationResult'=>new XiHistoricalTypeArrayOfTopByCapitalization($_GetTopMoversByMarketCapitalizationResult)));
	}
	/**
	 * Set GetTopMoversByMarketCapitalizationResult
	 * @param ArrayOfTopByCapitalization GetTopMoversByMarketCapitalizationResult
	 * @return ArrayOfTopByCapitalization
	 */
	public function setGetTopMoversByMarketCapitalizationResult($_GetTopMoversByMarketCapitalizationResult)
	{
		return ($this->GetTopMoversByMarketCapitalizationResult = $_GetTopMoversByMarketCapitalizationResult);
	}
	/**
	 * Get GetTopMoversByMarketCapitalizationResult
	 * @return XiHistoricalTypeArrayOfTopByCapitalization
	 */
	public function getGetTopMoversByMarketCapitalizationResult()
	{
		return $this->GetTopMoversByMarketCapitalizationResult;
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