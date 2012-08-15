<?php
/**
 * Class file for RFBibleASVTypeArrayOfBibleVerse
 * @date 15/08/2012
 */
/**
 * Class RFBibleASVTypeArrayOfBibleVerse
 * @date 15/08/2012
 */
class RFBibleASVTypeArrayOfBibleVerse extends RFBibleASVWsdlClass
{
	/**
	 * The BibleVerse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var RFBibleASVTypeBibleVerse
	 */
	public $BibleVerse;
	/**
	 * Constructor
	 * @param RFBibleASVTypeBibleVerse BibleVerse
	 * @return RFBibleASVTypeArrayOfBibleVerse
	 */
	public function __construct($_BibleVerse = null)
	{
		parent::__construct(array('BibleVerse'=>$_BibleVerse));
	}
	/**
	 * Set BibleVerse
	 * @param BibleVerse BibleVerse
	 * @return BibleVerse
	 */
	public function setBibleVerse($_BibleVerse)
	{
		return ($this->BibleVerse = $_BibleVerse);
	}
	/**
	 * Get BibleVerse
	 * @return RFBibleASVTypeBibleVerse
	 */
	public function getBibleVerse()
	{
		return $this->BibleVerse;
	}
	/**
	 * Returns the current element
	 * @see RFBibleASVWsdlClass::current()
	 * @return RFBibleASVTypeBibleVerse
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see RFBibleASVWsdlClass::item()
	 * @param int
	 * @return RFBibleASVTypeBibleVerse
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see RFBibleASVWsdlClass::first()
	 * @return RFBibleASVTypeBibleVerse
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see RFBibleASVWsdlClass::last()
	 * @return RFBibleASVTypeBibleVerse
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see RFBibleASVWsdlClass::offsetGet()
	 * @param int
	 * @return RFBibleASVTypeBibleVerse
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'BibleVerse'
	 */
	public function getAttributeName()
	{
		return 'BibleVerse';
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