<?php
/**
 * Class file for YMailTypeListFoldersResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeListFoldersResponse
 * @date 02/07/2012
 */
class YMailTypeListFoldersResponse extends YMailWsdlClass
{
	/**
	 * The numberOfFolders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $numberOfFolders;
	/**
	 * The folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeFolderData
	 */
	public $folder;
	/**
	 * Constructor
	 * @param unsignedInt numberOfFolders
	 * @param YMailTypeFolderData folder
	 * @return YMailTypeListFoldersResponse
	 */
	public function __construct($_numberOfFolders = null,$_folder = null)
	{
		parent::__construct(array('numberOfFolders'=>$_numberOfFolders,'folder'=>$_folder));
	}
	/**
	 * Set numberOfFolders
	 * @param unsignedInt numberOfFolders
	 * @return unsignedInt
	 */
	public function setNumberOfFolders($_numberOfFolders)
	{
		return ($this->numberOfFolders = $_numberOfFolders);
	}
	/**
	 * Get numberOfFolders
	 * @return unsignedInt
	 */
	public function getNumberOfFolders()
	{
		return $this->numberOfFolders;
	}
	/**
	 * Set folder
	 * @param FolderData folder
	 * @return FolderData
	 */
	public function setFolder($_folder)
	{
		return ($this->folder = $_folder);
	}
	/**
	 * Get folder
	 * @return YMailTypeFolderData
	 */
	public function getFolder()
	{
		return $this->folder;
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