<?php
/**
 * Class file for SPSearchTypeQueryExResponse
 * @date 06/07/2012
 */
/**
 * Class SPSearchTypeQueryExResponse
 * @date 06/07/2012
 */
class SPSearchTypeQueryExResponse extends SPSearchWsdlClass
{
	/**
	 * The QueryExResult
	 * @var SPSearchTypeQueryExResult
	 */
	public $QueryExResult;
	/**
	 * Constructor
	 * @param SPSearchTypeQueryExResult QueryExResult
	 * @return SPSearchTypeQueryExResponse
	 */
	public function __construct($_QueryExResult = null)
	{
		parent::__construct(array('QueryExResult'=>$_QueryExResult));
	}
	/**
	 * Set QueryExResult
	 * @param QueryExResult QueryExResult
	 * @return QueryExResult
	 */
	public function setQueryExResult($_QueryExResult)
	{
		return ($this->QueryExResult = $_QueryExResult);
	}
	/**
	 * Get QueryExResult
	 * @return SPSearchTypeQueryExResult
	 */
	public function getQueryExResult()
	{
		return $this->QueryExResult;
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