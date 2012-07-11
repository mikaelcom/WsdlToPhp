<?php
/**
 * Class file for XiCalendarTypeEventValue
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeEventValue
 * @date 08/07/2012
 */
class XiCalendarTypeEventValue extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The ValueName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValueName;
	/**
	 * The Consensus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Consensus;
	/**
	 * The Actual
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Actual;
	/**
	 * The Prefix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Prefix;
	/**
	 * The Suffix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Suffix;
	/**
	 * Constructor
	 * @param string ValueName
	 * @param string Consensus
	 * @param string Actual
	 * @param string Prefix
	 * @param string Suffix
	 * @return XiCalendarTypeEventValue
	 */
	public function __construct($_ValueName = null,$_Consensus = null,$_Actual = null,$_Prefix = null,$_Suffix = null)
	{
		XiCalendarWsdlClass::__construct(array('ValueName'=>$_ValueName,'Consensus'=>$_Consensus,'Actual'=>$_Actual,'Prefix'=>$_Prefix,'Suffix'=>$_Suffix));
	}
	/**
	 * Set ValueName
	 * @param string ValueName
	 * @return string
	 */
	public function setValueName($_ValueName)
	{
		return ($this->ValueName = $_ValueName);
	}
	/**
	 * Get ValueName
	 * @return string
	 */
	public function getValueName()
	{
		return $this->ValueName;
	}
	/**
	 * Set Consensus
	 * @param string Consensus
	 * @return string
	 */
	public function setConsensus($_Consensus)
	{
		return ($this->Consensus = $_Consensus);
	}
	/**
	 * Get Consensus
	 * @return string
	 */
	public function getConsensus()
	{
		return $this->Consensus;
	}
	/**
	 * Set Actual
	 * @param string Actual
	 * @return string
	 */
	public function setActual($_Actual)
	{
		return ($this->Actual = $_Actual);
	}
	/**
	 * Get Actual
	 * @return string
	 */
	public function getActual()
	{
		return $this->Actual;
	}
	/**
	 * Set Prefix
	 * @param string Prefix
	 * @return string
	 */
	public function setPrefix($_Prefix)
	{
		return ($this->Prefix = $_Prefix);
	}
	/**
	 * Get Prefix
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->Prefix;
	}
	/**
	 * Set Suffix
	 * @param string Suffix
	 * @return string
	 */
	public function setSuffix($_Suffix)
	{
		return ($this->Suffix = $_Suffix);
	}
	/**
	 * Get Suffix
	 * @return string
	 */
	public function getSuffix()
	{
		return $this->Suffix;
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