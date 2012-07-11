<?php
/**
 * Class file for AmazonEc2TypeBundleInstanceTaskErrorType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeBundleInstanceTaskErrorType
 * @date 10/07/2012
 */
class AmazonEc2TypeBundleInstanceTaskErrorType extends AmazonEc2WsdlClass
{
	/**
	 * The code
	 * @var string
	 */
	public $code;
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * Constructor
	 * @param string code
	 * @param string message
	 * @return AmazonEc2TypeBundleInstanceTaskErrorType
	 */
	public function __construct($_code = null,$_message = null)
	{
		parent::__construct(array('code'=>$_code,'message'=>$_message));
	}
	/**
	 * Set code
	 * @param string code
	 * @return string
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set message
	 * @param string message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
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