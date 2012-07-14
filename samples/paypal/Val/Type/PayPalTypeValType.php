<?php
/**
 * Class file for PayPalTypeValType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeValType
 * @date 14/07/2012
 */
class PayPalTypeValType extends PayPalWsdlClass
{
	/**
	 * The ValueLiteral
	 * @var string
	 */
	public $ValueLiteral;
	/**
	 * The ValueID
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $ValueID;
	/**
	 * Constructor
	 * @param string ValueLiteral
	 * @param string ValueID
	 * @return PayPalTypeValType
	 */
	public function __construct($_ValueLiteral = null,$_ValueID = null)
	{
		parent::__construct(array('ValueLiteral'=>$_ValueLiteral,'ValueID'=>$_ValueID));
	}
	/**
	 * Set ValueLiteral
	 * @param string ValueLiteral
	 * @return string
	 */
	public function setValueLiteral($_ValueLiteral)
	{
		return ($this->ValueLiteral = $_ValueLiteral);
	}
	/**
	 * Get ValueLiteral
	 * @return string
	 */
	public function getValueLiteral()
	{
		return $this->ValueLiteral;
	}
	/**
	 * Set ValueID
	 * @param string ValueID
	 * @return string
	 */
	public function setValueID($_ValueID)
	{
		return ($this->ValueID = $_ValueID);
	}
	/**
	 * Get ValueID
	 * @return string
	 */
	public function getValueID()
	{
		return $this->ValueID;
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