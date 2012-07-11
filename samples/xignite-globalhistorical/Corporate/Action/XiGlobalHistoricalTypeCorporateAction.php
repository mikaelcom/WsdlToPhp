<?php
/**
 * Class file for XiGlobalHistoricalTypeCorporateAction
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeCorporateAction
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeCorporateAction extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The ActionDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ActionDate;
	/**
	 * The ValorenNew
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValorenNew;
	/**
	 * The ValorenOld
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValorenOld;
	/**
	 * The ExchangeIndicatorNew
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ExchangeIndicatorNew;
	/**
	 * The ExchangeIndicatorOld
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ExchangeIndicatorOld;
	/**
	 * The SecurityNameNew
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecurityNameNew;
	/**
	 * The SecurityNameOld
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecurityNameOld;
	/**
	 * The SymbolNew
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SymbolNew;
	/**
	 * The SymbolOld
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SymbolOld;
	/**
	 * The ISINNew
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ISINNew;
	/**
	 * The ISINOld
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ISINOld;
	/**
	 * The CUSIPNew
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIPNew;
	/**
	 * The CUSIPOld
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIPOld;
	/**
	 * The CorporateActionType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeCorporateActionTypes
	 */
	public $CorporateActionType;
	/**
	 * The DataConfidence
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var CorporateActionStatus
	 */
	public $DataConfidence;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param string ActionDate
	 * @param string ValorenNew
	 * @param string ValorenOld
	 * @param int ExchangeIndicatorNew
	 * @param int ExchangeIndicatorOld
	 * @param string SecurityNameNew
	 * @param string SecurityNameOld
	 * @param string SymbolNew
	 * @param string SymbolOld
	 * @param string ISINNew
	 * @param string ISINOld
	 * @param string CUSIPNew
	 * @param string CUSIPOld
	 * @param XiGlobalHistoricalTypeCorporateActionTypes CorporateActionType
	 * @param CorporateActionStatus DataConfidence
	 * @return XiGlobalHistoricalTypeCorporateAction
	 */
	public function __construct($_Security = null,$_ActionDate = null,$_ValorenNew = null,$_ValorenOld = null,$_ExchangeIndicatorNew,$_ExchangeIndicatorOld,$_SecurityNameNew = null,$_SecurityNameOld = null,$_SymbolNew = null,$_SymbolOld = null,$_ISINNew = null,$_ISINOld = null,$_CUSIPNew = null,$_CUSIPOld = null,$_CorporateActionType,$_DataConfidence)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'ActionDate'=>$_ActionDate,'ValorenNew'=>$_ValorenNew,'ValorenOld'=>$_ValorenOld,'ExchangeIndicatorNew'=>$_ExchangeIndicatorNew,'ExchangeIndicatorOld'=>$_ExchangeIndicatorOld,'SecurityNameNew'=>$_SecurityNameNew,'SecurityNameOld'=>$_SecurityNameOld,'SymbolNew'=>$_SymbolNew,'SymbolOld'=>$_SymbolOld,'ISINNew'=>$_ISINNew,'ISINOld'=>$_ISINOld,'CUSIPNew'=>$_CUSIPNew,'CUSIPOld'=>$_CUSIPOld,'CorporateActionType'=>$_CorporateActionType,'DataConfidence'=>$_DataConfidence));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiGlobalHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set ActionDate
	 * @param string ActionDate
	 * @return string
	 */
	public function setActionDate($_ActionDate)
	{
		return ($this->ActionDate = $_ActionDate);
	}
	/**
	 * Get ActionDate
	 * @return string
	 */
	public function getActionDate()
	{
		return $this->ActionDate;
	}
	/**
	 * Set ValorenNew
	 * @param string ValorenNew
	 * @return string
	 */
	public function setValorenNew($_ValorenNew)
	{
		return ($this->ValorenNew = $_ValorenNew);
	}
	/**
	 * Get ValorenNew
	 * @return string
	 */
	public function getValorenNew()
	{
		return $this->ValorenNew;
	}
	/**
	 * Set ValorenOld
	 * @param string ValorenOld
	 * @return string
	 */
	public function setValorenOld($_ValorenOld)
	{
		return ($this->ValorenOld = $_ValorenOld);
	}
	/**
	 * Get ValorenOld
	 * @return string
	 */
	public function getValorenOld()
	{
		return $this->ValorenOld;
	}
	/**
	 * Set ExchangeIndicatorNew
	 * @param int ExchangeIndicatorNew
	 * @return int
	 */
	public function setExchangeIndicatorNew($_ExchangeIndicatorNew)
	{
		return ($this->ExchangeIndicatorNew = $_ExchangeIndicatorNew);
	}
	/**
	 * Get ExchangeIndicatorNew
	 * @return int
	 */
	public function getExchangeIndicatorNew()
	{
		return $this->ExchangeIndicatorNew;
	}
	/**
	 * Set ExchangeIndicatorOld
	 * @param int ExchangeIndicatorOld
	 * @return int
	 */
	public function setExchangeIndicatorOld($_ExchangeIndicatorOld)
	{
		return ($this->ExchangeIndicatorOld = $_ExchangeIndicatorOld);
	}
	/**
	 * Get ExchangeIndicatorOld
	 * @return int
	 */
	public function getExchangeIndicatorOld()
	{
		return $this->ExchangeIndicatorOld;
	}
	/**
	 * Set SecurityNameNew
	 * @param string SecurityNameNew
	 * @return string
	 */
	public function setSecurityNameNew($_SecurityNameNew)
	{
		return ($this->SecurityNameNew = $_SecurityNameNew);
	}
	/**
	 * Get SecurityNameNew
	 * @return string
	 */
	public function getSecurityNameNew()
	{
		return $this->SecurityNameNew;
	}
	/**
	 * Set SecurityNameOld
	 * @param string SecurityNameOld
	 * @return string
	 */
	public function setSecurityNameOld($_SecurityNameOld)
	{
		return ($this->SecurityNameOld = $_SecurityNameOld);
	}
	/**
	 * Get SecurityNameOld
	 * @return string
	 */
	public function getSecurityNameOld()
	{
		return $this->SecurityNameOld;
	}
	/**
	 * Set SymbolNew
	 * @param string SymbolNew
	 * @return string
	 */
	public function setSymbolNew($_SymbolNew)
	{
		return ($this->SymbolNew = $_SymbolNew);
	}
	/**
	 * Get SymbolNew
	 * @return string
	 */
	public function getSymbolNew()
	{
		return $this->SymbolNew;
	}
	/**
	 * Set SymbolOld
	 * @param string SymbolOld
	 * @return string
	 */
	public function setSymbolOld($_SymbolOld)
	{
		return ($this->SymbolOld = $_SymbolOld);
	}
	/**
	 * Get SymbolOld
	 * @return string
	 */
	public function getSymbolOld()
	{
		return $this->SymbolOld;
	}
	/**
	 * Set ISINNew
	 * @param string ISINNew
	 * @return string
	 */
	public function setISINNew($_ISINNew)
	{
		return ($this->ISINNew = $_ISINNew);
	}
	/**
	 * Get ISINNew
	 * @return string
	 */
	public function getISINNew()
	{
		return $this->ISINNew;
	}
	/**
	 * Set ISINOld
	 * @param string ISINOld
	 * @return string
	 */
	public function setISINOld($_ISINOld)
	{
		return ($this->ISINOld = $_ISINOld);
	}
	/**
	 * Get ISINOld
	 * @return string
	 */
	public function getISINOld()
	{
		return $this->ISINOld;
	}
	/**
	 * Set CUSIPNew
	 * @param string CUSIPNew
	 * @return string
	 */
	public function setCUSIPNew($_CUSIPNew)
	{
		return ($this->CUSIPNew = $_CUSIPNew);
	}
	/**
	 * Get CUSIPNew
	 * @return string
	 */
	public function getCUSIPNew()
	{
		return $this->CUSIPNew;
	}
	/**
	 * Set CUSIPOld
	 * @param string CUSIPOld
	 * @return string
	 */
	public function setCUSIPOld($_CUSIPOld)
	{
		return ($this->CUSIPOld = $_CUSIPOld);
	}
	/**
	 * Get CUSIPOld
	 * @return string
	 */
	public function getCUSIPOld()
	{
		return $this->CUSIPOld;
	}
	/**
	 * Set CorporateActionType
	 * @param CorporateActionTypes CorporateActionType
	 * @return CorporateActionTypes
	 */
	public function setCorporateActionType($_CorporateActionType)
	{
		return ($this->CorporateActionType = XiGlobalHistoricalTypeCorporateActionTypes::valueIsValid($_CorporateActionType)?$_CorporateActionType:null);
	}
	/**
	 * Get CorporateActionType
	 * @return XiGlobalHistoricalTypeCorporateActionTypes
	 */
	public function getCorporateActionType()
	{
		return $this->CorporateActionType;
	}
	/**
	 * Set DataConfidence
	 * @param CorporateActionStatus DataConfidence
	 * @return CorporateActionStatus
	 */
	public function setDataConfidence($_DataConfidence)
	{
		return ($this->DataConfidence = $_DataConfidence);
	}
	/**
	 * Get DataConfidence
	 * @return CorporateActionStatus
	 */
	public function getDataConfidence()
	{
		return $this->DataConfidence;
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