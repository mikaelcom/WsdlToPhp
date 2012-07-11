<?php
/**
 * Class file for EbayTradingTypeGetRecommendationsResponseContainerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetRecommendationsResponseContainerType
 * Documentation : Returns recommended changes or opportunities for improvement related to listing data that was passed in a GetItemRecommendations request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetRecommendationsResponseContainerType extends EbayTradingWsdlClass
{
	/**
	 * The ListingAnalyzerRecommendations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains tips returned from the Listing Analyzer recommendation engine, if this engine was specified in the request (or if no engine was specified).
	 * @var EbayTradingTypeListingAnalyzerRecommendationsType
	 */
	public $ListingAnalyzerRecommendations;
	/**
	 * The SIFFTASRecommendations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var EbayTradingTypeSIFFTASRecommendationsType
	 */
	public $SIFFTASRecommendations;
	/**
	 * The PricingRecommendations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains pricing data returned from the Product Pricing engine, if this engine was specified in the request (or if no engine was specified).
	 * @var EbayTradingTypePricingRecommendationsType
	 */
	public $PricingRecommendations;
	/**
	 * The AttributeRecommendations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains attribute suggestions returned from the Suggested Attributes engine, if this engine was specified in the request. The results include suggested attributes and values based on the primary category and a string you specify in the Query field. Suggestions may only be returned when the Suggested Attributes engine is specified alone. If you request recommendations by using multiple engines, suggested attribute data might not be returned. If attributes are returned with multiple values, the values are returned in order of rank (i.e., the value that best meets eBay's recommendation criteria is returned first).
	 * @var EbayTradingTypeAttributeRecommendationsType
	 */
	public $AttributeRecommendations;
	/**
	 * The ProductRecommendations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains zero or more product titles and IDs returned from the Suggested Attributes engine, if this engine was specified in the request (or if no engine was specified). If applicable, use one of the suggested product IDs to list the item with Pre-filled Item Information.
	 * @var EbayTradingTypeProductRecommendationsType
	 */
	public $ProductRecommendations;
	/**
	 * The CorrelationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique key to distinguish between recommendations for each item. Matches a correlation ID you defined in the request, if any.
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The Recommendations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains custom Item Specifics suggestions returned from the custom Item Specifics recommendation engine, An Item Specific consists of a name/value pair, and it may be returned as complete (with name and one or more values) or partial (name only).<br> <br> Only returned when RecommendationEngine=ItemSpecifics.
	 * @var EbayTradingTypeRecommendationsType
	 */
	public $Recommendations;
	/**
	 * The ProductListingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns catalog product details. This information can be displayed to the seller prior to listing an item with a catalog product. Only returned when the request includes a valid eBay ProductID or ProductReferenceID (in Item.ProductListingDetails).
	 * @var EbayTradingTypeProductListingDetailsType
	 */
	public $ProductListingDetails;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The recommended title of the item listing. <br><br> <span class="tablenote"><b>Note:</b> The maximum length of an eBay Item Title has increased to 80 characters as of September 2011. </span>
	 * @var string
	 */
	public $Title;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeListingAnalyzerRecommendationsType ListingAnalyzerRecommendations
	 * @param EbayTradingTypeSIFFTASRecommendationsType SIFFTASRecommendations
	 * @param EbayTradingTypePricingRecommendationsType PricingRecommendations
	 * @param EbayTradingTypeAttributeRecommendationsType AttributeRecommendations
	 * @param EbayTradingTypeProductRecommendationsType ProductRecommendations
	 * @param string CorrelationID
	 * @param EbayTradingTypeRecommendationsType Recommendations
	 * @param EbayTradingTypeProductListingDetailsType ProductListingDetails
	 * @param string Title
	 * @param DOMDocument any
	 * @return EbayTradingTypeGetRecommendationsResponseContainerType
	 */
	public function __construct($_ListingAnalyzerRecommendations = null,$_SIFFTASRecommendations = null,$_PricingRecommendations = null,$_AttributeRecommendations = null,$_ProductRecommendations = null,$_CorrelationID = null,$_Recommendations = null,$_ProductListingDetails = null,$_Title = null,$_any = null)
	{
		parent::__construct(array('ListingAnalyzerRecommendations'=>$_ListingAnalyzerRecommendations,'SIFFTASRecommendations'=>$_SIFFTASRecommendations,'PricingRecommendations'=>$_PricingRecommendations,'AttributeRecommendations'=>$_AttributeRecommendations,'ProductRecommendations'=>$_ProductRecommendations,'CorrelationID'=>$_CorrelationID,'Recommendations'=>$_Recommendations,'ProductListingDetails'=>$_ProductListingDetails,'Title'=>$_Title,'any'=>$_any));
	}
	/**
	 * Set ListingAnalyzerRecommendations
	 * @param ListingAnalyzerRecommendationsType ListingAnalyzerRecommendations
	 * @return ListingAnalyzerRecommendationsType
	 */
	public function setListingAnalyzerRecommendations($_ListingAnalyzerRecommendations)
	{
		return ($this->ListingAnalyzerRecommendations = $_ListingAnalyzerRecommendations);
	}
	/**
	 * Get ListingAnalyzerRecommendations
	 * @return EbayTradingTypeListingAnalyzerRecommendationsType
	 */
	public function getListingAnalyzerRecommendations()
	{
		return $this->ListingAnalyzerRecommendations;
	}
	/**
	 * Set SIFFTASRecommendations
	 * @param SIFFTASRecommendationsType SIFFTASRecommendations
	 * @return SIFFTASRecommendationsType
	 */
	public function setSIFFTASRecommendations($_SIFFTASRecommendations)
	{
		return ($this->SIFFTASRecommendations = $_SIFFTASRecommendations);
	}
	/**
	 * Get SIFFTASRecommendations
	 * @return EbayTradingTypeSIFFTASRecommendationsType
	 */
	public function getSIFFTASRecommendations()
	{
		return $this->SIFFTASRecommendations;
	}
	/**
	 * Set PricingRecommendations
	 * @param PricingRecommendationsType PricingRecommendations
	 * @return PricingRecommendationsType
	 */
	public function setPricingRecommendations($_PricingRecommendations)
	{
		return ($this->PricingRecommendations = $_PricingRecommendations);
	}
	/**
	 * Get PricingRecommendations
	 * @return EbayTradingTypePricingRecommendationsType
	 */
	public function getPricingRecommendations()
	{
		return $this->PricingRecommendations;
	}
	/**
	 * Set AttributeRecommendations
	 * @param AttributeRecommendationsType AttributeRecommendations
	 * @return AttributeRecommendationsType
	 */
	public function setAttributeRecommendations($_AttributeRecommendations)
	{
		return ($this->AttributeRecommendations = $_AttributeRecommendations);
	}
	/**
	 * Get AttributeRecommendations
	 * @return EbayTradingTypeAttributeRecommendationsType
	 */
	public function getAttributeRecommendations()
	{
		return $this->AttributeRecommendations;
	}
	/**
	 * Set ProductRecommendations
	 * @param ProductRecommendationsType ProductRecommendations
	 * @return ProductRecommendationsType
	 */
	public function setProductRecommendations($_ProductRecommendations)
	{
		return ($this->ProductRecommendations = $_ProductRecommendations);
	}
	/**
	 * Get ProductRecommendations
	 * @return EbayTradingTypeProductRecommendationsType
	 */
	public function getProductRecommendations()
	{
		return $this->ProductRecommendations;
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
	 * Set Recommendations
	 * @param RecommendationsType Recommendations
	 * @return RecommendationsType
	 */
	public function setRecommendations($_Recommendations)
	{
		return ($this->Recommendations = $_Recommendations);
	}
	/**
	 * Get Recommendations
	 * @return EbayTradingTypeRecommendationsType
	 */
	public function getRecommendations()
	{
		return $this->Recommendations;
	}
	/**
	 * Set ProductListingDetails
	 * @param ProductListingDetailsType ProductListingDetails
	 * @return ProductListingDetailsType
	 */
	public function setProductListingDetails($_ProductListingDetails)
	{
		return ($this->ProductListingDetails = $_ProductListingDetails);
	}
	/**
	 * Get ProductListingDetails
	 * @return EbayTradingTypeProductListingDetailsType
	 */
	public function getProductListingDetails()
	{
		return $this->ProductListingDetails;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
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