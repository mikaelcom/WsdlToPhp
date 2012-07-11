<?php
/**
 * Class file for AmazonWebServicesTypeKeywordRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeKeywordRequest
 * @date 10/07/2012
 */
class AmazonWebServicesTypeKeywordRequest extends AmazonWebServicesWsdlClass
{
	/**
	 * The keyword
	 * @var string
	 */
	public $keyword;
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
	 * The variations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $variations;
	/**
	 * The locale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $locale;
	/**
	 * Constructor
	 * @param string keyword
	 * @param string page
	 * @param string mode
	 * @param string tag
	 * @param string type
	 * @param string devtag
	 * @param string sort
	 * @param string variations
	 * @param string locale
	 * @return AmazonWebServicesTypeKeywordRequest
	 */
	public function __construct($_keyword = null,$_page = null,$_mode = null,$_tag = null,$_type = null,$_devtag = null,$_sort = null,$_variations = null,$_locale = null)
	{
		parent::__construct(array('keyword'=>$_keyword,'page'=>$_page,'mode'=>$_mode,'tag'=>$_tag,'type'=>$_type,'devtag'=>$_devtag,'sort'=>$_sort,'variations'=>$_variations,'locale'=>$_locale));
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
	 * Set variations
	 * @param string variations
	 * @return string
	 */
	public function setVariations($_variations)
	{
		return ($this->variations = $_variations);
	}
	/**
	 * Get variations
	 * @return string
	 */
	public function getVariations()
	{
		return $this->variations;
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