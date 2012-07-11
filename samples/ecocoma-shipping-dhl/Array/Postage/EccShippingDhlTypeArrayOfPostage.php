<?php
/**
 * Class file for EccShippingDhlTypeArrayOfPostage
 * @date 03/07/2012
 */
/**
 * Class EccShippingDhlTypeArrayOfPostage
 * @date 03/07/2012
 */
class EccShippingDhlTypeArrayOfPostage extends EccShippingDhlWsdlClass
{
	/**
	 * The Postage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccShippingDhlTypePostage
	 */
	public $Postage;
	/**
	 * Constructor
	 * @param EccShippingDhlTypePostage Postage
	 * @return EccShippingDhlTypeArrayOfPostage
	 */
	public function __construct($_Postage = null)
	{
		parent::__construct(array('Postage'=>$_Postage));
	}
	/**
	 * Set Postage
	 * @param Postage Postage
	 * @return Postage
	 */
	public function setPostage($_Postage)
	{
		return ($this->Postage = $_Postage);
	}
	/**
	 * Get Postage
	 * @return EccShippingDhlTypePostage
	 */
	public function getPostage()
	{
		return $this->Postage;
	}
	/**
	 * Returns the current element
	 * @see EccShippingDhlWsdlClass::current()
	 * @return EccShippingDhlTypePostage
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccShippingDhlWsdlClass::item()
	 * @param int
	 * @return EccShippingDhlTypePostage
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccShippingDhlWsdlClass::first()
	 * @return EccShippingDhlTypePostage
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccShippingDhlWsdlClass::last()
	 * @return EccShippingDhlTypePostage
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccShippingDhlWsdlClass::offsetGet()
	 * @param int
	 * @return EccShippingDhlTypePostage
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Postage'
	 */
	public function getAttributeName()
	{
		return 'Postage';
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