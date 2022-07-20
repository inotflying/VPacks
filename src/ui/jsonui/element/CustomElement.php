<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\CustomRenderProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;

/**
 * Special renderer element that is created in the code because it's too complex for JSON UI
 */
class CustomElement extends Element {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#renderers

    public const HOVER_TEXT_RENDERER = 'hover_text_renderer'; // Draws a tooltip
    public const _3D_STRUCTURE_RENDERER = '3d_structure_renderer'; // Renders the structure block structure
    public const SPLASH_TEXT_RENDERER = 'splash_text_renderer'; // Gets and renders a random splash text from the splashes.json file
    public const UI_HOLO_CURSOR = 'ui_holo_cursor'; // ???
    public const TRIAL_TIME_RENDERER = 'trial_time_renderer'; // In the trial version of the game it renders the time left to be able to use the world
    public const PANORAMA_RENDERER = 'panorama_renderer'; // It's not the panoramas that appear behind the menus. It's the panorama of the worlds on the store.
    public const ACTOR_PORTRAIT_RENDERER = 'actor_portrait_renderer'; // Draws an portrait
    public const BANNER_PATTERN_RENDERER = 'banner_pattern_renderer'; // Renders a banner
    public const LIVE_PLAYER_RENDERER = 'live_player_renderer'; // The player model
    public const WEB_VIEW_RENDERER = 'web_view_renderer'; // Shows a website view
    public const HUNGER_RENDERER = 'hunger_renderer'; // Draws the player hunger
    public const BUBBLES_RENDERER = 'bubbles_renderer'; // Draws the respiration bubbles
    public const MOB_EFFECTS_RENDERER = 'mob_effects_renderer'; // Draws the effects that are applied to the player
    public const CURSOR_RENDERER = 'cursor_renderer'; // Draws the crosshair in the center of the screen
    public const PROGRESS_INDICATOR_RENDERER = 'progress_indicator_renderer'; // Not used
    public const CAMERA_RENDERER = 'camera_renderer'; // Used for the camera item
    public const HORSE_JUMP_RENDERER = 'horse_jump_renderer'; // Draws the horse jumping progress bar
    public const ARMOR_RENDERER = 'armor_renderer'; // Draws the player armor
    public const HORSE_HEART_RENDERER = 'horse_heart_renderer'; // Draws the horse/donkey/... health
    public const HEART_RENDERER = 'heart_renderer'; // Draws the player health
    public const HOTBAR_COOLDOWN_RENDERER = 'hotbar_cooldown_renderer'; // Draws the item cooldown
    public const HOTBAR_RENDERER = 'hotbar_renderer'; // Gets the hotbar slot image for each slot
    public const HUD_PLAYER_RENDERER = 'hud_player_renderer'; // The player model that imitates what the player is doing
    public const LIVE_HORSE_RENDERER = 'live_horse_renderer'; // The horse/donkey/llama... model
    public const HOLOGRAPHIC_POSTRENDERER = 'holographic_postrenderer'; // ???
    public const ENCHANTING_BOOK_RENDERER = 'enchanting_book_renderer'; // The enchantment table book. It opens when there's an item to be enchanted
    public const DEBUG_SCREEN_RENDERER = 'debug_screen_renderer'; // The debug text that appears on the beta/preview versions
    public const GRADIENT_RENDERER = 'gradient_renderer'; // Draws a gradient
    public const PAPER_DOLL_RENDERER = 'paper_doll_renderer'; // A skin model
    public const NAME_TAG_RENDERER = 'name_tag_renderer'; // It's something like the playername above the player head or the name above animals when used a nametag on them
    public const FLYING_ITEM_RENDERER = 'flying_item_renderer'; // The flying item when you change an item from a slot to another
    public const INVENTORY_ITEM_RENDERER = 'inventory_item_renderer'; // Renders an item icon. It only work in screens when ingame
    public const CREDITS_RENDERER = 'credits_renderer'; // The credits and end poem
    public const VIGNETTE_RENDERER = 'vignette_renderer'; // A vignette
    public const PROGRESS_BAR_RENDERER = 'progress_bar_renderer'; // Draws a progress bar. It has more than one type
    public const DEBUG_OVERLAY_RENDERER = 'debug_overlay_renderer'; // ???
    public const BACKGROUND_RENDERER = 'background_renderer'; // ???
    public const BOHR_MODEL_RENDERER = 'bohr_model_renderer'; // ???


    use CustomRenderProperties;
    use DataBindingProperties;

    protected string $type = "custom";
}