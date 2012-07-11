<?php
/**
 * Class file for AmazonECommerceServiceTypeCart
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCart
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCart extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Request
	 * @var AmazonECommerceServiceTypeRequest
	 */
	public $Request;
	/**
	 * The CartId
	 * @var string
	 */
	public $CartId;
	/**
	 * The HMAC
	 * @var string
	 */
	public $HMAC;
	/**
	 * The URLEncodedHMAC
	 * @var string
	 */
	public $URLEncodedHMAC;
	/**
	 * The PurchaseURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PurchaseURL;
	/**
	 * The MobileCartURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MobileCartURL;
	/**
	 * The SubTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $SubTotal;
	/**
	 * The CartItems
	 * @var AmazonECommerceServiceTypeCartItems
	 */
	public $CartItems;
	/**
	 * The SavedForLaterItems
	 * @var AmazonECommerceServiceTypeSavedForLaterItems
	 */
	public $SavedForLaterItems;
	/**
	 * The SimilarProducts
	 * @var AmazonECommerceServiceTypeSimilarProducts
	 */
	public $SimilarProducts;
	/**
	 * The TopSellers
	 * @var AmazonECommerceServiceTypeTopSellers
	 */
	public $TopSellers;
	/**
	 * The NewReleases
	 * @var AmazonECommerceServiceTypeNewReleases
	 */
	public $NewReleases;
	/**
	 * The SimilarViewedProducts
	 * @var AmazonECommerceServiceTypeSimilarViewedProducts
	 */
	public $SimilarViewedProducts;
	/**
	 * The OtherCategoriesSimilarProducts
	 * @var AmazonECommerceServiceTypeOtherCategoriesSimilarProducts
	 */
	public $OtherCategoriesSimilarProducts;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeRequest Request
	 * @param string CartId
	 * @param string HMAC
	 * @param string URLEncodedHMAC
	 * @param string PurchaseURL
	 * @param string MobileCartURL
	 * @param AmazonECommerceServiceTypePrice SubTotal
	 * @param AmazonECommerceServiceTypeCartItems CartItems
	 * @param AmazonECommerceServiceTypeSavedForLaterItems SavedForLaterItems
	 * @param AmazonECommerceServiceTypeSimilarProducts SimilarProducts
	 * @param AmazonECommerceServiceTypeTopSellers TopSellers
	 * @param AmazonECommerceServiceTypeNewReleases NewReleases
	 * @param AmazonECommerceServiceTypeSimilarViewedProducts SimilarViewedProducts
	 * @param AmazonECommerceServiceTypeOtherCategoriesSimilarProducts OtherCategoriesSimilarProducts
	 * @return AmazonECommerceServiceTypeCart
	 */
	public function __construct($_Request = null,$_CartId = null,$_HMAC = null,$_URLEncodedHMAC = null,$_PurchaseURL = null,$_MobileCartURL = null,$_SubTotal = null,$_CartItems = null,$_SavedForLaterItems = null,$_SimilarProducts = null,$_TopSellers = null,$_NewReleases = null,$_SimilarViewedProducts = null,$_OtherCategoriesSimilarProducts = null)
	{
		parent::__construct(array('Request'=>$_Request,'CartId'=>$_CartId,'HMAC'=>$_HMAC,'URLEncodedHMAC'=>$_URLEncodedHMAC,'PurchaseURL'=>$_PurchaseURL,'MobileCartURL'=>$_MobileCartURL,'SubTotal'=>$_SubTotal,'CartItems'=>$_CartItems,'SavedForLaterItems'=>$_SavedForLaterItems,'SimilarProducts'=>$_SimilarProducts,'TopSellers'=>$_TopSellers,'NewReleases'=>$_NewReleases,'SimilarViewedProducts'=>$_SimilarViewedProducts,'OtherCategoriesSimilarProducts'=>$_OtherCategoriesSimilarProducts));
	}
	/**
	 * Set Request
	 * @param Request Request
	 * @return Request
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonECommerceServiceTypeRequest
	 */
	public function getRequest()
	{
		return $this->Request;
	}
	/**
	 * Set CartId
	 * @param string CartId
	 * @return string
	 */
	public function setCartId($_CartId)
	{
		return ($this->CartId = $_CartId);
	}
	/**
	 * Get CartId
	 * @return string
	 */
	public function getCartId()
	{
		return $this->CartId;
	}
	/**
	 * Set HMAC
	 * @param string HMAC
	 * @return string
	 */
	public function setHMAC($_HMAC)
	{
		return ($this->HMAC = $_HMAC);
	}
	/**
	 * Get HMAC
	 * @return string
	 */
	public function getHMAC()
	{
		return $this->HMAC;
	}
	/**
	 * Set URLEncodedHMAC
	 * @param string URLEncodedHMAC
	 * @return string
	 */
	public function setURLEncodedHMAC($_URLEncodedHMAC)
	{
		return ($this->URLEncodedHMAC = $_URLEncodedHMAC);
	}
	/**
	 * Get URLEncodedHMAC
	 * @return string
	 */
	public function getURLEncodedHMAC()
	{
		return $this->URLEncodedHMAC;
	}
	/**
	 * Set PurchaseURL
	 * @param string PurchaseURL
	 * @return string
	 */
	public function setPurchaseURL($_PurchaseURL)
	{
		return ($this->PurchaseURL = $_PurchaseURL);
	}
	/**
	 * Get PurchaseURL
	 * @return string
	 */
	public function getPurchaseURL()
	{
		return $this->PurchaseURL;
	}
	/**
	 * Set MobileCartURL
	 * @param string MobileCartURL
	 * @return string
	 */
	public function setMobileCartURL($_MobileCartURL)
	{
		return ($this->MobileCartURL = $_MobileCartURL);
	}
	/**
	 * Get MobileCartURL
	 * @return string
	 */
	public function getMobileCartURL()
	{
		return $this->MobileCartURL;
	}
	/**
	 * Set SubTotal
	 * @param Price SubTotal
	 * @return Price
	 */
	public function setSubTotal($_SubTotal)
	{
		return ($this->SubTotal = $_SubTotal);
	}
	/**
	 * Get SubTotal
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getSubTotal()
	{
		return $this->SubTotal;
	}
	/**
	 * Set CartItems
	 * @param CartItems CartItems
	 * @return CartItems
	 */
	public function setCartItems($_CartItems)
	{
		return ($this->CartItems = $_CartItems);
	}
	/**
	 * Get CartItems
	 * @return AmazonECommerceServiceTypeCartItems
	 */
	public function getCartItems()
	{
		return $this->CartItems;
	}
	/**
	 * Set SavedForLaterItems
	 * @param SavedForLaterItems SavedForLaterItems
	 * @return SavedForLaterItems
	 */
	public function setSavedForLaterItems($_SavedForLaterItems)
	{
		return ($this->SavedForLaterItems = $_SavedForLaterItems);
	}
	/**
	 * Get SavedForLaterItems
	 * @return AmazonECommerceServiceTypeSavedForLaterItems
	 */
	public function getSavedForLaterItems()
	{
		return $this->SavedForLaterItems;
	}
	/**
	 * Set SimilarProducts
	 * @param SimilarProducts SimilarProducts
	 * @return SimilarProducts
	 */
	public function setSimilarProducts($_SimilarProducts)
	{
		return ($this->SimilarProducts = $_SimilarProducts);
	}
	/**
	 * Get SimilarProducts
	 * @return AmazonECommerceServiceTypeSimilarProducts
	 */
	public function getSimilarProducts()
	{
		return $this->SimilarProducts;
	}
	/**
	 * Set TopSellers
	 * @param TopSellers TopSellers
	 * @return TopSellers
	 */
	public function setTopSellers($_TopSellers)
	{
		return ($this->TopSellers = $_TopSellers);
	}
	/**
	 * Get TopSellers
	 * @return AmazonECommerceServiceTypeTopSellers
	 */
	public function getTopSellers()
	{
		return $this->TopSellers;
	}
	/**
	 * Set NewReleases
	 * @param NewReleases NewReleases
	 * @return NewReleases
	 */
	public function setNewReleases($_NewReleases)
	{
		return ($this->NewReleases = $_NewReleases);
	}
	/**
	 * Get NewReleases
	 * @return AmazonECommerceServiceTypeNewReleases
	 */
	public function getNewReleases()
	{
		return $this->NewReleases;
	}
	/**
	 * Set SimilarViewedProducts
	 * @param SimilarViewedProducts SimilarViewedProducts
	 * @return SimilarViewedProducts
	 */
	public function setSimilarViewedProducts($_SimilarViewedProducts)
	{
		return ($this->SimilarViewedProducts = $_SimilarViewedProducts);
	}
	/**
	 * Get SimilarViewedProducts
	 * @return AmazonECommerceServiceTypeSimilarViewedProducts
	 */
	public function getSimilarViewedProducts()
	{
		return $this->SimilarViewedProducts;
	}
	/**
	 * Set OtherCategoriesSimilarProducts
	 * @param OtherCategoriesSimilarProducts OtherCategoriesSimilarProducts
	 * @return OtherCategoriesSimilarProducts
	 */
	public function setOtherCategoriesSimilarProducts($_OtherCategoriesSimilarProducts)
	{
		return ($this->OtherCategoriesSimilarProducts = $_OtherCategoriesSimilarProducts);
	}
	/**
	 * Get OtherCategoriesSimilarProducts
	 * @return AmazonECommerceServiceTypeOtherCategoriesSimilarProducts
	 */
	public function getOtherCategoriesSimilarProducts()
	{
		return $this->OtherCategoriesSimilarProducts;
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