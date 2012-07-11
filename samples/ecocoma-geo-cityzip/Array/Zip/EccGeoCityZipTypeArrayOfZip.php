<?php
/**
 * Class file for EccGeoCityZipTypeArrayOfZip
 * @date 03/07/2012
 */
/**
 * Class EccGeoCityZipTypeArrayOfZip
 * @date 03/07/2012
 */
class EccGeoCityZipTypeArrayOfZip extends EccGeoCityZipWsdlClass
{
	/**
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccGeoCityZipTypeZip
	 */
	public $Zip;
	/**
	 * Constructor
	 * @param EccGeoCityZipTypeZip Zip
	 * @return EccGeoCityZipTypeArrayOfZip
	 */
	public function __construct($_Zip = null)
	{
		parent::__construct(array('Zip'=>$_Zip));
	}
	/**
	 * Set Zip
	 * @param Zip Zip
	 * @return Zip
	 */
	public function setZip($_Zip)
	{
		return ($this->Zip = $_Zip);
	}
	/**
	 * Get Zip
	 * @return EccGeoCityZipTypeZip
	 */
	public function getZip()
	{
		return $this->Zip;
	}
	/**
	 * Returns the current element
	 * @see EccGeoCityZipWsdlClass::current()
	 * @return EccGeoCityZipTypeZip
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccGeoCityZipWsdlClass::item()
	 * @param int
	 * @return EccGeoCityZipTypeZip
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccGeoCityZipWsdlClass::first()
	 * @return EccGeoCityZipTypeZip
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccGeoCityZipWsdlClass::last()
	 * @return EccGeoCityZipTypeZip
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccGeoCityZipWsdlClass::offsetGet()
	 * @param int
	 * @return EccGeoCityZipTypeZip
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Zip'
	 */
	public function getAttributeName()
	{
		return 'Zip';
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