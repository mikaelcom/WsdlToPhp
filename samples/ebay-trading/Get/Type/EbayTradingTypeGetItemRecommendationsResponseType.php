<?php
/**
 * Class file for EbayTradingTypeGetItemRecommendationsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemRecommendationsResponseType
 * Documentation : GetItemRecommendations returns recommended changes or opportunities for improvement related to listing data that was passed in the request. This call supports batch requests. That is, it can retrieve recommendations for multiple items at once.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemRecommendationsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The GetRecommendationsResponseContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies recommended changes or opportunities for improving the data of a single item. If multiple items were processed, a separate GetRecommendationsResponseContainer is returned for each item. Each container includes a user-defined correlation ID to help you match items in the request to recommendations in the response.
	 * @var EbayTradingTypeGetRecommendationsResponseContainerType
	 */
	public $GetRecommendationsResponseContainer;
	/**
	 * Constructor
	 * @param EbayTradingTypeGetRecommendationsResponseContainerType GetRecommendationsResponseContainer
	 * @return EbayTradingTypeGetItemRecommendationsResponseType
	 */
	public function __construct($_GetRecommendationsResponseContainer = null)
	{
		EbayTradingWsdlClass::__construct(array('GetRecommendationsResponseContainer'=>$_GetRecommendationsResponseContainer));
	}
	/**
	 * Set GetRecommendationsResponseContainer
	 * @param GetRecommendationsResponseContainerType GetRecommendationsResponseContainer
	 * @return GetRecommendationsResponseContainerType
	 */
	public function setGetRecommendationsResponseContainer($_GetRecommendationsResponseContainer)
	{
		return ($this->GetRecommendationsResponseContainer = $_GetRecommendationsResponseContainer);
	}
	/**
	 * Get GetRecommendationsResponseContainer
	 * @return EbayTradingTypeGetRecommendationsResponseContainerType
	 */
	public function getGetRecommendationsResponseContainer()
	{
		return $this->GetRecommendationsResponseContainer;
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