<?php
/**
 * Class file for EbayTradingTypeGetCategoriesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategoriesResponseType
 * Documentation : Contains the category data for the eBay site specified as input. The category data is contained in a CategoryArrayType object, within which are zero, one, or multiple CategoryType objects. Each CategoryType object contains the detail data for one category. Other fields tell how many categories are returned in a call, when the category hierarchy was last updated, and the version of the category hierarchy (all three of which can differ from one eBay site to the next).
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategoriesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CategoryArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : List of the returned categories. The category array contains one CategoryType object for each returned category. Returns empty if no detail level is specified.
	 * @var EbayTradingTypeCategoryArrayType
	 */
	public $CategoryArray;
	/**
	 * The CategoryCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the number of categories returned (i.e., the number of CategoryType objects in CategoryArray).
	 * @var int
	 */
	public $CategoryCount;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the last date and time that eBay modified the category hierarchy for the specified eBay site.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The CategoryVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the version of the category hierarchy on the specified eBay site.
	 * @var string
	 */
	public $CategoryVersion;
	/**
	 * The ReservePriceAllowed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, ReservePriceAllowed indicates that all categories on the site allow the seller to specify a reserve price for an item. If false, this field is not returned in the response and all categories on the site do not normally allow sellers to specify reserve prices. The Category.ORPA (override reserve price allowed) field can override (or toggle) the reserve price allowed setting for a given category. For example, if ReservePriceAllowed is false and Category.ORPA is true, the category overrides the site setting and supports reserve prices. If ReservePriceAllowed is true and Category.ORPA is true, the category overrides the site setting and does does not support reserve prices.
	 * @var boolean
	 */
	public $ReservePriceAllowed;
	/**
	 * The MinimumReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the lowest possible reserve price allowed for any item listed in any category on the site. You can use the fields returned by GetCategoryFeatures to determine if a different Minimum Reserve Price is defined for the category you want to use.
	 * @var double
	 */
	public $MinimumReservePrice;
	/**
	 * The ReduceReserveAllowed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, ReduceReserveAllowed indicates that all categories on the site allow the seller to reduce an item's reserve price. If false, this field is not returned in the response and all categories on the site do not normally allow sellers to reduce an item's reserve price. The Category.ORRA (override reduce reserve price) field can override (or toggle) the reserve price reduction setting for a given category. For example, if ReduceReserveAllowed is false and Category.ORRA is true, the category overrides the site setting and supports reducing reserve prices. If ReduceReserveAllowed is true and Category.ORRA is true, the category overrides the site setting and does does not support reducing reserve prices.
	 * @var boolean
	 */
	public $ReduceReserveAllowed;
	/**
	 * Constructor
	 * @param EbayTradingTypeCategoryArrayType CategoryArray
	 * @param int CategoryCount
	 * @param dateTime UpdateTime
	 * @param string CategoryVersion
	 * @param boolean ReservePriceAllowed
	 * @param double MinimumReservePrice
	 * @param boolean ReduceReserveAllowed
	 * @return EbayTradingTypeGetCategoriesResponseType
	 */
	public function __construct($_CategoryArray = null,$_CategoryCount = null,$_UpdateTime = null,$_CategoryVersion = null,$_ReservePriceAllowed = null,$_MinimumReservePrice = null,$_ReduceReserveAllowed = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryArray'=>$_CategoryArray,'CategoryCount'=>$_CategoryCount,'UpdateTime'=>$_UpdateTime,'CategoryVersion'=>$_CategoryVersion,'ReservePriceAllowed'=>$_ReservePriceAllowed,'MinimumReservePrice'=>$_MinimumReservePrice,'ReduceReserveAllowed'=>$_ReduceReserveAllowed));
	}
	/**
	 * Set CategoryArray
	 * @param CategoryArrayType CategoryArray
	 * @return CategoryArrayType
	 */
	public function setCategoryArray($_CategoryArray)
	{
		return ($this->CategoryArray = $_CategoryArray);
	}
	/**
	 * Get CategoryArray
	 * @return EbayTradingTypeCategoryArrayType
	 */
	public function getCategoryArray()
	{
		return $this->CategoryArray;
	}
	/**
	 * Set CategoryCount
	 * @param int CategoryCount
	 * @return int
	 */
	public function setCategoryCount($_CategoryCount)
	{
		return ($this->CategoryCount = $_CategoryCount);
	}
	/**
	 * Get CategoryCount
	 * @return int
	 */
	public function getCategoryCount()
	{
		return $this->CategoryCount;
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
	 * Set CategoryVersion
	 * @param string CategoryVersion
	 * @return string
	 */
	public function setCategoryVersion($_CategoryVersion)
	{
		return ($this->CategoryVersion = $_CategoryVersion);
	}
	/**
	 * Get CategoryVersion
	 * @return string
	 */
	public function getCategoryVersion()
	{
		return $this->CategoryVersion;
	}
	/**
	 * Set ReservePriceAllowed
	 * @param boolean ReservePriceAllowed
	 * @return boolean
	 */
	public function setReservePriceAllowed($_ReservePriceAllowed)
	{
		return ($this->ReservePriceAllowed = $_ReservePriceAllowed);
	}
	/**
	 * Get ReservePriceAllowed
	 * @return boolean
	 */
	public function getReservePriceAllowed()
	{
		return $this->ReservePriceAllowed;
	}
	/**
	 * Set MinimumReservePrice
	 * @param double MinimumReservePrice
	 * @return double
	 */
	public function setMinimumReservePrice($_MinimumReservePrice)
	{
		return ($this->MinimumReservePrice = $_MinimumReservePrice);
	}
	/**
	 * Get MinimumReservePrice
	 * @return double
	 */
	public function getMinimumReservePrice()
	{
		return $this->MinimumReservePrice;
	}
	/**
	 * Set ReduceReserveAllowed
	 * @param boolean ReduceReserveAllowed
	 * @return boolean
	 */
	public function setReduceReserveAllowed($_ReduceReserveAllowed)
	{
		return ($this->ReduceReserveAllowed = $_ReduceReserveAllowed);
	}
	/**
	 * Get ReduceReserveAllowed
	 * @return boolean
	 */
	public function getReduceReserveAllowed()
	{
		return $this->ReduceReserveAllowed;
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