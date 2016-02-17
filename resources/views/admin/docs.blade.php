@extends('admin.app')

@section('content')

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">

		<h1>Documentation</h1>
		
		<hr>
		
		<h2>Downloads</h2>

		<ul>
			
			<li><a href="{!! URL::asset('static/admin/docs/sample.zip') !!}" target="_blank">Sample site <small>ZIP</small></a></li>
			<li><a href="{!! URL::asset('static/admin/docs/whereiseverything.pdf') !!}" target="_blank">Where is Everything <small>PDF</small></a></li>
			
		</ul>
		
		<hr>

		<h2>Adding a site</h2>
		
		
		
		<p>The site info can be added as a json object along with some other files, usually images. Before you start adding sites, make sure that you <a href="https://www.codecademy.com/es/courses/javascript-beginner-en-xTAfX/0/1" target="_blank">get familiar with json syntax</a>. A valid site must contain at least this two files: <code>theme.json</code> and <code>logo.svg</code> files.</p>
		
		<p><img src="{!! URL::asset('static/admin/docs/structure_01.png') !!}"></p>
		
		<p>The name of the parent folder is the ID of the site. This ID must be a alphanumeric string with no spaces. Every site has it's own unique ID.</p>
		
		<p>To add a site just upload a zip file with your theme.json and logo.svg files. If the folder is named <em>elasticsearch</em> the zip file containing the site must be called <em>elasticsearch.zip</em>. To update a site just add a package with an already existing ID.</p>
		
		<hr>
		
		<h2>Create a theme.json file</h2>
				
		<p>On the first level, we define general the contents of the header and footer along with other configuration values.</p>
		
	</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-6">
		
		<pre class="syntax"><code class="language-json">{{ $syntax01 }}</code></pre>

	</div>
	
	<div class="columns small-12 medium-6">
		
		<pre class="example"><code class="language-json">{{ $example01 }}</code></pre>		
		
	</div>
	
</div>
		
<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
		
		<p>We have to include all referenced files in the package. For the example, we include both svg logos:</p>
				
		<p><img src="{!! URL::asset('static/admin/docs/structure_02.png') !!}"></p>		
			
		<h3>Sections</h3>	
		
		<p>We can add four types of sections: a text block, a slideshow, a video or a list of features.</p>
				
		<h4>Text</h4>
		
		<p><code>SECTION_ID</code> must be unique. You can use the same ID on different sites, but not on the same site. The section id bust be a single alphanumeric string with no spaces and it's only used internally.</p>
		
		<p>You can use a <code>background</code> color (CSS compatible) or an attached image. The <code>color</code> can be <code>white</code> or <code>black</code>.</p>
		
	</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-6">
		
		<pre class="syntax"><code class="language-json">{{ $syntax02 }}</code></pre>

	</div>
	
	<div class="columns small-12 medium-6">
		
		<pre class="example"><code class="language-json">{{ $example02 }}</code></pre>		
		
	</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
		
		<h4>Slideshow</h4>
		
	</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-6">
		
		<pre class="syntax"><code class="language-json">{{ $syntax03 }}</code></pre>

	</div>
	
	<div class="columns small-12 medium-6">
		
		<pre class="example"><code class="language-json">{{ $example03 }}</code></pre>	
	</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
		
		<h4>Video</h4>
		
	</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-6">
		
		<pre class="syntax"><code class="language-json">{{ $syntax07 }}</code></pre>

	</div>
	
	<div class="columns small-12 medium-6">
		
		<pre class="example"><code class="language-json">{{ $example07 }}</code></pre>	

	</div>
</div>

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
		
		<h4>List</h4>
		
	</div>
	
</div>

<div class="row">

	<div class="columns small-12 medium-6">
		
		<pre class="syntax"><code class="language-json">{{ $syntax04 }}</code></pre>

	</div>
	
	<div class="columns small-12 medium-6">
		
		<pre class="example"><code class="language-json">{{ $example04 }}</code></pre>	

	</div>
</div>

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">
				
		<h3>Same page links</h3>
		
		<p>When adding links you can also make the site scroll to a given section. You just need to specify the <code>"type" : "internal"</code> and just pass the ID of an existing section to the <code>"url" : "#SECTION_ID"</code></p>
		
		<p>This technique can be used in text and footer sections.</p>
		
	</div>
	
</div>

<div class="row">

	<div class="columns small-12">

		<pre class="example expand"><code class="language-json">{{ $example05 }}</code></pre>

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
		
		<pre class="example expand"><code class="language-json">{{ $example06 }}</code></pre>
		
	</div>
	
</div>

@endsection