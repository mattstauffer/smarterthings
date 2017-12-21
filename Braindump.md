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
    + Ratings
    + Comments
- Question: how do we handle:
    + Updates over time
    + Screenshots
    + Blog posts
    + Discourse-style comment threads


## Device Handler

- FK: User (Author)
- Title (?)
- FK: Device
- One to many: Snippets
    + Gist URL
    + Descriptive text
    + (type)
- Blog post (?) ... with images... ?
- Discourse


## Simplest use case:

Matt sees Wes' tweet about Sonoff;
Visits smarterthings.co
Types "Sonoff" into a search
Sees a Sonoff Device Handler in the results

Have to build to make the simplest use case:
- Model/migration for device handlers
- Basic search
- Device handler show page