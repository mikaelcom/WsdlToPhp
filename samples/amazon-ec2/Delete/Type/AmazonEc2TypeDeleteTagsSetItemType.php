<?php
/**
 * Class file for AmazonEc2TypeDeleteTagsSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteTagsSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteTagsSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The key
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $key;
	/**
	 * The value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param string key
	 * @param string value
	 * @return AmazonEc2TypeDeleteTagsSetItemType
	 */
	public function __construct($_key = null,$_value = null)
	{
		parent::__construct(array('key'=>$_key,'value'=>$_value));
	}
	/**
	 * Set key
	 * @param string key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->key = $_key);
	}
	/**
	 * Get key
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
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