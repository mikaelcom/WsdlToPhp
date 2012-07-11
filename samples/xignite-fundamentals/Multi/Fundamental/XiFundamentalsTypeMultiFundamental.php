<?php
/**
 * Class file for XiFundamentalsTypeMultiFundamental
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeMultiFundamental
 * @date 08/07/2012
 */
class XiFundamentalsTypeMultiFundamental extends XiFundamentalsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeSecurity
	 */
	public $Security;
	/**
	 * The Fundamentals
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeArrayOfFundamental
	 */
	public $Fundamentals;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeSecurity Security
	 * @param XiFundamentalsTypeArrayOfFundamental Fundamentals
	 * @return XiFundamentalsTypeMultiFundamental
	 */
	public function __construct($_Security = null,$_Fundamentals = null)
	{
		XiFundamentalsWsdlClass::__construct(array('Security'=>$_Security,'Fundamentals'=>new XiFundamentalsTypeArrayOfFundamental($_Fundamentals)));
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
	 * @return XiFundamentalsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Fundamentals
	 * @param ArrayOfFundamental Fundamentals
	 * @return ArrayOfFundamental
	 */
	public function setFundamentals($_Fundamentals)
	{
		return ($this->Fundamentals = $_Fundamentals);
	}
	/**
	 * Get Fundamentals
	 * @return XiFundamentalsTypeArrayOfFundamental
	 */
	public function getFundamentals()
	{
		return $this->Fundamentals;
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