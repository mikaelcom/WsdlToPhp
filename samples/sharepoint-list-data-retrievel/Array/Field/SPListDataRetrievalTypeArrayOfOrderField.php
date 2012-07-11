<?php
/**
 * Class file for SPListDataRetrievalTypeArrayOfOrderField
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeArrayOfOrderField
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeArrayOfOrderField extends SPListDataRetrievalWsdlClass
{
	/**
	 * The OrderField
	 * @var SPListDataRetrievalTypeOrderField
	 */
	public $OrderField;
	/**
	 * Constructor
	 * @param SPListDataRetrievalTypeOrderField OrderField
	 * @return SPListDataRetrievalTypeArrayOfOrderField
	 */
	public function __construct($_OrderField = null)
	{
		parent::__construct(array('OrderField'=>$_OrderField));
	}
	/**
	 * Set OrderField
	 * @param OrderField OrderField
	 * @return OrderField
	 */
	public function setOrderField($_OrderField)
	{
		return ($this->OrderField = $_OrderField);
	}
	/**
	 * Get OrderField
	 * @return SPListDataRetrievalTypeOrderField
	 */
	public function getOrderField()
	{
		return $this->OrderField;
	}
	/**
	 * Returns the current element
	 * @see SPListDataRetrievalWsdlClass::current()
	 * @return SPListDataRetrievalTypeOrderField
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPListDataRetrievalWsdlClass::item()
	 * @param int
	 * @return SPListDataRetrievalTypeOrderField
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPListDataRetrievalWsdlClass::first()
	 * @return SPListDataRetrievalTypeOrderField
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPListDataRetrievalWsdlClass::last()
	 * @return SPListDataRetrievalTypeOrderField
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPListDataRetrievalWsdlClass::offsetGet()
	 * @param int
	 * @return SPListDataRetrievalTypeOrderField
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OrderField'
	 */
	public function getAttributeName()
	{
		return 'OrderField';
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