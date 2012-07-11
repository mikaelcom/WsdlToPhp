<?php
/**
 * Class file for YMailTypeMetaData
 * @date 02/07/2012
 */
/**
 * Class YMailTypeMetaData
 * @date 02/07/2012
 */
class YMailTypeMetaData extends YMailWsdlClass
{
	/**
	 * The meta
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeMetaData
	 */
	public $meta;
	/**
	 * The name
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $name;
	/**
	 * The value
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param YMailTypeMetaData meta
	 * @param string name
	 * @param string value
	 * @return YMailTypeMetaData
	 */
	public function __construct($_meta = null,$_name = null,$_value = null)
	{
		parent::__construct(array('meta'=>$_meta,'name'=>$_name,'value'=>$_value));
	}
	/**
	 * Set meta
	 * @param MetaData meta
	 * @return MetaData
	 */
	public function setMeta($_meta)
	{
		return ($this->meta = $_meta);
	}
	/**
	 * Get meta
	 * @return YMailTypeMetaData
	 */
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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