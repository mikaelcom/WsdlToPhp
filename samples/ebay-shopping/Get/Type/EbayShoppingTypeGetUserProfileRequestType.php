<?php
/**
 * Class file for EbayShoppingTypeGetUserProfileRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetUserProfileRequestType
 * Documentation : Retrieves user information based on the user ID you specify. The response contains detailed information about a user. You can specify the types of user information you want in the response.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetUserProfileRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the user whose data will returned by the call.
	 * @var string
	 */
	public $UserID;
	/**
	 * The IncludeSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, a default set of fields is returned. Click "Detail Controls" below and see "none" for the default fields. If you specify this field, then the set of fields returned includes the default fields. If you specify this field, the additional fields returned can affect the call's response time (performance), including in the case of feedback data.<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include most available fields (such as StoreURL) in the response (except fields that can affect the call's response time).</p> <p class="ename">&bull;&nbsp;&nbsp; FeedbackDetails</p> <p class="edef">Include a container for information about one feedback entry. </p> <p class="ename">&bull;&nbsp;&nbsp; FeedbackHistory</p> <p class="edef">Include a container for summary feedback data for a user. </p> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "GetUserProfile Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * Constructor
	 * @param string UserID
	 * @param string IncludeSelector
	 * @return EbayShoppingTypeGetUserProfileRequestType
	 */
	public function __construct($_UserID = null,$_IncludeSelector = null)
	{
		EbayShoppingWsdlClass::__construct(array('UserID'=>$_UserID,'IncludeSelector'=>$_IncludeSelector));
	}
	/**
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set IncludeSelector
	 * @param string IncludeSelector
	 * @return string
	 */
	public function setIncludeSelector($_IncludeSelector)
	{
		return ($this->IncludeSelector = $_IncludeSelector);
	}
	/**
	 * Get IncludeSelector
	 * @return string
	 */
	public function getIncludeSelector()
	{
		return $this->IncludeSelector;
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