<?php
/**
 * Class file for CdyneDeathIndexTypeDeceasedBySSNResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDeathIndexTypeDeceasedBySSNResponse
 * @date 03/07/2012
 */
class CdyneDeathIndexTypeDeceasedBySSNResponse extends CdyneDeathIndexWsdlClass
{
	/**
	 * The DeceasedBySSNResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var CdyneDeathIndexTypeDeathIndexResponse
	 */
	public $DeceasedBySSNResult;
	/**
	 * Constructor
	 * @param CdyneDeathIndexTypeDeathIndexResponse DeceasedBySSNResult
	 * @return CdyneDeathIndexTypeDeceasedBySSNResponse
	 */
	public function __construct($_DeceasedBySSNResult = null)
	{
		parent::__construct(array('DeceasedBySSNResult'=>$_DeceasedBySSNResult));
	}
	/**
	 * Set DeceasedBySSNResult
	 * @param DeathIndexResponse DeceasedBySSNResult
	 * @return DeathIndexResponse
	 */
	public function setDeceasedBySSNResult($_DeceasedBySSNResult)
	{
		return ($this->DeceasedBySSNResult = $_DeceasedBySSNResult);
	}
	/**
	 * Get DeceasedBySSNResult
	 * @return CdyneDeathIndexTypeDeathIndexResponse
	 */
	public function getDeceasedBySSNResult()
	{
		return $this->DeceasedBySSNResult;
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