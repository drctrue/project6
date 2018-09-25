<div class="wrapper">
  <img id="elephant" src="/html/images/baby_elephant.gif" title="image" style="display: inline-block; position: relative;">
</div>
<style>
  #elephant.reverted {
    transform: scale(-1, 1);
  }
</style>
<script>
    const image = document.querySelector('#elephant');

    const image_width = image.offsetWidth;
    const wrapper_width = document.querySelector('.wrapper').offsetWidth;

    const offset_max = wrapper_width - image_width;

    let position = image.style.left ? image.style.left : 0;

    const fps = 60;
    const duration = 2;
    const refresh = 1000 / fps;

    let step = (offset_max / fps) / duration;

    window.setInterval(function() {
        position = position + step;
        if (position >= offset_max || position <= 0) {
            step *= -1;
            image.classList.toggle('reverted')
            console.log(new Date().getSeconds())
        }
        image.style.left = position + 'px';
    }, refresh);
</script>
