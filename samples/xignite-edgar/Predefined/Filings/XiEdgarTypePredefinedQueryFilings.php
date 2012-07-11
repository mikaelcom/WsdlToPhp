<?php
/**
 * Class file for XiEdgarTypePredefinedQueryFilings
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypePredefinedQueryFilings
 * @date 08/07/2012
 */
class XiEdgarTypePredefinedQueryFilings extends XiEdgarWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The PredefinedQueryType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypePredefinedQueryTypes
	 */
	public $PredefinedQueryType;
	/**
	 * The FromDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromDate;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiEdgarTypeIdentifierTypes IdentifierType
	 * @param XiEdgarTypePredefinedQueryTypes PredefinedQueryType
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiEdgarTypePredefinedQueryFilings
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_PredefinedQueryType,$_FromDate = null,$_ToDate = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'PredefinedQueryType'=>$_PredefinedQueryType,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiEdgarTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiEdgarTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set PredefinedQueryType
	 * @param PredefinedQueryTypes PredefinedQueryType
	 * @return PredefinedQueryTypes
	 */
	public function setPredefinedQueryType($_PredefinedQueryType)
	{
		return ($this->PredefinedQueryType = XiEdgarTypePredefinedQueryTypes::valueIsValid($_PredefinedQueryType)?$_PredefinedQueryType:null);
	}
	/**
	 * Get PredefinedQueryType
	 * @return XiEdgarTypePredefinedQueryTypes
	 */
	public function getPredefinedQueryType()
	{
		return $this->PredefinedQueryType;
	}
	/**
	 * Set FromDate
	 * @param string FromDate
	 * @return string
	 */
	public function setFromDate($_FromDate)
	{
		return ($this->FromDate = $_FromDate);
	}
	/**
	 * Get FromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->FromDate;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
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