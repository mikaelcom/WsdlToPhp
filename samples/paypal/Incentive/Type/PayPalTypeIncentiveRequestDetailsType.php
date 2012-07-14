<?php
/**
 * Class file for PayPalTypeIncentiveRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The RequestId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RequestId;
	/**
	 * The RequestType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeIncentiveRequestCodeType
	 */
	public $RequestType;
	/**
	 * The RequestDetailLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeIncentiveRequestDetailLevelCodeType
	 */
	public $RequestDetailLevel;
	/**
	 * Constructor
	 * @param string RequestId
	 * @param PayPalTypeIncentiveRequestCodeType RequestType
	 * @param PayPalTypeIncentiveRequestDetailLevelCodeType RequestDetailLevel
	 * @return PayPalTypeIncentiveRequestDetailsType
	 */
	public function __construct($_RequestId = null,$_RequestType = null,$_RequestDetailLevel = null)
	{
		parent::__construct(array('RequestId'=>$_RequestId,'RequestType'=>$_RequestType,'RequestDetailLevel'=>$_RequestDetailLevel));
	}
	/**
	 * Set RequestId
	 * @param string RequestId
	 * @return string
	 */
	public function setRequestId($_RequestId)
	{
		return ($this->RequestId = $_RequestId);
	}
	/**
	 * Get RequestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->RequestId;
	}
	/**
	 * Set RequestType
	 * @param IncentiveRequestCodeType RequestType
	 * @return IncentiveRequestCodeType
	 */
	public function setRequestType($_RequestType)
	{
		return ($this->RequestType = PayPalTypeIncentiveRequestCodeType::valueIsValid($_RequestType)?$_RequestType:null);
	}
	/**
	 * Get RequestType
	 * @return PayPalTypeIncentiveRequestCodeType
	 */
	public function getRequestType()
	{
		return $this->RequestType;
	}
	/**
	 * Set RequestDetailLevel
	 * @param IncentiveRequestDetailLevelCodeType RequestDetailLevel
	 * @return IncentiveRequestDetailLevelCodeType
	 */
	public function setRequestDetailLevel($_RequestDetailLevel)
	{
		return ($this->RequestDetailLevel = PayPalTypeIncentiveRequestDetailLevelCodeType::valueIsValid($_RequestDetailLevel)?$_RequestDetailLevel:null);
	}
	/**
	 * Get RequestDetailLevel
	 * @return PayPalTypeIncentiveRequestDetailLevelCodeType
	 */
	public function getRequestDetailLevel()
	{
		return $this->RequestDetailLevel;
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