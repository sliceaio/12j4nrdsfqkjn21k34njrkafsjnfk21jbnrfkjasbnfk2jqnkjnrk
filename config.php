<?php
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\


// OTHER
// Song of your choice. If you don't want it, don't add it.
$youtubeMusicLink = "";

// Invite Link To Your Discord + If you don't want, go to index.php and delete line 21 to line 23.
$discord = "https://discord.gg/vA4GvRvWJj";
$discordimg = "assets/img/Discordic.png";

// META TAG SECTION
// Name of your site.
$Title ="SliceAIO";

// Site's logo.
$favicon ="https://i.imgur.com/wAHHmvE.png";

//Your URL
$Url = "SliceAIO.xyz";

// Limit of 150 words. Summarize your page's contents. Such as a description of your site.
$Description = "The best AIO.";

// NAVBAR Section
// If you want none just don't put anything here
// These are top right and link off page. They open a new browser window. The first one is the name such as "Home" and the second one is where it will link to.
$navbar = [
    [
        "item" => "Shop Link",
        "href" => "google.com",
    ],
    [
        "item" => "Discord",
        "href" => "https://discord.gg/vA4GvRvWJj",
    ]
];


// Site Content
// This is the "Title" of your site. Such as a little introduction.
$STitle = "SliceAIO";

// This is the Sub Title. Its a little slogan type thing under your title.
$SDesc = "The best AIO.";

// Site Buttons - usually used for Discord, Telegram and Shop Link
// First is the text of the button. Second is the link you want it to go to.
$btns = [
    [
        "Txt" => "Discord",
        "link" => "https://discord.gg/vA4GvRvWJj",
    ]
];

// Feature Section

$FTitle = "Aio Info";
$FDesc = "What you get from purchasing from us!";

// This is the features section, you can remove and add as many as you want. If you don't want any just remove everything inside.
$Features = [
    [
        "Icon" => "fas fa-users",
        "Title" => "Fast Support",
        "Desc" => "We have a reliable Support Team that want to make sure that our clients have the best experience!",
    ],
    [
        "Icon" => "far fa-star",
        "Title" => "Hq Modules",
        "Desc" => "We have a strong history of extremely satisfied clients who have come back costantly.",
    ],
    [
        "Icon" => "fas fa-dollar-sign",
        "Title" => "Cheap",
        "Desc" => "We believe in high quality at very affordable prices, making a product for all!",
    ],
    [
        "Icon" => "far fa-handshake",
        "Title" => "Reliable",
        "Desc" => "To make sure our clients are satisfied, we strive to be as reliable as possible!",
    ],
    [
        "Icon" => "fas fa-boxes",
        "Title" => "Trusted dev",
        "Desc" => "Ev3res#3333 is the best & trusted dev.",
    ],
    [
        "Icon" => "far fa-clock",
        "Title" => "Blazing CPM",
        "Desc" => "You will get the fastest speed!",
    ],
];

// Products
// Product Section Title
$PTitle = "Products";

// Product Section Description
$PDesc = "Get some juicy products and services off us!";

// The Actual Products.
// First is the Product Name. Second is the Product Description. Third is the Product ID can be found int he URL. Fourth is your product Image.
$Products = [
    [
        "Name" => "SliceAIO",
        "Desc" => "- Multichecking‎‎‎‎ ‎‎ ‎‎ ‎ ‎ ‎‎‎ ‎ ‎‎‎ ‎‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎- Very Fast ‎‎ ‎‎ ‎ ‎ ‎‎‎ ‎ ‎‎‎ ‎‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎  ‎  ‎  ‎  ‎  ‎  ‎  ‎  ‎  ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎- Discord Bot",
        "ID" => "5ff743416c0cb",
        "Image" => "https://i.imgur.com/wNVEqfw.png",
    ]
];

// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\

// IGNORE THIS SECTION \\

function embedMusic($path) {
    $result = preg_replace('/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/', '$5', $path);
    if (!empty($result) || !isset($result)) {
        echo "<iframe style=\"visibility: hidden;\"  src=\"https://www.youtube.com/embed/${result}?controls=0;autoplay=1\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}