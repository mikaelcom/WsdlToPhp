<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountInfoReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountInfoReturn extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The consumtionTime
	 * @var string
	 */
	public $consumtionTime;
	/**
	 * The outPlan
	 * @var string
	 */
	public $outPlan;
	/**
	 * The facturationDate
	 * @var string
	 */
	public $facturationDate;
	/**
	 * The children
	 * @var OvhTypeMyArrayOfTelephonyBillingAccountInfoChildrenStructType
	 */
	public $children;
	/**
	 * Constructor
	 * @param string name
	 * @param string description
	 * @param string offer
	 * @param string consumtionTime
	 * @param string outPlan
	 * @param string facturationDate
	 * @param OvhTypeMyArrayOfTelephonyBillingAccountInfoChildrenStructType children
	 * @return OvhTypeTelephonyBillingAccountInfoReturn
	 */
	public function __construct($_name = null,$_description = null,$_offer = null,$_consumtionTime = null,$_outPlan = null,$_facturationDate = null,$_children = null)
	{
		parent::__construct(array('name'=>$_name,'description'=>$_description,'offer'=>$_offer,'consumtionTime'=>$_consumtionTime,'outPlan'=>$_outPlan,'facturationDate'=>$_facturationDate,'children'=>new OvhTypeMyArrayOfTelephonyBillingAccountInfoChildrenStructType($_children)));
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
	 * Set offer
	 * @param string offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get offer
	 * @return string
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set consumtionTime
	 * @param string consumtionTime
	 * @return string
	 */
	public function setConsumtionTime($_consumtionTime)
	{
		return ($this->consumtionTime = $_consumtionTime);
	}
	/**
	 * Get consumtionTime
	 * @return string
	 */
	public function getConsumtionTime()
	{
		return $this->consumtionTime;
	}
	/**
	 * Set outPlan
	 * @param string outPlan
	 * @return string
	 */
	public function setOutPlan($_outPlan)
	{
		return ($this->outPlan = $_outPlan);
	}
	/**
	 * Get outPlan
	 * @return string
	 */
	public function getOutPlan()
	{
		return $this->outPlan;
	}
	/**
	 * Set facturationDate
	 * @param string facturationDate
	 * @return string
	 */
	public function setFacturationDate($_facturationDate)
	{
		return ($this->facturationDate = $_facturationDate);
	}
	/**
	 * Get facturationDate
	 * @return string
	 */
	public function getFacturationDate()
	{
		return $this->facturationDate;
	}
	/**
	 * Set children
	 * @param MyArrayOfTelephonyBillingAccountInfoChildrenStructType children
	 * @return MyArrayOfTelephonyBillingAccountInfoChildrenStructType
	 */
	public function setChildren($_children)
	{
		return ($this->children = $_children);
	}
	/**
	 * Get children
	 * @return OvhTypeMyArrayOfTelephonyBillingAccountInfoChildrenStructType
	 */
	public function getChildren()
	{
		return $this->children;
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