<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "home" => [
                "text"  => t("HEM"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Hem")
            ],

            "report" => [
                "text"  => t("REDOVISNING"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("ANALYS"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser"),
                "mark-if-parent" => true,
            ],

            "theme" => [
                "text"  => t("TEMAN"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman"),
                "mark-if-parent" => true,
            ],

            "grid" => [
                "text"  => t("GRID"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Grid layout")
            ],

            "typography" => [
                "text"  => t("TYPOGRAFI"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography layout")
            ],

            "images" => [
                "text"  => t("BILDER"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Bilder")
            ],

            "design-element" => [
                "text"  => t("D-EL"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Design elements")
            ],

            "design-principle" => [
                "text"  => t("D-PR"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Design principles")
            ],

            "blogg" => [
                "text"  => t("BLOG"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blog")
            ],

            "contact" => [
                "text"  => t("KONTAKT"),
                "url"   => $this->di->get("url")->create("contact"),
                "title" => t("Kontaktinformation")
            ],

            "about" => [
                "text"  => t("OM"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna websida")
            ],

            // "themeSelector" => [
            //     "text"  => t("TEMAVÄLJARE"),
            //     "url"   => $this->di->get("url")->create("theme-selector"),
            //     "title" => t("Theme selector")
            // ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "home" => [
                "text"  => t("HEM"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Hem")
            ],

            "report" => [
                "text"  => t("REDOVISNING"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("ANALYS"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser"),
                "mark-if-parent" => true,
            ],

            "theme" => [
                "text"  => t("TEMAN"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman"),
                "mark-if-parent" => true,
            ],

            "grid" => [
                "text"  => t("GRID"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Grid layout")
            ],

            "typography" => [
                "text"  => t("TYPOGRAPHY"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography layout")
            ],

            "images" => [
                "text"  => t("BILDER"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Bilder")
            ],

            "design-element" => [
                "text"  => t("DESIGNELEMENT"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Design elements")
            ],

            "design-principle" => [
                "text"  => t("DESIGNPRINCIPER"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Design principles")
            ],

            "blogg" => [
                "text"  => t("BLOG"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blog")
            ],

            "contact" => [
                "text"  => t("KONTAKT"),
                "url"   => $this->di->get("url")->create("contact"),
                "title" => t("Kontaktinformation")
            ],

            "about" => [
                "text"  => t("OM"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna websida")
            ],

            // "themeSelector" => [
            //     "text"  => t("TEMAVÄLJARE"),
            //     "url"   => $this->di->get("url")->create("theme-selector"),
            //     "title" => t("Theme selector")
            // ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
