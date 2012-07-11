<?php
/**
 * Class file for GGAdwordsTypeString_StringMapEntry
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeString_StringMapEntry
 * Documentation : This represents an entry in a map with a key of type String and value of type String.
 * @date 03/07/2012
 */
class GGAdwordsTypeString_StringMapEntry extends GGAdwordsWsdlClass
{
	/**
	 * The key
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $key;
	/**
	 * The value
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param string key
	 * @param string value
	 * @return GGAdwordsTypeString_StringMapEntry
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