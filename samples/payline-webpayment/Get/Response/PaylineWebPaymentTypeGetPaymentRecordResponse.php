<?php
/**
 * Class file for PaylineWebPaymentTypeGetPaymentRecordResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetPaymentRecordResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetPaymentRecordResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The recurring
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeRecurring
	 */
	public $recurring;
	/**
	 * The isDisabled
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $isDisabled;
	/**
	 * The disableDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $disableDate;
	/**
	 * The billingRecordList
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeBillingRecordList
	 */
	public $billingRecordList;
	/**
	 * The privateDataList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePrivateDataList
	 */
	public $privateDataList;
	/**
	 * The order
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeOrder
	 */
	public $order;
	/**
	 * The walletId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $walletId;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeRecurring recurring
	 * @param string isDisabled
	 * @param string disableDate
	 * @param PaylineWebPaymentTypeBillingRecordList billingRecordList
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @param PaylineWebPaymentTypeOrder order
	 * @param string walletId
	 * @return PaylineWebPaymentTypeGetPaymentRecordResponse
	 */
	public function __construct($_result = null,$_recurring = null,$_isDisabled = null,$_disableDate = null,$_billingRecordList = null,$_privateDataList = null,$_order = null,$_walletId = null)
	{
		parent::__construct(array('result'=>$_result,'recurring'=>$_recurring,'isDisabled'=>$_isDisabled,'disableDate'=>$_disableDate,'billingRecordList'=>$_billingRecordList,'privateDataList'=>$_privateDataList,'order'=>$_order,'walletId'=>$_walletId));
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
	 * Set recurring
	 * @param recurring recurring
	 * @return recurring
	 */
	public function setRecurring($_recurring)
	{
		return ($this->recurring = $_recurring);
	}
	/**
	 * Get recurring
	 * @return PaylineWebPaymentTyperecurring
	 */
	public function getRecurring()
	{
		return $this->recurring;
	}
	/**
	 * Set isDisabled
	 * @param string isDisabled
	 * @return string
	 */
	public function setIsDisabled($_isDisabled)
	{
		return ($this->isDisabled = $_isDisabled);
	}
	/**
	 * Get isDisabled
	 * @return string
	 */
	public function getIsDisabled()
	{
		return $this->isDisabled;
	}
	/**
	 * Set disableDate
	 * @param string disableDate
	 * @return string
	 */
	public function setDisableDate($_disableDate)
	{
		return ($this->disableDate = $_disableDate);
	}
	/**
	 * Get disableDate
	 * @return string
	 */
	public function getDisableDate()
	{
		return $this->disableDate;
	}
	/**
	 * Set billingRecordList
	 * @param billingRecordList billingRecordList
	 * @return billingRecordList
	 */
	public function setBillingRecordList($_billingRecordList)
	{
		return ($this->billingRecordList = $_billingRecordList);
	}
	/**
	 * Get billingRecordList
	 * @return PaylineWebPaymentTypebillingRecordList
	 */
	public function getBillingRecordList()
	{
		return $this->billingRecordList;
	}
	/**
	 * Set privateDataList
	 * @param privateDataList privateDataList
	 * @return privateDataList
	 */
	public function setPrivateDataList($_privateDataList)
	{
		return ($this->privateDataList = $_privateDataList);
	}
	/**
	 * Get privateDataList
	 * @return PaylineWebPaymentTypeprivateDataList
	 */
	public function getPrivateDataList()
	{
		return $this->privateDataList;
	}
	/**
	 * Set order
	 * @param order order
	 * @return order
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return PaylineWebPaymentTypeorder
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set walletId
	 * @param string walletId
	 * @return string
	 */
	public function setWalletId($_walletId)
	{
		return ($this->walletId = $_walletId);
	}
	/**
	 * Get walletId
	 * @return string
	 */
	public function getWalletId()
	{
		return $this->walletId;
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