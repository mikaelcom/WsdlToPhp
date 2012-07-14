<?php
/**
 * Class file for PayPalTypeBusinessInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBusinessInfoType
 * Documentation : BusinessInfoType
 * @date 14/07/2012
 */
class PayPalTypeBusinessInfoType extends PayPalWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of business, such as corporation or sole proprietorship
	 * @var PayPalTypeBusinessTypeType
	 */
	public $Type;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Official name of business Character length and limitations: 75 alphanumeric characters
	 * @var PayPalTypeNameType
	 */
	public $Name;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Merchant’s business postal address
	 * @var PayPalTypeAddressType
	 */
	public $Address;
	/**
	 * The WorkPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Business’s primary telephone number Character length and limitations: 20 alphanumeric characters
	 * @var string
	 */
	public $WorkPhone;
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Line of business, as defined in the enumerations
	 * @var PayPalTypeBusinessCategoryType
	 */
	public $Category;
	/**
	 * The SubCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Business sub-category, as defined in the enumerations
	 * @var PayPalTypeBusinessSubCategoryType
	 */
	public $SubCategory;
	/**
	 * The AveragePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Average transaction price, as defined by the enumerations. Enumeration Meaning AverageTransactionPrice-Not-Applicable AverageTransactionPrice-Range1 Less than $25 USD AverageTransactionPrice-Range2 $25 USD to $50 USD AverageTransactionPrice-Range3 $50 USD to $100 USD AverageTransactionPrice-Range4 $100 USD to $250 USD AverageTransactionPrice-Range5 $250 USD to $500 USD AverageTransactionPrice-Range6 $500 USD to $1,000 USD AverageTransactionPrice-Range7 $1,000 USD to $2,000 USD AverageTransactionPrice-Range8 $2,000 USD to $5,000 USD AverageTransactionPrice-Range9 $5,000 USD to $10,000 USD AverageTransactionPrice-Range10 More than $10,000 USD
	 * @var PayPalTypeAverageTransactionPriceType
	 */
	public $AveragePrice;
	/**
	 * The AverageMonthlyVolume
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Average monthly sales volume, as defined by the enumerations. Enumeration Meaning AverageMonthlyVolume-Not-Applicable AverageMonthlyVolume-Range1 Less than $1,000 USD AverageMonthlyVolume-Range2 $1,000 USD to $5,000 USD AverageMonthlyVolume-Range3 $5,000 USD to $25,000 USD AverageMonthlyVolume-Range4 $25,000 USD to $100,000 USD AverageMonthlyVolume-Range5 $100,000 USD to $1,000,000 USD AverageMonthlyVolume-Range6 More than $1,000,000 USD
	 * @var PayPalTypeAverageMonthlyVolumeType
	 */
	public $AverageMonthlyVolume;
	/**
	 * The SalesVenue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Main sales venue, such as eBay
	 * @var PayPalTypeSalesVenueType
	 */
	public $SalesVenue;
	/**
	 * The Website
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Primary URL of business Character length and limitations: 2,048 alphanumeric characters
	 * @var string
	 */
	public $Website;
	/**
	 * The RevenueFromOnlineSales
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percentage of revenue attributable to online sales, as defined by the enumerations Enumeration Meaning PercentageRevenueFromOnlineSales-Not-Applicable PercentageRevenueFromOnlineSales-Range1 Less than 25% PercentageRevenueFromOnlineSales-Range2 25% to 50% PercentageRevenueFromOnlineSales-Range3 50% to 75% PercentageRevenueFromOnlineSales-Range4 75% to 100%
	 * @var PayPalTypePercentageRevenueFromOnlineSalesType
	 */
	public $RevenueFromOnlineSales;
	/**
	 * The BusinessEstablished
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date the merchant’s business was established
	 * @var dateTime
	 */
	public $BusinessEstablished;
	/**
	 * The CustomerServiceEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Email address to contact business’s customer service Character length and limitations: 127 alphanumeric characters
	 * @var PayPalTypeEmailAddressType
	 */
	public $CustomerServiceEmail;
	/**
	 * The CustomerServicePhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Telephone number to contact business’s customer service Character length and limitations: 32 alphanumeric characters
	 * @var string
	 */
	public $CustomerServicePhone;
	/**
	 * Constructor
	 * @param PayPalTypeBusinessTypeType Type
	 * @param PayPalTypeNameType Name
	 * @param PayPalTypeAddressType Address
	 * @param string WorkPhone
	 * @param PayPalTypeBusinessCategoryType Category
	 * @param PayPalTypeBusinessSubCategoryType SubCategory
	 * @param PayPalTypeAverageTransactionPriceType AveragePrice
	 * @param PayPalTypeAverageMonthlyVolumeType AverageMonthlyVolume
	 * @param PayPalTypeSalesVenueType SalesVenue
	 * @param string Website
	 * @param PayPalTypePercentageRevenueFromOnlineSalesType RevenueFromOnlineSales
	 * @param dateTime BusinessEstablished
	 * @param PayPalTypeEmailAddressType CustomerServiceEmail
	 * @param string CustomerServicePhone
	 * @return PayPalTypeBusinessInfoType
	 */
	public function __construct($_Type = null,$_Name = null,$_Address = null,$_WorkPhone = null,$_Category = null,$_SubCategory = null,$_AveragePrice = null,$_AverageMonthlyVolume = null,$_SalesVenue = null,$_Website = null,$_RevenueFromOnlineSales = null,$_BusinessEstablished = null,$_CustomerServiceEmail = null,$_CustomerServicePhone = null)
	{
		parent::__construct(array('Type'=>$_Type,'Name'=>$_Name,'Address'=>$_Address,'WorkPhone'=>$_WorkPhone,'Category'=>$_Category,'SubCategory'=>$_SubCategory,'AveragePrice'=>$_AveragePrice,'AverageMonthlyVolume'=>$_AverageMonthlyVolume,'SalesVenue'=>$_SalesVenue,'Website'=>$_Website,'RevenueFromOnlineSales'=>$_RevenueFromOnlineSales,'BusinessEstablished'=>$_BusinessEstablished,'CustomerServiceEmail'=>$_CustomerServiceEmail,'CustomerServicePhone'=>$_CustomerServicePhone));
	}
	/**
	 * Set Type
	 * @param BusinessTypeType Type
	 * @return BusinessTypeType
	 */
	public function setType($_Type)
	{
		return ($this->Type = PayPalTypeBusinessTypeType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return PayPalTypeBusinessTypeType
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Name
	 * @param NameType Name
	 * @return NameType
	 */
	public function setName($_Name)
	{
		return ($this->Name = PayPalTypeNameType::valueIsValid($_Name)?$_Name:null);
	}
	/**
	 * Get Name
	 * @return PayPalTypeNameType
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Address
	 * @param AddressType Address
	 * @return AddressType
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return PayPalTypeAddressType
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set WorkPhone
	 * @param string WorkPhone
	 * @return string
	 */
	public function setWorkPhone($_WorkPhone)
	{
		return ($this->WorkPhone = $_WorkPhone);
	}
	/**
	 * Get WorkPhone
	 * @return string
	 */
	public function getWorkPhone()
	{
		return $this->WorkPhone;
	}
	/**
	 * Set Category
	 * @param BusinessCategoryType Category
	 * @return BusinessCategoryType
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = PayPalTypeBusinessCategoryType::valueIsValid($_Category)?$_Category:null);
	}
	/**
	 * Get Category
	 * @return PayPalTypeBusinessCategoryType
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set SubCategory
	 * @param BusinessSubCategoryType SubCategory
	 * @return BusinessSubCategoryType
	 */
	public function setSubCategory($_SubCategory)
	{
		return ($this->SubCategory = PayPalTypeBusinessSubCategoryType::valueIsValid($_SubCategory)?$_SubCategory:null);
	}
	/**
	 * Get SubCategory
	 * @return PayPalTypeBusinessSubCategoryType
	 */
	public function getSubCategory()
	{
		return $this->SubCategory;
	}
	/**
	 * Set AveragePrice
	 * @param AverageTransactionPriceType AveragePrice
	 * @return AverageTransactionPriceType
	 */
	public function setAveragePrice($_AveragePrice)
	{
		return ($this->AveragePrice = PayPalTypeAverageTransactionPriceType::valueIsValid($_AveragePrice)?$_AveragePrice:null);
	}
	/**
	 * Get AveragePrice
	 * @return PayPalTypeAverageTransactionPriceType
	 */
	public function getAveragePrice()
	{
		return $this->AveragePrice;
	}
	/**
	 * Set AverageMonthlyVolume
	 * @param AverageMonthlyVolumeType AverageMonthlyVolume
	 * @return AverageMonthlyVolumeType
	 */
	public function setAverageMonthlyVolume($_AverageMonthlyVolume)
	{
		return ($this->AverageMonthlyVolume = PayPalTypeAverageMonthlyVolumeType::valueIsValid($_AverageMonthlyVolume)?$_AverageMonthlyVolume:null);
	}
	/**
	 * Get AverageMonthlyVolume
	 * @return PayPalTypeAverageMonthlyVolumeType
	 */
	public function getAverageMonthlyVolume()
	{
		return $this->AverageMonthlyVolume;
	}
	/**
	 * Set SalesVenue
	 * @param SalesVenueType SalesVenue
	 * @return SalesVenueType
	 */
	public function setSalesVenue($_SalesVenue)
	{
		return ($this->SalesVenue = PayPalTypeSalesVenueType::valueIsValid($_SalesVenue)?$_SalesVenue:null);
	}
	/**
	 * Get SalesVenue
	 * @return PayPalTypeSalesVenueType
	 */
	public function getSalesVenue()
	{
		return $this->SalesVenue;
	}
	/**
	 * Set Website
	 * @param string Website
	 * @return string
	 */
	public function setWebsite($_Website)
	{
		return ($this->Website = $_Website);
	}
	/**
	 * Get Website
	 * @return string
	 */
	public function getWebsite()
	{
		return $this->Website;
	}
	/**
	 * Set RevenueFromOnlineSales
	 * @param PercentageRevenueFromOnlineSalesType RevenueFromOnlineSales
	 * @return PercentageRevenueFromOnlineSalesType
	 */
	public function setRevenueFromOnlineSales($_RevenueFromOnlineSales)
	{
		return ($this->RevenueFromOnlineSales = PayPalTypePercentageRevenueFromOnlineSalesType::valueIsValid($_RevenueFromOnlineSales)?$_RevenueFromOnlineSales:null);
	}
	/**
	 * Get RevenueFromOnlineSales
	 * @return PayPalTypePercentageRevenueFromOnlineSalesType
	 */
	public function getRevenueFromOnlineSales()
	{
		return $this->RevenueFromOnlineSales;
	}
	/**
	 * Set BusinessEstablished
	 * @param dateTime BusinessEstablished
	 * @return dateTime
	 */
	public function setBusinessEstablished($_BusinessEstablished)
	{
		return ($this->BusinessEstablished = $_BusinessEstablished);
	}
	/**
	 * Get BusinessEstablished
	 * @return dateTime
	 */
	public function getBusinessEstablished()
	{
		return $this->BusinessEstablished;
	}
	/**
	 * Set CustomerServiceEmail
	 * @param EmailAddressType CustomerServiceEmail
	 * @return EmailAddressType
	 */
	public function setCustomerServiceEmail($_CustomerServiceEmail)
	{
		return ($this->CustomerServiceEmail = PayPalTypeEmailAddressType::valueIsValid($_CustomerServiceEmail)?$_CustomerServiceEmail:null);
	}
	/**
	 * Get CustomerServiceEmail
	 * @return PayPalTypeEmailAddressType
	 */
	public function getCustomerServiceEmail()
	{
		return $this->CustomerServiceEmail;
	}
	/**
	 * Set CustomerServicePhone
	 * @param string CustomerServicePhone
	 * @return string
	 */
	public function setCustomerServicePhone($_CustomerServicePhone)
	{
		return ($this->CustomerServicePhone = $_CustomerServicePhone);
	}
	/**
	 * Get CustomerServicePhone
	 * @return string
	 */
	public function getCustomerServicePhone()
	{
		return $this->CustomerServicePhone;
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