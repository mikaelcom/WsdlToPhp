<?php
/**
 * Class file for XiOFACTypeOFACName
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeOFACName
 * @date 08/07/2012
 */
class XiOFACTypeOFACName extends XiOFACTypeCommon
{
	/**
	 * The Id
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Id;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeOFACTypes
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
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The Remarks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Remarks;
	/**
	 * The Addresses
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeArrayOfOFACAddress
	 */
	public $Addresses;
	/**
	 * The AlternateNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeArrayOfOFACAlternateName
	 */
	public $AlternateNames;
	/**
	 * The Programs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeArrayOfSanctionProgram
	 */
	public $Programs;
	/**
	 * The Vessel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeVessel
	 */
	public $Vessel;
	/**
	 * The Score
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeScore
	 */
	public $Score;
	/**
	 * Constructor
	 * @param string Id
	 * @param XiOFACTypeOFACTypes Type
	 * @param string Name
	 * @param string Title
	 * @param string Remarks
	 * @param XiOFACTypeArrayOfOFACAddress Addresses
	 * @param XiOFACTypeArrayOfOFACAlternateName AlternateNames
	 * @param XiOFACTypeArrayOfSanctionProgram Programs
	 * @param XiOFACTypeVessel Vessel
	 * @param XiOFACTypeScore Score
	 * @return XiOFACTypeOFACName
	 */
	public function __construct($_Id = null,$_Type,$_Name = null,$_Title = null,$_Remarks = null,$_Addresses = null,$_AlternateNames = null,$_Programs = null,$_Vessel = null,$_Score = null)
	{
		XiOFACWsdlClass::__construct(array('Id'=>$_Id,'Type'=>$_Type,'Name'=>$_Name,'Title'=>$_Title,'Remarks'=>$_Remarks,'Addresses'=>new XiOFACTypeArrayOfOFACAddress($_Addresses),'AlternateNames'=>new XiOFACTypeArrayOfOFACAlternateName($_AlternateNames),'Programs'=>new XiOFACTypeArrayOfSanctionProgram($_Programs),'Vessel'=>$_Vessel,'Score'=>$_Score));
	}
	/**
	 * Set Id
	 * @param string Id
	 * @return string
	 */
	public function setId($_Id)
	{
		return ($this->Id = $_Id);
	}
	/**
	 * Get Id
	 * @return string
	 */
	public function getId()
	{
		return $this->Id;
	}
	/**
	 * Set Type
	 * @param OFACTypes Type
	 * @return OFACTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiOFACTypeOFACTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiOFACTypeOFACTypes
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
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
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
	 * Set Addresses
	 * @param ArrayOfOFACAddress Addresses
	 * @return ArrayOfOFACAddress
	 */
	public function setAddresses($_Addresses)
	{
		return ($this->Addresses = $_Addresses);
	}
	/**
	 * Get Addresses
	 * @return XiOFACTypeArrayOfOFACAddress
	 */
	public function getAddresses()
	{
		return $this->Addresses;
	}
	/**
	 * Set AlternateNames
	 * @param ArrayOfOFACAlternateName AlternateNames
	 * @return ArrayOfOFACAlternateName
	 */
	public function setAlternateNames($_AlternateNames)
	{
		return ($this->AlternateNames = $_AlternateNames);
	}
	/**
	 * Get AlternateNames
	 * @return XiOFACTypeArrayOfOFACAlternateName
	 */
	public function getAlternateNames()
	{
		return $this->AlternateNames;
	}
	/**
	 * Set Programs
	 * @param ArrayOfSanctionProgram Programs
	 * @return ArrayOfSanctionProgram
	 */
	public function setPrograms($_Programs)
	{
		return ($this->Programs = $_Programs);
	}
	/**
	 * Get Programs
	 * @return XiOFACTypeArrayOfSanctionProgram
	 */
	public function getPrograms()
	{
		return $this->Programs;
	}
	/**
	 * Set Vessel
	 * @param Vessel Vessel
	 * @return Vessel
	 */
	public function setVessel($_Vessel)
	{
		return ($this->Vessel = $_Vessel);
	}
	/**
	 * Get Vessel
	 * @return XiOFACTypeVessel
	 */
	public function getVessel()
	{
		return $this->Vessel;
	}
	/**
	 * Set Score
	 * @param Score Score
	 * @return Score
	 */
	public function setScore($_Score)
	{
		return ($this->Score = $_Score);
	}
	/**
	 * Get Score
	 * @return XiOFACTypeScore
	 */
	public function getScore()
	{
		return $this->Score;
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