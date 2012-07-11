<?php
/**
 * Class file for CdyneDeathIndexTypeArrayOfDeceasedInfo
 * @date 03/07/2012
 */
/**
 * Class CdyneDeathIndexTypeArrayOfDeceasedInfo
 * @date 03/07/2012
 */
class CdyneDeathIndexTypeArrayOfDeceasedInfo extends CdyneDeathIndexWsdlClass
{
	/**
	 * The DeceasedInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var CdyneDeathIndexTypeDeceasedInfo
	 */
	public $DeceasedInfo;
	/**
	 * Constructor
	 * @param CdyneDeathIndexTypeDeceasedInfo DeceasedInfo
	 * @return CdyneDeathIndexTypeArrayOfDeceasedInfo
	 */
	public function __construct($_DeceasedInfo = null)
	{
		parent::__construct(array('DeceasedInfo'=>$_DeceasedInfo));
	}
	/**
	 * Set DeceasedInfo
	 * @param DeceasedInfo DeceasedInfo
	 * @return DeceasedInfo
	 */
	public function setDeceasedInfo($_DeceasedInfo)
	{
		return ($this->DeceasedInfo = $_DeceasedInfo);
	}
	/**
	 * Get DeceasedInfo
	 * @return CdyneDeathIndexTypeDeceasedInfo
	 */
	public function getDeceasedInfo()
	{
		return $this->DeceasedInfo;
	}
	/**
	 * Returns the current element
	 * @see CdyneDeathIndexWsdlClass::current()
	 * @return CdyneDeathIndexTypeDeceasedInfo
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see CdyneDeathIndexWsdlClass::item()
	 * @param int
	 * @return CdyneDeathIndexTypeDeceasedInfo
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see CdyneDeathIndexWsdlClass::first()
	 * @return CdyneDeathIndexTypeDeceasedInfo
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see CdyneDeathIndexWsdlClass::last()
	 * @return CdyneDeathIndexTypeDeceasedInfo
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see CdyneDeathIndexWsdlClass::offsetGet()
	 * @param int
	 * @return CdyneDeathIndexTypeDeceasedInfo
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'DeceasedInfo'
	 */
	public function getAttributeName()
	{
		return 'DeceasedInfo';
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