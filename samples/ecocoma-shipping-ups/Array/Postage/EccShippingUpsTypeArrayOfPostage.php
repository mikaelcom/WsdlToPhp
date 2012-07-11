<?php
/**
 * Class file for EccShippingUpsTypeArrayOfPostage
 * @date 03/07/2012
 */
/**
 * Class EccShippingUpsTypeArrayOfPostage
 * @date 03/07/2012
 */
class EccShippingUpsTypeArrayOfPostage extends EccShippingUpsWsdlClass
{
	/**
	 * The Postage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccShippingUpsTypePostage
	 */
	public $Postage;
	/**
	 * Constructor
	 * @param EccShippingUpsTypePostage Postage
	 * @return EccShippingUpsTypeArrayOfPostage
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
	 * @return EccShippingUpsTypePostage
	 */
	public function getPostage()
	{
		return $this->Postage;
	}
	/**
	 * Returns the current element
	 * @see EccShippingUpsWsdlClass::current()
	 * @return EccShippingUpsTypePostage
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccShippingUpsWsdlClass::item()
	 * @param int
	 * @return EccShippingUpsTypePostage
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccShippingUpsWsdlClass::first()
	 * @return EccShippingUpsTypePostage
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccShippingUpsWsdlClass::last()
	 * @return EccShippingUpsTypePostage
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccShippingUpsWsdlClass::offsetGet()
	 * @param int
	 * @return EccShippingUpsTypePostage
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