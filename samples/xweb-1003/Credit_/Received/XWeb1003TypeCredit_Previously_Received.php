<?php
/**
 * Class file for XWeb1003TypeCredit_Previously_Received
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeCredit_Previously_Received
 * @date 09/07/2012
 */
class XWeb1003TypeCredit_Previously_Received extends XWeb1003WsdlClass
{
	/**
	 * The Credit_Received
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWeb1003TypeCreditReceivedType
	 */
	public $Credit_Received;
	/**
	 * Constructor
	 * @param XWeb1003TypeCreditReceivedType Credit_Received
	 * @return XWeb1003TypeCredit_Previously_Received
	 */
	public function __construct($_Credit_Received = null)
	{
		parent::__construct(array('Credit_Received'=>$_Credit_Received));
	}
	/**
	 * Set Credit_Received
	 * @param CreditReceivedType Credit_Received
	 * @return CreditReceivedType
	 */
	public function setCredit_Received($_Credit_Received)
	{
		return ($this->Credit_Received = $_Credit_Received);
	}
	/**
	 * Get Credit_Received
	 * @return XWeb1003TypeCreditReceivedType
	 */
	public function getCredit_Received()
	{
		return $this->Credit_Received;
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