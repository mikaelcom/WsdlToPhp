<?php
/**
 * Class file for AmazonFPSTypeSettle
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeSettle
 * @date 10/07/2012
 */
class AmazonFPSTypeSettle extends AmazonFPSWsdlClass
{
	/**
	 * The ReserveTransactionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ReserveTransactionId;
	/**
	 * The TransactionAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $TransactionAmount;
	/**
	 * The OverrideIPNURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OverrideIPNURL;
	/**
	 * Constructor
	 * @param string ReserveTransactionId
	 * @param AmazonFPSTypeAmount TransactionAmount
	 * @param string OverrideIPNURL
	 * @return AmazonFPSTypeSettle
	 */
	public function __construct($_ReserveTransactionId = null,$_TransactionAmount = null,$_OverrideIPNURL = null)
	{
		parent::__construct(array('ReserveTransactionId'=>$_ReserveTransactionId,'TransactionAmount'=>$_TransactionAmount,'OverrideIPNURL'=>$_OverrideIPNURL));
	}
	/**
	 * Set ReserveTransactionId
	 * @param string ReserveTransactionId
	 * @return string
	 */
	public function setReserveTransactionId($_ReserveTransactionId)
	{
		return ($this->ReserveTransactionId = $_ReserveTransactionId);
	}
	/**
	 * Get ReserveTransactionId
	 * @return string
	 */
	public function getReserveTransactionId()
	{
		return $this->ReserveTransactionId;
	}
	/**
	 * Set TransactionAmount
	 * @param Amount TransactionAmount
	 * @return Amount
	 */
	public function setTransactionAmount($_TransactionAmount)
	{
		return ($this->TransactionAmount = $_TransactionAmount);
	}
	/**
	 * Get TransactionAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getTransactionAmount()
	{
		return $this->TransactionAmount;
	}
	/**
	 * Set OverrideIPNURL
	 * @param string OverrideIPNURL
	 * @return string
	 */
	public function setOverrideIPNURL($_OverrideIPNURL)
	{
		return ($this->OverrideIPNURL = $_OverrideIPNURL);
	}
	/**
	 * Get OverrideIPNURL
	 * @return string
	 */
	public function getOverrideIPNURL()
	{
		return $this->OverrideIPNURL;
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