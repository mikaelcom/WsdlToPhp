<?php
/**
 * Class file for XiOFACTypeOFACAlternateName
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeOFACAlternateName
 * @date 08/07/2012
 */
class XiOFACTypeOFACAlternateName extends XiOFACWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeAlternateNameTypes
	 */
	public $Type;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Remarks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Remarks;
	/**
	 * Constructor
	 * @param XiOFACTypeAlternateNameTypes Type
	 * @param string Name
	 * @param string Remarks
	 * @return XiOFACTypeOFACAlternateName
	 */
	public function __construct($_Type,$_Name = null,$_Remarks = null)
	{
		parent::__construct(array('Type'=>$_Type,'Name'=>$_Name,'Remarks'=>$_Remarks));
	}
	/**
	 * Set Type
	 * @param AlternateNameTypes Type
	 * @return AlternateNameTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiOFACTypeAlternateNameTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiOFACTypeAlternateNameTypes
	 */
	public function getType()
	{
		return $this->Type;
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
	 * Set Remarks
	 * @param string Remarks
	 * @return string
	 */
	public function setRemarks($_Remarks)
	{
		return ($this->Remarks = $_Remarks);
	}
	/**
	 * Get Remarks
	 * @return string
	 */
	public function getRemarks()
	{
		return $this->Remarks;
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