<?php

namespace vezdehod\packs\ui\jsonui\binding;

class HardcodedBindings {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#hardcoded-binding-names

    // Account Transfer Error (ui/account_transfer_error_screen.json)

    /**
     * #error_title_text: ???
     */
    public static function errorTitleText(): Binding { return new Binding("error_title_text"); }

    /**
     * #error_number_label: ???
     */
    public static function errorNumberLabel(): Binding { return new Binding("error_number_label"); }

    /**
     * #error_number: ???
     */
    public static function errorNumber(): Binding { return new Binding("error_number"); }

    /**
     * #correlation_id_label: ???
     */
    public static function correlationIdLabel(): Binding { return new Binding("correlation_id_label"); }

    /**
     * #correlation_id: ???
     */
    public static function correlationId(): Binding { return new Binding("correlation_id"); }
    // Add External Server (ui/add_external_server_screen.json)

    /**
     * #play_button_enabled: ???
     */
    public static function playButtonEnabled(): Binding { return new Binding("play_button_enabled"); }

    /**
     * #play_button_disabled: ???
     */
    public static function playButtonDisabled(): Binding { return new Binding("play_button_disabled"); }

    /**
     * #save_button_enabled: ???
     */
    public static function saveButtonEnabled(): Binding { return new Binding("save_button_enabled"); }

    /**
     * #save_button_disabled: ???
     */
    public static function saveButtonDisabled(): Binding { return new Binding("save_button_disabled"); }
    // Adhoc In Progress (ui/adhoc_in_progress_screen.json)

    /**
     * #adhoc_title: ???
     */
    public static function adhocTitle(): Binding { return new Binding("adhoc_title"); }
    // Authentication (ui/authentication_screen.json)

    /**
     * #sign_in_visible: ???
     */
    public static function signInVisible(): Binding { return new Binding("sign_in_visible"); }

    /**
     * #sign_in_ios_visible: ???
     */
    public static function signInIosVisible(): Binding { return new Binding("sign_in_ios_visible"); }

    /**
     * #sign_in_button_visible: ???
     */
    public static function signInButtonVisible(): Binding { return new Binding("sign_in_button_visible"); }

    /**
     * #sign_in_ios_buttons_visible: ???
     */
    public static function signInIosButtonsVisible(): Binding { return new Binding("sign_in_ios_buttons_visible"); }

    /**
     * #authentication_message: ???
     */
    public static function authenticationMessage(): Binding { return new Binding("authentication_message"); }

    /**
     * #confirm_button_enabled: ???
     */
    public static function confirmButtonEnabled(): Binding { return new Binding("confirm_button_enabled"); }

    /**
     * #edu_store_visible: ???
     */
    public static function eduStoreVisible(): Binding { return new Binding("edu_store_visible"); }

    /**
     * #edu_store_purchase_info: ???
     */
    public static function eduStorePurchaseInfo(): Binding { return new Binding("edu_store_purchase_info"); }

    /**
     * #asking_to_buy_visible: ???
     */
    public static function askingToBuyVisible(): Binding { return new Binding("asking_to_buy_visible"); }

    /**
     * #confirming_purchase_visible: ???
     */
    public static function confirmingPurchaseVisible(): Binding { return new Binding("confirming_purchase_visible"); }

    /**
     * #demo_choice_visible: ???
     */
    public static function demoChoiceVisible(): Binding { return new Binding("demo_choice_visible"); }

    /**
     * #eula_visible: ???
     */
    public static function eulaVisible(): Binding { return new Binding("eula_visible"); }

    /**
     * #popup_text: ???
     */
    public static function popupText(): Binding { return new Binding("popup_text"); }

    /**
     * #popup_message_student_text: ???
     */
    public static function popupMessageStudentText(): Binding { return new Binding("popup_message_student_text"); }

    /**
     * #popup_message_student_visible: ???
     */
    public static function popupMessageStudentVisible(): Binding { return new Binding("popup_message_student_visible"); }

    /**
     * #generic_popup_link_visible: ???
     */
    public static function genericPopupLinkVisible(): Binding { return new Binding("generic_popup_link_visible"); }

    /**
     * #trial_purchase_link_visible: ???
     */
    public static function trialPurchaseLinkVisible(): Binding { return new Binding("trial_purchase_link_visible"); }

    /**
     * #show_popup_dismiss_button: ???
     */
    public static function showPopupDismissButton(): Binding { return new Binding("show_popup_dismiss_button"); }
    // Book (ui/book_screen.json)

    /**
     * #screenshot_path: ???
     */
    public static function screenshotPath(): Binding { return new Binding("screenshot_path"); }

    /**
     * #is_photo_page: ???
     */
    public static function isPhotoPage(): Binding { return new Binding("is_photo_page"); }

    /**
     * #is_text_page: ???
     */
    public static function isTextPage(): Binding { return new Binding("is_text_page"); }

    /**
     * #pick_grid_dimensions: ???
     */
    public static function pickGridDimensions(): Binding { return new Binding("pick_grid_dimensions"); }

    /**
     * #page_number: ???
     */
    public static function pageNumber(): Binding { return new Binding("page_number"); }

    /**
     * #title_text_box_item_name: ???
     */
    public static function titleTextBoxItemName(): Binding { return new Binding("title_text_box_item_name"); }

    /**
     * #author_editable: ???
     */
    public static function authorEditable(): Binding { return new Binding("author_editable"); }

    /**
     * #author_text_box_item_name: ???
     */
    public static function authorTextBoxItemName(): Binding { return new Binding("author_text_box_item_name"); }

    /**
     * #editable: ???
     */
    public static function editable(): Binding { return new Binding("editable"); }

    /**
     * #viewing: ???
     */
    public static function viewing(): Binding { return new Binding("viewing"); }

    /**
     * #signing: ???
     */
    public static function signing(): Binding { return new Binding("signing"); }

    /**
     * #picking: ???
     */
    public static function picking(): Binding { return new Binding("picking"); }

    /**
     * #exporting: ???
     */
    public static function exporting(): Binding { return new Binding("exporting"); }

    /**
     * #page_visible: ???
     */
    public static function pageVisible(): Binding { return new Binding("page_visible"); }

    /**
     * #pick_item_visible: ???
     */
    public static function pickItemVisible(): Binding { return new Binding("pick_item_visible"); }

    /**
     * #edit_controls_active: ???
     */
    public static function editControlsActive(): Binding { return new Binding("edit_controls_active"); }

    /**
     * #finalize_button_enabled: ???
     */
    public static function finalizeButtonEnabled(): Binding { return new Binding("finalize_button_enabled"); }
    // Braze (ui/braze_screen.json)

    /**
     * #image_texture: ???
     */
    public static function imageTexture(): Binding { return new Binding("image_texture"); }
    // Bundle Purchase Warning (ui/bundle_purchase_warning_screen.json)

    /**
     * #banner_visible: ???
     */
    public static function bannerVisible(): Binding { return new Binding("banner_visible"); }

    /**
     * #offer_title: ???
     */
    public static function offerTitle(): Binding { return new Binding("offer_title"); }

    /**
     * #keyart_path: ???
     */
    public static function keyartPath(): Binding { return new Binding("keyart_path"); }

    /**
     * #keyart_texture_file_system: ???
     */
    public static function keyartTextureFileSystem(): Binding { return new Binding("keyart_texture_file_system"); }
    // Chat (ui/chat_screen.json)

    /**
     * #keyboard_being_use: ???
     */
    public static function keyboardBeingUse(): Binding { return new Binding("keyboard_being_use"); }

    /**
     * #keyboard_button_focus_override_up: ???
     */
    public static function keyboardButtonFocusOverrideUp(): Binding { return new Binding("keyboard_button_focus_override_up"); }

    /**
     * #keyboard_button_focus_override_down: ???
     */
    public static function keyboardButtonFocusOverrideDown(): Binding { return new Binding("keyboard_button_focus_override_down"); }

    /**
     * #keyboard_button_visible: ???
     */
    public static function keyboardButtonVisible(): Binding { return new Binding("keyboard_button_visible"); }

    /**
     * #send_button_visible: ???
     */
    public static function sendButtonVisible(): Binding { return new Binding("send_button_visible"); }

    /**
     * #send_button_accessibility_text: ???
     */
    public static function sendButtonAccessibilityText(): Binding { return new Binding("send_button_accessibility_text"); }

    /**
     * #chat_visible: ???
     */
    public static function chatVisible(): Binding { return new Binding("chat_visible"); }

    /**
     * #message_text_box_content: ???
     */
    public static function messageTextBoxContent(): Binding { return new Binding("message_text_box_content"); }

    /**
     * #text_edit_box_focus_override_up: ???
     */
    public static function textEditBoxFocusOverrideUp(): Binding { return new Binding("text_edit_box_focus_override_up"); }

    /**
     * #text_edit_box_focus_override_down: ???
     */
    public static function textEditBoxFocusOverrideDown(): Binding { return new Binding("text_edit_box_focus_override_down"); }

    /**
     * #auto_complete_item: ???
     */
    public static function autoCompleteItem(): Binding { return new Binding("auto_complete_item"); }

    /**
     * #auto_complete_text: ???
     */
    public static function autoCompleteText(): Binding { return new Binding("auto_complete_text"); }

    /**
     * #get_grid_size: ???
     */
    public static function getGridSize(): Binding { return new Binding("get_grid_size"); }

    /**
     * #chat_title_text: ???
     */
    public static function chatTitleText(): Binding { return new Binding("chat_title_text"); }

    /**
     * #chat_typeface_visible: ???
     */
    public static function chatTypefaceVisible(): Binding { return new Binding("chat_typeface_visible"); }
    // Choose Realm (ui/choose_realm_screen.json)

    /**
     * #realms_grid_dimension: ???
     */
    public static function realmsGridDimension(): Binding { return new Binding("realms_grid_dimension"); }

    /**
     * #world_button_focus_identifier: ???
     */
    public static function worldButtonFocusIdentifier(): Binding { return new Binding("world_button_focus_identifier"); }

    /**
     * #ten_player_button_visible: ???
     */
    public static function tenPlayerButtonVisible(): Binding { return new Binding("ten_player_button_visible"); }

    /**
     * #two_player_button_visible: ???
     */
    public static function twoPlayerButtonVisible(): Binding { return new Binding("two_player_button_visible"); }

    /**
     * #realms_world_player_count: ???
     */
    public static function realmsWorldPlayerCount(): Binding { return new Binding("realms_world_player_count"); }

    /**
     * #realms_game_online: ???
     */
    public static function realmsGameOnline(): Binding { return new Binding("realms_game_online"); }

    /**
     * #realms_game_unavailable: ???
     */
    public static function realmsGameUnavailable(): Binding { return new Binding("realms_game_unavailable"); }

    /**
     * #realms_game_offline: ???
     */
    public static function realmsGameOffline(): Binding { return new Binding("realms_game_offline"); }
    // Coin Purchase (ui/coin_purchase_screen.json)

    /**
     * #bonus_coins: ???
     */
    public static function bonusCoins(): Binding { return new Binding("bonus_coins"); }

    /**
     * #coins_without_bonus: ???
     */
    public static function coinsWithoutBonus(): Binding { return new Binding("coins_without_bonus"); }

    /**
     * #coin_offer_texture_name: ???
     */
    public static function coinOfferTextureName(): Binding { return new Binding("coin_offer_texture_name"); }

    /**
     * #coin_offer_texture_file_system: ???
     */
    public static function coinOfferTextureFileSystem(): Binding { return new Binding("coin_offer_texture_file_system"); }

    /**
     * #bonus_coins_visible: ???
     */
    public static function bonusCoinsVisible(): Binding { return new Binding("bonus_coins_visible"); }

    /**
     * #price_text: ???
     */
    public static function priceText(): Binding { return new Binding("price_text"); }

    /**
     * #coins_required_for_purchase: ???
     */
    public static function coinsRequiredForPurchase(): Binding { return new Binding("coins_required_for_purchase"); }

    /**
     * #show_missing_coins: ???
     */
    public static function showMissingCoins(): Binding { return new Binding("show_missing_coins"); }

    /**
     * #coin_offer_size: ???
     */
    public static function coinOfferSize(): Binding { return new Binding("coin_offer_size"); }

    /**
     * #has_coin_offers: ???
     */
    public static function hasCoinOffers(): Binding { return new Binding("has_coin_offers"); }

    /**
     * #coin_loading_visible: ???
     */
    public static function coinLoadingVisible(): Binding { return new Binding("coin_loading_visible"); }
    // Command Block (ui/command_block_screen.json)

    /**
     * #maximized_input_visible: ???
     */
    public static function maximizedInputVisible(): Binding { return new Binding("maximized_input_visible"); }

    /**
     * #block_type_icon_texture: ???
     */
    public static function blockTypeIconTexture(): Binding { return new Binding("block_type_icon_texture"); }

    /**
     * #close_button_visible_binding_name: ???
     */
    public static function closeButtonVisibleBindingName(): Binding { return new Binding("close_button_visible_binding_name"); }

    /**
     * #command_impulse_mode: ???
     */
    public static function commandImpulseMode(): Binding { return new Binding("command_impulse_mode"); }

    /**
     * #command_chain_mode: ???
     */
    public static function commandChainMode(): Binding { return new Binding("command_chain_mode"); }

    /**
     * #command_repeat_mode: ???
     */
    public static function commandRepeatMode(): Binding { return new Binding("command_repeat_mode"); }

    /**
     * #block_type_dropdown_toggle_label: ???
     */
    public static function blockTypeDropdownToggleLabel(): Binding { return new Binding("block_type_dropdown_toggle_label"); }

    /**
     * #block_type_dropdown_label_color_binding: ???
     */
    public static function blockTypeDropdownLabelColorBinding(): Binding { return new Binding("block_type_dropdown_label_color_binding"); }

    /**
     * #block_type_dropdown_enabled: ???
     */
    public static function blockTypeDropdownEnabled(): Binding { return new Binding("block_type_dropdown_enabled"); }

    /**
     * #command_conditional_mode: ???
     */
    public static function commandConditionalMode(): Binding { return new Binding("command_conditional_mode"); }

    /**
     * #command_unconditional_mode: ???
     */
    public static function commandUnconditionalMode(): Binding { return new Binding("command_unconditional_mode"); }

    /**
     * #condition_dropdown_toggle_label: ???
     */
    public static function conditionDropdownToggleLabel(): Binding { return new Binding("condition_dropdown_toggle_label"); }

    /**
     * #condition_dropdown_enabled: ???
     */
    public static function conditionDropdownEnabled(): Binding { return new Binding("condition_dropdown_enabled"); }

    /**
     * #command_always_on_mode: ???
     */
    public static function commandAlwaysOnMode(): Binding { return new Binding("command_always_on_mode"); }

    /**
     * #command_needs_redstone_mode: ???
     */
    public static function commandNeedsRedstoneMode(): Binding { return new Binding("command_needs_redstone_mode"); }

    /**
     * #redstone_dropdown_enabled: ???
     */
    public static function redstoneDropdownEnabled(): Binding { return new Binding("redstone_dropdown_enabled"); }

    /**
     * #command_hover_note: ???
     */
    public static function commandHoverNote(): Binding { return new Binding("command_hover_note"); }

    /**
     * #execute_on_first_tick_enabled: ???
     */
    public static function executeOnFirstTickEnabled(): Binding { return new Binding("execute_on_first_tick_enabled"); }

    /**
     * #command_tick_delay: ???
     */
    public static function commandTickDelay(): Binding { return new Binding("command_tick_delay"); }

    /**
     * #command_text_edit: ???
     */
    public static function commandTextEdit(): Binding { return new Binding("command_text_edit"); }

    /**
     * #command_output_text: ???
     */
    public static function commandOutputText(): Binding { return new Binding("command_output_text"); }

    /**
     * #previous_block_type_text: ???
     */
    public static function previousBlockTypeText(): Binding { return new Binding("previous_block_type_text"); }

    /**
     * #previous_block_type_text_color: ???
     */
    public static function previousBlockTypeTextColor(): Binding { return new Binding("previous_block_type_text_color"); }

    /**
     * #previous_condition_mode_text: ???
     */
    public static function previousConditionModeText(): Binding { return new Binding("previous_condition_mode_text"); }

    /**
     * #previous_redstone_mode_text: ???
     */
    public static function previousRedstoneModeText(): Binding { return new Binding("previous_redstone_mode_text"); }

    /**
     * #minimize_button_visible_binding_name: ???
     */
    public static function minimizeButtonVisibleBindingName(): Binding { return new Binding("minimize_button_visible_binding_name"); }
    // Comment (ui/comment_screen.json)

    /**
     * #report_to_club_button_visible_feeditem: ???
     */
    public static function reportToClubButtonVisibleFeeditem(): Binding { return new Binding("report_to_club_button_visible_feeditem"); }

    /**
     * #report_to_enforcement_button_visible_feeditem: ???
     */
    public static function reportToEnforcementButtonVisibleFeeditem(): Binding { return new Binding("report_to_enforcement_button_visible_feeditem"); }

    /**
     * #delete_button_visible_feeditem: ???
     */
    public static function deleteButtonVisibleFeeditem(): Binding { return new Binding("delete_button_visible_feeditem"); }

    /**
     * #report_to_club_button_visible_comment: ???
     */
    public static function reportToClubButtonVisibleComment(): Binding { return new Binding("report_to_club_button_visible_comment"); }

    /**
     * #report_to_enforcement_button_visible_comment: ???
     */
    public static function reportToEnforcementButtonVisibleComment(): Binding { return new Binding("report_to_enforcement_button_visible_comment"); }

    /**
     * #delete_button_visible_comment: ???
     */
    public static function deleteButtonVisibleComment(): Binding { return new Binding("delete_button_visible_comment"); }

    /**
     * #comment_buttons_visible: ???
     */
    public static function commentButtonsVisible(): Binding { return new Binding("comment_buttons_visible"); }

    /**
     * #feed_comment_page_collection_length: ???
     */
    public static function feedCommentPageCollectionLength(): Binding { return new Binding("feed_comment_page_collection_length"); }

    /**
     * #comment_content: ???
     */
    public static function commentContent(): Binding { return new Binding("comment_content"); }

    /**
     * #is_author_linked_account: ???
     */
    public static function isAuthorLinkedAccount(): Binding { return new Binding("is_author_linked_account"); }

    /**
     * #content: ???
     */
    public static function content(): Binding { return new Binding("content"); }

    /**
     * #text_visible: ???
     */
    public static function textVisible(): Binding { return new Binding("text_visible"); }

    /**
     * #likes_and_comments: ???
     */
    public static function likesAndComments(): Binding { return new Binding("likes_and_comments"); }

    /**
     * #screenshot_texture: ???
     */
    public static function screenshotTexture(): Binding { return new Binding("screenshot_texture"); }

    /**
     * #screenshot_texture_source: ???
     */
    public static function screenshotTextureSource(): Binding { return new Binding("screenshot_texture_source"); }

    /**
     * #textpost_content: ???
     */
    public static function textpostContent(): Binding { return new Binding("textpost_content"); }

    /**
     * #textpost_visible: ???
     */
    public static function textpostVisible(): Binding { return new Binding("textpost_visible"); }

    /**
     * #comment_text_box: ???
     */
    public static function commentTextBox(): Binding { return new Binding("comment_text_box"); }

    /**
     * #comment_platform_tag: ???
     */
    public static function commentPlatformTag(): Binding { return new Binding("comment_platform_tag"); }

    /**
     * #comment_gamertag: ???
     */
    public static function commentGamertag(): Binding { return new Binding("comment_gamertag"); }

    /**
     * #likes_and_time_since_comment_post: ???
     */
    public static function likesAndTimeSinceCommentPost(): Binding { return new Binding("likes_and_time_since_comment_post"); }

    /**
     * #author_gamertag: ???
     * Also in
     */
    public static function authorGamertag(): Binding { return new Binding("author_gamertag"); }

    /**
     * #time_since_feed_post: ???
     */
    public static function timeSinceFeedPost(): Binding { return new Binding("time_since_feed_post"); }

    /**
     * #author_platform_tag: ???
     */
    public static function authorPlatformTag(): Binding { return new Binding("author_platform_tag"); }

    // Confirm MSA Unlink (ui/confirm_msa_unlink_screen.json)

    /**
     * #unlink_warning_text: ???
     */
    public static function unlinkWarningText(): Binding { return new Binding("unlink_warning_text"); }

    /**
     * #unlink_consequences_acknowledged: ???
     */
    public static function unlinkConsequencesAcknowledged(): Binding { return new Binding("unlink_consequences_acknowledged"); }

    /**
     * #confirm_0: ???
     */
    public static function confirm0(): Binding { return new Binding("confirm_0"); }

    /**
     * #confirm_0_enabled: ???
     */
    public static function confirm0Enabled(): Binding { return new Binding("confirm_0_enabled"); }

    /**
     * #confirm_1: ???
     */
    public static function confirm1(): Binding { return new Binding("confirm_1"); }

    /**
     * #confirm_1_enabled: ???
     */
    public static function confirm1Enabled(): Binding { return new Binding("confirm_1_enabled"); }

    /**
     * #confirm_2: ???
     */
    public static function confirm2(): Binding { return new Binding("confirm_2"); }

    /**
     * #confirm_2_enabled: ???
     */
    public static function confirm2Enabled(): Binding { return new Binding("confirm_2_enabled"); }

    /**
     * #confirm_3: ???
     */
    public static function confirm3(): Binding { return new Binding("confirm_3"); }

    /**
     * #confirm_3_enabled: ???
     */
    public static function confirm3Enabled(): Binding { return new Binding("confirm_3_enabled"); }
    // Content Log History (ui/content_log_history_screen.json)

    /**
     * #content_log_text: ???
     */
    public static function contentLogText(): Binding { return new Binding("content_log_text"); }

    /**
     * #messages_size: ???
     */
    public static function messagesSize(): Binding { return new Binding("messages_size"); }
    // Create World Upsell (ui/create_world_upsell.json)

    /**
     * #realm_button_text: ???
     */
    public static function realmButtonText(): Binding { return new Binding("realm_button_text"); }

    /**
     * #realm_trial_available: ???
     */
    public static function realmTrialAvailable(): Binding { return new Binding("realm_trial_available"); }
    // Anvil (ui/anvil_screen.json)

    /**
     * #cost_text: ???
     */
    public static function costText(): Binding { return new Binding("cost_text"); }

    /**
     * #cost_text_green: ???
     */
    public static function costTextGreen(): Binding { return new Binding("cost_text_green"); }

    /**
     * #cost_text_red: ???
     */
    public static function costTextRed(): Binding { return new Binding("cost_text_red"); }
    // Beacon (ui/beacon_screen.json)

    /**
     * #supports_netherite: ???
     */
    public static function supportsNetherite(): Binding { return new Binding("supports_netherite"); }

    /**
     * #extra_image_selection: ???
     */
    public static function extraImageSelection(): Binding { return new Binding("extra_image_selection"); }
    // Brewing Stand (ui/brewing_stand_screen.json)

    /**
     * #empty_bottle_image_visible: ???
     */
    public static function emptyBottleImageVisible(): Binding { return new Binding("empty_bottle_image_visible"); }

    /**
     * #empty_fuel_image_visible: ???
     */
    public static function emptyFuelImageVisible(): Binding { return new Binding("empty_fuel_image_visible"); }

    /**
     * #brewing_bubbles_ratio: ???
     */
    public static function brewingBubblesRatio(): Binding { return new Binding("brewing_bubbles_ratio"); }

    /**
     * #brewing_fuel_ratio: ???
     */
    public static function brewingFuelRatio(): Binding { return new Binding("brewing_fuel_ratio"); }

    /**
     * #brewing_arrow_ratio: ???
     */
    public static function brewingArrowRatio(): Binding { return new Binding("brewing_arrow_ratio"); }
    // Cartography Table (ui/cartography_screen.json)

    /**
     * #is_none_mode: ???
     */
    public static function isNoneMode(): Binding { return new Binding("is_none_mode"); }

    /**
     * #is_clone_mode: ???
     */
    public static function isCloneMode(): Binding { return new Binding("is_clone_mode"); }

    /**
     * #is_rename_mode: ???
     */
    public static function isRenameMode(): Binding { return new Binding("is_rename_mode"); }

    /**
     * #is_basic_map_mode: ???
     */
    public static function isBasicMapMode(): Binding { return new Binding("is_basic_map_mode"); }

    /**
     * #is_locator_map_mode: ???
     */
    public static function isLocatorMapMode(): Binding { return new Binding("is_locator_map_mode"); }

    /**
     * #is_extend_mode: ???
     */
    public static function isExtendMode(): Binding { return new Binding("is_extend_mode"); }

    /**
     * #is_locked_mode: ???
     */
    public static function isLockedMode(): Binding { return new Binding("is_locked_mode"); }

    /**
     * #output_description: ???
     */
    public static function outputDescription(): Binding { return new Binding("output_description"); }
    // Enchanting Table (ui/enchanting_table_screen.json)

    /**
     * #selectable_dust_is_visible: ???
     */
    public static function selectableDustIsVisible(): Binding { return new Binding("selectable_dust_is_visible"); }

    /**
     * #unselectable_dust_is_visible: ???
     */
    public static function unselectableDustIsVisible(): Binding { return new Binding("unselectable_dust_is_visible"); }

    /**
     * #runes: ???
     */
    public static function runes(): Binding { return new Binding("runes"); }

    /**
     * #cost: ???
     */
    public static function cost(): Binding { return new Binding("cost"); }

    /**
     * #unselectable_button_visibility: ???
     */
    public static function unselectableButtonVisibility(): Binding { return new Binding("unselectable_button_visibility"); }

    /**
     * #selectable_button_visibility: ???
     */
    public static function selectableButtonVisibility(): Binding { return new Binding("selectable_button_visibility"); }

    /**
     * #show_selected_button_highlight: ???
     */
    public static function showSelectedButtonHighlight(): Binding { return new Binding("show_selected_button_highlight"); }

    /**
     * #active_enchant: ???
     */
    public static function activeEnchant(): Binding { return new Binding("active_enchant"); }

    /**
     * #inactive_enchant: ???
     */
    public static function inactiveEnchant(): Binding { return new Binding("inactive_enchant"); }

    /**
     * #input_item_id: ???
     */
    public static function inputItemId(): Binding { return new Binding("input_item_id"); }

    /**
     * #output_item_id: ???
     */
    public static function outputItemId(): Binding { return new Binding("output_item_id"); }

    /**
     * #enchant_hint: ???
     */
    public static function enchantHint(): Binding { return new Binding("enchant_hint"); }

    /**
     * #player_level_color: ???
     */
    public static function playerLevelColor(): Binding { return new Binding("player_level_color"); }

    /**
     * #player_level_info: ???
     */
    public static function playerLevelInfo(): Binding { return new Binding("player_level_info"); }

    /**
     * #enchant_error: ???
     */
    public static function enchantError(): Binding { return new Binding("enchant_error"); }
    // Furnace (ui/furnace_screen.json)

    /**
     * #furnace_arrow_ratio: ???
     */
    public static function furnaceArrowRatio(): Binding { return new Binding("furnace_arrow_ratio"); }

    /**
     * #furnace_flame_ratio: ???
     */
    public static function furnaceFlameRatio(): Binding { return new Binding("furnace_flame_ratio"); }

    /**
     * #output_name: ???
     */
    public static function outputName(): Binding { return new Binding("output_name"); }
    // Horse (ui/horse_screen.json)

    /**
     * #entity_id: ???
     */
    public static function entityId(): Binding { return new Binding("entity_id"); }

    /**
     * #equip_grid_dimensions: ???
     */
    public static function equipGridDimensions(): Binding { return new Binding("equip_grid_dimensions"); }

    /**
     * #inv_grid_dimensions: ???
     */
    public static function invGridDimensions(): Binding { return new Binding("inv_grid_dimensions"); }

    /**
     * #sadle_slot_centered: ???
     */
    public static function sadleSlotCentered(): Binding { return new Binding("sadle_slot_centered"); }

    /**
     * #has_saddle_slot: ???
     */
    public static function hasSaddleSlot(): Binding { return new Binding("has_saddle_slot"); }

    /**
     * #has_armor_slot: ???
     */
    public static function hasArmorSlot(): Binding { return new Binding("has_armor_slot"); }

    /**
     * #has_only_armor_slot: ???
     */
    public static function hasOnlyArmorSlot(): Binding { return new Binding("has_only_armor_slot"); }

    /**
     * #has_only_carpet_slot: ???
     */
    public static function hasOnlyCarpetSlot(): Binding { return new Binding("has_only_carpet_slot"); }

    /**
     * #has_armor_and_saddle_slot: ???
     */
    public static function hasArmorAndSaddleSlot(): Binding { return new Binding("has_armor_and_saddle_slot"); }

    /**
     * #has_carpet_and_saddle_slot: ???
     */
    public static function hasCarpetAndSaddleSlot(): Binding { return new Binding("has_carpet_and_saddle_slot"); }

    /**
     * #is_chested: ???
     */
    public static function isChested(): Binding { return new Binding("is_chested"); }

    /**
     * #renderer_tab_toggle: ???
     */
    public static function rendererTabToggle(): Binding { return new Binding("renderer_tab_toggle"); }

    /**
     * #chest_tab_toggle: ???
     */
    public static function chestTabToggle(): Binding { return new Binding("chest_tab_toggle"); }
    // Loom (ui/loom_screen.json)

    /**
     * #pattern_cell_background_texture: ???
     */
    public static function patternCellBackgroundTexture(): Binding { return new Binding("pattern_cell_background_texture"); }

    /**
     * #container_cell_background_texture: ???
     * Also in (ui/stonecutter_screen.json)
     */
    public static function containerCellBackgroundTexture(): Binding { return new Binding("container_cell_background_texture"); }

    /**
     * #empty_image_visible: ???
     */
    public static function emptyImageVisible(): Binding { return new Binding("empty_image_visible"); }

    /**
     * #banner_patterns: ???
     */
    public static function bannerPatterns(): Binding { return new Binding("banner_patterns"); }

    /**
     * #banner_colors: ???
     */
    public static function bannerColors(): Binding { return new Binding("banner_colors"); }

    /**
     * #pattern_selector_total_items: ???
     */
    public static function patternSelectorTotalItems(): Binding { return new Binding("pattern_selector_total_items"); }

    /**
     * #result_patterns: ???
     */
    public static function resultPatterns(): Binding { return new Binding("result_patterns"); }

    /**
     * #result_colors: ???
     */
    public static function resultColors(): Binding { return new Binding("result_colors"); }

    /**
     * #is_right_tab_loom: ???
     */
    public static function isRightTabLoom(): Binding { return new Binding("is_right_tab_loom"); }

    /**
     * #is_left_tab_patterns: ???
     */
    public static function isLeftTabPatterns(): Binding { return new Binding("is_left_tab_patterns"); }
    // Stonecutter (ui/stonecutter_screen.json)

    /**
     * #stone_cell_background_texture: ???
     */
    public static function stoneCellBackgroundTexture(): Binding { return new Binding("stone_cell_background_texture"); }

    /**
     * #item_stack_count: ???
     */
    public static function itemStackCount(): Binding { return new Binding("item_stack_count"); }

    /**
     * #stone_selector_total_items: ???
     */
    public static function stoneSelectorTotalItems(): Binding { return new Binding("stone_selector_total_items"); }

    /**
     * #has_input_item: ???
     */
    public static function hasInputItem(): Binding { return new Binding("has_input_item"); }

    /**
     * #is_right_tab_stonecutter: ???
     */
    public static function isRightTabStonecutter(): Binding { return new Binding("is_right_tab_stonecutter"); }

    /**
     * #is_left_tab_stones: ???
     */
    public static function isLeftTabStones(): Binding { return new Binding("is_left_tab_stones"); }
    // Death (ui/death_screen.json)

    /**
     * #death_reason_text: ???
     */
    public static function deathReasonText(): Binding { return new Binding("death_reason_text"); }

    /**
     * #respawn_visible: ???
     */
    public static function respawnVisible(): Binding { return new Binding("respawn_visible"); }

    /**
     * #quit_enabled: ???
     */
    public static function quitEnabled(): Binding { return new Binding("quit_enabled"); }

    /**
     * #quit_visible: ???
     */
    public static function quitVisible(): Binding { return new Binding("quit_visible"); }

    /**
     * #buttons_and_deathmessage_visible: ???
     */
    public static function buttonsAndDeathmessageVisible(): Binding { return new Binding("buttons_and_deathmessage_visible"); }
    // Villager Trade2 (ui/trade2_screen.json)

    /**
     * #name_label: ???
     */
    public static function nameLabel(): Binding { return new Binding("name_label"); }

    /**
     * #trade_cell_background_texture: ???
     */
    public static function tradeCellBackgroundTexture(): Binding { return new Binding("trade_cell_background_texture"); }

    /**
     * #trade_item_count: ???
     */
    public static function tradeItemCount(): Binding { return new Binding("trade_item_count"); }

    /**
     * #single_slash_visible: ???
     */
    public static function singleSlashVisible(): Binding { return new Binding("single_slash_visible"); }

    /**
     * #double_slash_visible: ???
     */
    public static function doubleSlashVisible(): Binding { return new Binding("double_slash_visible"); }

    /**
     * #second_trade_item_count: ???
     */
    public static function secondTradeItemCount(): Binding { return new Binding("second_trade_item_count"); }

    /**
     * #trade_price_different: ???
     */
    public static function tradePriceDifferent(): Binding { return new Binding("trade_price_different"); }

    /**
     * #trade_cross_out_visible: ???
     */
    public static function tradeCrossOutVisible(): Binding { return new Binding("trade_cross_out_visible"); }

    /**
     * #padding_around_sell_item: ???
     */
    public static function paddingAroundSellItem(): Binding { return new Binding("padding_around_sell_item"); }

    /**
     * #trade_possible: ???
     */
    public static function tradePossible(): Binding { return new Binding("trade_possible"); }

    /**
     * #trade_toggle_state: ???
     */
    public static function tradeToggleState(): Binding { return new Binding("trade_toggle_state"); }

    /**
     * #trade_toggle_enabled: ???
     */
    public static function tradeToggleEnabled(): Binding { return new Binding("trade_toggle_enabled"); }

    /**
     * #trade_tier_total: ???
     */
    public static function tradeTierTotal(): Binding { return new Binding("trade_tier_total"); }

    /**
     * #tier_name: ???
     */
    public static function tierName(): Binding { return new Binding("tier_name"); }

    /**
     * #is_tier_unlocked: ???
     */
    public static function isTierUnlocked(): Binding { return new Binding("is_tier_unlocked"); }

    /**
     * #is_left_tab_trade: ???
     */
    public static function isLeftTabTrade(): Binding { return new Binding("is_left_tab_trade"); }

    /**
     * #show_level: ???
     */
    public static function showLevel(): Binding { return new Binding("show_level"); }

    /**
     * #tier_visible: ???
     */
    public static function tierVisible(): Binding { return new Binding("tier_visible"); }

    /**
     * #trade_selector_total: ???
     */
    public static function tradeSelectorTotal(): Binding { return new Binding("trade_selector_total"); }

    /**
     * #has_second_buy_item: ???
     */
    public static function hasSecondBuyItem(): Binding { return new Binding("has_second_buy_item"); }

    /**
     * #exp_bar_visible: ???
     */
    public static function expBarVisible(): Binding { return new Binding("exp_bar_visible"); }

    /**
     * #exp_progress: ???
     */
    public static function expProgress(): Binding { return new Binding("exp_progress"); }

    /**
     * #exp_possible_progress: ???
     */
    public static function expPossibleProgress(): Binding { return new Binding("exp_possible_progress"); }

    /**
     * #trade_details_button_1_visible: ???
     */
    public static function tradeDetailsButton1Visible(): Binding { return new Binding("trade_details_button_1_visible"); }

    /**
     * #trade_details_button_2_visible: ???
     */
    public static function tradeDetailsButton2Visible(): Binding { return new Binding("trade_details_button_2_visible"); }

    /**
     * #enchantment_details_button_visible: ???
     */
    public static function enchantmentDetailsButtonVisible(): Binding { return new Binding("enchantment_details_button_visible"); }

    /**
     * #item_valid: ???
     */
    public static function itemValid(): Binding { return new Binding("item_valid"); }
    # Value depends on the screen it is in:

    /**
     * #body_text: ???
     */
    public static function bodyText(): Binding { return new Binding("body_text"); }

    /**
     * #hover_text: ???
     */
    public static function hoverText(): Binding { return new Binding("hover_text"); }

    /**
     * #cross_out_icon: ???
     */
    public static function crossOutIcon(): Binding { return new Binding("cross_out_icon"); }

    /**
     * #is_left_tab_inventory: ???
     */
    public static function isLeftTabInventory(): Binding { return new Binding("is_left_tab_inventory"); }

    /**
     * #selected_hover_text: ???
     */
    public static function selectedHoverText(): Binding { return new Binding("selected_hover_text"); }
    // Others:

    /**
     * #tts_dialog_body: ???
     */
    public static function ttsDialogBody(): Binding { return new Binding("tts_dialog_body"); }

    /**
     * #button_enabled: ???
     */
    public static function buttonEnabled(): Binding { return new Binding("button_enabled"); }

    /**
     * #using_touch: ???
     */
    public static function usingTouch(): Binding { return new Binding("using_touch"); }

    /**
     * #close_button_visible: ???
     * Also in Book (ui/book_screen.json)
     */
    public static function closeButtonVisible(): Binding { return new Binding("close_button_visible"); }
}