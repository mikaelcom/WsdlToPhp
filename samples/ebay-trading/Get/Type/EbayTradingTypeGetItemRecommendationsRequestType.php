<?php
/**
 * Class file for EbayTradingTypeGetItemRecommendationsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemRecommendationsRequestType
 * Documentation : Examines potential item data that a seller has specified and returns recommended changes or opportunities for improvement. The types of recommendations returned for a given item can be configured by choosing one or more recommendation engines in the request. This call supports batch requests. That is, you can retrieve recommendations for multiple items at once.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemRecommendationsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The GetRecommendationsRequestContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the data for a single item and configures the recommendation engines to use when processing the item. To retrieve recommendations for multiple items, pass a separate GetRecommendationsRequestContainer for each item. In this case, pass a user-defined correlation ID for each item to identify the matching response.
	 * @var EbayTradingTypeGetRecommendationsRequestContainerType
	 */
	public $GetRecommendationsRequestContainer;
	/**
	 * Constructor
	 * @param EbayTradingTypeGetRecommendationsRequestContainerType GetRecommendationsRequestContainer
	 * @return EbayTradingTypeGetItemRecommendationsRequestType
	 */
	public function __construct($_GetRecommendationsRequestContainer = null)
	{
		EbayTradingWsdlClass::__construct(array('GetRecommendationsRequestContainer'=>$_GetRecommendationsRequestContainer));
	}
	/**
	 * Set GetRecommendationsRequestContainer
	 * @param GetRecommendationsRequestContainerType GetRecommendationsRequestContainer
	 * @return GetRecommendationsRequestContainerType
	 */
	public function setGetRecommendationsRequestContainer($_GetRecommendationsRequestContainer)
	{
		return ($this->GetRecommendationsRequestContainer = $_GetRecommendationsRequestContainer);
	}
	/**
	 * Get GetRecommendationsRequestContainer
	 * @return EbayTradingTypeGetRecommendationsRequestContainerType
	 */
	public function getGetRecommendationsRequestContainer()
	{
		return $this->GetRecommendationsRequestContainer;
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