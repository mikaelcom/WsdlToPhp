<?php
/**
 * Class file for SPAlertsTypeArrayOfDeliveryChannel
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeArrayOfDeliveryChannel
 * @date 06/07/2012
 */
class SPAlertsTypeArrayOfDeliveryChannel extends SPAlertsWsdlClass
{
	/**
	 * The DeliveryChannel
	 * @var SPAlertsTypeDeliveryChannel
	 */
	public $DeliveryChannel;
	/**
	 * Constructor
	 * @param SPAlertsTypeDeliveryChannel DeliveryChannel
	 * @return SPAlertsTypeArrayOfDeliveryChannel
	 */
	public function __construct($_DeliveryChannel = null)
	{
		parent::__construct(array('DeliveryChannel'=>$_DeliveryChannel));
	}
	/**
	 * Set DeliveryChannel
	 * @param DeliveryChannel DeliveryChannel
	 * @return DeliveryChannel
	 */
	public function setDeliveryChannel($_DeliveryChannel)
	{
		return ($this->DeliveryChannel = $_DeliveryChannel);
	}
	/**
	 * Get DeliveryChannel
	 * @return SPAlertsTypeDeliveryChannel
	 */
	public function getDeliveryChannel()
	{
		return $this->DeliveryChannel;
	}
	/**
	 * Returns the current element
	 * @see SPAlertsWsdlClass::current()
	 * @return SPAlertsTypeDeliveryChannel
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPAlertsWsdlClass::item()
	 * @param int
	 * @return SPAlertsTypeDeliveryChannel
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPAlertsWsdlClass::first()
	 * @return SPAlertsTypeDeliveryChannel
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPAlertsWsdlClass::last()
	 * @return SPAlertsTypeDeliveryChannel
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPAlertsWsdlClass::offsetGet()
	 * @param int
	 * @return SPAlertsTypeDeliveryChannel
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'DeliveryChannel'
	 */
	public function getAttributeName()
	{
		return 'DeliveryChannel';
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