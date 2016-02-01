<div class="row">
    <div class="columns small-12">
        <div class="inner @if ($index === 0) no-border @endif">
	        <div class="columns small-3 medium-2 medium-offset-1 text-right">
				<img src="uploads/sites/{{ $id }}/{{ $item->icon }}">
	        </div>
	        <div class="columns small-9 medium-8 end">
		        <h3 class="heading decoration line-below">{{ $item->title }}</h3>
		        <p>{{ $item->content }}</p>
	        </div>
        </div>
    </div>
</div>