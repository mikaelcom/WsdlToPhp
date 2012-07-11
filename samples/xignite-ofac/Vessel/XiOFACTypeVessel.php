<?php
/**
 * Class file for XiOFACTypeVessel
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeVessel
 * @date 08/07/2012
 */
class XiOFACTypeVessel extends XiOFACWsdlClass
{
	/**
	 * The CallSign
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CallSign;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The Tonnage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Tonnage;
	/**
	 * The GRT
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GRT;
	/**
	 * The Flag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Flag;
	/**
	 * The Owner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Owner;
	/**
	 * Constructor
	 * @param string CallSign
	 * @param string Type
	 * @param string Tonnage
	 * @param string GRT
	 * @param string Flag
	 * @param string Owner
	 * @return XiOFACTypeVessel
	 */
	public function __construct($_CallSign = null,$_Type = null,$_Tonnage = null,$_GRT = null,$_Flag = null,$_Owner = null)
	{
		parent::__construct(array('CallSign'=>$_CallSign,'Type'=>$_Type,'Tonnage'=>$_Tonnage,'GRT'=>$_GRT,'Flag'=>$_Flag,'Owner'=>$_Owner));
	}
	/**
	 * Set CallSign
	 * @param string CallSign
	 * @return string
	 */
	public function setCallSign($_CallSign)
	{
		return ($this->CallSign = $_CallSign);
	}
	/**
	 * Get CallSign
	 * @return string
	 */
	public function getCallSign()
	{
		return $this->CallSign;
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Tonnage
	 * @param string Tonnage
	 * @return string
	 */
	public function setTonnage($_Tonnage)
	{
		return ($this->Tonnage = $_Tonnage);
	}
	/**
	 * Get Tonnage
	 * @return string
	 */
	public function getTonnage()
	{
		return $this->Tonnage;
	}
	/**
	 * Set GRT
	 * @param string GRT
	 * @return string
	 */
	public function setGRT($_GRT)
	{
		return ($this->GRT = $_GRT);
	}
	/**
	 * Get GRT
	 * @return string
	 */
	public function getGRT()
	{
		return $this->GRT;
	}
	/**
	 * Set Flag
	 * @param string Flag
	 * @return string
	 */
	public function setFlag($_Flag)
	{
		return ($this->Flag = $_Flag);
	}
	/**
	 * Get Flag
	 * @return string
	 */
	public function getFlag()
	{
		return $this->Flag;
	}
	/**
	 * Set Owner
	 * @param string Owner
	 * @return string
	 */
	public function setOwner($_Owner)
	{
		return ($this->Owner = $_Owner);
	}
	/**
	 * Get Owner
	 * @return string
	 */
	public function getOwner()
	{
		return $this->Owner;
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