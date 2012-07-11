<?php
/**
 * Class file for SPListsTypeGetListItems
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListItems
 * @date 07/07/2012
 */
class SPListsTypeGetListItems extends SPListsWsdlClass
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
	 * The query
	 * @var SPListsTypeQuery
	 */
	public $query;
	/**
	 * The viewFields
	 * @var SPListsTypeViewFields
	 */
	public $viewFields;
	/**
	 * The rowLimit
	 * @var string
	 */
	public $rowLimit;
	/**
	 * The queryOptions
	 * @var SPListsTypeQueryOptions
	 */
	public $queryOptions;
	/**
	 * The webID
	 * @var string
	 */
	public $webID;
	/**
	 * Constructor
	 * @param string listName
	 * @param string viewName
	 * @param SPListsTypeQuery query
	 * @param SPListsTypeViewFields viewFields
	 * @param string rowLimit
	 * @param SPListsTypeQueryOptions queryOptions
	 * @param string webID
	 * @return SPListsTypeGetListItems
	 */
	public function __construct($_listName = null,$_viewName = null,$_query = null,$_viewFields = null,$_rowLimit = null,$_queryOptions = null,$_webID = null)
	{
		parent::__construct(array('listName'=>$_listName,'viewName'=>$_viewName,'query'=>$_query,'viewFields'=>$_viewFields,'rowLimit'=>$_rowLimit,'queryOptions'=>$_queryOptions,'webID'=>$_webID));
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
	 * Set query
	 * @param query query
	 * @return query
	 */
	public function setQuery($_query)
	{
		return ($this->query = $_query);
	}
	/**
	 * Get query
	 * @return SPListsTypequery
	 */
	public function getQuery()
	{
		return $this->query;
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
	 * Set rowLimit
	 * @param string rowLimit
	 * @return string
	 */
	public function setRowLimit($_rowLimit)
	{
		return ($this->rowLimit = $_rowLimit);
	}
	/**
	 * Get rowLimit
	 * @return string
	 */
	public function getRowLimit()
	{
		return $this->rowLimit;
	}
	/**
	 * Set queryOptions
	 * @param queryOptions queryOptions
	 * @return queryOptions
	 */
	public function setQueryOptions($_queryOptions)
	{
		return ($this->queryOptions = $_queryOptions);
	}
	/**
	 * Get queryOptions
	 * @return SPListsTypequeryOptions
	 */
	public function getQueryOptions()
	{
		return $this->queryOptions;
	}
	/**
	 * Set webID
	 * @param string webID
	 * @return string
	 */
	public function setWebID($_webID)
	{
		return ($this->webID = $_webID);
	}
	/**
	 * Get webID
	 * @return string
	 */
	public function getWebID()
	{
		return $this->webID;
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