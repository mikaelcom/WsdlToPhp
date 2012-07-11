<?php
/**
 * Class file for UsgsUsngTypeGet_XY
 * @date 08/07/2012
 */
/**
 * Class UsgsUsngTypeGet_XY
 * @date 08/07/2012
 */
class UsgsUsngTypeGet_XY extends UsgsUsngWsdlClass
{
	/**
	 * The USNG_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $USNG_Value;
	/**
	 * Constructor
	 * @param string USNG_Value
	 * @return UsgsUsngTypeGet_XY
	 */
	public function __construct($_USNG_Value = null)
	{
		parent::__construct(array('USNG_Value'=>$_USNG_Value));
	}
	/**
	 * Set USNG_Value
	 * @param string USNG_Value
	 * @return string
	 */
	public function setUSNG_Value($_USNG_Value)
	{
		return ($this->USNG_Value = $_USNG_Value);
	}
	/**
	 * Get USNG_Value
	 * @return string
	 */
	public function getUSNG_Value()
	{
		return $this->USNG_Value;
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