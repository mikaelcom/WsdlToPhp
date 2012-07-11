<?php
/**
 * Class file for EccShippingDhlTypeOptions
 * @date 03/07/2012
 */
/**
 * Class EccShippingDhlTypeOptions
 * @date 03/07/2012
 */
class EccShippingDhlTypeOptions extends EccShippingDhlWsdlClass
{
	/**
	 * The ShipDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShipDate;
	/**
	 * The ShipmentType1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShipmentType1;
	/**
	 * The ShipmentType2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShipmentType2;
	/**
	 * The Length
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Length;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Width;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Height;
	/**
	 * The AdditionalProtectionCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AdditionalProtectionCode;
	/**
	 * The SpecialService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SpecialService;
	/**
	 * The CODPaymentCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CODPaymentCode;
	/**
	 * The CODPaymentValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CODPaymentValue;
	/**
	 * The OverrideCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OverrideCode;
	/**
	 * The TransactionTrace
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TransactionTrace;
	/**
	 * The ContentDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ContentDesc;
	/**
	 * The DutiableFlag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DutiableFlag;
	/**
	 * The CustomsValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CustomsValue;
	/**
	 * The Mode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Mode;
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sort;
	/**
	 * Constructor
	 * @param string ShipDate
	 * @param string ShipmentType1
	 * @param string ShipmentType2
	 * @param string Length
	 * @param string Width
	 * @param string Height
	 * @param string AdditionalProtectionCode
	 * @param string SpecialService
	 * @param string CODPaymentCode
	 * @param string CODPaymentValue
	 * @param string OverrideCode
	 * @param string TransactionTrace
	 * @param string ContentDesc
	 * @param string DutiableFlag
	 * @param string CustomsValue
	 * @param string Mode
	 * @param string Sort
	 * @return EccShippingDhlTypeOptions
	 */
	public function __construct($_ShipDate = null,$_ShipmentType1 = null,$_ShipmentType2 = null,$_Length = null,$_Width = null,$_Height = null,$_AdditionalProtectionCode = null,$_SpecialService = null,$_CODPaymentCode = null,$_CODPaymentValue = null,$_OverrideCode = null,$_TransactionTrace = null,$_ContentDesc = null,$_DutiableFlag = null,$_CustomsValue = null,$_Mode = null,$_Sort = null)
	{
		parent::__construct(array('ShipDate'=>$_ShipDate,'ShipmentType1'=>$_ShipmentType1,'ShipmentType2'=>$_ShipmentType2,'Length'=>$_Length,'Width'=>$_Width,'Height'=>$_Height,'AdditionalProtectionCode'=>$_AdditionalProtectionCode,'SpecialService'=>$_SpecialService,'CODPaymentCode'=>$_CODPaymentCode,'CODPaymentValue'=>$_CODPaymentValue,'OverrideCode'=>$_OverrideCode,'TransactionTrace'=>$_TransactionTrace,'ContentDesc'=>$_ContentDesc,'DutiableFlag'=>$_DutiableFlag,'CustomsValue'=>$_CustomsValue,'Mode'=>$_Mode,'Sort'=>$_Sort));
	}
	/**
	 * Set ShipDate
	 * @param string ShipDate
	 * @return string
	 */
	public function setShipDate($_ShipDate)
	{
		return ($this->ShipDate = $_ShipDate);
	}
	/**
	 * Get ShipDate
	 * @return string
	 */
	public function getShipDate()
	{
		return $this->ShipDate;
	}
	/**
	 * Set ShipmentType1
	 * @param string ShipmentType1
	 * @return string
	 */
	public function setShipmentType1($_ShipmentType1)
	{
		return ($this->ShipmentType1 = $_ShipmentType1);
	}
	/**
	 * Get ShipmentType1
	 * @return string
	 */
	public function getShipmentType1()
	{
		return $this->ShipmentType1;
	}
	/**
	 * Set ShipmentType2
	 * @param string ShipmentType2
	 * @return string
	 */
	public function setShipmentType2($_ShipmentType2)
	{
		return ($this->ShipmentType2 = $_ShipmentType2);
	}
	/**
	 * Get ShipmentType2
	 * @return string
	 */
	public function getShipmentType2()
	{
		return $this->ShipmentType2;
	}
	/**
	 * Set Length
	 * @param string Length
	 * @return string
	 */
	public function setLength($_Length)
	{
		return ($this->Length = $_Length);
	}
	/**
	 * Get Length
	 * @return string
	 */
	public function getLength()
	{
		return $this->Length;
	}
	/**
	 * Set Width
	 * @param string Width
	 * @return string
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return string
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set Height
	 * @param string Height
	 * @return string
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return string
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set AdditionalProtectionCode
	 * @param string AdditionalProtectionCode
	 * @return string
	 */
	public function setAdditionalProtectionCode($_AdditionalProtectionCode)
	{
		return ($this->AdditionalProtectionCode = $_AdditionalProtectionCode);
	}
	/**
	 * Get AdditionalProtectionCode
	 * @return string
	 */
	public function getAdditionalProtectionCode()
	{
		return $this->AdditionalProtectionCode;
	}
	/**
	 * Set SpecialService
	 * @param string SpecialService
	 * @return string
	 */
	public function setSpecialService($_SpecialService)
	{
		return ($this->SpecialService = $_SpecialService);
	}
	/**
	 * Get SpecialService
	 * @return string
	 */
	public function getSpecialService()
	{
		return $this->SpecialService;
	}
	/**
	 * Set CODPaymentCode
	 * @param string CODPaymentCode
	 * @return string
	 */
	public function setCODPaymentCode($_CODPaymentCode)
	{
		return ($this->CODPaymentCode = $_CODPaymentCode);
	}
	/**
	 * Get CODPaymentCode
	 * @return string
	 */
	public function getCODPaymentCode()
	{
		return $this->CODPaymentCode;
	}
	/**
	 * Set CODPaymentValue
	 * @param string CODPaymentValue
	 * @return string
	 */
	public function setCODPaymentValue($_CODPaymentValue)
	{
		return ($this->CODPaymentValue = $_CODPaymentValue);
	}
	/**
	 * Get CODPaymentValue
	 * @return string
	 */
	public function getCODPaymentValue()
	{
		return $this->CODPaymentValue;
	}
	/**
	 * Set OverrideCode
	 * @param string OverrideCode
	 * @return string
	 */
	public function setOverrideCode($_OverrideCode)
	{
		return ($this->OverrideCode = $_OverrideCode);
	}
	/**
	 * Get OverrideCode
	 * @return string
	 */
	public function getOverrideCode()
	{
		return $this->OverrideCode;
	}
	/**
	 * Set TransactionTrace
	 * @param string TransactionTrace
	 * @return string
	 */
	public function setTransactionTrace($_TransactionTrace)
	{
		return ($this->TransactionTrace = $_TransactionTrace);
	}
	/**
	 * Get TransactionTrace
	 * @return string
	 */
	public function getTransactionTrace()
	{
		return $this->TransactionTrace;
	}
	/**
	 * Set ContentDesc
	 * @param string ContentDesc
	 * @return string
	 */
	public function setContentDesc($_ContentDesc)
	{
		return ($this->ContentDesc = $_ContentDesc);
	}
	/**
	 * Get ContentDesc
	 * @return string
	 */
	public function getContentDesc()
	{
		return $this->ContentDesc;
	}
	/**
	 * Set DutiableFlag
	 * @param string DutiableFlag
	 * @return string
	 */
	public function setDutiableFlag($_DutiableFlag)
	{
		return ($this->DutiableFlag = $_DutiableFlag);
	}
	/**
	 * Get DutiableFlag
	 * @return string
	 */
	public function getDutiableFlag()
	{
		return $this->DutiableFlag;
	}
	/**
	 * Set CustomsValue
	 * @param string CustomsValue
	 * @return string
	 */
	public function setCustomsValue($_CustomsValue)
	{
		return ($this->CustomsValue = $_CustomsValue);
	}
	/**
	 * Get CustomsValue
	 * @return string
	 */
	public function getCustomsValue()
	{
		return $this->CustomsValue;
	}
	/**
	 * Set Mode
	 * @param string Mode
	 * @return string
	 */
	public function setMode($_Mode)
	{
		return ($this->Mode = $_Mode);
	}
	/**
	 * Get Mode
	 * @return string
	 */
	public function getMode()
	{
		return $this->Mode;
	}
	/**
	 * Set Sort
	 * @param string Sort
	 * @return string
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = $_Sort);
	}
	/**
	 * Get Sort
	 * @return string
	 */
	public function getSort()
	{
		return $this->Sort;
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