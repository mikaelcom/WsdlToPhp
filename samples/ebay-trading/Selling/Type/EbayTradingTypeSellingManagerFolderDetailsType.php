<?php
/**
 * Class file for EbayTradingTypeSellingManagerFolderDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerFolderDetailsType
 * Documentation : Contains information about a Selling Manager folder.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerFolderDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique ID of the folder. Originally returned in the AddSellingManagerInventoryFolder response.
	 * @var long
	 */
	public $FolderID;
	/**
	 * The ParentFolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique ID of the parent folder. If it exists, it is returned.
	 * @var long
	 */
	public $ParentFolderID;
	/**
	 * The FolderLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Level of this folder in the folder tree hierarchy. Root folder is at level 1.
	 * @var long
	 */
	public $FolderLevel;
	/**
	 * The FolderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name assigned to the folder by the user in the AddSellingManagerInventoryFolder or the ReviseSellingManagerInventoryFolder call.
	 * @var string
	 */
	public $FolderName;
	/**
	 * The FolderComment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Comments associated with the folder. Returned if it exists.
	 * @var string
	 */
	public $FolderComment;
	/**
	 * The ChildFolder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container for sub-folder information. Returned if requested.
	 * @var EbayTradingTypeSellingManagerFolderDetailsType
	 */
	public $ChildFolder;
	/**
	 * The CreationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date when this folder was created.
	 * @var dateTime
	 */
	public $CreationTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long FolderID
	 * @param long ParentFolderID
	 * @param long FolderLevel
	 * @param string FolderName
	 * @param string FolderComment
	 * @param EbayTradingTypeSellingManagerFolderDetailsType ChildFolder
	 * @param dateTime CreationTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerFolderDetailsType
	 */
	public function __construct($_FolderID = null,$_ParentFolderID = null,$_FolderLevel = null,$_FolderName = null,$_FolderComment = null,$_ChildFolder = null,$_CreationTime = null,$_any = null)
	{
		parent::__construct(array('FolderID'=>$_FolderID,'ParentFolderID'=>$_ParentFolderID,'FolderLevel'=>$_FolderLevel,'FolderName'=>$_FolderName,'FolderComment'=>$_FolderComment,'ChildFolder'=>$_ChildFolder,'CreationTime'=>$_CreationTime,'any'=>$_any));
	}
	/**
	 * Set FolderID
	 * @param long FolderID
	 * @return long
	 */
	public function setFolderID($_FolderID)
	{
		return ($this->FolderID = $_FolderID);
	}
	/**
	 * Get FolderID
	 * @return long
	 */
	public function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * Set ParentFolderID
	 * @param long ParentFolderID
	 * @return long
	 */
	public function setParentFolderID($_ParentFolderID)
	{
		return ($this->ParentFolderID = $_ParentFolderID);
	}
	/**
	 * Get ParentFolderID
	 * @return long
	 */
	public function getParentFolderID()
	{
		return $this->ParentFolderID;
	}
	/**
	 * Set FolderLevel
	 * @param long FolderLevel
	 * @return long
	 */
	public function setFolderLevel($_FolderLevel)
	{
		return ($this->FolderLevel = $_FolderLevel);
	}
	/**
	 * Get FolderLevel
	 * @return long
	 */
	public function getFolderLevel()
	{
		return $this->FolderLevel;
	}
	/**
	 * Set FolderName
	 * @param string FolderName
	 * @return string
	 */
	public function setFolderName($_FolderName)
	{
		return ($this->FolderName = $_FolderName);
	}
	/**
	 * Get FolderName
	 * @return string
	 */
	public function getFolderName()
	{
		return $this->FolderName;
	}
	/**
	 * Set FolderComment
	 * @param string FolderComment
	 * @return string
	 */
	public function setFolderComment($_FolderComment)
	{
		return ($this->FolderComment = $_FolderComment);
	}
	/**
	 * Get FolderComment
	 * @return string
	 */
	public function getFolderComment()
	{
		return $this->FolderComment;
	}
	/**
	 * Set ChildFolder
	 * @param SellingManagerFolderDetailsType ChildFolder
	 * @return SellingManagerFolderDetailsType
	 */
	public function setChildFolder($_ChildFolder)
	{
		return ($this->ChildFolder = $_ChildFolder);
	}
	/**
	 * Get ChildFolder
	 * @return EbayTradingTypeSellingManagerFolderDetailsType
	 */
	public function getChildFolder()
	{
		return $this->ChildFolder;
	}
	/**
	 * Set CreationTime
	 * @param dateTime CreationTime
	 * @return dateTime
	 */
	public function setCreationTime($_CreationTime)
	{
		return ($this->CreationTime = $_CreationTime);
	}
	/**
	 * Get CreationTime
	 * @return dateTime
	 */
	public function getCreationTime()
	{
		return $this->CreationTime;
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