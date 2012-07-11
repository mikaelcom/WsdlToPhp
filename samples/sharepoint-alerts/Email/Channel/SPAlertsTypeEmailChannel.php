<?php
/**
 * Class file for SPAlertsTypeEmailChannel
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeEmailChannel
 * @date 06/07/2012
 */
class SPAlertsTypeEmailChannel extends SPAlertsWsdlClass
{
	/**
	 * The Frequency
	 * @var string
	 */
	public $Frequency;
	/**
	 * The Address
	 * @var string
	 */
	public $Address;
	/**
	 * Constructor
	 * @param string Frequency
	 * @param string Address
	 * @return SPAlertsTypeEmailChannel
	 */
	public function __construct($_Frequency = null,$_Address = null)
	{
		parent::__construct(array('Frequency'=>$_Frequency,'Address'=>$_Address));
	}
	/**
	 * Set Frequency
	 * @param string Frequency
	 * @return string
	 */
	public function setFrequency($_Frequency)
	{
		return ($this->Frequency = $_Frequency);
	}
	/**
	 * Get Frequency
	 * @return string
	 */
	public function getFrequency()
	{
		return $this->Frequency;
	}
	/**
	 * Set Address
	 * @param string Address
	 * @return string
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->Address;
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