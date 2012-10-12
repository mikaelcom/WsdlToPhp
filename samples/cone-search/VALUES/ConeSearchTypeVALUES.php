<?php
/**
 * Class file for ConeSearchTypeVALUES
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeVALUES
 * @date 13/10/2012
 */
class ConeSearchTypeVALUES extends ConeSearchWsdlClass
{
	/**
	 * The MIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeMIN
	 */
	public $MIN;
	/**
	 * The MAX
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeMAX
	 */
	public $MAX;
	/**
	 * The OPTION
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeOPTION
	 */
	public $OPTION;
	/**
	 * The ID
	 * @var ID
	 */
	public $ID;
	/**
	 * The type
	 * Meta informations :
	 * 	- default : legal
	 * @var ConeSearchTypeVALUESType
	 */
	public $type;
	/**
	 * The null
	 * @var token
	 */
	public $null;
	/**
	 * The ref
	 * @var IDREF
	 */
	public $ref;
	/**
	 * Constructor
	 * @param ConeSearchTypeMIN MIN
	 * @param ConeSearchTypeMAX MAX
	 * @param ConeSearchTypeOPTION OPTION
	 * @param ID ID
	 * @param ConeSearchTypeVALUESType type
	 * @param token null
	 * @param IDREF ref
	 * @return ConeSearchTypeVALUES
	 */
	public function __construct($_MIN = null,$_MAX = null,$_OPTION = null,$_ID = null,$_type = 'legal',$_null = null,$_ref = null)
	{
		parent::__construct(array('MIN'=>$_MIN,'MAX'=>$_MAX,'OPTION'=>$_OPTION,'ID'=>$_ID,'type'=>$_type,'null'=>$_null,'ref'=>$_ref));
	}
	/**
	 * Set MIN
	 * @param MIN MIN
	 * @return MIN
	 */
	public function setMIN($_MIN)
	{
		return ($this->MIN = $_MIN);
	}
	/**
	 * Get MIN
	 * @return ConeSearchTypeMIN
	 */
	public function getMIN()
	{
		return $this->MIN;
	}
	/**
	 * Set MAX
	 * @param MAX MAX
	 * @return MAX
	 */
	public function setMAX($_MAX)
	{
		return ($this->MAX = $_MAX);
	}
	/**
	 * Get MAX
	 * @return ConeSearchTypeMAX
	 */
	public function getMAX()
	{
		return $this->MAX;
	}
	/**
	 * Set OPTION
	 * @param OPTION OPTION
	 * @return OPTION
	 */
	public function setOPTION($_OPTION)
	{
		return ($this->OPTION = $_OPTION);
	}
	/**
	 * Get OPTION
	 * @return ConeSearchTypeOPTION
	 */
	public function getOPTION()
	{
		return $this->OPTION;
	}
	/**
	 * Set ID
	 * @param ID ID
	 * @return ID
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return ID
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set type
	 * @param VALUESType type
	 * @return VALUESType
	 */
	public function setType($_type)
	{
		return ($this->type = ConeSearchTypeVALUESType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return ConeSearchTypeVALUESType
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set null
	 * @param token null
	 * @return token
	 */
	public function setNull($_null)
	{
		return ($this->null = $_null);
	}
	/**
	 * Get null
	 * @return token
	 */
	public function getNull()
	{
		return $this->null;
	}
	/**
	 * Set ref
	 * @param IDREF ref
	 * @return IDREF
	 */
	public function setRef($_ref)
	{
		return ($this->ref = $_ref);
	}
	/**
	 * Get ref
	 * @return IDREF
	 */
	public function getRef()
	{
		return $this->ref;
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