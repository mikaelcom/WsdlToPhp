<?php
/**
 * Class file for AmazonWebServicesTypeShoppingCart
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeShoppingCart
 * @date 10/07/2012
 */
class AmazonWebServicesTypeShoppingCart extends AmazonWebServicesWsdlClass
{
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
	 * The PurchaseUrl
	 * @var string
	 */
	public $PurchaseUrl;
	/**
	 * The Items
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var ItemArray
	 */
	public $Items;
	/**
	 * Constructor
	 * @param string CartId
	 * @param string HMAC
	 * @param string PurchaseUrl
	 * @param ItemArray Items
	 * @return AmazonWebServicesTypeShoppingCart
	 */
	public function __construct($_CartId = null,$_HMAC = null,$_PurchaseUrl = null,$_Items = null)
	{
		parent::__construct(array('CartId'=>$_CartId,'HMAC'=>$_HMAC,'PurchaseUrl'=>$_PurchaseUrl,'Items'=>$_Items));
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
	 * Set PurchaseUrl
	 * @param string PurchaseUrl
	 * @return string
	 */
	public function setPurchaseUrl($_PurchaseUrl)
	{
		return ($this->PurchaseUrl = $_PurchaseUrl);
	}
	/**
	 * Get PurchaseUrl
	 * @return string
	 */
	public function getPurchaseUrl()
	{
		return $this->PurchaseUrl;
	}
	/**
	 * Set Items
	 * @param ItemArray Items
	 * @return ItemArray
	 */
	public function setItems($_Items)
	{
		return ($this->Items = $_Items);
	}
	/**
	 * Get Items
	 * @return ItemArray
	 */
	public function getItems()
	{
		return $this->Items;
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