<?php
/**
 * Class file for CdyneSpellCheckerTypeCheckTextBodyV2
 * @date 03/07/2012
 */
/**
 * Class CdyneSpellCheckerTypeCheckTextBodyV2
 * @date 03/07/2012
 */
class CdyneSpellCheckerTypeCheckTextBodyV2 extends CdyneSpellCheckerWsdlClass
{
	/**
	 * The BodyText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BodyText;
	/**
	 * Constructor
	 * @param string BodyText
	 * @return CdyneSpellCheckerTypeCheckTextBodyV2
	 */
	public function __construct($_BodyText = null)
	{
		parent::__construct(array('BodyText'=>$_BodyText));
	}
	/**
	 * Set BodyText
	 * @param string BodyText
	 * @return string
	 */
	public function setBodyText($_BodyText)
	{
		return ($this->BodyText = $_BodyText);
	}
	/**
	 * Get BodyText
	 * @return string
	 */
	public function getBodyText()
	{
		return $this->BodyText;
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