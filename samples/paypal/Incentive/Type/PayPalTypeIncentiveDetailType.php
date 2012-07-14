<?php
/**
 * Class file for PayPalTypeIncentiveDetailType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveDetailType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveDetailType extends PayPalWsdlClass
{
	/**
	 * The RedemptionCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RedemptionCode;
	/**
	 * The DisplayCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $DisplayCode;
	/**
	 * The ProgramId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ProgramId;
	/**
	 * The IncentiveType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeIncentiveTypeCodeType
	 */
	public $IncentiveType;
	/**
	 * The IncentiveDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IncentiveDescription;
	/**
	 * The AppliedTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeIncentiveAppliedToType
	 */
	public $AppliedTo;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Status;
	/**
	 * The ErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ErrorCode;
	/**
	 * Constructor
	 * @param string RedemptionCode
	 * @param string DisplayCode
	 * @param string ProgramId
	 * @param PayPalTypeIncentiveTypeCodeType IncentiveType
	 * @param string IncentiveDescription
	 * @param PayPalTypeIncentiveAppliedToType AppliedTo
	 * @param string Status
	 * @param string ErrorCode
	 * @return PayPalTypeIncentiveDetailType
	 */
	public function __construct($_RedemptionCode = null,$_DisplayCode = null,$_ProgramId = null,$_IncentiveType = null,$_IncentiveDescription = null,$_AppliedTo = null,$_Status = null,$_ErrorCode = null)
	{
		parent::__construct(array('RedemptionCode'=>$_RedemptionCode,'DisplayCode'=>$_DisplayCode,'ProgramId'=>$_ProgramId,'IncentiveType'=>$_IncentiveType,'IncentiveDescription'=>$_IncentiveDescription,'AppliedTo'=>$_AppliedTo,'Status'=>$_Status,'ErrorCode'=>$_ErrorCode));
	}
	/**
	 * Set RedemptionCode
	 * @param string RedemptionCode
	 * @return string
	 */
	public function setRedemptionCode($_RedemptionCode)
	{
		return ($this->RedemptionCode = $_RedemptionCode);
	}
	/**
	 * Get RedemptionCode
	 * @return string
	 */
	public function getRedemptionCode()
	{
		return $this->RedemptionCode;
	}
	/**
	 * Set DisplayCode
	 * @param string DisplayCode
	 * @return string
	 */
	public function setDisplayCode($_DisplayCode)
	{
		return ($this->DisplayCode = $_DisplayCode);
	}
	/**
	 * Get DisplayCode
	 * @return string
	 */
	public function getDisplayCode()
	{
		return $this->DisplayCode;
	}
	/**
	 * Set ProgramId
	 * @param string ProgramId
	 * @return string
	 */
	public function setProgramId($_ProgramId)
	{
		return ($this->ProgramId = $_ProgramId);
	}
	/**
	 * Get ProgramId
	 * @return string
	 */
	public function getProgramId()
	{
		return $this->ProgramId;
	}
	/**
	 * Set IncentiveType
	 * @param IncentiveTypeCodeType IncentiveType
	 * @return IncentiveTypeCodeType
	 */
	public function setIncentiveType($_IncentiveType)
	{
		return ($this->IncentiveType = PayPalTypeIncentiveTypeCodeType::valueIsValid($_IncentiveType)?$_IncentiveType:null);
	}
	/**
	 * Get IncentiveType
	 * @return PayPalTypeIncentiveTypeCodeType
	 */
	public function getIncentiveType()
	{
		return $this->IncentiveType;
	}
	/**
	 * Set IncentiveDescription
	 * @param string IncentiveDescription
	 * @return string
	 */
	public function setIncentiveDescription($_IncentiveDescription)
	{
		return ($this->IncentiveDescription = $_IncentiveDescription);
	}
	/**
	 * Get IncentiveDescription
	 * @return string
	 */
	public function getIncentiveDescription()
	{
		return $this->IncentiveDescription;
	}
	/**
	 * Set AppliedTo
	 * @param IncentiveAppliedToType AppliedTo
	 * @return IncentiveAppliedToType
	 */
	public function setAppliedTo($_AppliedTo)
	{
		return ($this->AppliedTo = $_AppliedTo);
	}
	/**
	 * Get AppliedTo
	 * @return PayPalTypeIncentiveAppliedToType
	 */
	public function getAppliedTo()
	{
		return $this->AppliedTo;
	}
	/**
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set ErrorCode
	 * @param string ErrorCode
	 * @return string
	 */
	public function setErrorCode($_ErrorCode)
	{
		return ($this->ErrorCode = $_ErrorCode);
	}
	/**
	 * Get ErrorCode
	 * @return string
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
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