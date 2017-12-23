# Brain Dump

## Basic outline

- Easy discovery and search of smartapps
- Entities:
    + Manufacturers
    + Devices
    + SmartApps
    + Drivers (Device Handler)
    + Tutorials
    + Users
    + Tags
    + Ratings
    + Comments
- Question: how do we handle:
    + Updates over time
    + Screenshots
    + Blog posts
    + Discourse-style comment threads
    + FAQ?

## More user stories
- "give me a list of all the SmartThings-compatible plugs"
- "let me host (or find) a tutorial about some SmartThings connected thing on a Raspberry Pi"


## Device Handler

- FK: User (Author)
- Title (?)
- FK: Device
- One to many: Snippets
    + Gist URL
    + Descriptive text
    + (type -- at least could be device handler, firmware, child device handler... is this really gropuable or is this just a title/nickname?)
    + VERSIONING. 
- Blog post (?) ... with images... ?
- Discourse

## Device
- hasMany pictures
- primary picture
- model(s)
- type
- capabilities
- "device type author" (?)
- details/information/something.. basically the body from thingsthataresmart wiki
- is officially supported? boolean
- probably the ability to group devices? e.g. http://thingsthataresmart.wiki/index.php?title=TP-Link_Plugs_and_Bulbs

Next steps:
- [x] Add manufacturers and devices
- [x] Fix URL structure
- [x] Add slugs to all and update URLs to use slugs
- [ ] Make it possible for users to add their own
- [ ] Make it possible for admins to curate manual additions
- [ ] Make a simple id-based route for all entities so we don't always have to be building these crazy URL structures
- [ ] Write tests
- [ ] Install Scout and use it for search
- [ ] Add snippets
- [ ] Add tags
- [ ] Add smart apps
- [ ] Design
- [ ] Consider dropping "manufacturers" from URL?
- [ ] See if we can simplify the cost of linking to handlers when they have to look up both their device and their manufacturer to link to themselves
- [ ] Consider a non-auto-incrementing handler ID for urls
