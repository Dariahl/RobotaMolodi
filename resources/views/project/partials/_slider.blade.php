<div class="slider-wrapper">
  <div class="slider-capacity">
    {!! Html::image(asset($project->logo), $project->name, ['style' => 'width:230px; height:75px']) !!}
    <p>{{ $project['company_desc'] }}</p>
  </div>
  <div class="slider">
        <img src="/image/layer21.jpg" class="slider-item" alt="slider">
        <img src="/image/layer20.jpg" class="slider-item" alt="slider">
        <img src="/image/layer22.jpg" class="slider-item" alt="slider">
  </div>
</div>
{!!Html::script('js/slick/slick.min.js')!!}
<script type="text/javascript">
  $(document).ready(function(){
    $('.slider').slick({
        dots: true,
        infinite: true,
        prevArrow: '<img src="/image/arrl.png" class="slick-prev" alt="Prev">',
        nextArrow: '<img src="/image/arrr.png" class="slick-next" alt="Next">'
    });
  });
</script>
