<?php
/**
 * Class file for XiVWAPTypeGetDelayedVWAP
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetDelayedVWAP
 * @date 08/07/2012
 */
class XiVWAPTypeGetDelayedVWAP extends XiVWAPWsdlClass
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
	 * @var XiVWAPTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The IncludeBeforeMarket
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IncludeBeforeMarket;
	/**
	 * The IncludeAfterMarket
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IncludeAfterMarket;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiVWAPTypeIdentifierTypes IdentifierType
	 * @param boolean IncludeBeforeMarket
	 * @param boolean IncludeAfterMarket
	 * @return XiVWAPTypeGetDelayedVWAP
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_IncludeBeforeMarket,$_IncludeAfterMarket)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'IncludeBeforeMarket'=>$_IncludeBeforeMarket,'IncludeAfterMarket'=>$_IncludeAfterMarket));
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
		return ($this->IdentifierType = XiVWAPTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiVWAPTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set IncludeBeforeMarket
	 * @param boolean IncludeBeforeMarket
	 * @return boolean
	 */
	public function setIncludeBeforeMarket($_IncludeBeforeMarket)
	{
		return ($this->IncludeBeforeMarket = $_IncludeBeforeMarket);
	}
	/**
	 * Get IncludeBeforeMarket
	 * @return boolean
	 */
	public function getIncludeBeforeMarket()
	{
		return $this->IncludeBeforeMarket;
	}
	/**
	 * Set IncludeAfterMarket
	 * @param boolean IncludeAfterMarket
	 * @return boolean
	 */
	public function setIncludeAfterMarket($_IncludeAfterMarket)
	{
		return ($this->IncludeAfterMarket = $_IncludeAfterMarket);
	}
	/**
	 * Get IncludeAfterMarket
	 * @return boolean
	 */
	public function getIncludeAfterMarket()
	{
		return $this->IncludeAfterMarket;
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