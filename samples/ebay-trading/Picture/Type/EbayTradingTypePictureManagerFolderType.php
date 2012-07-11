<?php
/**
 * Class file for EbayTradingTypePictureManagerFolderType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureManagerFolderType
 * Documentation : A folder in the authenticated user's album. By default, all folders and their pictures are returned. If a folder ID is specified, the folders' metadata and contents are returned.
 * @date 04/07/2012
 */
class EbayTradingTypePictureManagerFolderType extends EbayTradingWsdlClass
{
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the folder.
	 * @var int
	 */
	public $FolderID;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the folder.
	 * @var string
	 */
	public $Name;
	/**
	 * The Picture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A picture within the folder, identified by a name, date, URL, and other metadata.
	 * @var EbayTradingTypePictureManagerPictureType
	 */
	public $Picture;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int FolderID
	 * @param string Name
	 * @param EbayTradingTypePictureManagerPictureType Picture
	 * @param DOMDocument any
	 * @return EbayTradingTypePictureManagerFolderType
	 */
	public function __construct($_FolderID = null,$_Name = null,$_Picture = null,$_any = null)
	{
		parent::__construct(array('FolderID'=>$_FolderID,'Name'=>$_Name,'Picture'=>$_Picture,'any'=>$_any));
	}
	/**
	 * Set FolderID
	 * @param int FolderID
	 * @return int
	 */
	public function setFolderID($_FolderID)
	{
		return ($this->FolderID = $_FolderID);
	}
	/**
	 * Get FolderID
	 * @return int
	 */
	public function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Picture
	 * @param PictureManagerPictureType Picture
	 * @return PictureManagerPictureType
	 */
	public function setPicture($_Picture)
	{
		return ($this->Picture = $_Picture);
	}
	/**
	 * Get Picture
	 * @return EbayTradingTypePictureManagerPictureType
	 */
	public function getPicture()
	{
		return $this->Picture;
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