<?php
/**
 * Class file for SPListsTypeGetList
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetList
 * @date 07/07/2012
 */
class SPListsTypeGetList extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * Constructor
	 * @param string listName
	 * @return SPListsTypeGetList
	 */
	public function __construct($_listName = null)
	{
		parent::__construct(array('listName'=>$_listName));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>