<?php
/**
 * Class file for ATReportingTypeQueryInstantStreamUTF8Response
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeQueryInstantStreamUTF8Response
 * @date 03/07/2012
 */
class ATReportingTypeQueryInstantStreamUTF8Response extends ATReportingWsdlClass
{
	/**
	 * The queryInstantStreamUTF8Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $queryInstantStreamUTF8Result;
	/**
	 * Constructor
	 * @param string queryInstantStreamUTF8Result
	 * @return ATReportingTypeQueryInstantStreamUTF8Response
	 */
	public function __construct($_queryInstantStreamUTF8Result = null)
	{
		parent::__construct(array('queryInstantStreamUTF8Result'=>$_queryInstantStreamUTF8Result));
	}
	/**
	 * Set queryInstantStreamUTF8Result
	 * @param string queryInstantStreamUTF8Result
	 * @return string
	 */
	public function setQueryInstantStreamUTF8Result($_queryInstantStreamUTF8Result)
	{
		return ($this->queryInstantStreamUTF8Result = $_queryInstantStreamUTF8Result);
	}
	/**
	 * Get queryInstantStreamUTF8Result
	 * @return string
	 */
	public function getQueryInstantStreamUTF8Result()
	{
		return $this->queryInstantStreamUTF8Result;
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