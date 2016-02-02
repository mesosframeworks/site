@extends('admin.app')

@section('content')

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">

		<h1>Adding a site</h1>
		
		<hr>
		
		<h2>Site structure</h2>
		
		<p>A valid site must contain at least this two files: <code>theme.json</code> and <code>logo.svg</code> files.</p>
		
		<p><a href="https://www.codecademy.com/es/courses/javascript-beginner-en-xTAfX/0/1" target="_blank">Get familiar with json</a>.</p>
		
		<p><img src="{!! URL::asset('static/admin/docs/structure_01.png') !!}"></p>
		
		<p>The name of the parent folder is the id of the site. This id must be a alphanumeric string with no spaces. If the folder is named <em>elasticsearch</em> the zip file containing the site must be called <em>elasticsearch.zip</em>.</p>
		
		<p>Every site has it's own unique id. To update a site just add a package with an already existing id.</p>
		
		<h2><code>theme.json</code></h2>
				
		<p>On the first level, we define general the contents of the header and footer along with other configuration values.</p>
		
	</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-6">
		
<pre class="syntax">
	
<code class="language-json">
{
	"name" : "SITE_NAME",
	"claim" : "SITE_CLAIM",
	
	"github_link" : "URL_TO_GITHUB_REPOSITORY",
	
	"ga_tracking" : "GOOGLE_ANALYTICS_CODE",
	
	"sections" : {
		
	},
		
	"footer_links" : [
		{
			"text" : "LINK",
			"url" : "URL_LINK",
			"target" : "TARGET_LINK",
			"type" : "TYPE_LINK"
		}
	],
		
	"footer_logos" : [
		{
			"logo" : "LOGO_SVG",
			"text" : TEXT_LINK",
			"url" : "URL_LINK",
			"target" : "TARGET_LINK"
		}
	],
	
	"copyright" : "COPYRIGHT_OWNER"
}	
</code>
</pre>

	</div>
	
	<div class="columns small-12 medium-6">
		
<pre class="example">
	
<code class="language-json">
{
	"name" : "ElasticSearch",
	"claim" : "Scale your favorite Analytics Engine",
	
	"github_link" : "https://github.com/mesos/elasticsearch",
	
	"ga_tracking" : "UA-XXXXX-X",
	
	"sections" : {
		
	},
		
	"footer_links" : [
		{
			"text" : "Repository",
			"url" : "https://github.com/mesos/elasticsearch",
			"target" : ""
		},
		{
			"text" : "Contact",
			"url" : "mailto:mesos-es@container-solutions.com",
			"target" : "_blank"
		}
	],
		
	"footer_logos" : [
		{
			"logo" : "logo-cisco.svg",
			"text" : "Cisco Systems",
			"url" : "http://www.cisco.com/",
			"target" : "_blank"
		},
		{
			"logo" : "logo-container-solutions.svg",
			"text" : "Container Solutions",
			"url" : "http://container-solutions.com/",
			"target" : "_blank"
		}
	],
	
	"copyright" : "Container Solutions"
}	
</code>
</pre>		
		
	</div>
	
</div>
		

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
		
		<p>We have to include all referenced files in the package. For the example, we include both svg logos:</p>
				
		<p><img src="{!! URL::asset('static/admin/docs/structure_02.png') !!}"></p>		
			
		<h3>Sections</h3>	
		
		<p>We can add three types of sections: a text block, a slideshow or a list of features.</p>
				
		<h4>Text</h4>
		
		<p><code>SECTION_ID</code> must be unique. You can use the same ID on different sites, but not on the same site. The section id bust be a single alphanumeric string with no spaces and it's only used internally.</p>
		
		<p>You can use a <code>background</code> color (CSS compatible) or an attached image. The <code>color</code> can be <code>white</code> or <code>black</code>.</p>
		
	</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-6">
		
<pre class="syntax">
	
<code class="language-json">
"SECTION_ID" : {
	"type" : "text", // This is mandatory
	"title" : "SECTION_TITLE",
	"text" : "SECTION_CONTENT",
	"background" : "BACKGROUND_COLOR",
	"color" : "white", // Or black
	"links" : [
		{
			"text" : "LINK",
			"url" : "URL_LINK",
			"target" : "TARGET_LINK",
			"type" : "TYPE_LINK"
		}
	]		
},
</code>
</pre>

	</div>
	
	<div class="columns small-12 medium-6">
		
<pre class="example">
	
<code class="language-json">
"intro" : {
	"type" : "text", 
	"title" : "Description",
	"text" : "&lt;p&gt;The content. You can use html here.&lt;/p&gt;",
	"background" : "#1ab7e9",
	"color" : "white",
	"links" : [
		{
			"text" : "Features",
			"url" : "#features",
			"target" : "",
			"type" : "scroll"
		},
		{
			"text" : "Documentation",
			"url" : "http://github.com/mesos",
			"target" : "_blank"
		}
	]		
},
</code>
</pre>		
		
	</div>
	
</div>
		

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
		
		<h4>Slideshow</h4>
		
		<h4>List</h4>
		
		<p></p>
		
		<h3>Same page links</h3>
		
		<p></p>
		
		<h3></h3>
		
		<p></p>
		
		<h3></h3>
		
		<p></p>
		
		<h3></h3>
		
		<p></p>
		
		<h3></h3>
		
		<p></p>
		
		<h3></h3>
		
		<p></p>
		
	</div>
</div>
<div class="row">

	<div class="columns small-12">
		
		<pre class="example expand">
	
<code class="language-json">
{
	"name" : "ElasticSearch",
	"claim" : "Scale your favorite Analytics Engine",
	
	"github_link" : "https://github.com/mesos/elasticsearch",
	
	"ga_tracking" : "",
	
	"sections" : {
		
		"intro" : {
			"type" : "text",
			"title" : "Description",
			"text" : "&lt;p&gt;The content. You can use html here.&lt;/p&gt;",
			"background" : "#1ab7e9",
			"color" : "white",
			"links" : [
				{
					"text" : "Features",
					"url" : "#features",
					"target" : "",
					"type" : "scroll"
				},
				{
					"text" : "Documentation",
					"url" : "http://mesos-elasticsearch.readthedocs.org/en/latest/#getting-started",
					"target" : "_blank"
				}
			]		
		},
		
		"infographic" : {
			"type" : "slideshow",
			"background" : "#FFFFFF",
			"color" : "#000000",
			
			"slides" : [
				{
					"slide" : "infographic-slider/01.png",
					"caption" : "Marathon and Chronos frameworks already running."
				},
				{
					"slide" : "infographic-slider/02a.png",
					"caption" : "Number (3) of slaves to be launched."
				},
				{
					"slide" : "infographic-slider/02b.png",
					"caption" : "Peceives resource offers from Mesos."
				},
				{
					"slide" : "infographic-slider/03.png",
					"caption" : "It deploys executors together with ES nodes in containers to Mesos slaves."
				},
				{
					"slide" : "infographic-slider/04.png",
					"caption" : "ES nodes registers with Zookeeper. This allows the nodes to find each other."
				},
				{
					"slide" : "infographic-slider/05.png",
					"caption" : "Each other and form a cluster."
				}
			]
		},
		
		"features" : {
			"type" : "list",
			"title" : "features",
			"background" : "",
			"color" : "",
			
			"items" : [
			
				{
					"title" : "Cloud",
					"content" : "Runs on ​_any_​ hardware, cloud or on-premises (* minimum RAM requirements for ES process).",
					"icon" : "icon-cloud.svg"
				},
				{
					"title" : "Resilence",
					"content" : "Restarts failed tasks automatically.",
					"icon" : "icon-resilence.svg"
				},
				{
					"title" : "Discovery",
					"content" : "Discovery via Elasticsearch Zookeeper plugin.",
					"icon" : "icon-discovery.svg"
				},
				{
					"title" : "Scaling",
					"content" : "The framework can be scaled up and down horizontally.",
					"icon" : "icon-scaling.svg"
				},
				{
					"title" : "Runtime",
					"content" : "Run the framework as Java processes or Docker containers.",
					"icon" : "icon-runtime.svg"
				},
				{
					"title" : "User Interface",
					"content" : "Web user interface on scheduler port 31100.",
					"icon" : "icon-ui.svg"
				},
				{
					"title" : "api",
					"content" : "Access information of the UI via the API.",
					"icon" : "icon-api.svg"
				},
				{
					"title" : "Written in java",
					"content" : "The framework is implemented written in Java 8.",
					"icon" : "icon-java.svg"
				},
				{
					"title" : "Configurable",
					"content" : "Cluster settings such as dimensions, cluster name and Elasticsearch settings are configurable.",
					"icon" : "icon-configurable.svg"
				},
				{
					"title" : "Tested",
					"content" : "The major features of the framework are tested by minimesos system tests.",
					"icon" : "icon-tested.svg"
				},
				{
					"title" : "Free",
					"content" : "The framework is open source and free to use.",
					"icon" : "icon-free.svg"
				}
			]
		},
		
		"product" : {
			"type" : "slideshow",
			"background" : "#64d1ac",
			"color" : "#FFFFFF",
			
			"slides" : [
				{
					"slide" : "product-slider/01.png",
					"caption" : ""
				},
				{
					"slide" : "product-slider/02.png",
					"caption" : ""
				},
				{
					"slide" : "product-slider/03.png",
					"caption" : ""
				}
			]
		},
		
		"download" : {
			"type" : "text",
			"title" : "Download",
			"text" : "&lt;p&gt;VERSION 0.6.0 released 9.11.2015gi&lt;/p&gt;",
			"background" : "#1ab7e9",
			"color" : "white",
			
			"links" : [
				
				{
					"text" : "Roadmap",
					"url" : "http://mesos-elasticsearch.readthedocs.org/en/latest/#roadmap",
					"target" : "_blank"
				}
			]		
		}
	},
		
	"footer_links" : [
		{
			"text" : "Introduction",
			"url" : "http://mesos-elasticsearch.readthedocs.org/en/latest/",
			"target" : ""
		},
		{
			"text" : "Documentation",
			"url" : "http://mesos-elasticsearch.readthedocs.org/en/latest/#getting-started",
			"target" : ""
		},
		{
			"text" : "Roadmap",
			"url" : "http://mesos-elasticsearch.readthedocs.org/en/latest/#roadmap",
			"target" : ""
		},
		{
			"text" : "Repository",
			"url" : "https://github.com/mesos/elasticsearch",
			"target" : ""
		},
		{
			"text" : "Contact",
			"url" : "mailto:mesos-es@container-solutions.com",
			"target" : "_blank"
		}	
	],
		
	"footer_logos" : [
		{
			"logo" : "logo-cisco.svg",
			"text" : "Cisco Systems",
			"url" : "http://www.cisco.com/",
			"target" : "_blank"
		},
		{
			"logo" : "logo-container-solutions.svg",
			"text" : "Container Solutions",
			"url" : "http://container-solutions.com/",
			"target" : "_blank"
		}
	],
	
	"copyright" : "Container Solutions"
}	
</code>
</pre>
		
	</div>

</div>

@endsection