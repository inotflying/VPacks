<?php

namespace vezdehod\packs\ui\jsonui\collection;

use vezdehod\packs\ui\jsonui\vanilla\form\CustomFormStyle;
use vezdehod\packs\ui\jsonui\vanilla\form\SimpleFormStyle;

class HardcodedCollection {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#hardcoded-collection-names

    // Book (ui/book_screen.json)

    /**
     * book_pages: ???
     */
    public static function bookPages(): Collection { return new Collection("book_pages"); }

    /**
     * pick_collection: ???
     */
    public static function pickCollection(): Collection { return new Collection("pick_collection"); }
    // Bundle Purchase Warning (ui/bundle_purchase_warning_screen.json)

    /**
     * owned_list: ???
     */
    public static function ownedList(): Collection { return new Collection("owned_list"); }

    /**
     * unowned_list: ???
     */
    public static function unownedList(): Collection { return new Collection("unowned_list"); }
    // Chat (ui/chat_screen.json)

    /**
     * auto_complete: ???
     */
    public static function autoComplete(): Collection { return new Collection("auto_complete"); }

    /**
     * font_colors: ???
     */
    public static function fontColors(): Collection { return new Collection("font_colors"); }

    /**
     * host_main_collection: ???
     */
    public static function hostMainCollection(): Collection { return new Collection("host_main_collection"); }

    /**
     * host_teleport_collection: ???
     */
    public static function hostTeleportCollection(): Collection { return new Collection("host_teleport_collection"); }

    /**
     * host_time_collection: ???
     */
    public static function hostTimeCollection(): Collection { return new Collection("host_time_collection"); }

    /**
     * host_weather_collection: ???
     */
    public static function hostWeatherCollection(): Collection { return new Collection("host_weather_collection"); }
    // Choose Realm (ui/choose_realm_screen.json)

    /**
     * realms_collection: ???
     */
    public static function realmsCollection(): Collection { return new Collection("realms_collection"); }
    // Coin Purchase (ui/coin_purchase_screen.json)

    /**
     * coin_purchase_grid: ???
     */
    public static function coinPurchaseGrid(): Collection { return new Collection("coin_purchase_grid"); }
    // Comment (ui/comment_screen.json)

    /**
     * comment_collection: ???
     */
    public static function commentCollection(): Collection { return new Collection("comment_collection"); }
    // Content Log History (ui/content_log_history_screen.json)

    /**
     * content_log_message: ???
     */
    public static function contentLogMessage(): Collection { return new Collection("content_log_message"); }
    // Create World Upsell (ui/create_world_upsell_screen.json)

    /**
     * world_list: ???
     */
    public static function worldList(): Collection { return new Collection("world_list"); }

    /**
     * realm_list: ???
     */
    public static function realmList(): Collection { return new Collection("realm_list"); }
    // Custom Templates (ui/custom_templates_screen.json)

    /**
     * templates_collection: ???
     */
    public static function templatesCollection(): Collection { return new Collection("templates_collection"); }
    // Feed (ui/feed_screen.json)

    /**
     * feed_collection: ???
     */
    public static function feedCollection(): Collection { return new Collection("feed_collection"); }
    // HUD (ui/hud_screen.json)

    /**
     * boss_bars: ???
     */
    public static function bossBars(): Collection { return new Collection("boss_bars"); }

    /**
     * chat_text_grid: ???
     */
    public static function chatTextGrid(): Collection { return new Collection("chat_text_grid"); }

    /**
     * hotbar_items: ???
     */
    public static function hotbarItems(): Collection { return new Collection("hotbar_items"); }

    /**
     * scoreboard_players: ???
     */
    public static function scoreboardPlayers(): Collection { return new Collection("scoreboard_players"); }

    /**
     * scoreboard_scores: ???
     */
    public static function scoreboardScores(): Collection { return new Collection("scoreboard_scores"); }

    /**
     * left_helper_collection: ???
     */
    public static function leftHelperCollection(): Collection { return new Collection("left_helper_collection"); }

    /**
     * right_helper_collection: ???
     */
    public static function rightHelperCollection(): Collection { return new Collection("right_helper_collection"); }
    // Invite (ui/invite_screen.json)

    /**
     * online_platform_friends: ???
     */
    public static function onlinePlatformFriends(): Collection { return new Collection("online_platform_friends"); }

    /**
     * online_linked_account_friends: ???
     */
    public static function onlineLinkedAccountFriends(): Collection { return new Collection("online_linked_account_friends"); }

    /**
     * online_xbox_live_friends: ???
     */
    public static function onlineXboxLiveFriends(): Collection { return new Collection("online_xbox_live_friends"); }

    /**
     * offline_platform_friends: ???
     */
    public static function offlinePlatformFriends(): Collection { return new Collection("offline_platform_friends"); }

    /**
     * offline_linked_account_friends: ???
     */
    public static function offlineLinkedAccountFriends(): Collection { return new Collection("offline_linked_account_friends"); }

    /**
     * offline_xbox_live_friends: ???
     */
    public static function offlineXboxLiveFriends(): Collection { return new Collection("offline_xbox_live_friends"); }
    // Manage Feed (ui/manage_feed_screen.json)

    /**
     * manage_feed_collection: ???
     */
    public static function manageFeedCollection(): Collection { return new Collection("manage_feed_collection"); }
    // Manifest Validation (manifest_validation_screen.json)

    /**
     * pack_errors: ???
     */
    public static function packErrors(): Collection { return new Collection("pack_errors"); }
    // Mob Effects (ui/mob_effects_screen.json)

    /**
     * mob_effects_collection: ???
     */
    public static function mobEffectsCollection(): Collection { return new Collection("mob_effects_collection"); }
    // Game Menu (ui/pause_screen.json)


    // PDP (ui/pdp_screen.json)

    /**
     * factory_collection: ???
     */
    public static function factoryCollection(): Collection { return new Collection("factory_collection"); }

    /**
     * ratings_star_collection: ???
     */
    public static function ratingsStarCollection(): Collection { return new Collection("ratings_star_collection"); }
    // Permissions (ui/permissions_screen.json)

    /**
     * players_collection: ???
     * it's also used in pause_screen.json and chat_screen.json
     */
    public static function playersCollection(): Collection { return new Collection("players_collection"); }

    /**
     * permissions_collection: ???
     */
    public static function permissionsCollection(): Collection { return new Collection("permissions_collection"); }

    // Persona (ui/persona_screen.json)

    /**
     * color_collection: ???
     */
    public static function colorCollection(): Collection { return new Collection("color_collection"); }

    /**
     * skin_pack_in_grid_item: ???
     */
    public static function skinPackInGridItem(): Collection { return new Collection("skin_pack_in_grid_item"); }

    /**
     * persona_featured_skin_pack_collection: ???
     */
    public static function personaFeaturedSkinPackCollection(): Collection { return new Collection("persona_featured_skin_pack_collection"); }

    /**
     * body_size_collection: ???
     */
    public static function bodySizeCollection(): Collection { return new Collection("body_size_collection"); }

    /**
     * arm_size_collection: ???
     */
    public static function armSizeCollection(): Collection { return new Collection("arm_size_collection"); }

    /**
     * category_featured_collection: ???
     */
    public static function categoryFeaturedCollection(): Collection { return new Collection("category_featured_collection"); }

    /**
     * main_featured_collection: ???
     */
    public static function mainFeaturedCollection(): Collection { return new Collection("main_featured_collection"); }

    /**
     * profile_featured_collection: ???
     */
    public static function profileFeaturedCollection(): Collection { return new Collection("profile_featured_collection"); }

    /**
     * custom_section_collection: ???
     */
    public static function customSectionCollection(): Collection { return new Collection("custom_section_collection"); }

    /**
     * featured_collection: ???
     */
    public static function featuredCollection(): Collection { return new Collection("featured_collection"); }

    /**
     * foobar_collection: ???
     */
    public static function foobarCollection(): Collection { return new Collection("foobar_collection"); }

    /**
     * emote_collection: ???
     */
    public static function emoteCollection(): Collection { return new Collection("emote_collection"); }
    // Play (ui/play_screen.json)

    /**
     * friends_network_worlds: ???
     */
    public static function friendsNetworkWorlds(): Collection { return new Collection("friends_network_worlds"); }

    /**
     * cross_platform_friends_network_worlds: ???
     */
    public static function crossPlatformFriendsNetworkWorlds(): Collection { return new Collection("cross_platform_friends_network_worlds"); }

    /**
     * lan_network_worlds: ???
     */
    public static function lanNetworkWorlds(): Collection { return new Collection("lan_network_worlds"); }

    /**
     * personal_realms: ???
     */
    public static function personalRealms(): Collection { return new Collection("personal_realms"); }

    /**
     * friends_realms: ???
     */
    public static function friendsRealms(): Collection { return new Collection("friends_realms"); }

    /**
     * servers_network_worlds: ???
     */
    public static function serversNetworkWorlds(): Collection { return new Collection("servers_network_worlds"); }

    /**
     * third_party_server_network_worlds: ???
     */
    public static function thirdPartyServerNetworkWorlds(): Collection { return new Collection("third_party_server_network_worlds"); }

    /**
     * server_screenshot_collection: ???
     */
    public static function serverScreenshotCollection(): Collection { return new Collection("server_screenshot_collection"); }

    /**
     * server_games_collection: ???
     */
    public static function serverGamesCollection(): Collection { return new Collection("server_games_collection"); }

    /**
     * local_worlds: ???
     */
    public static function localWorlds(): Collection { return new Collection("local_worlds"); }

    /**
     * legacy_worlds: ???
     */
    public static function legacyWorlds(): Collection { return new Collection("legacy_worlds"); }

    /**
     * beta_retail_local_worlds: ???
     */
    public static function betaRetailLocalWorlds(): Collection { return new Collection("beta_retail_local_worlds"); }

    /**
     * loading_personal_realms: ???
     */
    public static function loadingPersonalRealms(): Collection { return new Collection("loading_personal_realms"); }

    /**
     * loading_friends_realms: ???
     */
    public static function loadingFriendsRealms(): Collection { return new Collection("loading_friends_realms"); }

    // Portfolio (ui/portfolio_screen.json)

    /**
     * photos: ???
     */
    public static function photos(): Collection { return new Collection("photos"); }
    // Progress (ui/progress_screen.json)

    /**
     * required_resourcepacks: ???
     */
    public static function requiredResourcepacks(): Collection { return new Collection("required_resourcepacks"); }

    /**
     * optional_resourcepacks: ???
     */
    public static function optionalResourcepacks(): Collection { return new Collection("optional_resourcepacks"); }
    // Realms Pending Invitations (ui/realms_pending_invitations_screen.json)

    /**
     * pending_invites_collection: ???
     */
    public static function pendingInvitesCollection(): Collection { return new Collection("pending_invites_collection"); }
    // Realms Settings (ui/realms_settings_screen.json)

    /**
     * additional_realms_subscriptions_collection: ???
     * Also in (ui/settings_screen.json)
     */
    public static function additionalRealmsSubscriptionsCollection(): Collection { return new Collection("additional_realms_subscriptions_collection"); }

    /**
     * realms_branch_collection: ???
     */
    public static function realmsBranchCollection(): Collection { return new Collection("realms_branch_collection"); }

    /**
     * realms_backup_collection: ???
     */
    public static function realmsBackupCollection(): Collection { return new Collection("realms_backup_collection"); }

    /**
     * members_collection: ???
     */
    public static function membersCollection(): Collection { return new Collection("members_collection"); }

    /**
     * invited_friends_collection: ???
     */
    public static function invitedFriendsCollection(): Collection { return new Collection("invited_friends_collection"); }

    /**
     * uninvited_friends_collection: ???
     */
    public static function uninvitedFriendsCollection(): Collection { return new Collection("uninvited_friends_collection"); }

    /**
     * blocked_players_collection: ???
     */
    public static function blockedPlayersCollection(): Collection { return new Collection("blocked_players_collection"); }
    // Screenshot Picker (ui/screenshot_picker_screen.json)

    /**
     * screenshotpicker_collection: ???
     */
    public static function screenshotpickerCollection(): Collection { return new Collection("screenshotpicker_collection"); }
    // Server Form (ui/server_form.json)
    /* @see SimpleFormStyle */
    /* @see CustomFormStyle */
    // Settings (ui/settings_screen.json)

    /**
     * keyboard_standard_collection: ???
     */
    public static function keyboardStandardCollection(): Collection { return new Collection("keyboard_standard_collection"); }

    /**
     * keyboard_full_collection: ???
     */
    public static function keyboardFullCollection(): Collection { return new Collection("keyboard_full_collection"); }

    /**
     * gamepad_collection: ???
     */
    public static function gamepadCollection(): Collection { return new Collection("gamepad_collection"); }

    /**
     * languages: ???
     */
    public static function languages(): Collection { return new Collection("languages"); }

    /**
     * realms_plus_subscriptions_collection: ???
     */
    public static function realmsPlusSubscriptionsCollection(): Collection { return new Collection("realms_plus_subscriptions_collection"); }

    /**
     * #selected_pack_items_global: ???
     */
    public static function selectedPackItemsGlobal(): Collection { return new Collection("#selected_pack_items_global"); }

    /**
     * #available_pack_items_global: ???
     */
    public static function availablePackItemsGlobal(): Collection { return new Collection("#available_pack_items_global"); }

    /**
     * #realms_pack_items_global: ???
     */
    public static function realmsPackItemsGlobal(): Collection { return new Collection("#realms_pack_items_global"); }

    /**
     * #unowned_pack_items_global: ???
     */
    public static function unownedPackItemsGlobal(): Collection { return new Collection("#unowned_pack_items_global"); }

    /**
     * #invalid_pack_items_global: ???
     */
    public static function invalidPackItemsGlobal(): Collection { return new Collection("#invalid_pack_items_global"); }

    /**
     * #selected_pack_items_level: ???
     */
    public static function selectedPackItemsLevel(): Collection { return new Collection("#selected_pack_items_level"); }

    /**
     * #available_pack_items_level: ???
     */
    public static function availablePackItemsLevel(): Collection { return new Collection("#available_pack_items_level"); }

    /**
     * #realms_pack_items_level: ???
     */
    public static function realmsPackItemsLevel(): Collection { return new Collection("#realms_pack_items_level"); }

    /**
     * #unowned_pack_items_level: ???
     */
    public static function unownedPackItemsLevel(): Collection { return new Collection("#unowned_pack_items_level"); }

    /**
     * #invalid_pack_items_level: ???
     */
    public static function invalidPackItemsLevel(): Collection { return new Collection("#invalid_pack_items_level"); }

    /**
     * #selected_pack_items_addon: ???
     */
    public static function selectedPackItemsAddon(): Collection { return new Collection("#selected_pack_items_addon"); }

    /**
     * #available_pack_items_addon: ???
     */
    public static function availablePackItemsAddon(): Collection { return new Collection("#available_pack_items_addon"); }

    /**
     * #realms_pack_items_addon: ???
     */
    public static function realmsPackItemsAddon(): Collection { return new Collection("#realms_pack_items_addon"); }

    /**
     * #unowned_pack_items_addon: ???
     */
    public static function unownedPackItemsAddon(): Collection { return new Collection("#unowned_pack_items_addon"); }

    /**
     * #invalid_pack_items_addon: ???
     */
    public static function invalidPackItemsAddon(): Collection { return new Collection("#invalid_pack_items_addon"); }

    /**
     * experimental_toggles: ???
     */
    public static function experimentalToggles(): Collection { return new Collection("experimental_toggles"); }

    /**
     * world_panel: ???
     */
    public static function worldPanel(): Collection { return new Collection("world_panel"); }

    /**
     * world_template_panel: ???
     */
    public static function worldTemplatePanel(): Collection { return new Collection("world_template_panel"); }

    /**
     * resource_panel: ???
     */
    public static function resourcePanel(): Collection { return new Collection("resource_panel"); }

    /**
     * behavior_panel: ???
     */
    public static function behaviorPanel(): Collection { return new Collection("behavior_panel"); }

    /**
     * skin_panel: ???
     */
    public static function skinPanel(): Collection { return new Collection("skin_panel"); }

    /**
     * cache_panel: ???
     */
    public static function cachePanel(): Collection { return new Collection("cache_panel"); }

    /**
     * dependent_packs_panel: ???
     */
    public static function dependentPacksPanel(): Collection { return new Collection("dependent_packs_panel"); }

    /**
     * dependency_panel: ???
     */
    public static function dependencyPanel(): Collection { return new Collection("dependency_panel"); }
    // Structure Block (ui/structure_editor_screen.json)

    /**
     * save_size_grid: ???
     */
    public static function saveSizeGrid(): Collection { return new Collection("save_size_grid"); }

    /**
     * save_offset_grid: ???
     */
    public static function saveOffsetGrid(): Collection { return new Collection("save_offset_grid"); }

    /**
     * load_offset_grid: ???
     */
    public static function loadOffsetGrid(): Collection { return new Collection("load_offset_grid"); }

    /**
     * export_size_grid: ???
     */
    public static function exportSizeGrid(): Collection { return new Collection("export_size_grid"); }

    /**
     * export_offset_grid: ???
     */
    public static function exportOffsetGrid(): Collection { return new Collection("export_offset_grid"); }
    // Seed Picker (ui/ugc_viewer_screen.json)

    /**
     * ugc_items: ???
     */
    public static function ugcItems(): Collection { return new Collection("ugc_items"); }
    // World Templates (ui/world_templates_screen.json)

    /**
     * world_templates: ???
     */
    public static function worldTemplates(): Collection { return new Collection("world_templates"); }

    /**
     * realms_plus_templates: ???
     */
    public static function realmsPlusTemplates(): Collection { return new Collection("realms_plus_templates"); }

    /**
     * custom_world_templates: ???
     */
    public static function customWorldTemplates(): Collection { return new Collection("custom_world_templates"); }

    /**
     * #suggested_offers_collection: ???
     */
    public static function suggestedOffersCollection(): Collection { return new Collection("#suggested_offers_collection"); }
    // Anvil (ui/anvil_screen.json)

    /**
     * anvil_input_items: ???
     */
    public static function anvilInputItems(): Collection { return new Collection("anvil_input_items"); }

    /**
     * anvil_material_items: ???
     */
    public static function anvilMaterialItems(): Collection { return new Collection("anvil_material_items"); }

    /**
     * anvil_result_items: ???
     */
    public static function anvilResultItems(): Collection { return new Collection("anvil_result_items"); }
    // Beacon (ui/beacon_screen.json)

    /**
     * beacon_payment_items: ???
     */
    public static function beaconPaymentItems(): Collection { return new Collection("beacon_payment_items"); }

    /**
     * speed: ???
     */
    public static function speed(): Collection { return new Collection("speed"); }

    /**
     * haste: ???
     */
    public static function haste(): Collection { return new Collection("haste"); }

    /**
     * resist: ???
     */
    public static function resist(): Collection { return new Collection("resist"); }

    /**
     * jump: ???
     */
    public static function jump(): Collection { return new Collection("jump"); }

    /**
     * strength: ???
     */
    public static function strength(): Collection { return new Collection("strength"); }

    /**
     * regen: ???
     */
    public static function regen(): Collection { return new Collection("regen"); }

    /**
     * extra: ???
     */
    public static function extra(): Collection { return new Collection("extra"); }

    /**
     * confirm: ???
     */
    public static function confirm(): Collection { return new Collection("confirm"); }

    /**
     * cancel: ???
     */
    public static function cancel(): Collection { return new Collection("cancel"); }
    // Brewing Stand (ui/brewing_stand_screen.json)

    /**
     * brewing_fuel_item: ???
     */
    public static function brewingFuelItem(): Collection { return new Collection("brewing_fuel_item"); }

    /**
     * brewing_input_item: ???
     */
    public static function brewingInputItem(): Collection { return new Collection("brewing_input_item"); }

    /**
     * brewing_result_items: ???
     */
    public static function brewingResultItems(): Collection { return new Collection("brewing_result_items"); }
    // Cartography Table (ui/cartography_screen.json)

    /**
     * cartography_input_items: ???
     */
    public static function cartographyInputItems(): Collection { return new Collection("cartography_input_items"); }

    /**
     * cartography_additional_items: ???
     */
    public static function cartographyAdditionalItems(): Collection { return new Collection("cartography_additional_items"); }

    /**
     * cartography_result_items: ???
     */
    public static function cartographyResultItems(): Collection { return new Collection("cartography_result_items"); }
    // Enchanting Table (ui/enchanting_table_screen.json)

    /**
     * enchanting_input_items: ???
     */
    public static function enchantingInputItems(): Collection { return new Collection("enchanting_input_items"); }

    /**
     * enchanting_lapis_items: ???
     */
    public static function enchantingLapisItems(): Collection { return new Collection("enchanting_lapis_items"); }

    /**
     * #enchant_buttons: ???
     */
    public static function enchantButtons(): Collection { return new Collection("#enchant_buttons"); }
    // Furnace (ui/furnace_screen.json)

    /**
     * furnace_ingredient_items: ???
     */
    public static function furnaceIngredientItems(): Collection { return new Collection("furnace_ingredient_items"); }

    /**
     * furnace_fuel_items: ???
     */
    public static function furnaceFuelItems(): Collection { return new Collection("furnace_fuel_items"); }

    /**
     * furnace_output_items: ???
     */
    public static function furnaceOutputItems(): Collection { return new Collection("furnace_output_items"); }
    // Gridstone (ui/grindstone_screen.json)

    /**
     * grindstone_input_items: ???
     */
    public static function grindstoneInputItems(): Collection { return new Collection("grindstone_input_items"); }

    /**
     * grindstone_additional_items: ???
     */
    public static function grindstoneAdditionalItems(): Collection { return new Collection("grindstone_additional_items"); }

    /**
     * grindstone_result_items: ???
     */
    public static function grindstoneResultItems(): Collection { return new Collection("grindstone_result_items"); }
    // Horse (ui/horse_screen.json)

    /**
     * horse_equip_items: ???
     */
    public static function horseEquipItems(): Collection { return new Collection("horse_equip_items"); }
    // Inventory (ui/inventory_screen.json and ui/inventory_screen_pocket.json)

    /**
     * armor_items: ???
     */
    public static function armorItems(): Collection { return new Collection("armor_items"); }

    /**
     * offhand_items: ???
     */
    public static function offhandItems(): Collection { return new Collection("offhand_items"); }

    /**
     * crafting_input_items: ???
     */
    public static function craftingInputItems(): Collection { return new Collection("crafting_input_items"); }

    /**
     * crafting_output_items: ???
     */
    public static function craftingOutputItems(): Collection { return new Collection("crafting_output_items"); }

    /**
     * recipe_book: ???
     */
    public static function recipeBook(): Collection { return new Collection("recipe_book"); }
    // Loom (ui/loom_screen.json)

    /**
     * loom_input_items: ???
     */
    public static function loomInputItems(): Collection { return new Collection("loom_input_items"); }

    /**
     * loom_dye_items: ???
     */
    public static function loomDyeItems(): Collection { return new Collection("loom_dye_items"); }

    /**
     * loom_material_items: ???
     */
    public static function loomMaterialItems(): Collection { return new Collection("loom_material_items"); }

    /**
     * loom_result_items: ???
     */
    public static function loomResultItems(): Collection { return new Collection("loom_result_items"); }

    /**
     * patterns: ???
     */
    public static function patterns(): Collection { return new Collection("patterns"); }
    // Smithing Table (ui/smithing_table_screen.json)

    /**
     * smithing_table_input_items: ???
     */
    public static function smithingTableInputItems(): Collection { return new Collection("smithing_table_input_items"); }

    /**
     * smithing_table_material_items: ???
     */
    public static function smithingTableMaterialItems(): Collection { return new Collection("smithing_table_material_items"); }

    /**
     * smithing_table_result_items: ???
     */
    public static function smithingTableResultItems(): Collection { return new Collection("smithing_table_result_items"); }
    // Stonecutter (ui/stonecutter_screen.json)

    /**
     * stonecutter_input_items: ???
     */
    public static function stonecutterInputItems(): Collection { return new Collection("stonecutter_input_items"); }

    /**
     * stonecutter_result_items: ???
     */
    public static function stonecutterResultItems(): Collection { return new Collection("stonecutter_result_items"); }

    /**
     * stones: ???
     */
    public static function stones(): Collection { return new Collection("stones"); }
    // Villager Trade 2 (ui/trade_2_screen.json)

    /**
     * trade2_ingredient1_item: ???
     */
    public static function trade2Ingredient1Item(): Collection { return new Collection("trade2_ingredient1_item"); }

    /**
     * trade2_ingredient2_item: ???
     */
    public static function trade2Ingredient2Item(): Collection { return new Collection("trade2_ingredient2_item"); }

    /**
     * trade2_result_item: ???
     */
    public static function trade2ResultItem(): Collection { return new Collection("trade2_result_item"); }

    /**
     * trade_item_1: ???
     */
    public static function tradeItem1(): Collection { return new Collection("trade_item_1"); }

    /**
     * trade_item_2: ???
     */
    public static function tradeItem2(): Collection { return new Collection("trade_item_2"); }

    /**
     * sell_item: ???
     */
    public static function sellItem(): Collection { return new Collection("sell_item"); }

    /**
     * trades: ???
     */
    public static function trades(): Collection { return new Collection("trades"); }

    /**
     * trade_tiers: ???
     */
    public static function tradeTiers(): Collection { return new Collection("trade_tiers"); }
}