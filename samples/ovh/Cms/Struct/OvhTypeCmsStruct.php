<?php
/**
 * Class file for OvhTypeCmsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCmsStruct
 * @date 02/07/2012
 */
class OvhTypeCmsStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
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
	 * @var string
	 */
	public $language;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The path
	 * @var string
	 */
	public $path;
	/**
	 * The adminLogin
	 * @var string
	 */
	public $adminLogin;
	/**
	 * Constructor
	 * @param int id
	 * @param string name
	 * @param string version
	 * @param string language
	 * @param string url
	 * @param string path
	 * @param string adminLogin
	 * @return OvhTypeCmsStruct
	 */
	public function __construct($_id = null,$_name = null,$_version = null,$_language = null,$_url = null,$_path = null,$_adminLogin = null)
	{
		parent::__construct(array('id'=>$_id,'name'=>$_name,'version'=>$_version,'language'=>$_language,'url'=>$_url,'path'=>$_path,'adminLogin'=>$_adminLogin));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
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
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
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
	 * Set adminLogin
	 * @param string adminLogin
	 * @return string
	 */
	public function setAdminLogin($_adminLogin)
	{
		return ($this->adminLogin = $_adminLogin);
	}
	/**
	 * Get adminLogin
	 * @return string
	 */
	public function getAdminLogin()
	{
		return $this->adminLogin;
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