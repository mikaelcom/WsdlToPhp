<?php
/**
 * Class file for ScienceGovSearchTypeStringIntEntry
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeStringIntEntry
 * @date 13/10/2012
 */
class ScienceGovSearchTypeStringIntEntry extends ScienceGovSearchWsdlClass
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
	 * @var int
	 */
	public $value;
	/**
	 * Constructor
	 * @param string key
	 * @param int value
	 * @return ScienceGovSearchTypeStringIntEntry
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
	 * @param int value
	 * @return int
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return int
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