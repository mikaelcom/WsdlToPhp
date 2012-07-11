<?php
/**
 * Class file for AmazonWebServicesTypeListingProductDetails
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeListingProductDetails
 * @date 10/07/2012
 */
class AmazonWebServicesTypeListingProductDetails extends AmazonWebServicesWsdlClass
{
	/**
	 * The ExchangeId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeId;
	/**
	 * The ListingId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ListingId;
	/**
	 * The ExchangeTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeTitle;
	/**
	 * The ExchangePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangePrice;
	/**
	 * The ExchangeAsin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeAsin;
	/**
	 * The ExchangeEndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeEndDate;
	/**
	 * The ExchangeTinyImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeTinyImage;
	/**
	 * The ExchangeSellerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeSellerId;
	/**
	 * The ExchangeSellerNickname
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeSellerNickname;
	/**
	 * The ExchangeStartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeStartDate;
	/**
	 * The ExchangeStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeStatus;
	/**
	 * The ExchangeQuantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeQuantity;
	/**
	 * The ExchangeQuantityAllocated
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeQuantityAllocated;
	/**
	 * The ExchangeFeaturedCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeFeaturedCategory;
	/**
	 * The ExchangeCondition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeCondition;
	/**
	 * The ExchangeConditionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeConditionType;
	/**
	 * The ExchangeAvailability
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeAvailability;
	/**
	 * The ExchangeOfferingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeOfferingType;
	/**
	 * The ExchangeSellerState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeSellerState;
	/**
	 * The ExchangeSellerCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeSellerCountry;
	/**
	 * The ExchangeSellerRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeSellerRating;
	/**
	 * Constructor
	 * @param string ExchangeId
	 * @param string ListingId
	 * @param string ExchangeTitle
	 * @param string ExchangePrice
	 * @param string ExchangeAsin
	 * @param string ExchangeEndDate
	 * @param string ExchangeTinyImage
	 * @param string ExchangeSellerId
	 * @param string ExchangeSellerNickname
	 * @param string ExchangeStartDate
	 * @param string ExchangeStatus
	 * @param string ExchangeQuantity
	 * @param string ExchangeQuantityAllocated
	 * @param string ExchangeFeaturedCategory
	 * @param string ExchangeCondition
	 * @param string ExchangeConditionType
	 * @param string ExchangeAvailability
	 * @param string ExchangeOfferingType
	 * @param string ExchangeSellerState
	 * @param string ExchangeSellerCountry
	 * @param string ExchangeSellerRating
	 * @return AmazonWebServicesTypeListingProductDetails
	 */
	public function __construct($_ExchangeId = null,$_ListingId = null,$_ExchangeTitle = null,$_ExchangePrice = null,$_ExchangeAsin = null,$_ExchangeEndDate = null,$_ExchangeTinyImage = null,$_ExchangeSellerId = null,$_ExchangeSellerNickname = null,$_ExchangeStartDate = null,$_ExchangeStatus = null,$_ExchangeQuantity = null,$_ExchangeQuantityAllocated = null,$_ExchangeFeaturedCategory = null,$_ExchangeCondition = null,$_ExchangeConditionType = null,$_ExchangeAvailability = null,$_ExchangeOfferingType = null,$_ExchangeSellerState = null,$_ExchangeSellerCountry = null,$_ExchangeSellerRating = null)
	{
		parent::__construct(array('ExchangeId'=>$_ExchangeId,'ListingId'=>$_ListingId,'ExchangeTitle'=>$_ExchangeTitle,'ExchangePrice'=>$_ExchangePrice,'ExchangeAsin'=>$_ExchangeAsin,'ExchangeEndDate'=>$_ExchangeEndDate,'ExchangeTinyImage'=>$_ExchangeTinyImage,'ExchangeSellerId'=>$_ExchangeSellerId,'ExchangeSellerNickname'=>$_ExchangeSellerNickname,'ExchangeStartDate'=>$_ExchangeStartDate,'ExchangeStatus'=>$_ExchangeStatus,'ExchangeQuantity'=>$_ExchangeQuantity,'ExchangeQuantityAllocated'=>$_ExchangeQuantityAllocated,'ExchangeFeaturedCategory'=>$_ExchangeFeaturedCategory,'ExchangeCondition'=>$_ExchangeCondition,'ExchangeConditionType'=>$_ExchangeConditionType,'ExchangeAvailability'=>$_ExchangeAvailability,'ExchangeOfferingType'=>$_ExchangeOfferingType,'ExchangeSellerState'=>$_ExchangeSellerState,'ExchangeSellerCountry'=>$_ExchangeSellerCountry,'ExchangeSellerRating'=>$_ExchangeSellerRating));
	}
	/**
	 * Set ExchangeId
	 * @param string ExchangeId
	 * @return string
	 */
	public function setExchangeId($_ExchangeId)
	{
		return ($this->ExchangeId = $_ExchangeId);
	}
	/**
	 * Get ExchangeId
	 * @return string
	 */
	public function getExchangeId()
	{
		return $this->ExchangeId;
	}
	/**
	 * Set ListingId
	 * @param string ListingId
	 * @return string
	 */
	public function setListingId($_ListingId)
	{
		return ($this->ListingId = $_ListingId);
	}
	/**
	 * Get ListingId
	 * @return string
	 */
	public function getListingId()
	{
		return $this->ListingId;
	}
	/**
	 * Set ExchangeTitle
	 * @param string ExchangeTitle
	 * @return string
	 */
	public function setExchangeTitle($_ExchangeTitle)
	{
		return ($this->ExchangeTitle = $_ExchangeTitle);
	}
	/**
	 * Get ExchangeTitle
	 * @return string
	 */
	public function getExchangeTitle()
	{
		return $this->ExchangeTitle;
	}
	/**
	 * Set ExchangePrice
	 * @param string ExchangePrice
	 * @return string
	 */
	public function setExchangePrice($_ExchangePrice)
	{
		return ($this->ExchangePrice = $_ExchangePrice);
	}
	/**
	 * Get ExchangePrice
	 * @return string
	 */
	public function getExchangePrice()
	{
		return $this->ExchangePrice;
	}
	/**
	 * Set ExchangeAsin
	 * @param string ExchangeAsin
	 * @return string
	 */
	public function setExchangeAsin($_ExchangeAsin)
	{
		return ($this->ExchangeAsin = $_ExchangeAsin);
	}
	/**
	 * Get ExchangeAsin
	 * @return string
	 */
	public function getExchangeAsin()
	{
		return $this->ExchangeAsin;
	}
	/**
	 * Set ExchangeEndDate
	 * @param string ExchangeEndDate
	 * @return string
	 */
	public function setExchangeEndDate($_ExchangeEndDate)
	{
		return ($this->ExchangeEndDate = $_ExchangeEndDate);
	}
	/**
	 * Get ExchangeEndDate
	 * @return string
	 */
	public function getExchangeEndDate()
	{
		return $this->ExchangeEndDate;
	}
	/**
	 * Set ExchangeTinyImage
	 * @param string ExchangeTinyImage
	 * @return string
	 */
	public function setExchangeTinyImage($_ExchangeTinyImage)
	{
		return ($this->ExchangeTinyImage = $_ExchangeTinyImage);
	}
	/**
	 * Get ExchangeTinyImage
	 * @return string
	 */
	public function getExchangeTinyImage()
	{
		return $this->ExchangeTinyImage;
	}
	/**
	 * Set ExchangeSellerId
	 * @param string ExchangeSellerId
	 * @return string
	 */
	public function setExchangeSellerId($_ExchangeSellerId)
	{
		return ($this->ExchangeSellerId = $_ExchangeSellerId);
	}
	/**
	 * Get ExchangeSellerId
	 * @return string
	 */
	public function getExchangeSellerId()
	{
		return $this->ExchangeSellerId;
	}
	/**
	 * Set ExchangeSellerNickname
	 * @param string ExchangeSellerNickname
	 * @return string
	 */
	public function setExchangeSellerNickname($_ExchangeSellerNickname)
	{
		return ($this->ExchangeSellerNickname = $_ExchangeSellerNickname);
	}
	/**
	 * Get ExchangeSellerNickname
	 * @return string
	 */
	public function getExchangeSellerNickname()
	{
		return $this->ExchangeSellerNickname;
	}
	/**
	 * Set ExchangeStartDate
	 * @param string ExchangeStartDate
	 * @return string
	 */
	public function setExchangeStartDate($_ExchangeStartDate)
	{
		return ($this->ExchangeStartDate = $_ExchangeStartDate);
	}
	/**
	 * Get ExchangeStartDate
	 * @return string
	 */
	public function getExchangeStartDate()
	{
		return $this->ExchangeStartDate;
	}
	/**
	 * Set ExchangeStatus
	 * @param string ExchangeStatus
	 * @return string
	 */
	public function setExchangeStatus($_ExchangeStatus)
	{
		return ($this->ExchangeStatus = $_ExchangeStatus);
	}
	/**
	 * Get ExchangeStatus
	 * @return string
	 */
	public function getExchangeStatus()
	{
		return $this->ExchangeStatus;
	}
	/**
	 * Set ExchangeQuantity
	 * @param string ExchangeQuantity
	 * @return string
	 */
	public function setExchangeQuantity($_ExchangeQuantity)
	{
		return ($this->ExchangeQuantity = $_ExchangeQuantity);
	}
	/**
	 * Get ExchangeQuantity
	 * @return string
	 */
	public function getExchangeQuantity()
	{
		return $this->ExchangeQuantity;
	}
	/**
	 * Set ExchangeQuantityAllocated
	 * @param string ExchangeQuantityAllocated
	 * @return string
	 */
	public function setExchangeQuantityAllocated($_ExchangeQuantityAllocated)
	{
		return ($this->ExchangeQuantityAllocated = $_ExchangeQuantityAllocated);
	}
	/**
	 * Get ExchangeQuantityAllocated
	 * @return string
	 */
	public function getExchangeQuantityAllocated()
	{
		return $this->ExchangeQuantityAllocated;
	}
	/**
	 * Set ExchangeFeaturedCategory
	 * @param string ExchangeFeaturedCategory
	 * @return string
	 */
	public function setExchangeFeaturedCategory($_ExchangeFeaturedCategory)
	{
		return ($this->ExchangeFeaturedCategory = $_ExchangeFeaturedCategory);
	}
	/**
	 * Get ExchangeFeaturedCategory
	 * @return string
	 */
	public function getExchangeFeaturedCategory()
	{
		return $this->ExchangeFeaturedCategory;
	}
	/**
	 * Set ExchangeCondition
	 * @param string ExchangeCondition
	 * @return string
	 */
	public function setExchangeCondition($_ExchangeCondition)
	{
		return ($this->ExchangeCondition = $_ExchangeCondition);
	}
	/**
	 * Get ExchangeCondition
	 * @return string
	 */
	public function getExchangeCondition()
	{
		return $this->ExchangeCondition;
	}
	/**
	 * Set ExchangeConditionType
	 * @param string ExchangeConditionType
	 * @return string
	 */
	public function setExchangeConditionType($_ExchangeConditionType)
	{
		return ($this->ExchangeConditionType = $_ExchangeConditionType);
	}
	/**
	 * Get ExchangeConditionType
	 * @return string
	 */
	public function getExchangeConditionType()
	{
		return $this->ExchangeConditionType;
	}
	/**
	 * Set ExchangeAvailability
	 * @param string ExchangeAvailability
	 * @return string
	 */
	public function setExchangeAvailability($_ExchangeAvailability)
	{
		return ($this->ExchangeAvailability = $_ExchangeAvailability);
	}
	/**
	 * Get ExchangeAvailability
	 * @return string
	 */
	public function getExchangeAvailability()
	{
		return $this->ExchangeAvailability;
	}
	/**
	 * Set ExchangeOfferingType
	 * @param string ExchangeOfferingType
	 * @return string
	 */
	public function setExchangeOfferingType($_ExchangeOfferingType)
	{
		return ($this->ExchangeOfferingType = $_ExchangeOfferingType);
	}
	/**
	 * Get ExchangeOfferingType
	 * @return string
	 */
	public function getExchangeOfferingType()
	{
		return $this->ExchangeOfferingType;
	}
	/**
	 * Set ExchangeSellerState
	 * @param string ExchangeSellerState
	 * @return string
	 */
	public function setExchangeSellerState($_ExchangeSellerState)
	{
		return ($this->ExchangeSellerState = $_ExchangeSellerState);
	}
	/**
	 * Get ExchangeSellerState
	 * @return string
	 */
	public function getExchangeSellerState()
	{
		return $this->ExchangeSellerState;
	}
	/**
	 * Set ExchangeSellerCountry
	 * @param string ExchangeSellerCountry
	 * @return string
	 */
	public function setExchangeSellerCountry($_ExchangeSellerCountry)
	{
		return ($this->ExchangeSellerCountry = $_ExchangeSellerCountry);
	}
	/**
	 * Get ExchangeSellerCountry
	 * @return string
	 */
	public function getExchangeSellerCountry()
	{
		return $this->ExchangeSellerCountry;
	}
	/**
	 * Set ExchangeSellerRating
	 * @param string ExchangeSellerRating
	 * @return string
	 */
	public function setExchangeSellerRating($_ExchangeSellerRating)
	{
		return ($this->ExchangeSellerRating = $_ExchangeSellerRating);
	}
	/**
	 * Get ExchangeSellerRating
	 * @return string
	 */
	public function getExchangeSellerRating()
	{
		return $this->ExchangeSellerRating;
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