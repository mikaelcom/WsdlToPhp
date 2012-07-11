<?php
/**
 * Class file for XiGlobalFundamentalsTypeMultiFundamental
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeMultiFundamental
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeMultiFundamental extends XiGlobalFundamentalsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeSecurity
	 */
	public $Security;
	/**
	 * The Fundamentals
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeArrayOfFundamental
	 */
	public $Fundamentals;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeSecurity Security
	 * @param XiGlobalFundamentalsTypeArrayOfFundamental Fundamentals
	 * @return XiGlobalFundamentalsTypeMultiFundamental
	 */
	public function __construct($_Security = null,$_Fundamentals = null)
	{
		XiGlobalFundamentalsWsdlClass::__construct(array('Security'=>$_Security,'Fundamentals'=>new XiGlobalFundamentalsTypeArrayOfFundamental($_Fundamentals)));
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
	 * @return XiGlobalFundamentalsTypeSecurity
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
	 * @return XiGlobalFundamentalsTypeArrayOfFundamental
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