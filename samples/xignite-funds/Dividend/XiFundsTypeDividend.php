<?php
/**
 * Class file for XiFundsTypeDividend
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeDividend
 * @date 08/07/2012
 */
class XiFundsTypeDividend extends XiFundsTypeCommon
{
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Amount;
	/**
	 * Constructor
	 * @param string Date
	 * @param double Amount
	 * @return XiFundsTypeDividend
	 */
	public function __construct($_Date = null,$_Amount)
	{
		XiFundsWsdlClass::__construct(array('Date'=>$_Date,'Amount'=>$_Amount));
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Amount
	 * @param double Amount
	 * @return double
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return double
	 */
	public function getAmount()
	{
		return $this->Amount;
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