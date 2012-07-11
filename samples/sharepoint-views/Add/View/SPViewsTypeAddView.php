<?php
/**
 * Class file for SPViewsTypeAddView
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeAddView
 * @date 06/07/2012
 */
class SPViewsTypeAddView extends SPViewsWsdlClass
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
	 * The viewFields
	 * @var SPViewsTypeViewFields
	 */
	public $viewFields;
	/**
	 * The query
	 * @var SPViewsTypeQuery
	 */
	public $query;
	/**
	 * The rowLimit
	 * @var SPViewsTypeRowLimit
	 */
	public $rowLimit;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The makeViewDefault
	 * @var boolean
	 */
	public $makeViewDefault;
	/**
	 * Constructor
	 * @param string listName
	 * @param string viewName
	 * @param SPViewsTypeViewFields viewFields
	 * @param SPViewsTypeQuery query
	 * @param SPViewsTypeRowLimit rowLimit
	 * @param string type
	 * @param boolean makeViewDefault
	 * @return SPViewsTypeAddView
	 */
	public function __construct($_listName = null,$_viewName = null,$_viewFields = null,$_query = null,$_rowLimit = null,$_type = null,$_makeViewDefault = null)
	{
		parent::__construct(array('listName'=>$_listName,'viewName'=>$_viewName,'viewFields'=>$_viewFields,'query'=>$_query,'rowLimit'=>$_rowLimit,'type'=>$_type,'makeViewDefault'=>$_makeViewDefault));
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
	 * @return SPViewsTypeviewFields
	 */
	public function getViewFields()
	{
		return $this->viewFields;
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
	 * @return SPViewsTypequery
	 */
	public function getQuery()
	{
		return $this->query;
	}
	/**
	 * Set rowLimit
	 * @param rowLimit rowLimit
	 * @return rowLimit
	 */
	public function setRowLimit($_rowLimit)
	{
		return ($this->rowLimit = $_rowLimit);
	}
	/**
	 * Get rowLimit
	 * @return SPViewsTyperowLimit
	 */
	public function getRowLimit()
	{
		return $this->rowLimit;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set makeViewDefault
	 * @param boolean makeViewDefault
	 * @return boolean
	 */
	public function setMakeViewDefault($_makeViewDefault)
	{
		return ($this->makeViewDefault = $_makeViewDefault);
	}
	/**
	 * Get makeViewDefault
	 * @return boolean
	 */
	public function getMakeViewDefault()
	{
		return $this->makeViewDefault;
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