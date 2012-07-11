<?php
/**
 * Class file for XWeb1003TypeConstructionType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeConstructionType
 * @date 09/07/2012
 */
class XWeb1003TypeConstructionType extends XWeb1003WsdlClass
{
	/**
	 * The Year_Lot_Acquired
	 * @var Year_Lot_Acquired
	 */
	public $Year_Lot_Acquired;
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
	 * The Present_Value_Of_Lot
	 * @var Present_Value_Of_Lot
	 */
	public $Present_Value_Of_Lot;
	/**
	 * The Cost_Of_Improvements
	 * @var Cost_Of_Improvements
	 */
	public $Cost_Of_Improvements;
	/**
	 * Constructor
	 * @param Year_Lot_Acquired Year_Lot_Acquired
	 * @param Original_Cost Original_Cost
	 * @param Amount_Existing_Liens Amount_Existing_Liens
	 * @param Present_Value_Of_Lot Present_Value_Of_Lot
	 * @param Cost_Of_Improvements Cost_Of_Improvements
	 * @return XWeb1003TypeConstructionType
	 */
	public function __construct($_Year_Lot_Acquired = null,$_Original_Cost = null,$_Amount_Existing_Liens = null,$_Present_Value_Of_Lot = null,$_Cost_Of_Improvements = null)
	{
		parent::__construct(array('Year_Lot_Acquired'=>$_Year_Lot_Acquired,'Original_Cost'=>$_Original_Cost,'Amount_Existing_Liens'=>$_Amount_Existing_Liens,'Present_Value_Of_Lot'=>$_Present_Value_Of_Lot,'Cost_Of_Improvements'=>$_Cost_Of_Improvements));
	}
	/**
	 * Set Year_Lot_Acquired
	 * @param Year_Lot_Acquired Year_Lot_Acquired
	 * @return Year_Lot_Acquired
	 */
	public function setYear_Lot_Acquired($_Year_Lot_Acquired)
	{
		return ($this->Year_Lot_Acquired = $_Year_Lot_Acquired);
	}
	/**
	 * Get Year_Lot_Acquired
	 * @return Year_Lot_Acquired
	 */
	public function getYear_Lot_Acquired()
	{
		return $this->Year_Lot_Acquired;
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
	 * Set Present_Value_Of_Lot
	 * @param Present_Value_Of_Lot Present_Value_Of_Lot
	 * @return Present_Value_Of_Lot
	 */
	public function setPresent_Value_Of_Lot($_Present_Value_Of_Lot)
	{
		return ($this->Present_Value_Of_Lot = $_Present_Value_Of_Lot);
	}
	/**
	 * Get Present_Value_Of_Lot
	 * @return Present_Value_Of_Lot
	 */
	public function getPresent_Value_Of_Lot()
	{
		return $this->Present_Value_Of_Lot;
	}
	/**
	 * Set Cost_Of_Improvements
	 * @param Cost_Of_Improvements Cost_Of_Improvements
	 * @return Cost_Of_Improvements
	 */
	public function setCost_Of_Improvements($_Cost_Of_Improvements)
	{
		return ($this->Cost_Of_Improvements = $_Cost_Of_Improvements);
	}
	/**
	 * Get Cost_Of_Improvements
	 * @return Cost_Of_Improvements
	 */
	public function getCost_Of_Improvements()
	{
		return $this->Cost_Of_Improvements;
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