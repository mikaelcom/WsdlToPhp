<?php
/**
 * Class file for XiFundDataTypeFundLoads
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundLoads
 * @date 08/07/2012
 */
class XiFundDataTypeFundLoads extends XiFundDataTypeCommon
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSecurity
	 */
	public $Security;
	/**
	 * The FrontEndLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $FrontEndLoad;
	/**
	 * The BackEndLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BackEndLoad;
	/**
	 * The BrokerFee
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BrokerFee;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param XiFundDataTypeSecurity Security
	 * @param double FrontEndLoad
	 * @param double BackEndLoad
	 * @param double BrokerFee
	 * @return XiFundDataTypeFundLoads
	 */
	public function __construct($_AsOfDate = null,$_Security = null,$_FrontEndLoad,$_BackEndLoad,$_BrokerFee)
	{
		XiFundDataWsdlClass::__construct(array('AsOfDate'=>$_AsOfDate,'Security'=>$_Security,'FrontEndLoad'=>$_FrontEndLoad,'BackEndLoad'=>$_BackEndLoad,'BrokerFee'=>$_BrokerFee));
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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
	 * @return XiFundDataTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set FrontEndLoad
	 * @param double FrontEndLoad
	 * @return double
	 */
	public function setFrontEndLoad($_FrontEndLoad)
	{
		return ($this->FrontEndLoad = $_FrontEndLoad);
	}
	/**
	 * Get FrontEndLoad
	 * @return double
	 */
	public function getFrontEndLoad()
	{
		return $this->FrontEndLoad;
	}
	/**
	 * Set BackEndLoad
	 * @param double BackEndLoad
	 * @return double
	 */
	public function setBackEndLoad($_BackEndLoad)
	{
		return ($this->BackEndLoad = $_BackEndLoad);
	}
	/**
	 * Get BackEndLoad
	 * @return double
	 */
	public function getBackEndLoad()
	{
		return $this->BackEndLoad;
	}
	/**
	 * Set BrokerFee
	 * @param double BrokerFee
	 * @return double
	 */
	public function setBrokerFee($_BrokerFee)
	{
		return ($this->BrokerFee = $_BrokerFee);
	}
	/**
	 * Get BrokerFee
	 * @return double
	 */
	public function getBrokerFee()
	{
		return $this->BrokerFee;
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