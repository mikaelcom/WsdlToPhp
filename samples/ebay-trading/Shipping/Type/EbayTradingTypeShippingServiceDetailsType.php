<?php
/**
 * Class file for EbayTradingTypeShippingServiceDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingServiceDetailsType
 * Documentation : Details about a specific shipping service.
 * @date 04/07/2012
 */
class EbayTradingTypeShippingServiceDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Full name of the shipping service for display purposes.
	 * @var string
	 */
	public $Description;
	/**
	 * The ExpeditedService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the shipping service is an expedited shipping service. See Enabling Get It Fast. Only returned for sites for which the Get It Fast feature is enabled and only if true.<br><br> Related fields:<br> Item.DispatchTimeMax and Item.GetItFast in AddItem
	 * @var boolean
	 */
	public $ExpeditedService;
	/**
	 * The InternationalService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the shipping service is an international shipping service. An international shipping service option is required if an item is being shipped from one country (origin) to another (destination). <br><br> Related field: Item.ShippingDetails.InternationalShippingServiceOption in AddItem.
	 * @var boolean
	 */
	public $InternationalService;
	/**
	 * The ShippingService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of shipping service option. For a list of valid values, call GeteBayDetails with DetailName set to ShippingServiceDetails. The ShippingServiceDetails.ValidForSellingFlow flag must also be present. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
	 * @var token
	 */
	public $ShippingService;
	/**
	 * The ShippingServiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric identifier. A value greater than 50000 represents an international shipping service (confirmed by InternationalShippingService being true). Some applications use this ID to look up shipping services more efficiently. Also useful for applications that have migrated from the legacy XML API.
	 * @var int
	 */
	public $ShippingServiceID;
	/**
	 * The ShippingTimeMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum guaranteed number of days the shipping carrier will take to ship an item (not including the time it takes the seller to deliver the item to the shipping carrier). Always returned when ExpeditedService is true or if defined for a particular service. See Enabling Get It Fast feature.
	 * @var int
	 */
	public $ShippingTimeMax;
	/**
	 * The ShippingTimeMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The minimum guaranteed number of days the shipping carrier will take to ship an item (not including the time it takes the seller to deliver the item to the shipping carrier). Always returned when ExpeditedService is true or if defined for a particular service. See Enabling Get It Fast feature.
	 * @var int
	 */
	public $ShippingTimeMin;
	/**
	 * The ShippingServiceCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For future use.
	 * @var EbayTradingTypeShippingServiceCodeType
	 */
	public $ShippingServiceCode;
	/**
	 * The ServiceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The types of shipping that this shipping service supports.
	 * @var EbayTradingTypeShippingTypeCodeType
	 */
	public $ServiceType;
	/**
	 * The ShippingPackage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The kinds of packages supported by this shipping service.
	 * @var EbayTradingTypeShippingPackageCodeType
	 */
	public $ShippingPackage;
	/**
	 * The DimensionsRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : True if this shipping service requires package dimensions.
	 * @var boolean
	 */
	public $DimensionsRequired;
	/**
	 * The ValidForSellingFlow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the shipping service can be used in the AddItem family of calls. If false, the shipping service is not currently supported when creating or modifying listings.
	 * @var boolean
	 */
	public $ValidForSellingFlow;
	/**
	 * The SurchargeApplicable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : True if a surcharge applies for any region that this service ships to.
	 * @var boolean
	 */
	public $SurchargeApplicable;
	/**
	 * The ShippingCarrier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The kinds of carrier supported by this shipping service.
	 * @var EbayTradingTypeShippingCarrierCodeType
	 */
	public $ShippingCarrier;
	/**
	 * The CODService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applies to the Italy site (site ID 101) only. Indicates whether the shipping service is a Cash On Delivery shipping service. Returned only if true.
	 * @var boolean
	 */
	public $CODService;
	/**
	 * The DeprecationDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A mechanism by which details about deprecation of a shipping service is announced. See also MappedToShippingServiceID. If this container is empty, it means that there is no mapping for this shipping service and that the shipping service will be dropped from the listing without an accompanying warning message from the eBay API.
	 * @var EbayTradingTypeAnnouncementMessageType
	 */
	public $DeprecationDetails;
	/**
	 * The MappedToShippingServiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of another shipping service that will be used when a shipping service is deprecated. See also DeprecationDetails.
	 * @var int
	 */
	public $MappedToShippingServiceID;
	/**
	 * The CostGroupFlat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If returned, this is the shipping service group to which the shipping service belongs. Valid values are found in CostGroupFlatCodeType.
	 * @var token
	 */
	public $CostGroupFlat;
	/**
	 * The ShippingServicePackageDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Shipping Package level details for the enclosing shipping service, this complex type replaces the existing ShippingPackage type.
	 * @var EbayTradingTypeShippingServicePackageDetailsType
	 */
	public $ShippingServicePackageDetails;
	/**
	 * The WeightRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, a seller who selects this package type for the listing and then offers this shipping service must specify WeightMajor and WeightMinor in the item definition. If not returned, WeightRequired is false.
	 * @var boolean
	 */
	public $WeightRequired;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The ShippingCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the shipping category. Shipping categories include the following: ECONOMY, STANDARD, EXPEDITED, ONE_DAY, PICKUP, OTHER, and NONE. International shipping services are generally grouped into the NONE category. For more information on these shipping categories, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site.
	 * @var token
	 */
	public $ShippingCategory;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Description
	 * @param boolean ExpeditedService
	 * @param boolean InternationalService
	 * @param token ShippingService
	 * @param int ShippingServiceID
	 * @param int ShippingTimeMax
	 * @param int ShippingTimeMin
	 * @param EbayTradingTypeShippingServiceCodeType ShippingServiceCode
	 * @param EbayTradingTypeShippingTypeCodeType ServiceType
	 * @param EbayTradingTypeShippingPackageCodeType ShippingPackage
	 * @param boolean DimensionsRequired
	 * @param boolean ValidForSellingFlow
	 * @param boolean SurchargeApplicable
	 * @param EbayTradingTypeShippingCarrierCodeType ShippingCarrier
	 * @param boolean CODService
	 * @param EbayTradingTypeAnnouncementMessageType DeprecationDetails
	 * @param int MappedToShippingServiceID
	 * @param token CostGroupFlat
	 * @param EbayTradingTypeShippingServicePackageDetailsType ShippingServicePackageDetails
	 * @param boolean WeightRequired
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param token ShippingCategory
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingServiceDetailsType
	 */
	public function __construct($_Description = null,$_ExpeditedService = null,$_InternationalService = null,$_ShippingService = null,$_ShippingServiceID = null,$_ShippingTimeMax = null,$_ShippingTimeMin = null,$_ShippingServiceCode = null,$_ServiceType = null,$_ShippingPackage = null,$_DimensionsRequired = null,$_ValidForSellingFlow = null,$_SurchargeApplicable = null,$_ShippingCarrier = null,$_CODService = null,$_DeprecationDetails = null,$_MappedToShippingServiceID = null,$_CostGroupFlat = null,$_ShippingServicePackageDetails = null,$_WeightRequired = null,$_DetailVersion = null,$_UpdateTime = null,$_ShippingCategory = null,$_any = null)
	{
		parent::__construct(array('Description'=>$_Description,'ExpeditedService'=>$_ExpeditedService,'InternationalService'=>$_InternationalService,'ShippingService'=>$_ShippingService,'ShippingServiceID'=>$_ShippingServiceID,'ShippingTimeMax'=>$_ShippingTimeMax,'ShippingTimeMin'=>$_ShippingTimeMin,'ShippingServiceCode'=>$_ShippingServiceCode,'ServiceType'=>$_ServiceType,'ShippingPackage'=>$_ShippingPackage,'DimensionsRequired'=>$_DimensionsRequired,'ValidForSellingFlow'=>$_ValidForSellingFlow,'SurchargeApplicable'=>$_SurchargeApplicable,'ShippingCarrier'=>$_ShippingCarrier,'CODService'=>$_CODService,'DeprecationDetails'=>$_DeprecationDetails,'MappedToShippingServiceID'=>$_MappedToShippingServiceID,'CostGroupFlat'=>$_CostGroupFlat,'ShippingServicePackageDetails'=>$_ShippingServicePackageDetails,'WeightRequired'=>$_WeightRequired,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'ShippingCategory'=>$_ShippingCategory,'any'=>$_any));
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set ExpeditedService
	 * @param boolean ExpeditedService
	 * @return boolean
	 */
	public function setExpeditedService($_ExpeditedService)
	{
		return ($this->ExpeditedService = $_ExpeditedService);
	}
	/**
	 * Get ExpeditedService
	 * @return boolean
	 */
	public function getExpeditedService()
	{
		return $this->ExpeditedService;
	}
	/**
	 * Set InternationalService
	 * @param boolean InternationalService
	 * @return boolean
	 */
	public function setInternationalService($_InternationalService)
	{
		return ($this->InternationalService = $_InternationalService);
	}
	/**
	 * Get InternationalService
	 * @return boolean
	 */
	public function getInternationalService()
	{
		return $this->InternationalService;
	}
	/**
	 * Set ShippingService
	 * @param token ShippingService
	 * @return token
	 */
	public function setShippingService($_ShippingService)
	{
		return ($this->ShippingService = $_ShippingService);
	}
	/**
	 * Get ShippingService
	 * @return token
	 */
	public function getShippingService()
	{
		return $this->ShippingService;
	}
	/**
	 * Set ShippingServiceID
	 * @param int ShippingServiceID
	 * @return int
	 */
	public function setShippingServiceID($_ShippingServiceID)
	{
		return ($this->ShippingServiceID = $_ShippingServiceID);
	}
	/**
	 * Get ShippingServiceID
	 * @return int
	 */
	public function getShippingServiceID()
	{
		return $this->ShippingServiceID;
	}
	/**
	 * Set ShippingTimeMax
	 * @param int ShippingTimeMax
	 * @return int
	 */
	public function setShippingTimeMax($_ShippingTimeMax)
	{
		return ($this->ShippingTimeMax = $_ShippingTimeMax);
	}
	/**
	 * Get ShippingTimeMax
	 * @return int
	 */
	public function getShippingTimeMax()
	{
		return $this->ShippingTimeMax;
	}
	/**
	 * Set ShippingTimeMin
	 * @param int ShippingTimeMin
	 * @return int
	 */
	public function setShippingTimeMin($_ShippingTimeMin)
	{
		return ($this->ShippingTimeMin = $_ShippingTimeMin);
	}
	/**
	 * Get ShippingTimeMin
	 * @return int
	 */
	public function getShippingTimeMin()
	{
		return $this->ShippingTimeMin;
	}
	/**
	 * Set ShippingServiceCode
	 * @param ShippingServiceCodeType ShippingServiceCode
	 * @return ShippingServiceCodeType
	 */
	public function setShippingServiceCode($_ShippingServiceCode)
	{
		return ($this->ShippingServiceCode = EbayTradingTypeShippingServiceCodeType::valueIsValid($_ShippingServiceCode)?$_ShippingServiceCode:null);
	}
	/**
	 * Get ShippingServiceCode
	 * @return EbayTradingTypeShippingServiceCodeType
	 */
	public function getShippingServiceCode()
	{
		return $this->ShippingServiceCode;
	}
	/**
	 * Set ServiceType
	 * @param ShippingTypeCodeType ServiceType
	 * @return ShippingTypeCodeType
	 */
	public function setServiceType($_ServiceType)
	{
		return ($this->ServiceType = EbayTradingTypeShippingTypeCodeType::valueIsValid($_ServiceType)?$_ServiceType:null);
	}
	/**
	 * Get ServiceType
	 * @return EbayTradingTypeShippingTypeCodeType
	 */
	public function getServiceType()
	{
		return $this->ServiceType;
	}
	/**
	 * Set ShippingPackage
	 * @param ShippingPackageCodeType ShippingPackage
	 * @return ShippingPackageCodeType
	 */
	public function setShippingPackage($_ShippingPackage)
	{
		return ($this->ShippingPackage = EbayTradingTypeShippingPackageCodeType::valueIsValid($_ShippingPackage)?$_ShippingPackage:null);
	}
	/**
	 * Get ShippingPackage
	 * @return EbayTradingTypeShippingPackageCodeType
	 */
	public function getShippingPackage()
	{
		return $this->ShippingPackage;
	}
	/**
	 * Set DimensionsRequired
	 * @param boolean DimensionsRequired
	 * @return boolean
	 */
	public function setDimensionsRequired($_DimensionsRequired)
	{
		return ($this->DimensionsRequired = $_DimensionsRequired);
	}
	/**
	 * Get DimensionsRequired
	 * @return boolean
	 */
	public function getDimensionsRequired()
	{
		return $this->DimensionsRequired;
	}
	/**
	 * Set ValidForSellingFlow
	 * @param boolean ValidForSellingFlow
	 * @return boolean
	 */
	public function setValidForSellingFlow($_ValidForSellingFlow)
	{
		return ($this->ValidForSellingFlow = $_ValidForSellingFlow);
	}
	/**
	 * Get ValidForSellingFlow
	 * @return boolean
	 */
	public function getValidForSellingFlow()
	{
		return $this->ValidForSellingFlow;
	}
	/**
	 * Set SurchargeApplicable
	 * @param boolean SurchargeApplicable
	 * @return boolean
	 */
	public function setSurchargeApplicable($_SurchargeApplicable)
	{
		return ($this->SurchargeApplicable = $_SurchargeApplicable);
	}
	/**
	 * Get SurchargeApplicable
	 * @return boolean
	 */
	public function getSurchargeApplicable()
	{
		return $this->SurchargeApplicable;
	}
	/**
	 * Set ShippingCarrier
	 * @param ShippingCarrierCodeType ShippingCarrier
	 * @return ShippingCarrierCodeType
	 */
	public function setShippingCarrier($_ShippingCarrier)
	{
		return ($this->ShippingCarrier = EbayTradingTypeShippingCarrierCodeType::valueIsValid($_ShippingCarrier)?$_ShippingCarrier:null);
	}
	/**
	 * Get ShippingCarrier
	 * @return EbayTradingTypeShippingCarrierCodeType
	 */
	public function getShippingCarrier()
	{
		return $this->ShippingCarrier;
	}
	/**
	 * Set CODService
	 * @param boolean CODService
	 * @return boolean
	 */
	public function setCODService($_CODService)
	{
		return ($this->CODService = $_CODService);
	}
	/**
	 * Get CODService
	 * @return boolean
	 */
	public function getCODService()
	{
		return $this->CODService;
	}
	/**
	 * Set DeprecationDetails
	 * @param AnnouncementMessageType DeprecationDetails
	 * @return AnnouncementMessageType
	 */
	public function setDeprecationDetails($_DeprecationDetails)
	{
		return ($this->DeprecationDetails = $_DeprecationDetails);
	}
	/**
	 * Get DeprecationDetails
	 * @return EbayTradingTypeAnnouncementMessageType
	 */
	public function getDeprecationDetails()
	{
		return $this->DeprecationDetails;
	}
	/**
	 * Set MappedToShippingServiceID
	 * @param int MappedToShippingServiceID
	 * @return int
	 */
	public function setMappedToShippingServiceID($_MappedToShippingServiceID)
	{
		return ($this->MappedToShippingServiceID = $_MappedToShippingServiceID);
	}
	/**
	 * Get MappedToShippingServiceID
	 * @return int
	 */
	public function getMappedToShippingServiceID()
	{
		return $this->MappedToShippingServiceID;
	}
	/**
	 * Set CostGroupFlat
	 * @param token CostGroupFlat
	 * @return token
	 */
	public function setCostGroupFlat($_CostGroupFlat)
	{
		return ($this->CostGroupFlat = $_CostGroupFlat);
	}
	/**
	 * Get CostGroupFlat
	 * @return token
	 */
	public function getCostGroupFlat()
	{
		return $this->CostGroupFlat;
	}
	/**
	 * Set ShippingServicePackageDetails
	 * @param ShippingServicePackageDetailsType ShippingServicePackageDetails
	 * @return ShippingServicePackageDetailsType
	 */
	public function setShippingServicePackageDetails($_ShippingServicePackageDetails)
	{
		return ($this->ShippingServicePackageDetails = $_ShippingServicePackageDetails);
	}
	/**
	 * Get ShippingServicePackageDetails
	 * @return EbayTradingTypeShippingServicePackageDetailsType
	 */
	public function getShippingServicePackageDetails()
	{
		return $this->ShippingServicePackageDetails;
	}
	/**
	 * Set WeightRequired
	 * @param boolean WeightRequired
	 * @return boolean
	 */
	public function setWeightRequired($_WeightRequired)
	{
		return ($this->WeightRequired = $_WeightRequired);
	}
	/**
	 * Get WeightRequired
	 * @return boolean
	 */
	public function getWeightRequired()
	{
		return $this->WeightRequired;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
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
	 * Set ShippingCategory
	 * @param token ShippingCategory
	 * @return token
	 */
	public function setShippingCategory($_ShippingCategory)
	{
		return ($this->ShippingCategory = $_ShippingCategory);
	}
	/**
	 * Get ShippingCategory
	 * @return token
	 */
	public function getShippingCategory()
	{
		return $this->ShippingCategory;
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