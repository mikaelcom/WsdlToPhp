<?php
/**
 * Class file for AmazonECommerceServiceTypeError
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeError
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeError extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Code
	 * @var string
	 */
	public $Code;
	/**
	 * The Message
	 * @var string
	 */
	public $Message;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Message
	 * @return AmazonECommerceServiceTypeError
	 */
	public function __construct($_Code = null,$_Message = null)
	{
		parent::__construct(array('Code'=>$_Code,'Message'=>$_Message));
	}
	/**
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
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