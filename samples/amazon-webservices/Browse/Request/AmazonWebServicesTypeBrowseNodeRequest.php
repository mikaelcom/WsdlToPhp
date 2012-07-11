<?php
/**
 * Class file for AmazonWebServicesTypeBrowseNodeRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeBrowseNodeRequest
 * @date 10/07/2012
 */
class AmazonWebServicesTypeBrowseNodeRequest extends AmazonWebServicesWsdlClass
{
	/**
	 * The browse_node
	 * @var string
	 */
	public $browse_node;
	/**
	 * The page
	 * @var string
	 */
	public $page;
	/**
	 * The mode
	 * @var string
	 */
	public $mode;
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
	 * The sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $sort;
	/**
	 * The locale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $locale;
	/**
	 * Constructor
	 * @param string browse_node
	 * @param string page
	 * @param string mode
	 * @param string tag
	 * @param string type
	 * @param string devtag
	 * @param string sort
	 * @param string locale
	 * @return AmazonWebServicesTypeBrowseNodeRequest
	 */
	public function __construct($_browse_node = null,$_page = null,$_mode = null,$_tag = null,$_type = null,$_devtag = null,$_sort = null,$_locale = null)
	{
		parent::__construct(array('browse_node'=>$_browse_node,'page'=>$_page,'mode'=>$_mode,'tag'=>$_tag,'type'=>$_type,'devtag'=>$_devtag,'sort'=>$_sort,'locale'=>$_locale));
	}
	/**
	 * Set browse_node
	 * @param string browse_node
	 * @return string
	 */
	public function setBrowse_node($_browse_node)
	{
		return ($this->browse_node = $_browse_node);
	}
	/**
	 * Get browse_node
	 * @return string
	 */
	public function getBrowse_node()
	{
		return $this->browse_node;
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
	 * Set mode
	 * @param string mode
	 * @return string
	 */
	public function setMode($_mode)
	{
		return ($this->mode = $_mode);
	}
	/**
	 * Get mode
	 * @return string
	 */
	public function getMode()
	{
		return $this->mode;
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