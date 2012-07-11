<?php
/**
 * Class file for SPAlertsTypeArrayOfDeleteFailure
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeArrayOfDeleteFailure
 * @date 06/07/2012
 */
class SPAlertsTypeArrayOfDeleteFailure extends SPAlertsWsdlClass
{
	/**
	 * The DeleteFailure
	 * @var SPAlertsTypeDeleteFailure
	 */
	public $DeleteFailure;
	/**
	 * Constructor
	 * @param SPAlertsTypeDeleteFailure DeleteFailure
	 * @return SPAlertsTypeArrayOfDeleteFailure
	 */
	public function __construct($_DeleteFailure = null)
	{
		parent::__construct(array('DeleteFailure'=>$_DeleteFailure));
	}
	/**
	 * Set DeleteFailure
	 * @param DeleteFailure DeleteFailure
	 * @return DeleteFailure
	 */
	public function setDeleteFailure($_DeleteFailure)
	{
		return ($this->DeleteFailure = $_DeleteFailure);
	}
	/**
	 * Get DeleteFailure
	 * @return SPAlertsTypeDeleteFailure
	 */
	public function getDeleteFailure()
	{
		return $this->DeleteFailure;
	}
	/**
	 * Returns the current element
	 * @see SPAlertsWsdlClass::current()
	 * @return SPAlertsTypeDeleteFailure
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPAlertsWsdlClass::item()
	 * @param int
	 * @return SPAlertsTypeDeleteFailure
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPAlertsWsdlClass::first()
	 * @return SPAlertsTypeDeleteFailure
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPAlertsWsdlClass::last()
	 * @return SPAlertsTypeDeleteFailure
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPAlertsWsdlClass::offsetGet()
	 * @param int
	 * @return SPAlertsTypeDeleteFailure
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'DeleteFailure'
	 */
	public function getAttributeName()
	{
		return 'DeleteFailure';
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