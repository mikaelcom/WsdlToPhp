<?php
/**
 * Class file for AmazonWebServicesTypeSellerProfileRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeSellerProfileRequest
 * @date 10/07/2012
 */
class AmazonWebServicesTypeSellerProfileRequest extends AmazonWebServicesWsdlClass
{
	/**
	 * The seller_id
	 * @var string
	 */
	public $seller_id;
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
	 * The page
	 * @var string
	 */
	public $page;
	/**
	 * The locale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $locale;
	/**
	 * Constructor
	 * @param string seller_id
	 * @param string tag
	 * @param string type
	 * @param string devtag
	 * @param string page
	 * @param string locale
	 * @return AmazonWebServicesTypeSellerProfileRequest
	 */
	public function __construct($_seller_id = null,$_tag = null,$_type = null,$_devtag = null,$_page = null,$_locale = null)
	{
		parent::__construct(array('seller_id'=>$_seller_id,'tag'=>$_tag,'type'=>$_type,'devtag'=>$_devtag,'page'=>$_page,'locale'=>$_locale));
	}
	/**
	 * Set seller_id
	 * @param string seller_id
	 * @return string
	 */
	public function setSeller_id($_seller_id)
	{
		return ($this->seller_id = $_seller_id);
	}
	/**
	 * Get seller_id
	 * @return string
	 */
	public function getSeller_id()
	{
		return $this->seller_id;
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