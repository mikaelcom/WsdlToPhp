<?php
/**
 * Class file for SPViewsTypeUpdateView
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeUpdateView
 * @date 06/07/2012
 */
class SPViewsTypeUpdateView extends SPViewsWsdlClass
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
	 * The viewProperties
	 * @var SPViewsTypeViewProperties
	 */
	public $viewProperties;
	/**
	 * The query
	 * @var SPViewsTypeQuery
	 */
	public $query;
	/**
	 * The viewFields
	 * @var SPViewsTypeViewFields
	 */
	public $viewFields;
	/**
	 * The aggregations
	 * @var SPViewsTypeAggregations
	 */
	public $aggregations;
	/**
	 * The formats
	 * @var SPViewsTypeFormats
	 */
	public $formats;
	/**
	 * The rowLimit
	 * @var SPViewsTypeRowLimit
	 */
	public $rowLimit;
	/**
	 * Constructor
	 * @param string listName
	 * @param string viewName
	 * @param SPViewsTypeViewProperties viewProperties
	 * @param SPViewsTypeQuery query
	 * @param SPViewsTypeViewFields viewFields
	 * @param SPViewsTypeAggregations aggregations
	 * @param SPViewsTypeFormats formats
	 * @param SPViewsTypeRowLimit rowLimit
	 * @return SPViewsTypeUpdateView
	 */
	public function __construct($_listName = null,$_viewName = null,$_viewProperties = null,$_query = null,$_viewFields = null,$_aggregations = null,$_formats = null,$_rowLimit = null)
	{
		parent::__construct(array('listName'=>$_listName,'viewName'=>$_viewName,'viewProperties'=>$_viewProperties,'query'=>$_query,'viewFields'=>$_viewFields,'aggregations'=>$_aggregations,'formats'=>$_formats,'rowLimit'=>$_rowLimit));
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
	 * Set viewProperties
	 * @param viewProperties viewProperties
	 * @return viewProperties
	 */
	public function setViewProperties($_viewProperties)
	{
		return ($this->viewProperties = $_viewProperties);
	}
	/**
	 * Get viewProperties
	 * @return SPViewsTypeviewProperties
	 */
	public function getViewProperties()
	{
		return $this->viewProperties;
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
	 * Set aggregations
	 * @param aggregations aggregations
	 * @return aggregations
	 */
	public function setAggregations($_aggregations)
	{
		return ($this->aggregations = $_aggregations);
	}
	/**
	 * Get aggregations
	 * @return SPViewsTypeaggregations
	 */
	public function getAggregations()
	{
		return $this->aggregations;
	}
	/**
	 * Set formats
	 * @param formats formats
	 * @return formats
	 */
	public function setFormats($_formats)
	{
		return ($this->formats = $_formats);
	}
	/**
	 * Get formats
	 * @return SPViewsTypeformats
	 */
	public function getFormats()
	{
		return $this->formats;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>