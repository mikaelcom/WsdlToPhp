<?php
/**
 * Class file for PayPalTypeInstrumentDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeInstrumentDetailsType
 * Documentation : InstrumentDetailsType Promotional Instrument Information.
 * @date 14/07/2012
 */
class PayPalTypeInstrumentDetailsType extends PayPalWsdlClass
{
	/**
	 * The InstrumentCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field holds the category of the instrument only when it is promotional. Return value 1 represents BML.
	 * @var string
	 */
	public $InstrumentCategory;
	/**
	 * Constructor
	 * @param string InstrumentCategory
	 * @return PayPalTypeInstrumentDetailsType
	 */
	public function __construct($_InstrumentCategory = null)
	{
		parent::__construct(array('InstrumentCategory'=>$_InstrumentCategory));
	}
	/**
	 * Set InstrumentCategory
	 * @param string InstrumentCategory
	 * @return string
	 */
	public function setInstrumentCategory($_InstrumentCategory)
	{
		return ($this->InstrumentCategory = $_InstrumentCategory);
	}
	/**
	 * Get InstrumentCategory
	 * @return string
	 */
	public function getInstrumentCategory()
	{
		return $this->InstrumentCategory;
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