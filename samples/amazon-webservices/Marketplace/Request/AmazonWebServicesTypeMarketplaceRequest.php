<?php
/**
 * Class file for AmazonWebServicesTypeMarketplaceRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeMarketplaceRequest
 * @date 10/07/2012
 */
class AmazonWebServicesTypeMarketplaceRequest extends AmazonWebServicesWsdlClass
{
	/**
	 * The marketplace_search
	 * @var string
	 */
	public $marketplace_search;
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
	 * The keyword
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $keyword;
	/**
	 * The keyword_search
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $keyword_search;
	/**
	 * The browse_id
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $browse_id;
	/**
	 * The zipcode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $zipcode;
	/**
	 * The area_id
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $area_id;
	/**
	 * The geo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $geo;
	/**
	 * The sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $sort;
	/**
	 * The listing_id
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $listing_id;
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
	 * @param string marketplace_search
	 * @param string tag
	 * @param string type
	 * @param string devtag
	 * @param string page
	 * @param string keyword
	 * @param string keyword_search
	 * @param string browse_id
	 * @param string zipcode
	 * @param string area_id
	 * @param string geo
	 * @param string sort
	 * @param string listing_id
	 * @param string locale
	 * @param string index
	 * @return AmazonWebServicesTypeMarketplaceRequest
	 */
	public function __construct($_marketplace_search = null,$_tag = null,$_type = null,$_devtag = null,$_page = null,$_keyword = null,$_keyword_search = null,$_browse_id = null,$_zipcode = null,$_area_id = null,$_geo = null,$_sort = null,$_listing_id = null,$_locale = null,$_index = null)
	{
		parent::__construct(array('marketplace_search'=>$_marketplace_search,'tag'=>$_tag,'type'=>$_type,'devtag'=>$_devtag,'page'=>$_page,'keyword'=>$_keyword,'keyword_search'=>$_keyword_search,'browse_id'=>$_browse_id,'zipcode'=>$_zipcode,'area_id'=>$_area_id,'geo'=>$_geo,'sort'=>$_sort,'listing_id'=>$_listing_id,'locale'=>$_locale,'index'=>$_index));
	}
	/**
	 * Set marketplace_search
	 * @param string marketplace_search
	 * @return string
	 */
	public function setMarketplace_search($_marketplace_search)
	{
		return ($this->marketplace_search = $_marketplace_search);
	}
	/**
	 * Get marketplace_search
	 * @return string
	 */
	public function getMarketplace_search()
	{
		return $this->marketplace_search;
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
	 * Set keyword_search
	 * @param string keyword_search
	 * @return string
	 */
	public function setKeyword_search($_keyword_search)
	{
		return ($this->keyword_search = $_keyword_search);
	}
	/**
	 * Get keyword_search
	 * @return string
	 */
	public function getKeyword_search()
	{
		return $this->keyword_search;
	}
	/**
	 * Set browse_id
	 * @param string browse_id
	 * @return string
	 */
	public function setBrowse_id($_browse_id)
	{
		return ($this->browse_id = $_browse_id);
	}
	/**
	 * Get browse_id
	 * @return string
	 */
	public function getBrowse_id()
	{
		return $this->browse_id;
	}
	/**
	 * Set zipcode
	 * @param string zipcode
	 * @return string
	 */
	public function setZipcode($_zipcode)
	{
		return ($this->zipcode = $_zipcode);
	}
	/**
	 * Get zipcode
	 * @return string
	 */
	public function getZipcode()
	{
		return $this->zipcode;
	}
	/**
	 * Set area_id
	 * @param string area_id
	 * @return string
	 */
	public function setArea_id($_area_id)
	{
		return ($this->area_id = $_area_id);
	}
	/**
	 * Get area_id
	 * @return string
	 */
	public function getArea_id()
	{
		return $this->area_id;
	}
	/**
	 * Set geo
	 * @param string geo
	 * @return string
	 */
	public function setGeo($_geo)
	{
		return ($this->geo = $_geo);
	}
	/**
	 * Get geo
	 * @return string
	 */
	public function getGeo()
	{
		return $this->geo;
	}
	/**
	 * Set sort
	 * @param string sort
	 * @return string
	 */
	public function setSort($_sort)
	{
		return ($this->sort = $_sort);
	}
	/**
	 * Get sort
	 * @return string
	 */
	public function getSort()
	{
		return $this->sort;
	}
	/**
	 * Set listing_id
	 * @param string listing_id
	 * @return string
	 */
	public function setListing_id($_listing_id)
	{
		return ($this->listing_id = $_listing_id);
	}
	/**
	 * Get listing_id
	 * @return string
	 */
	public function getListing_id()
	{
		return $this->listing_id;
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