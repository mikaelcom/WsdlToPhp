<?php
/**
 * Class file for BingTypeSpellResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeSpellResult
 * @date 02/07/2012
 */
class BingTypeSpellResult extends BingWsdlClass
{
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor
	 * @param string Value
	 * @return BingTypeSpellResult
	 */
	public function __construct($_Value = null)
	{
		parent::__construct(array('Value'=>$_Value));
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