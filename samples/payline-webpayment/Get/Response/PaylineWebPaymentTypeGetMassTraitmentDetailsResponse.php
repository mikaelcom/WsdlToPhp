<?php
/**
 * Class file for PaylineWebPaymentTypeGetMassTraitmentDetailsResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetMassTraitmentDetailsResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetMassTraitmentDetailsResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The massTraitementID
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $massTraitementID;
	/**
	 * The totalLinesNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $totalLinesNumber;
	/**
	 * The failedLinesNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $failedLinesNumber;
	/**
	 * The failedListObject
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeFailedListObject
	 */
	public $failedListObject;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param string massTraitementID
	 * @param string totalLinesNumber
	 * @param string failedLinesNumber
	 * @param PaylineWebPaymentTypeFailedListObject failedListObject
	 * @return PaylineWebPaymentTypeGetMassTraitmentDetailsResponse
	 */
	public function __construct($_result = null,$_massTraitementID = null,$_totalLinesNumber = null,$_failedLinesNumber = null,$_failedListObject = null)
	{
		parent::__construct(array('result'=>$_result,'massTraitementID'=>$_massTraitementID,'totalLinesNumber'=>$_totalLinesNumber,'failedLinesNumber'=>$_failedLinesNumber,'failedListObject'=>$_failedListObject));
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
	 * Set massTraitementID
	 * @param string massTraitementID
	 * @return string
	 */
	public function setMassTraitementID($_massTraitementID)
	{
		return ($this->massTraitementID = $_massTraitementID);
	}
	/**
	 * Get massTraitementID
	 * @return string
	 */
	public function getMassTraitementID()
	{
		return $this->massTraitementID;
	}
	/**
	 * Set totalLinesNumber
	 * @param string totalLinesNumber
	 * @return string
	 */
	public function setTotalLinesNumber($_totalLinesNumber)
	{
		return ($this->totalLinesNumber = $_totalLinesNumber);
	}
	/**
	 * Get totalLinesNumber
	 * @return string
	 */
	public function getTotalLinesNumber()
	{
		return $this->totalLinesNumber;
	}
	/**
	 * Set failedLinesNumber
	 * @param string failedLinesNumber
	 * @return string
	 */
	public function setFailedLinesNumber($_failedLinesNumber)
	{
		return ($this->failedLinesNumber = $_failedLinesNumber);
	}
	/**
	 * Get failedLinesNumber
	 * @return string
	 */
	public function getFailedLinesNumber()
	{
		return $this->failedLinesNumber;
	}
	/**
	 * Set failedListObject
	 * @param failedListObject failedListObject
	 * @return failedListObject
	 */
	public function setFailedListObject($_failedListObject)
	{
		return ($this->failedListObject = $_failedListObject);
	}
	/**
	 * Get failedListObject
	 * @return PaylineWebPaymentTypefailedListObject
	 */
	public function getFailedListObject()
	{
		return $this->failedListObject;
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