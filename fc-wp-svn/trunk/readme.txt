=== Plugin Name ===
Plugin Name: FusionCharts for Wordpress
Plugin URI: http://wordpress.org/plugins/fc-wp/
Tags: wp, chart, javascript, php, json, data visualization
Author: Sahasrangshu Guha
Author URI: https://github.com/sguha-work/
Contributors: Sahasrangshu Guha, Uttam Thapa
Contributor URI: https://github.com/ukthapa/
Requires at least: 2.3
Tested up to: 4.0
Stable tag: 0.2
Version: 0.2 
License: GPLv3


== Description ==
	Fusioncharts For Wordpress,This plugin helps you to embed cool JavaScript charts inside your page or post. For charting it use Fusioncharts,The
	leading JavaScript data viz solution available in market. Inside edit page of any page and post you will find a button
	clicking on which you will have a form to fill up which is basically settings for Fusioncharts. Fill up the form and
	then preview it before embed. If the chart need changes then you may again go back to settings and review the settings.
	After everything looks good you will get the total JavaScript code to embed FusionChart. Copy the code and paste it 
	inside the text view of page/post where you wish to see Fusioncharts. Update the page/post and publish it to see data
	in delighted form.

== Installation ==
1. Upload the folder 'fc-wp' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress, this plugin should be named as "Fusioncharts For Wordpress"
3. Inside any page/post's edit page you will see a button named "Create FusionChart for this Page/Post"

== Usage guide ==
	* After installing the plugin you have to activate the plugin by moving on to the plugins page of wp-admin and clicking on activate of "Fusioncharts For Wordpress" plugin
	* After activating it you will found "Create FusionChart for this Page/Post" button on every edit post/page page of Wordpress admin panel like screenshot 1
	* Clicking on the button will open a FusionChart settings form like screenshot 2, You have to fill up the form with desired values. All form element contains default values, Event there is sample JSON data which can be used to populate basic charts for more example on FusionCharts visit "http://www.fusioncharts.com/charts/"
	* After the form is filled up you may preview the chart as shown in screenshot 3. If any more changes needed you may go back to settings page or you may go to next step to embed the chart.
		* If there is any error in chart data the chart will not be populated
	* In the last step you will found a text area having raw html and JavaScript code like screenshot 4, you have to copy the entire code and then go to text mode editor of the page & post and paste the code where you like to see FusionChart.
	* Update the page/post and see interactive JavaScript charts in your page/post
== Upgrade Notice ==
	= 0.2 =
		This version is based on FusionCharts v3.8.0, we will update the plugin as New version of FusionChart released and/or
		bug fix and improvement of the plugin itself

== Screenshots ==
1. Here is the button on the top right side of the edit page of a Wordpress page to start
2. Here is how the chart settings form looks like
3. Here is the preview of the chart
4. Here is the embed chart section along with the code
5. Here is the sample page with Fusionchart

== Upcoming features ==
1. Chart type specific example data both XML and JSON
2. Improvement in the UI

== Changelog ==
v0.2
	1. Added the feature to have data from JSON/XML url.

== Frequently Asked Questions ==
	= What about FusionChart? =
	Well you may just put the query in Google. :) Please visit http://www.fusioncharts.com/ to know the awesome
	= Can I use a paid version of FusionChart with this product? =
	Well obviously you can, you just have to unzip all the files got from purchased product inside "wp-content/plugins/fc-wp/assets/fc-assets/" folder replacing the existing files
== Donations ==
	Well this product is free to use and always will be. Your support, suggestion to improve, issues reporting will be enough
	for us. To report issues please visit https://github.com/sguha-work/fc-wp/issues