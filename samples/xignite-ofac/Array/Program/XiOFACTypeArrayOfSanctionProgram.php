<?php
/**
 * Class file for XiOFACTypeArrayOfSanctionProgram
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeArrayOfSanctionProgram
 * @date 08/07/2012
 */
class XiOFACTypeArrayOfSanctionProgram extends XiOFACWsdlClass
{
	/**
	 * The SanctionProgram
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiOFACTypeSanctionProgram
	 */
	public $SanctionProgram;
	/**
	 * Constructor
	 * @param XiOFACTypeSanctionProgram SanctionProgram
	 * @return XiOFACTypeArrayOfSanctionProgram
	 */
	public function __construct($_SanctionProgram = null)
	{
		parent::__construct(array('SanctionProgram'=>$_SanctionProgram));
	}
	/**
	 * Set SanctionProgram
	 * @param SanctionProgram SanctionProgram
	 * @return SanctionProgram
	 */
	public function setSanctionProgram($_SanctionProgram)
	{
		return ($this->SanctionProgram = $_SanctionProgram);
	}
	/**
	 * Get SanctionProgram
	 * @return XiOFACTypeSanctionProgram
	 */
	public function getSanctionProgram()
	{
		return $this->SanctionProgram;
	}
	/**
	 * Returns the current element
	 * @see XiOFACWsdlClass::current()
	 * @return XiOFACTypeSanctionProgram
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiOFACWsdlClass::item()
	 * @param int
	 * @return XiOFACTypeSanctionProgram
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::first()
	 * @return XiOFACTypeSanctionProgram
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::last()
	 * @return XiOFACTypeSanctionProgram
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::offsetGet()
	 * @param int
	 * @return XiOFACTypeSanctionProgram
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SanctionProgram'
	 */
	public function getAttributeName()
	{
		return 'SanctionProgram';
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