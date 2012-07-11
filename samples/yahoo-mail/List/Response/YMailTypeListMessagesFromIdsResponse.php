<?php
/**
 * Class file for YMailTypeListMessagesFromIdsResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeListMessagesFromIdsResponse
 * @date 02/07/2012
 */
class YMailTypeListMessagesFromIdsResponse extends YMailWsdlClass
{
	/**
	 * The folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeFolderData
	 */
	public $folder;
	/**
	 * The messageInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeMessageInfo
	 */
	public $messageInfo;
	/**
	 * Constructor
	 * @param YMailTypeFolderData folder
	 * @param YMailTypeMessageInfo messageInfo
	 * @return YMailTypeListMessagesFromIdsResponse
	 */
	public function __construct($_folder = null,$_messageInfo = null)
	{
		parent::__construct(array('folder'=>$_folder,'messageInfo'=>$_messageInfo));
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
	 * Set messageInfo
	 * @param MessageInfo messageInfo
	 * @return MessageInfo
	 */
	public function setMessageInfo($_messageInfo)
	{
		return ($this->messageInfo = $_messageInfo);
	}
	/**
	 * Get messageInfo
	 * @return YMailTypeMessageInfo
	 */
	public function getMessageInfo()
	{
		return $this->messageInfo;
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