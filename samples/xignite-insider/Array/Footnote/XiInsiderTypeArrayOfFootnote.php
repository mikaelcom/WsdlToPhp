<?php
/**
 * Class file for XiInsiderTypeArrayOfFootnote
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfFootnote
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfFootnote extends XiInsiderWsdlClass
{
	/**
	 * The Footnote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeFootnote
	 */
	public $Footnote;
	/**
	 * Constructor
	 * @param XiInsiderTypeFootnote Footnote
	 * @return XiInsiderTypeArrayOfFootnote
	 */
	public function __construct($_Footnote = null)
	{
		parent::__construct(array('Footnote'=>$_Footnote));
	}
	/**
	 * Set Footnote
	 * @param Footnote Footnote
	 * @return Footnote
	 */
	public function setFootnote($_Footnote)
	{
		return ($this->Footnote = $_Footnote);
	}
	/**
	 * Get Footnote
	 * @return XiInsiderTypeFootnote
	 */
	public function getFootnote()
	{
		return $this->Footnote;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeFootnote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeFootnote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeFootnote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeFootnote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeFootnote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Footnote'
	 */
	public function getAttributeName()
	{
		return 'Footnote';
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