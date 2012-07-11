<?php
/**
 * Class file for SPViewsTypeUpdateViewHtml2
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeUpdateViewHtml2
 * @date 06/07/2012
 */
class SPViewsTypeUpdateViewHtml2 extends SPViewsWsdlClass
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
	 * The toolbar
	 * @var SPViewsTypeToolbar
	 */
	public $toolbar;
	/**
	 * The viewHeader
	 * @var SPViewsTypeViewHeader
	 */
	public $viewHeader;
	/**
	 * The viewBody
	 * @var SPViewsTypeViewBody
	 */
	public $viewBody;
	/**
	 * The viewFooter
	 * @var SPViewsTypeViewFooter
	 */
	public $viewFooter;
	/**
	 * The viewEmpty
	 * @var SPViewsTypeViewEmpty
	 */
	public $viewEmpty;
	/**
	 * The rowLimitExceeded
	 * @var SPViewsTypeRowLimitExceeded
	 */
	public $rowLimitExceeded;
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
	 * The openApplicationExtension
	 * @var string
	 */
	public $openApplicationExtension;
	/**
	 * Constructor
	 * @param string listName
	 * @param string viewName
	 * @param SPViewsTypeViewProperties viewProperties
	 * @param SPViewsTypeToolbar toolbar
	 * @param SPViewsTypeViewHeader viewHeader
	 * @param SPViewsTypeViewBody viewBody
	 * @param SPViewsTypeViewFooter viewFooter
	 * @param SPViewsTypeViewEmpty viewEmpty
	 * @param SPViewsTypeRowLimitExceeded rowLimitExceeded
	 * @param SPViewsTypeQuery query
	 * @param SPViewsTypeViewFields viewFields
	 * @param SPViewsTypeAggregations aggregations
	 * @param SPViewsTypeFormats formats
	 * @param SPViewsTypeRowLimit rowLimit
	 * @param string openApplicationExtension
	 * @return SPViewsTypeUpdateViewHtml2
	 */
	public function __construct($_listName = null,$_viewName = null,$_viewProperties = null,$_toolbar = null,$_viewHeader = null,$_viewBody = null,$_viewFooter = null,$_viewEmpty = null,$_rowLimitExceeded = null,$_query = null,$_viewFields = null,$_aggregations = null,$_formats = null,$_rowLimit = null,$_openApplicationExtension = null)
	{
		parent::__construct(array('listName'=>$_listName,'viewName'=>$_viewName,'viewProperties'=>$_viewProperties,'toolbar'=>$_toolbar,'viewHeader'=>$_viewHeader,'viewBody'=>$_viewBody,'viewFooter'=>$_viewFooter,'viewEmpty'=>$_viewEmpty,'rowLimitExceeded'=>$_rowLimitExceeded,'query'=>$_query,'viewFields'=>$_viewFields,'aggregations'=>$_aggregations,'formats'=>$_formats,'rowLimit'=>$_rowLimit,'openApplicationExtension'=>$_openApplicationExtension));
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
	 * Set toolbar
	 * @param toolbar toolbar
	 * @return toolbar
	 */
	public function setToolbar($_toolbar)
	{
		return ($this->toolbar = $_toolbar);
	}
	/**
	 * Get toolbar
	 * @return SPViewsTypetoolbar
	 */
	public function getToolbar()
	{
		return $this->toolbar;
	}
	/**
	 * Set viewHeader
	 * @param viewHeader viewHeader
	 * @return viewHeader
	 */
	public function setViewHeader($_viewHeader)
	{
		return ($this->viewHeader = $_viewHeader);
	}
	/**
	 * Get viewHeader
	 * @return SPViewsTypeviewHeader
	 */
	public function getViewHeader()
	{
		return $this->viewHeader;
	}
	/**
	 * Set viewBody
	 * @param viewBody viewBody
	 * @return viewBody
	 */
	public function setViewBody($_viewBody)
	{
		return ($this->viewBody = $_viewBody);
	}
	/**
	 * Get viewBody
	 * @return SPViewsTypeviewBody
	 */
	public function getViewBody()
	{
		return $this->viewBody;
	}
	/**
	 * Set viewFooter
	 * @param viewFooter viewFooter
	 * @return viewFooter
	 */
	public function setViewFooter($_viewFooter)
	{
		return ($this->viewFooter = $_viewFooter);
	}
	/**
	 * Get viewFooter
	 * @return SPViewsTypeviewFooter
	 */
	public function getViewFooter()
	{
		return $this->viewFooter;
	}
	/**
	 * Set viewEmpty
	 * @param viewEmpty viewEmpty
	 * @return viewEmpty
	 */
	public function setViewEmpty($_viewEmpty)
	{
		return ($this->viewEmpty = $_viewEmpty);
	}
	/**
	 * Get viewEmpty
	 * @return SPViewsTypeviewEmpty
	 */
	public function getViewEmpty()
	{
		return $this->viewEmpty;
	}
	/**
	 * Set rowLimitExceeded
	 * @param rowLimitExceeded rowLimitExceeded
	 * @return rowLimitExceeded
	 */
	public function setRowLimitExceeded($_rowLimitExceeded)
	{
		return ($this->rowLimitExceeded = $_rowLimitExceeded);
	}
	/**
	 * Get rowLimitExceeded
	 * @return SPViewsTyperowLimitExceeded
	 */
	public function getRowLimitExceeded()
	{
		return $this->rowLimitExceeded;
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
	 * Set openApplicationExtension
	 * @param string openApplicationExtension
	 * @return string
	 */
	public function setOpenApplicationExtension($_openApplicationExtension)
	{
		return ($this->openApplicationExtension = $_openApplicationExtension);
	}
	/**
	 * Get openApplicationExtension
	 * @return string
	 */
	public function getOpenApplicationExtension()
	{
		return $this->openApplicationExtension;
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