<?php
/**
 * Class file for PayPalTypeManagePendingTransactionStatusRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeManagePendingTransactionStatusRequestType
 * @date 14/07/2012
 */
class PayPalTypeManagePendingTransactionStatusRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var PayPalTypeTransactionId
	 */
	public $TransactionID;
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var PayPalTypeFMFPendingTransactionActionType
	 */
	public $Action;
	/**
	 * Constructor
	 * @param PayPalTypeTransactionId TransactionID
	 * @param PayPalTypeFMFPendingTransactionActionType Action
	 * @return PayPalTypeManagePendingTransactionStatusRequestType
	 */
	public function __construct($_TransactionID,$_Action)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_TransactionID,'Action'=>$_Action));
	}
	/**
	 * Set TransactionID
	 * @param TransactionId TransactionID
	 * @return TransactionId
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = PayPalTypeTransactionId::valueIsValid($_TransactionID)?$_TransactionID:null);
	}
	/**
	 * Get TransactionID
	 * @return PayPalTypeTransactionId
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set Action
	 * @param FMFPendingTransactionActionType Action
	 * @return FMFPendingTransactionActionType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = PayPalTypeFMFPendingTransactionActionType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return PayPalTypeFMFPendingTransactionActionType
	 */
	public function getAction()
	{
		return $this->Action;
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