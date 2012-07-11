<?php
/**
 * Class file for AmazonECommerceServiceTypeOffers
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeOffers
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeOffers extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The TotalOffers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $TotalOffers;
	/**
	 * The TotalOfferPages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $TotalOfferPages;
	/**
	 * The MoreOffersUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MoreOffersUrl;
	/**
	 * The Offer
	 * @var AmazonECommerceServiceTypeOffer
	 */
	public $Offer;
	/**
	 * Constructor
	 * @param nonNegativeInteger TotalOffers
	 * @param nonNegativeInteger TotalOfferPages
	 * @param string MoreOffersUrl
	 * @param AmazonECommerceServiceTypeOffer Offer
	 * @return AmazonECommerceServiceTypeOffers
	 */
	public function __construct($_TotalOffers = null,$_TotalOfferPages = null,$_MoreOffersUrl = null,$_Offer = null)
	{
		parent::__construct(array('TotalOffers'=>$_TotalOffers,'TotalOfferPages'=>$_TotalOfferPages,'MoreOffersUrl'=>$_MoreOffersUrl,'Offer'=>$_Offer));
	}
	/**
	 * Set TotalOffers
	 * @param nonNegativeInteger TotalOffers
	 * @return nonNegativeInteger
	 */
	public function setTotalOffers($_TotalOffers)
	{
		return ($this->TotalOffers = $_TotalOffers);
	}
	/**
	 * Get TotalOffers
	 * @return nonNegativeInteger
	 */
	public function getTotalOffers()
	{
		return $this->TotalOffers;
	}
	/**
	 * Set TotalOfferPages
	 * @param nonNegativeInteger TotalOfferPages
	 * @return nonNegativeInteger
	 */
	public function setTotalOfferPages($_TotalOfferPages)
	{
		return ($this->TotalOfferPages = $_TotalOfferPages);
	}
	/**
	 * Get TotalOfferPages
	 * @return nonNegativeInteger
	 */
	public function getTotalOfferPages()
	{
		return $this->TotalOfferPages;
	}
	/**
	 * Set MoreOffersUrl
	 * @param string MoreOffersUrl
	 * @return string
	 */
	public function setMoreOffersUrl($_MoreOffersUrl)
	{
		return ($this->MoreOffersUrl = $_MoreOffersUrl);
	}
	/**
	 * Get MoreOffersUrl
	 * @return string
	 */
	public function getMoreOffersUrl()
	{
		return $this->MoreOffersUrl;
	}
	/**
	 * Set Offer
	 * @param Offer Offer
	 * @return Offer
	 */
	public function setOffer($_Offer)
	{
		return ($this->Offer = $_Offer);
	}
	/**
	 * Get Offer
	 * @return AmazonECommerceServiceTypeOffer
	 */
	public function getOffer()
	{
		return $this->Offer;
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