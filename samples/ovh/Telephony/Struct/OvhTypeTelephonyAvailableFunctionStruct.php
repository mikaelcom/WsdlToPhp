<?php
/**
 * Class file for OvhTypeTelephonyAvailableFunctionStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAvailableFunctionStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyAvailableFunctionStruct extends OvhWsdlClass
{
	/**
	 * The function
	 * @var string
	 */
	public $function;
	/**
	 * The relatedValue
	 * @var string
	 */
	public $relatedValue;
	/**
	 * Constructor
	 * @param string function
	 * @param string relatedValue
	 * @return OvhTypeTelephonyAvailableFunctionStruct
	 */
	public function __construct($_function = null,$_relatedValue = null)
	{
		parent::__construct(array('function'=>$_function,'relatedValue'=>$_relatedValue));
	}
	/**
	 * Set function
	 * @param string function
	 * @return string
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
	}
	/**
	 * Get function
	 * @return string
	 */
	public function getFunction()
	{
		return $this->function;
	}
	/**
	 * Set relatedValue
	 * @param string relatedValue
	 * @return string
	 */
	public function setRelatedValue($_relatedValue)
	{
		return ($this->relatedValue = $_relatedValue);
	}
	/**
	 * Get relatedValue
	 * @return string
	 */
	public function getRelatedValue()
	{
		return $this->relatedValue;
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