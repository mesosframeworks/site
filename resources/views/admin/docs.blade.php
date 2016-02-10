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
		
		<pre class="syntax"><code class="language-json">{{ $content }}</code></pre>

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
		
		
		</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-6">
		
<pre class="syntax">
	
<code class="language-json">
"SECTION_ID" : {
	"type" : "text", // This is mandatory
	"title" : "SECTION_TITLE",
	"background" : "BACKGROUND_COLOR",
	"color" : "white", // Or black
	"slides" : [
		{
			"slide" : "IMAGE_ROUTE",
			"caption" : "IMAGE_CAPTION"
		}
	]	
},
</code>
</pre>

	</div>
	
	<div class="columns small-12 medium-6">
		
<pre class="example">
	
<code class="language-json">
"infographic" : {
	"type" : "slideshow",
	"background" : "#FFFFFF",
	"color" : "black",
	"slides" : [
		{
			"slide" : "picture01.png",
			"caption" : "&lt;b&gt;STEP 1.&lt;/b&gt; You can use HTML here."
		},
		{
			"slide" : "pi02a.png",
			"caption" : "&lt;b&gt;STEP 2a.&lt;/b&gt; Another caption."
		}
	]
},
</code>
</pre>	
	</div>
</div>

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
		
		<h4>List</h4>
		
		</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-6">
		
<pre class="syntax">
	
<code class="language-json">
"SECTION_ID" : {
	"type" : "list",
	"title" : "SECTION_TITLE",
	"background" : "SECTION_BACKGROUND",
	"color" : "white", // Or black
	
	"items" : [
	
		{
			"title" : "ITEM_TITLE",
			"content" : "ITEM_CONTENT",
			"icon" : "ITEM_ICON"
		}
	]
}
</code>
</pre>

	</div>
	
	<div class="columns small-12 medium-6">
		
<pre class="example">
	
<code class="language-json">

</code>
</pre>	

	</div>
</div>

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
				
		<h3>Same page links</h3>
		
		<p>When adding links you can also make the site scroll to a given section. You just need to specify the <code>"type" : "internal"</code> and just pass the ID of an existing section to the <code>"url" : "#SECTION_ID"</code></p>
		
		<p>This technique can be used in text and footer sections.</p>
		
	</div></div>
<div class="row">

<div class="columns small-12">

<pre class="example expand">

<code class="language-json">

"links" : [
	{
		"text" : "Scroll to Features section",
		"url" : "#features",
		"target" : "",
		"type" : "internal"
	}
]	

</code>
</pre>

</div>
</div>
		
	<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">	
		
		<h3>Adding images</h3>
		
		<p>When you reference a file inside a list of features or a slideshow, you make all the paths relative to the <code>theme.json</code> file. You can create other directories, as long as you include them when referencing a file.</p>
		
		<p>If for instance you want to keep some set of pictures for a slideshow in a different directory, like this:</p>
		
		<p><img src="{!! URL::asset('static/admin/docs/files_01.png') !!}"></p>
		
		<p>You have to be sure that you added the full relative path to the json object:</p>
	
	</div>

</div>

<div class="row">

	<div class="columns small-12">
		
		<pre class="example expand">
	
<code class="language-json">
"slides" : [
	{
		"slide" : "infographic-slider/01.png",
		"caption" : "&lt;b&gt;STEP 1.&lt;/b&gt;Mesos cluster."
	},
	{
		"slide" : "infographic-slider/02a.png",
		"caption" : "&lt;b&gt;STEP 2a.&lt;/b&gt;ES framework scheduler."
	},
	{
		"slide" : "infographic-slider/02b.png",
		"caption" : "&lt;b&gt;STEP 2b.&lt;/b&gt;Scheduler receives."
	},
	{
		"slide" : "infographic-slider/03.png",
		"caption" : "&lt;b&gt;STEP 3.&lt;/b&gt;Once ES scheduler."
	},
	{
		"slide" : "infographic-slider/04.png",
		"caption" : "&lt;b&gt;STEP 4.&lt;/b&gt;ES nodes discovery."
	},
	{
		"slide" : "infographic-slider/05.png",
		"caption" : "&lt;b&gt;STEP 5.&lt;/b&gt;The ES nodes."
	}
]				
				
</code>
</pre>
		
	</div>
</div>

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
		
		<h3>Example</h3>
		
		<p>This example belongs to the Elastic Search framework minisite. Other examples can be found by downloading the site on the <a href="{{ url('/admin/') }}">main admin page</a>.</p>
		
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