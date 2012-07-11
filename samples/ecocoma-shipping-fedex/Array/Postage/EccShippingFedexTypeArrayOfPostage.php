<?php
/**
 * Class file for EccShippingFedexTypeArrayOfPostage
 * @date 03/07/2012
 */
/**
 * Class EccShippingFedexTypeArrayOfPostage
 * @date 03/07/2012
 */
class EccShippingFedexTypeArrayOfPostage extends EccShippingFedexWsdlClass
{
	/**
	 * The Postage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccShippingFedexTypePostage
	 */
	public $Postage;
	/**
	 * Constructor
	 * @param EccShippingFedexTypePostage Postage
	 * @return EccShippingFedexTypeArrayOfPostage
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
	 * @return EccShippingFedexTypePostage
	 */
	public function getPostage()
	{
		return $this->Postage;
	}
	/**
	 * Returns the current element
	 * @see EccShippingFedexWsdlClass::current()
	 * @return EccShippingFedexTypePostage
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccShippingFedexWsdlClass::item()
	 * @param int
	 * @return EccShippingFedexTypePostage
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccShippingFedexWsdlClass::first()
	 * @return EccShippingFedexTypePostage
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccShippingFedexWsdlClass::last()
	 * @return EccShippingFedexTypePostage
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccShippingFedexWsdlClass::offsetGet()
	 * @param int
	 * @return EccShippingFedexTypePostage
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