<?php
/**
 * Class file for ScienceGovSearchTypeCookie
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeCookie
 * @date 13/10/2012
 */
class ScienceGovSearchTypeCookie extends ScienceGovSearchWsdlClass
{
	/**
	 * The comment
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * The domain
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The expiry
	 * Meta informations :
	 * 	- nillable : true
	 * @var long
	 */
	public $expiry;
	/**
	 * The name
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The path
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $path;
	/**
	 * The secure
	 * Meta informations :
	 * 	- nillable : true
	 * @var boolean
	 */
	public $secure;
	/**
	 * The value
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $value;
	/**
	 * The version
	 * Meta informations :
	 * 	- nillable : true
	 * @var int
	 */
	public $version;
	/**
	 * Constructor
	 * @param string comment
	 * @param string domain
	 * @param long expiry
	 * @param string name
	 * @param string path
	 * @param boolean secure
	 * @param string value
	 * @param int version
	 * @return ScienceGovSearchTypeCookie
	 */
	public function __construct($_comment = null,$_domain = null,$_expiry = null,$_name = null,$_path = null,$_secure = null,$_value = null,$_version = null)
	{
		parent::__construct(array('comment'=>$_comment,'domain'=>$_domain,'expiry'=>$_expiry,'name'=>$_name,'path'=>$_path,'secure'=>$_secure,'value'=>$_value,'version'=>$_version));
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set expiry
	 * @param long expiry
	 * @return long
	 */
	public function setExpiry($_expiry)
	{
		return ($this->expiry = $_expiry);
	}
	/**
	 * Get expiry
	 * @return long
	 */
	public function getExpiry()
	{
		return $this->expiry;
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
	 * Set path
	 * @param string path
	 * @return string
	 */
	public function setPath($_path)
	{
		return ($this->path = $_path);
	}
	/**
	 * Get path
	 * @return string
	 */
	public function getPath()
	{
		return $this->path;
	}
	/**
	 * Set secure
	 * @param boolean secure
	 * @return boolean
	 */
	public function setSecure($_secure)
	{
		return ($this->secure = $_secure);
	}
	/**
	 * Get secure
	 * @return boolean
	 */
	public function getSecure()
	{
		return $this->secure;
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
	 * Set version
	 * @param int version
	 * @return int
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return int
	 */
	public function getVersion()
	{
		return $this->version;
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