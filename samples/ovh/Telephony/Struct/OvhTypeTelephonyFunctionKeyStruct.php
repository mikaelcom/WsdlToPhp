<?php
/**
 * Class file for OvhTypeTelephonyFunctionKeyStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFunctionKeyStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyFunctionKeyStruct extends OvhWsdlClass
{
	/**
	 * The keyNum
	 * @var int
	 */
	public $keyNum;
	/**
	 * The function
	 * @var string
	 */
	public $function;
	/**
	 * The relatedNumber
	 * @var string
	 */
	public $relatedNumber;
	/**
	 * The label
	 * @var string
	 */
	public $label;
	/**
	 * The default
	 * @var string
	 */
	public $default;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The functionList
	 * @var OvhTypeMyArrayOfTelephonyAvailableFunctionStructType
	 */
	public $functionList;
	/**
	 * Constructor
	 * @param int keyNum
	 * @param string function
	 * @param string relatedNumber
	 * @param string label
	 * @param string default
	 * @param string type
	 * @param OvhTypeMyArrayOfTelephonyAvailableFunctionStructType functionList
	 * @return OvhTypeTelephonyFunctionKeyStruct
	 */
	public function __construct($_keyNum = null,$_function = null,$_relatedNumber = null,$_label = null,$_default = null,$_type = null,$_functionList = null)
	{
		parent::__construct(array('keyNum'=>$_keyNum,'function'=>$_function,'relatedNumber'=>$_relatedNumber,'label'=>$_label,'default'=>$_default,'type'=>$_type,'functionList'=>new OvhTypeMyArrayOfTelephonyAvailableFunctionStructType($_functionList)));
	}
	/**
	 * Set keyNum
	 * @param int keyNum
	 * @return int
	 */
	public function setKeyNum($_keyNum)
	{
		return ($this->keyNum = $_keyNum);
	}
	/**
	 * Get keyNum
	 * @return int
	 */
	public function getKeyNum()
	{
		return $this->keyNum;
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
	 * Set relatedNumber
	 * @param string relatedNumber
	 * @return string
	 */
	public function setRelatedNumber($_relatedNumber)
	{
		return ($this->relatedNumber = $_relatedNumber);
	}
	/**
	 * Get relatedNumber
	 * @return string
	 */
	public function getRelatedNumber()
	{
		return $this->relatedNumber;
	}
	/**
	 * Set label
	 * @param string label
	 * @return string
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get label
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set default
	 * @param string default
	 * @return string
	 */
	public function setDefault($_default)
	{
		return ($this->default = $_default);
	}
	/**
	 * Get default
	 * @return string
	 */
	public function getDefault()
	{
		return $this->default;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set functionList
	 * @param MyArrayOfTelephonyAvailableFunctionStructType functionList
	 * @return MyArrayOfTelephonyAvailableFunctionStructType
	 */
	public function setFunctionList($_functionList)
	{
		return ($this->functionList = $_functionList);
	}
	/**
	 * Get functionList
	 * @return OvhTypeMyArrayOfTelephonyAvailableFunctionStructType
	 */
	public function getFunctionList()
	{
		return $this->functionList;
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