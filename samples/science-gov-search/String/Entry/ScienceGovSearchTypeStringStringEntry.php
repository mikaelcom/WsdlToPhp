<?php
/**
 * Class file for ScienceGovSearchTypeStringStringEntry
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeStringStringEntry
 * @date 13/10/2012
 */
class ScienceGovSearchTypeStringStringEntry extends ScienceGovSearchWsdlClass
{
	/**
	 * The key
	 * @var string
	 */
	public $key;
	/**
	 * The value
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param string key
	 * @param string value
	 * @return ScienceGovSearchTypeStringStringEntry
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