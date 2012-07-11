<?php
/**
 * Class file for AmazonAlexaTypeResults
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeResults
 * @date 10/07/2012
 */
class AmazonAlexaTypeResults extends AmazonAlexaWsdlClass
{
	/**
	 * The Result
	 * @var AmazonAlexaTypeResult
	 */
	public $Result;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeResult Result
	 * @return AmazonAlexaTypeResults
	 */
	public function __construct($_Result = null)
	{
		parent::__construct(array('Result'=>$_Result));
	}
	/**
	 * Set Result
	 * @param Result Result
	 * @return Result
	 */
	public function setResult($_Result)
	{
		return ($this->Result = $_Result);
	}
	/**
	 * Get Result
	 * @return AmazonAlexaTypeResult
	 */
	public function getResult()
	{
		return $this->Result;
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