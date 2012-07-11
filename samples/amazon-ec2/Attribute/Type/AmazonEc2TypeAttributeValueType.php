<?php
/**
 * Class file for AmazonEc2TypeAttributeValueType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttributeValueType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttributeValueType extends AmazonEc2WsdlClass
{
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param string value
	 * @return AmazonEc2TypeAttributeValueType
	 */
	public function __construct($_value = null)
	{
		parent::__construct(array('value'=>$_value));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>