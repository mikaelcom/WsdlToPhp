<?php
/**
 * Class file for XiMetalsTypeGetHistoricalSpotPricesResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalSpotPricesResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalSpotPricesResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalSpotPricesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfHistoricalMetalQuote
	 */
	public $GetHistoricalSpotPricesResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeArrayOfHistoricalMetalQuote GetHistoricalSpotPricesResult
	 * @return XiMetalsTypeGetHistoricalSpotPricesResponse
	 */
	public function __construct($_GetHistoricalSpotPricesResult = null)
	{
		parent::__construct(array('GetHistoricalSpotPricesResult'=>new XiMetalsTypeArrayOfHistoricalMetalQuote($_GetHistoricalSpotPricesResult)));
	}
	/**
	 * Set GetHistoricalSpotPricesResult
	 * @param ArrayOfHistoricalMetalQuote GetHistoricalSpotPricesResult
	 * @return ArrayOfHistoricalMetalQuote
	 */
	public function setGetHistoricalSpotPricesResult($_GetHistoricalSpotPricesResult)
	{
		return ($this->GetHistoricalSpotPricesResult = $_GetHistoricalSpotPricesResult);
	}
	/**
	 * Get GetHistoricalSpotPricesResult
	 * @return XiMetalsTypeArrayOfHistoricalMetalQuote
	 */
	public function getGetHistoricalSpotPricesResult()
	{
		return $this->GetHistoricalSpotPricesResult;
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