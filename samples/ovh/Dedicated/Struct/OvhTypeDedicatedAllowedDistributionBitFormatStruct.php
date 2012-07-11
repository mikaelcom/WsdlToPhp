<?php
/**
 * Class file for OvhTypeDedicatedAllowedDistributionBitFormatStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedAllowedDistributionBitFormatStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedAllowedDistributionBitFormatStruct extends OvhWsdlClass
{
	/**
	 * The reference
	 * @var string
	 */
	public $reference;
	/**
	 * The bits
	 * @var int
	 */
	public $bits;
	/**
	 * Constructor
	 * @param string reference
	 * @param int bits
	 * @return OvhTypeDedicatedAllowedDistributionBitFormatStruct
	 */
	public function __construct($_reference = null,$_bits = null)
	{
		parent::__construct(array('reference'=>$_reference,'bits'=>$_bits));
	}
	/**
	 * Set reference
	 * @param string reference
	 * @return string
	 */
	public function setReference($_reference)
	{
		return ($this->reference = $_reference);
	}
	/**
	 * Get reference
	 * @return string
	 */
	public function getReference()
	{
		return $this->reference;
	}
	/**
	 * Set bits
	 * @param int bits
	 * @return int
	 */
	public function setBits($_bits)
	{
		return ($this->bits = $_bits);
	}
	/**
	 * Get bits
	 * @return int
	 */
	public function getBits()
	{
		return $this->bits;
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