<?php
/**
 * Class file for GGAdwordsTypeMutate
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeMutate
 * Documentation : Adds, updates, or deletes campaigns. <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the <code>REMOVE</code> operator. To delete a campaign, set its {@link Campaign#status status} to <code>DELETED</code>.</p> @param operations A list of unique operations. The same campaign cannot be specified in more than one operation. @return The list of updated campaigns, returned in the same order as the <code>operations</code> array. @throws ApiException if problems occurred while updating campaign information.
 * @date 03/07/2012
 */
class GGAdwordsTypeMutate extends GGAdwordsWsdlClass
{
	/**
	 * The operations
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span> <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span> <span class="constraint NotEmpty">This field must contain at least one element.</span> <span class="constraint Required">This field is required and should not be {@code null}.</span> <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
	 * @var GGAdwordsTypeCampaignOperation
	 */
	public $operations;
	/**
	 * Constructor
	 * @param GGAdwordsTypeCampaignOperation operations
	 * @return GGAdwordsTypeMutate
	 */
	public function __construct($_operations = null)
	{
		parent::__construct(array('operations'=>$_operations));
	}
	/**
	 * Set operations
	 * @param CampaignOperation operations
	 * @return CampaignOperation
	 */
	public function setOperations($_operations)
	{
		return ($this->operations = $_operations);
	}
	/**
	 * Get operations
	 * @return GGAdwordsTypeCampaignOperation
	 */
	public function getOperations()
	{
		return $this->operations;
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