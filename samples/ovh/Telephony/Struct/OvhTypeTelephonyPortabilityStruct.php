<?php
/**
 * Class file for OvhTypeTelephonyPortabilityStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPortabilityStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyPortabilityStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The planDate
	 * @var string
	 */
	public $planDate;
	/**
	 * The billingAccount
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The operator
	 * @var string
	 */
	public $operator;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The reason
	 * @var string
	 */
	public $reason;
	/**
	 * The askingCustomer
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $askingCustomer;
	/**
	 * The extraNumbers
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $extraNumbers;
	/**
	 * Constructor
	 * @param int id
	 * @param string number
	 * @param string name
	 * @param string planDate
	 * @param string billingAccount
	 * @param string type
	 * @param string operator
	 * @param string status
	 * @param string reason
	 * @param OvhTypeMyArrayOfStringType askingCustomer
	 * @param OvhTypeMyArrayOfStringType extraNumbers
	 * @return OvhTypeTelephonyPortabilityStruct
	 */
	public function __construct($_id = null,$_number = null,$_name = null,$_planDate = null,$_billingAccount = null,$_type = null,$_operator = null,$_status = null,$_reason = null,$_askingCustomer = null,$_extraNumbers = null)
	{
		parent::__construct(array('id'=>$_id,'number'=>$_number,'name'=>$_name,'planDate'=>$_planDate,'billingAccount'=>$_billingAccount,'type'=>$_type,'operator'=>$_operator,'status'=>$_status,'reason'=>$_reason,'askingCustomer'=>new OvhTypeMyArrayOfStringType($_askingCustomer),'extraNumbers'=>new OvhTypeMyArrayOfStringType($_extraNumbers)));
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
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set planDate
	 * @param string planDate
	 * @return string
	 */
	public function setPlanDate($_planDate)
	{
		return ($this->planDate = $_planDate);
	}
	/**
	 * Get planDate
	 * @return string
	 */
	public function getPlanDate()
	{
		return $this->planDate;
	}
	/**
	 * Set billingAccount
	 * @param string billingAccount
	 * @return string
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get billingAccount
	 * @return string
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set operator
	 * @param string operator
	 * @return string
	 */
	public function setOperator($_operator)
	{
		return ($this->operator = $_operator);
	}
	/**
	 * Get operator
	 * @return string
	 */
	public function getOperator()
	{
		return $this->operator;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set reason
	 * @param string reason
	 * @return string
	 */
	public function setReason($_reason)
	{
		return ($this->reason = $_reason);
	}
	/**
	 * Get reason
	 * @return string
	 */
	public function getReason()
	{
		return $this->reason;
	}
	/**
	 * Set askingCustomer
	 * @param MyArrayOfStringType askingCustomer
	 * @return MyArrayOfStringType
	 */
	public function setAskingCustomer($_askingCustomer)
	{
		return ($this->askingCustomer = $_askingCustomer);
	}
	/**
	 * Get askingCustomer
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getAskingCustomer()
	{
		return $this->askingCustomer;
	}
	/**
	 * Set extraNumbers
	 * @param MyArrayOfStringType extraNumbers
	 * @return MyArrayOfStringType
	 */
	public function setExtraNumbers($_extraNumbers)
	{
		return ($this->extraNumbers = $_extraNumbers);
	}
	/**
	 * Get extraNumbers
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getExtraNumbers()
	{
		return $this->extraNumbers;
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