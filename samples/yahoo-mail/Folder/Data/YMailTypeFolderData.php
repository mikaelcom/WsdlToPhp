<?php
/**
 * Class file for YMailTypeFolderData
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFolderData
 * @date 02/07/2012
 */
class YMailTypeFolderData extends YMailWsdlClass
{
	/**
	 * The folderInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeFid
	 */
	public $folderInfo;
	/**
	 * The unread
	 * Meta informations :
	 * 	- use : optional
	 * 	- default : 0
	 * @var unsignedLong
	 */
	public $unread;
	/**
	 * The total
	 * Meta informations :
	 * 	- default : 0
	 * @var unsignedLong
	 */
	public $total;
	/**
	 * The size
	 * Meta informations :
	 * 	- default : 0
	 * @var unsignedLong
	 */
	public $size;
	/**
	 * The isSystem
	 * Meta informations :
	 * 	- default : false
	 * @var boolean
	 */
	public $isSystem;
	/**
	 * Constructor
	 * @param YMailTypeFid folderInfo
	 * @param unsignedLong unread
	 * @param unsignedLong total
	 * @param unsignedLong size
	 * @param boolean isSystem
	 * @return YMailTypeFolderData
	 */
	public function __construct($_folderInfo,$_unread = 0,$_total = 0,$_size = 0,$_isSystem = false)
	{
		parent::__construct(array('folderInfo'=>$_folderInfo,'unread'=>$_unread,'total'=>$_total,'size'=>$_size,'isSystem'=>$_isSystem));
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
	 * Set unread
	 * @param unsignedLong unread
	 * @return unsignedLong
	 */
	public function setUnread($_unread)
	{
		return ($this->unread = $_unread);
	}
	/**
	 * Get unread
	 * @return unsignedLong
	 */
	public function getUnread()
	{
		return $this->unread;
	}
	/**
	 * Set total
	 * @param unsignedLong total
	 * @return unsignedLong
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get total
	 * @return unsignedLong
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set size
	 * @param unsignedLong size
	 * @return unsignedLong
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return unsignedLong
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set isSystem
	 * @param boolean isSystem
	 * @return boolean
	 */
	public function setIsSystem($_isSystem)
	{
		return ($this->isSystem = $_isSystem);
	}
	/**
	 * Get isSystem
	 * @return boolean
	 */
	public function getIsSystem()
	{
		return $this->isSystem;
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