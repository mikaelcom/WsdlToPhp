<?php
/**
 * Class file for AmazonECommerceServiceTypeOffer
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeOffer
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeOffer extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Merchant
	 * @var AmazonECommerceServiceTypeMerchant
	 */
	public $Merchant;
	/**
	 * The OfferAttributes
	 * @var AmazonECommerceServiceTypeOfferAttributes
	 */
	public $OfferAttributes;
	/**
	 * The OfferListing
	 * @var AmazonECommerceServiceTypeOfferListing
	 */
	public $OfferListing;
	/**
	 * The LoyaltyPoints
	 * @var AmazonECommerceServiceTypeLoyaltyPoints
	 */
	public $LoyaltyPoints;
	/**
	 * The Promotions
	 * @var AmazonECommerceServiceTypePromotions
	 */
	public $Promotions;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeMerchant Merchant
	 * @param AmazonECommerceServiceTypeOfferAttributes OfferAttributes
	 * @param AmazonECommerceServiceTypeOfferListing OfferListing
	 * @param AmazonECommerceServiceTypeLoyaltyPoints LoyaltyPoints
	 * @param AmazonECommerceServiceTypePromotions Promotions
	 * @return AmazonECommerceServiceTypeOffer
	 */
	public function __construct($_Merchant = null,$_OfferAttributes = null,$_OfferListing = null,$_LoyaltyPoints = null,$_Promotions = null)
	{
		parent::__construct(array('Merchant'=>$_Merchant,'OfferAttributes'=>$_OfferAttributes,'OfferListing'=>$_OfferListing,'LoyaltyPoints'=>$_LoyaltyPoints,'Promotions'=>$_Promotions));
	}
	/**
	 * Set Merchant
	 * @param Merchant Merchant
	 * @return Merchant
	 */
	public function setMerchant($_Merchant)
	{
		return ($this->Merchant = $_Merchant);
	}
	/**
	 * Get Merchant
	 * @return AmazonECommerceServiceTypeMerchant
	 */
	public function getMerchant()
	{
		return $this->Merchant;
	}
	/**
	 * Set OfferAttributes
	 * @param OfferAttributes OfferAttributes
	 * @return OfferAttributes
	 */
	public function setOfferAttributes($_OfferAttributes)
	{
		return ($this->OfferAttributes = $_OfferAttributes);
	}
	/**
	 * Get OfferAttributes
	 * @return AmazonECommerceServiceTypeOfferAttributes
	 */
	public function getOfferAttributes()
	{
		return $this->OfferAttributes;
	}
	/**
	 * Set OfferListing
	 * @param OfferListing OfferListing
	 * @return OfferListing
	 */
	public function setOfferListing($_OfferListing)
	{
		return ($this->OfferListing = $_OfferListing);
	}
	/**
	 * Get OfferListing
	 * @return AmazonECommerceServiceTypeOfferListing
	 */
	public function getOfferListing()
	{
		return $this->OfferListing;
	}
	/**
	 * Set LoyaltyPoints
	 * @param LoyaltyPoints LoyaltyPoints
	 * @return LoyaltyPoints
	 */
	public function setLoyaltyPoints($_LoyaltyPoints)
	{
		return ($this->LoyaltyPoints = $_LoyaltyPoints);
	}
	/**
	 * Get LoyaltyPoints
	 * @return AmazonECommerceServiceTypeLoyaltyPoints
	 */
	public function getLoyaltyPoints()
	{
		return $this->LoyaltyPoints;
	}
	/**
	 * Set Promotions
	 * @param Promotions Promotions
	 * @return Promotions
	 */
	public function setPromotions($_Promotions)
	{
		return ($this->Promotions = $_Promotions);
	}
	/**
	 * Get Promotions
	 * @return AmazonECommerceServiceTypePromotions
	 */
	public function getPromotions()
	{
		return $this->Promotions;
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