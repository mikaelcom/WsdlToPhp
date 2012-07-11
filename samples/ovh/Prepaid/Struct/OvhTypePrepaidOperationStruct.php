<?php
/**
 * Class file for OvhTypePrepaidOperationStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypePrepaidOperationStruct
 * @date 02/07/2012
 */
class OvhTypePrepaidOperationStruct extends OvhWsdlClass
{
	/**
	 * The balance_forward
	 * @var float
	 */
	public $balance_forward;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The account_name
	 * @var string
	 */
	public $account_name;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The amount
	 * @var float
	 */
	public $amount;
	/**
	 * The balance
	 * @var float
	 */
	public $balance;
	/**
	 * The order
	 * @var int
	 */
	public $order;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * Constructor
	 * @param float balance_forward
	 * @param string date
	 * @param string nic
	 * @param string account_name
	 * @param string description
	 * @param float amount
	 * @param float balance
	 * @param int order
	 * @param int id
	 * @param string operation
	 * @return OvhTypePrepaidOperationStruct
	 */
	public function __construct($_balance_forward = null,$_date = null,$_nic = null,$_account_name = null,$_description = null,$_amount = null,$_balance = null,$_order = null,$_id = null,$_operation = null)
	{
		parent::__construct(array('balance_forward'=>$_balance_forward,'date'=>$_date,'nic'=>$_nic,'account_name'=>$_account_name,'description'=>$_description,'amount'=>$_amount,'balance'=>$_balance,'order'=>$_order,'id'=>$_id,'operation'=>$_operation));
	}
	/**
	 * Set balance_forward
	 * @param float balance_forward
	 * @return float
	 */
	public function setBalance_forward($_balance_forward)
	{
		return ($this->balance_forward = $_balance_forward);
	}
	/**
	 * Get balance_forward
	 * @return float
	 */
	public function getBalance_forward()
	{
		return $this->balance_forward;
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
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set account_name
	 * @param string account_name
	 * @return string
	 */
	public function setAccount_name($_account_name)
	{
		return ($this->account_name = $_account_name);
	}
	/**
	 * Get account_name
	 * @return string
	 */
	public function getAccount_name()
	{
		return $this->account_name;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set amount
	 * @param float amount
	 * @return float
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get amount
	 * @return float
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set balance
	 * @param float balance
	 * @return float
	 */
	public function setBalance($_balance)
	{
		return ($this->balance = $_balance);
	}
	/**
	 * Get balance
	 * @return float
	 */
	public function getBalance()
	{
		return $this->balance;
	}
	/**
	 * Set order
	 * @param int order
	 * @return int
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return int
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set operation
	 * @param string operation
	 * @return string
	 */
	public function setOperation($_operation)
	{
		return ($this->operation = $_operation);
	}
	/**
	 * Get operation
	 * @return string
	 */
	public function getOperation()
	{
		return $this->operation;
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