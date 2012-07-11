<?php
/**
 * Class file for SPListDataRetrievalTypeDSQuery
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeDSQuery
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeDSQuery extends SPListDataRetrievalWsdlClass
{
	/**
	 * The Query
	 * @var SPListDataRetrievalTypeDspQuery
	 */
	public $Query;
	/**
	 * The select
	 * @var string
	 */
	public $select;
	/**
	 * The resultContent
	 * @var ResultContentType
	 */
	public $resultContent;
	/**
	 * The columnMapping
	 * @var ColumnMappingType
	 */
	public $columnMapping;
	/**
	 * The resultNamespace
	 * @var string
	 */
	public $resultNamespace;
	/**
	 * The resultPrefix
	 * @var string
	 */
	public $resultPrefix;
	/**
	 * The resultRoot
	 * @var string
	 */
	public $resultRoot;
	/**
	 * The resultRow
	 * @var string
	 */
	public $resultRow;
	/**
	 * The startPosition
	 * @var string
	 */
	public $startPosition;
	/**
	 * The comparisonLocale
	 * @var string
	 */
	public $comparisonLocale;
	/**
	 * Constructor
	 * @param SPListDataRetrievalTypeDspQuery Query
	 * @param string select
	 * @param ResultContentType resultContent
	 * @param ColumnMappingType columnMapping
	 * @param string resultNamespace
	 * @param string resultPrefix
	 * @param string resultRoot
	 * @param string resultRow
	 * @param string startPosition
	 * @param string comparisonLocale
	 * @return SPListDataRetrievalTypeDSQuery
	 */
	public function __construct($_Query = null,$_select = null,$_resultContent = null,$_columnMapping = null,$_resultNamespace = null,$_resultPrefix = null,$_resultRoot = null,$_resultRow = null,$_startPosition = null,$_comparisonLocale = null)
	{
		parent::__construct(array('Query'=>$_Query,'select'=>$_select,'resultContent'=>$_resultContent,'columnMapping'=>$_columnMapping,'resultNamespace'=>$_resultNamespace,'resultPrefix'=>$_resultPrefix,'resultRoot'=>$_resultRoot,'resultRow'=>$_resultRow,'startPosition'=>$_startPosition,'comparisonLocale'=>$_comparisonLocale));
	}
	/**
	 * Set Query
	 * @param DspQuery Query
	 * @return DspQuery
	 */
	public function setQuery($_Query)
	{
		return ($this->Query = $_Query);
	}
	/**
	 * Get Query
	 * @return SPListDataRetrievalTypeDspQuery
	 */
	public function getQuery()
	{
		return $this->Query;
	}
	/**
	 * Set select
	 * @param string select
	 * @return string
	 */
	public function setSelect($_select)
	{
		return ($this->select = $_select);
	}
	/**
	 * Get select
	 * @return string
	 */
	public function getSelect()
	{
		return $this->select;
	}
	/**
	 * Set resultContent
	 * @param ResultContentType resultContent
	 * @return ResultContentType
	 */
	public function setResultContent($_resultContent)
	{
		return ($this->resultContent = $_resultContent);
	}
	/**
	 * Get resultContent
	 * @return ResultContentType
	 */
	public function getResultContent()
	{
		return $this->resultContent;
	}
	/**
	 * Set columnMapping
	 * @param ColumnMappingType columnMapping
	 * @return ColumnMappingType
	 */
	public function setColumnMapping($_columnMapping)
	{
		return ($this->columnMapping = $_columnMapping);
	}
	/**
	 * Get columnMapping
	 * @return ColumnMappingType
	 */
	public function getColumnMapping()
	{
		return $this->columnMapping;
	}
	/**
	 * Set resultNamespace
	 * @param string resultNamespace
	 * @return string
	 */
	public function setResultNamespace($_resultNamespace)
	{
		return ($this->resultNamespace = $_resultNamespace);
	}
	/**
	 * Get resultNamespace
	 * @return string
	 */
	public function getResultNamespace()
	{
		return $this->resultNamespace;
	}
	/**
	 * Set resultPrefix
	 * @param string resultPrefix
	 * @return string
	 */
	public function setResultPrefix($_resultPrefix)
	{
		return ($this->resultPrefix = $_resultPrefix);
	}
	/**
	 * Get resultPrefix
	 * @return string
	 */
	public function getResultPrefix()
	{
		return $this->resultPrefix;
	}
	/**
	 * Set resultRoot
	 * @param string resultRoot
	 * @return string
	 */
	public function setResultRoot($_resultRoot)
	{
		return ($this->resultRoot = $_resultRoot);
	}
	/**
	 * Get resultRoot
	 * @return string
	 */
	public function getResultRoot()
	{
		return $this->resultRoot;
	}
	/**
	 * Set resultRow
	 * @param string resultRow
	 * @return string
	 */
	public function setResultRow($_resultRow)
	{
		return ($this->resultRow = $_resultRow);
	}
	/**
	 * Get resultRow
	 * @return string
	 */
	public function getResultRow()
	{
		return $this->resultRow;
	}
	/**
	 * Set startPosition
	 * @param string startPosition
	 * @return string
	 */
	public function setStartPosition($_startPosition)
	{
		return ($this->startPosition = $_startPosition);
	}
	/**
	 * Get startPosition
	 * @return string
	 */
	public function getStartPosition()
	{
		return $this->startPosition;
	}
	/**
	 * Set comparisonLocale
	 * @param string comparisonLocale
	 * @return string
	 */
	public function setComparisonLocale($_comparisonLocale)
	{
		return ($this->comparisonLocale = $_comparisonLocale);
	}
	/**
	 * Get comparisonLocale
	 * @return string
	 */
	public function getComparisonLocale()
	{
		return $this->comparisonLocale;
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