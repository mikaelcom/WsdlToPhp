<?php
/**
 * Class file for XiQuotesTypeIndex
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeIndex
 * @date 08/07/2012
 */
class XiQuotesTypeIndex extends XiQuotesWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Change;
	/**
	 * The PercentChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PercentChange;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * Constructor
	 * @param string Name
	 * @param double Value
	 * @param double Change
	 * @param string PercentChange
	 * @param string Url
	 * @return XiQuotesTypeIndex
	 */
	public function __construct($_Name = null,$_Value,$_Change,$_PercentChange = null,$_Url = null)
	{
		parent::__construct(array('Name'=>$_Name,'Value'=>$_Value,'Change'=>$_Change,'PercentChange'=>$_PercentChange,'Url'=>$_Url));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Change
	 * @param double Change
	 * @return double
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return double
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Set PercentChange
	 * @param string PercentChange
	 * @return string
	 */
	public function setPercentChange($_PercentChange)
	{
		return ($this->PercentChange = $_PercentChange);
	}
	/**
	 * Get PercentChange
	 * @return string
	 */
	public function getPercentChange()
	{
		return $this->PercentChange;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
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