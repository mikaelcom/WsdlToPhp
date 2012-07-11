<?php
/**
 * Class file for AmazonECommerceServiceTypeKeyValuePair
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeKeyValuePair
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeKeyValuePair extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Key
	 * @var string
	 */
	public $Key;
	/**
	 * The Value
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor
	 * @param string Key
	 * @param string Value
	 * @return AmazonECommerceServiceTypeKeyValuePair
	 */
	public function __construct($_Key = null,$_Value = null)
	{
		parent::__construct(array('Key'=>$_Key,'Value'=>$_Value));
	}
	/**
	 * Set Key
	 * @param string Key
	 * @return string
	 */
	public function setKey($_Key)
	{
		return ($this->Key = $_Key);
	}
	/**
	 * Get Key
	 * @return string
	 */
	public function getKey()
	{
		return $this->Key;
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
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