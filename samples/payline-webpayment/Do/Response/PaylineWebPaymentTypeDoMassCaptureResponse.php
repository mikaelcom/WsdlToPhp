<?php
/**
 * Class file for PaylineWebPaymentTypeDoMassCaptureResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoMassCaptureResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoMassCaptureResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The massTraitmentID
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $massTraitmentID;
	/**
	 * The date
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $date;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param string massTraitmentID
	 * @param string date
	 * @return PaylineWebPaymentTypeDoMassCaptureResponse
	 */
	public function __construct($_result = null,$_massTraitmentID = null,$_date = null)
	{
		parent::__construct(array('result'=>$_result,'massTraitmentID'=>$_massTraitmentID,'date'=>$_date));
	}
	/**
	 * Set result
	 * @param result result
	 * @return result
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return PaylineWebPaymentTyperesult
	 */
	public function getResult()
	{
		return $this->result;
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
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
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