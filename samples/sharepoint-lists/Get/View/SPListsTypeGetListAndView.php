<?php
/**
 * Class file for SPListsTypeGetListAndView
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListAndView
 * @date 07/07/2012
 */
class SPListsTypeGetListAndView extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The viewName
	 * @var string
	 */
	public $viewName;
	/**
	 * Constructor
	 * @param string listName
	 * @param string viewName
	 * @return SPListsTypeGetListAndView
	 */
	public function __construct($_listName = null,$_viewName = null)
	{
		parent::__construct(array('listName'=>$_listName,'viewName'=>$_viewName));
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
	 * Set viewName
	 * @param string viewName
	 * @return string
	 */
	public function setViewName($_viewName)
	{
		return ($this->viewName = $_viewName);
	}
	/**
	 * Get viewName
	 * @return string
	 */
	public function getViewName()
	{
		return $this->viewName;
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