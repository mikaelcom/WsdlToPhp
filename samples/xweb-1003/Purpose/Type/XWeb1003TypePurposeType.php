<?php
/**
 * Class file for XWeb1003TypePurposeType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypePurposeType
 * @date 09/07/2012
 */
class XWeb1003TypePurposeType extends XWeb1003WsdlClass
{
	/**
	 * The Type
	 * @var Type
	 */
	public $Type;
	/**
	 * The Type_Description
	 * @var Type_Description
	 */
	public $Type_Description;
	/**
	 * The Title_Holder_Name
	 * @var Title_Holder_Name
	 */
	public $Title_Holder_Name;
	/**
	 * The Manner_Title_Held
	 * @var Manner_Title_Held
	 */
	public $Manner_Title_Held;
	/**
	 * The Source_Of_Down_Payment
	 * @var Source_Of_Down_Payment
	 */
	public $Source_Of_Down_Payment;
	/**
	 * The Estate_Held
	 * @var Estate_Held
	 */
	public $Estate_Held;
	/**
	 * The Estate_Held_Description
	 * @var Estate_Held_Description
	 */
	public $Estate_Held_Description;
	/**
	 * The Construction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWeb1003TypeConstructionType
	 */
	public $Construction;
	/**
	 * The Refinance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWeb1003TypeRefinanceType
	 */
	public $Refinance;
	/**
	 * Constructor
	 * @param Type Type
	 * @param Type_Description Type_Description
	 * @param Title_Holder_Name Title_Holder_Name
	 * @param Manner_Title_Held Manner_Title_Held
	 * @param Source_Of_Down_Payment Source_Of_Down_Payment
	 * @param Estate_Held Estate_Held
	 * @param Estate_Held_Description Estate_Held_Description
	 * @param XWeb1003TypeConstructionType Construction
	 * @param XWeb1003TypeRefinanceType Refinance
	 * @return XWeb1003TypePurposeType
	 */
	public function __construct($_Type = null,$_Type_Description = null,$_Title_Holder_Name = null,$_Manner_Title_Held = null,$_Source_Of_Down_Payment = null,$_Estate_Held = null,$_Estate_Held_Description = null,$_Construction = null,$_Refinance = null)
	{
		parent::__construct(array('Type'=>$_Type,'Type_Description'=>$_Type_Description,'Title_Holder_Name'=>$_Title_Holder_Name,'Manner_Title_Held'=>$_Manner_Title_Held,'Source_Of_Down_Payment'=>$_Source_Of_Down_Payment,'Estate_Held'=>$_Estate_Held,'Estate_Held_Description'=>$_Estate_Held_Description,'Construction'=>$_Construction,'Refinance'=>$_Refinance));
	}
	/**
	 * Set Type
	 * @param Type Type
	 * @return Type
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return Type
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Type_Description
	 * @param Type_Description Type_Description
	 * @return Type_Description
	 */
	public function setType_Description($_Type_Description)
	{
		return ($this->Type_Description = $_Type_Description);
	}
	/**
	 * Get Type_Description
	 * @return Type_Description
	 */
	public function getType_Description()
	{
		return $this->Type_Description;
	}
	/**
	 * Set Title_Holder_Name
	 * @param Title_Holder_Name Title_Holder_Name
	 * @return Title_Holder_Name
	 */
	public function setTitle_Holder_Name($_Title_Holder_Name)
	{
		return ($this->Title_Holder_Name = $_Title_Holder_Name);
	}
	/**
	 * Get Title_Holder_Name
	 * @return Title_Holder_Name
	 */
	public function getTitle_Holder_Name()
	{
		return $this->Title_Holder_Name;
	}
	/**
	 * Set Manner_Title_Held
	 * @param Manner_Title_Held Manner_Title_Held
	 * @return Manner_Title_Held
	 */
	public function setManner_Title_Held($_Manner_Title_Held)
	{
		return ($this->Manner_Title_Held = $_Manner_Title_Held);
	}
	/**
	 * Get Manner_Title_Held
	 * @return Manner_Title_Held
	 */
	public function getManner_Title_Held()
	{
		return $this->Manner_Title_Held;
	}
	/**
	 * Set Source_Of_Down_Payment
	 * @param Source_Of_Down_Payment Source_Of_Down_Payment
	 * @return Source_Of_Down_Payment
	 */
	public function setSource_Of_Down_Payment($_Source_Of_Down_Payment)
	{
		return ($this->Source_Of_Down_Payment = $_Source_Of_Down_Payment);
	}
	/**
	 * Get Source_Of_Down_Payment
	 * @return Source_Of_Down_Payment
	 */
	public function getSource_Of_Down_Payment()
	{
		return $this->Source_Of_Down_Payment;
	}
	/**
	 * Set Estate_Held
	 * @param Estate_Held Estate_Held
	 * @return Estate_Held
	 */
	public function setEstate_Held($_Estate_Held)
	{
		return ($this->Estate_Held = $_Estate_Held);
	}
	/**
	 * Get Estate_Held
	 * @return Estate_Held
	 */
	public function getEstate_Held()
	{
		return $this->Estate_Held;
	}
	/**
	 * Set Estate_Held_Description
	 * @param Estate_Held_Description Estate_Held_Description
	 * @return Estate_Held_Description
	 */
	public function setEstate_Held_Description($_Estate_Held_Description)
	{
		return ($this->Estate_Held_Description = $_Estate_Held_Description);
	}
	/**
	 * Get Estate_Held_Description
	 * @return Estate_Held_Description
	 */
	public function getEstate_Held_Description()
	{
		return $this->Estate_Held_Description;
	}
	/**
	 * Set Construction
	 * @param ConstructionType Construction
	 * @return ConstructionType
	 */
	public function setConstruction($_Construction)
	{
		return ($this->Construction = $_Construction);
	}
	/**
	 * Get Construction
	 * @return XWeb1003TypeConstructionType
	 */
	public function getConstruction()
	{
		return $this->Construction;
	}
	/**
	 * Set Refinance
	 * @param RefinanceType Refinance
	 * @return RefinanceType
	 */
	public function setRefinance($_Refinance)
	{
		return ($this->Refinance = $_Refinance);
	}
	/**
	 * Get Refinance
	 * @return XWeb1003TypeRefinanceType
	 */
	public function getRefinance()
	{
		return $this->Refinance;
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