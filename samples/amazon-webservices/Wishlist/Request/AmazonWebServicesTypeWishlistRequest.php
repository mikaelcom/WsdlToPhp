<?php
/**
 * Class file for AmazonWebServicesTypeWishlistRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeWishlistRequest
 * @date 10/07/2012
 */
class AmazonWebServicesTypeWishlistRequest extends AmazonWebServicesWsdlClass
{
	/**
	 * The wishlist_id
	 * @var string
	 */
	public $wishlist_id;
	/**
	 * The page
	 * @var string
	 */
	public $page;
	/**
	 * The tag
	 * @var string
	 */
	public $tag;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The devtag
	 * @var string
	 */
	public $devtag;
	/**
	 * The locale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $locale;
	/**
	 * Constructor
	 * @param string wishlist_id
	 * @param string page
	 * @param string tag
	 * @param string type
	 * @param string devtag
	 * @param string locale
	 * @return AmazonWebServicesTypeWishlistRequest
	 */
	public function __construct($_wishlist_id = null,$_page = null,$_tag = null,$_type = null,$_devtag = null,$_locale = null)
	{
		parent::__construct(array('wishlist_id'=>$_wishlist_id,'page'=>$_page,'tag'=>$_tag,'type'=>$_type,'devtag'=>$_devtag,'locale'=>$_locale));
	}
	/**
	 * Set wishlist_id
	 * @param string wishlist_id
	 * @return string
	 */
	public function setWishlist_id($_wishlist_id)
	{
		return ($this->wishlist_id = $_wishlist_id);
	}
	/**
	 * Get wishlist_id
	 * @return string
	 */
	public function getWishlist_id()
	{
		return $this->wishlist_id;
	}
	/**
	 * Set page
	 * @param string page
	 * @return string
	 */
	public function setPage($_page)
	{
		return ($this->page = $_page);
	}
	/**
	 * Get page
	 * @return string
	 */
	public function getPage()
	{
		return $this->page;
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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