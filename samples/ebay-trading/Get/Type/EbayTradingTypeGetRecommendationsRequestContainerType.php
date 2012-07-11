<?php
/**
 * Class file for EbayTradingTypeGetRecommendationsRequestContainerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetRecommendationsRequestContainerType
 * Documentation : Specifies the data for a single item and configures the recommendation engines to use when processing the item with GetItemRecommendations.
 * @date 04/07/2012
 */
class EbayTradingTypeGetRecommendationsRequestContainerType extends EbayTradingWsdlClass
{
	/**
	 * The ListingFlow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The listing flow for which the seller is seeking Listing Analyzer recommendations. Not applicable to results from other recommendation engines (i.e., the Suggested Attributes engine or the Product Pricing engine). The default flow is AddItem.
	 * @var EbayTradingTypeListingFlowCodeType
	 */
	public $ListingFlow;
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains fields that describe the item for which you are seeking recommendations. <br> <br> If the Listing Analyzer recommendation engine is run, the applicable fields are the same as the fields for AddItem, ReviseItem, or RelistItem requests, as determined by the value specified in ListingFlow. The item ID (Item.ItemID) is required when the ListingFlow is ReviseItem or RelistItem, and it is not applicable when the ListingFlow is AddItem. All other item fields are optional, even if listed as required for other calls. However, as some tips are dependent on the properties of the item, and as some properties have dependencies on other properties, we strongly recommend that you include all the item properties that will be included in the AddItem, ReviseItem, or RelistItem request. When the Listing Analyzer engine is run, tips will only be returned for fields that are specfied on the item.<br> <br> When the Product Pricing engine is run, pricing data will be based on the catalog product you specify.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The RecommendationEngine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A recommendation engine to run. If no engines are specified, all available recommendation engines will run. Some engines require additional fields, such as Item.PrimaryCategory.CategoryID, to be specified. If the ProductPricing engine is specified but Item.ProductListingDetails is not specified, no Product Pricing engine results are returned.
	 * @var EbayTradingTypeRecommendationEngineCodeType
	 */
	public $RecommendationEngine;
	/**
	 * The Query
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : One or more keywords to search for when using the Suggested Attributes engine. Required when SuggestedAttributes is specified as the recommendation engine (including when no recommendation engines are specified). Only the listing title is searched. The words "and" and "or" are treated like any other word. Blank searches are not allowed (and result in a warning).
	 * @var string
	 */
	public $Query;
	/**
	 * The CorrelationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique key to identify the response that matches this recommendation request container. Use this key to distinguish between responses when multiple recommendation containers are specified (i.e., for batch requests). You define the key. To be useful, each correlation ID should be unique within the same call. That is, define a different correlation ID for each recommendation request container. (eBay does not validate the uniqueness of these IDs.) If specified, the same correlation ID will be returned in the corresponding recommendation response (or error response). We recommend that you use this when retrieving recommendations for multiple items at once.
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The DeletedField
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the name of the field to remove from a listing. Applicable when the ListingFlow is ReviseItem or RelistItem. See ReviseItem and RelistItem for applicable values.
	 * @var string
	 */
	public $DeletedField;
	/**
	 * The ExcludeRelationships
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the Relationship node is not returned for any recommendations. Relationship recommendations tell you whether an Item Specific value has a logical dependency on another Item Specific.<br> <br> For example, in a clothing category, Size Type could be recommended as a parent of Size, because Size=Small would mean something different to buyers depending on whether Size Type=Petite or Size Type=Plus.<br> <br> In general, it is a good idea to retrieve and use relationship recommendations, as this data can help buyers find the items they want more easily.<br> <br> Only applicable when RecommendationEngine=ItemSpecifics.
	 * @var boolean
	 */
	public $ExcludeRelationships;
	/**
	 * The IncludeConfidence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, returns eBay's level of confidence for each name and value. Some sellers may find this useful when choosing whether to use eBay's recommendation or their own name or value. <br> <br> Only applicable when RecommendationEngine=ItemSpecifics.
	 * @var boolean
	 */
	public $IncludeConfidence;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeListingFlowCodeType ListingFlow
	 * @param EbayTradingTypeItemType Item
	 * @param EbayTradingTypeRecommendationEngineCodeType RecommendationEngine
	 * @param string Query
	 * @param string CorrelationID
	 * @param string DeletedField
	 * @param boolean ExcludeRelationships
	 * @param boolean IncludeConfidence
	 * @param DOMDocument any
	 * @return EbayTradingTypeGetRecommendationsRequestContainerType
	 */
	public function __construct($_ListingFlow = null,$_Item = null,$_RecommendationEngine = null,$_Query = null,$_CorrelationID = null,$_DeletedField = null,$_ExcludeRelationships = null,$_IncludeConfidence = null,$_any = null)
	{
		parent::__construct(array('ListingFlow'=>$_ListingFlow,'Item'=>$_Item,'RecommendationEngine'=>$_RecommendationEngine,'Query'=>$_Query,'CorrelationID'=>$_CorrelationID,'DeletedField'=>$_DeletedField,'ExcludeRelationships'=>$_ExcludeRelationships,'IncludeConfidence'=>$_IncludeConfidence,'any'=>$_any));
	}
	/**
	 * Set ListingFlow
	 * @param ListingFlowCodeType ListingFlow
	 * @return ListingFlowCodeType
	 */
	public function setListingFlow($_ListingFlow)
	{
		return ($this->ListingFlow = EbayTradingTypeListingFlowCodeType::valueIsValid($_ListingFlow)?$_ListingFlow:null);
	}
	/**
	 * Get ListingFlow
	 * @return EbayTradingTypeListingFlowCodeType
	 */
	public function getListingFlow()
	{
		return $this->ListingFlow;
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set RecommendationEngine
	 * @param RecommendationEngineCodeType RecommendationEngine
	 * @return RecommendationEngineCodeType
	 */
	public function setRecommendationEngine($_RecommendationEngine)
	{
		return ($this->RecommendationEngine = EbayTradingTypeRecommendationEngineCodeType::valueIsValid($_RecommendationEngine)?$_RecommendationEngine:null);
	}
	/**
	 * Get RecommendationEngine
	 * @return EbayTradingTypeRecommendationEngineCodeType
	 */
	public function getRecommendationEngine()
	{
		return $this->RecommendationEngine;
	}
	/**
	 * Set Query
	 * @param string Query
	 * @return string
	 */
	public function setQuery($_Query)
	{
		return ($this->Query = $_Query);
	}
	/**
	 * Get Query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->Query;
	}
	/**
	 * Set CorrelationID
	 * @param string CorrelationID
	 * @return string
	 */
	public function setCorrelationID($_CorrelationID)
	{
		return ($this->CorrelationID = $_CorrelationID);
	}
	/**
	 * Get CorrelationID
	 * @return string
	 */
	public function getCorrelationID()
	{
		return $this->CorrelationID;
	}
	/**
	 * Set DeletedField
	 * @param string DeletedField
	 * @return string
	 */
	public function setDeletedField($_DeletedField)
	{
		return ($this->DeletedField = $_DeletedField);
	}
	/**
	 * Get DeletedField
	 * @return string
	 */
	public function getDeletedField()
	{
		return $this->DeletedField;
	}
	/**
	 * Set ExcludeRelationships
	 * @param boolean ExcludeRelationships
	 * @return boolean
	 */
	public function setExcludeRelationships($_ExcludeRelationships)
	{
		return ($this->ExcludeRelationships = $_ExcludeRelationships);
	}
	/**
	 * Get ExcludeRelationships
	 * @return boolean
	 */
	public function getExcludeRelationships()
	{
		return $this->ExcludeRelationships;
	}
	/**
	 * Set IncludeConfidence
	 * @param boolean IncludeConfidence
	 * @return boolean
	 */
	public function setIncludeConfidence($_IncludeConfidence)
	{
		return ($this->IncludeConfidence = $_IncludeConfidence);
	}
	/**
	 * Get IncludeConfidence
	 * @return boolean
	 */
	public function getIncludeConfidence()
	{
		return $this->IncludeConfidence;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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