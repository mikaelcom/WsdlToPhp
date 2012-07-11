<?php
/**
 * Class file for SPListsTypeAddDiscussionBoardItem
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeAddDiscussionBoardItem
 * @date 07/07/2012
 */
class SPListsTypeAddDiscussionBoardItem extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The message
	 * @var base64Binary
	 */
	public $message;
	/**
	 * Constructor
	 * @param string listName
	 * @param base64Binary message
	 * @return SPListsTypeAddDiscussionBoardItem
	 */
	public function __construct($_listName = null,$_message = null)
	{
		parent::__construct(array('listName'=>$_listName,'message'=>$_message));
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
	 * Set message
	 * @param base64Binary message
	 * @return base64Binary
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return base64Binary
	 */
	public function getMessage()
	{
		return $this->message;
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