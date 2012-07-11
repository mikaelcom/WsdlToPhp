<?php
/**
 * Class file for SPListsTypeGetListItemChanges
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListItemChanges
 * @date 07/07/2012
 */
class SPListsTypeGetListItemChanges extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The viewFields
	 * @var SPListsTypeViewFields
	 */
	public $viewFields;
	/**
	 * The since
	 * @var string
	 */
	public $since;
	/**
	 * The contains
	 * @var SPListsTypeContains
	 */
	public $contains;
	/**
	 * Constructor
	 * @param string listName
	 * @param SPListsTypeViewFields viewFields
	 * @param string since
	 * @param SPListsTypeContains contains
	 * @return SPListsTypeGetListItemChanges
	 */
	public function __construct($_listName = null,$_viewFields = null,$_since = null,$_contains = null)
	{
		parent::__construct(array('listName'=>$_listName,'viewFields'=>$_viewFields,'since'=>$_since,'contains'=>$_contains));
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
	 * Set viewFields
	 * @param viewFields viewFields
	 * @return viewFields
	 */
	public function setViewFields($_viewFields)
	{
		return ($this->viewFields = $_viewFields);
	}
	/**
	 * Get viewFields
	 * @return SPListsTypeviewFields
	 */
	public function getViewFields()
	{
		return $this->viewFields;
	}
	/**
	 * Set since
	 * @param string since
	 * @return string
	 */
	public function setSince($_since)
	{
		return ($this->since = $_since);
	}
	/**
	 * Get since
	 * @return string
	 */
	public function getSince()
	{
		return $this->since;
	}
	/**
	 * Set contains
	 * @param contains contains
	 * @return contains
	 */
	public function setContains($_contains)
	{
		return ($this->contains = $_contains);
	}
	/**
	 * Get contains
	 * @return SPListsTypecontains
	 */
	public function getContains()
	{
		return $this->contains;
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