<template>
	<div id="carousel">
		<b-carousel
			id="carousel-1"
			v-model="slide"
			:interval="4000"
			
			background="white"
			img-width="1024"
			img-height="1480"
			@sliding-start="onSlideStart"
			@sliding-end="onSlideEnd">
			<!-- Slides with image only h -->
			<b-carousel-slide :id="0" img-src="/img/white.png"></b-carousel-slide>
			<b-carousel-slide :id="1" img-src="/img/IMG_BEC93D63D2A3-1.jpeg"></b-carousel-slide>
		</b-carousel>
	</div>
</template>

<script>
	export default {
		name: "aboutComponent",
		data() {
			return {
				slide: 0,
				sliding: null,
				id:0
			};
		},
		methods: {
			onSlideStart(slide) {
				this.sliding = true;
			},
			onSlideEnd(slide) {
				this.sliding = false;
			}
		}
	};
</script>
<style scoped>
#carousel{
	max-height: 500px;
	max-width:500px;
}

</style>