<?php
/**
 * Class file for ATReportingTypeQueryInstantStreamResponse
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeQueryInstantStreamResponse
 * @date 03/07/2012
 */
class ATReportingTypeQueryInstantStreamResponse extends ATReportingWsdlClass
{
	/**
	 * The queryInstantStreamResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $queryInstantStreamResult;
	/**
	 * Constructor
	 * @param string queryInstantStreamResult
	 * @return ATReportingTypeQueryInstantStreamResponse
	 */
	public function __construct($_queryInstantStreamResult = null)
	{
		parent::__construct(array('queryInstantStreamResult'=>$_queryInstantStreamResult));
	}
	/**
	 * Set queryInstantStreamResult
	 * @param string queryInstantStreamResult
	 * @return string
	 */
	public function setQueryInstantStreamResult($_queryInstantStreamResult)
	{
		return ($this->queryInstantStreamResult = $_queryInstantStreamResult);
	}
	/**
	 * Get queryInstantStreamResult
	 * @return string
	 */
	public function getQueryInstantStreamResult()
	{
		return $this->queryInstantStreamResult;
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