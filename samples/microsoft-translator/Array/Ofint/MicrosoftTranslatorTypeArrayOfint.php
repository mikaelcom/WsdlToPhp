<?php
/**
 * Class file for MicrosoftTranslatorTypeArrayOfint
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeArrayOfint
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeArrayOfint extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The int
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var int
	 */
	public $int;
	/**
	 * Constructor
	 * @param int int
	 * @return MicrosoftTranslatorTypeArrayOfint
	 */
	public function __construct($_int = null)
	{
		parent::__construct(array('int'=>$_int));
	}
	/**
	 * Set int
	 * @param int int
	 * @return int
	 */
	public function setInt($_int)
	{
		return ($this->int = $_int);
	}
	/**
	 * Get int
	 * @return int
	 */
	public function getInt()
	{
		return $this->int;
	}
	/**
	 * Returns the current element
	 * @see MicrosoftTranslatorWsdlClass::current()
	 * @return int
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see MicrosoftTranslatorWsdlClass::item()
	 * @param int
	 * @return int
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::first()
	 * @return int
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::last()
	 * @return int
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::offsetGet()
	 * @param int
	 * @return int
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'int'
	 */
	public function getAttributeName()
	{
		return 'int';
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