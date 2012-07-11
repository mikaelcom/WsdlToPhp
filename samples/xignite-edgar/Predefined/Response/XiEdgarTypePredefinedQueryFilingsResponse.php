<?php
/**
 * Class file for XiEdgarTypePredefinedQueryFilingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypePredefinedQueryFilingsResponse
 * @date 08/07/2012
 */
class XiEdgarTypePredefinedQueryFilingsResponse extends XiEdgarWsdlClass
{
	/**
	 * The PredefinedQueryFilingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeQueryResult
	 */
	public $PredefinedQueryFilingsResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeQueryResult PredefinedQueryFilingsResult
	 * @return XiEdgarTypePredefinedQueryFilingsResponse
	 */
	public function __construct($_PredefinedQueryFilingsResult = null)
	{
		parent::__construct(array('PredefinedQueryFilingsResult'=>$_PredefinedQueryFilingsResult));
	}
	/**
	 * Set PredefinedQueryFilingsResult
	 * @param QueryResult PredefinedQueryFilingsResult
	 * @return QueryResult
	 */
	public function setPredefinedQueryFilingsResult($_PredefinedQueryFilingsResult)
	{
		return ($this->PredefinedQueryFilingsResult = $_PredefinedQueryFilingsResult);
	}
	/**
	 * Get PredefinedQueryFilingsResult
	 * @return XiEdgarTypeQueryResult
	 */
	public function getPredefinedQueryFilingsResult()
	{
		return $this->PredefinedQueryFilingsResult;
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