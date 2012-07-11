<?php
/**
 * Class file for AmazonFPSTypeWriteOffDebt
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeWriteOffDebt
 * @date 10/07/2012
 */
class AmazonFPSTypeWriteOffDebt extends AmazonFPSWsdlClass
{
	/**
	 * The CreditInstrumentId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CreditInstrumentId;
	/**
	 * The AdjustmentAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $AdjustmentAmount;
	/**
	 * The CallerReference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerReference;
	/**
	 * The CallerDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerDescription;
	/**
	 * Constructor
	 * @param string CreditInstrumentId
	 * @param AmazonFPSTypeAmount AdjustmentAmount
	 * @param string CallerReference
	 * @param string CallerDescription
	 * @return AmazonFPSTypeWriteOffDebt
	 */
	public function __construct($_CreditInstrumentId = null,$_AdjustmentAmount = null,$_CallerReference = null,$_CallerDescription = null)
	{
		parent::__construct(array('CreditInstrumentId'=>$_CreditInstrumentId,'AdjustmentAmount'=>$_AdjustmentAmount,'CallerReference'=>$_CallerReference,'CallerDescription'=>$_CallerDescription));
	}
	/**
	 * Set CreditInstrumentId
	 * @param string CreditInstrumentId
	 * @return string
	 */
	public function setCreditInstrumentId($_CreditInstrumentId)
	{
		return ($this->CreditInstrumentId = $_CreditInstrumentId);
	}
	/**
	 * Get CreditInstrumentId
	 * @return string
	 */
	public function getCreditInstrumentId()
	{
		return $this->CreditInstrumentId;
	}
	/**
	 * Set AdjustmentAmount
	 * @param Amount AdjustmentAmount
	 * @return Amount
	 */
	public function setAdjustmentAmount($_AdjustmentAmount)
	{
		return ($this->AdjustmentAmount = $_AdjustmentAmount);
	}
	/**
	 * Get AdjustmentAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getAdjustmentAmount()
	{
		return $this->AdjustmentAmount;
	}
	/**
	 * Set CallerReference
	 * @param string CallerReference
	 * @return string
	 */
	public function setCallerReference($_CallerReference)
	{
		return ($this->CallerReference = $_CallerReference);
	}
	/**
	 * Get CallerReference
	 * @return string
	 */
	public function getCallerReference()
	{
		return $this->CallerReference;
	}
	/**
	 * Set CallerDescription
	 * @param string CallerDescription
	 * @return string
	 */
	public function setCallerDescription($_CallerDescription)
	{
		return ($this->CallerDescription = $_CallerDescription);
	}
	/**
	 * Get CallerDescription
	 * @return string
	 */
	public function getCallerDescription()
	{
		return $this->CallerDescription;
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