<?php
/**
 * Class file for AmazonECommerceServiceTypeCartItem
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCartItem
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCartItem extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The CartItemId
	 * @var string
	 */
	public $CartItemId;
	/**
	 * The ASIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ASIN;
	/**
	 * The SellerNickname
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SellerNickname;
	/**
	 * The Quantity
	 * @var string
	 */
	public $Quantity;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The ProductGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ProductGroup;
	/**
	 * The MetaData
	 * @var AmazonECommerceServiceTypeMetaData
	 */
	public $MetaData;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $Price;
	/**
	 * The ItemTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $ItemTotal;
	/**
	 * Constructor
	 * @param string CartItemId
	 * @param string ASIN
	 * @param string SellerNickname
	 * @param string Quantity
	 * @param string Title
	 * @param string ProductGroup
	 * @param AmazonECommerceServiceTypeMetaData MetaData
	 * @param AmazonECommerceServiceTypePrice Price
	 * @param AmazonECommerceServiceTypePrice ItemTotal
	 * @return AmazonECommerceServiceTypeCartItem
	 */
	public function __construct($_CartItemId = null,$_ASIN = null,$_SellerNickname = null,$_Quantity = null,$_Title = null,$_ProductGroup = null,$_MetaData = null,$_Price = null,$_ItemTotal = null)
	{
		parent::__construct(array('CartItemId'=>$_CartItemId,'ASIN'=>$_ASIN,'SellerNickname'=>$_SellerNickname,'Quantity'=>$_Quantity,'Title'=>$_Title,'ProductGroup'=>$_ProductGroup,'MetaData'=>$_MetaData,'Price'=>$_Price,'ItemTotal'=>$_ItemTotal));
	}
	/**
	 * Set CartItemId
	 * @param string CartItemId
	 * @return string
	 */
	public function setCartItemId($_CartItemId)
	{
		return ($this->CartItemId = $_CartItemId);
	}
	/**
	 * Get CartItemId
	 * @return string
	 */
	public function getCartItemId()
	{
		return $this->CartItemId;
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
	 * Set SellerNickname
	 * @param string SellerNickname
	 * @return string
	 */
	public function setSellerNickname($_SellerNickname)
	{
		return ($this->SellerNickname = $_SellerNickname);
	}
	/**
	 * Get SellerNickname
	 * @return string
	 */
	public function getSellerNickname()
	{
		return $this->SellerNickname;
	}
	/**
	 * Set Quantity
	 * @param string Quantity
	 * @return string
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set ProductGroup
	 * @param string ProductGroup
	 * @return string
	 */
	public function setProductGroup($_ProductGroup)
	{
		return ($this->ProductGroup = $_ProductGroup);
	}
	/**
	 * Get ProductGroup
	 * @return string
	 */
	public function getProductGroup()
	{
		return $this->ProductGroup;
	}
	/**
	 * Set MetaData
	 * @param MetaData MetaData
	 * @return MetaData
	 */
	public function setMetaData($_MetaData)
	{
		return ($this->MetaData = $_MetaData);
	}
	/**
	 * Get MetaData
	 * @return AmazonECommerceServiceTypeMetaData
	 */
	public function getMetaData()
	{
		return $this->MetaData;
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
	 * Set ItemTotal
	 * @param Price ItemTotal
	 * @return Price
	 */
	public function setItemTotal($_ItemTotal)
	{
		return ($this->ItemTotal = $_ItemTotal);
	}
	/**
	 * Get ItemTotal
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getItemTotal()
	{
		return $this->ItemTotal;
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