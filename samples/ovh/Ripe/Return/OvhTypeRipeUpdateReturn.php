<?php
/**
 * Class file for OvhTypeRipeUpdateReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRipeUpdateReturn
 * @date 02/07/2012
 */
class OvhTypeRipeUpdateReturn extends OvhWsdlClass
{
	/**
	 * The object
	 * @var string
	 */
	public $object;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * The result
	 * @var string
	 */
	public $result;
	/**
	 * Constructor
	 * @param string object
	 * @param string value
	 * @param string operation
	 * @param string result
	 * @return OvhTypeRipeUpdateReturn
	 */
	public function __construct($_object = null,$_value = null,$_operation = null,$_result = null)
	{
		parent::__construct(array('object'=>$_object,'value'=>$_value,'operation'=>$_operation,'result'=>$_result));
	}
	/**
	 * Set object
	 * @param string object
	 * @return string
	 */
	public function setObject($_object)
	{
		return ($this->object = $_object);
	}
	/**
	 * Get object
	 * @return string
	 */
	public function getObject()
	{
		return $this->object;
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set operation
	 * @param string operation
	 * @return string
	 */
	public function setOperation($_operation)
	{
		return ($this->operation = $_operation);
	}
	/**
	 * Get operation
	 * @return string
	 */
	public function getOperation()
	{
		return $this->operation;
	}
	/**
	 * Set result
	 * @param string result
	 * @return string
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return string
	 */
	public function getResult()
	{
		return $this->result;
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