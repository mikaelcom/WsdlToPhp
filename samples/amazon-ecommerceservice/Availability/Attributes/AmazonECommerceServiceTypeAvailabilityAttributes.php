<?php
/**
 * Class file for AmazonECommerceServiceTypeAvailabilityAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeAvailabilityAttributes
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeAvailabilityAttributes extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The AvailabilityType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AvailabilityType;
	/**
	 * The IsPreorder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IsPreorder;
	/**
	 * The MinimumHours
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $MinimumHours;
	/**
	 * The MaximumHours
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $MaximumHours;
	/**
	 * Constructor
	 * @param string AvailabilityType
	 * @param boolean IsPreorder
	 * @param integer MinimumHours
	 * @param integer MaximumHours
	 * @return AmazonECommerceServiceTypeAvailabilityAttributes
	 */
	public function __construct($_AvailabilityType = null,$_IsPreorder = null,$_MinimumHours = null,$_MaximumHours = null)
	{
		parent::__construct(array('AvailabilityType'=>$_AvailabilityType,'IsPreorder'=>$_IsPreorder,'MinimumHours'=>$_MinimumHours,'MaximumHours'=>$_MaximumHours));
	}
	/**
	 * Set AvailabilityType
	 * @param string AvailabilityType
	 * @return string
	 */
	public function setAvailabilityType($_AvailabilityType)
	{
		return ($this->AvailabilityType = $_AvailabilityType);
	}
	/**
	 * Get AvailabilityType
	 * @return string
	 */
	public function getAvailabilityType()
	{
		return $this->AvailabilityType;
	}
	/**
	 * Set IsPreorder
	 * @param boolean IsPreorder
	 * @return boolean
	 */
	public function setIsPreorder($_IsPreorder)
	{
		return ($this->IsPreorder = $_IsPreorder);
	}
	/**
	 * Get IsPreorder
	 * @return boolean
	 */
	public function getIsPreorder()
	{
		return $this->IsPreorder;
	}
	/**
	 * Set MinimumHours
	 * @param integer MinimumHours
	 * @return integer
	 */
	public function setMinimumHours($_MinimumHours)
	{
		return ($this->MinimumHours = $_MinimumHours);
	}
	/**
	 * Get MinimumHours
	 * @return integer
	 */
	public function getMinimumHours()
	{
		return $this->MinimumHours;
	}
	/**
	 * Set MaximumHours
	 * @param integer MaximumHours
	 * @return integer
	 */
	public function setMaximumHours($_MaximumHours)
	{
		return ($this->MaximumHours = $_MaximumHours);
	}
	/**
	 * Get MaximumHours
	 * @return integer
	 */
	public function getMaximumHours()
	{
		return $this->MaximumHours;
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