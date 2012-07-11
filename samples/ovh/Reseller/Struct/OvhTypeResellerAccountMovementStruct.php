<?php
/**
 * Class file for OvhTypeResellerAccountMovementStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeResellerAccountMovementStruct
 * @date 02/07/2012
 */
class OvhTypeResellerAccountMovementStruct extends OvhWsdlClass
{
	/**
	 * The amount
	 * @var int
	 */
	public $amount;
	/**
	 * The balance
	 * @var int
	 */
	public $balance;
	/**
	 * The previousBalance
	 * @var int
	 */
	public $previousBalance;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * The order
	 * @var int
	 */
	public $order;
	/**
	 * Constructor
	 * @param int amount
	 * @param int balance
	 * @param int previousBalance
	 * @param string date
	 * @param string description
	 * @param string operation
	 * @param int order
	 * @return OvhTypeResellerAccountMovementStruct
	 */
	public function __construct($_amount = null,$_balance = null,$_previousBalance = null,$_date = null,$_description = null,$_operation = null,$_order = null)
	{
		parent::__construct(array('amount'=>$_amount,'balance'=>$_balance,'previousBalance'=>$_previousBalance,'date'=>$_date,'description'=>$_description,'operation'=>$_operation,'order'=>$_order));
	}
	/**
	 * Set amount
	 * @param int amount
	 * @return int
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get amount
	 * @return int
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set balance
	 * @param int balance
	 * @return int
	 */
	public function setBalance($_balance)
	{
		return ($this->balance = $_balance);
	}
	/**
	 * Get balance
	 * @return int
	 */
	public function getBalance()
	{
		return $this->balance;
	}
	/**
	 * Set previousBalance
	 * @param int previousBalance
	 * @return int
	 */
	public function setPreviousBalance($_previousBalance)
	{
		return ($this->previousBalance = $_previousBalance);
	}
	/**
	 * Get previousBalance
	 * @return int
	 */
	public function getPreviousBalance()
	{
		return $this->previousBalance;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>