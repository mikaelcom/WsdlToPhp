<?php
/**
 * Class file for PayPalTypeIncentiveAppliedToType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveAppliedToType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveAppliedToType extends PayPalWsdlClass
{
	/**
	 * The BucketId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $BucketId;
	/**
	 * The ItemId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ItemId;
	/**
	 * The IncentiveAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $IncentiveAmount;
	/**
	 * The SubType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SubType;
	/**
	 * Constructor
	 * @param string BucketId
	 * @param string ItemId
	 * @param PayPalTypeBasicAmountType IncentiveAmount
	 * @param string SubType
	 * @return PayPalTypeIncentiveAppliedToType
	 */
	public function __construct($_BucketId = null,$_ItemId = null,$_IncentiveAmount = null,$_SubType = null)
	{
		parent::__construct(array('BucketId'=>$_BucketId,'ItemId'=>$_ItemId,'IncentiveAmount'=>$_IncentiveAmount,'SubType'=>$_SubType));
	}
	/**
	 * Set BucketId
	 * @param string BucketId
	 * @return string
	 */
	public function setBucketId($_BucketId)
	{
		return ($this->BucketId = $_BucketId);
	}
	/**
	 * Get BucketId
	 * @return string
	 */
	public function getBucketId()
	{
		return $this->BucketId;
	}
	/**
	 * Set ItemId
	 * @param string ItemId
	 * @return string
	 */
	public function setItemId($_ItemId)
	{
		return ($this->ItemId = $_ItemId);
	}
	/**
	 * Get ItemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->ItemId;
	}
	/**
	 * Set IncentiveAmount
	 * @param BasicAmountType IncentiveAmount
	 * @return BasicAmountType
	 */
	public function setIncentiveAmount($_IncentiveAmount)
	{
		return ($this->IncentiveAmount = $_IncentiveAmount);
	}
	/**
	 * Get IncentiveAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getIncentiveAmount()
	{
		return $this->IncentiveAmount;
	}
	/**
	 * Set SubType
	 * @param string SubType
	 * @return string
	 */
	public function setSubType($_SubType)
	{
		return ($this->SubType = $_SubType);
	}
	/**
	 * Get SubType
	 * @return string
	 */
	public function getSubType()
	{
		return $this->SubType;
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