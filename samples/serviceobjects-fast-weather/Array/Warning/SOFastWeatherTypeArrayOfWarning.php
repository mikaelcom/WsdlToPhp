<?php
/**
 * Class file for SOFastWeatherTypeArrayOfWarning
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeArrayOfWarning
 * @date 08/07/2012
 */
class SOFastWeatherTypeArrayOfWarning extends SOFastWeatherWsdlClass
{
	/**
	 * The Warning
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOFastWeatherTypeWarning
	 */
	public $Warning;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeWarning Warning
	 * @return SOFastWeatherTypeArrayOfWarning
	 */
	public function __construct($_Warning = null)
	{
		parent::__construct(array('Warning'=>$_Warning));
	}
	/**
	 * Set Warning
	 * @param Warning Warning
	 * @return Warning
	 */
	public function setWarning($_Warning)
	{
		return ($this->Warning = $_Warning);
	}
	/**
	 * Get Warning
	 * @return SOFastWeatherTypeWarning
	 */
	public function getWarning()
	{
		return $this->Warning;
	}
	/**
	 * Returns the current element
	 * @see SOFastWeatherWsdlClass::current()
	 * @return SOFastWeatherTypeWarning
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOFastWeatherWsdlClass::item()
	 * @param int
	 * @return SOFastWeatherTypeWarning
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOFastWeatherWsdlClass::first()
	 * @return SOFastWeatherTypeWarning
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOFastWeatherWsdlClass::last()
	 * @return SOFastWeatherTypeWarning
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOFastWeatherWsdlClass::offsetGet()
	 * @param int
	 * @return SOFastWeatherTypeWarning
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Warning'
	 */
	public function getAttributeName()
	{
		return 'Warning';
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