<?php
/**
 * Class file for EbayTradingTypeReturnPolicyType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReturnPolicyType
 * Documentation : Type for the return policy details of an item.
 * @date 04/07/2012
 */
class EbayTradingTypeReturnPolicyType extends EbayTradingWsdlClass
{
	/**
	 * The RefundOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates how the seller will compensate the buyer for a returned item. Use the ReturnPolicy.Description field to explain the policy details (such as how quickly the seller will process the refund, whether the seller must receive the item before processing the refund, and other useful details.).<br> <br> <b>Applicable values:</b> Use GeteBayDetails to determine which sites support this field, and the applicable values for each site. (RefundOptionsCodeType defines all the possible values.)<br> <br> <b>For AddItem, VerifyAddItem, and RelistItem (and corresponding FixedPrice calls):</b> If the seller accepts returns (ReturnsAcceptedOption=ReturnsAccepted) but you do not pass in this RefundOption field when listing the item, some eBay sites may set a default value (like MoneyBack), and the seller is obligated to honor this setting. Therefore, to avoid unexpected obligations, the seller should set a specific value for this field.<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and/or ends within 12 hours, you can't change this value. See the parent ReturnPolicy node description for more details. <br/><br/> <span class="tablenote"><b>Note:</b> Beginning with version 771, listings created, revised, or relisted with deprecated <b>RefundOption</b> and/or <b>ReturnsWithinOption</b> values (using Add/Revise/Relist family of API calls) will start being blocked. <br/><br/> For <b>RefundOption</b>, the deprecated values are <b>MerchandiseCredit</b> and <b>Exchange</b>. Instead of these deprecated values, the seller must offer a <b>MoneyBack</b> or a <b>MoneyBackOrExchange</b> refund option. Consider using the <b>MoneyBackOrExchange</b> option when you have the depth of inventory to support an exchange for a different size, color, or undamaged unit. Otherwise, use the <b>MoneyBack</b> option if you have limited inventory. </span>
	 * @var token
	 */
	public $RefundOption;
	/**
	 * The Refund
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that buyer applications can use to present RefundOption in a more user-friendly format to buyers. For example, in GetItem and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the Refund.Description options returned by GeteBayDetails.<br> <br> Not applicable as input to the AddItem family of calls. (Use RefundOption instead.)
	 * @var string
	 */
	public $Refund;
	/**
	 * The ReturnsWithinOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The buyer can return the item within this period of time from the day they receive the item. Use the ReturnPolicy.Description field to explain the policy details.<br> <br> <b>Applicable values:</b> Use GeteBayDetails to determine which sites support this field, and the applicable values for each site. (ReturnsWithinOptionsCodeType defines all the possible values.)<br> <br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (ReturnsAcceptedOption=ReturnsAccepted) but you do not pass in this ReturnsWithinOption field when listing the item, some eBay sites may set a default value (like Days_14), and the seller is obligated to honor this setting. Therefore, to avoid unexpected obligations, the seller should set a specific value for this field. <br/> <br/> <span class="tablenote"><b>Note:</b> Beginning with version 771, listings created, revised, or relisted with deprecated <b>RefundOption</b> and/or <b>ReturnsWithinOption</b> values (using Add/Revise/Relist family of API calls) will start being blocked. <br/><br/> For <b>ReturnsWithinOption</b>, the deprecated values are <b>Days_3</b> and <b>Days_7</b>. Instead of these deprecated values, the seller must offer a 14-day, 30-day, or 60-day return window. </span> <br/> <b>For ReviseItem only:</b> If the listing has bids or sales and/or ends within 12 hours, you can't change this value. See the parent ReturnPolicy node description for more details.
	 * @var token
	 */
	public $ReturnsWithinOption;
	/**
	 * The ReturnsWithin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that buyer applications can use to present ReturnsWithinOption in a more user-friendly format to buyers. For example, in GetItem and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the ReturnsWithin.Description options returned by GeteBayDetails.<br> <br> Not applicable as input to the AddItem family of calls. (Use ReturnsWithinOption instead.)
	 * @var string
	 */
	public $ReturnsWithin;
	/**
	 * The ReturnsAcceptedOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller allows the buyer to return the item. This field is required when ReturnPolicy is specified. (If you specify ReturnsNotAccepted, the View Item page may initially show the return policy as unspecified. In a future release, the View Item page will be updated to indicate that returns are not accepted instead.)<br> <br> All sites support the ability for a seller to not accept returns. If the seller doesn't accept returns, the item must specifically indicate ReturnsNotAccepted. (The return policy cannot be omitted from the item.)<br> <br> On the eBay UK and Ireland sites, business sellers must accept returns for fixed price items (including auction items with Buy It Now, and any other fixed price formats) when the category requires a return policy. On some European sites (such as eBay Germany (DE)), registered business sellers are required to accept returns. Your application can call GetUser to determine a user's current business seller status. <br> <br> <span class="tablenote"><b>Note:</b> Starting June 1, 2012 Top-rated sellers must accept returns (<b>ReturnsAcceptedOption=ReturnsAccepted</b>) and offer 1-day handling (<b>Item.DispatchTimeMax=1</b>) for the item in order for that listing to qualify for the greatest average boost in Best Match and the 20 percent final value fee discount. For more information on changes to eBay's Top-rated seller program, see the < a href="http://pages.ebay.com/sellerinformation/news/eTRSupdate.html">2012 Spring Seller Update</a> page. </span> <br> <b>Applicable values:</b> Use GeteBayDetails to determine which sites support this field, and the applicable values for each site. (ReturnsAcceptedOptionsCodeType defines all the possible values.)<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and/or ends within 12 hours, you can't change this value. See the parent ReturnPolicy node description for more details.
	 * @var token
	 */
	public $ReturnsAcceptedOption;
	/**
	 * The ReturnsAccepted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that buyer applications can use to present ReturnsAcceptedOption in a more user-friendly format to buyers. For example, in GetItem and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the ReturnsAccepted.Description options returned by GeteBayDetails.<br> <br> Not applicable as input to the AddItem family of calls. (Use ReturnsAcceptedOption instead.)
	 * @var string
	 */
	public $ReturnsAccepted;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A detailed explanation of the seller's return policy. <br> <br> eBay uses this text string as-is in the Return Policy section of the View Item page. Avoid HTML, and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character (e.g. &#163;). <br> <br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (ReturnsAcceptedOption=ReturnsAccepted) but does not specify this field when listing the item, GetItem returns this as an empty node<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and/or ends within 12 hours, you can't change this value. See the parent ReturnPolicy node description for more details.
	 * @var string
	 */
	public $Description;
	/**
	 * The WarrantyOfferedOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether a warranty is offered for the item.<br> <br> <b>Applicable values:</b> Use GeteBayDetails to determine which sites support this field, and the applicable values for each site. (Initially, only the eBay India site supports this field.) (WarrantyOfferedCodeType defines all the possible values.)<br> <br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (ReturnsAcceptedOption=ReturnsAccepted) but you do not pass in this WarrantyOfferedOption field when listing the item, the eBay India site may set a default value, and the seller is obligated to honor this setting. Therefore, to avoid unexpected obligations, the seller should set a specific value for this field.<br> <br> <span class="tablenote"><b>Note:</b> For the US eBay Motors limited warranty (Short-Term Service Agreement) option, use Item.LimitedWarrantyEligible instead.<br> <br> For the US eBay Motors "Is There an Existing Warranty?" option, use Item.AttributeSetArray instead.</span><br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and/or ends within 12 hours, you can't change this value. See the parent ReturnPolicy node description for more details.
	 * @var token
	 */
	public $WarrantyOfferedOption;
	/**
	 * The WarrantyOffered
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that buyer applications can use to present WarrantyOfferedOption in a more user-friendly format to buyers. For example, in GetItem and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the WarrantyOffered.Description options returned by GeteBayDetails.<br> <br> Not applicable as input to the AddItem family of calls. (Use WarrantyOfferedOption instead.)
	 * @var string
	 */
	public $WarrantyOffered;
	/**
	 * The WarrantyTypeOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the source or type of the warranty, if any.<br> <br> <b>Applicable values:</b> Use GeteBayDetails to determine which sites support this field, and the applicable values for each site. (Initially, only the eBay India site supports this field.) (WarrantyTypeOptionsCodeType defines all the possible values.)<br> <br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (ReturnsAcceptedOption=ReturnsAccepted) but you do not pass in this WarrantyTypeOption field when listing the item, the eBay India site may set a default value, and the seller is obligated to honor this setting. Therefore, to avoid unexpected obligations, the seller should set a specific value for this field.<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and/or ends within 12 hours, you can't change this value. See the parent ReturnPolicy node description for more details.
	 * @var token
	 */
	public $WarrantyTypeOption;
	/**
	 * The WarrantyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that buyer applications can use to present WarrantyTypeOption in a more user-friendly format to buyers. For example, in GetItem and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the WarrantyType.Description options returned by GeteBayDetails.<br> <br> Not applicable as input to the AddItem family of calls. (Use WarrantyTypeOption instead.)
	 * @var string
	 */
	public $WarrantyType;
	/**
	 * The WarrantyDurationOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The warranty period.<br> <br> <b>Applicable values:</b> Use GeteBayDetails to determine which sites support this field, and the applicable values for each site. (Initially, only the eBay India site supports this field.) (WarrantyDurationOptionsCodeType defines all the possible values.)<br> <br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (ReturnsAcceptedOption=ReturnsAccepted) but you do not pass in this WarrantyDurationOption field when listing the item, the eBay India site may set a default value, and the seller is obligated to honor this setting. Therefore, to avoid unexpected obligations, the seller should set a specific value for this field.<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and/or ends within 12 hours, you can't change this value. See the parent ReturnPolicy node description for more details.
	 * @var token
	 */
	public $WarrantyDurationOption;
	/**
	 * The WarrantyDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that buyer applications can use to present WarrantyDurationOption in a more user-friendly format to buyers. For example, For example, in GetItem and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the WarrantyDuration.Description options returned by GeteBayDetails.<br> <br> Not applicable as input to the AddItem family of calls. (Use WarrantyDurationOption instead.)
	 * @var string
	 */
	public $WarrantyDuration;
	/**
	 * The EAN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The European Article Number (EAN) associated with the item, if any. Refer to the ReturnPolicyDetails node in GeteBayDetails to determine which sites support this field. Only returned if the seller has specified this value in their return policy.<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and/or ends within 12 hours, you can't change this value. See the parent ReturnPolicy node description for more details.<br>
	 * @var string
	 */
	public $EAN;
	/**
	 * The ShippingCostPaidByOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The party who pays the shipping cost for a returned item. Use the ReturnPolicy.Description field to explain any additional details.<br> <br> <b>Applicable values:</b> Use GeteBayDetails to determine which sites support this field, and the applicable values for each site. (ShippingCostPaidByOptionsCodeType defines all the possible values.)<br> <br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (ReturnsAcceptedOption=ReturnsAccepted) but you do not pass in this ShippingCostPaidByOption field when listing the item, some eBay sites may set a default value (like Buyer), and the seller is obligated to honor this setting. Therefore, to avoid unexpected obligations, the seller should set a specific value for this field.<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and/or ends within 12 hours, you can't change this value. See the parent ReturnPolicy node description for more details.
	 * @var token
	 */
	public $ShippingCostPaidByOption;
	/**
	 * The ShippingCostPaidBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that buyer applications can use to present ShippingCostPaidByOption in a more user-friendly format to buyers. For example, in GetItem and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the ShippingCostPaidBy.Description options returned by GeteBayDetails.<br> <br> Not applicable as input to the AddItem family of calls. (Use ShippingCostPaidByOption instead.)
	 * @var string
	 */
	public $ShippingCostPaidBy;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param token RefundOption
	 * @param string Refund
	 * @param token ReturnsWithinOption
	 * @param string ReturnsWithin
	 * @param token ReturnsAcceptedOption
	 * @param string ReturnsAccepted
	 * @param string Description
	 * @param token WarrantyOfferedOption
	 * @param string WarrantyOffered
	 * @param token WarrantyTypeOption
	 * @param string WarrantyType
	 * @param token WarrantyDurationOption
	 * @param string WarrantyDuration
	 * @param string EAN
	 * @param token ShippingCostPaidByOption
	 * @param string ShippingCostPaidBy
	 * @param DOMDocument any
	 * @return EbayTradingTypeReturnPolicyType
	 */
	public function __construct($_RefundOption = null,$_Refund = null,$_ReturnsWithinOption = null,$_ReturnsWithin = null,$_ReturnsAcceptedOption = null,$_ReturnsAccepted = null,$_Description = null,$_WarrantyOfferedOption = null,$_WarrantyOffered = null,$_WarrantyTypeOption = null,$_WarrantyType = null,$_WarrantyDurationOption = null,$_WarrantyDuration = null,$_EAN = null,$_ShippingCostPaidByOption = null,$_ShippingCostPaidBy = null,$_any = null)
	{
		parent::__construct(array('RefundOption'=>$_RefundOption,'Refund'=>$_Refund,'ReturnsWithinOption'=>$_ReturnsWithinOption,'ReturnsWithin'=>$_ReturnsWithin,'ReturnsAcceptedOption'=>$_ReturnsAcceptedOption,'ReturnsAccepted'=>$_ReturnsAccepted,'Description'=>$_Description,'WarrantyOfferedOption'=>$_WarrantyOfferedOption,'WarrantyOffered'=>$_WarrantyOffered,'WarrantyTypeOption'=>$_WarrantyTypeOption,'WarrantyType'=>$_WarrantyType,'WarrantyDurationOption'=>$_WarrantyDurationOption,'WarrantyDuration'=>$_WarrantyDuration,'EAN'=>$_EAN,'ShippingCostPaidByOption'=>$_ShippingCostPaidByOption,'ShippingCostPaidBy'=>$_ShippingCostPaidBy,'any'=>$_any));
	}
	/**
	 * Set RefundOption
	 * @param token RefundOption
	 * @return token
	 */
	public function setRefundOption($_RefundOption)
	{
		return ($this->RefundOption = $_RefundOption);
	}
	/**
	 * Get RefundOption
	 * @return token
	 */
	public function getRefundOption()
	{
		return $this->RefundOption;
	}
	/**
	 * Set Refund
	 * @param string Refund
	 * @return string
	 */
	public function setRefund($_Refund)
	{
		return ($this->Refund = $_Refund);
	}
	/**
	 * Get Refund
	 * @return string
	 */
	public function getRefund()
	{
		return $this->Refund;
	}
	/**
	 * Set ReturnsWithinOption
	 * @param token ReturnsWithinOption
	 * @return token
	 */
	public function setReturnsWithinOption($_ReturnsWithinOption)
	{
		return ($this->ReturnsWithinOption = $_ReturnsWithinOption);
	}
	/**
	 * Get ReturnsWithinOption
	 * @return token
	 */
	public function getReturnsWithinOption()
	{
		return $this->ReturnsWithinOption;
	}
	/**
	 * Set ReturnsWithin
	 * @param string ReturnsWithin
	 * @return string
	 */
	public function setReturnsWithin($_ReturnsWithin)
	{
		return ($this->ReturnsWithin = $_ReturnsWithin);
	}
	/**
	 * Get ReturnsWithin
	 * @return string
	 */
	public function getReturnsWithin()
	{
		return $this->ReturnsWithin;
	}
	/**
	 * Set ReturnsAcceptedOption
	 * @param token ReturnsAcceptedOption
	 * @return token
	 */
	public function setReturnsAcceptedOption($_ReturnsAcceptedOption)
	{
		return ($this->ReturnsAcceptedOption = $_ReturnsAcceptedOption);
	}
	/**
	 * Get ReturnsAcceptedOption
	 * @return token
	 */
	public function getReturnsAcceptedOption()
	{
		return $this->ReturnsAcceptedOption;
	}
	/**
	 * Set ReturnsAccepted
	 * @param string ReturnsAccepted
	 * @return string
	 */
	public function setReturnsAccepted($_ReturnsAccepted)
	{
		return ($this->ReturnsAccepted = $_ReturnsAccepted);
	}
	/**
	 * Get ReturnsAccepted
	 * @return string
	 */
	public function getReturnsAccepted()
	{
		return $this->ReturnsAccepted;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set WarrantyOfferedOption
	 * @param token WarrantyOfferedOption
	 * @return token
	 */
	public function setWarrantyOfferedOption($_WarrantyOfferedOption)
	{
		return ($this->WarrantyOfferedOption = $_WarrantyOfferedOption);
	}
	/**
	 * Get WarrantyOfferedOption
	 * @return token
	 */
	public function getWarrantyOfferedOption()
	{
		return $this->WarrantyOfferedOption;
	}
	/**
	 * Set WarrantyOffered
	 * @param string WarrantyOffered
	 * @return string
	 */
	public function setWarrantyOffered($_WarrantyOffered)
	{
		return ($this->WarrantyOffered = $_WarrantyOffered);
	}
	/**
	 * Get WarrantyOffered
	 * @return string
	 */
	public function getWarrantyOffered()
	{
		return $this->WarrantyOffered;
	}
	/**
	 * Set WarrantyTypeOption
	 * @param token WarrantyTypeOption
	 * @return token
	 */
	public function setWarrantyTypeOption($_WarrantyTypeOption)
	{
		return ($this->WarrantyTypeOption = $_WarrantyTypeOption);
	}
	/**
	 * Get WarrantyTypeOption
	 * @return token
	 */
	public function getWarrantyTypeOption()
	{
		return $this->WarrantyTypeOption;
	}
	/**
	 * Set WarrantyType
	 * @param string WarrantyType
	 * @return string
	 */
	public function setWarrantyType($_WarrantyType)
	{
		return ($this->WarrantyType = $_WarrantyType);
	}
	/**
	 * Get WarrantyType
	 * @return string
	 */
	public function getWarrantyType()
	{
		return $this->WarrantyType;
	}
	/**
	 * Set WarrantyDurationOption
	 * @param token WarrantyDurationOption
	 * @return token
	 */
	public function setWarrantyDurationOption($_WarrantyDurationOption)
	{
		return ($this->WarrantyDurationOption = $_WarrantyDurationOption);
	}
	/**
	 * Get WarrantyDurationOption
	 * @return token
	 */
	public function getWarrantyDurationOption()
	{
		return $this->WarrantyDurationOption;
	}
	/**
	 * Set WarrantyDuration
	 * @param string WarrantyDuration
	 * @return string
	 */
	public function setWarrantyDuration($_WarrantyDuration)
	{
		return ($this->WarrantyDuration = $_WarrantyDuration);
	}
	/**
	 * Get WarrantyDuration
	 * @return string
	 */
	public function getWarrantyDuration()
	{
		return $this->WarrantyDuration;
	}
	/**
	 * Set EAN
	 * @param string EAN
	 * @return string
	 */
	public function setEAN($_EAN)
	{
		return ($this->EAN = $_EAN);
	}
	/**
	 * Get EAN
	 * @return string
	 */
	public function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * Set ShippingCostPaidByOption
	 * @param token ShippingCostPaidByOption
	 * @return token
	 */
	public function setShippingCostPaidByOption($_ShippingCostPaidByOption)
	{
		return ($this->ShippingCostPaidByOption = $_ShippingCostPaidByOption);
	}
	/**
	 * Get ShippingCostPaidByOption
	 * @return token
	 */
	public function getShippingCostPaidByOption()
	{
		return $this->ShippingCostPaidByOption;
	}
	/**
	 * Set ShippingCostPaidBy
	 * @param string ShippingCostPaidBy
	 * @return string
	 */
	public function setShippingCostPaidBy($_ShippingCostPaidBy)
	{
		return ($this->ShippingCostPaidBy = $_ShippingCostPaidBy);
	}
	/**
	 * Get ShippingCostPaidBy
	 * @return string
	 */
	public function getShippingCostPaidBy()
	{
		return $this->ShippingCostPaidBy;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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