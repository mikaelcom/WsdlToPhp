<?php
/**
 * Class file for SOYellowPagesTypeCategory
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesTypeCategory
 * @date 08/07/2012
 */
class SOYellowPagesTypeCategory extends SOYellowPagesWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $CategoryID;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOYellowPagesTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param int CategoryID
	 * @param string Name
	 * @param SOYellowPagesTypeErr Error
	 * @return SOYellowPagesTypeCategory
	 */
	public function __construct($_CategoryID,$_Name = null,$_Error = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'Name'=>$_Name,'Error'=>$_Error));
	}
	/**
	 * Set CategoryID
	 * @param int CategoryID
	 * @return int
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return int
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>