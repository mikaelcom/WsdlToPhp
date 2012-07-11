<?php
/**
 * Class file for SPSitesTypeCreateWeb
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeCreateWeb
 * @date 06/07/2012
 */
class SPSitesTypeCreateWeb extends SPSitesWsdlClass
{
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The title
	 * @var string
	 */
	public $title;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The templateName
	 * @var string
	 */
	public $templateName;
	/**
	 * The language
	 * @var unsignedInt
	 */
	public $language;
	/**
	 * The locale
	 * @var unsignedInt
	 */
	public $locale;
	/**
	 * The collationLocale
	 * @var unsignedInt
	 */
	public $collationLocale;
	/**
	 * The uniquePermissions
	 * @var boolean
	 */
	public $uniquePermissions;
	/**
	 * The anonymous
	 * @var boolean
	 */
	public $anonymous;
	/**
	 * The presence
	 * @var boolean
	 */
	public $presence;
	/**
	 * Constructor
	 * @param string url
	 * @param string title
	 * @param string description
	 * @param string templateName
	 * @param unsignedInt language
	 * @param unsignedInt locale
	 * @param unsignedInt collationLocale
	 * @param boolean uniquePermissions
	 * @param boolean anonymous
	 * @param boolean presence
	 * @return SPSitesTypeCreateWeb
	 */
	public function __construct($_url = null,$_title = null,$_description = null,$_templateName = null,$_language = null,$_locale = null,$_collationLocale = null,$_uniquePermissions = null,$_anonymous = null,$_presence = null)
	{
		parent::__construct(array('url'=>$_url,'title'=>$_title,'description'=>$_description,'templateName'=>$_templateName,'language'=>$_language,'locale'=>$_locale,'collationLocale'=>$_collationLocale,'uniquePermissions'=>$_uniquePermissions,'anonymous'=>$_anonymous,'presence'=>$_presence));
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
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set templateName
	 * @param string templateName
	 * @return string
	 */
	public function setTemplateName($_templateName)
	{
		return ($this->templateName = $_templateName);
	}
	/**
	 * Get templateName
	 * @return string
	 */
	public function getTemplateName()
	{
		return $this->templateName;
	}
	/**
	 * Set language
	 * @param unsignedInt language
	 * @return unsignedInt
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return unsignedInt
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set locale
	 * @param unsignedInt locale
	 * @return unsignedInt
	 */
	public function setLocale($_locale)
	{
		return ($this->locale = $_locale);
	}
	/**
	 * Get locale
	 * @return unsignedInt
	 */
	public function getLocale()
	{
		return $this->locale;
	}
	/**
	 * Set collationLocale
	 * @param unsignedInt collationLocale
	 * @return unsignedInt
	 */
	public function setCollationLocale($_collationLocale)
	{
		return ($this->collationLocale = $_collationLocale);
	}
	/**
	 * Get collationLocale
	 * @return unsignedInt
	 */
	public function getCollationLocale()
	{
		return $this->collationLocale;
	}
	/**
	 * Set uniquePermissions
	 * @param boolean uniquePermissions
	 * @return boolean
	 */
	public function setUniquePermissions($_uniquePermissions)
	{
		return ($this->uniquePermissions = $_uniquePermissions);
	}
	/**
	 * Get uniquePermissions
	 * @return boolean
	 */
	public function getUniquePermissions()
	{
		return $this->uniquePermissions;
	}
	/**
	 * Set anonymous
	 * @param boolean anonymous
	 * @return boolean
	 */
	public function setAnonymous($_anonymous)
	{
		return ($this->anonymous = $_anonymous);
	}
	/**
	 * Get anonymous
	 * @return boolean
	 */
	public function getAnonymous()
	{
		return $this->anonymous;
	}
	/**
	 * Set presence
	 * @param boolean presence
	 * @return boolean
	 */
	public function setPresence($_presence)
	{
		return ($this->presence = $_presence);
	}
	/**
	 * Get presence
	 * @return boolean
	 */
	public function getPresence()
	{
		return $this->presence;
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