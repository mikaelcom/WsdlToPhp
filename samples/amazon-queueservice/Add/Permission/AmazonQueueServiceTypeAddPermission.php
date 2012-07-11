<?php
/**
 * Class file for AmazonQueueServiceTypeAddPermission
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeAddPermission
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeAddPermission extends AmazonQueueServiceWsdlClass
{
	/**
	 * The Label
	 * @var string
	 */
	public $Label;
	/**
	 * The AWSAccountId
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $AWSAccountId;
	/**
	 * The ActionName
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ActionName;
	/**
	 * Constructor
	 * @param string Label
	 * @param string AWSAccountId
	 * @param string ActionName
	 * @return AmazonQueueServiceTypeAddPermission
	 */
	public function __construct($_Label = null,$_AWSAccountId = null,$_ActionName = null)
	{
		parent::__construct(array('Label'=>$_Label,'AWSAccountId'=>$_AWSAccountId,'ActionName'=>$_ActionName));
	}
	/**
	 * Set Label
	 * @param string Label
	 * @return string
	 */
	public function setLabel($_Label)
	{
		return ($this->Label = $_Label);
	}
	/**
	 * Get Label
	 * @return string
	 */
	public function getLabel()
	{
		return $this->Label;
	}
	/**
	 * Set AWSAccountId
	 * @param string AWSAccountId
	 * @return string
	 */
	public function setAWSAccountId($_AWSAccountId)
	{
		return ($this->AWSAccountId = $_AWSAccountId);
	}
	/**
	 * Get AWSAccountId
	 * @return string
	 */
	public function getAWSAccountId()
	{
		return $this->AWSAccountId;
	}
	/**
	 * Set ActionName
	 * @param string ActionName
	 * @return string
	 */
	public function setActionName($_ActionName)
	{
		return ($this->ActionName = $_ActionName);
	}
	/**
	 * Get ActionName
	 * @return string
	 */
	public function getActionName()
	{
		return $this->ActionName;
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