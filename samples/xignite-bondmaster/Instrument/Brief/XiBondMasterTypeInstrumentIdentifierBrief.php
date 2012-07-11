<?php
/**
 * Class file for XiBondMasterTypeInstrumentIdentifierBrief
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeInstrumentIdentifierBrief
 * @date 08/07/2012
 */
class XiBondMasterTypeInstrumentIdentifierBrief extends XiBondMasterWsdlClass
{
	/**
	 * The Valoren
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Valoren;
	/**
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * The ISIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ISIN;
	/**
	 * Constructor
	 * @param string Valoren
	 * @param string CUSIP
	 * @param string ISIN
	 * @return XiBondMasterTypeInstrumentIdentifierBrief
	 */
	public function __construct($_Valoren = null,$_CUSIP = null,$_ISIN = null)
	{
		parent::__construct(array('Valoren'=>$_Valoren,'CUSIP'=>$_CUSIP,'ISIN'=>$_ISIN));
	}
	/**
	 * Set Valoren
	 * @param string Valoren
	 * @return string
	 */
	public function setValoren($_Valoren)
	{
		return ($this->Valoren = $_Valoren);
	}
	/**
	 * Get Valoren
	 * @return string
	 */
	public function getValoren()
	{
		return $this->Valoren;
	}
	/**
	 * Set CUSIP
	 * @param string CUSIP
	 * @return string
	 */
	public function setCUSIP($_CUSIP)
	{
		return ($this->CUSIP = $_CUSIP);
	}
	/**
	 * Get CUSIP
	 * @return string
	 */
	public function getCUSIP()
	{
		return $this->CUSIP;
	}
	/**
	 * Set ISIN
	 * @param string ISIN
	 * @return string
	 */
	public function setISIN($_ISIN)
	{
		return ($this->ISIN = $_ISIN);
	}
	/**
	 * Get ISIN
	 * @return string
	 */
	public function getISIN()
	{
		return $this->ISIN;
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