<?php

namespace vezdehod\packs\ui\jsonui\button;

class HardcodedButtonIDs {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#hardcoded-button-ids

    public const BUTTON_MENU_EXIT = 'button.menu_exit'; //
    public const BUTTON_MENU_CANCEL = 'button.menu_cancel'; // Escape key or Controller B
    public const BUTTON_MENU_INVENTORY_CANCEL = 'button.menu_inventory_cancel'; // Open Inventory keybinding
    public const BUTTON_MENU_OK = 'button.menu_ok'; // Enter key
    public const BUTTON_MENU_SELECT = 'button.menu_select'; // Mouse click
    public const BUTTON_CONTROLLER_SELECT = 'button.controller_select'; // Controller X
    public const BUTTON_MENU_SECONDARY_SELECT = 'button.menu_secondary_select'; //
    public const BUTTON_CONTROLLER_SECONDARY_SELECT = 'button.controller_secondary_select'; //
    public const BUTTON_CONTROLLER_SECONDARY_SELECT_LEFT = 'button.controller_secondary_select_left'; //
    public const BUTTON_CONTROLLER_SECONDARY_SELECT_RIGHT = 'button.controller_secondary_select_right'; // Controller R3
    public const BUTTON_CONTROLLER_START = 'button.controller_start'; //
    public const BUTTON_MENU_UP = 'button.menu_up'; // Arrow Up key
    public const BUTTON_MENU_DOWN = 'button.menu_down'; // Arrow Down key
    public const BUTTON_MENU_LEFT = 'button.menu_left'; // Arrow Left key
    public const BUTTON_MENU_RIGHT = 'button.menu_right'; // Arrow Right key
    public const BUTTON_MENU_TAB_LEFT = 'button.menu_tab_left'; // Menu Tab Left keybinding or Controller Left Bumper
    public const BUTTON_MENU_TAB_RIGHT = 'button.menu_tab_right'; // Menu Tab Right keybinding or Controller Right Bumper
    public const BUTTON_MENU_ALTERNATE_TAB_LEFT = 'button.menu_alternate_tab_left'; //
    public const BUTTON_MENU_ALTERNATE_TAB_RIGHT = 'button.menu_alternate_tab_right'; //
    public const BUTTON_MENU_AUTOCOMPLETE = 'button.menu_autocomplete'; // Uses Tab key
    public const BUTTON_MENU_AUTOCOMPLETE_BACK = 'button.menu_autocomplete_back'; //
    public const BUTTON_CONTROLLER_AUTOCOMPLETE = 'button.controller_autocomplete'; //
    public const BUTTON_CONTROLLER_AUTOCOMPLETE_BACK = 'button.controller_autocomplete_back'; //
    public const BUTTON_MENU_TEXTEDIT_UP = 'button.menu_textedit_up'; // Uses Arrow Up key
    public const BUTTON_MENU_TEXTEDIT_DOWN = 'button.menu_textedit_down'; // Uses Arrow Down key
    public const BUTTON_CONTROLLER_TEXTEDIT_UP = 'button.controller_textedit_up'; //
    public const BUTTON_CONTROLLER_TEXTEDIT_DOWN = 'button.controller_textedit_down'; //
    public const BUTTON_MENU_AUTO_PLACE = 'button.menu_auto_place'; //
    public const BUTTON_MENU_INVENTORY_DROP = 'button.menu_inventory_drop'; // Drop Item keybinding
    public const BUTTON_MENU_INVENTORY_DROP_ALL = 'button.menu_inventory_drop_all'; // Drop Item + Control key
    public const BUTTON_MENU_CLEAR = 'button.menu_clear'; //
    public const BUTTON_CHAT = 'button.chat'; // Open Chat keybinding
    public const BUTTON_MOBEFFECTS = 'button.mobeffects'; // Mob Effects keybinding
    public const KEY_EMOTE = 'key.emote'; // Emote keybinding
    public const BUTTON_SLOT0 = 'button.slot0'; //
    public const BUTTON_SLOT1 = 'button.slot1'; // 1 key (+Emote Wheel)
    public const BUTTON_SLOT2 = 'button.slot2'; // 2 key (+Emote Wheel)
    public const BUTTON_SLOT3 = 'button.slot3'; // 3 key (+Emote Wheel)
    public const BUTTON_SLOT4 = 'button.slot4'; // 4 key (+Emote Wheel)
    public const BUTTON_SLOT5 = 'button.slot5'; // 5 key (+Emote Wheel)
    public const BUTTON_SLOT6 = 'button.slot6'; // 6 key (+Emote Wheel)
    public const BUTTON_SLOT7 = 'button.slot7'; // 7 key
    public const BUTTON_SLOT8 = 'button.slot8'; // 8 key
    public const BUTTON_SLOT9 = 'button.slot9'; // 9 key
    public const BUTTON_INVENTORY_RIGHT = 'button.inventory_right'; // Mouse Wheel Up
    public const BUTTON_INVENTORY_LEFT = 'button.inventory_left'; // Mouse Wheel Down
    public const BUTTON_SCOREBOARD = 'button.scoreboard'; //
    public const BUTTON_HIDE_GUI = 'button.hide_gui'; // F1 key
    public const BUTTON_HIDE_TOOLTIPS = 'button.hide_tooltips'; //
    public const BUTTON_HIDE_PAPERDOLL = 'button.hide_paperdoll'; //

    public const BUTTON_MENU_VR_REALIGN = 'button.menu_vr_realign'; //
    public const ANY = 'any'; // literally the name of it
    //Specific Screen Button IDs:

    //Settings (ui/settings_screen.json)
    public const BUTTON_OPEN_CONTENT_LOG_HISTORY = 'button.open_content_log_history'; //
    public const BUTTON_CLEAR_CONTENT_LOG_FILES = 'button.clear_content_log_files'; //
    public const BUTTON_CLEAR_MSA_TOKEN_BUTTON = 'button.clear_msa_token_button'; //
    public const BUTTON_TERMS_AND_CONDITIONS_POPUP = 'button.terms_and_conditions_popup'; //
    public const BUTTON_CREDITS = 'button.credits'; //
    public const BUTTON_UNLINK_MSA = 'button.unlink_msa'; //
    public const BUTTON_ATTRIBUTE_POPUP = 'button.attribute_popup'; //
    public const BUTTON_LICENSED_CONTENT = 'button.licensed_content'; //
    public const BUTTON_FONT_LICENSE = 'button.font_license'; //
    public const BUTTON_TOS_HYPERLINK = 'button.tos_hyperlink'; //
    public const BUTTON_PRIVPOL_HYPERLINK = 'button.privpol_hyperlink'; //
    public const BUTTON_TOS_POPUP = 'button.tos_popup'; //
    public const BUTTON_PRIVPOL_POPUP = 'button.privpol_popup'; //
    public const BUTTON_BINDING_BUTTON = 'button.binding_button'; //
    public const BUTTON_RESET_BINDING = 'button.reset_binding'; //
    public const BUTTON_RESET_KEYBOARD_BINDINGS = 'button.reset_keyboard_bindings'; //
    public const BUTTON_VIEW_ACCOUNT_ERRORS = 'button.view_account_errors'; //
    //Book (ui/book_screen.json)
    public const BUTTON_PREV_PAGE = 'button.prev_page'; //
    public const BUTTON_NEXT_PAGE = 'button.next_page'; //
    public const BUTTON_BOOK_EXIT = 'button.book_exit'; //
    //Chat (ui/chat_screen.json)
    public const BUTTON_SEND = 'button.send'; //
    public const BUTTON_CHAT_AUTOCOMPLETE = 'button.chat_autocomplete'; //
    public const BUTTON_CHAT_AUTOCOMPLETE_BACK = 'button.chat_autocomplete_back'; //
    public const BUTTON_CHAT_PREVIOUS_MESSAGE = 'button.chat_previous_message'; //
    public const BUTTON_CHAT_NEXT_MESSAGE = 'button.chat_next_message'; //
    public const BUTTON_CHAT_MENU_CANCEL = 'button.chat_menu_cancel'; //
    //Command Block (ui/command_block_screen.json)
    public const COMMAND_BLOCK_INPUT_MINIMIZE = 'command_block.input_minimize'; //
    //public const BUTTON_CHAT_AUTOCOMPLETE = 'button.chat_autocomplete'; //
    //public const BUTTON_CHAT_AUTOCOMPLETE_BACK = 'button.chat_autocomplete_back'; //
    //Comment (ui/comment_screen.json)
    public const BUTTON_COMMENT_OPTIONS_CLOSE = 'button.comment_options_close'; //
    public const BUTTON_COMMENT_FEED_OPTIONS_CLOSE = 'button.comment_feed_options_close'; //
    public const BUTTON_CLOSE_COMMENTS = 'button.close_comments'; //
    public const BUTTON_COMMENT_NEXT_BUTTON = 'button.comment_next_button'; //
    public const BUTTON_COMMENT_PREV_BUTTON = 'button.comment_prev_button'; //
    //Credits (ui/credits_screen.json)
    public const BUTTON_SHOW_SKIP = 'button.show_skip'; //
    //Death Menu (ui/death_screen.json)
    public const BUTTON_RESPAWN_BUTTON = 'button.respawn_button'; //
    public const BUTTON_MAIN_MENU_BUTTON = 'button.main_menu_button'; //
    //Emote Wheel (ui/emote_screen_wheel.json)
    public const BUTTON_REBIND_MODE = 'button.rebind_mode'; //
    public const BUTTON_DRESSING_ROOM = 'button.dressing_room'; //
    public const BUTTON_EMOTE_SELECTED = 'button.emote_selected'; //
    public const BUTTON_SELECT_EMOTE_SLOT_0 = 'button.select_emote_slot_0'; //
    public const BUTTON_SELECT_EMOTE_SLOT_1 = 'button.select_emote_slot_1'; //
    public const BUTTON_SELECT_EMOTE_SLOT_2 = 'button.select_emote_slot_2'; //
    public const BUTTON_SELECT_EMOTE_SLOT_3 = 'button.select_emote_slot_3'; //
    public const BUTTON_SELECT_EMOTE_SLOT_4 = 'button.select_emote_slot_4'; //
    public const BUTTON_SELECT_EMOTE_SLOT_5 = 'button.select_emote_slot_5'; //
    public const BUTTON_ITERATE_SELECTION_LEFT = 'button.iterate_selection_left'; //
    public const BUTTON_ITERATE_SELECTION_RIGHT = 'button.iterate_selection_right'; //
    //Feed (ui/feed_screen.json)
    public const BUTTON_FEED_IMAGE = 'button.feed_image'; //
    public const BUTTON_NEWPOST = 'button.newpost'; //
    public const BUTTON_ADD_SCREENSHOT = 'button.add_screenshot'; //
    public const BUTTON_FEED_COMMENT = 'button.feed_comment'; //
    public const BUTTON_FEED_PREV_BUTTON = 'button.feed_prev_button'; //
    public const BUTTON_FEED_NEXT_BUTTON = 'button.feed_next_button'; //
    public const BUTTON_FEED_NEW_POST_CLOSE = 'button.feed_new_post_close'; //
    public const BUTTON_FEED_OPTIONS_CLOSE = 'button.feed_options_close'; //
    public const BUTTON_CLOSE_FEED = 'button.close_feed'; //
    //Game Menu (ui/pause_screen.json)
    public const BUTTON_TO_PROFILE_OR_SKINS_SCREEN = 'button.to_profile_or_skins_screen'; //
    public const BUTTON_PLAYER_PROFILE_CARD = 'button.player_profile_card'; //
    public const BUTTON_MENU_CONTINUE = 'button.menu_continue'; //
    public const BUTTON_MENU_SERVER_STORE = 'button.menu_server_store'; //
    public const BUTTON_SCREENSHOT = 'button.screenshot'; //
    public const BUTTON_MENU_HOW_TO_PLAY = 'button.menu_how_to_play'; //
    public const BUTTON_MENU_FEEDBACK = 'button.menu_feedback'; //
    public const BUTTON_MENU_PERMISSION = 'button.menu_permission'; //
    public const BUTTON_MENU_INVITE_PLAYERS = 'button.menu_invite_players'; //
    public const BUTTON_MENU_QUIT = 'button.menu_quit'; //
    public const BUTTON_MENU_FEED = 'button.menu_feed'; //
    public const BUTTON_PAUSE_FOCUS_FILLER = 'button.pause_focus_filler'; //
    //In Bed (ui/in_bed_screen.json)
    public const BUTTON_WAKE_UP_BUTTON = 'button.wake_up_button'; //
    //Invite (ui/invite_screen.json)
    public const BUTTON_ADD_FRIEND = 'button.add_friend'; //
    public const BUTTON_ADD_MEMBER = 'button.add_member'; //
    public const BUTTON_SEND_INVITES = 'button.send_invites'; //
    //Manage Feed (ui/manage_feed_screen.json)
    public const BUTTON_MANAGE_FEED_PREV_BUTTON = 'button.manage_feed_prev_button'; //
    public const BUTTON_MANAGE_FEED_NEXT_BUTTON = 'button.manage_feed_next_button'; //
    public const BUTTON_MANAGE_FEED_IGNORE = 'button.manage_feed_ignore'; //
    public const BUTTON_MANAGE_FEED_DELETE = 'button.manage_feed_delete'; //
    public const BUTTON_CLOSE_MANAGE_FEED = 'button.close_manage_feed'; //
    //Anvil (ui/anvil_screen.json)
    public const BUTTON_ANVIL_TAKE_ALL_PLACE_ALL = 'button.anvil_take_all_place_all'; //
    public const BUTTON_ANVIL_COALESCE_STACK = 'button.anvil_coalesce_stack'; //
    //Cartography Table (ui/cartography_screen.json)
    public const BUTTON_CARTOGRAPHY_RESULT_TAKE_ALL_PLACE_ALL = 'button.cartography_result_take_all_place_all'; //
    //Enchanting Table (ui/enchanting_table_screen.json)
    public const BUTTON_ENCHANT = 'button.enchant'; //
    //Grindstone (ui/grindstone_screen.json)
    public const BUTTON_GRINDSTONE_TAKE_ALL_PLACE_ALL = 'button.grindstone_take_all_place_all'; //
    public const BUTTON_GRINDSTONE_COALESCE_STACK = 'button.grindstone_coalesce_stack'; //
    //Loom (ui/loom_screen.json)
    public const BUTTON_LOOM_RESULT_TAKE_ALL_PLACE_ALL = 'button.loom_result_take_all_place_all'; //
    public const BUTTON_PATTERN_SELECT = 'button.pattern_select'; //
    //Villager Trade (ui/trade_screen.json)
    public const BUTTON_CYCLE_RECIPE_LEFT = 'button.cycle_recipe_left'; //
    public const BUTTON_CYCLE_RECIPE_RIGHT = 'button.cycle_recipe_right'; //
    public const BUTTON_TRADE_TAKE_ALL_PLACE_ALL = 'button.trade_take_all_place_all'; //
    public const BUTTON_TRADE_TAKE_HALF_PLACE_ONE = 'button.trade_take_half_place_one'; //
    public const BUTTON_TRADE_COALESCE_STACK = 'button.trade_coalesce_stack'; //
    //Play (ui/play_screen.json)
    public const BUTTON_MENU_SIGN_IN_TO_VIEW_REALMS = 'button.menu_sign_in_to_view_realms'; //
    public const BUTTON_MENU_REALMS_WORLD_ITEM_EDIT = 'button.menu_realms_world_item_edit'; //
    public const BUTTON_MENU_REALMS_FEED = 'button.menu_realms_feed'; //
    public const BUTTON_MENU_REALMS_WORLD_ITEM_REMOVE = 'button.menu_realms_world_item_remove'; //
    public const BUTTON_MENU_NETWORK_WORLD_ITEM = 'button.menu_network_world_item'; //
    public const BUTTON_MENU_NETWORK_SERVER_WORLD_EDIT = 'button.menu_network_server_world_edit'; //
    public const BUTTON_CONNECT_TO_THIRD_PARTY_SERVER = 'button.connect_to_third_party_server'; //
    public const BUTTON_VIEW_THIRD_PARTY_SERVER_OFFERS = 'button.view_third_party_server_offers'; //
    public const BUTTON_DESCRIPTION_READ_TOGGLE = 'button.description_read_toggle'; //
    public const BUTTON_NEWS_READ_TOGGLE = 'button.news_read_toggle'; //
    public const BUTTON_LOCAL_WORLD_UPLOAD = 'button.local_world_upload'; //
    public const BUTTON_MENU_START_LOCAL_WORLD = 'button.menu_start_local_world'; //
    public const BUTTON_CONVERT_LEGACY_WORLD = 'button.convert_legacy_world'; //
    public const BUTTON_MENU_LOCAL_WORLD_ITEM_EDIT = 'button.menu_local_world_item_edit'; //
    public const BUTTON_MENU_LEGACY_WORLD_ITEM_DELETE = 'button.menu_legacy_world_item_delete'; //
    public const BUTTON_IMPORT_BETA_RETAIL_LOCAL_WORLD = 'button.import_beta_retail_local_world'; //
    public const BUTTON_IMPORT_BETA_RETAIL_LEGACY_WORLD = 'button.import_beta_retail_legacy_world'; //
    public const BUTTON_MENU_NETWORK_ADD_FRIEND = 'button.menu_network_add_friend'; //
    public const BUTTON_MENU_NETWORK_JOIN_BY_CODE = 'button.menu_network_join_by_code'; //
    public const BUTTON_MENU_QUICK_PLAY = 'button.menu_quick_play'; //
    public const BUTTON_NEW_WORLD_UPLOAD = 'button.new_world_upload'; //
    public const BUTTON_MENU_LOCAL_WORLD_CREATE = 'button.menu_local_world_create'; //
    public const BUTTON_CREATE_ON_REALMS_BUTTON = 'button.create_on_realms_button'; //
    public const BUTTON_ARCHIVED_WORLD_UPLOAD = 'button.archived_world_upload'; //
    public const BUTTON_MENU_IMPORT_LEVEL = 'button.menu_import_level'; //
    public const BUTTON_MENU_SYNC_LEGACY_WORLDS = 'button.menu_sync_legacy_worlds'; //
    public const BUTTON_REALMS_WARNING_MORE_INFO = 'button.realms_warning_more_info'; //
    public const BUTTON_MENU_REALM_WORLD_TRIAL = 'button.menu_realm_world_trial'; //
    public const BUTTON_MENU_REALM_NINTENDO_FIRST_REALM_PURCHASE_BUTTON = 'button.menu_realm_nintendo_first_realm_purchase_button'; //
    public const BUTTON_NO_LOCAL_WORLDS_LAUNCH_HELP = 'button.no_local_worlds_launch_help'; //
    public const BUTTON_MENU_NETWORK_JOIN_BY_CODE_POPUP_JOIN = 'button.menu_network_join_by_code_popup_join'; //
    public const BUTTON_JOIN_SERVER_ANYWAY = 'button.join_server_anyway'; //
    public const BUTTON_CANCEL_JOIN_SERVER = 'button.cancel_join_server'; //
    //Others
    public const BUTTON_TRY_MENU_EXIT = 'button.try_menu_exit'; //
    public const BUTTON_CLOSE_DIALOG = 'button.close_dialog'; //
    public const BUTTON_MENU_PLAY = 'button.menu_play'; //
    public const PLAY_BUTTON_TARGET = '$play_button_target'; // (hardcoded)
    public const BUTTON_MENU_STORE = 'button.menu_store'; //
    public const BUTTON_MENU_ACHIEVEMENTS = 'button.menu_achievements'; //
    public const BUTTON_MENU_SETTINGS = 'button.menu_settings'; //
    public const BUTTON_SIGNIN = 'button.signin'; //
    public const BUTTON_MENU_SKINS = 'button.menu_skins'; //
    public const BUTTON_TO_PROFILE_SCREEN = 'button.to_profile_screen'; //
    public const BUTTON_MENU_COURSES = 'button.menu_courses'; //
    public const BUTTON_MENU_TUTORIAL = 'button.menu_tutorial'; //
    public const BUTTON_FEATURED_WORLD = 'button.featured_world'; //
    public const BUTTON_SWITCH_ACCOUNTS = 'button.switch_accounts'; //
    public const BUTTON_LAUNCH_EDITIONS = 'button.launch_editions'; //
    public const BUTTON_EDU_FEEDBACK = 'button.edu_feedback'; //
    public const BUTTON_EDU_RESOURCES = 'button.edu_resources'; //
    public const BUTTON_MENU_BUY_GAME = 'button.menu_buy_game'; //
    public const BUTTON_MENU_INVITE_NOTIFICATION = 'button.menu_invite_notification'; //
    public const BUTTON_SEARCH = 'button.search'; //
    public const BUTTON_HOTBAR_INVENTORY_BUTTON = 'button.hotbar_inventory_button'; //
    public const BUTTON_SELECT_OFFER = 'button.select_offer'; //
    public const BUTTON_ACTION_BUTTON = 'button.action_button'; //
    public const BUTTON_CREATE_REALM = 'button.create_realm'; //
    //public const BUTTON_SWITCH_ACCOUNTS = 'button.switch_accounts'; //
    public const BUTTON_HOTBAR_SELECT = 'button.hotbar_select'; //
    public const BUTTON_HOTBAR_OK = 'button.hotbar_ok'; //
    public const BUTTON_SLOT_PRESSED = 'button.slot_pressed'; //
    public const BUTTON_HOTBAR_INVENTORY_LEFT = 'button.hotbar_inventory_left'; //
    public const BUTTON_HOTBAR_INVENTORY_RIGHT = 'button.hotbar_inventory_right'; //
    public const BUTTON_HIDE_GUI_ALL = 'button.hide_gui_all'; //
    public const BUTTON_HIDE_TOOLTIPS_HUD = 'button.hide_tooltips_hud'; //
    public const BUTTON_HIDE_PAPERDOLL_HUD = 'button.hide_paperdoll_hud'; //
    public const BUTTON_SLOT_1 = 'button.slot_1'; //
    public const BUTTON_SLOT_2 = 'button.slot_2'; //
    public const BUTTON_SLOT_3 = 'button.slot_3'; //
    public const BUTTON_SLOT_4 = 'button.slot_4'; //
    public const BUTTON_SLOT_5 = 'button.slot_5'; //
    public const BUTTON_SLOT_6 = 'button.slot_6'; //
    public const BUTTON_SLOT_7 = 'button.slot_7'; //
    public const BUTTON_SLOT_8 = 'button.slot_8'; //
    public const BUTTON_SLOT_9 = 'button.slot_9'; //
    public const BUTTON_SLOT_0 = 'button.slot_0'; //
    //public const BUTTON_CHAT = 'button.chat'; //
    //public const BUTTON_MENU_CONTINUE = 'button.menu_continue'; //
    public const USER_CONFIRM_DIALOG_ESCAPE = 'user_confirm_dialog.escape'; //
    public const USER_CONFIRM_DIALOG_LEFT_BUTTON = 'user_confirm_dialog.left_button'; //
    public const USER_CONFIRM_DIALOG_MIDDLE_BUTTON = 'user_confirm_dialog.middle_button'; //
    public const USER_CONFIRM_DIALOG_RIGHTCANCEL_BUTTON = 'user_confirm_dialog.rightcancel_button'; //
    public const BUTTON_VIEW_SKIN = 'button.view_skin'; //
    public const BUTTON_DELETE_ACTION = 'button.delete_action'; //
    public const BUTTON_EXIT_STUDENT = 'button.exit_student'; //
    public const BUTTON_PLAY_VIDEO = 'button.play_video'; //
    public const BUTTON_MENU_STORE_ERROR = 'button.menu_store_error'; //
    public const BUTTON_LEFT_PANEL_TAB_INCREMENT = 'button.left_panel_tab_increment'; //
    public const BUTTON_LEFT_PANEL_TAB_DECREMENT = 'button.left_panel_tab_decrement'; //
    public const BUTTON_RIGHT_PANEL_TAB_INCREMENT = 'button.right_panel_tab_increment'; //
    public const BUTTON_RIGHT_PANEL_TAB_DECREMENT = 'button.right_panel_tab_decrement'; //
    public const BUTTON_LAYOUT_INCREMENT = 'button.layout_increment'; //
    public const BUTTON_LAYOUT_DECREMENT = 'button.layout_decrement'; //
    public const BUTTON_IS_HOVERED = 'button.is_hovered'; //
    public const BUTTON_CONTAINER_TAKE_ALL_PLACE_ALL = 'button.container_take_all_place_all'; //
    public const BUTTON_CONTAINER_TAKE_HALF_PLACE_ONE = 'button.container_take_half_place_one'; //
    public const BUTTON_CONTAINER_AUTO_PLACE = 'button.container_auto_place'; //
    public const BUTTON_COALESCE_STACK = 'button.coalesce_stack'; //
    public const BUTTON_SHAPE_DRAWING = 'button.shape_drawing'; //
    public const BUTTON_DESTROY_SELECTION = 'button.destroy_selection'; //
    public const BUTTON_CLEAR_SELECTED_RECIPE = 'button.clear_selected_recipe'; //
    public const BUTTON_CLEAR_HOTBAR_OR_REMOVE_ONE = 'button.clear_hotbar_or_remove_one'; //
    public const BUTTON_CLEAR_HOTBAR_OR_DROP = 'button.clear_hotbar_or_drop'; //
    public const BUTTON_CONTAINER_RESET_HELD = 'button.container_reset_held'; //
    //public const BUTTON_CONTAINER_AUTO_PLACE = 'button.container_auto_place'; //
    public const BUTTON_CONTAINER_SLOT_HOVERED = 'button.container_slot_hovered'; //
    public const BUTTON_BUTTON_HOVERED = 'button.button_hovered'; //
    public const BUTTON_SHIFT_PANE_FOCUS = 'button.shift_pane_focus'; //
    public const BUTTON_FOCUS_LEFT = 'button.focus_left'; //
    public const BUTTON_FOCUS_RIGHT = 'button.focus_right'; //
    public const BUTTON_FILTER_TOGGLE_HOVERED = 'button.filter_toggle_hovered'; //
    public const BUTTON_DROP_ONE = 'button.drop_one'; //
    public const BUTTON_CURSOR_DROP_ONE = 'button.cursor_drop_one'; //
    public const BUTTON_DROP_ALL = 'button.drop_all'; //
    public const BUTTON_CURSOR_DROP_ALL = 'button.cursor_drop_all'; //
    public const BUTTON_SEARCH_BAR_CLEAR = 'button.search_bar_clear'; //
    public const BUTTON_SEARCH_BAR_SELECTED = 'button.search_bar_selected'; //
    public const BUTTON_SEARCH_BAR_DESELECTED = 'button.search_bar_deselected'; //
    public const BUTTON_MENU_LEAVE_SCREEN = 'button.menu_leave_screen'; //
    public const BUTTON_TURN_DOLL = 'button.turn_doll'; //
    public const BUTTON_SELECT_SKIN = 'button.select_skin'; //
    public const BUTTON_SKIN_HOVERED = 'button.skin_hovered'; //
    public const BUTTON_SKIN_UNHOVERED = 'button.skin_unhovered'; //
    public const BUTTON_LEAVE = 'button.leave'; //
    public const BUTTON_LEAVE_ON_DEVICE = 'button.leave_on_device'; //
    public const BUTTON_TEXT_EDIT_BOX_SELECTED = 'button.text_edit_box_selected'; //
    public const BUTTON_TEXT_EDIT_BOX_DESELECTED = 'button.text_edit_box_deselected'; //
    public const BUTTON_TEXT_EDIT_BOX_HOVERED = 'button.text_edit_box_hovered'; //
    public const BUTTON_TEXT_EDIT_BOX_CLEAR = 'button.text_edit_box_clear'; //
    public const BUTTON_HELP = 'button.help'; //
}