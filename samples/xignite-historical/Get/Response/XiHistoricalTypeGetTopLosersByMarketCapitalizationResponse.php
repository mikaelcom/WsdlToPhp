<?php
/**
 * Class file for XiHistoricalTypeGetTopLosersByMarketCapitalizationResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetTopLosersByMarketCapitalizationResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetTopLosersByMarketCapitalizationResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetTopLosersByMarketCapitalizationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfTopByCapitalization
	 */
	public $GetTopLosersByMarketCapitalizationResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfTopByCapitalization GetTopLosersByMarketCapitalizationResult
	 * @return XiHistoricalTypeGetTopLosersByMarketCapitalizationResponse
	 */
	public function __construct($_GetTopLosersByMarketCapitalizationResult = null)
	{
		parent::__construct(array('GetTopLosersByMarketCapitalizationResult'=>new XiHistoricalTypeArrayOfTopByCapitalization($_GetTopLosersByMarketCapitalizationResult)));
	}
	/**
	 * Set GetTopLosersByMarketCapitalizationResult
	 * @param ArrayOfTopByCapitalization GetTopLosersByMarketCapitalizationResult
	 * @return ArrayOfTopByCapitalization
	 */
	public function setGetTopLosersByMarketCapitalizationResult($_GetTopLosersByMarketCapitalizationResult)
	{
		return ($this->GetTopLosersByMarketCapitalizationResult = $_GetTopLosersByMarketCapitalizationResult);
	}
	/**
	 * Get GetTopLosersByMarketCapitalizationResult
	 * @return XiHistoricalTypeArrayOfTopByCapitalization
	 */
	public function getGetTopLosersByMarketCapitalizationResult()
	{
		return $this->GetTopLosersByMarketCapitalizationResult;
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