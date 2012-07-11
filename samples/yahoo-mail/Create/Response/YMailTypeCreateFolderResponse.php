<?php
/**
 * Class file for YMailTypeCreateFolderResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeCreateFolderResponse
 * @date 02/07/2012
 */
class YMailTypeCreateFolderResponse extends YMailWsdlClass
{
	/**
	 * The folderInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var YMailTypeFid
	 */
	public $folderInfo;
	/**
	 * Constructor
	 * @param YMailTypeFid folderInfo
	 * @return YMailTypeCreateFolderResponse
	 */
	public function __construct($_folderInfo)
	{
		parent::__construct(array('folderInfo'=>$_folderInfo));
	}
	/**
	 * Set folderInfo
	 * @param Fid folderInfo
	 * @return Fid
	 */
	public function setFolderInfo($_folderInfo)
	{
		return ($this->folderInfo = $_folderInfo);
	}
	/**
	 * Get folderInfo
	 * @return YMailTypeFid
	 */
	public function getFolderInfo()
	{
		return $this->folderInfo;
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