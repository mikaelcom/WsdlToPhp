<?php
/**
 * Class file for XiEdgarTypeQueryResult
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeQueryResult
 * @date 08/07/2012
 */
class XiEdgarTypeQueryResult extends XiEdgarTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSecurity
	 */
	public $Security;
	/**
	 * The Filings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfShortFiling
	 */
	public $Filings;
	/**
	 * Constructor
	 * @param XiEdgarTypeSecurity Security
	 * @param XiEdgarTypeArrayOfShortFiling Filings
	 * @return XiEdgarTypeQueryResult
	 */
	public function __construct($_Security = null,$_Filings = null)
	{
		XiEdgarWsdlClass::__construct(array('Security'=>$_Security,'Filings'=>new XiEdgarTypeArrayOfShortFiling($_Filings)));
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
	 * @return XiEdgarTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Filings
	 * @param ArrayOfShortFiling Filings
	 * @return ArrayOfShortFiling
	 */
	public function setFilings($_Filings)
	{
		return ($this->Filings = $_Filings);
	}
	/**
	 * Get Filings
	 * @return XiEdgarTypeArrayOfShortFiling
	 */
	public function getFilings()
	{
		return $this->Filings;
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