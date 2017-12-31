<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "base",
            "stylesheets" => [
                "css/base.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "default",
            "stylesheets" => [
                "css/default.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        // "separator01" => "------------------------------------------------",
        //
        // "vgrid"      => [
        //     "title"      => "Vertikalt grid",
        //     "class"      => "vgrid",
        //     "stylesheets" => [
        //         "css/vgrid.min.css"
        //     ]
        // ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/light.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
                "css/color.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
                "css/dark.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => [
                "css/colorful.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => [
                "css/typography.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                // "https://fonts.googleapis.com/css?family=Josefin+Slab|Raleway",
                "https://fonts.googleapis.com/css?family=Josefin+Slab|Fredericka+the+Great",
                "https://fonts.googleapis.com/css?family=Vollkorn+SC",
                "https://fonts.googleapis.com/css?family=Open+Sans"
            ]
        ],

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => [
                "css/fun.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Roboto+Condensed"
            ]
        ],

        "separator2" => "------------------------------------------------",

        "Element1"       => [
            "title"      => "Centered with structure and opacity",
            "class"      => "element1",
            "stylesheets" => [
                "css/element1.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                // "https://fonts.googleapis.com/css?family=Roboto+Condensed"
            ]
        ],


        "Element2"       => [
            "title"      => "Full width, lines borders and gradients",
            "class"      => "element2",
            "stylesheets" => [
                "css/element2.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Roboto+Condensed"
            ]
        ],


        "Element3"       => [
            "title"      => "Centered with background pictures",
            "class"      => "element3",
            "stylesheets" => [
                "css/element3.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Roboto+Condensed"
            ]
        ],


        "Principle1"       => [
            "title"      => "Design principle based on Contrasts",
            "class"      => "principle1",
            "stylesheets" => [
                "css/principle1.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Merriweather:700|Nunito+Sans"
            ]
        ],


        "Principle2"       => [
            "title"      => "Design principle based on Movement",
            "class"      => "principle2",
            "stylesheets" => [
                "css/principle2.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Roboto+Condensed"
            ]
        ],
    ]
];
