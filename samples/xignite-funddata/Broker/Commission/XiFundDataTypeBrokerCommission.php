<?php
/**
 * Class file for XiFundDataTypeBrokerCommission
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeBrokerCommission
 * @date 08/07/2012
 */
class XiFundDataTypeBrokerCommission extends XiFundDataWsdlClass
{
	/**
	 * The BrokerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BrokerName;
	/**
	 * The IRSNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IRSNumber;
	/**
	 * The GrossCommission
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrossCommission;
	/**
	 * Constructor
	 * @param string BrokerName
	 * @param string IRSNumber
	 * @param double GrossCommission
	 * @return XiFundDataTypeBrokerCommission
	 */
	public function __construct($_BrokerName = null,$_IRSNumber = null,$_GrossCommission)
	{
		parent::__construct(array('BrokerName'=>$_BrokerName,'IRSNumber'=>$_IRSNumber,'GrossCommission'=>$_GrossCommission));
	}
	/**
	 * Set BrokerName
	 * @param string BrokerName
	 * @return string
	 */
	public function setBrokerName($_BrokerName)
	{
		return ($this->BrokerName = $_BrokerName);
	}
	/**
	 * Get BrokerName
	 * @return string
	 */
	public function getBrokerName()
	{
		return $this->BrokerName;
	}
	/**
	 * Set IRSNumber
	 * @param string IRSNumber
	 * @return string
	 */
	public function setIRSNumber($_IRSNumber)
	{
		return ($this->IRSNumber = $_IRSNumber);
	}
	/**
	 * Get IRSNumber
	 * @return string
	 */
	public function getIRSNumber()
	{
		return $this->IRSNumber;
	}
	/**
	 * Set GrossCommission
	 * @param double GrossCommission
	 * @return double
	 */
	public function setGrossCommission($_GrossCommission)
	{
		return ($this->GrossCommission = $_GrossCommission);
	}
	/**
	 * Get GrossCommission
	 * @return double
	 */
	public function getGrossCommission()
	{
		return $this->GrossCommission;
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