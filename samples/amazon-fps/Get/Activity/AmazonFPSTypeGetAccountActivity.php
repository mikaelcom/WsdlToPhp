<?php
/**
 * Class file for AmazonFPSTypeGetAccountActivity
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetAccountActivity
 * @date 10/07/2012
 */
class AmazonFPSTypeGetAccountActivity extends AmazonFPSWsdlClass
{
	/**
	 * The MaxBatchSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $MaxBatchSize;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * The SortOrderByDate
	 * Meta informations :
	 * 	- default : Descending
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeSortOrder
	 */
	public $SortOrderByDate;
	/**
	 * The FPSOperation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeFPSOperation
	 */
	public $FPSOperation;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypePaymentMethod
	 */
	public $PaymentMethod;
	/**
	 * The Role
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeTransactionalRole
	 */
	public $Role;
	/**
	 * The TransactionStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeTransactionStatus
	 */
	public $TransactionStatus;
	/**
	 * Constructor
	 * @param integer MaxBatchSize
	 * @param dateTime StartDate
	 * @param dateTime EndDate
	 * @param AmazonFPSTypeSortOrder SortOrderByDate
	 * @param AmazonFPSTypeFPSOperation FPSOperation
	 * @param AmazonFPSTypePaymentMethod PaymentMethod
	 * @param AmazonFPSTypeTransactionalRole Role
	 * @param AmazonFPSTypeTransactionStatus TransactionStatus
	 * @return AmazonFPSTypeGetAccountActivity
	 */
	public function __construct($_MaxBatchSize = null,$_StartDate = null,$_EndDate = null,$_SortOrderByDate = 'Descending',$_FPSOperation = null,$_PaymentMethod = null,$_Role = null,$_TransactionStatus = null)
	{
		parent::__construct(array('MaxBatchSize'=>$_MaxBatchSize,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'SortOrderByDate'=>$_SortOrderByDate,'FPSOperation'=>$_FPSOperation,'PaymentMethod'=>$_PaymentMethod,'Role'=>$_Role,'TransactionStatus'=>$_TransactionStatus));
	}
	/**
	 * Set MaxBatchSize
	 * @param integer MaxBatchSize
	 * @return integer
	 */
	public function setMaxBatchSize($_MaxBatchSize)
	{
		return ($this->MaxBatchSize = $_MaxBatchSize);
	}
	/**
	 * Get MaxBatchSize
	 * @return integer
	 */
	public function getMaxBatchSize()
	{
		return $this->MaxBatchSize;
	}
	/**
	 * Set StartDate
	 * @param dateTime StartDate
	 * @return dateTime
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return dateTime
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param dateTime EndDate
	 * @return dateTime
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return dateTime
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set SortOrderByDate
	 * @param SortOrder SortOrderByDate
	 * @return SortOrder
	 */
	public function setSortOrderByDate($_SortOrderByDate)
	{
		return ($this->SortOrderByDate = AmazonFPSTypeSortOrder::valueIsValid($_SortOrderByDate)?$_SortOrderByDate:null);
	}
	/**
	 * Get SortOrderByDate
	 * @return AmazonFPSTypeSortOrder
	 */
	public function getSortOrderByDate()
	{
		return $this->SortOrderByDate;
	}
	/**
	 * Set FPSOperation
	 * @param FPSOperation FPSOperation
	 * @return FPSOperation
	 */
	public function setFPSOperation($_FPSOperation)
	{
		return ($this->FPSOperation = AmazonFPSTypeFPSOperation::valueIsValid($_FPSOperation)?$_FPSOperation:null);
	}
	/**
	 * Get FPSOperation
	 * @return AmazonFPSTypeFPSOperation
	 */
	public function getFPSOperation()
	{
		return $this->FPSOperation;
	}
	/**
	 * Set PaymentMethod
	 * @param PaymentMethod PaymentMethod
	 * @return PaymentMethod
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = AmazonFPSTypePaymentMethod::valueIsValid($_PaymentMethod)?$_PaymentMethod:null);
	}
	/**
	 * Get PaymentMethod
	 * @return AmazonFPSTypePaymentMethod
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * Set Role
	 * @param TransactionalRole Role
	 * @return TransactionalRole
	 */
	public function setRole($_Role)
	{
		return ($this->Role = AmazonFPSTypeTransactionalRole::valueIsValid($_Role)?$_Role:null);
	}
	/**
	 * Get Role
	 * @return AmazonFPSTypeTransactionalRole
	 */
	public function getRole()
	{
		return $this->Role;
	}
	/**
	 * Set TransactionStatus
	 * @param TransactionStatus TransactionStatus
	 * @return TransactionStatus
	 */
	public function setTransactionStatus($_TransactionStatus)
	{
		return ($this->TransactionStatus = AmazonFPSTypeTransactionStatus::valueIsValid($_TransactionStatus)?$_TransactionStatus:null);
	}
	/**
	 * Get TransactionStatus
	 * @return AmazonFPSTypeTransactionStatus
	 */
	public function getTransactionStatus()
	{
		return $this->TransactionStatus;
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