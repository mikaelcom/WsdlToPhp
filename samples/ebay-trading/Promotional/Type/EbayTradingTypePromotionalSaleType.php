<?php
/**
 * Class file for EbayTradingTypePromotionalSaleType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionalSaleType
 * Documentation : Details for a single promotional sale.
 * @date 04/07/2012
 */
class EbayTradingTypePromotionalSaleType extends EbayTradingWsdlClass
{
	/**
	 * The PromotionalSaleID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique ID of a promotional sale (discount and/or free shipping) for items. This field is an input field only for the SetPromotionalSale call and only if you are not adding a new promotional sale.
	 * @var long
	 */
	public $PromotionalSaleID;
	/**
	 * The PromotionalSaleName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of a promotional sale for items.
	 * @var string
	 */
	public $PromotionalSaleName;
	/**
	 * The PromotionalSaleItemIDArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Items covered by a promotional sale.
	 * @var EbayTradingTypeItemIDArrayType
	 */
	public $PromotionalSaleItemIDArray;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Status of a promotional sale for items.
	 * @var EbayTradingTypePromotionalSaleStatusCodeType
	 */
	public $Status;
	/**
	 * The DiscountType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of a promotional sale discount for items (for example, percentage). Applies to price discount sales only.
	 * @var EbayTradingTypeDiscountCodeType
	 */
	public $DiscountType;
	/**
	 * The DiscountValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Value of a promotional sale discount for items, a percentage discount or a fixed amount reduction. Percentage discounts must be at least 5% and cannot exceed 75% of the original listing price. Fixed amount discounts will be in the currency of the original listing. Applies to price discount sales only.
	 * @var double
	 */
	public $DiscountValue;
	/**
	 * The PromotionalSaleStartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Start date of a promotional sale for items. Promotional sales can start immediately or be scheduled to start at a later date. Some sites require items to have been listed for a specific duration before they can be added to a promotional sale (for example, on the US site, items must have been listed for a day before they can be added to a promotional sale).
	 * @var dateTime
	 */
	public $PromotionalSaleStartTime;
	/**
	 * The PromotionalSaleEndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : End date of a promotional sale discount for items. Maximum listing durations vary by site from 14 days to 45 days. The minimum promotional sale duration is 1 day for most sites, but 3 days on some sites.
	 * @var dateTime
	 */
	public $PromotionalSaleEndTime;
	/**
	 * The PromotionalSaleType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of promotional sale: price discount, free shipping, or both.
	 * @var EbayTradingTypePromotionalSaleTypeCodeType
	 */
	public $PromotionalSaleType;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long PromotionalSaleID
	 * @param string PromotionalSaleName
	 * @param EbayTradingTypeItemIDArrayType PromotionalSaleItemIDArray
	 * @param EbayTradingTypePromotionalSaleStatusCodeType Status
	 * @param EbayTradingTypeDiscountCodeType DiscountType
	 * @param double DiscountValue
	 * @param dateTime PromotionalSaleStartTime
	 * @param dateTime PromotionalSaleEndTime
	 * @param EbayTradingTypePromotionalSaleTypeCodeType PromotionalSaleType
	 * @param DOMDocument any
	 * @return EbayTradingTypePromotionalSaleType
	 */
	public function __construct($_PromotionalSaleID = null,$_PromotionalSaleName = null,$_PromotionalSaleItemIDArray = null,$_Status = null,$_DiscountType = null,$_DiscountValue = null,$_PromotionalSaleStartTime = null,$_PromotionalSaleEndTime = null,$_PromotionalSaleType = null,$_any = null)
	{
		parent::__construct(array('PromotionalSaleID'=>$_PromotionalSaleID,'PromotionalSaleName'=>$_PromotionalSaleName,'PromotionalSaleItemIDArray'=>$_PromotionalSaleItemIDArray,'Status'=>$_Status,'DiscountType'=>$_DiscountType,'DiscountValue'=>$_DiscountValue,'PromotionalSaleStartTime'=>$_PromotionalSaleStartTime,'PromotionalSaleEndTime'=>$_PromotionalSaleEndTime,'PromotionalSaleType'=>$_PromotionalSaleType,'any'=>$_any));
	}
	/**
	 * Set PromotionalSaleID
	 * @param long PromotionalSaleID
	 * @return long
	 */
	public function setPromotionalSaleID($_PromotionalSaleID)
	{
		return ($this->PromotionalSaleID = $_PromotionalSaleID);
	}
	/**
	 * Get PromotionalSaleID
	 * @return long
	 */
	public function getPromotionalSaleID()
	{
		return $this->PromotionalSaleID;
	}
	/**
	 * Set PromotionalSaleName
	 * @param string PromotionalSaleName
	 * @return string
	 */
	public function setPromotionalSaleName($_PromotionalSaleName)
	{
		return ($this->PromotionalSaleName = $_PromotionalSaleName);
	}
	/**
	 * Get PromotionalSaleName
	 * @return string
	 */
	public function getPromotionalSaleName()
	{
		return $this->PromotionalSaleName;
	}
	/**
	 * Set PromotionalSaleItemIDArray
	 * @param ItemIDArrayType PromotionalSaleItemIDArray
	 * @return ItemIDArrayType
	 */
	public function setPromotionalSaleItemIDArray($_PromotionalSaleItemIDArray)
	{
		return ($this->PromotionalSaleItemIDArray = $_PromotionalSaleItemIDArray);
	}
	/**
	 * Get PromotionalSaleItemIDArray
	 * @return EbayTradingTypeItemIDArrayType
	 */
	public function getPromotionalSaleItemIDArray()
	{
		return $this->PromotionalSaleItemIDArray;
	}
	/**
	 * Set Status
	 * @param PromotionalSaleStatusCodeType Status
	 * @return PromotionalSaleStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypePromotionalSaleStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypePromotionalSaleStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set DiscountType
	 * @param DiscountCodeType DiscountType
	 * @return DiscountCodeType
	 */
	public function setDiscountType($_DiscountType)
	{
		return ($this->DiscountType = EbayTradingTypeDiscountCodeType::valueIsValid($_DiscountType)?$_DiscountType:null);
	}
	/**
	 * Get DiscountType
	 * @return EbayTradingTypeDiscountCodeType
	 */
	public function getDiscountType()
	{
		return $this->DiscountType;
	}
	/**
	 * Set DiscountValue
	 * @param double DiscountValue
	 * @return double
	 */
	public function setDiscountValue($_DiscountValue)
	{
		return ($this->DiscountValue = $_DiscountValue);
	}
	/**
	 * Get DiscountValue
	 * @return double
	 */
	public function getDiscountValue()
	{
		return $this->DiscountValue;
	}
	/**
	 * Set PromotionalSaleStartTime
	 * @param dateTime PromotionalSaleStartTime
	 * @return dateTime
	 */
	public function setPromotionalSaleStartTime($_PromotionalSaleStartTime)
	{
		return ($this->PromotionalSaleStartTime = $_PromotionalSaleStartTime);
	}
	/**
	 * Get PromotionalSaleStartTime
	 * @return dateTime
	 */
	public function getPromotionalSaleStartTime()
	{
		return $this->PromotionalSaleStartTime;
	}
	/**
	 * Set PromotionalSaleEndTime
	 * @param dateTime PromotionalSaleEndTime
	 * @return dateTime
	 */
	public function setPromotionalSaleEndTime($_PromotionalSaleEndTime)
	{
		return ($this->PromotionalSaleEndTime = $_PromotionalSaleEndTime);
	}
	/**
	 * Get PromotionalSaleEndTime
	 * @return dateTime
	 */
	public function getPromotionalSaleEndTime()
	{
		return $this->PromotionalSaleEndTime;
	}
	/**
	 * Set PromotionalSaleType
	 * @param PromotionalSaleTypeCodeType PromotionalSaleType
	 * @return PromotionalSaleTypeCodeType
	 */
	public function setPromotionalSaleType($_PromotionalSaleType)
	{
		return ($this->PromotionalSaleType = EbayTradingTypePromotionalSaleTypeCodeType::valueIsValid($_PromotionalSaleType)?$_PromotionalSaleType:null);
	}
	/**
	 * Get PromotionalSaleType
	 * @return EbayTradingTypePromotionalSaleTypeCodeType
	 */
	public function getPromotionalSaleType()
	{
		return $this->PromotionalSaleType;
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