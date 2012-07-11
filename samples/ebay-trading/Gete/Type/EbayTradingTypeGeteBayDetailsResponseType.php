<?php
/**
 * Class file for EbayTradingTypeGeteBayDetailsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGeteBayDetailsResponseType
 * Documentation : Details about a specified site in response to GeteBayDetailsRequest. If no DetailName field is identified in the request, all elements of GeteBayDetailsResponse are returned. Otherwise, eBay returns only the elements corresponding to the specified DetailName fields. UpdateTime gives the time of modification of the most recently modified DetailName.
 * @date 04/07/2012
 */
class EbayTradingTypeGeteBayDetailsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CountryDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the country code and associated name of the countries supported by the eBay system, regardless of the site specified in the request.
	 * @var EbayTradingTypeCountryDetailsType
	 */
	public $CountryDetails;
	/**
	 * The CurrencyDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the currencies supported by the eBay system, regardless of the site specified in the request.
	 * @var EbayTradingTypeCurrencyDetailsType
	 */
	public $CurrencyDetails;
	/**
	 * The DispatchTimeMaxDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified in the request.
	 * @var EbayTradingTypeDispatchTimeMaxDetailsType
	 */
	public $DispatchTimeMaxDetails;
	/**
	 * The PaymentOptionDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The values returned in this field detail different payment options. <br /> This feature is no longer in use. If you need valid payment option information, use GetCategoryFeatures instead.
	 * @var EbayTradingTypePaymentOptionDetailsType
	 */
	public $PaymentOptionDetails;
	/**
	 * The RegionDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : No longer returned.
	 * @var EbayTradingTypeRegionDetailsType
	 */
	public $RegionDetails;
	/**
	 * The ShippingLocationDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the regions and locations supported by eBay's shipping services. Returns all shipping locations supported by eBay, regardless of the site specified in the request.
	 * @var EbayTradingTypeShippingLocationDetailsType
	 */
	public $ShippingLocationDetails;
	/**
	 * The ShippingServiceDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request.
	 * @var EbayTradingTypeShippingServiceDetailsType
	 */
	public $ShippingServiceDetails;
	/**
	 * The SiteDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists all available eBay sites and their associated SiteID numbers.
	 * @var EbayTradingTypeSiteDetailsType
	 */
	public $SiteDetails;
	/**
	 * The TaxJurisdiction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details the different tax jurisdictions or tax regions applicable to the site specified in the request. <br><br> Related fields:<br> TaxTable.TaxJurisdiction in SetTaxTable<br> Item.UseTaxTable in Additem
	 * @var EbayTradingTypeTaxJurisdictionType
	 */
	public $TaxJurisdiction;
	/**
	 * The URLDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists eBay URLs that are applicable to the site specified in the request.
	 * @var EbayTradingTypeURLDetailsType
	 */
	public $URLDetails;
	/**
	 * The TimeZoneDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the details of the time zones supported by the eBay system.
	 * @var EbayTradingTypeTimeZoneDetailsType
	 */
	public $TimeZoneDetails;
	/**
	 * The ItemSpecificDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The site's validation rules (e.g., string lengths) for custom Item Specifics.
	 * @var EbayTradingTypeItemSpecificDetailsType
	 */
	public $ItemSpecificDetails;
	/**
	 * The UnitOfMeasurementDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the suggested unit-of-measurement strings to use with Item Specifics descriptions.
	 * @var EbayTradingTypeUnitOfMeasurementDetailsType
	 */
	public $UnitOfMeasurementDetails;
	/**
	 * The RegionOfOriginDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : No longer returned.
	 * @var EbayTradingTypeRegionOfOriginDetailsType
	 */
	public $RegionOfOriginDetails;
	/**
	 * The ShippingPackageDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the various shipping packages supported by the specified site.
	 * @var EbayTradingTypeShippingPackageDetailsType
	 */
	public $ShippingPackageDetails;
	/**
	 * The ShippingCarrierDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the shipping carriers supported by the specified site.
	 * @var EbayTradingTypeShippingCarrierDetailsType
	 */
	public $ShippingCarrierDetails;
	/**
	 * The ReturnPolicyDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Lists the return policies supported by the eBay site specified in the request.
	 * @var EbayTradingTypeReturnPolicyDetailsType
	 */
	public $ReturnPolicyDetails;
	/**
	 * The ListingStartPriceDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the minimum starting prices for the supported types of eBay listings.
	 * @var EbayTradingTypeListingStartPriceDetailsType
	 */
	public $ListingStartPriceDetails;
	/**
	 * The BuyerRequirementDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details various eBay-buyer requirements.
	 * @var EbayTradingTypeSiteBuyerRequirementDetailsType
	 */
	public $BuyerRequirementDetails;
	/**
	 * The ListingFeatureDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details the listing features available for the site specified in the request.
	 * @var EbayTradingTypeListingFeatureDetailsType
	 */
	public $ListingFeatureDetails;
	/**
	 * The VariationDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Site-level validation rules for multi-variation listings (for example, the maximum number of variations per listing). Use GetCategoryFeatures to determine which categories on a site support variations. Use GetCategorySpecifics for rules related to recommended or required variation specifics.
	 * @var EbayTradingTypeVariationDetailsType
	 */
	public $VariationDetails;
	/**
	 * The ExcludeShippingLocationDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Lists the locations supported by the ExcludeShipToLocation feature. These are locations that a seller can list as areas where they will not ship an item. <br /> The codes reflect the <a href= "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm" >ISO 3166</a> location codes.
	 * @var EbayTradingTypeExcludeShippingLocationDetailsType
	 */
	public $ExcludeShippingLocationDetails;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time of the most recent modification to any feature detail. If specific feature details are passed in the request, gives the most recent modification time of those feature details.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The RecoupmentPolicyDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details the recoupment policies for the site specified in the request.
	 * @var EbayTradingTypeRecoupmentPolicyDetailsType
	 */
	public $RecoupmentPolicyDetails;
	/**
	 * The ShippingCategoryDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A shipping service category supported for the site. <br><br> Each shipping service supported for a site is automatically categorized by eBay into one of the shipping categories available for that site depending on how the shipping service shipping time aligns with the shipping times specified by eBay for each category. <br><br> Notice that you cannot specify a ShippingCategory as an input to any API call--eBay does this categorizing automatically. ShippingCategory is read-only data that is returned in the ShippingServiceDetails container. One possible use of this data is to segregate shipping services by ShippingCategory in a pick list. (For an example of this, see the Services pulldown menu in the Give buyers shipping details form in the eBay Sell Your Item flow.) <br><br> One way to populate the picklist would be to call GeteBayDetails supplying ShippingServiceDetails in a DetailName element; you would then sort these results yourself by ShippingCategory and populate the picklist.
	 * @var EbayTradingTypeShippingCategoryDetailsType
	 */
	public $ShippingCategoryDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypeCountryDetailsType CountryDetails
	 * @param EbayTradingTypeCurrencyDetailsType CurrencyDetails
	 * @param EbayTradingTypeDispatchTimeMaxDetailsType DispatchTimeMaxDetails
	 * @param EbayTradingTypePaymentOptionDetailsType PaymentOptionDetails
	 * @param EbayTradingTypeRegionDetailsType RegionDetails
	 * @param EbayTradingTypeShippingLocationDetailsType ShippingLocationDetails
	 * @param EbayTradingTypeShippingServiceDetailsType ShippingServiceDetails
	 * @param EbayTradingTypeSiteDetailsType SiteDetails
	 * @param EbayTradingTypeTaxJurisdictionType TaxJurisdiction
	 * @param EbayTradingTypeURLDetailsType URLDetails
	 * @param EbayTradingTypeTimeZoneDetailsType TimeZoneDetails
	 * @param EbayTradingTypeItemSpecificDetailsType ItemSpecificDetails
	 * @param EbayTradingTypeUnitOfMeasurementDetailsType UnitOfMeasurementDetails
	 * @param EbayTradingTypeRegionOfOriginDetailsType RegionOfOriginDetails
	 * @param EbayTradingTypeShippingPackageDetailsType ShippingPackageDetails
	 * @param EbayTradingTypeShippingCarrierDetailsType ShippingCarrierDetails
	 * @param EbayTradingTypeReturnPolicyDetailsType ReturnPolicyDetails
	 * @param EbayTradingTypeListingStartPriceDetailsType ListingStartPriceDetails
	 * @param EbayTradingTypeSiteBuyerRequirementDetailsType BuyerRequirementDetails
	 * @param EbayTradingTypeListingFeatureDetailsType ListingFeatureDetails
	 * @param EbayTradingTypeVariationDetailsType VariationDetails
	 * @param EbayTradingTypeExcludeShippingLocationDetailsType ExcludeShippingLocationDetails
	 * @param dateTime UpdateTime
	 * @param EbayTradingTypeRecoupmentPolicyDetailsType RecoupmentPolicyDetails
	 * @param EbayTradingTypeShippingCategoryDetailsType ShippingCategoryDetails
	 * @return EbayTradingTypeGeteBayDetailsResponseType
	 */
	public function __construct($_CountryDetails = null,$_CurrencyDetails = null,$_DispatchTimeMaxDetails = null,$_PaymentOptionDetails = null,$_RegionDetails = null,$_ShippingLocationDetails = null,$_ShippingServiceDetails = null,$_SiteDetails = null,$_TaxJurisdiction = null,$_URLDetails = null,$_TimeZoneDetails = null,$_ItemSpecificDetails = null,$_UnitOfMeasurementDetails = null,$_RegionOfOriginDetails = null,$_ShippingPackageDetails = null,$_ShippingCarrierDetails = null,$_ReturnPolicyDetails = null,$_ListingStartPriceDetails = null,$_BuyerRequirementDetails = null,$_ListingFeatureDetails = null,$_VariationDetails = null,$_ExcludeShippingLocationDetails = null,$_UpdateTime = null,$_RecoupmentPolicyDetails = null,$_ShippingCategoryDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('CountryDetails'=>$_CountryDetails,'CurrencyDetails'=>$_CurrencyDetails,'DispatchTimeMaxDetails'=>$_DispatchTimeMaxDetails,'PaymentOptionDetails'=>$_PaymentOptionDetails,'RegionDetails'=>$_RegionDetails,'ShippingLocationDetails'=>$_ShippingLocationDetails,'ShippingServiceDetails'=>$_ShippingServiceDetails,'SiteDetails'=>$_SiteDetails,'TaxJurisdiction'=>$_TaxJurisdiction,'URLDetails'=>$_URLDetails,'TimeZoneDetails'=>$_TimeZoneDetails,'ItemSpecificDetails'=>$_ItemSpecificDetails,'UnitOfMeasurementDetails'=>$_UnitOfMeasurementDetails,'RegionOfOriginDetails'=>$_RegionOfOriginDetails,'ShippingPackageDetails'=>$_ShippingPackageDetails,'ShippingCarrierDetails'=>$_ShippingCarrierDetails,'ReturnPolicyDetails'=>$_ReturnPolicyDetails,'ListingStartPriceDetails'=>$_ListingStartPriceDetails,'BuyerRequirementDetails'=>$_BuyerRequirementDetails,'ListingFeatureDetails'=>$_ListingFeatureDetails,'VariationDetails'=>$_VariationDetails,'ExcludeShippingLocationDetails'=>$_ExcludeShippingLocationDetails,'UpdateTime'=>$_UpdateTime,'RecoupmentPolicyDetails'=>$_RecoupmentPolicyDetails,'ShippingCategoryDetails'=>$_ShippingCategoryDetails));
	}
	/**
	 * Set CountryDetails
	 * @param CountryDetailsType CountryDetails
	 * @return CountryDetailsType
	 */
	public function setCountryDetails($_CountryDetails)
	{
		return ($this->CountryDetails = $_CountryDetails);
	}
	/**
	 * Get CountryDetails
	 * @return EbayTradingTypeCountryDetailsType
	 */
	public function getCountryDetails()
	{
		return $this->CountryDetails;
	}
	/**
	 * Set CurrencyDetails
	 * @param CurrencyDetailsType CurrencyDetails
	 * @return CurrencyDetailsType
	 */
	public function setCurrencyDetails($_CurrencyDetails)
	{
		return ($this->CurrencyDetails = $_CurrencyDetails);
	}
	/**
	 * Get CurrencyDetails
	 * @return EbayTradingTypeCurrencyDetailsType
	 */
	public function getCurrencyDetails()
	{
		return $this->CurrencyDetails;
	}
	/**
	 * Set DispatchTimeMaxDetails
	 * @param DispatchTimeMaxDetailsType DispatchTimeMaxDetails
	 * @return DispatchTimeMaxDetailsType
	 */
	public function setDispatchTimeMaxDetails($_DispatchTimeMaxDetails)
	{
		return ($this->DispatchTimeMaxDetails = $_DispatchTimeMaxDetails);
	}
	/**
	 * Get DispatchTimeMaxDetails
	 * @return EbayTradingTypeDispatchTimeMaxDetailsType
	 */
	public function getDispatchTimeMaxDetails()
	{
		return $this->DispatchTimeMaxDetails;
	}
	/**
	 * Set PaymentOptionDetails
	 * @param PaymentOptionDetailsType PaymentOptionDetails
	 * @return PaymentOptionDetailsType
	 */
	public function setPaymentOptionDetails($_PaymentOptionDetails)
	{
		return ($this->PaymentOptionDetails = $_PaymentOptionDetails);
	}
	/**
	 * Get PaymentOptionDetails
	 * @return EbayTradingTypePaymentOptionDetailsType
	 */
	public function getPaymentOptionDetails()
	{
		return $this->PaymentOptionDetails;
	}
	/**
	 * Set RegionDetails
	 * @param RegionDetailsType RegionDetails
	 * @return RegionDetailsType
	 */
	public function setRegionDetails($_RegionDetails)
	{
		return ($this->RegionDetails = $_RegionDetails);
	}
	/**
	 * Get RegionDetails
	 * @return EbayTradingTypeRegionDetailsType
	 */
	public function getRegionDetails()
	{
		return $this->RegionDetails;
	}
	/**
	 * Set ShippingLocationDetails
	 * @param ShippingLocationDetailsType ShippingLocationDetails
	 * @return ShippingLocationDetailsType
	 */
	public function setShippingLocationDetails($_ShippingLocationDetails)
	{
		return ($this->ShippingLocationDetails = $_ShippingLocationDetails);
	}
	/**
	 * Get ShippingLocationDetails
	 * @return EbayTradingTypeShippingLocationDetailsType
	 */
	public function getShippingLocationDetails()
	{
		return $this->ShippingLocationDetails;
	}
	/**
	 * Set ShippingServiceDetails
	 * @param ShippingServiceDetailsType ShippingServiceDetails
	 * @return ShippingServiceDetailsType
	 */
	public function setShippingServiceDetails($_ShippingServiceDetails)
	{
		return ($this->ShippingServiceDetails = $_ShippingServiceDetails);
	}
	/**
	 * Get ShippingServiceDetails
	 * @return EbayTradingTypeShippingServiceDetailsType
	 */
	public function getShippingServiceDetails()
	{
		return $this->ShippingServiceDetails;
	}
	/**
	 * Set SiteDetails
	 * @param SiteDetailsType SiteDetails
	 * @return SiteDetailsType
	 */
	public function setSiteDetails($_SiteDetails)
	{
		return ($this->SiteDetails = $_SiteDetails);
	}
	/**
	 * Get SiteDetails
	 * @return EbayTradingTypeSiteDetailsType
	 */
	public function getSiteDetails()
	{
		return $this->SiteDetails;
	}
	/**
	 * Set TaxJurisdiction
	 * @param TaxJurisdictionType TaxJurisdiction
	 * @return TaxJurisdictionType
	 */
	public function setTaxJurisdiction($_TaxJurisdiction)
	{
		return ($this->TaxJurisdiction = $_TaxJurisdiction);
	}
	/**
	 * Get TaxJurisdiction
	 * @return EbayTradingTypeTaxJurisdictionType
	 */
	public function getTaxJurisdiction()
	{
		return $this->TaxJurisdiction;
	}
	/**
	 * Set URLDetails
	 * @param URLDetailsType URLDetails
	 * @return URLDetailsType
	 */
	public function setURLDetails($_URLDetails)
	{
		return ($this->URLDetails = $_URLDetails);
	}
	/**
	 * Get URLDetails
	 * @return EbayTradingTypeURLDetailsType
	 */
	public function getURLDetails()
	{
		return $this->URLDetails;
	}
	/**
	 * Set TimeZoneDetails
	 * @param TimeZoneDetailsType TimeZoneDetails
	 * @return TimeZoneDetailsType
	 */
	public function setTimeZoneDetails($_TimeZoneDetails)
	{
		return ($this->TimeZoneDetails = $_TimeZoneDetails);
	}
	/**
	 * Get TimeZoneDetails
	 * @return EbayTradingTypeTimeZoneDetailsType
	 */
	public function getTimeZoneDetails()
	{
		return $this->TimeZoneDetails;
	}
	/**
	 * Set ItemSpecificDetails
	 * @param ItemSpecificDetailsType ItemSpecificDetails
	 * @return ItemSpecificDetailsType
	 */
	public function setItemSpecificDetails($_ItemSpecificDetails)
	{
		return ($this->ItemSpecificDetails = $_ItemSpecificDetails);
	}
	/**
	 * Get ItemSpecificDetails
	 * @return EbayTradingTypeItemSpecificDetailsType
	 */
	public function getItemSpecificDetails()
	{
		return $this->ItemSpecificDetails;
	}
	/**
	 * Set UnitOfMeasurementDetails
	 * @param UnitOfMeasurementDetailsType UnitOfMeasurementDetails
	 * @return UnitOfMeasurementDetailsType
	 */
	public function setUnitOfMeasurementDetails($_UnitOfMeasurementDetails)
	{
		return ($this->UnitOfMeasurementDetails = $_UnitOfMeasurementDetails);
	}
	/**
	 * Get UnitOfMeasurementDetails
	 * @return EbayTradingTypeUnitOfMeasurementDetailsType
	 */
	public function getUnitOfMeasurementDetails()
	{
		return $this->UnitOfMeasurementDetails;
	}
	/**
	 * Set RegionOfOriginDetails
	 * @param RegionOfOriginDetailsType RegionOfOriginDetails
	 * @return RegionOfOriginDetailsType
	 */
	public function setRegionOfOriginDetails($_RegionOfOriginDetails)
	{
		return ($this->RegionOfOriginDetails = $_RegionOfOriginDetails);
	}
	/**
	 * Get RegionOfOriginDetails
	 * @return EbayTradingTypeRegionOfOriginDetailsType
	 */
	public function getRegionOfOriginDetails()
	{
		return $this->RegionOfOriginDetails;
	}
	/**
	 * Set ShippingPackageDetails
	 * @param ShippingPackageDetailsType ShippingPackageDetails
	 * @return ShippingPackageDetailsType
	 */
	public function setShippingPackageDetails($_ShippingPackageDetails)
	{
		return ($this->ShippingPackageDetails = $_ShippingPackageDetails);
	}
	/**
	 * Get ShippingPackageDetails
	 * @return EbayTradingTypeShippingPackageDetailsType
	 */
	public function getShippingPackageDetails()
	{
		return $this->ShippingPackageDetails;
	}
	/**
	 * Set ShippingCarrierDetails
	 * @param ShippingCarrierDetailsType ShippingCarrierDetails
	 * @return ShippingCarrierDetailsType
	 */
	public function setShippingCarrierDetails($_ShippingCarrierDetails)
	{
		return ($this->ShippingCarrierDetails = $_ShippingCarrierDetails);
	}
	/**
	 * Get ShippingCarrierDetails
	 * @return EbayTradingTypeShippingCarrierDetailsType
	 */
	public function getShippingCarrierDetails()
	{
		return $this->ShippingCarrierDetails;
	}
	/**
	 * Set ReturnPolicyDetails
	 * @param ReturnPolicyDetailsType ReturnPolicyDetails
	 * @return ReturnPolicyDetailsType
	 */
	public function setReturnPolicyDetails($_ReturnPolicyDetails)
	{
		return ($this->ReturnPolicyDetails = $_ReturnPolicyDetails);
	}
	/**
	 * Get ReturnPolicyDetails
	 * @return EbayTradingTypeReturnPolicyDetailsType
	 */
	public function getReturnPolicyDetails()
	{
		return $this->ReturnPolicyDetails;
	}
	/**
	 * Set ListingStartPriceDetails
	 * @param ListingStartPriceDetailsType ListingStartPriceDetails
	 * @return ListingStartPriceDetailsType
	 */
	public function setListingStartPriceDetails($_ListingStartPriceDetails)
	{
		return ($this->ListingStartPriceDetails = $_ListingStartPriceDetails);
	}
	/**
	 * Get ListingStartPriceDetails
	 * @return EbayTradingTypeListingStartPriceDetailsType
	 */
	public function getListingStartPriceDetails()
	{
		return $this->ListingStartPriceDetails;
	}
	/**
	 * Set BuyerRequirementDetails
	 * @param SiteBuyerRequirementDetailsType BuyerRequirementDetails
	 * @return SiteBuyerRequirementDetailsType
	 */
	public function setBuyerRequirementDetails($_BuyerRequirementDetails)
	{
		return ($this->BuyerRequirementDetails = $_BuyerRequirementDetails);
	}
	/**
	 * Get BuyerRequirementDetails
	 * @return EbayTradingTypeSiteBuyerRequirementDetailsType
	 */
	public function getBuyerRequirementDetails()
	{
		return $this->BuyerRequirementDetails;
	}
	/**
	 * Set ListingFeatureDetails
	 * @param ListingFeatureDetailsType ListingFeatureDetails
	 * @return ListingFeatureDetailsType
	 */
	public function setListingFeatureDetails($_ListingFeatureDetails)
	{
		return ($this->ListingFeatureDetails = $_ListingFeatureDetails);
	}
	/**
	 * Get ListingFeatureDetails
	 * @return EbayTradingTypeListingFeatureDetailsType
	 */
	public function getListingFeatureDetails()
	{
		return $this->ListingFeatureDetails;
	}
	/**
	 * Set VariationDetails
	 * @param VariationDetailsType VariationDetails
	 * @return VariationDetailsType
	 */
	public function setVariationDetails($_VariationDetails)
	{
		return ($this->VariationDetails = $_VariationDetails);
	}
	/**
	 * Get VariationDetails
	 * @return EbayTradingTypeVariationDetailsType
	 */
	public function getVariationDetails()
	{
		return $this->VariationDetails;
	}
	/**
	 * Set ExcludeShippingLocationDetails
	 * @param ExcludeShippingLocationDetailsType ExcludeShippingLocationDetails
	 * @return ExcludeShippingLocationDetailsType
	 */
	public function setExcludeShippingLocationDetails($_ExcludeShippingLocationDetails)
	{
		return ($this->ExcludeShippingLocationDetails = $_ExcludeShippingLocationDetails);
	}
	/**
	 * Get ExcludeShippingLocationDetails
	 * @return EbayTradingTypeExcludeShippingLocationDetailsType
	 */
	public function getExcludeShippingLocationDetails()
	{
		return $this->ExcludeShippingLocationDetails;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * Set RecoupmentPolicyDetails
	 * @param RecoupmentPolicyDetailsType RecoupmentPolicyDetails
	 * @return RecoupmentPolicyDetailsType
	 */
	public function setRecoupmentPolicyDetails($_RecoupmentPolicyDetails)
	{
		return ($this->RecoupmentPolicyDetails = $_RecoupmentPolicyDetails);
	}
	/**
	 * Get RecoupmentPolicyDetails
	 * @return EbayTradingTypeRecoupmentPolicyDetailsType
	 */
	public function getRecoupmentPolicyDetails()
	{
		return $this->RecoupmentPolicyDetails;
	}
	/**
	 * Set ShippingCategoryDetails
	 * @param ShippingCategoryDetailsType ShippingCategoryDetails
	 * @return ShippingCategoryDetailsType
	 */
	public function setShippingCategoryDetails($_ShippingCategoryDetails)
	{
		return ($this->ShippingCategoryDetails = $_ShippingCategoryDetails);
	}
	/**
	 * Get ShippingCategoryDetails
	 * @return EbayTradingTypeShippingCategoryDetailsType
	 */
	public function getShippingCategoryDetails()
	{
		return $this->ShippingCategoryDetails;
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