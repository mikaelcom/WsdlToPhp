<?php
/**
 * Class file for AmazonAlexaTypeValidOperations
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeValidOperations
 * @date 10/07/2012
 */
class AmazonAlexaTypeValidOperations extends AmazonAlexaWsdlClass
{
	/**
	 * The Operation
	 * @var string
	 */
	public $Operation;
	/**
	 * Constructor
	 * @param string Operation
	 * @return AmazonAlexaTypeValidOperations
	 */
	public function __construct($_Operation = null)
	{
		parent::__construct(array('Operation'=>$_Operation));
	}
	/**
	 * Set Operation
	 * @param string Operation
	 * @return string
	 */
	public function setOperation($_Operation)
	{
		return ($this->Operation = $_Operation);
	}
	/**
	 * Get Operation
	 * @return string
	 */
	public function getOperation()
	{
		return $this->Operation;
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