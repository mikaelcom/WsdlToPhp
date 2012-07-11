<?php
/**
 * Class file for EccShippingUspsTypeArrayOfPostage
 * @date 03/07/2012
 */
/**
 * Class EccShippingUspsTypeArrayOfPostage
 * @date 03/07/2012
 */
class EccShippingUspsTypeArrayOfPostage extends EccShippingUspsWsdlClass
{
	/**
	 * The Postage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccShippingUspsTypePostage
	 */
	public $Postage;
	/**
	 * Constructor
	 * @param EccShippingUspsTypePostage Postage
	 * @return EccShippingUspsTypeArrayOfPostage
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
	 * @return EccShippingUspsTypePostage
	 */
	public function getPostage()
	{
		return $this->Postage;
	}
	/**
	 * Returns the current element
	 * @see EccShippingUspsWsdlClass::current()
	 * @return EccShippingUspsTypePostage
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccShippingUspsWsdlClass::item()
	 * @param int
	 * @return EccShippingUspsTypePostage
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccShippingUspsWsdlClass::first()
	 * @return EccShippingUspsTypePostage
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccShippingUspsWsdlClass::last()
	 * @return EccShippingUspsTypePostage
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccShippingUspsWsdlClass::offsetGet()
	 * @param int
	 * @return EccShippingUspsTypePostage
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