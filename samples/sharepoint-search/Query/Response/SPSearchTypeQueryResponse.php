<?php
/**
 * Class file for SPSearchTypeQueryResponse
 * @date 06/07/2012
 */
/**
 * Class SPSearchTypeQueryResponse
 * @date 06/07/2012
 */
class SPSearchTypeQueryResponse extends SPSearchWsdlClass
{
	/**
	 * The QueryResult
	 * @var string
	 */
	public $QueryResult;
	/**
	 * Constructor
	 * @param string QueryResult
	 * @return SPSearchTypeQueryResponse
	 */
	public function __construct($_QueryResult = null)
	{
		parent::__construct(array('QueryResult'=>$_QueryResult));
	}
	/**
	 * Set QueryResult
	 * @param string QueryResult
	 * @return string
	 */
	public function setQueryResult($_QueryResult)
	{
		return ($this->QueryResult = $_QueryResult);
	}
	/**
	 * Get QueryResult
	 * @return string
	 */
	public function getQueryResult()
	{
		return $this->QueryResult;
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