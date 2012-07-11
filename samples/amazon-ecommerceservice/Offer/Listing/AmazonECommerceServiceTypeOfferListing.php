<?php
/**
 * Class file for AmazonECommerceServiceTypeOfferListing
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeOfferListing
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeOfferListing extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The OfferListingId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OfferListingId;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $Price;
	/**
	 * The SalePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $SalePrice;
	/**
	 * The AmountSaved
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $AmountSaved;
	/**
	 * The PercentageSaved
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $PercentageSaved;
	/**
	 * The Availability
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Availability;
	/**
	 * The AvailabilityAttributes
	 * @var AmazonECommerceServiceTypeAvailabilityAttributes
	 */
	public $AvailabilityAttributes;
	/**
	 * The IsEligibleForSuperSaverShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IsEligibleForSuperSaverShipping;
	/**
	 * The IsEligibleForPrime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IsEligibleForPrime;
	/**
	 * Constructor
	 * @param string OfferListingId
	 * @param AmazonECommerceServiceTypePrice Price
	 * @param AmazonECommerceServiceTypePrice SalePrice
	 * @param AmazonECommerceServiceTypePrice AmountSaved
	 * @param nonNegativeInteger PercentageSaved
	 * @param string Availability
	 * @param AmazonECommerceServiceTypeAvailabilityAttributes AvailabilityAttributes
	 * @param boolean IsEligibleForSuperSaverShipping
	 * @param boolean IsEligibleForPrime
	 * @return AmazonECommerceServiceTypeOfferListing
	 */
	public function __construct($_OfferListingId = null,$_Price = null,$_SalePrice = null,$_AmountSaved = null,$_PercentageSaved = null,$_Availability = null,$_AvailabilityAttributes = null,$_IsEligibleForSuperSaverShipping = null,$_IsEligibleForPrime = null)
	{
		parent::__construct(array('OfferListingId'=>$_OfferListingId,'Price'=>$_Price,'SalePrice'=>$_SalePrice,'AmountSaved'=>$_AmountSaved,'PercentageSaved'=>$_PercentageSaved,'Availability'=>$_Availability,'AvailabilityAttributes'=>$_AvailabilityAttributes,'IsEligibleForSuperSaverShipping'=>$_IsEligibleForSuperSaverShipping,'IsEligibleForPrime'=>$_IsEligibleForPrime));
	}
	/**
	 * Set OfferListingId
	 * @param string OfferListingId
	 * @return string
	 */
	public function setOfferListingId($_OfferListingId)
	{
		return ($this->OfferListingId = $_OfferListingId);
	}
	/**
	 * Get OfferListingId
	 * @return string
	 */
	public function getOfferListingId()
	{
		return $this->OfferListingId;
	}
	/**
	 * Set Price
	 * @param Price Price
	 * @return Price
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set SalePrice
	 * @param Price SalePrice
	 * @return Price
	 */
	public function setSalePrice($_SalePrice)
	{
		return ($this->SalePrice = $_SalePrice);
	}
	/**
	 * Get SalePrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getSalePrice()
	{
		return $this->SalePrice;
	}
	/**
	 * Set AmountSaved
	 * @param Price AmountSaved
	 * @return Price
	 */
	public function setAmountSaved($_AmountSaved)
	{
		return ($this->AmountSaved = $_AmountSaved);
	}
	/**
	 * Get AmountSaved
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getAmountSaved()
	{
		return $this->AmountSaved;
	}
	/**
	 * Set PercentageSaved
	 * @param nonNegativeInteger PercentageSaved
	 * @return nonNegativeInteger
	 */
	public function setPercentageSaved($_PercentageSaved)
	{
		return ($this->PercentageSaved = $_PercentageSaved);
	}
	/**
	 * Get PercentageSaved
	 * @return nonNegativeInteger
	 */
	public function getPercentageSaved()
	{
		return $this->PercentageSaved;
	}
	/**
	 * Set Availability
	 * @param string Availability
	 * @return string
	 */
	public function setAvailability($_Availability)
	{
		return ($this->Availability = $_Availability);
	}
	/**
	 * Get Availability
	 * @return string
	 */
	public function getAvailability()
	{
		return $this->Availability;
	}
	/**
	 * Set AvailabilityAttributes
	 * @param AvailabilityAttributes AvailabilityAttributes
	 * @return AvailabilityAttributes
	 */
	public function setAvailabilityAttributes($_AvailabilityAttributes)
	{
		return ($this->AvailabilityAttributes = $_AvailabilityAttributes);
	}
	/**
	 * Get AvailabilityAttributes
	 * @return AmazonECommerceServiceTypeAvailabilityAttributes
	 */
	public function getAvailabilityAttributes()
	{
		return $this->AvailabilityAttributes;
	}
	/**
	 * Set IsEligibleForSuperSaverShipping
	 * @param boolean IsEligibleForSuperSaverShipping
	 * @return boolean
	 */
	public function setIsEligibleForSuperSaverShipping($_IsEligibleForSuperSaverShipping)
	{
		return ($this->IsEligibleForSuperSaverShipping = $_IsEligibleForSuperSaverShipping);
	}
	/**
	 * Get IsEligibleForSuperSaverShipping
	 * @return boolean
	 */
	public function getIsEligibleForSuperSaverShipping()
	{
		return $this->IsEligibleForSuperSaverShipping;
	}
	/**
	 * Set IsEligibleForPrime
	 * @param boolean IsEligibleForPrime
	 * @return boolean
	 */
	public function setIsEligibleForPrime($_IsEligibleForPrime)
	{
		return ($this->IsEligibleForPrime = $_IsEligibleForPrime);
	}
	/**
	 * Get IsEligibleForPrime
	 * @return boolean
	 */
	public function getIsEligibleForPrime()
	{
		return $this->IsEligibleForPrime;
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