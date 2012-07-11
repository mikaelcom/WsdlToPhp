<?php
/**
 * Class file for AmazonAlexaTypeAccountType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeAccountType
 * @date 10/07/2012
 */
class AmazonAlexaTypeAccountType extends AmazonAlexaWsdlClass
{
	/**
	 * The Balance
	 * @var UnsignedIntegerType
	 */
	public $Balance;
	/**
	 * Constructor
	 * @param UnsignedIntegerType Balance
	 * @return AmazonAlexaTypeAccountType
	 */
	public function __construct($_Balance = null)
	{
		parent::__construct(array('Balance'=>$_Balance));
	}
	/**
	 * Set Balance
	 * @param UnsignedIntegerType Balance
	 * @return UnsignedIntegerType
	 */
	public function setBalance($_Balance)
	{
		return ($this->Balance = $_Balance);
	}
	/**
	 * Get Balance
	 * @return UnsignedIntegerType
	 */
	public function getBalance()
	{
		return $this->Balance;
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