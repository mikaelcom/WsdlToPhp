<?php
/**
 * Class file for XWeb1003TypeRefinanceType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeRefinanceType
 * @date 09/07/2012
 */
class XWeb1003TypeRefinanceType extends XWeb1003WsdlClass
{
	/**
	 * The Year_Acquired
	 * @var Year_Acquired
	 */
	public $Year_Acquired;
	/**
	 * The Original_Cost
	 * @var Original_Cost
	 */
	public $Original_Cost;
	/**
	 * The Amount_Existing_Liens
	 * @var Amount_Existing_Liens
	 */
	public $Amount_Existing_Liens;
	/**
	 * The Purpose
	 * @var Purpose
	 */
	public $Purpose;
	/**
	 * The Improvement_Type
	 * @var Improvement_Type
	 */
	public $Improvement_Type;
	/**
	 * The Improvements
	 * @var Improvements
	 */
	public $Improvements;
	/**
	 * The Improvements_Cost
	 * @var Improvements_Cost
	 */
	public $Improvements_Cost;
	/**
	 * Constructor
	 * @param Year_Acquired Year_Acquired
	 * @param Original_Cost Original_Cost
	 * @param Amount_Existing_Liens Amount_Existing_Liens
	 * @param Purpose Purpose
	 * @param Improvement_Type Improvement_Type
	 * @param Improvements Improvements
	 * @param Improvements_Cost Improvements_Cost
	 * @return XWeb1003TypeRefinanceType
	 */
	public function __construct($_Year_Acquired = null,$_Original_Cost = null,$_Amount_Existing_Liens = null,$_Purpose = null,$_Improvement_Type = null,$_Improvements = null,$_Improvements_Cost = null)
	{
		parent::__construct(array('Year_Acquired'=>$_Year_Acquired,'Original_Cost'=>$_Original_Cost,'Amount_Existing_Liens'=>$_Amount_Existing_Liens,'Purpose'=>$_Purpose,'Improvement_Type'=>$_Improvement_Type,'Improvements'=>$_Improvements,'Improvements_Cost'=>$_Improvements_Cost));
	}
	/**
	 * Set Year_Acquired
	 * @param Year_Acquired Year_Acquired
	 * @return Year_Acquired
	 */
	public function setYear_Acquired($_Year_Acquired)
	{
		return ($this->Year_Acquired = $_Year_Acquired);
	}
	/**
	 * Get Year_Acquired
	 * @return Year_Acquired
	 */
	public function getYear_Acquired()
	{
		return $this->Year_Acquired;
	}
	/**
	 * Set Original_Cost
	 * @param Original_Cost Original_Cost
	 * @return Original_Cost
	 */
	public function setOriginal_Cost($_Original_Cost)
	{
		return ($this->Original_Cost = $_Original_Cost);
	}
	/**
	 * Get Original_Cost
	 * @return Original_Cost
	 */
	public function getOriginal_Cost()
	{
		return $this->Original_Cost;
	}
	/**
	 * Set Amount_Existing_Liens
	 * @param Amount_Existing_Liens Amount_Existing_Liens
	 * @return Amount_Existing_Liens
	 */
	public function setAmount_Existing_Liens($_Amount_Existing_Liens)
	{
		return ($this->Amount_Existing_Liens = $_Amount_Existing_Liens);
	}
	/**
	 * Get Amount_Existing_Liens
	 * @return Amount_Existing_Liens
	 */
	public function getAmount_Existing_Liens()
	{
		return $this->Amount_Existing_Liens;
	}
	/**
	 * Set Purpose
	 * @param Purpose Purpose
	 * @return Purpose
	 */
	public function setPurpose($_Purpose)
	{
		return ($this->Purpose = $_Purpose);
	}
	/**
	 * Get Purpose
	 * @return Purpose
	 */
	public function getPurpose()
	{
		return $this->Purpose;
	}
	/**
	 * Set Improvement_Type
	 * @param Improvement_Type Improvement_Type
	 * @return Improvement_Type
	 */
	public function setImprovement_Type($_Improvement_Type)
	{
		return ($this->Improvement_Type = $_Improvement_Type);
	}
	/**
	 * Get Improvement_Type
	 * @return Improvement_Type
	 */
	public function getImprovement_Type()
	{
		return $this->Improvement_Type;
	}
	/**
	 * Set Improvements
	 * @param Improvements Improvements
	 * @return Improvements
	 */
	public function setImprovements($_Improvements)
	{
		return ($this->Improvements = $_Improvements);
	}
	/**
	 * Get Improvements
	 * @return Improvements
	 */
	public function getImprovements()
	{
		return $this->Improvements;
	}
	/**
	 * Set Improvements_Cost
	 * @param Improvements_Cost Improvements_Cost
	 * @return Improvements_Cost
	 */
	public function setImprovements_Cost($_Improvements_Cost)
	{
		return ($this->Improvements_Cost = $_Improvements_Cost);
	}
	/**
	 * Get Improvements_Cost
	 * @return Improvements_Cost
	 */
	public function getImprovements_Cost()
	{
		return $this->Improvements_Cost;
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