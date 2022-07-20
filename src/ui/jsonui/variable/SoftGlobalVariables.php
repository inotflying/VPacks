<?php

namespace vezdehod\packs\ui\jsonui\variable;

class SoftGlobalVariables {
    //https://github.com/bedrock-dot-dev/packs/blob/master/stable/resource/ui/_global_variables.json
   
    //"\$([a-z\d_]+)": (.+), ?(//(.+))?$
    //  /**\n * $1: $4\n * default: $2\n */\npublic static function $1(): Variable { return new Variable("$1"); }

    //////// Text colors ////////
    /**
     * generic_button_text_color:  for those times you find a button that's kind of used but shouldn't...
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function genericButtonTextColor(): Variable { return new Variable("generic_button_text_color"); }

    /**
     * light_button_default_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function lightButtonDefaultTextColor(): Variable { return new Variable("light_button_default_text_color"); }

    /**
     * light_button_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightButtonHoverTextColor(): Variable { return new Variable("light_button_hover_text_color"); }

    /**
     * light_button_pressed_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightButtonPressedTextColor(): Variable { return new Variable("light_button_pressed_text_color"); }

    /**
     * light_button_locked_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function lightButtonLockedTextColor(): Variable { return new Variable("light_button_locked_text_color"); }

    /**
     * light_toggle_default_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function lightToggleDefaultTextColor(): Variable { return new Variable("light_toggle_default_text_color"); }

    /**
     * light_toggle_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightToggleHoverTextColor(): Variable { return new Variable("light_toggle_hover_text_color"); }

    /**
     * light_toggle_checked_default_text_color: ???
     * default: [ 0.1216, 0.1216, 0.1216 ]
     */
    public static function lightToggleCheckedDefaultTextColor(): Variable { return new Variable("light_toggle_checked_default_text_color"); }

    /**
     * light_toggle_checked_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightToggleCheckedHoverTextColor(): Variable { return new Variable("light_toggle_checked_hover_text_color"); }

    /**
     * dark_button_default_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkButtonDefaultTextColor(): Variable { return new Variable("dark_button_default_text_color"); }

    /**
     * dark_button_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkButtonHoverTextColor(): Variable { return new Variable("dark_button_hover_text_color"); }

    /**
     * dark_button_pressed_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkButtonPressedTextColor(): Variable { return new Variable("dark_button_pressed_text_color"); }

    /**
     * dark_button_locked_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function darkButtonLockedTextColor(): Variable { return new Variable("dark_button_locked_text_color"); }

    /**
     * dark_toggle_default_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkToggleDefaultTextColor(): Variable { return new Variable("dark_toggle_default_text_color"); }

    /**
     * dark_toggle_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkToggleHoverTextColor(): Variable { return new Variable("dark_toggle_hover_text_color"); }

    /**
     * dark_toggle_checked_default_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkToggleCheckedDefaultTextColor(): Variable { return new Variable("dark_toggle_checked_default_text_color"); }

    /**
     * dark_toggle_checked_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkToggleCheckedHoverTextColor(): Variable { return new Variable("dark_toggle_checked_hover_text_color"); }

    /**
     * light_button_secondary_default_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function lightButtonSecondaryDefaultTextColor(): Variable { return new Variable("light_button_secondary_default_text_color"); }

    /**
     * light_button_secondary_hover_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function lightButtonSecondaryHoverTextColor(): Variable { return new Variable("light_button_secondary_hover_text_color"); }

    /**
     * light_button_secondary_pressed_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function lightButtonSecondaryPressedTextColor(): Variable { return new Variable("light_button_secondary_pressed_text_color"); }

    /**
     * light_button_secondary_locked_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function lightButtonSecondaryLockedTextColor(): Variable { return new Variable("light_button_secondary_locked_text_color"); }

    /**
     * dark_button_secondary_default_text_color: ???
     * default: [ 0.7, 0.7, 0.7, 1.0 ]
     */
    public static function darkButtonSecondaryDefaultTextColor(): Variable { return new Variable("dark_button_secondary_default_text_color"); }

    /**
     * dark_button_secondary_hover_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function darkButtonSecondaryHoverTextColor(): Variable { return new Variable("dark_button_secondary_hover_text_color"); }

    /**
     * dark_button_secondary_pressed_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function darkButtonSecondaryPressedTextColor(): Variable { return new Variable("dark_button_secondary_pressed_text_color"); }

    /**
     * dark_button_secondary_locked_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function darkButtonSecondaryLockedTextColor(): Variable { return new Variable("dark_button_secondary_locked_text_color"); }

    /**
     * title_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function titleTextColor(): Variable { return new Variable("title_text_color"); }

    /**
     * pocket_title_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function pocketTitleTextColor(): Variable { return new Variable("pocket_title_text_color"); }

    /**
     * main_header_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function mainHeaderTextColor(): Variable { return new Variable("main_header_text_color"); }

    /**
     * sub_header_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function subHeaderTextColor(): Variable { return new Variable("sub_header_text_color"); }

    /**
     * tab_unchecked_text_color: ???
     * default: [ 0.8784, 0.8784, 0.8784 ]
     */
    public static function tabUncheckedTextColor(): Variable { return new Variable("tab_unchecked_text_color"); }

    /**
     * tab_unchecked_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabUncheckedHoverTextColor(): Variable { return new Variable("tab_unchecked_hover_text_color"); }

    /**
     * tab_unchecked_locked_text_color: ???
     * default: [ 0.8784, 0.8784, 0.8784 ]
     */
    public static function tabUncheckedLockedTextColor(): Variable { return new Variable("tab_unchecked_locked_text_color"); }

    /**
     * tab_unchecked_locked_hover_text_color: ???
     * default: [ 0.8784, 0.8784, 0.8784 ]
     */
    public static function tabUncheckedLockedHoverTextColor(): Variable { return new Variable("tab_unchecked_locked_hover_text_color"); }

    /**
     * tab_checked_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabCheckedTextColor(): Variable { return new Variable("tab_checked_text_color"); }

    /**
     * tab_checked_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabCheckedHoverTextColor(): Variable { return new Variable("tab_checked_hover_text_color"); }

    /**
     * tab_checked_locked_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabCheckedLockedTextColor(): Variable { return new Variable("tab_checked_locked_text_color"); }

    /**
     * tab_checked_locked_hover_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabCheckedLockedHoverTextColor(): Variable { return new Variable("tab_checked_locked_hover_text_color"); }

    /**
     * tab_secondary_unchecked_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabSecondaryUncheckedTextColor(): Variable { return new Variable("tab_secondary_unchecked_text_color"); }

    /**
     * tab_secondary_unchecked_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabSecondaryUncheckedHoverTextColor(): Variable { return new Variable("tab_secondary_unchecked_hover_text_color"); }

    /**
     * tab_secondary_unchecked_locked_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabSecondaryUncheckedLockedTextColor(): Variable { return new Variable("tab_secondary_unchecked_locked_text_color"); }

    /**
     * tab_secondary_unchecked_locked_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabSecondaryUncheckedLockedHoverTextColor(): Variable { return new Variable("tab_secondary_unchecked_locked_hover_text_color"); }

    /**
     * tab_secondary_checked_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabSecondaryCheckedTextColor(): Variable { return new Variable("tab_secondary_checked_text_color"); }

    /**
     * tab_secondary_checked_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabSecondaryCheckedHoverTextColor(): Variable { return new Variable("tab_secondary_checked_hover_text_color"); }

    /**
     * tab_secondary_checked_locked_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabSecondaryCheckedLockedTextColor(): Variable { return new Variable("tab_secondary_checked_locked_text_color"); }

    /**
     * tab_secondary_checked_locked_hover_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tabSecondaryCheckedLockedHoverTextColor(): Variable { return new Variable("tab_secondary_checked_locked_hover_text_color"); }

    /**
     * tab_unchecked_glyph_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabUncheckedGlyphColor(): Variable { return new Variable("tab_unchecked_glyph_color"); }

    /**
     * tab_unchecked_hover_glyph_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabUncheckedHoverGlyphColor(): Variable { return new Variable("tab_unchecked_hover_glyph_color"); }

    /**
     * tab_unchecked_locked_glyph_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabUncheckedLockedGlyphColor(): Variable { return new Variable("tab_unchecked_locked_glyph_color"); }

    /**
     * tab_unchecked_locked_hover_glyph_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabUncheckedLockedHoverGlyphColor(): Variable { return new Variable("tab_unchecked_locked_hover_glyph_color"); }

    /**
     * tab_checked_glyph_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabCheckedGlyphColor(): Variable { return new Variable("tab_checked_glyph_color"); }

    /**
     * tab_checked_hover_glyph_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabCheckedHoverGlyphColor(): Variable { return new Variable("tab_checked_hover_glyph_color"); }

    /**
     * tab_checked_locked_glyph_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabCheckedLockedGlyphColor(): Variable { return new Variable("tab_checked_locked_glyph_color"); }

    /**
     * tab_checked_locked_hover_glyph_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function tabCheckedLockedHoverGlyphColor(): Variable { return new Variable("tab_checked_locked_hover_glyph_color"); }

    /**
     * item_stack_count_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function itemStackCountColor(): Variable { return new Variable("item_stack_count_color"); }

    /**
     * selected_item_stack_count_color: ???
     * default: [ 1.0, 1.0, 0.0 ]
     */
    public static function selectedItemStackCountColor(): Variable { return new Variable("selected_item_stack_count_color"); }

    /**
     * item_hover_text_color:  Color of hover text gets overwrritten by text color format codes, so this is just for not failing unit tests
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function itemHoverTextColor(): Variable { return new Variable("item_hover_text_color"); }

    /**
     * pocket_item_details_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function pocketItemDetailsColor(): Variable { return new Variable("pocket_item_details_color"); }

    /**
     * tool_tip_text: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function toolTipText(): Variable { return new Variable("tool_tip_text"); }

    /**
     * structure_editor_text: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function structureEditorText(): Variable { return new Variable("structure_editor_text"); }

    /**
     * text_box_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function textBoxTextColor(): Variable { return new Variable("text_box_text_color"); }

    /**
     * text_box_locked_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function textBoxLockedTextColor(): Variable { return new Variable("text_box_locked_text_color"); }

    /**
     * place_holder_text_color: ???
     * default: [ 0.8510, 0.8510, 0.8510 ]
     */
    public static function placeHolderTextColor(): Variable { return new Variable("place_holder_text_color"); }

    /**
     * title_command_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function titleCommandTextColor(): Variable { return new Variable("title_command_text_color"); }

    /**
     * subtitle_command_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function subtitleCommandTextColor(): Variable { return new Variable("subtitle_command_text_color"); }

    /**
     * boss_name_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function bossNameTextColor(): Variable { return new Variable("boss_name_text_color"); }

    /**
     * body_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function bodyTextColor(): Variable { return new Variable("body_text_color"); }

    /**
     * portfolio_body_text_color: ???
     * default: [ 0.74, 0.64, 0.53 ]
     */
    public static function portfolioBodyTextColor(): Variable { return new Variable("portfolio_body_text_color"); }

    /**
     * portfolio_close_color: ???
     * default: [ 0, 0, 0 ]
     */
    public static function portfolioCloseColor(): Variable { return new Variable("portfolio_close_color"); }

    /**
     * dark_body_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function darkBodyTextColor(): Variable { return new Variable("dark_body_text_color"); }

    /**
     * dark_grid_item_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkGridItemTextColor(): Variable { return new Variable("dark_grid_item_text_color"); }

    /**
     * light_grid_item_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightGridItemTextColor(): Variable { return new Variable("light_grid_item_text_color"); }

    /**
     * enchanting_runes_color: ???
     * default: [ 0.54, 0.37, 0.36 ]
     */
    public static function enchantingRunesColor(): Variable { return new Variable("enchanting_runes_color"); }

    /**
     * enchanting_runes_fail_color: ???
     * default: [ 0.408, 0.368, 0.29 ]
     */
    public static function enchantingRunesFailColor(): Variable { return new Variable("enchanting_runes_fail_color"); }

    /**
     * enchanting_cost_success_color: ???
     * default: [ 0.5, 1, 0.125 ]
     */
    public static function enchantingCostSuccessColor(): Variable { return new Variable("enchanting_cost_success_color"); }

    /**
     * enchanting_cost_fail_color: ???
     * default: [ 0.54, 0.37, 0.36 ]
     */
    public static function enchantingCostFailColor(): Variable { return new Variable("enchanting_cost_fail_color"); }

    /**
     * beacon_power_title_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function beaconPowerTitleTextColor(): Variable { return new Variable("beacon_power_title_text_color"); }

    /**
     * anvil_cost_success_text_color: ???
     * default: [ 0.5, 1, 0.125 ]
     */
    public static function anvilCostSuccessTextColor(): Variable { return new Variable("anvil_cost_success_text_color"); }

    /**
     * anvil_cost_fail_text_color: ???
     * default: [ 1.0, 0.35, 0.35 ]
     */
    public static function anvilCostFailTextColor(): Variable { return new Variable("anvil_cost_fail_text_color"); }

    /**
     * smithing_table_cost_success_text_color: ???
     * default: [ 0.5, 1, 0.125 ]
     */
    public static function smithingTableCostSuccessTextColor(): Variable { return new Variable("smithing_table_cost_success_text_color"); }

    /**
     * smithing_table_cost_fail_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function smithingTableCostFailTextColor(): Variable { return new Variable("smithing_table_cost_fail_text_color"); }

    /**
     * gamepad_button_generic_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function gamepadButtonGenericTextColor(): Variable { return new Variable("gamepad_button_generic_text_color"); }

    /**
     * gamepad_a_button_text_color: ???
     * default: [ 0.0, 1.0, 0.0 ]
     */
    public static function gamepadAButtonTextColor(): Variable { return new Variable("gamepad_a_button_text_color"); }

    /**
     * gamepad_b_button_text_color: ???
     * default: [ 1.0, 0.0, 0.0 ]
     */
    public static function gamepadBButtonTextColor(): Variable { return new Variable("gamepad_b_button_text_color"); }

    /**
     * gamepad_x_button_text_color: ???
     * default: [ 0.0, 0.0, 1.0 ]
     */
    public static function gamepadXButtonTextColor(): Variable { return new Variable("gamepad_x_button_text_color"); }

    /**
     * gamepad_y_button_text_color: ???
     * default: [ 1.0, 1.0, 0.0 ]
     */
    public static function gamepadYButtonTextColor(): Variable { return new Variable("gamepad_y_button_text_color"); }

    /**
     * gamepad_description_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function gamepadDescriptionTextColor(): Variable { return new Variable("gamepad_description_text_color"); }

    /**
     * keyboard_helper_keys: ???
     * default: [ 1.0, 1.0, 0.0 ]
     */
    public static function keyboardHelperKeys(): Variable { return new Variable("keyboard_helper_keys"); }

    /**
     * achievement_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function achievementTextColor(): Variable { return new Variable("achievement_text_color"); }

    /**
     * xbl_signin_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function xblSigninTextColor(): Variable { return new Variable("xbl_signin_text_color"); }

    /**
     * toast_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function toastTextColor(): Variable { return new Variable("toast_text_color"); }

    /**
     * chat_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function chatTextColor(): Variable { return new Variable("chat_text_color"); }

    /**
     * hud_gamertag_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function hudGamertagColor(): Variable { return new Variable("hud_gamertag_color"); }

    /**
     * realms_text_color: ???
     * default: [ 0.57, 0.29, 0.67 ]
     */
    public static function realmsTextColor(): Variable { return new Variable("realms_text_color"); }

    /**
     * death_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function deathTextColor(): Variable { return new Variable("death_text_color"); }

    /**
     * loading_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function loadingTextColor(): Variable { return new Variable("loading_text_color"); }

    /**
     * experience_text_color: ???
     * default: [ 0.5, 1.0, 0.0 ]
     */
    public static function experienceTextColor(): Variable { return new Variable("experience_text_color"); }

    /**
     * feed_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function feedTextColor(): Variable { return new Variable("feed_text_color"); }

    /**
     * warning_text_color: ???
     * default: [ 0.8, 0.7, 0.0 ]
     */
    public static function warningTextColor(): Variable { return new Variable("warning_text_color"); }

    /**
     * error_text_color: ???
     * default: [ 1.0, 0.0, 0.0 ]
     */
    public static function errorTextColor(): Variable { return new Variable("error_text_color"); }

    /**
     * alert_label_text_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function alertLabelTextColor(): Variable { return new Variable("alert_label_text_color"); }

    /**
     * debug_store_text_color: ???
     * default: [ 0.0, 1.0, 0.0 ]
     */
    public static function debugStoreTextColor(): Variable { return new Variable("debug_store_text_color"); }

    /**
     * x_axis_text_color: ???
     * default: [ 1.0, 0.0, 0.0 ]
     */
    public static function xAxisTextColor(): Variable { return new Variable("x_axis_text_color"); }

    /**
     * y_axis_text_color: ???
     * default: [ 0.0, 1.0, 0.0 ]
     */
    public static function yAxisTextColor(): Variable { return new Variable("y_axis_text_color"); }

    /**
     * z_axis_text_color: ???
     * default: [ 0.0, 0.6392, 1.0 ]
     */
    public static function zAxisTextColor(): Variable { return new Variable("z_axis_text_color"); }

    /**
     * book_page_number_color: ???
     * default: [ 0.74, 0.64, 0.53 ]
     */
    public static function bookPageNumberColor(): Variable { return new Variable("book_page_number_color"); }

    /**
     * book_page_text_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function bookPageTextColor(): Variable { return new Variable("book_page_text_color"); }

    /**
     * book_title_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function bookTitleColor(): Variable { return new Variable("book_title_color"); }

    /**
     * book_title_placeholder_color: ???
     * default: [ 0.667, 0.667, 0.667 ]
     */
    public static function bookTitlePlaceholderColor(): Variable { return new Variable("book_title_placeholder_color"); }

    /**
     * book_title_label_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function bookTitleLabelColor(): Variable { return new Variable("book_title_label_color"); }

    /**
     * book_author_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function bookAuthorColor(): Variable { return new Variable("book_author_color"); }

    /**
     * book_author_label_color: ???
     * default: [ 0.667, 0.667, 0.667 ]
     */
    public static function bookAuthorLabelColor(): Variable { return new Variable("book_author_label_color"); }

    /**
     * book_warning_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function bookWarningColor(): Variable { return new Variable("book_warning_color"); }

    /**
     * npc_dialog_text_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function npcDialogTextColor(): Variable { return new Variable("npc_dialog_text_color"); }

    /**
     * npc_url_text_color: ???
     * default: [ 0.0, 0.0, 1.0 ]
     */
    public static function npcUrlTextColor(): Variable { return new Variable("npc_url_text_color"); }

    /**
     * wtc_pack_desc_text_color: ???
     * default: [ 0.75, 0.75, 0.75 ]
     */
    public static function wtcPackDescTextColor(): Variable { return new Variable("wtc_pack_desc_text_color"); }

    /**
     * item_lock_notification_text_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function itemLockNotificationTextColor(): Variable { return new Variable("item_lock_notification_text_color"); }

    //////// Glyph colors ////////

    /**
     * light_glyph_default_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function lightGlyphDefaultColor(): Variable { return new Variable("light_glyph_default_color"); }

    /**
     * light_glyph_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightGlyphHoverColor(): Variable { return new Variable("light_glyph_hover_color"); }

    /**
     * light_glyph_pressed_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightGlyphPressedColor(): Variable { return new Variable("light_glyph_pressed_color"); }

    /**
     * light_glyph_locked_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function lightGlyphLockedColor(): Variable { return new Variable("light_glyph_locked_color"); }

    /**
     * light_glyph_toggle_default_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function lightGlyphToggleDefaultColor(): Variable { return new Variable("light_glyph_toggle_default_color"); }

    /**
     * light_glyph_toggle_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightGlyphToggleHoverColor(): Variable { return new Variable("light_glyph_toggle_hover_color"); }

    /**
     * light_glyph_toggle_checked_default_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function lightGlyphToggleCheckedDefaultColor(): Variable { return new Variable("light_glyph_toggle_checked_default_color"); }

    /**
     * light_glyph_toggle_checked_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightGlyphToggleCheckedHoverColor(): Variable { return new Variable("light_glyph_toggle_checked_hover_color"); }

    /**
     * dark_glyph_default_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkGlyphDefaultColor(): Variable { return new Variable("dark_glyph_default_color"); }

    /**
     * dark_glyph_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkGlyphHoverColor(): Variable { return new Variable("dark_glyph_hover_color"); }

    /**
     * dark_glyph_pressed_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkGlyphPressedColor(): Variable { return new Variable("dark_glyph_pressed_color"); }

    /**
     * dark_glyph_locked_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function darkGlyphLockedColor(): Variable { return new Variable("dark_glyph_locked_color"); }

    /**
     * dark_glyph_toggle_default_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function darkGlyphToggleDefaultColor(): Variable { return new Variable("dark_glyph_toggle_default_color"); }

    /**
     * dark_glyph_toggle_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkGlyphToggleHoverColor(): Variable { return new Variable("dark_glyph_toggle_hover_color"); }

    /**
     * dark_glyph_toggle_checked_default_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function darkGlyphToggleCheckedDefaultColor(): Variable { return new Variable("dark_glyph_toggle_checked_default_color"); }

    /**
     * dark_glyph_toggle_checked_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkGlyphToggleCheckedHoverColor(): Variable { return new Variable("dark_glyph_toggle_checked_hover_color"); }

    //////// Border colors ////////

    /**
     * light_border_default_color: ???
     * default: [ 0.075, 0.075, 0.075 ]
     */
    public static function lightBorderDefaultColor(): Variable { return new Variable("light_border_default_color"); }

    /**
     * light_border_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightBorderHoverColor(): Variable { return new Variable("light_border_hover_color"); }

    /**
     * light_border_pressed_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightBorderPressedColor(): Variable { return new Variable("light_border_pressed_color"); }

    /**
     * light_border_locked_color: ???
     * default: [ 0.075, 0.075, 0.075 ]
     */
    public static function lightBorderLockedColor(): Variable { return new Variable("light_border_locked_color"); }

    /**
     * light_border_toggle_default_color: ???
     * default: [ 0.075, 0.075, 0.075 ]
     */
    public static function lightBorderToggleDefaultColor(): Variable { return new Variable("light_border_toggle_default_color"); }

    /**
     * light_border_toggle_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function lightBorderToggleHoverColor(): Variable { return new Variable("light_border_toggle_hover_color"); }

    /**
     * dark_border_default_color: ???
     * default: [ 0.075, 0.075, 0.075 ]
     */
    public static function darkBorderDefaultColor(): Variable { return new Variable("dark_border_default_color"); }

    /**
     * dark_border_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkBorderHoverColor(): Variable { return new Variable("dark_border_hover_color"); }

    /**
     * dark_border_pressed_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkBorderPressedColor(): Variable { return new Variable("dark_border_pressed_color"); }

    /**
     * dark_border_locked_color: ???
     * default: [ 0.075, 0.075, 0.075 ]
     */
    public static function darkBorderLockedColor(): Variable { return new Variable("dark_border_locked_color"); }

    /**
     * dark_border_toggle_default_color: ???
     * default: [ 0.075, 0.075, 0.075 ]
     */
    public static function darkBorderToggleDefaultColor(): Variable { return new Variable("dark_border_toggle_default_color"); }

    /**
     * dark_border_toggle_hover_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function darkBorderToggleHoverColor(): Variable { return new Variable("dark_border_toggle_hover_color"); }

    /**
     * non_interact_border_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function nonInteractBorderColor(): Variable { return new Variable("non_interact_border_color"); }

    /**
     * realms_plus_border_color: ???
     * default: [ 0.4, 0.118, 0.459 ]
     */
    public static function realmsPlusBorderColor(): Variable { return new Variable("realms_plus_border_color"); }

    //////// Border colors ////////

    /**
     * slider_default_border_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function sliderDefaultBorderColor(): Variable { return new Variable("slider_default_border_color"); }

    /**
     * slider_hover_border_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function sliderHoverBorderColor(): Variable { return new Variable("slider_hover_border_color"); }

    //////// Boss Health Bar /////////

    /**
     * boss_health_bar_color: ???
     * default: [ 1.0, 0.0, 1.0 ]
     */
    public static function bossHealthBarColor(): Variable { return new Variable("boss_health_bar_color"); }

    //////// Progress Bars /////////

    /**
     * day_one_experience_import_progress_bar_empty: ???
     * default: [ 0.24, 0.24, 0.24 ]
     */
    public static function dayOneExperienceImportProgressBarEmpty(): Variable { return new Variable("day_one_experience_import_progress_bar_empty"); }

    /**
     * day_one_experience_import_progress_bar_fill: ???
     * default: [ 0.263, 0.627, 0.109 ]
     */
    public static function dayOneExperienceImportProgressBarFill(): Variable { return new Variable("day_one_experience_import_progress_bar_fill"); }

    /**
     * world_diskspace_bedrock_fill: ???
     * default: [ 0.565, 0.643, 0.498 ]
     */
    public static function worldDiskspaceBedrockFill(): Variable { return new Variable("world_diskspace_bedrock_fill"); }

    /**
     * world_diskspace_editions_fill: ???
     * default: [ 0.373, 0.518, 0.792 ]
     */
    public static function worldDiskspaceEditionsFill(): Variable { return new Variable("world_diskspace_editions_fill"); }

    /**
     * world_diskspace_empty: ???
     * default: [ 0.157, 0.157, 0.157 ]
     */
    public static function worldDiskspaceEmpty(): Variable { return new Variable("world_diskspace_empty"); }

    /**
     * servers_screenshot: ???
     * default: [ 0.208, 0.208, 0.208 ]
     */
    public static function serversScreenshot(): Variable { return new Variable("servers_screenshot"); }

    /**
     * servers_current_screenshot: ???
     * default: [ 0.118, 0.561, 0.263 ]
     */
    public static function serversCurrentScreenshot(): Variable { return new Variable("servers_current_screenshot"); }

    //////// Jukebox Popup Text /////////

    /**
     * jukebox_text_color: ???
     * default: [ 1.0, 0.4, 0.7 ]
     */
    public static function jukeboxTextColor(): Variable { return new Variable("jukebox_text_color"); }

    //////// Color format colors ////////

    /**
     * 0_color_format:  Black
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function formatColor0(): Variable { return new Variable("0_color_format"); }

    /**
     * 1_color_format:  Dark Blue
     * default: [ 0.0, 0.0, 0.667 ]
     */
    public static function formatColor1(): Variable { return new Variable("1_color_format"); }

    /**
     * 2_color_format:  Dark Green
     * default: [ 0.0, 0.667, 0 ]
     */
    public static function formatColor2(): Variable { return new Variable("2_color_format"); }

    /**
     * 3_color_format:  Dark Aqua
     * default: [ 0.0, 0.667, 0.667 ]
     */
    public static function formatColor3(): Variable { return new Variable("3_color_format"); }

    /**
     * 4_color_format:  Dark Red
     * default: [ 0.667, 0.0, 0.0 ]
     */
    public static function formatColor4(): Variable { return new Variable("4_color_format"); }

    /**
     * 5_color_format:  Dark Purple
     * default: [ 0.667, 0.0, 0.667 ]
     */
    public static function formatColor5(): Variable { return new Variable("5_color_format"); }

    /**
     * 6_color_format:  Gold
     * default: [ 1.0, 0.667, 0.0 ]
     */
    public static function formatColor6(): Variable { return new Variable("6_color_format"); }

    /**
     * 7_color_format:  Gray
     * default: [ 0.667, 0.667, 0.667 ]
     */
    public static function formatColor7(): Variable { return new Variable("7_color_format"); }

    /**
     * 8_color_format:  Dark Gray
     * default: [ 0.333, 0.333, 0.333 ]
     */
    public static function formatColor8(): Variable { return new Variable("8_color_format"); }

    /**
     * 9_color_format:  Blue
     * default: [ 0.333, 0.333, 1.0 ]
     */
    public static function formatColor9(): Variable { return new Variable("9_color_format"); }

    /**
     * a_color_format:  Green
     * default: [ 0.333, 1.0, 0.333 ]
     */
    public static function formatColorA(): Variable { return new Variable("a_color_format"); }

    /**
     * b_color_format:  Aqua
     * default: [ 0.333, 1.0, 1.0 ]
     */
    public static function formatColorB(): Variable { return new Variable("b_color_format"); }

    /**
     * c_color_format:  Red
     * default: [ 1.0, 0.333, 0.333 ]
     */
    public static function formatColorC(): Variable { return new Variable("c_color_format"); }

    /**
     * d_color_format:  Light Purple
     * default: [ 1.0, 0.333, 1.0 ]
     */
    public static function formatColorD(): Variable { return new Variable("d_color_format"); }

    /**
     * e_color_format:  Yellow
     * default: [ 1.0, 1.0, 0.333 ]
     */
    public static function formatColorE(): Variable { return new Variable("e_color_format"); }

    /**
     * f_color_format:  White
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function formatColorF(): Variable { return new Variable("f_color_format"); }

    //////// Dropdown divider line color ////////

    /**
     * dropdown_divider_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function dropdownDividerColor(): Variable { return new Variable("dropdown_divider_color"); }

    //////// Gradient colors ////////

    /**
     * transparent_dark_gradient_start_color: ???
     * default: [ 0.1, 0.1, 0.1, 1.0 ]
     */
    public static function transparentDarkGradientStartColor(): Variable { return new Variable("transparent_dark_gradient_start_color"); }

    /**
     * transparent_dark_gradient_end_color: ???
     * default: [ 0.1, 0.1, 0.1, 0.0 ]
     */
    public static function transparentDarkGradientEndColor(): Variable { return new Variable("transparent_dark_gradient_end_color"); }

    //////// Transition times ////////

    /**
     * transition_time_push_size: ???
     * default: 0.6
     */
    public static function transitionTimePushSize(): Variable { return new Variable("transition_time_push_size"); }

    /**
     * transition_time_pop_size: ???
     * default: 0.25
     */
    public static function transitionTimePopSize(): Variable { return new Variable("transition_time_pop_size"); }

    /**
     * transition_time_push: ???
     * default: 0.4
     */
    public static function transitionTimePush(): Variable { return new Variable("transition_time_push"); }

    /**
     * transition_time_pop: ???
     * default: 0.4
     */
    public static function transitionTimePop(): Variable { return new Variable("transition_time_pop"); }

    /**
     * container_transition_time_push: ???
     * default: 0.4
     */
    public static function containerTransitionTimePush(): Variable { return new Variable("container_transition_time_push"); }

    /**
     * container_transition_time_pop: ???
     * default: 0.4
     */
    public static function containerTransitionTimePop(): Variable { return new Variable("container_transition_time_pop"); }

    /**
     * loading_bar_transition: ???
     * default: 3.0
     */
    public static function loadingBarTransition(): Variable { return new Variable("loading_bar_transition"); }

    //////// Scoreboard colors ////////

    /**
     * player_name_color: ???
     * default: [ 1.0, 1.0, 1.0, 1.0 ]
     */
    public static function playerNameColor(): Variable { return new Variable("player_name_color"); }

    /**
     * objective_title_color: ???
     * default: [ 1.0, 1.0, 1.0, 1.0 ]
     */
    public static function objectiveTitleColor(): Variable { return new Variable("objective_title_color"); }

    /**
     * player_score_color: ???
     * default: [ 1.0, 0.0, 0.0, 1.0 ]
     */
    public static function playerScoreColor(): Variable { return new Variable("player_score_color"); }

    /**
     * player_list_score_color: ???
     * default: [ 1.0, 1.0, 1.0, 1.0 ]
     */
    public static function playerListScoreColor(): Variable { return new Variable("player_list_score_color"); }

    /**
     * player_list_rank_color: ???
     * default: [ 1.0, 1.0, 1.0, 1.0 ]
     */
    public static function playerListRankColor(): Variable { return new Variable("player_list_rank_color"); }

    //////// Panel colors ////////

    /**
     * dark_panel_color: ???
     * default: [ 0.5, 0.5, 0.5, 1.0 ]
     */
    public static function darkPanelColor(): Variable { return new Variable("dark_panel_color"); }

    //////// Name Tag colors ////////

    /**
     * alert_label_background_color: ???
     * default: [ 1.0, 0.862, 0.086, 0.5 ]
     */
    public static function alertLabelBackgroundColor(): Variable { return new Variable("alert_label_background_color"); }

    //////// Dropdown item background colors ////////

    /**
     * dropdown_radio_background_unchecked_color: ???
     * default: [ 0.43, 0.43, 0.43 ]
     */
    public static function dropdownRadioBackgroundUncheckedColor(): Variable { return new Variable("dropdown_radio_background_unchecked_color"); }

    /**
     * dropdown_radio_background_checked_color: ???
     * default: [ 0.29, 0.29, 0.29 ]
     */
    public static function dropdownRadioBackgroundCheckedColor(): Variable { return new Variable("dropdown_radio_background_checked_color"); }

    /**
     * dropdown_radio_background_hover_color: ???
     * default: [ 0.12, 0.48, 0 ]
     */
    public static function dropdownRadioBackgroundHoverColor(): Variable { return new Variable("dropdown_radio_background_hover_color"); }

    //////// Chemistry colors ////////

    /**
     * proton_color: ???
     * default: [ 0.321, 0.486, 0.886, 1.0 ]
     */
    public static function protonColor(): Variable { return new Variable("proton_color"); }

    /**
     * electron_color: ???
     * default: [ 0.886, 0.4, 0.321, 1.0 ]
     */
    public static function electronColor(): Variable { return new Variable("electron_color"); }

    /**
     * neutron_color: ???
     * default: [ 0.894, 0.698, 0.341, 1.0 ]
     */
    public static function neutronColor(): Variable { return new Variable("neutron_color"); }

    //////// Store colors ////////

    /**
     * coin_color: ???
     * default: [ 0.94, 0.81, 0.09, 1.0 ]
     */
    public static function coinColor(): Variable { return new Variable("coin_color"); }

    /**
     * coin_offer_text_color: ???
     * default: [ 0.2, 0.2, 0.2 ]
     */
    public static function coinOfferTextColor(): Variable { return new Variable("coin_offer_text_color"); }

    /**
     * coin_header_text_color: ???
     * default: [ 0.2, 0.2, 0.2 ]
     */
    public static function coinHeaderTextColor(): Variable { return new Variable("coin_header_text_color"); }

    /**
     * store_author_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function storeAuthorTextColor(): Variable { return new Variable("store_author_text_color"); }

    /**
     * store_realms_text_color: ???
     * default: [ 0.356, 0.223, 0.537 ]
     */
    public static function storeRealmsTextColor(): Variable { return new Variable("store_realms_text_color"); }

    /**
     * store_sales_banner_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function storeSalesBannerTextColor(): Variable { return new Variable("store_sales_banner_text_color"); }

    /**
     * store_product_detail_strikethru_color: ???
     * default: [ 0.5585, 0.5585, 0.5585 ]
     */
    public static function storeProductDetailStrikethruColor(): Variable { return new Variable("store_product_detail_strikethru_color"); }

    /**
     * store_play_button_hover: ???
     * default: [ 0.215, 0.839, 0.118 ]
     */
    public static function storePlayButtonHover(): Variable { return new Variable("store_play_button_hover"); }

    /**
     * new_offer_icon_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function newOfferIconTextColor(): Variable { return new Variable("new_offer_icon_text_color"); }

    /**
     * store_offer_type_icon_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function storeOfferTypeIconColor(): Variable { return new Variable("store_offer_type_icon_color"); }

    /**
     * store_rating_text_panel_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function storeRatingTextPanelColor(): Variable { return new Variable("store_rating_text_panel_color"); }

    /**
     * store_white_text_color: ???
     * default: [ 1, 1, 1 ]
     */
    public static function storeWhiteTextColor(): Variable { return new Variable("store_white_text_color"); }

    /**
     * store_dark_grey_text_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function storeDarkGreyTextColor(): Variable { return new Variable("store_dark_grey_text_color"); }

    /**
     * store_light_grey_text_color: ???
     * default: [ 0.7, 0.7, 0.7 ]
     */
    public static function storeLightGreyTextColor(): Variable { return new Variable("store_light_grey_text_color"); }

    /**
     * carousel_unselected: ???
     * default: [ 0.208, 0.208, 0.208 ]
     */
    public static function carouselUnselected(): Variable { return new Variable("carousel_unselected"); }

    /**
     * carousel_selected: ???
     * default: [ 0.118, 0.561, 0.263 ]
     */
    public static function carouselSelected(): Variable { return new Variable("carousel_selected"); }

    /**
     * coin_screen_callout_bevel_color: ???
     * default: [ 0.3179, 0.3179, 0.3179 ]
     */
    public static function coinScreenCalloutBevelColor(): Variable { return new Variable("coin_screen_callout_bevel_color"); }

    //////// Sidebar colors ////////

    /**
     * sidebar_bg_color: ???
     * default: [ 0.192, 0.196, 0.2 ]
     */
    public static function sidebarBgColor(): Variable { return new Variable("sidebar_bg_color"); }

    /**
     * sidebar_expanded_section_bg_color: ???
     * default: [ 0.30196, 0.30588, 0.3098 ]
     */
    public static function sidebarExpandedSectionBgColor(): Variable { return new Variable("sidebar_expanded_section_bg_color"); }

    /**
     * sidebar_verbose_exit_bg_color: ???
     * default: [ 0.0078, 0.0197, 0.0431 ]
     */
    public static function sidebarVerboseExitBgColor(): Variable { return new Variable("sidebar_verbose_exit_bg_color"); }

    /**
     * sidebar_default_option_color: ???
     * default: [ 0.2235, 0.2235, 0.2235 ]
     */
    public static function sidebarDefaultOptionColor(): Variable { return new Variable("sidebar_default_option_color"); }

    /**
     * sidebar_checked_option_color: ???
     * default: [ 0, 0, 0 ]
     */
    public static function sidebarCheckedOptionColor(): Variable { return new Variable("sidebar_checked_option_color"); }

    /**
     * sidebar_selected_bar_color: ???
     * default: [ 0.423529, 0.76471, 0.286275 ]
     */
    public static function sidebarSelectedBarColor(): Variable { return new Variable("sidebar_selected_bar_color"); }

    /**
     * sidebar_dropdown_expanded_color: ???
     * default: [ 0, 0, 0 ]
     */
    public static function sidebarDropdownExpandedColor(): Variable { return new Variable("sidebar_dropdown_expanded_color"); }

    /**
     * sidebar_option_selected_color: ???
     * default: [ 0.2824, 0.2863, 0.2902 ]
     */
    public static function sidebarOptionSelectedColor(): Variable { return new Variable("sidebar_option_selected_color"); }

    /**
     * sidebar_default_hover_color: ???
     * default: [ 0.403922, 0.407843, 0.415686, 1.0 ]
     */
    public static function sidebarDefaultHoverColor(): Variable { return new Variable("sidebar_default_hover_color"); }

    /**
     * sidebar_verbose_expand_border_color: ???
     * default: [ 0.21765, 0.21765, 0.22157 ]
     */
    public static function sidebarVerboseExpandBorderColor(): Variable { return new Variable("sidebar_verbose_expand_border_color"); }

    //////// Trade colors ////////

    /**
     * trade_tier_name_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function tradeTierNameColor(): Variable { return new Variable("trade_tier_name_color"); }

    /**
     * trade_tier_name_locked_color: ???
     * default: [ 0.5, 0.5, 0.5 ]
     */
    public static function tradeTierNameLockedColor(): Variable { return new Variable("trade_tier_name_locked_color"); }

    /**
     * trade_lock_color: ???
     * default: [ 0.0, 0.0, 0.0 ]
     */
    public static function tradeLockColor(): Variable { return new Variable("trade_lock_color"); }

    /**
     * enchantment_button_default_text_color: ???
     * default: [ 1.0, 0.8, 1.0 ]
     */
    public static function enchantmentButtonDefaultTextColor(): Variable { return new Variable("enchantment_button_default_text_color"); }

    //////// Nested button variables ////////

    /**
     * nested_default_alpha: ???
     * default: 1.0
     */
    public static function nestedDefaultAlpha(): Variable { return new Variable("nested_default_alpha"); }

    /**
     * nested_default_color: ???
     * default: [ 1.0, 1.0, 1.0 ]
     */
    public static function nestedDefaultColor(): Variable { return new Variable("nested_default_color"); }

    /**
     * nested_dark_content_default_color: ???
     * default: [ 0.227, 0.227, 0.227 ]
     */
    public static function nestedDarkContentDefaultColor(): Variable { return new Variable("nested_dark_content_default_color"); }

    /**
     * nested_dark_content_hover_color: ???
     * default: [ 0.29, 0.808, 0.29 ]
     */
    public static function nestedDarkContentHoverColor(): Variable { return new Variable("nested_dark_content_hover_color"); }

    /**
     * nested_dark_content_pressed_color: ???
     * default: [ 0.216, 0.451, 0.216 ]
     */
    public static function nestedDarkContentPressedColor(): Variable { return new Variable("nested_dark_content_pressed_color"); }

    /**
     * nested_dark_label_default_color: ???
     * default: [ 0.114, 0.114, 0.114 ]
     */
    public static function nestedDarkLabelDefaultColor(): Variable { return new Variable("nested_dark_label_default_color"); }

    /**
     * nested_dark_label_hover_color: ???
     * default: [ 0.0, 0.227, 0.012 ]
     */
    public static function nestedDarkLabelHoverColor(): Variable { return new Variable("nested_dark_label_hover_color"); }

    /**
     * nested_dark_label_pressed_color: ???
     * default: [ 0.0, 0.227, 0.012 ]
     */
    public static function nestedDarkLabelPressedColor(): Variable { return new Variable("nested_dark_label_pressed_color"); }

    /**
     * nested_transparent_label_alpha: ???
     * default: 0.8
     */
    public static function nestedTransparentLabelAlpha(): Variable { return new Variable("nested_transparent_label_alpha"); }

    /**
     * nested_transparent_label_default_color: ???
     * default: [ 0.1, 0.1, 0.1 ]
     */
    public static function nestedTransparentLabelDefaultColor(): Variable { return new Variable("nested_transparent_label_default_color"); }

    /**
     * nested_transparent_label_default_pressed_color: ???
     * default: [ 0.05, 0.05, 0.05 ]
     */
    public static function nestedTransparentLabelDefaultPressedColor(): Variable { return new Variable("nested_transparent_label_default_pressed_color"); }

    /**
     * nested_transparent_green_label_color: ???
     * default: [ 0.0, 0.451, 0.02 ]
     */
    public static function nestedTransparentGreenLabelColor(): Variable { return new Variable("nested_transparent_green_label_color"); }

    /**
     * nested_transparent_green_label_pressed_color: ???
     * default: [ 0.0, 0.26, 0.0 ]
     */
    public static function nestedTransparentGreenLabelPressedColor(): Variable { return new Variable("nested_transparent_green_label_pressed_color"); }

    /**
     * nested_transparent_purple_label_color: ???
     * default: [ 0.247, 0.098, 0.616 ]
     */
    public static function nestedTransparentPurpleLabelColor(): Variable { return new Variable("nested_transparent_purple_label_color"); }

    /**
     * nested_transparent_purple_label_pressed_color: ???
     * default: [ 0.179, 0.094, 0.389 ]
     */
    public static function nestedTransparentPurpleLabelPressedColor(): Variable { return new Variable("nested_transparent_purple_label_pressed_color"); }

    /**
     * nested_content_unfocused_overlay_alpha: ???
     * default: 0.3
     */
    public static function nestedContentUnfocusedOverlayAlpha(): Variable { return new Variable("nested_content_unfocused_overlay_alpha"); }

    /**
     * nested_overlay_clickable_alpha: ???
     * default: 0.4
     */
    public static function nestedOverlayClickableAlpha(): Variable { return new Variable("nested_overlay_clickable_alpha"); }

    /**
     * nested_one_pixel_padding: ???
     * default: [ "100%sm", 1 ]
     */
    public static function nestedOnePixelPadding(): Variable { return new Variable("nested_one_pixel_padding"); }

    /**
     * nested_no_padding: ???
     * default: [ "100%sm", 0 ]
     */
    public static function nestedNoPadding(): Variable { return new Variable("nested_no_padding"); }

    // rarity colors

    /**
     * rarity_common_bg_color: ???
     * default: [ 0.43, 0.43, 0.43, 0.4 ]
     */
    public static function rarityCommonBgColor(): Variable { return new Variable("rarity_common_bg_color"); }

    /**
     * rarity_uncommon_bg_color: ???
     * default: [ 0.33, 0.66, 0.42, 0.4 ]
     */
    public static function rarityUncommonBgColor(): Variable { return new Variable("rarity_uncommon_bg_color"); }

    /**
     * rarity_rare_bg_color: ???
     * default: [ 0.10, 0.25, 0.61, 0.4 ]
     */
    public static function rarityRareBgColor(): Variable { return new Variable("rarity_rare_bg_color"); }

    /**
     * rarity_epic_bg_color: ???
     * default: [ 0.36, 0.18, 0.40, 0.4 ]
     */
    public static function rarityEpicBgColor(): Variable { return new Variable("rarity_epic_bg_color"); }

    /**
     * rarity_legendary_bg_color: ???
     * default: [ 0.36, 0.32, 0.06, 0.4 ]
     */
    public static function rarityLegendaryBgColor(): Variable { return new Variable("rarity_legendary_bg_color"); }

    //////// Dressing Room colors ////////

    /**
     * dressing_room_sale_banner_text_color: ???
     * default: [ 0, 0, 0 ]
     */
    public static function dressingRoomSaleBannerTextColor(): Variable { return new Variable("dressing_room_sale_banner_text_color"); }

    /**
     * dressing_room_bottom_section_color: ???
     * default: [ 0.1294, 0.1294, 0.1294 ]
     */
    public static function dressingRoomBottomSectionColor(): Variable { return new Variable("dressing_room_bottom_section_color"); }

    /**
     * dressing_room_bottom_section_mid_bar: ???
     * default: [ 0.702, 0.8392, 0.8588 ]
     */
    public static function dressingRoomBottomSectionMidBar(): Variable { return new Variable("dressing_room_bottom_section_mid_bar"); }

    /**
     * dressing_room_dark_bg_color: ???
     * default: [ 0.13, 0.13, 0.13, 0.8 ]
     */
    public static function dressingRoomDarkBgColor(): Variable { return new Variable("dressing_room_dark_bg_color"); }

    /**
     * dressing_room_semi_dark_bg_color: ???
     * default: [ 0.5, 0.5, 0.5 ]
     */
    public static function dressingRoomSemiDarkBgColor(): Variable { return new Variable("dressing_room_semi_dark_bg_color"); }

    /**
     * dressing_room_dark_button_color: ???
     * default: [ 0.2, 0.2, 0.2 ]
     */
    public static function dressingRoomDarkButtonColor(): Variable { return new Variable("dressing_room_dark_button_color"); }

    /**
     * dressing_room_lighter_button_color: ???
     * default: [ 0.3, 0.3, 0.3 ]
     */
    public static function dressingRoomLighterButtonColor(): Variable { return new Variable("dressing_room_lighter_button_color"); }

    /**
     * dressing_room_right_side_default_text_color: ???
     * default: [ 1, 1, 1 ]
     */
    public static function dressingRoomRightSideDefaultTextColor(): Variable { return new Variable("dressing_room_right_side_default_text_color"); }

    /**
     * dressing_room_size_default_text_color: ???
     * default: [ 1, 1, 1 ]
     */
    public static function dressingRoomSizeDefaultTextColor(): Variable { return new Variable("dressing_room_size_default_text_color"); }

    /**
     * dressing_room_color_title: ???
     * default: [ 1, 1, 1 ]
     */
    public static function dressingRoomColorTitle(): Variable { return new Variable("dressing_room_color_title"); }

    /**
     * dressing_room_side_locked_text_color: ???
     * default: [ 0.5, 0.5, 0.5, 0.1 ]
     */
    public static function dressingRoomSideLockedTextColor(): Variable { return new Variable("dressing_room_side_locked_text_color"); }

    /**
     * dressing_room_right_side_dark_text_color: ???
     * default: [ 0.75, 0.75, 0.75 ]
     */
    public static function dressingRoomRightSideDarkTextColor(): Variable { return new Variable("dressing_room_right_side_dark_text_color"); }

    /**
     * dressing_room_background_alpha: ???
     * default: 1.0
     */
    public static function dressingRoomBackgroundAlpha(): Variable { return new Variable("dressing_room_background_alpha"); }

    /**
     * dressing_room_full_screen_popup_background_alpha: ???
     * default: 0.6
     */
    public static function dressingRoomFullScreenPopupBackgroundAlpha(): Variable { return new Variable("dressing_room_full_screen_popup_background_alpha"); }

    /**
     * dressing_room_profile_title_bar_alpha: ???
     * default: 0.075
     */
    public static function dressingRoomProfileTitleBarAlpha(): Variable { return new Variable("dressing_room_profile_title_bar_alpha"); }

    /**
     * dressing_room_panel_alpha: ???
     * default: 0.2
     */
    public static function dressingRoomPanelAlpha(): Variable { return new Variable("dressing_room_panel_alpha"); }

    /**
     * dressing_room_sub_category_seperator_color: ???
     * default: [ 0.70, 0.83, 0.85 ]
     */
    public static function dressingRoomSubCategorySeperatorColor(): Variable { return new Variable("dressing_room_sub_category_seperator_color"); }

    /**
     * dressing_room_subcategory_button_hover_color: ???
     * default: [ 0.506, 0.58, 0.596 ]
     */
    public static function dressingRoomSubcategoryButtonHoverColor(): Variable { return new Variable("dressing_room_subcategory_button_hover_color"); }

    /**
     * dressing_room_popup_background: ???
     * default: [ 0.12, 0.12, 0.12, 0.8 ]
     */
    public static function dressingRoomPopupBackground(): Variable { return new Variable("dressing_room_popup_background"); }

    /**
     * dressing_room_end_piece_section_line: ???
     * default: [ 0.70196, 0.8392, 0.8588, 0.2 ]
     */
    public static function dressingRoomEndPieceSectionLine(): Variable { return new Variable("dressing_room_end_piece_section_line"); }

    //////// Profile Create Character Picker  ////////

    /**
     * profile_create_character_background_color: ???
     * default: [ 0.08, 0.08, 0.08, 1.0 ]
     */
    public static function profileCreateCharacterBackgroundColor(): Variable { return new Variable("profile_create_character_background_color"); }

    /**
     * profile_create_character_selected_color: ???
     * default: [ 0.29, 0.29, 0.29 ]
     */
    public static function profileCreateCharacterSelectedColor(): Variable { return new Variable("profile_create_character_selected_color"); }

    /**
     * profile_create_character_unselected_color: ???
     * default: [ 0.43, 0.43, 0.43 ]
     */
    public static function profileCreateCharacterUnselectedColor(): Variable { return new Variable("profile_create_character_unselected_color"); }

    /**
     * profile_create_character_getting_started_title_color: ???
     * default: [ 0.45, 0.45, 0.45 ]
     */
    public static function profileCreateCharacterGettingStartedTitleColor(): Variable { return new Variable("profile_create_character_getting_started_title_color"); }

    //////// Dressing Room Skin Picker colors ////////

    /**
     * dressing_room_skin_picker_selected_color: ???
     * default: [ 0.55, 0.95, 1.0 ]
     */
    public static function dressingRoomSkinPickerSelectedColor(): Variable { return new Variable("dressing_room_skin_picker_selected_color"); }

    /**
     * dressing_room_skin_picker_selected_pressed_color: ???
     * default: [ 0.4125, 0.7125, 0.75 ]
     */
    public static function dressingRoomSkinPickerSelectedPressedColor(): Variable { return new Variable("dressing_room_skin_picker_selected_pressed_color"); }

    /**
     * dressing_room_skin_picker_equipped_border_color: ???
     * default: [ 0.063, 0.631, 0.004 ]
     */
    public static function dressingRoomSkinPickerEquippedBorderColor(): Variable { return new Variable("dressing_room_skin_picker_equipped_border_color"); }

    /**
     * dressing_room_skin_picker_dark_bg_color: ???
     * default: [ 0.55, 0.55, 0.55 ]
     */
    public static function dressingRoomSkinPickerDarkBgColor(): Variable { return new Variable("dressing_room_skin_picker_dark_bg_color"); }
    //////// Emote Screen colors ////////

    /**
     * emote_screen_gamepad_instruction_colors: ???
     * default: [ 1.0, 1.0, 0.0 ]
     */
    public static function emoteScreenGamepadInstructionColors(): Variable { return new Variable("emote_screen_gamepad_instruction_colors"); }
    //////// Play Screen Realms+ "!" atop Pink Realms+ Content Alert ////////

    /**
     * realmsplus_exclamation_mark_color: ???
     * default: [ 1, 1, 1 ]
     */
    public static function realmsplusExclamationMarkColor(): Variable { return new Variable("realmsplus_exclamation_mark_color"); }
}