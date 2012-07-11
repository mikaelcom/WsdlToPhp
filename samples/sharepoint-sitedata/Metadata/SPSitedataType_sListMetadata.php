<?php
/**
 * Class file for SPSitedataType_sListMetadata
 * @date 06/07/2012
 */
/**
 * Class SPSitedataType_sListMetadata
 * @date 06/07/2012
 */
class SPSitedataType_sListMetadata extends SPSitedataWsdlClass
{
	/**
	 * The Title
	 * @var string
	 */
	public $Title;
	/**
	 * The Description
	 * @var string
	 */
	public $Description;
	/**
	 * The BaseType
	 * @var string
	 */
	public $BaseType;
	/**
	 * The BaseTemplate
	 * @var string
	 */
	public $BaseTemplate;
	/**
	 * The DefaultViewUrl
	 * @var string
	 */
	public $DefaultViewUrl;
	/**
	 * The LastModified
	 * @var dateTime
	 */
	public $LastModified;
	/**
	 * The LastModifiedForceRecrawl
	 * @var dateTime
	 */
	public $LastModifiedForceRecrawl;
	/**
	 * The Author
	 * @var string
	 */
	public $Author;
	/**
	 * The ValidSecurityInfo
	 * @var boolean
	 */
	public $ValidSecurityInfo;
	/**
	 * The InheritedSecurity
	 * @var boolean
	 */
	public $InheritedSecurity;
	/**
	 * The AllowAnonymousAccess
	 * @var boolean
	 */
	public $AllowAnonymousAccess;
	/**
	 * The AnonymousViewListItems
	 * @var boolean
	 */
	public $AnonymousViewListItems;
	/**
	 * The ReadSecurity
	 * @var int
	 */
	public $ReadSecurity;
	/**
	 * The Permissions
	 * @var string
	 */
	public $Permissions;
	/**
	 * Constructor
	 * @param string Title
	 * @param string Description
	 * @param string BaseType
	 * @param string BaseTemplate
	 * @param string DefaultViewUrl
	 * @param dateTime LastModified
	 * @param dateTime LastModifiedForceRecrawl
	 * @param string Author
	 * @param boolean ValidSecurityInfo
	 * @param boolean InheritedSecurity
	 * @param boolean AllowAnonymousAccess
	 * @param boolean AnonymousViewListItems
	 * @param int ReadSecurity
	 * @param string Permissions
	 * @return SPSitedataType_sListMetadata
	 */
	public function __construct($_Title = null,$_Description = null,$_BaseType = null,$_BaseTemplate = null,$_DefaultViewUrl = null,$_LastModified = null,$_LastModifiedForceRecrawl = null,$_Author = null,$_ValidSecurityInfo = null,$_InheritedSecurity = null,$_AllowAnonymousAccess = null,$_AnonymousViewListItems = null,$_ReadSecurity = null,$_Permissions = null)
	{
		parent::__construct(array('Title'=>$_Title,'Description'=>$_Description,'BaseType'=>$_BaseType,'BaseTemplate'=>$_BaseTemplate,'DefaultViewUrl'=>$_DefaultViewUrl,'LastModified'=>$_LastModified,'LastModifiedForceRecrawl'=>$_LastModifiedForceRecrawl,'Author'=>$_Author,'ValidSecurityInfo'=>$_ValidSecurityInfo,'InheritedSecurity'=>$_InheritedSecurity,'AllowAnonymousAccess'=>$_AllowAnonymousAccess,'AnonymousViewListItems'=>$_AnonymousViewListItems,'ReadSecurity'=>$_ReadSecurity,'Permissions'=>$_Permissions));
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set BaseType
	 * @param string BaseType
	 * @return string
	 */
	public function setBaseType($_BaseType)
	{
		return ($this->BaseType = $_BaseType);
	}
	/**
	 * Get BaseType
	 * @return string
	 */
	public function getBaseType()
	{
		return $this->BaseType;
	}
	/**
	 * Set BaseTemplate
	 * @param string BaseTemplate
	 * @return string
	 */
	public function setBaseTemplate($_BaseTemplate)
	{
		return ($this->BaseTemplate = $_BaseTemplate);
	}
	/**
	 * Get BaseTemplate
	 * @return string
	 */
	public function getBaseTemplate()
	{
		return $this->BaseTemplate;
	}
	/**
	 * Set DefaultViewUrl
	 * @param string DefaultViewUrl
	 * @return string
	 */
	public function setDefaultViewUrl($_DefaultViewUrl)
	{
		return ($this->DefaultViewUrl = $_DefaultViewUrl);
	}
	/**
	 * Get DefaultViewUrl
	 * @return string
	 */
	public function getDefaultViewUrl()
	{
		return $this->DefaultViewUrl;
	}
	/**
	 * Set LastModified
	 * @param dateTime LastModified
	 * @return dateTime
	 */
	public function setLastModified($_LastModified)
	{
		return ($this->LastModified = $_LastModified);
	}
	/**
	 * Get LastModified
	 * @return dateTime
	 */
	public function getLastModified()
	{
		return $this->LastModified;
	}
	/**
	 * Set LastModifiedForceRecrawl
	 * @param dateTime LastModifiedForceRecrawl
	 * @return dateTime
	 */
	public function setLastModifiedForceRecrawl($_LastModifiedForceRecrawl)
	{
		return ($this->LastModifiedForceRecrawl = $_LastModifiedForceRecrawl);
	}
	/**
	 * Get LastModifiedForceRecrawl
	 * @return dateTime
	 */
	public function getLastModifiedForceRecrawl()
	{
		return $this->LastModifiedForceRecrawl;
	}
	/**
	 * Set Author
	 * @param string Author
	 * @return string
	 */
	public function setAuthor($_Author)
	{
		return ($this->Author = $_Author);
	}
	/**
	 * Get Author
	 * @return string
	 */
	public function getAuthor()
	{
		return $this->Author;
	}
	/**
	 * Set ValidSecurityInfo
	 * @param boolean ValidSecurityInfo
	 * @return boolean
	 */
	public function setValidSecurityInfo($_ValidSecurityInfo)
	{
		return ($this->ValidSecurityInfo = $_ValidSecurityInfo);
	}
	/**
	 * Get ValidSecurityInfo
	 * @return boolean
	 */
	public function getValidSecurityInfo()
	{
		return $this->ValidSecurityInfo;
	}
	/**
	 * Set InheritedSecurity
	 * @param boolean InheritedSecurity
	 * @return boolean
	 */
	public function setInheritedSecurity($_InheritedSecurity)
	{
		return ($this->InheritedSecurity = $_InheritedSecurity);
	}
	/**
	 * Get InheritedSecurity
	 * @return boolean
	 */
	public function getInheritedSecurity()
	{
		return $this->InheritedSecurity;
	}
	/**
	 * Set AllowAnonymousAccess
	 * @param boolean AllowAnonymousAccess
	 * @return boolean
	 */
	public function setAllowAnonymousAccess($_AllowAnonymousAccess)
	{
		return ($this->AllowAnonymousAccess = $_AllowAnonymousAccess);
	}
	/**
	 * Get AllowAnonymousAccess
	 * @return boolean
	 */
	public function getAllowAnonymousAccess()
	{
		return $this->AllowAnonymousAccess;
	}
	/**
	 * Set AnonymousViewListItems
	 * @param boolean AnonymousViewListItems
	 * @return boolean
	 */
	public function setAnonymousViewListItems($_AnonymousViewListItems)
	{
		return ($this->AnonymousViewListItems = $_AnonymousViewListItems);
	}
	/**
	 * Get AnonymousViewListItems
	 * @return boolean
	 */
	public function getAnonymousViewListItems()
	{
		return $this->AnonymousViewListItems;
	}
	/**
	 * Set ReadSecurity
	 * @param int ReadSecurity
	 * @return int
	 */
	public function setReadSecurity($_ReadSecurity)
	{
		return ($this->ReadSecurity = $_ReadSecurity);
	}
	/**
	 * Get ReadSecurity
	 * @return int
	 */
	public function getReadSecurity()
	{
		return $this->ReadSecurity;
	}
	/**
	 * Set Permissions
	 * @param string Permissions
	 * @return string
	 */
	public function setPermissions($_Permissions)
	{
		return ($this->Permissions = $_Permissions);
	}
	/**
	 * Get Permissions
	 * @return string
	 */
	public function getPermissions()
	{
		return $this->Permissions;
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