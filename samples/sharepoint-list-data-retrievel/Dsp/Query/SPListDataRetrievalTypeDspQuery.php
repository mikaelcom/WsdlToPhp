<?php
/**
 * Class file for SPListDataRetrievalTypeDspQuery
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeDspQuery
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeDspQuery extends SPListDataRetrievalWsdlClass
{
	/**
	 * The ServerParameterInfo
	 * @var SPListDataRetrievalTypeServerParameterInfo
	 */
	public $ServerParameterInfo;
	/**
	 * The Fields
	 * @var SPListDataRetrievalTypeFields
	 */
	public $Fields;
	/**
	 * The ServerParameters
	 * @var SPListDataRetrievalTypeArrayOfServerParameter
	 */
	public $ServerParameters;
	/**
	 * The Where
	 * @var SPListDataRetrievalTypeWhere
	 */
	public $Where;
	/**
	 * The OrderBy
	 * @var SPListDataRetrievalTypeArrayOfOrderField
	 */
	public $OrderBy;
	/**
	 * The RowLimit
	 * @var long
	 */
	public $RowLimit;
	/**
	 * Constructor
	 * @param SPListDataRetrievalTypeServerParameterInfo ServerParameterInfo
	 * @param SPListDataRetrievalTypeFields Fields
	 * @param SPListDataRetrievalTypeArrayOfServerParameter ServerParameters
	 * @param SPListDataRetrievalTypeWhere Where
	 * @param SPListDataRetrievalTypeArrayOfOrderField OrderBy
	 * @param long RowLimit
	 * @return SPListDataRetrievalTypeDspQuery
	 */
	public function __construct($_ServerParameterInfo = null,$_Fields = null,$_ServerParameters = null,$_Where = null,$_OrderBy = null,$_RowLimit = null)
	{
		parent::__construct(array('ServerParameterInfo'=>$_ServerParameterInfo,'Fields'=>$_Fields,'ServerParameters'=>new SPListDataRetrievalTypeArrayOfServerParameter($_ServerParameters),'Where'=>$_Where,'OrderBy'=>new SPListDataRetrievalTypeArrayOfOrderField($_OrderBy),'RowLimit'=>$_RowLimit));
	}
	/**
	 * Set ServerParameterInfo
	 * @param ServerParameterInfo ServerParameterInfo
	 * @return ServerParameterInfo
	 */
	public function setServerParameterInfo($_ServerParameterInfo)
	{
		return ($this->ServerParameterInfo = $_ServerParameterInfo);
	}
	/**
	 * Get ServerParameterInfo
	 * @return SPListDataRetrievalTypeServerParameterInfo
	 */
	public function getServerParameterInfo()
	{
		return $this->ServerParameterInfo;
	}
	/**
	 * Set Fields
	 * @param Fields Fields
	 * @return Fields
	 */
	public function setFields($_Fields)
	{
		return ($this->Fields = $_Fields);
	}
	/**
	 * Get Fields
	 * @return SPListDataRetrievalTypeFields
	 */
	public function getFields()
	{
		return $this->Fields;
	}
	/**
	 * Set ServerParameters
	 * @param ArrayOfServerParameter ServerParameters
	 * @return ArrayOfServerParameter
	 */
	public function setServerParameters($_ServerParameters)
	{
		return ($this->ServerParameters = $_ServerParameters);
	}
	/**
	 * Get ServerParameters
	 * @return SPListDataRetrievalTypeArrayOfServerParameter
	 */
	public function getServerParameters()
	{
		return $this->ServerParameters;
	}
	/**
	 * Set Where
	 * @param Where Where
	 * @return Where
	 */
	public function setWhere($_Where)
	{
		return ($this->Where = $_Where);
	}
	/**
	 * Get Where
	 * @return SPListDataRetrievalTypeWhere
	 */
	public function getWhere()
	{
		return $this->Where;
	}
	/**
	 * Set OrderBy
	 * @param ArrayOfOrderField OrderBy
	 * @return ArrayOfOrderField
	 */
	public function setOrderBy($_OrderBy)
	{
		return ($this->OrderBy = $_OrderBy);
	}
	/**
	 * Get OrderBy
	 * @return SPListDataRetrievalTypeArrayOfOrderField
	 */
	public function getOrderBy()
	{
		return $this->OrderBy;
	}
	/**
	 * Set RowLimit
	 * @param long RowLimit
	 * @return long
	 */
	public function setRowLimit($_RowLimit)
	{
		return ($this->RowLimit = $_RowLimit);
	}
	/**
	 * Get RowLimit
	 * @return long
	 */
	public function getRowLimit()
	{
		return $this->RowLimit;
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