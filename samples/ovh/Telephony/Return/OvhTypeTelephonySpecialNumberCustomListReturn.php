<?php
/**
 * Class file for OvhTypeTelephonySpecialNumberCustomListReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySpecialNumberCustomListReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonySpecialNumberCustomListReturn extends OvhWsdlClass
{
	/**
	 * The easyNumbers
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $easyNumbers;
	/**
	 * The staticAttributionRange
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $staticAttributionRange;
	/**
	 * The proposedNumbers
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $proposedNumbers;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfStringType easyNumbers
	 * @param OvhTypeMyArrayOfStringType staticAttributionRange
	 * @param OvhTypeMyArrayOfStringType proposedNumbers
	 * @return OvhTypeTelephonySpecialNumberCustomListReturn
	 */
	public function __construct($_easyNumbers = null,$_staticAttributionRange = null,$_proposedNumbers = null)
	{
		parent::__construct(array('easyNumbers'=>new OvhTypeMyArrayOfStringType($_easyNumbers),'staticAttributionRange'=>new OvhTypeMyArrayOfStringType($_staticAttributionRange),'proposedNumbers'=>new OvhTypeMyArrayOfStringType($_proposedNumbers)));
	}
	/**
	 * Set easyNumbers
	 * @param MyArrayOfStringType easyNumbers
	 * @return MyArrayOfStringType
	 */
	public function setEasyNumbers($_easyNumbers)
	{
		return ($this->easyNumbers = $_easyNumbers);
	}
	/**
	 * Get easyNumbers
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getEasyNumbers()
	{
		return $this->easyNumbers;
	}
	/**
	 * Set staticAttributionRange
	 * @param MyArrayOfStringType staticAttributionRange
	 * @return MyArrayOfStringType
	 */
	public function setStaticAttributionRange($_staticAttributionRange)
	{
		return ($this->staticAttributionRange = $_staticAttributionRange);
	}
	/**
	 * Get staticAttributionRange
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getStaticAttributionRange()
	{
		return $this->staticAttributionRange;
	}
	/**
	 * Set proposedNumbers
	 * @param MyArrayOfStringType proposedNumbers
	 * @return MyArrayOfStringType
	 */
	public function setProposedNumbers($_proposedNumbers)
	{
		return ($this->proposedNumbers = $_proposedNumbers);
	}
	/**
	 * Get proposedNumbers
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getProposedNumbers()
	{
		return $this->proposedNumbers;
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