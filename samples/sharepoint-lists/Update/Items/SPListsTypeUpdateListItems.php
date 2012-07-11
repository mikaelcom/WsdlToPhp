<?php
/**
 * Class file for SPListsTypeUpdateListItems
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateListItems
 * @date 07/07/2012
 */
class SPListsTypeUpdateListItems extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The updates
	 * @var SPListsTypeUpdates
	 */
	public $updates;
	/**
	 * Constructor
	 * @param string listName
	 * @param SPListsTypeUpdates updates
	 * @return SPListsTypeUpdateListItems
	 */
	public function __construct($_listName = null,$_updates = null)
	{
		parent::__construct(array('listName'=>$_listName,'updates'=>$_updates));
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
	 * Set updates
	 * @param updates updates
	 * @return updates
	 */
	public function setUpdates($_updates)
	{
		return ($this->updates = $_updates);
	}
	/**
	 * Get updates
	 * @return SPListsTypeupdates
	 */
	public function getUpdates()
	{
		return $this->updates;
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