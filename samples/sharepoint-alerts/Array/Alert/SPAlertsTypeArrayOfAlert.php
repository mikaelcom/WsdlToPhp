<?php
/**
 * Class file for SPAlertsTypeArrayOfAlert
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeArrayOfAlert
 * @date 06/07/2012
 */
class SPAlertsTypeArrayOfAlert extends SPAlertsWsdlClass
{
	/**
	 * The Alert
	 * @var SPAlertsTypeAlert
	 */
	public $Alert;
	/**
	 * Constructor
	 * @param SPAlertsTypeAlert Alert
	 * @return SPAlertsTypeArrayOfAlert
	 */
	public function __construct($_Alert = null)
	{
		parent::__construct(array('Alert'=>$_Alert));
	}
	/**
	 * Set Alert
	 * @param Alert Alert
	 * @return Alert
	 */
	public function setAlert($_Alert)
	{
		return ($this->Alert = $_Alert);
	}
	/**
	 * Get Alert
	 * @return SPAlertsTypeAlert
	 */
	public function getAlert()
	{
		return $this->Alert;
	}
	/**
	 * Returns the current element
	 * @see SPAlertsWsdlClass::current()
	 * @return SPAlertsTypeAlert
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPAlertsWsdlClass::item()
	 * @param int
	 * @return SPAlertsTypeAlert
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPAlertsWsdlClass::first()
	 * @return SPAlertsTypeAlert
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPAlertsWsdlClass::last()
	 * @return SPAlertsTypeAlert
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPAlertsWsdlClass::offsetGet()
	 * @param int
	 * @return SPAlertsTypeAlert
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Alert'
	 */
	public function getAttributeName()
	{
		return 'Alert';
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