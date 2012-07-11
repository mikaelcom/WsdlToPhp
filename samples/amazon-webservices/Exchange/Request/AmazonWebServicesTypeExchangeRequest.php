<?php
/**
 * Class file for AmazonWebServicesTypeExchangeRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeExchangeRequest
 * @date 10/07/2012
 */
class AmazonWebServicesTypeExchangeRequest extends AmazonWebServicesWsdlClass
{
	/**
	 * The exchange_id
	 * @var string
	 */
	public $exchange_id;
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
	 * @param string exchange_id
	 * @param string tag
	 * @param string type
	 * @param string devtag
	 * @param string locale
	 * @return AmazonWebServicesTypeExchangeRequest
	 */
	public function __construct($_exchange_id = null,$_tag = null,$_type = null,$_devtag = null,$_locale = null)
	{
		parent::__construct(array('exchange_id'=>$_exchange_id,'tag'=>$_tag,'type'=>$_type,'devtag'=>$_devtag,'locale'=>$_locale));
	}
	/**
	 * Set exchange_id
	 * @param string exchange_id
	 * @return string
	 */
	public function setExchange_id($_exchange_id)
	{
		return ($this->exchange_id = $_exchange_id);
	}
	/**
	 * Get exchange_id
	 * @return string
	 */
	public function getExchange_id()
	{
		return $this->exchange_id;
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