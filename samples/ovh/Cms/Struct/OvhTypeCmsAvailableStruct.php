<?php
/**
 * Class file for OvhTypeCmsAvailableStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCmsAvailableStruct
 * @date 02/07/2012
 */
class OvhTypeCmsAvailableStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The language
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $language;
	/**
	 * The category
	 * @var string
	 */
	public $category;
	/**
	 * The dbPrefix
	 * @var string
	 */
	public $dbPrefix;
	/**
	 * The enable
	 * @var boolean
	 */
	public $enable;
	/**
	 * Constructor
	 * @param string name
	 * @param string version
	 * @param OvhTypeMyArrayOfStringType language
	 * @param string category
	 * @param string dbPrefix
	 * @param boolean enable
	 * @return OvhTypeCmsAvailableStruct
	 */
	public function __construct($_name = null,$_version = null,$_language = null,$_category = null,$_dbPrefix = null,$_enable = null)
	{
		parent::__construct(array('name'=>$_name,'version'=>$_version,'language'=>new OvhTypeMyArrayOfStringType($_language),'category'=>$_category,'dbPrefix'=>$_dbPrefix,'enable'=>$_enable));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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
	 * Set language
	 * @param MyArrayOfStringType language
	 * @return MyArrayOfStringType
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set category
	 * @param string category
	 * @return string
	 */
	public function setCategory($_category)
	{
		return ($this->category = $_category);
	}
	/**
	 * Get category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}
	/**
	 * Set dbPrefix
	 * @param string dbPrefix
	 * @return string
	 */
	public function setDbPrefix($_dbPrefix)
	{
		return ($this->dbPrefix = $_dbPrefix);
	}
	/**
	 * Get dbPrefix
	 * @return string
	 */
	public function getDbPrefix()
	{
		return $this->dbPrefix;
	}
	/**
	 * Set enable
	 * @param boolean enable
	 * @return boolean
	 */
	public function setEnable($_enable)
	{
		return ($this->enable = $_enable);
	}
	/**
	 * Get enable
	 * @return boolean
	 */
	public function getEnable()
	{
		return $this->enable;
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