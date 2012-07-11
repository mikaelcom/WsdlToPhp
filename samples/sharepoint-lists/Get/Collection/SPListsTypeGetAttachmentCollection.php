<?php
/**
 * Class file for SPListsTypeGetAttachmentCollection
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetAttachmentCollection
 * @date 07/07/2012
 */
class SPListsTypeGetAttachmentCollection extends SPListsWsdlClass
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
	 * Constructor
	 * @param string listName
	 * @param string listItemID
	 * @return SPListsTypeGetAttachmentCollection
	 */
	public function __construct($_listName = null,$_listItemID = null)
	{
		parent::__construct(array('listName'=>$_listName,'listItemID'=>$_listItemID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>