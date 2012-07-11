<?php
/**
 * Class file for XiEdgarTypeQueryFilingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeQueryFilingsResponse
 * @date 08/07/2012
 */
class XiEdgarTypeQueryFilingsResponse extends XiEdgarWsdlClass
{
	/**
	 * The QueryFilingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeQueryResult
	 */
	public $QueryFilingsResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeQueryResult QueryFilingsResult
	 * @return XiEdgarTypeQueryFilingsResponse
	 */
	public function __construct($_QueryFilingsResult = null)
	{
		parent::__construct(array('QueryFilingsResult'=>$_QueryFilingsResult));
	}
	/**
	 * Set QueryFilingsResult
	 * @param QueryResult QueryFilingsResult
	 * @return QueryResult
	 */
	public function setQueryFilingsResult($_QueryFilingsResult)
	{
		return ($this->QueryFilingsResult = $_QueryFilingsResult);
	}
	/**
	 * Get QueryFilingsResult
	 * @return XiEdgarTypeQueryResult
	 */
	public function getQueryFilingsResult()
	{
		return $this->QueryFilingsResult;
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