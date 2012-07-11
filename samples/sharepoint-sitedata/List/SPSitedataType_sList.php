<?php
/**
 * Class file for SPSitedataType_sList
 * @date 06/07/2012
 */
/**
 * Class SPSitedataType_sList
 * @date 06/07/2012
 */
class SPSitedataType_sList extends SPSitedataWsdlClass
{
	/**
	 * The InternalName
	 * @var string
	 */
	public $InternalName;
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
	 * @var string
	 */
	public $LastModified;
	/**
	 * The PermId
	 * @var string
	 */
	public $PermId;
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
	 * Constructor
	 * @param string InternalName
	 * @param string Title
	 * @param string Description
	 * @param string BaseType
	 * @param string BaseTemplate
	 * @param string DefaultViewUrl
	 * @param string LastModified
	 * @param string PermId
	 * @param boolean InheritedSecurity
	 * @param boolean AllowAnonymousAccess
	 * @param boolean AnonymousViewListItems
	 * @param int ReadSecurity
	 * @return SPSitedataType_sList
	 */
	public function __construct($_InternalName = null,$_Title = null,$_Description = null,$_BaseType = null,$_BaseTemplate = null,$_DefaultViewUrl = null,$_LastModified = null,$_PermId = null,$_InheritedSecurity = null,$_AllowAnonymousAccess = null,$_AnonymousViewListItems = null,$_ReadSecurity = null)
	{
		parent::__construct(array('InternalName'=>$_InternalName,'Title'=>$_Title,'Description'=>$_Description,'BaseType'=>$_BaseType,'BaseTemplate'=>$_BaseTemplate,'DefaultViewUrl'=>$_DefaultViewUrl,'LastModified'=>$_LastModified,'PermId'=>$_PermId,'InheritedSecurity'=>$_InheritedSecurity,'AllowAnonymousAccess'=>$_AllowAnonymousAccess,'AnonymousViewListItems'=>$_AnonymousViewListItems,'ReadSecurity'=>$_ReadSecurity));
	}
	/**
	 * Set InternalName
	 * @param string InternalName
	 * @return string
	 */
	public function setInternalName($_InternalName)
	{
		return ($this->InternalName = $_InternalName);
	}
	/**
	 * Get InternalName
	 * @return string
	 */
	public function getInternalName()
	{
		return $this->InternalName;
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
	 * @param string LastModified
	 * @return string
	 */
	public function setLastModified($_LastModified)
	{
		return ($this->LastModified = $_LastModified);
	}
	/**
	 * Get LastModified
	 * @return string
	 */
	public function getLastModified()
	{
		return $this->LastModified;
	}
	/**
	 * Set PermId
	 * @param string PermId
	 * @return string
	 */
	public function setPermId($_PermId)
	{
		return ($this->PermId = $_PermId);
	}
	/**
	 * Get PermId
	 * @return string
	 */
	public function getPermId()
	{
		return $this->PermId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>