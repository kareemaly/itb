<div id="block11">
    @if($image = $product->getImage('main'))
    <a href="{{ URL::product($product) }}">{{ $image->html(115, 115) }}</a>
    @endif
    <span class="salarynamber">{{ $product->getActualPrice()->format() }}</span>
    <span class="infotext">{{ $product->title }}</span>
</div>