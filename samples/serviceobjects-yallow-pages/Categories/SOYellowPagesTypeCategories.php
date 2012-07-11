<?php
/**
 * Class file for SOYellowPagesTypeCategories
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesTypeCategories
 * @date 08/07/2012
 */
class SOYellowPagesTypeCategories extends SOYellowPagesWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOYellowPagesTypeErr
	 */
	public $Error;
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOYellowPagesTypeCategory
	 */
	public $Category;
	/**
	 * Constructor
	 * @param SOYellowPagesTypeErr Error
	 * @param SOYellowPagesTypeCategory Category
	 * @return SOYellowPagesTypeCategories
	 */
	public function __construct($_Error = null,$_Category = null)
	{
		parent::__construct(array('Error'=>$_Error,'Category'=>$_Category));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOYellowPagesTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set Category
	 * @param Category Category
	 * @return Category
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return SOYellowPagesTypeCategory
	 */
	public function getCategory()
	{
		return $this->Category;
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