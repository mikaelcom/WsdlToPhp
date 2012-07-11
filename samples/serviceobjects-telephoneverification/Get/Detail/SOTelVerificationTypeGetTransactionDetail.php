<?php
/**
 * Class file for SOTelVerificationTypeGetTransactionDetail
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypeGetTransactionDetail
 * @date 08/07/2012
 */
class SOTelVerificationTypeGetTransactionDetail extends SOTelVerificationWsdlClass
{
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TransactionID;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param int TransactionID
	 * @param string LicenseKey
	 * @return SOTelVerificationTypeGetTransactionDetail
	 */
	public function __construct($_TransactionID,$_LicenseKey = null)
	{
		parent::__construct(array('TransactionID'=>$_TransactionID,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set TransactionID
	 * @param int TransactionID
	 * @return int
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return int
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
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