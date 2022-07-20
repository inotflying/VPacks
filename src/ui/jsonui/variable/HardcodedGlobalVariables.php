<?php

namespace vezdehod\packs\ui\jsonui\variable;

class HardcodedGlobalVariables {
    //https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#global-variables

    /**
     * store_disabled: ???
     */
    public static function storeDisabled(): Variable { return new Variable("store_disabled"); }

    /**
     * game_pad: There's a controller connected to the device
     */
    public static function gamePad(): Variable { return new Variable("game_pad"); }

    /**
     * mouse: There's a mouse connected to the device
     */
    public static function mouse(): Variable { return new Variable("mouse"); }

    /**
     * touch: ???
     */
    public static function touch(): Variable { return new Variable("touch"); }

    /**
     * trial: It's in the trial version of the game
     */
    public static function trial(): Variable { return new Variable("trial"); }

    /**
     * build_platform_UWP: ???
     */
    public static function buildPlatformUWP(): Variable { return new Variable("build_platform_UWP"); }

    /**
     * win10_edition: ???
     */
    public static function win10Edition(): Variable { return new Variable("win10_edition"); }

    /**
     * ignore_add_servers: ???
     */
    public static function ignoreAddServers(): Variable { return new Variable("ignore_add_servers"); }

    /**
     * disable_gamertag_controls: ???
     */
    public static function disableGamertagControls(): Variable { return new Variable("disable_gamertag_controls"); }

    /**
     * console_edition: ???
     */
    public static function consoleEdition(): Variable { return new Variable("console_edition"); }

    /**
     * osx_edition: ???
     */
    public static function osxEdition(): Variable { return new Variable("osx_edition"); }

    /**
     * pocket_edition: ???
     */
    public static function pocketEdition(): Variable { return new Variable("pocket_edition"); }

    /**
     * education_edition: ???
     */
    public static function educationEdition(): Variable { return new Variable("education_edition"); }

    /**
     * world_archive_support: ???
     */
    public static function worldArchiveSupport(): Variable { return new Variable("world_archive_support"); }

    /**
     * file_picking_supported: ???
     */
    public static function filePickingSupported(): Variable { return new Variable("file_picking_supported"); }

    /**
     * desktop_screen: If the classic UI is selected
     */
    public static function desktopScreen(): Variable { return new Variable("desktop_screen"); }

    /**
     * pocket_screen: If the pocket UI is selected
     */
    public static function pocketScreen(): Variable { return new Variable("pocket_screen"); }

    /**
     * is_holographic: ???
     */
    public static function isHolographic(): Variable { return new Variable("is_holographic"); }

    /**
     * gear_vr: ???
     */
    public static function gearVr(): Variable { return new Variable("gear_vr"); }

    /**
     * oculus_rift: ???
     */
    public static function oculusRift(): Variable { return new Variable("oculus_rift"); }

    /**
     * is_living_room_mode: ???
     */
    public static function isLivingRoomMode(): Variable { return new Variable("is_living_room_mode"); }

    /**
     * is_reality_mode: ???
     */
    public static function isRealityMode(): Variable { return new Variable("is_reality_mode"); }

    /**
     * realms_beta: ???
     */
    public static function realmsBeta(): Variable { return new Variable("realms_beta"); }

    /**
     * fire_tv: ???
     */
    public static function fireTv(): Variable { return new Variable("fire_tv"); }

    /**
     * is_ios: ???
     */
    public static function isIos(): Variable { return new Variable("is_ios"); }

    /**
     * apple_tv: ???
     */
    public static function appleTv(): Variable { return new Variable("apple_tv"); }

    /**
     * is_windows_10_mobile: ???
     */
    public static function isWindows10Mobile(): Variable { return new Variable("is_windows_10_mobile"); }

    /**
     * image_picking_not_supported: ???
     */
    public static function imagePickingNotSupported(): Variable { return new Variable("image_picking_not_supported"); }

    /**
     * pre_release: ???
     */
    public static function preRelease(): Variable { return new Variable("pre_release"); }

    /**
     * ios: ???
     */
    public static function ios(): Variable { return new Variable("ios"); }

    /**
     * is_console: ???
     */
    public static function isConsole(): Variable { return new Variable("is_console"); }

    /**
     * can_quit: ???
     */
    public static function canQuit(): Variable { return new Variable("can_quit"); }

    /**
     * is_settopbox: ???
     */
    public static function isSettopbox(): Variable { return new Variable("is_settopbox"); }

    /**
     * microsoft_os: ???
     */
    public static function microsoftOs(): Variable { return new Variable("microsoft_os"); }

    /**
     * apple_os: ???
     */
    public static function appleOs(): Variable { return new Variable("apple_os"); }

    /**
     * google_os: ???
     */
    public static function googleOs(): Variable { return new Variable("google_os"); }

    /**
     * nx_os: ???
     */
    public static function nxOs(): Variable { return new Variable("nx_os"); }

    /**
     * horizontal_safezone_size: ???
     */
    public static function horizontalSafezoneSize(): Variable { return new Variable("horizontal_safezone_size"); }

    /**
     * vertical_safezone_size: ???
     */
    public static function verticalSafezoneSize(): Variable { return new Variable("vertical_safezone_size"); }

    /**
     * can_splitscreen: ???
     */
    public static function canSplitscreen(): Variable { return new Variable("can_splitscreen"); }

    /**
     * is_secondary_client: ???
     */
    public static function isSecondaryClient(): Variable { return new Variable("is_secondary_client"); }

    /**
     * multiplayer_requires_live_gold: ???
     */
    public static function multiplayerRequiresLiveGold(): Variable { return new Variable("multiplayer_requires_live_gold"); }

    /**
     * xbox_one: ???
     */
    public static function xboxOne(): Variable { return new Variable("xbox_one"); }

    /**
     * is_pregame: If it's a out-game screen. It's in-game when you are playing in a world, server or realms
     */
    public static function isPregame(): Variable { return new Variable("is_pregame"); }

    /**
     * is_win10_arm: ???
     */
    public static function isWin10Arm(): Variable { return new Variable("is_win10_arm"); }

    /**
     * vibration_supported: ???
     */
    public static function vibrationSupported(): Variable { return new Variable("vibration_supported"); }

    /**
     * is_mobile_vr: ???
     */
    public static function isMobileVr(): Variable { return new Variable("is_mobile_vr"); }

    /**
     * is_xboxlive_enabled: ???
     */
    public static function isXboxliveEnabled(): Variable { return new Variable("is_xboxlive_enabled"); }

    /**
     * device_must_be_removed_for_xbl_signin: ???
     */
    public static function deviceMustBeRemovedForXblSignin(): Variable { return new Variable("device_must_be_removed_for_xbl_signin"); }

    /**
     * is_publish: It's public and not a developer version
     */
    public static function isPublish(): Variable { return new Variable("is_publish"); }

    /**
     * is_desktop: ???
     */
    public static function isDesktop(): Variable { return new Variable("is_desktop"); }

    /**
     * is_ps4: ???
     */
    public static function isPs4(): Variable { return new Variable("is_ps4"); }

    /**
     * is_on_3p_server: ???
     */
    public static function isOn3pServer(): Variable { return new Variable("is_on_3p_server"); }

    /**
     * ignore_3rd_party_servers: ???
     */
    public static function ignore3rdPartyServers(): Variable { return new Variable("ignore_3rd_party_servers"); }

    /**
     * is_berwick: ???
     */
    public static function isBerwick(): Variable { return new Variable("is_berwick"); }
}