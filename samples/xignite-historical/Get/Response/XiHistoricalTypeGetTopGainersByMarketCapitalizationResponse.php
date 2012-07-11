<?php
/**
 * Class file for XiHistoricalTypeGetTopGainersByMarketCapitalizationResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetTopGainersByMarketCapitalizationResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetTopGainersByMarketCapitalizationResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetTopGainersByMarketCapitalizationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfTopByCapitalization
	 */
	public $GetTopGainersByMarketCapitalizationResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfTopByCapitalization GetTopGainersByMarketCapitalizationResult
	 * @return XiHistoricalTypeGetTopGainersByMarketCapitalizationResponse
	 */
	public function __construct($_GetTopGainersByMarketCapitalizationResult = null)
	{
		parent::__construct(array('GetTopGainersByMarketCapitalizationResult'=>new XiHistoricalTypeArrayOfTopByCapitalization($_GetTopGainersByMarketCapitalizationResult)));
	}
	/**
	 * Set GetTopGainersByMarketCapitalizationResult
	 * @param ArrayOfTopByCapitalization GetTopGainersByMarketCapitalizationResult
	 * @return ArrayOfTopByCapitalization
	 */
	public function setGetTopGainersByMarketCapitalizationResult($_GetTopGainersByMarketCapitalizationResult)
	{
		return ($this->GetTopGainersByMarketCapitalizationResult = $_GetTopGainersByMarketCapitalizationResult);
	}
	/**
	 * Get GetTopGainersByMarketCapitalizationResult
	 * @return XiHistoricalTypeArrayOfTopByCapitalization
	 */
	public function getGetTopGainersByMarketCapitalizationResult()
	{
		return $this->GetTopGainersByMarketCapitalizationResult;
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