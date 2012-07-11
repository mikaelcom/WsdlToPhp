<?php
/**
 * Class file for AmazonWebServicesTypeSellerRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeSellerRequest
 * @date 10/07/2012
 */
class AmazonWebServicesTypeSellerRequest extends AmazonWebServicesWsdlClass
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
	 * The offerstatus
	 * @var string
	 */
	public $offerstatus;
	/**
	 * The page
	 * @var string
	 */
	public $page;
	/**
	 * The seller_browse_id
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $seller_browse_id;
	/**
	 * The keyword
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $keyword;
	/**
	 * The locale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $locale;
	/**
	 * The index
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $index;
	/**
	 * Constructor
	 * @param string seller_id
	 * @param string tag
	 * @param string type
	 * @param string devtag
	 * @param string offerstatus
	 * @param string page
	 * @param string seller_browse_id
	 * @param string keyword
	 * @param string locale
	 * @param string index
	 * @return AmazonWebServicesTypeSellerRequest
	 */
	public function __construct($_seller_id = null,$_tag = null,$_type = null,$_devtag = null,$_offerstatus = null,$_page = null,$_seller_browse_id = null,$_keyword = null,$_locale = null,$_index = null)
	{
		parent::__construct(array('seller_id'=>$_seller_id,'tag'=>$_tag,'type'=>$_type,'devtag'=>$_devtag,'offerstatus'=>$_offerstatus,'page'=>$_page,'seller_browse_id'=>$_seller_browse_id,'keyword'=>$_keyword,'locale'=>$_locale,'index'=>$_index));
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
	 * Set offerstatus
	 * @param string offerstatus
	 * @return string
	 */
	public function setOfferstatus($_offerstatus)
	{
		return ($this->offerstatus = $_offerstatus);
	}
	/**
	 * Get offerstatus
	 * @return string
	 */
	public function getOfferstatus()
	{
		return $this->offerstatus;
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
	 * Set seller_browse_id
	 * @param string seller_browse_id
	 * @return string
	 */
	public function setSeller_browse_id($_seller_browse_id)
	{
		return ($this->seller_browse_id = $_seller_browse_id);
	}
	/**
	 * Get seller_browse_id
	 * @return string
	 */
	public function getSeller_browse_id()
	{
		return $this->seller_browse_id;
	}
	/**
	 * Set keyword
	 * @param string keyword
	 * @return string
	 */
	public function setKeyword($_keyword)
	{
		return ($this->keyword = $_keyword);
	}
	/**
	 * Get keyword
	 * @return string
	 */
	public function getKeyword()
	{
		return $this->keyword;
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
	 * Set index
	 * @param string index
	 * @return string
	 */
	public function setIndex($_index)
	{
		return ($this->index = $_index);
	}
	/**
	 * Get index
	 * @return string
	 */
	public function getIndex()
	{
		return $this->index;
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