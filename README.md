# wordpress-my-setup
Setting up a new Wordpress-site does have some repeating parts. I share them here for personal use, but you may use it too.

### 01. Securityheaders

Check your website on securityheaders.com and tune your configuration to match at least the A-status.
In my case I add some headers in the .htaccess file.

### 02. Maintenance-page

You or your customer registered the domainname and the hosting-package. After some time reachable and showing the "parking-page" of the hosting-company. Just install Wordpress, put a nice image as "post-image" on the homepage and activate this theme. Now the page shows the image you can configure in Wordpress. Minimal. But enough for now.

### 03. Close your dev-site for peeking eyes and search-engines

You have the "real domain", but probably you are working on a copy on your own PC (ok), or on another server, which is "open for the Internet". You are taking the risk other people are looking at what you are doing, Google, Bing or other search-engines might find your site. Nothing worse than that your "development-sites" gets a higher ranking than the real website :scream So install and activate this plugin to block "others", only when you are logged in, you can view the site.

### 04. SPAM-bots, I drop all your POST-requests

Might be done easier in the .htaccess-file. But for now "good-enough". Remember, if you have the possibility to seach on the website or to add comments on the site, you have to disable this plug-in, otherwise that won't work.

### 05. Create your own-child theme

I made the mistake once that I took a theme and changed and updated it to my wishes. But then you have a "crippled" theme, because when the author publishes an update (e.g. fix or new features), you will probably use your changes or are unable to ever upgrade. Therefore you have to create a child-theme, which references the original theme.