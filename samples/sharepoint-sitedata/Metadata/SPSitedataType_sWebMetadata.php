<?php
/**
 * Class file for SPSitedataType_sWebMetadata
 * @date 06/07/2012
 */
/**
 * Class SPSitedataType_sWebMetadata
 * @date 06/07/2012
 */
class SPSitedataType_sWebMetadata extends SPSitedataWsdlClass
{
	/**
	 * The WebID
	 * @var string
	 */
	public $WebID;
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
	 * The Author
	 * @var string
	 */
	public $Author;
	/**
	 * The Language
	 * @var unsignedInt
	 */
	public $Language;
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
	 * The NoIndex
	 * @var string
	 */
	public $NoIndex;
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
	 * The Permissions
	 * @var string
	 */
	public $Permissions;
	/**
	 * The ExternalSecurity
	 * @var boolean
	 */
	public $ExternalSecurity;
	/**
	 * The CategoryId
	 * @var string
	 */
	public $CategoryId;
	/**
	 * The CategoryName
	 * @var string
	 */
	public $CategoryName;
	/**
	 * The CategoryIdPath
	 * @var string
	 */
	public $CategoryIdPath;
	/**
	 * The IsBucketWeb
	 * @var boolean
	 */
	public $IsBucketWeb;
	/**
	 * The UsedInAutocat
	 * @var boolean
	 */
	public $UsedInAutocat;
	/**
	 * The CategoryBucketID
	 * @var string
	 */
	public $CategoryBucketID;
	/**
	 * Constructor
	 * @param string WebID
	 * @param string Title
	 * @param string Description
	 * @param string Author
	 * @param unsignedInt Language
	 * @param dateTime LastModified
	 * @param dateTime LastModifiedForceRecrawl
	 * @param string NoIndex
	 * @param boolean ValidSecurityInfo
	 * @param boolean InheritedSecurity
	 * @param boolean AllowAnonymousAccess
	 * @param boolean AnonymousViewListItems
	 * @param string Permissions
	 * @param boolean ExternalSecurity
	 * @param string CategoryId
	 * @param string CategoryName
	 * @param string CategoryIdPath
	 * @param boolean IsBucketWeb
	 * @param boolean UsedInAutocat
	 * @param string CategoryBucketID
	 * @return SPSitedataType_sWebMetadata
	 */
	public function __construct($_WebID = null,$_Title = null,$_Description = null,$_Author = null,$_Language = null,$_LastModified = null,$_LastModifiedForceRecrawl = null,$_NoIndex = null,$_ValidSecurityInfo = null,$_InheritedSecurity = null,$_AllowAnonymousAccess = null,$_AnonymousViewListItems = null,$_Permissions = null,$_ExternalSecurity = null,$_CategoryId = null,$_CategoryName = null,$_CategoryIdPath = null,$_IsBucketWeb = null,$_UsedInAutocat = null,$_CategoryBucketID = null)
	{
		parent::__construct(array('WebID'=>$_WebID,'Title'=>$_Title,'Description'=>$_Description,'Author'=>$_Author,'Language'=>$_Language,'LastModified'=>$_LastModified,'LastModifiedForceRecrawl'=>$_LastModifiedForceRecrawl,'NoIndex'=>$_NoIndex,'ValidSecurityInfo'=>$_ValidSecurityInfo,'InheritedSecurity'=>$_InheritedSecurity,'AllowAnonymousAccess'=>$_AllowAnonymousAccess,'AnonymousViewListItems'=>$_AnonymousViewListItems,'Permissions'=>$_Permissions,'ExternalSecurity'=>$_ExternalSecurity,'CategoryId'=>$_CategoryId,'CategoryName'=>$_CategoryName,'CategoryIdPath'=>$_CategoryIdPath,'IsBucketWeb'=>$_IsBucketWeb,'UsedInAutocat'=>$_UsedInAutocat,'CategoryBucketID'=>$_CategoryBucketID));
	}
	/**
	 * Set WebID
	 * @param string WebID
	 * @return string
	 */
	public function setWebID($_WebID)
	{
		return ($this->WebID = $_WebID);
	}
	/**
	 * Get WebID
	 * @return string
	 */
	public function getWebID()
	{
		return $this->WebID;
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
	 * Set Language
	 * @param unsignedInt Language
	 * @return unsignedInt
	 */
	public function setLanguage($_Language)
	{
		return ($this->Language = $_Language);
	}
	/**
	 * Get Language
	 * @return unsignedInt
	 */
	public function getLanguage()
	{
		return $this->Language;
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
	 * Set NoIndex
	 * @param string NoIndex
	 * @return string
	 */
	public function setNoIndex($_NoIndex)
	{
		return ($this->NoIndex = $_NoIndex);
	}
	/**
	 * Get NoIndex
	 * @return string
	 */
	public function getNoIndex()
	{
		return $this->NoIndex;
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
	 * Set ExternalSecurity
	 * @param boolean ExternalSecurity
	 * @return boolean
	 */
	public function setExternalSecurity($_ExternalSecurity)
	{
		return ($this->ExternalSecurity = $_ExternalSecurity);
	}
	/**
	 * Get ExternalSecurity
	 * @return boolean
	 */
	public function getExternalSecurity()
	{
		return $this->ExternalSecurity;
	}
	/**
	 * Set CategoryId
	 * @param string CategoryId
	 * @return string
	 */
	public function setCategoryId($_CategoryId)
	{
		return ($this->CategoryId = $_CategoryId);
	}
	/**
	 * Get CategoryId
	 * @return string
	 */
	public function getCategoryId()
	{
		return $this->CategoryId;
	}
	/**
	 * Set CategoryName
	 * @param string CategoryName
	 * @return string
	 */
	public function setCategoryName($_CategoryName)
	{
		return ($this->CategoryName = $_CategoryName);
	}
	/**
	 * Get CategoryName
	 * @return string
	 */
	public function getCategoryName()
	{
		return $this->CategoryName;
	}
	/**
	 * Set CategoryIdPath
	 * @param string CategoryIdPath
	 * @return string
	 */
	public function setCategoryIdPath($_CategoryIdPath)
	{
		return ($this->CategoryIdPath = $_CategoryIdPath);
	}
	/**
	 * Get CategoryIdPath
	 * @return string
	 */
	public function getCategoryIdPath()
	{
		return $this->CategoryIdPath;
	}
	/**
	 * Set IsBucketWeb
	 * @param boolean IsBucketWeb
	 * @return boolean
	 */
	public function setIsBucketWeb($_IsBucketWeb)
	{
		return ($this->IsBucketWeb = $_IsBucketWeb);
	}
	/**
	 * Get IsBucketWeb
	 * @return boolean
	 */
	public function getIsBucketWeb()
	{
		return $this->IsBucketWeb;
	}
	/**
	 * Set UsedInAutocat
	 * @param boolean UsedInAutocat
	 * @return boolean
	 */
	public function setUsedInAutocat($_UsedInAutocat)
	{
		return ($this->UsedInAutocat = $_UsedInAutocat);
	}
	/**
	 * Get UsedInAutocat
	 * @return boolean
	 */
	public function getUsedInAutocat()
	{
		return $this->UsedInAutocat;
	}
	/**
	 * Set CategoryBucketID
	 * @param string CategoryBucketID
	 * @return string
	 */
	public function setCategoryBucketID($_CategoryBucketID)
	{
		return ($this->CategoryBucketID = $_CategoryBucketID);
	}
	/**
	 * Get CategoryBucketID
	 * @return string
	 */
	public function getCategoryBucketID()
	{
		return $this->CategoryBucketID;
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