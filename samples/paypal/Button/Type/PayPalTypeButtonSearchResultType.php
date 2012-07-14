<?php
/**
 * Class file for PayPalTypeButtonSearchResultType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeButtonSearchResultType
 * @date 14/07/2012
 */
class PayPalTypeButtonSearchResultType extends PayPalWsdlClass
{
	/**
	 * The HostedButtonID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The ButtonType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ButtonType;
	/**
	 * The ItemName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ItemName;
	/**
	 * The ModifyDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $ModifyDate;
	/**
	 * Constructor
	 * @param string HostedButtonID
	 * @param string ButtonType
	 * @param string ItemName
	 * @param dateTime ModifyDate
	 * @return PayPalTypeButtonSearchResultType
	 */
	public function __construct($_HostedButtonID = null,$_ButtonType = null,$_ItemName = null,$_ModifyDate = null)
	{
		parent::__construct(array('HostedButtonID'=>$_HostedButtonID,'ButtonType'=>$_ButtonType,'ItemName'=>$_ItemName,'ModifyDate'=>$_ModifyDate));
	}
	/**
	 * Set HostedButtonID
	 * @param string HostedButtonID
	 * @return string
	 */
	public function setHostedButtonID($_HostedButtonID)
	{
		return ($this->HostedButtonID = $_HostedButtonID);
	}
	/**
	 * Get HostedButtonID
	 * @return string
	 */
	public function getHostedButtonID()
	{
		return $this->HostedButtonID;
	}
	/**
	 * Set ButtonType
	 * @param string ButtonType
	 * @return string
	 */
	public function setButtonType($_ButtonType)
	{
		return ($this->ButtonType = $_ButtonType);
	}
	/**
	 * Get ButtonType
	 * @return string
	 */
	public function getButtonType()
	{
		return $this->ButtonType;
	}
	/**
	 * Set ItemName
	 * @param string ItemName
	 * @return string
	 */
	public function setItemName($_ItemName)
	{
		return ($this->ItemName = $_ItemName);
	}
	/**
	 * Get ItemName
	 * @return string
	 */
	public function getItemName()
	{
		return $this->ItemName;
	}
	/**
	 * Set ModifyDate
	 * @param dateTime ModifyDate
	 * @return dateTime
	 */
	public function setModifyDate($_ModifyDate)
	{
		return ($this->ModifyDate = $_ModifyDate);
	}
	/**
	 * Get ModifyDate
	 * @return dateTime
	 */
	public function getModifyDate()
	{
		return $this->ModifyDate;
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