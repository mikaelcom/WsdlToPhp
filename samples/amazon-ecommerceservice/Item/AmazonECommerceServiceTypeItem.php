<?php
/**
 * Class file for AmazonECommerceServiceTypeItem
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeItem
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeItem extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The ASIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ASIN;
	/**
	 * The OfferListingId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OfferListingId;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var positiveInteger
	 */
	public $Quantity;
	/**
	 * The AssociateTag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AssociateTag;
	/**
	 * The ListItemId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ListItemId;
	/**
	 * Constructor
	 * @param string ASIN
	 * @param string OfferListingId
	 * @param positiveInteger Quantity
	 * @param string AssociateTag
	 * @param string ListItemId
	 * @return AmazonECommerceServiceTypeItem
	 */
	public function __construct($_ASIN = null,$_OfferListingId = null,$_Quantity = null,$_AssociateTag = null,$_ListItemId = null)
	{
		parent::__construct(array('ASIN'=>$_ASIN,'OfferListingId'=>$_OfferListingId,'Quantity'=>$_Quantity,'AssociateTag'=>$_AssociateTag,'ListItemId'=>$_ListItemId));
	}
	/**
	 * Set ASIN
	 * @param string ASIN
	 * @return string
	 */
	public function setASIN($_ASIN)
	{
		return ($this->ASIN = $_ASIN);
	}
	/**
	 * Get ASIN
	 * @return string
	 */
	public function getASIN()
	{
		return $this->ASIN;
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
	 * Set Quantity
	 * @param positiveInteger Quantity
	 * @return positiveInteger
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return positiveInteger
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set AssociateTag
	 * @param string AssociateTag
	 * @return string
	 */
	public function setAssociateTag($_AssociateTag)
	{
		return ($this->AssociateTag = $_AssociateTag);
	}
	/**
	 * Get AssociateTag
	 * @return string
	 */
	public function getAssociateTag()
	{
		return $this->AssociateTag;
	}
	/**
	 * Set ListItemId
	 * @param string ListItemId
	 * @return string
	 */
	public function setListItemId($_ListItemId)
	{
		return ($this->ListItemId = $_ListItemId);
	}
	/**
	 * Get ListItemId
	 * @return string
	 */
	public function getListItemId()
	{
		return $this->ListItemId;
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