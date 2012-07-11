<?php
/**
 * Class file for XiTranscriptsTypeArrayOfTranscript
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeArrayOfTranscript
 * @date 08/07/2012
 */
class XiTranscriptsTypeArrayOfTranscript extends XiTranscriptsWsdlClass
{
	/**
	 * The Transcript
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiTranscriptsTypeTranscript
	 */
	public $Transcript;
	/**
	 * Constructor
	 * @param XiTranscriptsTypeTranscript Transcript
	 * @return XiTranscriptsTypeArrayOfTranscript
	 */
	public function __construct($_Transcript = null)
	{
		parent::__construct(array('Transcript'=>$_Transcript));
	}
	/**
	 * Set Transcript
	 * @param Transcript Transcript
	 * @return Transcript
	 */
	public function setTranscript($_Transcript)
	{
		return ($this->Transcript = $_Transcript);
	}
	/**
	 * Get Transcript
	 * @return XiTranscriptsTypeTranscript
	 */
	public function getTranscript()
	{
		return $this->Transcript;
	}
	/**
	 * Returns the current element
	 * @see XiTranscriptsWsdlClass::current()
	 * @return XiTranscriptsTypeTranscript
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiTranscriptsWsdlClass::item()
	 * @param int
	 * @return XiTranscriptsTypeTranscript
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiTranscriptsWsdlClass::first()
	 * @return XiTranscriptsTypeTranscript
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiTranscriptsWsdlClass::last()
	 * @return XiTranscriptsTypeTranscript
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiTranscriptsWsdlClass::offsetGet()
	 * @param int
	 * @return XiTranscriptsTypeTranscript
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Transcript'
	 */
	public function getAttributeName()
	{
		return 'Transcript';
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