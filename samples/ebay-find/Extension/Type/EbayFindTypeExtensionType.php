<?php
/**
 * Class file for EbayFindTypeExtensionType
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeExtensionType
 * Documentation : Reserved for future use.
 * @date 04/07/2012
 */
class EbayFindTypeExtensionType extends EbayFindWsdlClass
{
	/**
	 * The id
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @var positiveInteger
	 */
	public $id;
	/**
	 * The version
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @var string
	 */
	public $version;
	/**
	 * The contentType
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @var string
	 */
	public $contentType;
	/**
	 * The value
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @var string
	 */
	public $value;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param positiveInteger id
	 * @param string version
	 * @param string contentType
	 * @param string value
	 * @param DOMDocument any
	 * @return EbayFindTypeExtensionType
	 */
	public function __construct($_id = null,$_version = null,$_contentType = null,$_value = null,$_any = null)
	{
		parent::__construct(array('id'=>$_id,'version'=>$_version,'contentType'=>$_contentType,'value'=>$_value,'any'=>$_any));
	}
	/**
	 * Set id
	 * @param positiveInteger id
	 * @return positiveInteger
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return positiveInteger
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set version
	 * @param string version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set contentType
	 * @param string contentType
	 * @return string
	 */
	public function setContentType($_contentType)
	{
		return ($this->contentType = $_contentType);
	}
	/**
	 * Get contentType
	 * @return string
	 */
	public function getContentType()
	{
		return $this->contentType;
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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