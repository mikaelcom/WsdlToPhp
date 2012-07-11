<?php
/**
 * Class file for AmazonWebServicesTypeBlendedRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeBlendedRequest
 * @date 10/07/2012
 */
class AmazonWebServicesTypeBlendedRequest extends AmazonWebServicesWsdlClass
{
	/**
	 * The blended
	 * @var string
	 */
	public $blended;
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
	 * @param string blended
	 * @param string tag
	 * @param string type
	 * @param string devtag
	 * @param string locale
	 * @return AmazonWebServicesTypeBlendedRequest
	 */
	public function __construct($_blended = null,$_tag = null,$_type = null,$_devtag = null,$_locale = null)
	{
		parent::__construct(array('blended'=>$_blended,'tag'=>$_tag,'type'=>$_type,'devtag'=>$_devtag,'locale'=>$_locale));
	}
	/**
	 * Set blended
	 * @param string blended
	 * @return string
	 */
	public function setBlended($_blended)
	{
		return ($this->blended = $_blended);
	}
	/**
	 * Get blended
	 * @return string
	 */
	public function getBlended()
	{
		return $this->blended;
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