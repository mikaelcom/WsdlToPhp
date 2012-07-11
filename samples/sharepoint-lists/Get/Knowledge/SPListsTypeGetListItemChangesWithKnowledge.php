<?php
/**
 * Class file for SPListsTypeGetListItemChangesWithKnowledge
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListItemChangesWithKnowledge
 * @date 07/07/2012
 */
class SPListsTypeGetListItemChangesWithKnowledge extends SPListsWsdlClass
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
	 * The syncScope
	 * @var string
	 */
	public $syncScope;
	/**
	 * The knowledge
	 * @var SPListsTypeKnowledge
	 */
	public $knowledge;
	/**
	 * The contains
	 * @var SPListsTypeContains
	 */
	public $contains;
	/**
	 * Constructor
	 * @param string listName
	 * @param string viewName
	 * @param SPListsTypeQuery query
	 * @param SPListsTypeViewFields viewFields
	 * @param string rowLimit
	 * @param SPListsTypeQueryOptions queryOptions
	 * @param string syncScope
	 * @param SPListsTypeKnowledge knowledge
	 * @param SPListsTypeContains contains
	 * @return SPListsTypeGetListItemChangesWithKnowledge
	 */
	public function __construct($_listName = null,$_viewName = null,$_query = null,$_viewFields = null,$_rowLimit = null,$_queryOptions = null,$_syncScope = null,$_knowledge = null,$_contains = null)
	{
		parent::__construct(array('listName'=>$_listName,'viewName'=>$_viewName,'query'=>$_query,'viewFields'=>$_viewFields,'rowLimit'=>$_rowLimit,'queryOptions'=>$_queryOptions,'syncScope'=>$_syncScope,'knowledge'=>$_knowledge,'contains'=>$_contains));
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
	 * Set syncScope
	 * @param string syncScope
	 * @return string
	 */
	public function setSyncScope($_syncScope)
	{
		return ($this->syncScope = $_syncScope);
	}
	/**
	 * Get syncScope
	 * @return string
	 */
	public function getSyncScope()
	{
		return $this->syncScope;
	}
	/**
	 * Set knowledge
	 * @param knowledge knowledge
	 * @return knowledge
	 */
	public function setKnowledge($_knowledge)
	{
		return ($this->knowledge = $_knowledge);
	}
	/**
	 * Get knowledge
	 * @return SPListsTypeknowledge
	 */
	public function getKnowledge()
	{
		return $this->knowledge;
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