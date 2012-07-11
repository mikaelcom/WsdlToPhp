<?php
/**
 * Class file for SPListsTypeAddAttachment
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeAddAttachment
 * @date 07/07/2012
 */
class SPListsTypeAddAttachment extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The listItemID
	 * @var string
	 */
	public $listItemID;
	/**
	 * The fileName
	 * @var string
	 */
	public $fileName;
	/**
	 * The attachment
	 * @var base64Binary
	 */
	public $attachment;
	/**
	 * Constructor
	 * @param string listName
	 * @param string listItemID
	 * @param string fileName
	 * @param base64Binary attachment
	 * @return SPListsTypeAddAttachment
	 */
	public function __construct($_listName = null,$_listItemID = null,$_fileName = null,$_attachment = null)
	{
		parent::__construct(array('listName'=>$_listName,'listItemID'=>$_listItemID,'fileName'=>$_fileName,'attachment'=>$_attachment));
	}
	/**
	 * Set listName
	 * @param string listName
	 * @return string
	 */
	public function setListName($_listName)
	{
		return ($this->listName = $_listName);
	}
	/**
	 * Get listName
	 * @return string
	 */
	public function getListName()
	{
		return $this->listName;
	}
	/**
	 * Set listItemID
	 * @param string listItemID
	 * @return string
	 */
	public function setListItemID($_listItemID)
	{
		return ($this->listItemID = $_listItemID);
	}
	/**
	 * Get listItemID
	 * @return string
	 */
	public function getListItemID()
	{
		return $this->listItemID;
	}
	/**
	 * Set fileName
	 * @param string fileName
	 * @return string
	 */
	public function setFileName($_fileName)
	{
		return ($this->fileName = $_fileName);
	}
	/**
	 * Get fileName
	 * @return string
	 */
	public function getFileName()
	{
		return $this->fileName;
	}
	/**
	 * Set attachment
	 * @param base64Binary attachment
	 * @return base64Binary
	 */
	public function setAttachment($_attachment)
	{
		return ($this->attachment = $_attachment);
	}
	/**
	 * Get attachment
	 * @return base64Binary
	 */
	public function getAttachment()
	{
		return $this->attachment;
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