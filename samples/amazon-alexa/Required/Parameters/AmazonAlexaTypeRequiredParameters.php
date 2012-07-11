<?php
/**
 * Class file for AmazonAlexaTypeRequiredParameters
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeRequiredParameters
 * @date 10/07/2012
 */
class AmazonAlexaTypeRequiredParameters extends AmazonAlexaWsdlClass
{
	/**
	 * The Parameter
	 * @var string
	 */
	public $Parameter;
	/**
	 * Constructor
	 * @param string Parameter
	 * @return AmazonAlexaTypeRequiredParameters
	 */
	public function __construct($_Parameter = null)
	{
		parent::__construct(array('Parameter'=>$_Parameter));
	}
	/**
	 * Set Parameter
	 * @param string Parameter
	 * @return string
	 */
	public function setParameter($_Parameter)
	{
		return ($this->Parameter = $_Parameter);
	}
	/**
	 * Get Parameter
	 * @return string
	 */
	public function getParameter()
	{
		return $this->Parameter;
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