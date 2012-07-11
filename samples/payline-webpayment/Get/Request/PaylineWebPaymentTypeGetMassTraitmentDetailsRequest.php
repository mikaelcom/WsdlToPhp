<?php
/**
 * Class file for PaylineWebPaymentTypeGetMassTraitmentDetailsRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetMassTraitmentDetailsRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetMassTraitmentDetailsRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The massTraitmentID
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $massTraitmentID;
	/**
	 * Constructor
	 * @param string massTraitmentID
	 * @return PaylineWebPaymentTypeGetMassTraitmentDetailsRequest
	 */
	public function __construct($_massTraitmentID = null)
	{
		parent::__construct(array('massTraitmentID'=>$_massTraitmentID));
	}
	/**
	 * Set massTraitmentID
	 * @param string massTraitmentID
	 * @return string
	 */
	public function setMassTraitmentID($_massTraitmentID)
	{
		return ($this->massTraitmentID = $_massTraitmentID);
	}
	/**
	 * Get massTraitmentID
	 * @return string
	 */
	public function getMassTraitmentID()
	{
		return $this->massTraitmentID;
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