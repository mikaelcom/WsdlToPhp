<?php
/**
 * Class file for AmazonWebServicesTypeRemoveShoppingCartItemsRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeRemoveShoppingCartItemsRequest
 * @date 10/07/2012
 */
class AmazonWebServicesTypeRemoveShoppingCartItemsRequest extends AmazonWebServicesWsdlClass
{
	/**
	 * The tag
	 * @var string
	 */
	public $tag;
	/**
	 * The devtag
	 * @var string
	 */
	public $devtag;
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
	 * The Items
	 * @var ItemIdArray
	 */
	public $Items;
	/**
	 * The locale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $locale;
	/**
	 * Constructor
	 * @param string tag
	 * @param string devtag
	 * @param string CartId
	 * @param string HMAC
	 * @param ItemIdArray Items
	 * @param string locale
	 * @return AmazonWebServicesTypeRemoveShoppingCartItemsRequest
	 */
	public function __construct($_tag = null,$_devtag = null,$_CartId = null,$_HMAC = null,$_Items = null,$_locale = null)
	{
		parent::__construct(array('tag'=>$_tag,'devtag'=>$_devtag,'CartId'=>$_CartId,'HMAC'=>$_HMAC,'Items'=>$_Items,'locale'=>$_locale));
	}
	/**
	 * Set tag
	 * @param string tag
	 * @return string
	 */
	public function setTag($_tag)
	{
		return ($this->tag = $_tag);
	}
	/**
	 * Get tag
	 * @return string
	 */
	public function getTag()
	{
		return $this->tag;
	}
	/**
	 * Set devtag
	 * @param string devtag
	 * @return string
	 */
	public function setDevtag($_devtag)
	{
		return ($this->devtag = $_devtag);
	}
	/**
	 * Get devtag
	 * @return string
	 */
	public function getDevtag()
	{
		return $this->devtag;
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
	 * Set Items
	 * @param ItemIdArray Items
	 * @return ItemIdArray
	 */
	public function setItems($_Items)
	{
		return ($this->Items = $_Items);
	}
	/**
	 * Get Items
	 * @return ItemIdArray
	 */
	public function getItems()
	{
		return $this->Items;
	}
	/**
	 * Set locale
	 * @param string locale
	 * @return string
	 */
	public function setLocale($_locale)
	{
		return ($this->locale = $_locale);
	}
	/**
	 * Get locale
	 * @return string
	 */
	public function getLocale()
	{
		return $this->locale;
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