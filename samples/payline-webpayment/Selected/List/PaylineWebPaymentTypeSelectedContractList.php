<?php
/**
 * Class file for PaylineWebPaymentTypeSelectedContractList
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeSelectedContractList
 * Documentation : This element contains the list of selected card
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeSelectedContractList extends PaylineWebPaymentWsdlClass
{
	/**
	 * The selectedContract
	 * Meta informations :
	 * 	- maxOccurs : 25
	 * 	- minOccurs : 1
	 * @var string
	 */
	public $selectedContract;
	/**
	 * Constructor
	 * @param string selectedContract
	 * @return PaylineWebPaymentTypeSelectedContractList
	 */
	public function __construct($_selectedContract)
	{
		parent::__construct(array('selectedContract'=>$_selectedContract));
	}
	/**
	 * Set selectedContract
	 * @param string selectedContract
	 * @return string
	 */
	public function setSelectedContract($_selectedContract)
	{
		return ($this->selectedContract = $_selectedContract);
	}
	/**
	 * Get selectedContract
	 * @return string
	 */
	public function getSelectedContract()
	{
		return $this->selectedContract;
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